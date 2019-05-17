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

      //keep label above text box if input is filled out

      $(".rhd-form-container input,.rhd-form-container textarea").each(function() {
        if( $(this).val() ) {
                $(this).parent().addClass('is-active');
        }else{
                $(this).parent().removeClass('is-active');
        }
      });


      $('.rhd-form-container input, .rhd-form-container textarea').blur(function(){
        if( $(this).val() ) {
              $(this).parent().addClass('is-active');
        }else{
              $(this).parent().removeClass('is-active');
        }
      });

    });
  },
};
