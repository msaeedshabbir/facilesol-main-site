


(function ($) {
    "use strict";

///////////////////////////////////////////////////////
// Preloader
$(".preloader").delay(300).fadeOut("slow");

//Mixitup
$('.work-mixi').mixItUp();


///////////////////////////////////////////////////////
// Sticky Menu
$(window).on( 'scroll', function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $(".header-menu-area").addClass("sticky");
    } else {
        $(".header-menu-area").removeClass("sticky");
    }
});
// Sticky Menu End


///////////////////////////////////////////////////////
// Magnific Popup gallery
$('.popup-gallery').magnificPopup({
    delegate: '.project-popup', // child items selector, by clicking on it popup will open
    gallery: {
        enabled: true
    },
    type: 'image'
    // other options
});

// Magnific Popup gallery End


///////////////////////////////////////////////////////       
// Mobile menu
$('.hamburger').on( 'click', function (event) {
    $(this).toggleClass('h-active');
    $('.main-nav').toggleClass('slidenav');
});
$('.header-home .main-nav ul li  a').on( 'click', function (event) {
    $('.hamburger').removeClass('h-active');
    $('.main-nav').removeClass('slidenav');
});

$(".main-nav .fl").on('click', function(event) {
    var $fl = $(this);
    $(this).parent().siblings().find('.sub-menu').slideUp();
    $(this).parent().siblings().find('.fl').addClass('flaticon-plus').text("+");
    if($fl.hasClass('flaticon-plus')){
        $fl.removeClass('flaticon-plus').addClass('flaticon-minus').text("-");
    }else{
        $fl.removeClass('flaticon-minus').addClass('flaticon-plus').text("+");
    }
    $fl.next(".sub-menu").slideToggle();
});
// Mobile menu End


///////////////////////////////////////////////////////
/*Swiper testimonial Slide*/
var brandSlider = new Swiper('.testimonial-slider', {
  slidesPerView: 3,
  spaceBetween: 24,
  loop:true,
  speed: 2500,
  pagination: {
    el: ".testimonial-pagination",
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1
    },
    480: {
      slidesPerView: 1
    },
    768: {
      slidesPerView: 1
    },
    992: {
      slidesPerView: 2
    },
    1200: {
      slidesPerView: 3
    },
    1400: {
      slidesPerView: 3
    }
  }
});

/*Swiper testimonial Slide End*/


///////////////////////////////////////////////////////
/* Video Player control */

function setupVideo(playerId, playClass, pauseClass, btnClass) {
  jQuery(window).on('load', function($) {
    let player = document.getElementById(playerId);
  
    let play = document.querySelector(playClass);
    let pause = document.querySelector(pauseClass);
    let btn = document.querySelector(btnClass);
  
    btn && btn.addEventListener('click', () => {
      if (play.classList.contains("active")) {
        play.classList.remove("active");
        pause.classList.add("active");
      } else {
        pause.classList.remove("active");
        play.classList.add("active");
      }
    });
  
    play && play.addEventListener("click", function() {
      if (player.paused) {
        player.play();
      } else if (!player.paused) {
        player.pause();
      }
    });
  });
}

setupVideo("player", ".play", ".pause", ".video-tap");

/* Video Player control end */




///////////////////////////////////////////////////////
// Contact Form Start

// Get the form.
var form = $('#contact-form');

// Get the messages div.
var formMessages = $('.form-message');

// Set up an event listener for the contact form.
$(form).on( 'submit', function(e) {
  // Stop the browser from submitting the form.
  e.preventDefault();

  // Serialize the form data.
  var formData = $(form).serialize();

  // Submit the form using AJAX.
  $.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData
  })
  .done(function(response) {
    // Make sure that the formMessages div has the 'success' class.
    $(formMessages).removeClass('error');
    $(formMessages).addClass('success');

    // Set the message text.
    $(formMessages).text(response);

    // Clear the form.
    $('#contact-form input,#contact-form textarea').val('');
  })
  .fail(function(data) {
    // Make sure that the formMessages div has the 'error' class.
    $(formMessages).removeClass('success');
    $(formMessages).addClass('error');

    // Set the message text.
    if (data.responseText !== '') {
      $(formMessages).text(data.responseText);
    } else {
      $(formMessages).text('Oops! An error occurred. Message could not be sent.');
    }
  });
});
// Contact Form End

