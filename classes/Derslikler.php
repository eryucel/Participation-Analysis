<?php

class Derslikler
{
    private $db;
    public function __construct(){
        global $MasterDb;
        $this->db=$MasterDb;
    }
    public function SelectList($id=0,$no=0,$kapasite=0,$fakulte=0)
    {
        $array = array(
            ':prm_id'         => $id,
            ':prm_no' => $no,
            ':prm_kapasite'    => $kapasite,
            ':prm_fakulte'    => $fakulte
        );
        $sql = $this->db->CreateProcedureSql('DersliklerSelectList', $array);

        $data = $this->db->GetFromTable($sql, $array);

        return $data;
    }


    public function Update($id=0,$no=0,$kapasite=0,$fakulte=0)
    {

        $array = array(
            ':prm_id'         => $id,
            ':prm_no' => $no,
            ':prm_kapasite'    => $kapasite,
            ':prm_fakulte'    => $fakulte
        );
        $sql = $this->db->CreateProcedureSql('DersliklerUpdate', $array);

        return $this->db->UpdateTable($sql, $array);

    }
}