// Menu responsivo - aparecer e desaparecer ao clicar
$(function() {
	menu = $('.nav-collapse');

  $('.nav-toggle').on('click', function(e) {
    e.preventDefault(); menu.slideToggle();
  });
  
  $(window).resize(function(){
    var w = $(this).width(); if(w > 480 && menu.is(':hidden')) {
      menu.removeAttr('style');
    }
  });
  
  $('nav li').on('click', function(e) {                
    var w = $(window).width(); if(w < 480 ) {
      menu.slideToggle(); 
    }
  });
});


// Menu fixo e aparicao de botao 'topo'
$(document).ready(function(){       
  var scroll_start = 0;
  var startchange = $('header');
  var offset = startchange.offset();
  $(document).scroll(function() { 
     scroll_start = $(this).scrollTop();
     if(scroll_start > offset.top) {
         $('.topbar').addClass('scrolled');
         $('#btnTopo').addClass('show');
      } else {
        $('.topbar').removeClass('scrolled');
        $('#btnTopo').removeClass('show');
      }
  });
});


// Top button
// $(document).ready(function(){       
//   var scroll_start = 0;
//   var startchange = $('header');
//   var offset = startchange.offset();
//   $(document).scroll(function() { 
//      scroll_start = $(this).scrollTop();
//      if(scroll_start > offset.top) {
//          $('.topbar').addClass('scrolled');
//       } else {
//         $('.topbar').removeClass('scrolled');
//       }
//   });
// });


// Smooth scroll
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top - 80
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });


// Mensagem Customizada de erro - contato.php
document.addEventListener("DOMContentLoaded", function() {
  var elements = document.getElementsByTagName("input");
  for (var i = 0; i < elements.length; i++) {
      elements[i].oninvalid = function(e) {
          e.target.setCustomValidity("");
          if (!e.target.validity.valid) {
              e.target.setCustomValidity("Preencha este campo de forma correta");
          }
      };
      elements[i].oninput = function(e) {
          e.target.setCustomValidity("");
      };
  }
});


// Sliders
if (typeof tns === "function") { 
  // Slider de clientes
  var slider = tns({
    container: '#logo-slider',
    items: 2,
    responsive: {
      768: {
        items: 3,
        autoplayTimeout: 1500
      },
      900: {
        items: 4
      }
    },
    autoplayTimeout: 2500,
    autoplay: true,
    mouseDrag: true,
    nav: false,
    controls: false,
    autoplayButtonOutput: false,
    autoplayHoverPause: true,
    controlsContainer: '#customize-controls'
  });

  // Slider de Portfolio
  var slider = tns({
    container: '.my-slider',
    items: 1,
    responsive: {
      1024: {
        items: 3,
        autoplayTimeout: 5000,
        gutter: 15
      }
    },
    autoplayTimeout: 2500,
    autoplay: true,
    mouseDrag: true,
    autoplayButtonOutput: false,
    autoplayHoverPause: true,
    lazyload: true,
    speed: 1000,
    controlsContainer: '#customize-controls'
  });

  // Slider de Portfolio
  var slider = tns({
    container: '.landing-page',
    items: 1,
    autoplayTimeout: 2500,
    autoplay: true,
    mouseDrag: true,
    autoplayButtonOutput: false,
    autoplayHoverPause: true,
    nav: false,
    controls: false,
    lazyload: true,
    speed: 1000,
  });

}

