<?php
/********************************************************
MAVBOOT - UTA Themed Bootstrap Framework - version 210629
This is the php version.
index.php - This is a page main file.
See getbootstrap.com for Bootstrap documentation
*********************************************************/

/********************************************************
The following variables are required for the current page.
*********************************************************/
$sitename = "Lorem Ipsum Lab";  // Name of this webiste
$parentsite = "College of Engineering";  // College or department to which the lab belongs
$parent_site_url = "https://www.uta.edu/academics/schools-colleges/engineering";  // URL of the college or department homepage
$pagename = "Sections Examples Lorem Ipsum Lab Home";  // Title of this page (appears in tab of web browser)
$pagedescription = "Sections Examples: The Lorem Ipsum Lab takes samples and researches them.";  // Description of this page (appears in search engines)

/********************************************************
The following variables are optional for the current page.
*********************************************************/
//$og_title = ""; //Title for facebook and other social media
//$og_description = ""; //Description for facebook and other social media
//$og_sitename = ""; //Sitename for facebook and other social media
//$canonical_url = ""; //Canonical URL
$subpage_depth = "../"; //Add '../' for each level deep in nav structure (e.g. localhost/beep/two needs '../../')
//$page_scripts_css = ""; //Contents of this variable will be inserted in the head of the page just before head end tag.

include $subpage_depth . "_includes/00-top.php"; // page top
include $subpage_depth . "_includes/01-utanavigation.php"; // UTA Global Navigation
//include $subpage_depth . "_includes/_hero.php"; //comment to insert the hero section.
include $subpage_depth . "_includes/02-sitenavigation.php"; // This site Navigation

?>
<!-- Wrapper for all the page content -->
<div id="maincontent"><!-- Main Content Container -->
  <main>

    <!-- Split section on white background -->
    <div class="split-section white-section">
      <div class='container'>
        <div class="row justify-content-around">
          <div class="col-md-5 pb-4">
            <img src="../_images/image_5.jpg" class="img-fluid" alt="Just an Image"/>
          </div>
          <div class="offset-md-1 col-md-6">
            <h3 class='h2'>Duis et hendrerit ipsum.</h3>
            <h4>Duis scelerisque eget dolor a rhoncus eget ultrices ipsum.</h4>
            <p>Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus. Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus. Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus.</p>
            <p><a class='btn btn-primary' href='#'>Go to Another Site</a> &nbsp; <a class='btn btn-outline-primary' href='#'>Go to a Better Site</a></p>
          </div>
        </div>
      </div>
    </div>

<!-- Split section on orange background -->
    <div class="split-section orange-section">
      <div class='container'>
        <div class="row justify-content-between">
          <div class="col-md-6 pb-4">
            <h3 class='h2'>Duis et hendrerit ipsum.</h3>
            <h4>Duis scelerisque eget dolor a rhoncus eget ultrices ipsum.</h4>
            <p>Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus. Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus. Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus.</p>
          </div>
          <div class="offset-md-1 col-md-5">
            <img src="../_images/image_5.jpg" class="img-fluid" alt="Just an Image"/>
          </div>
        </div>
      </div>
    </div>

<!-- Split section on white background -->
    <div class="split-section white-section">
      <div class='container'>
        <div class="row justify-content-between">
          <div class="col-md-5 pb-4">
            <img src="../_images/image_5.jpg" class="img-fluid" alt="Just an Image"/>
          </div>
          <div class="offset-md-1 col-md-5">
            <h3 class='h2'>Duis et hendrerit ipsum.</h3>
            <h4>Duis scelerisque eget dolor a rhoncus eget ultrices ipsum.</h4>
            <p>Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus. Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus. Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus.</p>
          </div>
        </div>
      </div>
    </div>

<!-- Split section on blue background -->
    <div class="split-section blue-section">
      <div class='container'>
        <div class="row justify-content-between">
          <div class="col-md-6 pb-4">
            <h3 class='h2'>Duis et hendrerit ipsum.</h3>
            <h4>Duis scelerisque eget dolor a rhoncus eget ultrices ipsum.</h4>
            <p>Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus. Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus. Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus.</p>
          </div>
          <div class="offset-md-1 col-md-5">
            <img src="../_images/image_5.jpg" class="img-fluid" alt="Just an Image"/>
          </div>
        </div>
      </div>
    </div>

<!-- Split section on white background -->
    <div class="split-section white-section">
      <div class='container'>
        <div class="row justify-content-between">
          <div class="col-md-5 pb-4">
            <img src="../_images/image_5.jpg" class="img-fluid" alt="Some image"/>
          </div>
          <div class="offset-md-1 col-md-6">
            <h3 class='h2'>Duis et hendrerit ipsum.</h3>
            <h4>Duis scelerisque eget dolor a rhoncus eget ultrices ipsum.</h4>
            <p>Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus. Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus. Etiam sed leo laoreet, accumsan nisi quis, mattis massa. Fusce mollis in turpis quis porttitor. Integer dapibus non purus vitae luctus.</p>
          </div>
        </div>
      </div>
    </div>
 


  </main>


<?php
/*************************************************************
 *************************************************************
 * ADD PAGE CONTENT ABOVE.
 *************************************************************
 *************************************************************/
?>

</div><!-- /Main Content Container -->

<?php include $subpage_depth . "_includes/98-footer.php"; ?>

<?php include $subpage_depth . "_includes/99-bottom.php"; ?>