<?php

class Bolumler
{
    private $db;
    public function __construct(){
        global $MasterDb;
        $this->db=$MasterDb;
    }
    public function SelectList($id=0,$fakulte=0,$baskan=0,$ad="")
    {
        $array = array(
            ':prm_id'         => $id,
            ':prm_fakulte' => $fakulte,
            ':prm_baskan'    => $baskan,
            ':prm_ad'    => $ad
        );
        $sql = $this->db->CreateProcedureSql('BolumlerSelectList', $array);

        $data = $this->db->GetFromTable($sql, $array);


        return $data;
    }


    public function Update($id=0,$fakulte=0,$baskan=0,$ad="")
    {

        $array = array(
            ':prm_id'         => $id,
            ':prm_fakulte' => $fakulte,
            ':prm_baskan'    => $baskan,
            ':prm_ad'    => $ad
        );
        $sql = $this->db->CreateProcedureSql('BolumlerUpdate', $array);

        return $this->db->UpdateTable($sql, $array);

    }
}