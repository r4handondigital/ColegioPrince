$(document).ready(function(){
/*
	Códigos de invocação dos plugins.
*/
	 $(".dropdown-button").dropdown();

	 $(".button-collapse").sideNav();


	  $('.destaque').owlCarousel({
	    loop:true,
	    autoplay:true,
	    autoplayTimeout:4000,
    	autoplayHoverPause:true,
	    margin:0,
	    navText: ["",""],
	    nav:false,
	    dots:false,
	    items:1,
	    
	});
	 
});























