<?php

class Nodemcular
{
    private $db;
    public function __construct(){
        global $MasterDb;
        $this->db=$MasterDb;
    }
    public function SelectList($id=0,$prm_remote_key='')
    {
        $array = array(
            ':prm_id'         => $id,
            ':prm_remote_key' => $prm_remote_key
        );
        $sql = $this->db->CreateProcedureSql('NodemcularSelectList', $array);

        $data = $this->db->GetFromTable($sql, $array);


        return $data;
    }


    public function Update($id=0,$prm_remote_key='')
    {

        $array = array(
            ':prm_id'         => $id,
            ':prm_remote_key' => $prm_remote_key
        );

        $sql = $this->db->CreateProcedureSql('NodemcularUpdate', $array);

        $this->db->UpdateTable($sql, $array);

    }
}