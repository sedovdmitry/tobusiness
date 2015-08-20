    $(window).load(function(){
      $('#main-slider').flexslider({
        animation: "slide",
		directionNav: false,
		animationLoop: true,
		slideshowSpeed: 5000,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
	  
	  $('#secondary-slider').flexslider({
		animation: "slide",
          animationSpeed: 400,
          animationLoop: true,
		  slideshowSpeed: 7000,
		  controlNav: false,
		  directionNav: false,
          itemWidth: 132.5,
          itemMargin: 5,
	  });
	  
    });