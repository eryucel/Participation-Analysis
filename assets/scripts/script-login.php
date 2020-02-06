<script>
   $(document).find('#loginForm').submit(function () {
    var formDatas=$(this).serializeArray();
    $.ajax({
        type:'POST',
        dataType:'json',
        url:'actions/login.php',
        data:formDatas,
        success:function (response) {
            if(response.result=='login_success'){
                window.location.href='index.php';
            }
            else{
                alert(response.message);
            }
        }
    });
    return false;
});
</script>