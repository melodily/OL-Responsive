jQuery(document).ready(function() {
	(function() {
		//settings
		var fadeSpeed = 200, fadeTo = 0.5, topDistance = 30;
		var topbarME = function() { jQuery('.navbar-inner').fadeTo(fadeSpeed,1); }, topbarML = function() { jQuery('.navbar-inner').fadeTo(fadeSpeed,fadeTo); };
		var inside = false;
		//do
		jQuery(window).scroll(function() {
			position = jQuery(window).scrollTop();
			if(position > topDistance && !inside) {
				//add events
				topbarML();
				jQuery('.navbar-inner').bind('mouseenter',topbarME);
				jQuery('.navbar-inner').bind('mouseleave',topbarML);
				inside = true;
			}
			else if (position < topDistance){
				topbarME();
				jQuery('.navbar-inner').unbind('mouseenter',topbarME);
				jQuery('.navbar-inner').unbind('mouseleave',topbarML);
				inside = false;
			}
		});
	})();
});
