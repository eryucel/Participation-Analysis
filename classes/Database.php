<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/libs/config.php';
class Database extends PDO
{
    public function __construct()
    {
        global $definitions;
        parent::__construct($definitions['database']['connectionString'], $definitions['database']['username'], $definitions['database']['password']);
    }

    public function GetFromTable($sql, $array = array())
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            if ($key[0] == '@')
                continue;
            $sth->bindValue($key, $value);
        }
        $sth->execute();
        $datas = $sth->fetchAll(PDO::FETCH_ASSOC);
        $e = $sth->errorInfo();
        $sth->closeCursor();

        return $datas;
    }

    public function AffectedRows($sql, $array = array())
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            if ($key[0] == '@')
                continue;
            $sth->bindValue($key, $value);
        }
        $sth->execute();
        $count = $sth->rowCount();

        return $count;
    }

    public function AddToTable($sql, $array = array())
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            if ($key[0] == '@')
                continue;
            if (!isset($value))
                $value = null;
            $sth->bindValue($key, $value);
        }
        $sth->execute();
        $count = $sth->rowCount();

        return $count;
    }

    public function AddDataToClassFromArray($class, $data)
    {
        if ($data) {
            foreach ($data as $key => $value) {
                if (property_exists($class, $key)) {
                    $class->{$key} = $value;
                }
            }
        }
    }

    public function CreateProcedureSql($procedureName, $array = array())
    {
       
        $firstControl = true;
        $sql = "CALL " . $procedureName . "( ";
        foreach (array_keys($array) as $arr) {
            if (!$firstControl) {
                $sql .= ', ';

            } else {
                $firstControl = false;
            }
            $sql .= $arr;
        }
        $sql .= " )";

        return $sql;
    }

    public function CreateFunctionSql($functionName, $array = array())
    {
        $firstControl = true;
        $sql = "Select " . $functionName . "( ";
        foreach (array_keys($array) as $arr) {
            if (!$firstControl) {
                $sql .= ', ';

            } else {
                $firstControl = false;
            }
            $sql .= $arr;
        }
        $sql .= " ) as result";

        return $sql;
    }

    public function UpdateTable($sql, $array = array())
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            if ($key[0] == '@')
                continue;
            if (!isset($value))
                $value = null;
            $sth->bindValue($key, $value);
        }

        $updateStatus = $sth->execute();
        if ($updateStatus) {
            return true;
        }

        if ($sth->errorCode() == '42S22') {
            return true;
        }

        return false;
    }
}