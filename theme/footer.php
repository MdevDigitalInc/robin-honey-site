<footer class="rhd-main-footer ">
	<div class="rhd-container">
		<div class="rhd-row flex flex-row flex-wrap flex-hor-center">
			<div class="rdh-social-media-footer">
			<ul class="rhd-social">
				<li><a href="https://ca.linkedin.com/in/robinhoney/" title="" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://twitter.com/honeylondon?lang=en" title="" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/robin.honey/" title="" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.pinterest.ca/honeydesign/" title="" target="_blank"><i class="fab fa-pinterest"></i></a></li>
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
			<div class="rhd-flex-list">
			<?php $defaults = array(
			'theme_location'  => 'footer_navigation',
			'menu'            => '',
			'container'       => 'ul',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'flex flex-row flex-wrap flex-hor-between',
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
