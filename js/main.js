setInterval(afficheAntoine, 200);
let indexAntoine = 0;
let antoineConct = "";
let antoine = "Antoine LEMICHEL";
const MAXINDEX = antoine.length;



setInterval(afficheDevJunior, 200);
let devJunior = "Développeur Web Junior";
let devJuniorConct = "";
let indexDev = 0;
const MAXINDEXDEV = devJunior.length;



setInterval(changeAutoText, 2000);
$(function () {
    // Source of code : https://wprock.fr/blog/smooth-scrolling-jquery/
    /**
     * Smooth scrolling to page anchor on click
     **/
    $("a[href*='#']:not([href='#'])").click(function () {
        if (
            location.hostname == this.hostname &&
            this.pathname.replace(/^\//, "") == location.pathname.replace(/^\//, "")
        ) {
            var anchor = $(this.hash);
            anchor = anchor.length ? anchor : $("[name=" + this.hash.slice(1) + "]");
            if (anchor.length) {
                $("html, body").animate({
                    scrollTop: anchor.offset().top
                }, 1800);
            }
        }
    });
});

// Function jQuery to remove menu (mobile) after click on a link
$(document).ready(function () {
    $(".navbar-nav li a").click(function (event) {
        $(".navbar-collapse").collapse('hide');
    });
});
// Function jQuery to remove menu (mobile) after click everywhere
$(document).ready(function () {
    $("html").on("click", function (event) {
        $(".navbar-collapse").collapse('hide');
    });
});

$("buttonSend").submit(function () {
    return false;
});



//This function change text into div about me
function changeAutoText() {
    let tableLike = ["J'aime Sass", "J'aime les jeux-vidéos", "J'aime voir de nouvelles technologies à chaque projet !", "J'adore Linux"];
    let textLike = document.getElementById("textLike");
    let randomTableLike = tableLike[Math.floor(Math.random() * tableLike.length)];
    textLike.innerHTML = randomTableLike;
}


//This function and after her, account typing my name on top.
function afficheAntoine() {
    if (indexAntoine < MAXINDEX) {
        indexAntoine++;
        antoineConct += antoine[indexAntoine - 1];
        document.getElementById("antoine").innerHTML = antoineConct;
    }
}

function afficheDevJunior() {
    if (indexDev < MAXINDEXDEV) {
        indexDev++;
        devJuniorConct += devJunior[indexDev - 1];
        document.getElementById("devJunior").innerHTML = devJuniorConct;
    }
}