<?php /* Template Name: About */?>

<?php 
get_header(); 

$about = $wpdb->get_results ("SELECT * FROM wp_posts where post_type = \"about\" and post_status =\"publish\" and menu_order = 0 and post_status = \"publish\";");
$bio = $wpdb->get_results ("SELECT * FROM wp_posts where post_type = \"about\" and post_status =\"publish\" and menu_order = 1 and post_status = \"publish\";");
$other = $wpdb->get_results ("SELECT * FROM wp_posts where post_type = \"about\" and post_status =\"publish\" and menu_order = 2 and post_status = \"publish\";");


?>

<main class="rhd-main">
  <section class="rhd-about-robin">
    <div class="rhd-container rhd-about-container">
      <div class="rhd-row flex flex-row flex-wrap flex-hor-center rhd-section-light-grey about">
      <div class="rhd-main-photo">
      <img src="<?php echo bloginfo('template_url'); ?>/img/robin-honey-portrait.png" alt="">
      </div>
      <div class="rhd-about-content">
      <?php 
      echo "<h1>".stripslashes($about[0]->post_title)."</h1>";
      echo stripslashes($about[0]->post_content);
      ?>
      <!-- <h1>About Robin </h1>
      <p>Robin is skilled at finding the client’s core purpose through her investigative process and interpreting that into new visual and verbal expressions. Called the ‘Brand Queen’ she has worked with and invented hundreds of brands over her 30-year career,  including for national corporations like Labatt Brewing and Chrysler, international consumer brands like Jolly Jumper and 3M, and entrepreneurial start-ups. She has amassed a specialist expertise in craft beer having branded Forked River, Cowbell Brewing, Equals Brewing and rebranded Big Rock Brewery.</p> -->
      <a href="" class="rhd-base-btn rhd-main-btn" title="">View Work</a>
      </div>
      </div>
      <div class="rhd-bio">
      
      
      <?php 
      echo "<h1>".stripslashes($bio[0]->post_title)."</h1>";
      echo stripslashes($bio[0]->post_content);
      ?>
      </div>
    </div>
  </section>
  <section class="rhd-section-light-grey about-info">
    <div class="rhd-container">
      <div class="rhd-row flex flex-row flex-wrap">
        <aside class="rhd-aside about">
        <h2>Contact</h2>
         <ul class="rhd-list contact">
          <li class="email"><a href="mailto:info@robinhoney.com" title="">info@robinhoney.com</a></li>
        </ul>
        <p class="small-margin small-width"><span class="text-light">Check out my social media channels: </span></p>
        <ul class="rhd-list contact">
          <li><strong>LinkedIn – </strong><a href="https://ca.linkedin.com/in/robinhoney/" title="">Robin Honey</a></li>
          <li><strong>Twitter –  </strong><a href="https://twitter.com/honeylondon?lang=en" title="">@honeylondon </a></li>
          <li><strong>Instagram – </strong><a href="https://www.instagram.com/robin.honey/" title="">Robin Honey </a></li>
          <li><strong>Pinterest – </strong><a href="https://www.pinterest.ca/honeydesign/" title="">Robin Honey</a></li>
        </ul>
        </aside>
        <div class="rhd-content-right about">
        <?php
          foreach($other as $row)
          {
            echo "<h2>".stripslashes($row->post_title)."</h2>";
            echo stripslashes($row->post_content);
          }
        ?>
        </div>
      </div>
    </div>
  </section>
<?php include 'contact.php'; ?>
</main>
<?php get_footer(); ?>

