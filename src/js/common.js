export default {
  init() {
    // JavaScript to be fired on all pages
    console.log('common');
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    jQuery(document).ready(function( $ ) {
      $( ".rhd-toggle-nav, .rhd-overlay" ).click(function() {
        $( ".rhd-toggle-nav" ).toggleClass('open');
        $( ".rhd-nav-area").toggleClass('open');
        //$( ".rhd-main-menu").toggleClass('flex-column-rev');
        $( ".rhd-overlay" ).toggleClass('open');
      });

    });
  },
};
