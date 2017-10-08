(function($) {

	'use strict';
    $(function(){

        // Returns width of browser viewport
        var browser = $(window).width();
        // Returns width of HTML document
        var document = $(document).width();

        $('.toggle-nav').click(function(e){
            $('.menu--main').addClass('style-mobile').slideToggle('slow');
            e.preventDefault();
        });

    });

    //Change color of navigation when screen is  < 420px

    $(window).resize(function (){
        var width = window.innerWidth;

        if (width <=420){
            $(".top-nav").addClass(".grey-nav");
        } else {
            $(".top-nav").removeClass(".grey-nav");
        }
    });


    /*Change color of navgation on android and Iphone devices
    $('document').ready(function changeNavColor(){
        if( /iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
            $('').toggleClass('blue-nav');
        }
   });*/


})(jQuery);



/*function changeNavColor(){
    var $window = $(window);
    var wWidth  = $window.width();
    if (wWidth=320){
        alert("You are on IPHone size.");
    }
    else{
        console.log("Nije IPhone");
    }
}*/