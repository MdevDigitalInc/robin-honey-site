<?php /* Template Name: Work */?>

<?php 
get_header(); 


$slug = explode("/",$_SERVER[REQUEST_URI])[2];

if(!$slug) {
  $result = $wpdb->get_row("select * from tblCaseStudy;");
} else {
  $result = $wpdb->get_row("select * from tblCaseStudy where slug = '".$slug."';");
}

if(!$result)
{
echo " YOU NEED TO WRITE A REDIRECT TO A 404!";
}

$next = $wpdb->get_row("select * from tblCaseStudy where id > ".$result->ID.";") ?? $wpdb->get_row("select * from tblCaseStudy;");
$prev = $wpdb->get_row("select * from tblCaseStudy where id < ".$result->ID." order by id desc;") ?? $wpdb->get_row("select * from tblCaseStudy order by id desc;");


?>
<main class="rhd-main">
  <section class="rhd-work-example-banner">
  <div class="rhd-container">
     <div class="rhd-row flex flex-row flex-wrap flex-hor-center">
      <div class="rhd-work-heading"><h1><?php echo $result->title;?></h1></div>
      <div class="rhd-view-more-work"><a href="/work/<?php echo $prev->slug?>" title=""><i class="fas fa-chevron-left"></i></a> <span>view more work</span>  <a href="/work/<?php echo $next->slug?>"  title=""><i class="fas fa-chevron-right"></i></a></div>
     </div>
     <img src="<?php echo bloginfo('template_url'); ?><?php echo $result->heroImage; ?>" alt="">
  </div>
  </section>
  <section class="rhd-container rhd-work-example-info">
    <div class="rhd-row flex flex-row flex-wrap flex-hor-center">
    <aside class="rhd-aside brand-description">
      <h4>Description</h4>
      <p><?php echo $result->caseDescription;?></p>
      <h4>Client Website</h4>
      <p><a href="<?php echo $result->clientUrl;?>" title=""><?php echo $result->clientUrl;?></a></p>
      <?php echo "fasdfasdf" . $slug[0];?>
    </aside>
    <div class="rhd-work-example-logo">
      <img src="<?php echo bloginfo('template_url'); ?><?php echo $result->clientLogo;?>" alt="">
    </div>
    <div class="rhd-content-right brand-description">
      <p><?php echo $result->projSummary;?></p>
    </div>
   </div>
  </section>
  <?php
  
  ?>
  <section class="rhd-section-light-grey rhd-testimonial">
    <div class="rhd-container">
      <p class="u-italic u-text-center"><?php echo $result->testimonial;?></p><!--“”-->
      <p class="u-text-center"><strong ><?php echo $result->tAuthor;?></strong><br><?php echo $result->tTitle;?></p>
    </div>
  </section>
  <?php include 'contact.php'; ?>
</main>
<?php get_footer(); ?>
