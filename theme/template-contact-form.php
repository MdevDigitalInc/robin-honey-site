<?php /* Template Name: Form */?>

<?php get_header(); ?>


	<main role="main" class="rhd-main" aria-label="Content">
		<!-- section -->
		<section class="rhd-section-blue rhd-contact-form" >

		<div class="rhd-container">

			<?php
				// require_once('wp-load.php');


				// //user posted variables
				//   $name = "dorian";
				//   $name = "zizzag";
				//   $email = "dorian@mdev.digital";
				//   $phone = "000 000 0000";
				//   $message = "hello world 34556";
				//   //$human = $_POST['message_human'];




				// //php mailer variables
				//   $to = get_option('admin_email');
				//   $subject = "Someone sent a message from ".get_bloginfo('name');
				//   $headers = 'From: '. $email . "\r\n" .
				//   'Reply-To: ' . $email . "\r\n";


				//   $sent = wp_mail($to, $subject, strip_tags($message), $headers); 


  			?>


			<style>
			.invalid > input , .invalid > textarea {
				border-bottom: 3px solid red;
			}

			.invalid > label {
				color: red;
			}

			.errors {
				border: 1px solid red;
				color: #721c24;
				background-color: #f8d7da;
				list-style-type: none;
				padding: 10px;
				margin: 20px 0;
			}

			.rhd-ring {
				display: inline-block;
				position: relative;
				width: 64px;
				height: 64px;
			}

			.rhd-ring div {
				box-sizing: border-box;
				display: block;
				position: absolute;
				width: 51px;
				height: 51px;
				margin: 6px;
				border: 6px solid #fff;
				border-radius: 50%;
				animation: rhd-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
				border-color: #fff transparent transparent transparent;
			}

			.rhd-ring div:nth-child(1) {
				animation-delay: -0.45s;
			}

			.rhd-ring div:nth-child(2) {
				animation-delay: -0.3s;
			}

			.rhd-ring div:nth-child(3) {
				animation-delay: -0.15s;
			}

			@keyframes rhd-ring {
				0% {
					transform: rotate(0deg);
				}
				100% {
					transform: rotate(360deg);
				}
			}


			</style>


				<script>

				jQuery(document).ready(function( $ ) {



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

				    	  //alert(name);

						var  postData = {
							name: name,
							company_name: companyName,
							phone: phone,
							email: email,
							message: message
						}

						setTimeout(function(){

						$.post(url, postData, function(data, status, xhr) {
							// success callback function
							//alert('status: ' + status + ', data: ' + data.responseData);
							var result = data.response;
							$( "#result" ).empty().append("<p>"+result+"</p>");

							var errors ="";

							if (data.errors != null){

								$.each( data.errors, function( key, value ) {
					  				//alert( key + ": " + value );
					  				$( "."+key).addClass( "invalid" );

					  				errors +="<li>" + value + "</li>"
								});

								var errorList = '<ul class="errors" id="#errors">'+errors+'</ul>';

								$("#result p").css("color","red").append(errorList);

							}

							if(data.status === 1) {
								$('#contactForm').hide();
								$("#result").prepend('<h2>Thank you</h2>');
								$('#result').append('<div class="rhd-mail-icon"></div>');

							}

						},'json'); // response data format

						}, 3000);

					});
				});



				</script>

				<form action="<?php echo bloginfo('template_url'); ?>/form-handler.php" id="contactForm">

					<h2>Get in touch</h2>

					<p>Need some brand help? Lets talk.</p>

					<div class="rhd-form-container">
						<div class="rhd-row flex flex-row flex-wrap flex-hor-between">

							<div class="rhd-form-group name">
								<input id="name" name="name" type="text">
								<label for="name">Name*</label>
							</div>

							<div class="rhd-form-group company-name">
								<input id="company_name" name="company-name" type="text">
								<label for="company_name">Company Name</label>
							</div>

							<div class="rhd-form-group phone">
								<input id="phone" name="phone" type="text">
								<label for="phone">Phone</label>
							</div>

							<div class="rhd-form-group email">
								<input id="email" name="email" type="email">
								<label for="email">Email*</label>
							</div>

							<div class="rhd-form-group message">
								<textarea id="message" name="message" ></textarea>
								<label for="message">What is your brand opportunity or problem?*</label>
							</div>
							<div class="rhd-form-group">
								<input class="rhd-secondary-btn" type="submit" value="Send Message">
							</div>

						</div>

					</div>

				</form>

				<div id="result"></div>

				<ul id="errors"></ul>

			</div>
		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>