///////////////////////////////////////////////////////
// Bottom to top start
$(document).ready(function () {
  $(window).on('scroll', (function () {
    if ($(this).scrollTop() > 100) {
      $('#scroll-top').fadeIn();
    } else {
      $('#scroll-top').fadeOut();
    }
  }));
  $('#scroll-top').on( 'click', function () {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
});
// Bottom to top End


///////////////////////////////////////////////////////
// Odometer Counter
$(".counter-item").each(function () {
  $(this).isInViewport(function (status) {
  if (status === "entered") {
      for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
      var el = document.querySelectorAll('.odometer')[i];
      el.innerHTML = el.getAttribute("data-odometer-final");
    }
  }
  });
});


///////////////////////////////////////////////////////


// GSAP Title Animation

// Style 1
let word_come = document.querySelectorAll(".animation-word")
word_come.forEach((word_come) => {
  let split_word_come = new SplitText(word_come, { type: "chars words", position: "absolute" })
  gsap.from(split_word_come.words, { duration: 1, x: 50, autoAlpha: 0, stagger: 0.05 });
});



// Hero Animation

let mark = document.querySelector(" .title-left")
let eting = document.querySelector(".title-right")
let hero__text_animation = document.querySelector(".hero__text-animation")
let HomeDigital = gsap.timeline()


let split_creatives = new SplitText(mark, { type: "chars" })
let split_solutions = new SplitText(eting, { type: "chars" })
let split_text_animation = new SplitText(hero__text_animation, { type: "chars words" })

HomeDigital.from(split_creatives.chars, { duration: 2, x: 100, autoAlpha: 0, stagger: 0.2 });
HomeDigital.from(split_solutions.chars, { duration: 1, x: 100, autoAlpha: 0, stagger: 0.1 }, "-=1");
HomeDigital.from(split_text_animation.words, { duration: 1, x: 50, autoAlpha: 0, stagger: 0.05 }, "-=1");

// Hero Animation End

// Style 4 Zoom out

let splitTitleLines = gsap.utils.toArray(".title-anim");

splitTitleLines.forEach(splitTextLine => {
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: splitTextLine,
      start: 'top 90%',
      end: 'bottom 60%',
      scrub: false,
      markers: false,
      toggleActions: 'play none none none'
    }
  });

  const itemSplitted = new SplitText(splitTextLine, { type: "words, lines" });
  gsap.set(splitTextLine, { perspective: 400 });
  itemSplitted.split({ type: "lines" })
  tl.from(itemSplitted.lines, { duration: 1, delay: 0.3, opacity: 0, rotationX: -80, force3D: true, transformOrigin: "top center -50", stagger: 0.1 });
});

///////////////////////////////////////////////////////
// GSAP Text Animation
var mySplitText = new SplitText(".quote", {type:"chars, words"}),
    tl = new TimelineLite(),
    numChars = mySplitText.chars.length;

for(var i = 0; i < numChars; i++){
  tl.from(mySplitText.chars[i], .5, {opacity:0}, Math.random() * 2);
}

//Text Animation
let splitTextLines = gsap.utils.toArray(".text-anim");

splitTextLines.forEach(splitTextLine => {
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: splitTextLine,
      start: 'top 90%',
      duration: 2,
      end: 'bottom 60%',
      scrub: false,
      markers: false,
      toggleActions: 'play none none none'
    }
  });

  const itemSplitted = new SplitText(splitTextLine, { type: "lines" });
  gsap.set(splitTextLine, { perspective: 400 });
  itemSplitted.split({ type: "lines" })
  tl.from(itemSplitted.lines, { duration: 1, delay: 0.5, opacity: 0, rotationX: -80, force3D: true, transformOrigin: "top center -50", stagger: 0.1 });
});

