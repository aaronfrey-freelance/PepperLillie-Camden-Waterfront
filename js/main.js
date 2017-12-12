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
    }, 30000, 'swing');
  }
  animateLeft();

  // Sliders
  $('.slider').bxSlider({
    'mode': 'fade',
    'speed': 700,
    'touchEnabled': false,
    'pager': false
  });

}());
