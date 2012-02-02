// Window load event used just in case window height is dependant upon images
jQuery(window).bind("load", function() { 

       var footerHeight = 0,
           footerTop = 0;

       positionFooter();

       function positionFooter() {

                footerHeight = jQuery("#footer").height();
                footerTop = (jQuery(window).scrollTop()+jQuery(window).height()-2*footerHeight)+"px";

               if ( (jQuery(document.body).height()+footerHeight) < jQuery(window).height()) {
                   jQuery("#footer").css({
                        position: "relative"
                   }).animate({
                        top: footerTop
                   })
               } else {
                   jQuery("#footer").css({
                        position: "static"
                   })
               }

       }

       jQuery(window)
               .scroll(positionFooter)
               .resize(positionFooter)

});