///////////////////////////////////////////////////////
// Image reveal on hover
const items = document.querySelectorAll('.choose-list-info')

items && items.forEach((el) => {
  const image = el.querySelector('.h-img')
  
  el && el.addEventListener('mouseenter', (e) => {
    gsap.to(image, { autoAlpha: 1 })
  })
  
  el && el.addEventListener('mouseleave', (e) => {
    gsap.to(image, { autoAlpha: 0 })
  })
  
  el && el.addEventListener('mousemove', (e) => {
    gsap.set(image, { x: e.offsetX - 200 })
  })
})

///////////////////////////////////////////////////////
window.gsap.registerPlugin(
  window.ScrollTrigger,
  window.ScrollSmoother,
  window.TweenMax
);


/////////////////////////////////////////////////////
// Magnate Animation
var magnets = document.querySelectorAll('.apart-magnetic')
var strength = 50

magnets.forEach( (magnet) => {
  magnet.addEventListener('mousemove', moveMagnet );
  magnet.addEventListener('mouseout', function(event) {
    TweenMax.to( event.currentTarget, 1, {x: 0, y: 0, ease: Power4.easeOut})
  } );
});

function moveMagnet(event) {
  var magnetButton = event.currentTarget
  var bounding = magnetButton.getBoundingClientRect()

  //console.log(magnetButton, bounding)

  TweenMax.to( magnetButton, 1, {
    x: ((( event.clientX - bounding.left)/magnetButton.offsetWidth) - 0.5) * strength,
    y: ((( event.clientY - bounding.top)/magnetButton.offsetHeight) - 0.5) * strength,
    ease: Power4.easeOut
  })
}

// Magnate Animation End


/////////////////////////////////////////////////////

let zoom_items = gsap.utils.toArray(".zoom_animation .zoom_item_single");

zoom_items.forEach((zoom_item, i) => {
  gsap.set(zoom_item, { opacity: 0, y: 30, scale: 0.5 });

  let zoom_timeline = gsap.timeline({
    scrollTrigger: {
      trigger: zoom_item,
      start: "top center+=200",
      markers: false
    }
  })

  zoom_timeline.to(zoom_item, {
    y: 0,
    opacity: 1,
    scale: 1,
    ease: "power2.out",
    duration: 1,
    stagger: {
      each: 0.2,
      delay: 0.5 // add a 0.5 second delay between each item animation
    }
  })
});

// Zoom In Animation End


/////////////////////////////////////////////////////
//  Animation Fade Left

const fadeElements = document.querySelectorAll(".fade_left");

fadeElements.forEach((element, index) => {
  gsap.set(element, { x: -50, opacity: 0 });
  gsap.to(element, {
    scrollTrigger: {
      trigger: element,
      start: "top center+=300"
    },
    x: 0,
    opacity: 1,
    ease: "power2.out",
    duration: 1,
    stagger: {
      each: 0.2,
      from: index * 0.2 // stagger delay based on element index
    }
  });
});

//  Animation Fade Left End

// Down
let animation_down = gsap.timeline();

animation_down.from(".animation-down", {
  duration: 1,
  x: 300,
  autoAlpha: 0,
  ease: "elastic.out(1, 1)",
  stagger: {
    each: 0.75,
    amount: 0.5
  }
}, "+=0.25");

// Hover Active Showcase Start
function initializeHoverBoxes(selector) {
  const show_box = document.querySelectorAll(selector);

  show_box.forEach(f => f.addEventListener('mouseenter', function() {
    show_box.forEach(e => {
      var div = e.querySelector('.hover-box');
      div.classList.add('show');
      div.classList.remove('active');
    })
    this.querySelector('div').classList.add('active')
  }))
}

