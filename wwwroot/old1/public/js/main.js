  var viewport = $(window).width();
  if (viewport <= 1024) {  
    $('.works').on("click", function() {
      $('.submenu').toggle('display');
    });
  }
