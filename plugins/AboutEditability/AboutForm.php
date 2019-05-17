<?php
/*
Plugin Name: About Page Editability
Description: CRUD for Case Studies
Author: Graham C
Author URI: http://example.com/my-team-plugin
*/

/** Step 2. basics for plugin*/
add_action( 'admin_menu', 'about_page_menus' );
add_action( 'wp_ajax_about_action', 'about_action' );
add_action( 'wp_ajax_about_page_action', 'about_page_action' );

function about_action() {
  
	global $wpdb; // this is how you get access to the database
  header('Content-Type: application/json');
  echo json_encode($wpdb->get_results(stripslashes($_POST['query'])));

	wp_die();
}

function about_page_action()
{
  global $wpdb;
  define ('SITE_ROOT', realpath(dirname(__FILE__)."/../../"));

  
  $query = "select FlagStringValue from tblSiteConfig where ID = ". $_POST["fileNum"];
  $results = $wpdb->get_results($query);


  
  $query = "update tblSiteConfig set FlagStringValue = '" . $target_file . "' where ID = " . $_POST["fileNum"];
  $results = $wpdb->get_results($query);

  wp_die($target_file);
}

/** Step 1. basics for plugin */
function about_page_menus() {
  //add_options_page( 'My Plugin Options', 'Updates For', 'manage_options', 'glen-data-form', 'my_bulk_options' );
  add_options_page( 'About Page Options', 'Update About Page', 'manage_options', 'about-page-data', 'about_page_options' );
}


function about_page_options() {
  wp_enqueue_script( 'DataConnection', get_template_directory_uri() . '../../../plugins/AboutEditability/DataConnections.js', array('jquery'), '1.0', true );
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
  // Menu Admin Forms
  define ('MENU_ROOT', realpath(dirname(__FILE__)."/../../"));
  // echo SITE_ROOT;
  
  global $wpdb;

  if($_POST["subType"] == "Create" || $_POST["subType"] == "Update")
  {
    

    if($_POST["subType"] == "Create") { 



      $author_id = 1;
      $curDate = date('Y-m-d H:i:s');
      $post_title = $_POST["post_title"];
      $post_name = strtolower(str_replace(" ", "-", $post_title));
      $post_content = $_POST['post_content'];
      $post_status = "publish";
      $comment_status = "closed";
      $ping_status = "closed";
      $post_modified = date('Y-m-d H:i:s');
      
      
      //$wpdb->prepare( "SELECT id FROM wp_posts WHERE id > %d AND `post_status` = %s", $min_id, $status );
      $wpdb->get_results( $wpdb->prepare( "insert into wp_posts (post_author, post_date, post_title, post_name, post_content, post_status, comment_status, ping_status, post_modified, post_parent, menu_order, post_type, comment_count) 
      values(%d,%s,%s,%s,%s,%s,%s,%s,%s,0,0,'about',0);",$author_id,$curDate,$post_title, $post_name, $post_content,$post_status,$comment_status,$ping_status,$post_modified) );

      $post_id = $wpdb->insert_id;
      $post_url = "http://localhost:9009/?page_id=". $post_id;

      $wpdb->get_results( $wpdb->prepare( "update wp_posts set guid = %s where ID = %d);", $post_url, $post_id) );

    } else if ($_POST["subType"] == "Update") {
      $wpdb->get_results( $wpdb->prepare( "update wp_posts set post_title = %s, post_content = %s where ID = %d;",  $_POST["post_title"], $_POST["post_content"], $_POST["id"]) );
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
      
      var myForm = document.getElementById("empForm");
      myForm.action = "options-general.php?page=glen-employee-data";
      

      $('<input />').attr('type', 'hidden')
      .attr('name', "subType")
      .attr('value', subType)
      .appendTo('#empForm');

      $('<input />').attr('type', 'hidden')
      .attr('name', "post_content")
      .attr('value', richTextField.document.getElementsByTagName('body')[0].innerHTML) //textContent
      .appendTo('#empForm');

    <?php
    if($_GET['id'] != null && $_GET['id'] != "new-post"){
      
      echo "$('<input />').attr('type', 'hidden')";
      echo ".attr('name', \"id\")";
      echo ".attr('value',".$_GET['id'].") ";
      echo ".appendTo('#empForm');";
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
      <a href='?page=glen-employee-data&id=new-post'>Add New</a>
      <button onclick="">Delete</button>
      <br />
    <?php
    
    $result = $wpdb->get_results ("SELECT * FROM wp_posts where post_type = \"about\";");//where post_type = \"about\"
    foreach ( $result as $page ) { 
      echo "<input type=\"checkbox\" value=\"".$page->ID."\"><a href='?page=glen-employee-data&id=".$page->ID."'>".$page->post_title."</a> <br />"; 
    }
    
  }
  else
  {
    $result = $wpdb->get_results ("SELECT * FROM wp_posts where ID = ". $_GET['id']);
  ?>
  <form id="empForm" method="post" enctype="multipart/form-data">
    <div>
      <input type="text" name="post_title" value="<?php echo $result[0]->post_title;?>"/>
    </div>
  </form>

    <div>
      <button onclick="execCmd('bold');">Bold</button>
      <button onclick="execCmd('italic');">Italics</button>
      <button onclick="execCmd('insertParagraph');">Paragraph</button>
      <select onchange="execCmd('formatBlock', this.value)">
        <option value=""></option>
        <option value="H1">H1</option>
        <option value="H2">H2</option>
        <option value="H3">H3</option>
      </select>
      <button onclick="execCmd('insertUnorderedList');">unordered</button>
      <button onclick="execCmd('insertOrderedList');">ordered</button>
      <button onclick="execCmd('insertHorizontalRule');">line</button>
      <button onclick="showSource();">source</button>
    </div>
    <?php

    ?>
    <iframe name="richTextField" id="richTextField" style="width: 1000px; height: 500px;"></iframe>
    <script type="text/javascript">
    var showSourceCode = false;
  
      richTextField.document.designMode = "On";
      <?php

      if(count($result) > 0)
      {

        echo "richTextField.document.getElementsByTagName('body')[0].innerHTML = \"". $result[0]->post_content ."\";";
      }
      
      
      ?>
      function execCmd (command, args = null) {
        richTextField.document.execCommand(command, false, args);
      }
      function showSource() {
        if(showSourceCode) {
          console.log(showSourceCode);
          richTextField.document.getElementsByTagName('body')[0].innerHTML = richTextField.document.getElementsByTagName('body')[0].textContent;
        }
        else {
          console.log(showSourceCode);
          richTextField.document.getElementsByTagName('body')[0].textContent = richTextField.document.getElementsByTagName('body')[0].innerHTML;
        }
        showSourceCode = !showSourceCode;
        
      }

      

  
    </script>
  
  <?php

   echo "<button type=\"button\" onclick='submitForm(\"Update\")' Name='btnFUpdate'>Update</button>";
   echo "<button type=\"button\" onclick='submitForm(\"Create\")' name='btnFCreate'>Create</button>";
   echo "<input type='button' id='btnDelete' value='Delete' />";

  
  echo "</div>";

  echo "</div>";
  }

}




// create table tblPages(Id int not null primary key auto_increment, mainTitle varchar(500), subTitle varchar(500), body varchar(500), list varchar(200), isBullet int,  divLine int, finePrint varchar(150), image varchar(200));
// insert into tblPages(mainTitle, list, divLine, image, finePrint) values();

// update tblPages set mainTitle = '', subTitle='', body='', list = '', divLine =, finePrint='', image='' where Id = ;
?>
