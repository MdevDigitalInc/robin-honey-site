<?php /* Template Name: Work */?>

<?php 
get_header();
$slug = explode("/",$_SERVER[REQUEST_URI])[2];
if(!$slug) {
  $result = $wpdb->get_row("select * from tblCaseStudy order by title;");
} else {
  $result = $wpdb->get_row("select * from tblCaseStudy where slug = '".$slug."';");
}
  $next = $wpdb->get_row("select * from tblCaseStudy where title > \"".$result->title."\";") ?? $wpdb->get_row("select * from tblCaseStudy order by title;");
  $prev = $wpdb->get_row("select * from tblCaseStudy where title < \"".$result->title."\" order by id desc;") ?? $wpdb->get_row("select * from tblCaseStudy order by title desc;");
?>
<main class="rhd-main">
  <section class="rhd-work-example-banner">
  <div class="rhd-container">
     <div class="rhd-row flex flex-row flex-wrap flex-hor-center">
      <div class="rhd-work-heading"><h1><?php echo $result->title;?></h1></div>
      <div class="rhd-view-more-work"><a href="/work/<?php echo $prev->slug?>" title="View <?php echo ucwords($prev->title);?>"><i class="fas fa-chevron-left"></i></a> <span>view more work</span>  <a href="/work/<?php echo $next->slug?>"  title="View <?php echo ucwords($next->title);?>"><i class="fas fa-chevron-right"></i></a></div>
     </div>
     <img src="<?php echo bloginfo('template_url'); ?><?php echo $result->heroImage; ?>" alt="<?php echo $result->heroAlt ?>">
  </div>
  </section>
  <section class="rhd-container rhd-work-example-info">
    <div class="rhd-row flex flex-row flex-wrap flex-hor-center">
    <aside class="rhd-aside brand-description">
      <h4>Description</h4>
      <p><?php echo $result->caseDescription;?></p>
      <h4>Client Website</h4>

      <?php 
      
      $visual = str_replace("http://", "", $result->clientUrl);
      $visual = str_replace("https://", "", $visual);
      $visual = str_replace("www.", "", $visual);
      $visual = str_replace("/", "", $visual);

      echo "<p><a href=\"". $result->clientUrl."\" title=\"$result->urlTitle\" target=\"_blank\">".$visual."</a></p>";
      
      if($result->note) {
        echo "<p class=\"u-italic small small-note\">NOTE: ". $result->note."<a href=\"https://thearcane.com/\" title=\"Arcane Website\" target=\"_blank\">Arcane.</a></p>";
      }
      
      ?>
    </aside>
    <div class="rhd-work-example-logo">
      <img src="<?php echo bloginfo('template_url'); ?><?php echo $result->clientLogo;?>" alt="<?php echo $result->clientAlt;?>">
    </div>
    <div class="rhd-content-right brand-description">
      <p><?php echo $result->projSummary;?></p>
    </div>
   </div>
  </section>
  <section class="rhd-section-light-grey rhd-testimonial">
    <div class="rhd-container">
      <p class="u-italic u-text-center"><?php echo $result->testimonial;?></p><!--“”-->
      <p class="u-text-center"><strong ><?php echo $result->tAuthor;?></strong><br><?php echo $result->tTitle;?></p>
    </div>
  </section>
  <?php include 'custom-contact-form.php'; ?>
</main>
<?php get_footer(); ?>
