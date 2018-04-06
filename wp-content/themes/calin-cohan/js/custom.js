$( document ).ready(function() {
	
	// Custom Scroller For Menu
	$("#navbar-nav a").click(
	    function()
	    {
	    	var contentPanelId = $(this).attr("href");
	        $('html:not(:animated), body:not(:animated)').animate({
	            scrollTop: $(contentPanelId).offset().top
	        }, 2000);
	    }
	);

    $('#introduction-navigation a').on('click', function (e) {
    	//Stop page from doing default shit
      	e.preventDefault();
      	//Get content panel ID from clicked element
      	var contentPanelId = $(this).attr("href");
      	//Animate to clicked element
		$('html, body').stop().animate({
			scrollTop: $(contentPanelId).offset().top
		}, 900, 'swing', function () {
			window.location.hash = target;
		});

    });


    $('#contact-us-section').click(function(e) {
        e.preventDefault();
      	//Get content panel ID from clicked element
      	var contentPanelId = $(this).attr("href");
      	//Animate to clicked element
		$('html, body').stop().animate({
			scrollTop: $(contentPanelId).offset().top
		}, 900, 'swing', function () {
			window.location.hash = target;
		});
    });

	
});