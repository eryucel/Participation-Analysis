<script>
    function acilanDerslerDelete(id) {
        if(confirm("Gerçekten dersi silmek istiyor musunuz?"))
        {
            $.ajax({
                type:'POST',
                dataType:'json',
                url:'actions/acilanDersler.php?action=acilanDerslerDelete&id='+id,
                success:function (response) {
                    if(response.result==='Success'){
                        alert(response.message);
                        window.location.href = 'acilanDersler.php';
                    }
                    else{
                        alert(response.message);
                    }
                }
            });
        }
    }
</script>