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

  $(window).on("load resize", function(e) {
    getWindowWidth();
  });

  $('ul.nav li.dropdown').hover(function() {
    if (windowWidth >= 768) {
      $(this).find('.dropdown-menu').stop(true, true).fadeIn(500);
    }
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).fadeOut(500);
  });

}());
