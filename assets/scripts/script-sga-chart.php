<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload = function () {
<?php
    $ders_etkilesim=sortArrayByValue(getDersEtkilesim($_SESSION['profession']),'saat');
    $onlyTimes=array();
    foreach($ders_etkilesim as $de){
        if(!isset($onlyTimes[$de['saat']])){
            $onlyTimes[$de['saat']]=array();
             $onlyTimes[$de['saat']]['etkilesim_sayisi']=0;
        }
        $onlyTimes[$de['saat']]['etkilesim_sayisi']+=$de['etkilesim_sayisi'];
    }
    ?>
    var obj1={
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title:{
            text: "Saatlere Göre"
        },
        axisY: {
            title: "Ders Etkileşim Sayıları"
        },
        data: [{
            type: "column",
            showInLegend: true,
            legendMarkerColor: "grey",
            legendText: "Saatler",
            dataPoints:[
                <?php
                foreach ($onlyTimes as $key=>$de)
                    echo '{ y: '.$de['etkilesim_sayisi'].', label: "'.$key.'" },';
                ?>
            ]
        }]
    };
    var obj2={
        animationEnabled: true,
        theme: "light2", // "light1", "light2", "dark1", "dark2"
        title:{
            text: "Saatlere Göre %"
        },
        axisY: {
            title: "Ders Etkileşim Oranları %"
        },
        data: [{
            type: "column",
            showInLegend: true,
            legendMarkerColor: "grey",
            legendText: "Saatler",
            dataPoints:[
                <?php
                    foreach ($onlyTimes as $key=>$de){
                        if($de)
                        echo '{ y: '.$de['etkilesim_sayisi'].', label: "'.$key.'" },';
                    }
                
                    ?>
            ]
        }]
    };

var chart1 = new CanvasJS.Chart("dersEtkilesimSayisiGrafik", obj1);
var chart2 = new CanvasJS.Chart("dersEtkilesimOraniGrafik", obj2);
chart1.render();
chart2.render();

}
</script>