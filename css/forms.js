$(function(){
    $('#change').on('click',function(e){
        e.preventDefault();
        $('#form1').css('display','none', 'inactive');
        $('#form2').css('display','block', 'active'); 
    });
});