<?php /* Template Name: Work */?>

<?php 
get_header(); 

$condition = "";
$ordberBy = ";";

if($_POST["dir"] == -1)
{
  $condition = $wpdb->prepare(" where ID < %d", $_POST["id"]);
  $ordberBy = " Order By ID Desc;";
}
else if($_POST["dir"] == 1)
{
  $condition = $wpdb->prepare(" where ID > %d", $_POST["id"]);
}



$result = $wpdb->get_row("select * from tblCaseStudy".$condition.$ordberBy);

$result = $result ?? $wpdb->get_row("select * from tblCaseStudy".$ordberBy);



?>
<script>
  function Navigate(dir) {

    const form = document.createElement('form');
    form.method = 'post';
    form.action = "/work/";

    dirField = document.createElement('input');
    dirField.type = 'hidden';
    dirField.name = "dir";
    dirField.value = dir;
    form.appendChild(dirField);

    idField = document.createElement('input');
    idField.type = 'hidden';
    idField.name = "id";
    idField.value = <?php echo $result->ID; ?>;
    form.appendChild(idField);

    

    document.body.appendChild(form);
    form.submit();
  }
</script>
<main class="rhd-main">
  <section class="rhd-work-example-banner">
  <div class="rhd-container">
     <div class="rhd-row flex flex-row flex-wrap flex-hor-center">
      <div class="rhd-work-heading"><h1><?php echo $result->title;?></h1></div>
      <div class="rhd-view-more-work"><a onclick="return Navigate(-1);" title=""><i class="fas fa-chevron-left"></i></a> <span>view more work</span>  <a onclick="return Navigate(1);"  title=""><i class="fas fa-chevron-right"></i></a></div>
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
    </aside>
    <div class="rhd-work-example-logo">
      <img src="<?php echo bloginfo('template_url'); ?><?php echo $result->clientLogo;?>" alt="">
    </div>
    <div class="rhd-content-right brand-description">
      <!-- <p>This Arizona-based client needed to find a new brand name and identity that identified the evolution of their business that had significantly changed since their inception. Navigreat was a name Robin developed along with the tagline ‘Finding new taste territories’ that worked for the dual audience of both foodpreneurs and food retailers. The logo and ‘food map’ helped bring whimsy and direction, clearly delineating the brand position.</p> -->
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
  <?php include 'contact.php'; ?>
</main>
<?php get_footer(); ?>
