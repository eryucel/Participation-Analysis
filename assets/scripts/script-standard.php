<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="http://swlabs.co/madmin/code/js/jquery-ui.js"></script>
<script>
    $(document).on('click','#logout_li',function(){
        $.ajax({
            type:'POST',
            dataType:'json',
            url:'actions/logout.php',
            success:function(response){
                if(response.result=='logout_success'){
                    
                }
                else{
                    alert(response.message);
                }
            }
        });
    });
</script>
<script src="https://cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script>
<script src="assets/scripts/admin.js"></script>



