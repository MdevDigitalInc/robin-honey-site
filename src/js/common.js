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
        $( ".rhd-overlay" ).toggleClass('open');
      });

      // Add smooth scrolling
      $("a").on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
            window.location.hash = hash;
          });
        } // End if
      });
      //end smooth scroll

      //hide content in contact form after submission 


    });
  },
};
