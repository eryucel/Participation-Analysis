<?php

class Etkilesim
{
    private $db;
    public function __construct(){
        global $MasterDb;
        $this->db=$MasterDb;
    }
    public function SelectList($id=0,$nodemcu=0,$time='0000-00-00 00:00:00')
    {
        $array = array(
            ':prm_id'         => $id,
            ':prm_nodemcu' => $nodemcu,
            ':prm_time'    => $time
        );
        $sql = $this->db->CreateProcedureSql('EtkilesimSelectList', $array);

        $data = $this->db->GetFromTable($sql, $array);


        return $data;
    }


    public function Update($nodemcu)
    {

        $array = array(
            ':prm_nodemcu'=> $nodemcu
        );

        $sql = $this->db->CreateProcedureSql('EtkilesimUpdate', $array);

        return $this->db->UpdateTable($sql, $array);

    }
}