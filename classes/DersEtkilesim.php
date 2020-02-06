<?php

class DersEtkilesim
{
    private $db;
    public function __construct(){
        global $MasterDb;
        $this->db=$MasterDb;
    }
    public function SelectList($id=0,$prm_acilan_ders=0,$prm_etkilesim_sayisi=0)
    {
        $array = array(
            ':prm_id'         => $id,
            ':prm_acilan_ders' => $prm_acilan_ders,
            ':prm_etkilesim_sayisi'    => $prm_etkilesim_sayisi
        );
        $sql = $this->db->CreateProcedureSql('DersEtkilesimSelectList', $array);

        $data = $this->db->GetFromTable($sql, $array);


        return $data;
    }


    public function Update($id=0,$prm_acilan_ders,$prm_etkilesim_sayisi)
    {

        $array = array(
            ':prm_id'         => $id,
            ':prm_acilan_ders' => $prm_acilan_ders,
            ':prm_etkilesim_sayisi'    => $prm_etkilesim_sayisi
        );

        $sql = $this->db->CreateProcedureSql('DersEtkilesimUpdate', $array);

        return $this->db->UpdateTable($sql, $array);

    }
}