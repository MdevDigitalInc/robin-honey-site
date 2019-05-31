<?php 
  $nav = $wpdb->get_row("select * from tblCaseStudy order by title;");
?>
<footer class="rhd-main-footer ">
	<div class="rhd-container">
		<div class="rhd-row flex flex-row flex-wrap flex-hor-center">
			<div class="rdh-social-media-footer">
				<ul class="rhd-social">
					<li>
						<a href="https://ca.linkedin.com/in/robinhoney/" title="follow us on linkedin" target="_blank">
							<i class="fab fa-linkedin"></i>
						</a>
					</li>
            <li>
              <a href="https://twitter.com/honeylondon?lang=en" title="follow us on twitter" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/robin.honey/" title="follow us on instagram" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
        </ul>
			</div>
		  <div>			
        <ul id="menu-main-navigation-footer" class="rhd-footer-menu flex flex-row flex-wrap flex-hor-center">
          <li id="menu-item-67" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-67">
            <a href="/work/<?php echo $nav->slug; ?>" title="View <?php echo ucwords($nav->title);?> Case Study" >Work</a>
          </li>
          <li id="menu-item-65" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65">
            <a href="/about/" title="View About Page">About</a>
          </li>
        </ul>			
      </div>
				<div class="rhd-flex-list">
          <ul id="menu-sub-links" class="flex flex-row flex-wrap flex-hor-between">
          <?php
            $results = $wpdb->get_results("select * from tblCaseStudy order by title;");
            foreach($results as $row) {
              echo "<li >";
              echo "<a href=\"/work/".$row->slug."\" title=\"View ".ucwords($row->title)." Case Study\">".ucwords($row->title)."</a>";
              echo "</li>";
            }
          ?>  
        </ul>
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
