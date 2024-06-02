// javascript

function scrollToSection(sectionId) {

    var element = document.getElementById(sectionId);

    if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
    }
}



let button = document.getElementById("scrollToTop");


window.onscroll = function () { scrolling() };

function scrolling() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        button.style.display = "block";
    } else {
        button.style.display = "none";
    }
}

function scrollUp() {
    window.scrollTo ({
        top: 0,
        behavior: "smooth"
        
    })
}

//jQuery

$(document).ready(function () {





    $(".gallery-buttons").click(function () {



        $(this).addClass("active").siblings().removeClass("active");

        var filter = $(this).attr('data-filter');

        if (filter == "all") {
            $(".gallery-image").show(400);
        }
        else {
            $(".gallery-image").not("." + filter).hide(200);
            $(".gallery-image").filter("." + filter).show(400);
        }

    });




    $(".gallery").magnificPopup({
        delegate: "a",
        type: "image",
        gallery: {
            enabled: true
        }
    })
});

window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");

    loader.classList.add("loader-hidden");

    loader.addEventListener("transitioned", () => {
        document.body.removeChild("loader");

    });
});

