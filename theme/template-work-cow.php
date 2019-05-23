<?php /* Template Name: Work Cowbell */?>

<?php get_header(); ?>
<main class="rhd-main">
  <section class="rhd-work-example-banner">
  <div class="rhd-container">
     <div class="rhd-row flex flex-row flex-wrap flex-hor-center">
      <div class="rhd-work-heading"><h1>cowbell brewing co.</h1></div>
      <div class="rhd-view-more-work"><a href="<?php echo home_url('/'); ?>navigreat-fine-foods/" title=""><i class="fas fa-chevron-left"></i></a> <span>view more work</span>  <a href="<?php echo home_url('/'); ?>maxliving/" title=""><i class="fas fa-chevron-right"></i></a></div>
     </div>
     <img src="<?php echo bloginfo('template_url'); ?>/img/cowbell-hero.png" alt="">
  </div>
  </section>
  <section class="rhd-container rhd-work-example-info">
    <div class="rhd-row flex flex-row flex-wrap flex-hor-center">
    <aside class="rhd-aside brand-description">
      <h4>Description</h4>
      <p class="small-line-height">Brand Naming, Brand Identity, Brand Strategy</p>
      <h4>Client Website</h4>
      <p><a href="http://www.cowbellbrewing.com" title="" target="_blank">cowbellbrewing.com</a></p>
      <p class="u-italic small small-note">NOTE: Artwork, website and media for Cowbell was executed by  <a href="https://thearcane.com/" title="" target="_blank">Arcane.</a></p>
    </aside>
    <div class="rhd-work-example-logo">
      <img src="<?php echo bloginfo('template_url'); ?>/img/logo-cowbell.svg" alt="">
    </div>
    <div class="rhd-content-right brand-description">
      <p>Robin worked on this brand from start to finish, from creating the company brand name, tag line, all the beer varietals names and stories, as well as directing all creative for the packaging and brand collateral. Located in small rural town in Ontario, this craft brewer had to bring people both to the destination brewery and to liquor retail stores. The town has been transformed as the brewery has become a Canadian destination under the leadership of the incredible Cowbell team.</p>
    </div>
   </div>
  </section>
  <section class="rhd-section-light-grey rhd-testimonial">
    <div class="rhd-container">
      <p class="u-italic u-text-center">“The brand for Cowbell has been instrumental in our start-up success. The name and the logo connect with people and elicit ‘more Cowbell!’ comments wherever we go with our beer. The brand enjoyed early acceptance, significantly bolstered by the strength of the packaging and our story. We couldn’t have done this without a solid, authentic brand and the creative work by Arcane, led by Robin Honey.”</p><br>
      <p class="u-text-center"><strong >Steven Sparling</strong><br>Founder &amp; CEO of Cowbell Brewing Co.</p>
    </div>
  </section>
  <?php include 'contact.php'; ?>
</main>
<?php get_footer(); ?>
