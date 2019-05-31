<?php /* Template Name: Work */?>

<?php 
get_header();
$slug = explode("/",$_SERVER[REQUEST_URI])[2];
$results = $wpdb->get_results("select * from tblCaseStudy order by title;");
$current;
$i = 0;
$count = count($results);
if(!$slug) {
  $current = $results[0];
} else {
  for(; $i < $count; $i++)
  {
    if($results[$i]->slug == $slug)
    {
      break;
    }
  }
}


  $current = $results[$i];
  $next = $i == $count-1 ? $results[0] : $results[$i+1];
  $prev = $i == 0 ? $results[$count-1] : $results[$i-1];
?>
<main class="rhd-main">
  <section class="rhd-work-example-banner">
  <div class="rhd-container">
     <div class="rhd-row flex flex-row flex-wrap flex-hor-center">
      <div class="rhd-work-heading"><h1><?php echo $current->title;?></h1></div>
      <div class="rhd-view-more-work"><a href="/work/<?php echo $prev->slug?>" title="View <?php echo ucwords($prev->title);?> Case Study"><i class="fas fa-chevron-left"></i></a> <span>view more work</span>  <a href="/work/<?php echo $next->slug?>"  title="View <?php echo ucwords($next->title);?>"><i class="fas fa-chevron-right"></i></a></div>
     </div>
     <img src="<?php echo bloginfo('template_url'); ?><?php echo $current->heroImage; ?>" alt="<?php echo $current->heroAlt ?>">
  </div>
  </section>
  <section class="rhd-container rhd-work-example-info">
    <div class="rhd-row flex flex-row flex-wrap flex-hor-center">
    <aside class="rhd-aside brand-description">
      <h4>Description</h4>
      <p><?php echo $current->caseDescription;?></p>
      <h4>Client Website</h4>

      <?php 
      $visual = str_replace("http://", "", $current->clientUrl);
      $visual = str_replace("https://", "", $visual);
      $visual = str_replace("www.", "", $visual);
      $visual = str_replace("/", "", $visual);

      echo "<p><a href=\"". $current->clientUrl."\" title=\"$current->urlTitle\" target=\"_blank\">".$visual."</a></p>";

      if($current->note) {
        echo "<p class=\"u-italic small small-note\">NOTE: ". $current->note."<a href=\"https://thearcane.com/\" title=\"Arcane Website\" target=\"_blank\">Arcane.</a></p>";
      }

      ?>
    </aside>
    <div class="rhd-work-example-logo">
      <img src="<?php echo bloginfo('template_url'); ?><?php echo $current->clientLogo;?>" alt="<?php echo $current->clientAlt;?>">
    </div>
    <div class="rhd-content-right brand-description">
      <p><?php echo $current->projSummary;?></p>
    </div>
   </div>
  </section>
  <section class="rhd-section-light-grey rhd-testimonial">
    <div class="rhd-container">
      <br>
      <br>
      <p class="u-italic u-text-center"><?php echo $current->testimonial;?></p><!--“”-->
      <br>
      <p class="u-text-center"><strong><?php echo $current->tAuthor;?></strong><br><?php echo $current->tTitle;?></p>
    </div>
  </section>
  <?php include 'custom-contact-form.php'; ?>
</main>
<?php get_footer(); ?>
