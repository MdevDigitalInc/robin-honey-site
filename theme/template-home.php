<?php /* Template Name: Home */?>

<?php get_header(); ?>

<div>




<div class="rhd-container">

  <h1>Home Template</h1>
  <!-- <img src="<?php bloginfo('template_url'); ?>/img/favicon.png" /> -->

  <div class="rhd-row flex flex-row flex-wrap flex-hor-center">

    <div class="rhd-area-1">col</div>
    <div class="rhd-area-2">col</div>
    <div class="rhd-area-3">col</div>
    <div class="rhd-area-4">col</div>
    <div class="rhd-area-5">col</div>


  </div>

  <h1>Brand Naming &amp; Identity</h1>

  <h2>Brand Naming &amp; Identity</h2>

  <h3>Brand Naming &amp; Identity</h3>

  <h4>Brand Naming &amp; Identity</h4>



  <!-- <span style="font-weight:bold; font-size:35px; text-transform: uppercase;">Brand Naming &amp; Identity</span> -->

  <p>Robin has named more than a hundred, products, companies and services and designed thousands of logos. Her ability to review trademarks for knock-out searches and find workable domains as well as design and visualize the logo mean she provides fast and comprehensive advice to accelerate the process of brand naming.</p>

  <p style="font-style: italic;">Robin has named more than a hundred, products, companies and services and designed thousands of logos. Her ability to review trademarks for knock-out searches and find workable domains as well as design and visualize the logo mean she provides fast and comprehensive advice to accelerate the process of brand naming.</p>

  <a href="" class="rhd-main-btn">Meet Robin</a>

  <a href="" class="rhd-secondary-btn">Send Message</a>


  <h1>h1 looks like this</h1>

  <h2>h2 looks like this</h2>

  <h3>h3 looks like this</h3>

  <h4>h4 looks like this</h3>

  <p>Body copy looks like this</p>

  <p>Body copy light looks like this</p>


  <div class="rhd-toggle-nav">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>


  <h1><?php the_title(); ?></h1>

  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php the_content(); ?>


      <?php edit_post_link(); ?>

    </article>
    <!-- /article -->

  <?php endwhile; ?>

  <?php else: ?>

    <!-- article -->
    <article>

      <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

    </article>
    <!-- /article -->

  <?php endif; ?>

</div>


</div>

<?php get_footer(); ?>
