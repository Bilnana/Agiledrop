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

    /* $('document').ready(function changeNavColor(){
        var width = window.innerWidth;

        if (width ==320){
            $('.region-primary-menu').addClass('blue-nav');
        }
        else{
            console.log("Ne radi screen width.");
        }
    });*/
    $('document').ready(function changeNavColor(){
        if( /iPhone|iPad|iPod/i.test(navigator.userAgent) ) {
            $('.layout-container').toggleClass('blue-nav');
        }
   });


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