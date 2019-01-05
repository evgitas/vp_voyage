
jQuery(function($){

	/* ----------------------------------------------------------- */
	/*  1. SEARCH BOX SLIDE
	/* ----------------------------------------------------------- */ 

	$('#search-icon').click(function(e){
		e.preventDefault();
     	$('.header-top').slideToggle(500);     
  	});


  	/* ----------------------------------------------------------- */
	/*  2a. Scroll'as 
	/* ----------------------------------------------------------- */ 
	
	$("a[href^='#']").click(function(e) {
	e.preventDefault();
	
	var position = $($(this).attr("href")).offset().top;

	$("body, html").animate({
		scrollTop: position
	} /* speed */ );
	});


// mano menu

	 

//menu end
	
});