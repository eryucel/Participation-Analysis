<script>
    $('#derslikEkle').submit(function(){
        var formDatas=$(this).serializeArray();
        $.ajax({
            type:'POST',
            dataType:'json',
            url:'actions/derslikler.php?action=derslikAdd',
            data:formDatas,
            success:function (response) {
                if(response.result==='Success'){
                    document.getElementById("derslikEkle").reset();
                    alert(response.message);
                }
                else{
                    alert(response.message);
                }
            }
        });
        return false;
    });
</script>