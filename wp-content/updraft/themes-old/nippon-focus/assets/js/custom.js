

// You can also use "$(window).load(function() {"
$(function () {
    // Slideshow 4
    $("#slider3").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        namespace: "callbacks",
        before: function () {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
            $('.events').append("<li>after event fired.</li>");
        }
    });

});



$(document).ready(function () {
    $("#lightGallery").lightGallery({
        mode: "fade",
        speed: 800,
        caption: true,
        desc: true,
        mobileSrc: true
    });
});



$(document).ready(function () {
    /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
        };
    */

    $().UItoTop({ easingType: 'easeOutQuart' });

});




jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
    });
});


$(".bs-js-navbar-scrollspy li a[href^='#']").on('click', function(event) {
    var target = this.hash;

    event.preventDefault();

    var navOffset = $('#navbar').height();

    return $('html, body').animate({
        scrollTop: $(this.hash).offset().top - navOffset
    }, 1500, function() {
        return window.history.pushState(null, null, target);
    });
});

