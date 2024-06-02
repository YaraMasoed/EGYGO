/*Yara*/
/*Jquery*/
$(document).ready(function () {

  function parallax_height() {
    var scrollPosition = $(window).scrollTop();
    var header_height = $(".header-content").outerHeight();
    $(".body-content").css({ "margin-top": header_height });
    $(".Header").css({ height: header_height - scrollPosition });
  }

  parallax_height();
  $(window).scroll(function () {
    parallax_height();
  });
});


/*Javascript*/
var slide = document.getElementById("slide");
var upArrow = document.getElementById("upArrow");
var downArrow = document.getElementById("downArrow");
let y = 0;

function goDown() {
  if (y > "-900") {
    y = y - 300;
    slide.style.top = y + "px";
  }
}

function goUp() {
  if (y < 0) {
    y = y + 300;
    slide.style.top = y + "px";
  }
}

downArrow.addEventListener("click", goDown);
upArrow.addEventListener("click", goUp);


/*ranim*/
function myFunction() {
  var x = document.getElementById("hotelList");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}






