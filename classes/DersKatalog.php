<?php

class DersKatalog
{
    private $db;
    public function __construct(){
        global $MasterDb;
        $this->db=$MasterDb;
    }
    public function SelectList($id=0,$prm_ders_adi='',$prm_ders_kodu='',$prm_akts=0,$prm_ogrenci_sayisi=0,$prm_sure=0,$prm_bolum=0)
    {
        $array = array(
            ':prm_id'         => $id,
            ':prm_ders_adi' => $prm_ders_adi,
            ':prm_ders_kodu'    => $prm_ders_kodu,
            ':prm_akts'    => $prm_akts,
            ':prm_ogrenci_sayisi'    => $prm_ogrenci_sayisi,
            ':prm_sure'    => $prm_sure,
            ':prm_bolum'    => $prm_bolum
        );
        $sql = $this->db->CreateProcedureSql('DersKatalogSelectList', $array);

        $data = $this->db->GetFromTable($sql, $array);


        return $data;
    }


    public function Update($id=0,$prm_ders_adi='',$prm_ders_kodu='',$prm_akts=0,$prm_ogrenci_sayisi=0,$prm_sure=0,$prm_bolum=0)
    {

         $array = array(
            ':prm_id'         => $id,
            ':prm_ders_adi' => $prm_ders_adi,
            ':prm_ders_kodu'    => $prm_ders_kodu,
            ':prm_akts'    => $prm_akts,
            ':prm_ogrenci_sayisi'    => $prm_ogrenci_sayisi,
            ':prm_sure'    => $prm_sure,
            ':prm_bolum'    => $prm_bolum
        );

        $sql = $this->db->CreateProcedureSql('DersKatalogUpdate', $array);

        return $this->db->UpdateTable($sql, $array);

    }

    public function Delete($id)
    {
        $this->db->query("DELETE FROM ders_katalog where id=".$id.";");
    }
}