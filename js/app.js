jQuery(document).ready(function($) {
    // Inside of this function, $() will work as an alias for jQuery()
    $(document).foundation();
    
	$( ".nav-toggle" ).click(function() {
	  $(this).toggleClass("open");
	  $("nav").fadeToggle(100);

	  return false;
	});

});
