jQuery(document).ready(function(){

 jQuery(".mob-menu").click(function(){
     jQuery(".header_row .main_menu").slideToggle();
     jQuery(".fa-bars").toggle();
     jQuery("i.close").toggle();
   });

 var scroll = jQuery(window).scrollTop(); 
 jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop(); 
    if (scroll >= 50) {
        jQuery(".header_row").addClass("fixed_header");
    } else {
        jQuery(".header_row").removeClass("fixed_header");
    }
});
	
 if (scroll >= 50) {
      jQuery(".header_row").addClass("fixed_header");
}
 
});
