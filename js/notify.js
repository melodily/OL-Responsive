jQuery(document).ready(function() {

            var $alertdiv = jQuery('<div id = "alertmsg"/>');
            $alertdiv.text("Stoichiometry lectures are now available! Check them out in the chemistry section.");
            $alertdiv.bind('click', function() {
                jQuery(this).slideUp(200);
            });
            jQuery(document.body).append($alertdiv);	
            jQuery("#alertmsg").slideDown("slow"); 
            setTimeout(function() { $alertdiv.slideUp(200) }, 10000);
                            });