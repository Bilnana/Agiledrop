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

})(jQuery);