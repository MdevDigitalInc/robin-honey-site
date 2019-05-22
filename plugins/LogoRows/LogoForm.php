<?php
/*
Plugin Name: Logo Editability
Description: CRUD for the block of logos
Author: Graham C
Author URI: http://example.com/my-team-plugin
*/

/** Step 2. basics for plugin*/
add_action( 'admin_menu', 'logo_wall_menus' );
add_action( 'wp_ajax_logo_action', 'logo_action' );
add_action( 'wp_ajax_logo_downloads_action', 'logo_wall_action' );

function logo_action() {
  
	global $wpdb; // this is how you get access to the database
  header('Content-Type: application/json');
  echo json_encode($wpdb->get_results(stripslashes($_POST['query'])));

	wp_die();
}

/** Step 1. basics for plugin */
function logo_wall_menus() {
  //add_options_page( 'My Plugin Options', 'Updates For', 'manage_options', 'glen-data-form', 'my_bulk_options' );
  add_options_page( 'Logos Options', 'Update Logos Wall', 'manage_options', 'logo-wall-data', 'logo_wall_options' );
}

function logoUpload($uploader) {
 
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


function logo_wall_options() {
  //wp_enqueue_script( 'DataConnection', get_template_directory_uri() . '../../../plugins/LogoRows/DataConnections.js', array('jquery'), '1.0', true );
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
      $hero_image = logoUpload("heroUpload");
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
      
      var myForm = document.getElementById("logoForm");
      myForm.action = "options-general.php?page=logo-wall-data&id="+<?php echo $_GET['id']; ?>;
      

      $('<input />').attr('type', 'hidden')
      .attr('name', "subType")
      .attr('value', subType)
      .appendTo('#logoForm');

    <?php
    if($_GET['id'] != null && $_GET['id'] != "new-post"){
      
      echo "$('<input />').attr('type', 'hidden')";
      echo ".attr('name', \"id\")";
      echo ".attr('value',".$_GET['id'].")";
      echo ".appendTo('#logoForm');";
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

  
    $result = $wpdb->get_row("SELECT * FROM tblCaseStudy where ID = ". $_GET['id']);
    $hero_image = $result->heroImage;
    $client_image = $result->clientLogo;
  ?>
   <form id="logoForm" method="post" enctype="multipart/form-data">


    <?php
      
    ?>

    <div>
    <select id="ddLogos">
    <?php
      //echo "<option value=\"$row->url\">$row->ID</option>";
      echo "<option value=\"//localhost:4000/wp-content/themes/robin-honey/img/logo-cowbell.svg\">1</option>";
      echo "<option value=\"//localhost:4000/wp-content/themes/robin-honey/img/logo-driversiti.svg\">2</option>";
    ?>
    </select>
    </div>


    <div>
      <br/>
      <label for="clientUpload">Client Logo: </label><br/>
      <input type="file" id="clientUpload" name="clientUpload" >
    </div>
    <div>
      <img id="clientCurrent" height="20%" width="20%" src="/wp-content/themes/robin-honey/img/logo-cowbell.svg" />
      <img id="clientPreview" height="20%" width="20%"  />
    </div>
    
    <script>


    function readURL(input, preview) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#'+preview).attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]);
      
      
    }
    }

    $("#clientUpload").change(function() {
    readURL(this, "clientPreview");
    });



    jQuery( document ).on( "change", "#ddLogos", function() {
    
    var url = document.getElementById("ddLogos").value;
    $('#clientPreview').attr('src', url);


    });


    </script>
  </form> 
  <?php

   echo "<button type=\"button\" onclick='submitForm(\"Update\")' Name='btnFUpdate'>Update</button>";
   echo "<button type=\"button\" onclick='submitForm(\"Create\")' name='btnFCreate'>Create</button>";
   echo "<input type='button' id='btnDelete' value='Delete' />";
  echo "</div>";
  echo "</div>";
  
}
?>
