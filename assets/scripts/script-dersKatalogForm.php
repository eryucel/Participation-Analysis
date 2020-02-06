<script>
    $(document).find('#dersKatalogForm').submit(function () {
        var formDatas=$(this).serializeArray();
        $.ajax({
            type:'POST',
            dataType:'json',
            url:'actions/dersKatalog.php?action=dersKatalogAdd',
            data:formDatas,
            success:function (response) {
                if(response.result==='Success'){
                    // document.getElementById("dersKatalogForm").reset();
                    alert(response.message);
                    window.location.href = 'dersKatalog.php';
                }
                else{
                    alert(response.message);
                }
            }
        });
        return false;
    });
    $(document).find('#dersKatalogFormEdit').submit(function () {
        var formDatas=$(this).serializeArray();
        $.ajax({
            type:'POST',
            dataType:'json',
            url:'actions/dersKatalog.php?action=dersKatalogEdit&id=<?php echo isset($_GET['id'])?$_GET['id']:0?>',
            data:formDatas,
            success:function (response) {
                if(response.result==='Success'){
                    // document.getElementById("dersKatalogFormEdit").reset();
                    alert(response.message);
                    window.location.href = 'dersKatalog.php';
                }
                else{
                    alert(response.message);
                }
            }
        });
        return false;
    });
</script>