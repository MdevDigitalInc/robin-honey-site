<section id="contact" class="rhd-section-blue rhd-contact-form" >
	<div class="rhd-container">
		<form action="<?php echo bloginfo('template_url'); ?>/form-handler.php" id="contactForm">
			<h2>Get in touch</h2>
			<p>Need some brand help? Let's talk.</p>
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
	</div>
</section>


