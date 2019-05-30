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
          <a href="<?php echo home_url('/'); ?>cowbell-brewing-co" title="View Cowbell Brewing Co">
            <img src="<?php echo bloginfo('template_url'); ?>/img/work-cowbell-thumbnail.png" alt="Cowbell Brewing Logo">
            <h4 class="u-text-center" >cowbell brewing co.<h4>
          </a>
        </div>
        <div class="rhd-work-box">
          <a href="<?php echo home_url('/'); ?>maxliving/" title="View Maxliving">
            <img src="<?php echo bloginfo('template_url'); ?>/img/work-maxliving-thumbnail.png" alt="Maxliving Logo">
            <h4 class="u-text-center">maxliving</h4>
          </a>
        </div>
        <div class="rhd-work-box">
          <a href="<?php echo home_url('/'); ?>navigreat-fine-foods/" title="View Navigreat Fine Foods">
            <img src="<?php echo bloginfo('template_url'); ?>/img/work-navigreat-thumbnail.png" alt="Navigreat Logo">
            <h4 class="u-text-center">navigreat</h4>
          </a>
        </div>
        <div class="rhd-work-box">
          <a href="<?php echo home_url('/'); ?>navigreat-fine-foods/" title="View Navigreat Fine Foods">
            <img src="<?php echo bloginfo('template_url'); ?>/img/work-navigreat-thumbnail.png" alt="Navigreat Logo">
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
          <a href="<?php echo home_url('/'); ?>about/" class="rhd-base-btn rhd-main-btn" title="About Robin Honey">Meet Robin</a>
        </div>
    </div>
  </section>
  <section class="rhd-brand-naming-identity">
    <div class="rhd-container">
      <h1>Brand Naming &amp; Identity</h1>
      <p>Robin has named more than a hundred, products, companies and services and designed thousands of logos. Her ability to review trademarks for knock-out searches and find workable domains as well as design and visualize the logo mean she provides fast and comprehensive advice to accelerate the process of brand naming.</p>
       <div class="rhd-row flex flex-row flex-wrap flex-hor-center">
        <div class="rhd-brand-box">
          <img src="<?php echo bloginfo('template_url'); ?>/img/logo-cowbell.svg" alt="Cowbell Brewing Co Logo">
        </div>
        <div class="rhd-brand-box">
          <img src="<?php echo bloginfo('template_url'); ?>/img/logo-driversiti.svg" alt="Driversiti Logo">
        </div>
        <div class="rhd-brand-box">
         <img src="<?php echo bloginfo('template_url'); ?>/img/logo-gridiron.svg" alt="Gridiron Logo">
        </div>
        <div class="rhd-brand-box">
          <img src="<?php echo bloginfo('template_url'); ?>/img/logo-renegade.svg" alt="Renagade Logo">
        </div>
        <div class="rhd-brand-box">
          <img src="<?php echo bloginfo('template_url'); ?>/img/logo-anova.svg" alt="Anova Logo">
        </div>
        <div class="rhd-brand-box">
         <img src="<?php echo bloginfo('template_url'); ?>/img/logo-ohvation.svg" alt="Ohvation Logo">
        </div>
        <div class="rhd-brand-box">
          <img src="<?php echo bloginfo('template_url'); ?>/img/logo-shindig.svg" alt="Shindig Logo ">
        </div>
        <div class="rhd-brand-box">
          <img src="<?php echo bloginfo('template_url'); ?>/img/logo-greenius.svg" alt="Greenius Logo">
        </div>
        <div class="rhd-brand-box">
         <img src="<?php echo bloginfo('template_url'); ?>/img/logo-maplemoose.svg" alt="Maplemoose Logo">
        </div>
       </div>
    </div>
  </section>
  <?php include 'custom-contact-form.php'; ?>
</main>

<?php get_footer(); ?>
