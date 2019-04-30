
			<footer class="rhd-main-footer ">

				<div class="rhd-container">


					
					<div class="rhd-row flex flex-row flex-wrap flex-hor-center">

						<div class="rdh-social-media-footer">

							<ul class="rhd-social">
								<li><i class="fab fa-linkedin"></i></li>
								<li><i class="fab fa-twitter"></i></li>
								<li><i class="fab fa-instagram"></i></li>
								<li><i class="fab fa-pinterest"></i></li>
							</ul>

							
						</div>

						<div>
							<?php $defaults = array(
						    'theme_location'  => 'primary_navigation',
						    'menu'            => '',
						    'container'       => 'ul',
						    'container_class' => '',
						    'container_id'    => '',
						    'menu_class'      => 'rhd-footer-menu flex flex-row-rev flex-wrap flex-hor-center',
						    'menu_id'         => '',
						    'echo'            => true,
						    'fallback_cb'     => 'wp_page_menu',
						    'before'          => '',
						    'after'           => '',
						    'link_before'     => '',
						    'link_after'      => '',
						    'depth'           => 0,
						    'walker'          => ''
						);
					    ?>
					

					   



						<?php wp_nav_menu( $defaults ); ?>
						</div>

						<div>
							
						<?php $defaults = array(
					    'theme_location'  => 'footer_navigation',
					    'menu'            => '',
					    'container'       => 'ul',
					    'container_class' => 'rhd-footer-sub-links',
					    'container_id'    => '',
					    'menu_class'      => '',
					    'menu_id'         => '',
					    'echo'            => true,
					    'fallback_cb'     => 'wp_page_menu',
					    'before'          => '',
					    'after'           => '',
					    'link_before'     => '',
					    'link_after'      => '',
					    'depth'           => 0,
					    'walker'          => ''
						);
				    	?>



						<?php wp_nav_menu( $defaults ); ?>

						</div>


					</div>

				</div>
				<div class="rhd-section-dark-grey">
					<div class="rhd-container">
						&copy; 2019 Robin Honey. All Rights Reserved.
					</div>
					
				</div>
			</footer>
	
		<?php wp_footer(); ?>
	</body>
</html>
