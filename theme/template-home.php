<?php /* Template Name: Home */?>

<?php get_header(); ?>
<main class="rhd-main">
  <section class="rhd-section-blue rhd-banner">
    <div class="rhd-container">
     <h3 class="u-text-center">A brand is a story that people can connect to. Robin works fluidly between words and images to create new ideas, built solidly on business objectives.</h3>
    </div>
  </section>
  <section>
    <div class="rhd-container rhd-work-examples">
       <div class="rhd-row flex flex-row flex-wrap">
        <div class="rhd-work-box">
          <a href="<?php echo home_url('/'); ?>cowbell-brewing-co" title=""><img src="<?php echo bloginfo('template_url'); ?>/img/work-cowbell-thumbnail.png" alt="">
          <h4 class="u-text-center" >cowbell brewing co.<h4>
          </a>
        </div>
        <div class="rhd-work-box">
          <a href="<?php echo home_url('/'); ?>maxliving/" title=""><img src="<?php echo bloginfo('template_url'); ?>/img/work-maxliving-thumbnail.png" alt="">
            <h4 class="u-text-center">maxliving</h4>
          </a>
        </div>
        <div class="rhd-work-box">
          <a href="<?php echo home_url('/'); ?>navigreat-fine-foods/" title=""><img src="<?php echo bloginfo('template_url'); ?>/img/work-navigreat-thumbnail.png" alt="">
            <h4 class="u-text-center">navigreat</h4>
          </a>
        </div>
       </div>
    </div>
  </section>
  <section class="rhd-meet-robin">
    <div class="rhd-meet-robin-inner">
    </div>
    <div class="rhd-meet-robin-content">
        <div>
          <h2>Independent Brand Consultant, Creative Director, Writer, &amp; Artist</h2>
          <a href="<?php echo home_url('/'); ?>about/" class="rhd-base-btn rhd-main-btn" title="">Meet Robin</a>
        </div>
    </div>
  </section>
  <section class="rhd-brand-naming-identity">
    <div class="rhd-container">
      <h1>Brand Naming &amp; Identity</h1>
      <p>Robin has named more than a hundred, products, companies and services and designed thousands of logos. Her ability to review trademarks for knock-out searches and find workable domains as well as design and visualize the logo mean she provides fast and comprehensive advice to accelerate the process of brand naming.</p>
       <div class="rhd-row flex flex-row flex-wrap flex-hor-center">
       <?php 
       $results = $wpdb->get_results("SELECT * FROM tblLogowall");
       foreach($results as $row)
       {
        echo"<div class=\"rhd-brand-box\">";
        echo"  <img src=\"" . get_bloginfo( 'template_url', 'display' ) . $row->url . "\" alt=\"\">";
        echo"</div>";
       }
       ?>
       </div>
    </div>
  </section>
  <?php include 'contact.php';
  //include 'contact-form.php';
  ?>
</main>

<?php get_footer(); ?>