initializeHoverBoxes('.hover-box-wrap-one');
initializeHoverBoxes('.hover-box-wrap-price');
initializeHoverBoxes('.best-way-box');

// Hover Active Showcase End


// Pricing Toggle

var checkBox = document.querySelectorAll("#checbox")

for(let i = 0; i < checkBox.length; i++){
  checkBox[i].addEventListener("click", ()=>{
    var text1 = document.querySelectorAll(".text1")
    var text2 = document.querySelectorAll(".text2")
    
    if(checkBox[i].checked == true){
      console.log(text2)
      text1.forEach((e)=>{
        e.style.display = "block";
      })
      text2.forEach((e)=>{
        e.style.display = "none";
      })
    } else if (checkBox[i].checked == false) {
      text1.forEach((e)=>{
        e.style.display = "none";
      })
      text2.forEach((e)=>{
        e.style.display = "block";
      })
    }

  })
}

// Pricing Toggle end

// Nice select
$(document).ready(function() {
  $('select').niceSelect();
});
// Nice select end


// Coming Soon Date

let comingDate = new Date('Feb 8, 2025 13:12:00')
let d = document.getElementById('days')
let h = document.getElementById('hours')
let m = document.getElementById('minutes')
let s = document.getElementById('seconds')

countdownTimer(comingDate, d, h, m, s)

function countdownTimer(comingDate, daysElement, hoursElement, minutesElement, secondsElement) {
  let x = setInterval(function() {
    let now = new Date()
    let selisih = comingDate.getTime() - now.getTime()
  
    let days    = Math.floor(selisih / (1000 * 60 * 60 * 24))
    let hours   = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60))
    let minutes = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60))
    let seconds = Math.floor(selisih % (1000 * 60) / 1000)
  
    if (daysElement) daysElement.innerHTML = getTrueNumber(days)
    if (hoursElement) hoursElement.innerHTML = getTrueNumber(hours)
    if (minutesElement) minutesElement.innerHTML = getTrueNumber(minutes)
    if (secondsElement) secondsElement.innerHTML = getTrueNumber(seconds)
  
    if (selisih < 0) {
      clearInterval(x)
      if (daysElement) daysElement.innerHTML = '00'
      if (hoursElement) hoursElement.innerHTML = '00'
      if (minutesElement) minutesElement.innerHTML = '00'
      if (secondsElement) secondsElement.innerHTML = '00'
    }
  }, 1000)
}

function getTrueNumber(x) {
  if (x < 10) return '0' + x
  else return x
}
// Coming Soon Date End





//circle percent

$(window).on('scroll', function() {
  function initCirclePercent() {
    $(".circle_percent").each(function() {
      var $this = $(this),
          $dataV = $this.data("percent"),
          $dataDeg = $dataV * 3.6,
          $round = $this.find(".round_per");
  
      $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
      $this.append('<div class="circle_inbox"><span class="percent_text"></span></div>');
  
      $this.prop('Counter', 0).animate({Counter: $dataV}, {
        duration: 2000,
        easing: 'swing',
        step: function(now) {
          $this.find(".percent_text").text(Math.ceil(now) + "%");
        }
      });
  
      if ($dataV >= 51) {
        $round.css("transform", "rotate(" + 360 + "deg)");
        setTimeout(function() {
          $this.addClass("percent_more");
        }, 1000);
        setTimeout(function() {
          $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
        }, 1000);
      }
    });
  }
  
  // Define a custom jQuery function to check if the element is in the viewport
  $.fn.isInViewport = function() {
    var elementTop = $(this).offset() ? $(this).offset().top : undefined;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };
  
  // Check if the element is in the viewport
  if ($('.circle_percent').isInViewport()) {
    // Execute the function when the element is in the viewport
    initCirclePercent();
    // Remove the event listener so that the function is only executed once
    $(window).off('scroll');
  }
});

//circle percent End

}(jQuery)); 