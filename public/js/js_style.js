/* global $*/

$(function(){
        $('.password_off').click(function(){
            $('.password_off').hide();
            $('.password_on').show();
        });
    
        $('.password_on').click(function(){
            $('.password_on').hide();
            $('.password_off').show();
        });
});