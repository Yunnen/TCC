
function myFunction() {
    var x = $(this).scrollTop();
    if(x<1){
        $('#navbar').css('background', 'transparent');
        $('#drop').css('background-color', 'transparent');
        $('#drop1').css('background-color', 'transparent');
    }else{
        $('#navbar').css('transition-duration', '0.5s');
        $('#navbar').css('background', '#000000');
        
        $('#drop').css('transition-duration', '0.5s');
        $('#drop').css('background-color', '#000000');

        $('#drop1').css('transition-duration', '0.5s');
        $('#drop1').css('background-color', '#000000');
    }
}