<script>
    $('#ogretimUyesiEkle').submit(function(){
        var formDatas=$(this).serializeArray();
        $.ajax({
            type:'POST',
            dataType:'json',
            url:'actions/ogretimUyeleri.php?action=ogretimUyesiAdd',
            data:formDatas,
            success:function (response) {
                if(response.result==='Success'){
                    // document.getElementById("ogetimUyesiEkle").reset();
                    alert(response.message);
                    window.location.href = 'ogretimUyeleri.php';
                }
                else{
                    alert(response.message);
                }
            }
        });
        return false;
    });
    $('#ogretimUyesiEdit').submit(function(){
        var formDatas=$(this).serializeArray();
        $.ajax({
            type:'POST',
            dataType:'json',
            url:'actions/ogretimUyeleri.php?action=ogretimUyesiEdit&id=<?php echo isset($_GET['id'])?$_GET['id']:0?>',
            data:formDatas,
            success:function (response) {
                if(response.result==='Success'){
                    // document.getElementById("ogetimUyesiEkle").reset();
                    alert(response.message);
                    window.location.href = 'ogretimUyeleri.php';
                }
                else{
                    alert(response.message);
                }
            }
        });
        return false;
    });
</script>