<?php
/*
Plugin Name: Case Study Editability
Description: CRUD for About Page
Author: Graham C
Author URI: http://example.com/my-team-plugin
*/

/** Step 2. basics for plugin*/
add_action( 'admin_menu', 'my_plugin_menus' );
add_action( 'wp_ajax_case_action', 'case_action' );
add_action( 'wp_ajax_case_downloads_action', 'case_study_action' );

function case_action() {
  
	global $wpdb; // this is how you get access to the database
  header('Content-Type: application/json');
  echo json_encode($wpdb->get_results(stripslashes($_POST['query'])));

	wp_die();
}

/** Step 1. basics for plugin */
function my_plugin_menus() {
  //add_options_page( 'My Plugin Options', 'Updates For', 'manage_options', 'glen-data-form', 'my_bulk_options' );
  add_options_page( 'Case Studies Options', 'Update Case Studies', 'manage_options', 'case-study-data', 'case_study_options' );
}

function imageUpload($uploader) {
 
    $target_dir = MENU_ROOT."/themes/robin-honey/img/uploads/";//mdev-theme
    $target_file = $target_dir . basename($_FILES[$uploader]["name"]);//$submitted .
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $error = "";
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) 
    {
      $check = getimagesize($_FILES[$uploader]["tmp_name"]);
      if($check !== false) {
          $_SESSION["error"] = "File is an image - " . $check["mime"] . ".";
          die($_SESSION["error"]);  
          $uploadOk = 1;
      } else {
        $_SESSION["error"] = "File is not an image.";
        die($_SESSION["error"]);
        $uploadOk = 0;
      }
    }
    if($uploadOk == 1) {
    //Check if file already exists
    if (file_exists($target_file)) {
        unlink($target_file);
    }
    // Check file size
    if ($_FILES[$uploader]["size"] > 10000000) {
      $_SESSION["error"] =  "Sorry, your file is too large.";
      die($_SESSION["error"]);
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "svg") {
      $_SESSION["error"] =  "Sorry, only JPG, JPEG, & PNG files are allowed.";
      die($_SESSION["error"]);
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      $_SESSION["error"] = "Sorry, your file was not uploaded.";
      die($_SESSION["error"]);
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES[$uploader]["tmp_name"], $target_file)) {
        
          //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          $target_file = "/img/uploads/".basename($_FILES[$uploader]["name"]);

      } else {
          $_SESSION["error"] =  "Sorry, there was an error uploading your file.";
          die($_SESSION["error"]);    
      }
    }
  }

  return $target_file;
}


