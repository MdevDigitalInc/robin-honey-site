<?php /* Template Name: Work Maxliving */?>

<?php get_header(); ?>
<main class="rhd-main">
  <section class="rhd-work-example-banner">
  <div class="rhd-container">
     <div class="rhd-row flex flex-row flex-wrap flex-hor-center">
      <div class="rhd-work-heading">
        <h1>maxliving</h1>
      </div>
      <div class="rhd-view-more-work">
        <a href="<?php echo home_url('/'); ?>cowbell-brewing-co" title="View Cowbell Brewing Co">
          <i class="fas fa-chevron-left"></i>
        </a>
        <span>view more work</span>
        <a href="<?php echo home_url('/'); ?>navigreat-fine-foods/" title="View Navigreat Fine Foods"><i class="fas fa-chevron-right"></i></a></div>
      </div>
      <img src="<?php echo bloginfo('template_url'); ?>/img/maxliving-hero.png" alt="Maxliving Hero Image">
  </div>
  </section>
  <section class="rhd-container rhd-work-example-info">
    <div class="rhd-row flex flex-row flex-wrap flex-hor-center">
    <aside class="rhd-aside brand-description">
      <h4>Description</h4>
      <p class="small-line-height">Brand Naming, Brand Identity, Brand Strategy</p>
      <h4>Client Website</h4>
      <p><a href="https://www.maxliving.com" title="Maxliving Website" target="_blank">maxliving.com</a></p>
      <p class="u-italic small small-note">NOTE: Creative work was executed by <a href="https://thearcane.com/" title="Arcane Website" target="_blank">Arcane.</a></p>
    </aside>
    <div class="rhd-work-example-logo">
      <img src="<?php echo bloginfo('template_url'); ?>/img/logo-maxliving.png" alt="Maxliving Logo">
    </div>
    <div class="rhd-content-right brand-description">
      <p>Robin rebranded this alternative health care business based in the US with a shortened name and a new brand position of the ‘5 essentials of health with chiropractic at the core.’ Robin acted as Creative Director for the application of the brand identity to packaging for their supplement product line, and corporate communication materials including office signage.</p>
    </div>
   </div>
  </section>
  <section class="rhd-section-light-grey rhd-testimonial">
    <div class="rhd-container">
      <p class="u-italic u-text-center">“I’ve worked with Robin twice over the years - once for my personal business and for the rebrand of MaxLiving. Her leadership and expertise made our transformation both exciting and perfectly suited to our business strategy. MaxLiving doctors were thrilled with the visuals and colour palette of the rebrand executed by Arcane under Robin’s leadership. It has given us new energy and direction.”</p><br>
      <p class="u-text-center"><strong >Dr. B.J. Hardick</strong><br>MaxLiving, Board of Directors</p>
    </div>
  </section>
  <?php include 'custom-contact-form.php'; ?>
</main>
<?php get_footer(); ?>
