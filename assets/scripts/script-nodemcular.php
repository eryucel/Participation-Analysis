<script>
    $('#nodemcuEkle').submit(function(){
        var formDatas=$(this).serializeArray();
        $.ajax({
            type:'POST',
            dataType:'json',
            url:'actions/nodemcular.php?action=nodemcuAdd',
            data:formDatas,
            success:function (response) {
                if(response.result==='Success'){
                    document.getElementById("nodemcuEkle").reset();
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