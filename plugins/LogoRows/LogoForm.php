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
          $target_file = "/img/uploads/logos/".basename($_FILES[$uploader]["name"]);

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
        $client_image = "";
    
   
    if($_FILES["clientUpload"]["name"]) {
      $client_image = imageUpload("clientUpload");
    }
    echo $imagesSection . strlen($imagesSection) ."<br/>";

  if ($_POST["subType"] == "Update") {
      
      if($client_image)
      {
        $query = $wpdb->prepare(
          "update tblLogowall set url = %s, alt = %s where ID = %d;",
          $client_image,
          $_POST["txt_alt"],
          $_POST["id"]
        );
      } else {
        $query = $wpdb->prepare(
          "update tblLogowall set alt = %s where ID = %d;",
          $_POST["txt_alt"],
          $_POST["id"]
        );
      }
      
      
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
      myForm.action = "options-general.php?page=logo-wall-data";
      


      var dropDown = document.getElementById("ddLogos");

      $('<input />').attr('type', 'hidden')
      .attr('name', "subType")
      .attr('value', subType)
      .appendTo('#logoForm');


      $('<input />').attr('type', 'hidden')
      .attr('name', "id")
      .attr('value',dropDown.options[dropDown.selectedIndex].innerHTML)
      .appendTo('#logoForm');
    
    


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

  
    $results = $wpdb->get_results("SELECT * FROM tblLogowall");
    
  ?>
   <form id="logoForm" method="post" enctype="multipart/form-data">


    <?php
      
    ?>

    <div>
    <select id="ddLogos">
    <?php
      foreach($results as $row)
      {
        echo "<option value=\"$row->ID\">$row->alt</option>";//" . get_bloginfo( 'template_url', 'display' ) . $row->url . "
      }
    ?>
    </select>
    </div>


    <div>
      <br/>
      <label for="clientUpload">Client Logo: </label><br/>
      <input type="file" id="clientUpload" name="clientUpload" >
    </div>
    <div>
      <img id="clientCurrent" height="20%" width="20%" src="<?php echo bloginfo('template_url') .  $results[0]->url; ?>" />
      <img id="clientPreview" height="20%" width="20%"  />
    </div>

    <br/>
    <br/>
    <div>
      <label for="txt_alt">Logo Alt Text: </label><br/>
      <input type="text" name="txt_alt" id="txt_alt" value="<?php echo $results[0]->alt?>"/>
    </div>
    
    <script>

  jQuery( document ).on( "change", "#ddLogos", function() {
    
    var id = document.getElementById("ddLogos").value;
    var query = "Select * from tblLogowall where ID = " + id;
  
    var data = {
      'action': 'logo_action',
      'query': query
    };
    var msTM = document.getElementById('msTeamMemebers');
    // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
    jQuery.post(ajaxurl, data, function(response) {
      //alert('Got this from the server: ' + JSON.stringify(response));
      if( response.length > 0)
      {
        document.getElementById("txt_alt").value =  response[0].alt;
        document.getElementById("clientCurrent").src = "<?php echo get_bloginfo( 'template_url', 'display' ) ?>" + response[0].url; 
      }
    });
  
  });


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



    // jQuery( document ).on( "change", "#ddLogos", function() {
    //   var url = document.getElementById("ddLogos").value;
    //   $('#clientCurrent').attr('src', url);
    // });


    </script>
  </form> 
  <?php

  echo "<button type=\"button\" onclick='submitForm(\"Update\")' Name='btnFUpdate'>Update</button>";
  echo "</div>";
  echo "</div>";
  
}
?>