function case_study_options() {
  wp_enqueue_script( 'DataConnection', get_template_directory_uri() . '../../../plugins/CaseStudies/DataConnections.js', array('jquery'), '1.0', true );
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
  // Menu Admin Forms
  define ('MENU_ROOT', realpath(dirname(__FILE__)."/../../"));
  // echo SITE_ROOT;
  
  global $wpdb;

  if($_POST["subType"] == "Create" || $_POST["subType"] == "Update")
  {
    $hero_image = "";
    $client_image = "";
    $imagesSection = "";

    if($_FILES["heroUpload"]["name"]) {
      $hero_image = imageUpload("heroUpload");
      $imagesSection = $wpdb->prepare(", heroImage = %s", $hero_image);
    }
    echo $imagesSection . strlen($imagesSection) ."<br/>";
   
    if($_FILES["clientUpload"]["name"]) {
      $client_image = imageUpload("clientUpload");
      $imagesSection = strlen($imagesSection) > 0 ? $wpdb->prepare( $imagesSection. ", clientLogo = %s", $client_image) : $wpdb->prepare(", clientLogo = %s", $client_image);
    }
    echo $imagesSection . strlen($imagesSection) ."<br/>";


    if($_POST["subType"] == "Create") { 
      $wpdb->get_results( 
        $wpdb->prepare("insert into tblCaseStudy (title,heroImage,caseDescription,clientUrl,clientLogo,projSummary,testimonial,tAuthor,tTitle,seoTitle,seoDescription) values(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s);",
          $_POST["txt_title"],
          $hero_image,
          $_POST["txt_desc"],
          $_POST["txt_url"],
          $client_image,
          $_POST["ta_summary"],
          $_POST["ta_testimonial"],
          $_POST["txt_tTitle"],
          $_POST["txt_tName"],
          $_POST["seo_title"],
          $_POST["seo_desc"]
        )
      );
    } else if ($_POST["subType"] == "Update") {
      
      $query = $wpdb->prepare(
        "update tblCaseStudy set title = %s, caseDescription = %s, clientUrl = %s, projSummary = %s, testimonial = %s, tAuthor = %s, tTitle = %s, seoTitle = %s, seoDescription = %s". $imagesSection ." where ID = %d;",
        $_POST["txt_title"],
        $_POST["txt_desc"],
        $_POST["txt_url"],
        $_POST["ta_summary"],
        $_POST["ta_testimonial"],
        $_POST["txt_tTitle"],
        $_POST["txt_tName"],
        $_POST["seo_title"],
        $_POST["seo_desc"],
        $_POST["id"]
      );
      
      $wpdb->get_results( 
        $query
      );
  }
}


  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!-- [ JQUERY ] -->
  <style> 
  .mdev-error {
      border-top: 4px solid red !important;
      border-bottom: 4px solid red !important;
      color: red!important;
    }
  </style>
  <script>

function clearErrors(){
    $('.mdev-error').removeClass('mdev-error');
  }


  function validateFields(payload, error){
      // Initiate Loop Var
      var i;
      // Error Flag
      var errorPresent = false;

      // Check for Empty Fields
      for (i = 0; i < payload.length; i++){
        if (payload[i].value === "" || payload[i].value == 0){
          errorPresent = true;
          $(payload[i]).addClass('mdev-error');
        }
      }
      // Return Errors
      if (errorPresent === true) {
        alertify.error(error);
        return false;
      }
      else {
        return true;
      }
  }
  function submitForm(subType) {
    // Clear Errors First
    this.clearErrors();
    // Collect Fields
    let formFields = $('[data-required]');
    // Validate fields and store result
    let fieldsValid = this.validateFields(formFields, "Please fill in the highlighted fields.");//validation.errors.form");
      let callback = this.formSubmitted;
    // // Checks: Fields are filled, Email is Valid, Phone is Valid, No Spam.
    if ( fieldsValid ) {
      // Flip flag for UX animations
      this.loading = true;
      
      var myForm = document.getElementById("caseForm");
      myForm.action = "options-general.php?page=case-study-data&id="+<?php echo $_GET['id']; ?>;
      

      $('<input />').attr('type', 'hidden')
      .attr('name', "subType")
      .attr('value', subType)
      .appendTo('#caseForm');

      // $('<input />').attr('type', 'hidden')
      // .attr('name', "post_content")
      // .attr('value', richTextField.document.getElementsByTagName('body')[0].innerHTML) //textContent
      // .appendTo('#caseForm');

    <?php
    if($_GET['id'] != null && $_GET['id'] != "new-post"){
      
      echo "$('<input />').attr('type', 'hidden')";
      echo ".attr('name', \"id\")";
      echo ".attr('value',".$_GET['id'].")";
      echo ".appendTo('#caseForm');";
    }
      ?>
    


      myForm.submit();
    }
    // Else, likely SPAM
    else {
      // $(".mdev-error-group").addClass('active');
      console.log('Submission flagged as spam');
    }
  }
  </script>
  <?php
  echo "<div class='admin-container' style='width: 100%; position: relative; display: flex; flex-wrap: wrap; box-sizing: border-box;'>";
  echo "<div class='admin-group' style='width:40%; border: 1px #d0d0d0 solid; padding: 10px; margin: 5px;'>";
  // Team Member Admin Forms

  if($_GET['id'] == null)
  {
    ?>
      <a href='?page=case-study-data&id=new-post'>Add New</a>
      <button onclick="">Delete</button>
      <br />
    <?php
    
    $result = $wpdb->get_results ("SELECT * FROM tblCaseStudy;");//where post_type = \"about\"
    foreach ( $result as $page ) { 
      echo "<input type=\"checkbox\" value=\"".$page->ID."\"><a href='?page=case-study-data&id=".$page->ID."'>".$page->title."</a> <br />"; 
    }
    
  }
  else
  {    
    $result = $wpdb->get_row("SELECT * FROM tblCaseStudy where ID = ". $_GET['id']);
    $hero_image = $result->heroImage;
    $client_image = $result->clientLogo;
  ?>
   <form id="caseForm" method="post" enctype="multipart/form-data">

    <div>
      <label for="txt_tidtle">Title: </label><br/>
      <input type="text" name="txt_title" value="<?php echo $result->title;?>"/>
    </div>

    <div>
      <br/>
      <label for="heroUpload">Hero Image: </label><br/>
      <input type="file" id="heroUpload" name="heroUpload" >
    </div>
    <div>
      <img id="heroPreview" height="20%" width="20%" src="/wp-content/themes/robin-honey/<?php echo $hero_image ?>" />
    </div>

    <div>
      <label for="txt_desc">Description: </label><br/>
      <input type="text" id="txt_desc" name="txt_desc" value="<?php echo $result->caseDescription;?>"/>
    </div>

    <div>
      <br/>
      <label for="txt_url">Client Url: </label><br/>
      <input type="text" name="txt_url" id="txt_url" value="<?php echo $result->clientUrl;?>"/>
    </div>

    <div>
      <br/>
      <label for="clientUpload">Client Logo: </label><br/>
      <input type="file" id="clientUpload" name="clientUpload" >
    </div>
    <div>
      <img id="clientPreview" height="20%" width="20%" src="/wp-content/themes/robin-honey/<?php echo $client_image ?>" />
    </div>

    <div>
      <br/>
      <label for="ta_summary">Project Summary</label><br/>
      <textarea id="ta_summary" name="ta_summary" ><?php echo $result->projSummary;?></textarea>
    </div>

    <div>
      <br/>
      <label for="ta_testimonial">Testimonial: </label><br/>
      <textarea id="ta_testimonial" name="ta_testimonial" ><?php echo $result->testimonial;?></textarea>
    </div>

    <div>
      <label for="txt_tTitle">Testimonial by title: </label><br/>
      <input type="text" id="txt_tTitle" name="txt_tTitle" value="<?php echo $result->tTitle;?>"/>
    </div>

    <div>
      <label for="txt_tName">Testimonial by name: </label><br/>
      <input type="text" id="txt_tName" name="txt_tName" value="<?php echo $result->tAuthor;?>"/>
    </div>


    <div>
      <label for="seo_title">Seo Title: </label><br/>
      <input type="text" id="seo_title" name="seo_title" <?php echo $result->seoTitle;?>/>
    </div>

    <div>
      <br/>
      <label for="seo_desc">Seo Description</label><br/>
      <textarea id="seo_desc" name="seo_desc" <?php echo $result->seoDescription;?>></textarea>
    </div>
    
  </form> 
  <?php

   echo "<button type=\"button\" onclick='submitForm(\"Update\")' Name='btnFUpdate'>Update</button>";
   echo "<button type=\"button\" onclick='submitForm(\"Create\")' name='btnFCreate'>Create</button>";
   echo "<input type='button' id='btnDelete' value='Delete' />";
  echo "</div>";
  echo "</div>";
  }
}
?>
