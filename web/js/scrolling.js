'use strict';

$(document).ready(function () {


    $("a").on('click', function (event) {
        if (this.hash !== "") {

            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top -50
            }, 600, function () {

                window.location.hash = hash;
            });
        }  // End if
    });

    $('.navbar-nav a').on('click', function () {
        if ($(window).width() < 960) {
            $('.navbar-toggler').click();
        }
        
    });


});



