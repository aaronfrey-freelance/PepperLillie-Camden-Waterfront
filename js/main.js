var windowWidth = 0;

// Gets the actual window width, not counting scrollbar
function getWindowWidth() {
  if (typeof(window.innerWidth) == 'number') {
    windowWidth = window.innerWidth;
  } else {
    if (document.documentElement && document.documentElement.clientWidth) {
      windowWidth = document.documentElement.clientWidth;
    } else {
      if (document.body && document.body.clientWidth) {
        windowWidth = document.body.clientWidth;
      }
    }
  }
  return windowWidth;
}

(function() {

  // Update the window width variable on resize
  $(window).on("load resize", function(e) {
    getWindowWidth();
    fitPanToWindow();
  });

  // Show the dropdown menu on hover
  $('ul.nav li.dropdown').hover(function() {
    if (windowWidth >= 768) {
      $(this).find('.dropdown-menu').stop(true, true).fadeIn(500);
    }
  }, function() {
    if (windowWidth >= 768) {
      $(this).find('.dropdown-menu').stop(true, true).fadeOut(500);
    }
  });

  // Homepage Image Pan
  function animateLeft() {
    $('.pan-image').animate({
      'background-position-x': '100%'
    }, 30000, 'swing', animateRight);
  }

  function animateRight() {
    $('.pan-image').animate({
      'background-position-x': '0%'
    }, 30000, 'swing', animateLeft);
  }

  animateLeft();

  function fitPanToWindow() {
    if (windowWidth >= 768) {
      // Get the window height
      var windowHeight = $(window).height();
      var headerHeight = $('.navbar-fixed-top').height();
      // Set the height of the pan container
      $('.pan-container, .pan-image').height(windowHeight - headerHeight - 50);
    } else {
      $('.pan-container, .pan-image').height(216);
    }
  }

  // Sliders
  $('.slider').bxSlider({
    'mode': 'fade',
    'speed': 700,
    'touchEnabled': false,
    'pager': false,
    'adaptiveHeight': true
  });

  $('.navbar-toggle').on('click', function() {
    if ($('.navbar-collapse').hasClass('in')) {
      $('.video_tour')
        .delay(800)
        .queue(function(next) {
          $(this).css('z-index', '2');
          next();
        });
    } else {
      $('.video_tour').css('z-index', '1');;
    }
  });

}());
