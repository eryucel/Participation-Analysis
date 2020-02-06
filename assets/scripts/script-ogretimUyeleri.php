<script>
    function ogretimUyesiDelete(id) {
        if(confirm("Gerçekten öğretim üyesini silmek istiyor musunuz?"))
        {
            $.ajax({
                type:'POST',
                dataType:'json',
                url:'actions/ogretimUyeleri.php?action=ogretimUyesiDelete&id='+id,
                success:function (response) {
                    if(response.result==='Success'){
                        alert(response.message);
                        window.location.href = 'ogretimUyeleri.php';
                    }
                    else{
                        alert(response.message);
                    }
                }
            });
        }
    }
</script>