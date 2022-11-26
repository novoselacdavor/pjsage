export default {
    init() {
        // JavaScript to be fired on all pages
        let hambMenu = jQuery('.banner__hamburger'),
            respMenu = jQuery('.nav-primary');
        
        jQuery(hambMenu).on('click', function(){
            jQuery(this).toggleClass('open');
            jQuery(respMenu).toggleClass('open');
        });
        
    },
    finalize() {
        // JavaScript to be fired on all pages, after page specific JS is fired
    },
};
