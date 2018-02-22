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
	
});