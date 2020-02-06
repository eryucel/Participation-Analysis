<?php

class Uyeler
{
    private $db;
    public function __construct(){
        global $MasterDb;
        $this->db=$MasterDb;
    }
    public function SelectList($id=0,$email='',$sifre='')
    {
        $array = array(
            ':prm_id'         => $id,
            ':prm_email' => $email,
            ':prm_sifre'    => $sifre
        );
        $sql = $this->db->CreateProcedureSql('UyelerSelectList', $array);

        $data = $this->db->GetFromTable($sql, $array);


        return $data;
    }


    public function Update($id=0,$email,$sifre)
    {

        $array = array(
            ':prm_id'         => $id,
            ':prm_email' => $email,
            ':prm_sifre'    => $sifre
        );

        $sql = $this->db->CreateProcedureSql('UylelerUpdate', $array);

        return $this->db->UpdateTable($sql, $array);

    }
}