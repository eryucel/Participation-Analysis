<?php

class AcilanDersler
{
    private $db;
    public function __construct(){
        global $MasterDb;
        $this->db=$MasterDb;
    }
    public function SelectList($id=0,$prm_derslik=0,$prm_ders=0,$prm_sube=0,$prm_ogretim_uyesi=0,$prm_ogrenci_sayisi=0,$prm_gun=0,$prm_saat='00:00:00')
    {
        $array = array(
            ':prm_id'         => $id,
            ':prm_derslik' => $prm_derslik,
            ':prm_ders'    => $prm_ders,
            ':prm_sube'    => $prm_sube,
            ':prm_ogretim_uyesi'    => $prm_ogretim_uyesi,
            ':prm_ogrenci_sayisi'    => $prm_ogrenci_sayisi,
            ':prm_gun'    => $prm_gun,
            ':prm_saat'    => $prm_saat
        );
        $sql = $this->db->CreateProcedureSql('AcilanDerslerSelectList', $array);

        $data = $this->db->GetFromTable($sql, $array);


        return $data;
    }


    public function Update($id=0,$prm_derslik=0,$prm_ders=0,$prm_sube=0,$prm_ogretim_uyesi=0,$prm_ogrenci_sayisi=0,$prm_gun=0,$prm_saat='00:00:00')
    {

         $array = array(
            ':prm_id'         => $id,
            ':prm_derslik' => $prm_derslik,
            ':prm_ders'    => $prm_ders,
            ':prm_sube'    => $prm_sube,
            ':prm_ogretim_uyesi'    => $prm_ogretim_uyesi,
            ':prm_ogrenci_sayisi'    => $prm_ogrenci_sayisi,
            ':prm_gun'    => $prm_gun,
            ':prm_saat'    => $prm_saat
        );
        $sql = $this->db->CreateProcedureSql('AcilanDerslerUpdate', $array);

        return $this->db->UpdateTable($sql, $array);

    }

    public function Delete($id)
    {
        $this->db->query("DELETE FROM acilan_dersler where id=".$id.";");
    }
}