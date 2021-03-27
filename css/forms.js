$(function(){
    $('#change2').on('click',function(e){
        e.preventDefault();
        $('#signUp2').removeClass('fadeIn second');  
        $('#password2').removeClass('fadeIn third');
        $('#btn2').removeClass('fadeIn fourth');
        
        $('#form1').css('display','none');
        $('#change1').removeClass('active');
        $('#change1').addClass('inactive');
        $('#change1').addClass('underlineHover');

        $('#form2').css('display','block');
        $('#change2').removeClass('inactive');
        $('#change2').addClass('active');  
        $('#change2').removeClass('underlineHover');  

        

    });
});
$(function(){
    $('#change1').on('click',function(e){
        e.preventDefault();

        $('#signUp1').removeClass('fadeIn second');  
        $('#password1').removeClass('fadeIn third');
        $('#btn1').removeClass('fadeIn fourth');

        $('#form1').css('display','block');
        $('#change1').removeClass('inactive');
        $('#change1').addClass('active');
        $('#change1').removeClass('underlineHover');  

        
        $('#form2').css('display','none');
        $('#change2').removeClass('active');
        $('#change2').addClass('inactive'); 
        $('#change2').addClass('underlineHover');  

        
    });
});