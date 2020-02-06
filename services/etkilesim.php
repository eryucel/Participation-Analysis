<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/libs/config.php';
if(isset($_GET['id'])&&isset($_GET['key'])&&is_numeric($_GET['id'])){
    $nodemcu_id=$_GET['id'];
    $remote_key=$_GET['key'];
    
    $nodemcu=new Nodemcular();
    $nodemcu->SelectList($nodemcu_id,$remote_key);
    if(!empty($nodemcu)){
        $etkilesim=new Etkilesim();
        $res=$etkilesim->Update($nodemcu_id);
        if($res){
            echo '{"result":"success"}';
        }
        else{
            echo '{"result":"failed","reason":"An error occured while updating database."}';
        }
    }
    else{
        echo '{"result":"failed","reason":"Wrong nodemcu id or key."}';
    }
    
}
else{
    echo '{"result":"failed","reason":"Incompatible types or empty values."}';
}
