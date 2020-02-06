<script>
    function dersDelete(id) {
        if(confirm("Gerçekten dersi silmek istiyor musunuz?"))
        {
            $.ajax({
                type:'POST',
                dataType:'json',
                url:'actions/dersKatalog.php?action=dersKatalogDelete&id='+id,
                success:function (response) {
                    if(response.result==='Success'){
                        alert(response.message);
                        window.location.href = 'dersKatalog.php';
                    }
                    else{
                        alert(response.message);
                    }
                }
            });
        }
    }
</script>