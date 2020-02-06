<?php

class OgretimUyeleri
{
    private $db;
    public function __construct(){
        global $MasterDb;
        $this->db=$MasterDb;
    }
    public function SelectList($id=0,$ad="",$soyad="",$numara="",$bolum=0)
    {
        $array = array(
            ':prm_id'         => $id,
            ':prm_ad' => $ad,
            ':prm_soyad'    => $soyad,
            ':prm_numara'    => $numara,
            ':prm_bolum'    => $bolum
        );
        $sql = $this->db->CreateProcedureSql('OgretimUyeleriSelectList', $array);

        $data = $this->db->GetFromTable($sql, $array);

        return $data;
    }


    public function Update($id=0,$ad=0,$soyad=0,$numara="",$bolum=0)
    {

        $array = array(
            ':prm_id'         => $id,
            ':prm_ad' => $ad,
            ':prm_soyad'    => $soyad,
            ':prm_numara'    => $numara,
            ':prm_bolum'    => $bolum
        );
        $sql = $this->db->CreateProcedureSql('OgretimUyeleriUpdate', $array);

        return $this->db->UpdateTable($sql, $array);

    }


    public function Delete($id)
    {
        $this->db->query("DELETE FROM ogretim_uyeleri where id=".$id.";");
    }
}