export default {
  init() {
    // JavaScript to be fired on all pages
    console.log('common');
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    jQuery(document).ready(function( $ ) {

      //Mobile navigation
      $( "[data-toggle='nav']" ).click(function() {
        $( ".rhd-toggle-nav" ).toggleClass('open');
        $( ".rhd-nav-area").toggleClass('open');
        $( ".rhd-overlay" ).toggleClass('open');
        $("html, body").toggleClass('no-scroll');
      });
      //close nav if contact link is clicked
      $( ".rhd-contact-link a" ).click(function() {
        $( ".rhd-nav-area").removeClass('open');
        $( ".rhd-overlay" ).removeClass('open');
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
      function labelState(input) {
        if( input.val() ) {
                input.parent().addClass('is-active');
        }else{
                input.parent().removeClass('is-active');
        }
      }

      $(".rhd-form-container input,.rhd-form-container textarea").each(function() {
        var input = $(this);
        labelState(input);
      });

      $('.rhd-form-container input, .rhd-form-container textarea').blur(function(){
        var input = $(this);
        labelState(input);
      });

      //

      //Custom Contact Form
      $( "#contactForm" ).submit(function( event ) {

        $("#result").empty();
        $( "#errors" ).remove();
        $("#result").css("color","#fff");
        $( "#result" ).append('<div class="rhd-ring"><div></div><div></div><div></div><div></div></div>');


        event.preventDefault();

        //get values
        var $form = $( this ),
        name = $form.find( "input[name='name']" ).val(),
        companyName = $form.find( "input[name='company-name']" ).val(),
        phone = $form.find( "input[name='phone']" ).val(),
        email = $form.find( "input[name='email']" ).val(),
        message = $form.find( "textarea[name='message']" ).val(),
        url = $form.attr( "action");

        var  postData = {
          name: name,
          company_name: companyName,
          phone: phone,
          email: email,
          message: message
        };

      //setTimeout(function(){

        $.post(url, postData, function(data, status, xhr) {

          var result = data.response;
          $( "#result" ).empty().append("<p>"+result+"</p>");

          var errors ="";

          if (data.errors != null){

            $.each( data.errors, function( key, value ) {

                $( "."+key).addClass( "invalid" );

                errors +="<li>" + value + "</li>";
            });

            var errorList = '<ul class="errors" id="#errors">'+errors+'</ul>';

            $("#result p").css("color","red").append(errorList);

          }

          if(data.status === 1) {
            $('#contactForm').hide();
            $("#result").prepend('<h2>Thank you</h2>');
            $('#result').append('<div class="rhd-mail-icon"></div>');

          }

        },'json');

      //}, 5000);

      });
      //End Custom Contact Form
    });
  },
};
