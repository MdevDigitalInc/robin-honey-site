			<footer class="rhd-main-footer ">
				<div class="rhd-container">
					<div class="rhd-row flex flex-row flex-wrap flex-hor-center">
						<div class="rdh-social-media-footer">
							<ul class="rhd-social">
								<li><a href="" title="" target="_blank"><i class="fab fa-linkedin"></i></a></li>
								<li><a href="" title="" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="" title="" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="" title="" target="_blank"><i class="fab fa-pinterest"></i></a></li>
							</ul>
							<br>
						</div>
						<div>
							<?php $defaults = array(
						    'theme_location'  => 'primary_navigation',
						    'menu'            => '',
						    'container'       => 'ul',
						    'container_class' => '',
						    'container_id'    => '',
						    'menu_class'      => 'rhd-footer-menu flex flex-row flex-wrap flex-hor-center',
						    'menu_id'         => '',
						    'echo'            => true,
						    'fallback_cb'     => 'wp_page_menu',
						    'before'          => '',
						    'after'           => '',
						    'link_before'     => '',
						    'link_after'      => '',
						    'depth'           => 0,
						    'walker'          => '',
						    //'reverse' => true
						);
					    ?>

						<?php wp_nav_menu( $defaults ); ?>
						</div>
						<div>
						<?php $defaults = array(
					    'theme_location'  => 'footer_navigation',
					    'menu'            => '',
					    'container'       => 'ul',
					    'container_class' => '',
					    'container_id'    => '',
					    'menu_class'      => 'rhd-footer-sub-links flex flex-row flex-wrap flex-hor-center',
					    'menu_id'         => '',
					    'echo'            => true,
					    'fallback_cb'     => 'wp_page_menu',
					    'before'          => '',
					    'after'           => '',
					    'link_before'     => '',
					    'link_after'      => '',
					    'depth'           => 0,
					    'walker'          => '',
					    //'reverse' => true
						);
				    	?>
						<?php wp_nav_menu( $defaults ); ?>
						</div>
					</div>
				</div>
				<div class="rhd-section-dark-grey">
					<div class="rhd-container rhd-copy">
						&copy; 2019 Robin Honey. All Rights Reserved.
					</div>
				</div>
			</footer>
		<?php wp_footer(); ?>
	</body>
</html>
