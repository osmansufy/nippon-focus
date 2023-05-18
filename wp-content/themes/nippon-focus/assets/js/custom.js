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
      $(".events").append("<li>before event fired.</li>");
    },
    after: function () {
      $(".events").append("<li>after event fired.</li>");
    },
  });
});

$(document).ready(function () {
  $("#lightGallery").lightGallery({
    mode: "fade",
    speed: 800,
    caption: true,
    desc: true,
    mobileSrc: true,
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

  $().UItoTop({ easingType: "easeOutQuart" });
});

jQuery(document).ready(function ($) {
  $(".scroll").click(function (event) {
    event.preventDefault();
    $("html,body").animate({ scrollTop: $(this.hash).offset().top }, 1000);
  });
});

$(".bs-js-navbar-scrollspy li a[href^='#']").on("click", function (event) {
  var target = this.hash;

  event.preventDefault();

  var navOffset = $("#navbar").height();

  return $("html, body").animate(
    {
      scrollTop: $(this.hash).offset().top - navOffset,
    },
    1500,
    function () {
      return window.history.pushState(null, null, target);
    }
  );
});

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function (event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $("html, body").animate(
          {
            scrollTop: target.offset().top,
          },
          1000,
          function () {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) {
              // Checking if the target was focused
              return false;
            } else {
              $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            }
          }
        );
      }
    }
  });
