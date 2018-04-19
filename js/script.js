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

// Menu fixo
$(document).ready(function(){       
  var scroll_start = 0;
  var startchange = $('header');
  var offset = startchange.offset();
  $(document).scroll(function() { 
     scroll_start = $(this).scrollTop();
     if(scroll_start > offset.top) {
         $('.topbar').addClass('scrolled');
      } else {
        $('.topbar').removeClass('scrolled');
      }
  });
});