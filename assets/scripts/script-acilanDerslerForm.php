<script>
    $(document).find('#dersAcForm').submit(function () {
        var formDatas=$(this).serializeArray();
        $.ajax({
            type:'POST',
            dataType:'json',
            url:'actions/acilanDersler.php?action=acilanDerslerAdd',
            data:formDatas,
            success:function (response) {
                if(response.result==='Success'){
                    document.getElementById("dersAcForm").reset();
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