// INITS
$(document).ready(function () {
  AOS.init({
    once: true,
  });
});

function disableScroll() {
  $(".wrapper, body").css("overflow-y", "hidden");
}

function enableScroll() {
  $(".wrapper, body").css("overflow-y", "auto");
}

//LOADER

$(window).on("load", function () {
  let loader = $(".loader");
  loader.fadeOut(500);
  setTimeout(() => {
    loader.remove();
  }, 500);
});

//BUTTON

let allow = true;
$("button.btn").click(function () {
  console.log("click");
  if (allow) {
    allow = false;
    $(this).addClass("clicked");
    setTimeout(() => {
      $(this).removeClass("clicked");
      allow = true;
    }, 300);
  }
});

//NAVIGATION PANEL

$(window).on("scroll", function () {
  if ($(document).scrollTop() >= 50) {
    $("header").addClass("sticky");
  } else if ($(document).scrollTop() < 5) {
    $("header").removeClass("sticky");
  }
});

$("header .toggler").click(function () {
  if (allow) {
    allow = false;
    $("header .navmenu").toggleClass("active");
    if ($("header .navmenu").hasClass("active")) {
      disableScroll();
    } else {
      enableScroll();
    }
    setTimeout(() => {
      allow = true;
    }, 400);
  }
});

/*
$("header .navmenu .closemenu").click(function() {
  if(allow) {
    allow = false;
    $("header .navmenu").removeClass("active");
    setTimeout(()=>{
      allow = true;
    }, 400);
  }
});*/

// SLUZBY

$(".cards").slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: $(".prev"),
  nextArrow: $(".next"),
  responsive: [
    {
      breakpoint: 1100,
      settings: {
        slidesToShow: 2,
        infinite: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        infinite: true,
      },
    },
  ],
});

$(document).on("click", 'a[href^="#"]', function (event) {
  event.preventDefault();

  $("html, body").animate(
    {
      scrollTop: $($.attr(this, "href")).offset().top,
    },
    500
  );
});
