$(function() {
    // Source of code : https://wprock.fr/blog/smooth-scrolling-jquery/
    /**
    * Smooth scrolling to page anchor on click
    **/
    $("a[href*='#']:not([href='#'])").click(function() {
        if (
            location.hostname == this.hostname
            && this.pathname.replace(/^\//,"") == location.pathname.replace(/^\//,"")
        ) {
            var anchor = $(this.hash);
            anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) +"]");
            if ( anchor.length ) {
                $("html, body").animate( { scrollTop: anchor.offset().top }, 1800);
            }
        }
    });
});
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  });
// Function jQuery to remove menu (mobile) after click on a link
$(document).ready(function () {
    $(".navbar-nav li a").click(function(event) {
        $(".navbar-collapse").collapse('hide');
    });
});
// Function jQuery to remove menu (mobile) after click everywhere
$(document).ready(function() {
    $("html").on("touchstart click", function(event) {
        $(".navbar-collapse").collapse('hide');
    });
});