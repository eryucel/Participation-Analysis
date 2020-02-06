<?php
function getDersEtkilesim($profession){
    $bolum = $profession;
    $ders_katalog = new DersKatalog();
    $katalog_dersler = $ders_katalog->SelectList(0, '', '', 0, 0, 0, $bolum);
    $acilan_dersler = new AcilanDersler();
    $dersler = array();
    foreach ($katalog_dersler as $ders) {
        $temp = $acilan_dersler->SelectList(0, 0, $ders['id']);
        if (!empty($temp)) {
            foreach ($temp as $t)
                $dersler[] = $t;
        }
    }

    $ders_etkilesim = new DersEtkilesim();
    $etkilesim_dersler = array();
    foreach ($dersler as $ders) {
        $temp = $ders_etkilesim->SelectList(0, $ders['id']);
        foreach ($temp as $t) {
            $etkilesim_dersler[] = $t;
        }
    }
    $ret=appendLectureNameToOpened($etkilesim_dersler,$dersler,$katalog_dersler);
    return $ret;
}
function appendLectureNameToOpened($interactions=array(),$openedLessons=array(),$catalogLessons=array()){
    $temp=$interactions;
foreach ($interactions as $key=>$interaction) {
    foreach ($openedLessons as $openedLesson) {
        if ($interaction['acilan_ders'] == $openedLesson['id']) {

        foreach ($catalogLessons as $catalogLesson) {
            if ($catalogLesson['id'] == $openedLesson['ders']) {
                $temp[$key]['ders_adi'] = $catalogLesson['ders_adi'];
                $temp[$key]['ogrenci_sayisi'] = $openedLesson['ogrenci_sayisi'];
                $temp[$key]['sube'] = $openedLesson['sube'];
                $temp[$key]['ogretim_uyesi'] = $openedLesson['ogretim_uyesi'];
                $temp[$key]['saat'] = $openedLesson['saat'];
            }
        }
        }
    }
}
    return $temp;
}
function getTeacher($appenLectureNameToOpened=array()){
    $ogretimUyeleri=new OgretimUyeleri();
    $ogretimUyeleriSelected=$ogretimUyeleri->SelectList(0,"","","",$_SESSION['profession']);
    foreach ($ogretimUyeleriSelected as $key=>$ou){
        $ogretimUyeleriSelected[$key]["ogrenci_sayisi"]=0;
        $ogretimUyeleriSelected[$key]["etkilesim_sayisi"]=0;
        foreach ($appenLectureNameToOpened as $ant){
            if($ant['ogretim_uyesi']==$ou['id']){
                $ogretimUyeleriSelected[$key]["ogrenci_sayisi"]+=$ant['ogrenci_sayisi'];
                $ogretimUyeleriSelected[$key]["etkilesim_sayisi"]+=$ant['etkilesim_sayisi'];
            }
        }
    }
    return $ogretimUyeleriSelected;
}
function sortArrayByValue($array,$value,$direction='asc'){
   $array= array_values($array);
   $length=count($array);
    if($direction='asc'){
        for($i=0;$i<$length-1;$i++){
            for($j=$i+1;$j<$length;$j++){
                if($array[$j][$value]<$array[$i][$value]){
                    $temp=$array[$i];
                    $array[$i]=$array[$j];
                    $array[$j]=$temp;
                }
            }
        }
    }
    else if($direction='desc'){
        for($i=0;$i<$length-1;$i++){
            for($j=$i+1;$j<$length;$j++){
                if($array[$j][$value]>$array[$i][$value]){
                    $temp=$array[$i];
                    $array[$i]=$array[$j];
                    $array[$j]=$temp;
                }
            }
        }
    }
    return $array;
}
