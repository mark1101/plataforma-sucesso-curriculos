(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {




        $('.menu-open , .offcanvas-overlay').click(function () {

            $('.offcanvas-area , .offcanvas-overlay').addClass('active');

        });
        $('.menu-close , .offcanvas-overlay').click(function () {

            $('.offcanvas-area , .offcanvas-overlay').removeClass('active');

        });

        $('.favourite__btn').click(function () {

            $(this).toggleClass('active');

        });



    });

    $('input[type="number"]').niceNumber();

}(jQuery));