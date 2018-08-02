$( document ).ready(function() {
		

	// Custom Scroller For Menu
	$("#navbar-nav a").click(
	    function(e)
	    {
	    	e.preventDefault();
	    	var contentPanelId = $(this).attr("href");
	        $('html:not(:animated), body:not(:animated)').animate({
	            scrollTop: $(contentPanelId).offset().top
	        }, 2000);
	    }
	);


	$("#introduction-navigation a").click(
	    function(e)
	    {
	    	e.preventDefault();
	    	var contentPanelId = $(this).attr("href");
	        $('html:not(:animated), body:not(:animated)').animate({
	            scrollTop: $(contentPanelId).offset().top
	        }, 2000);
	    }
	);

	$(".navbar-right a").click(
	    function(e)
	    {
	    	e.preventDefault();
	    	var contentPanelId = $(this).attr("href");
	        $('html:not(:animated), body:not(:animated)').animate({
	            scrollTop: $(contentPanelId).offset().top
	        }, 2000);
	    }
	);

	
});