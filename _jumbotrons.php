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
$pagename = "Lorem Ipsum Lab Home";  // Title of this page (appears in tab of web browser)
$pagedescription = "The SR Lab takes samples and researches them.";  // Description of this page (appears in search engines)

/********************************************************
The following variables are optional for the current page.
*********************************************************/
//$og_title = ""; //Title for facebook and other social media
//$og_description = ""; //Description for facebook and other social media
//$og_sitename = ""; //Sitename for facebook and other social media
//$canonical_url = ""; //Canonical URL
//$subpage_depth = ""; //Add '../' for each level deep in nav structure (e.g. localhost/beep/two needs '../../')
//$page_scripts_css = ""; //Contents of this variable will be inserted in the head of the page just before head end tag.

include "_includes/00-top.php"; // page top
include "_includes/01-utanavigation.php"; // UTA Global Navigation
//include "_includes/_hero.php"; //comment to insert the hero section.
include "_includes/02-sitenavigation.php"; // This site Navigation

?>
<!-- Wrapper for all the page content -->
<div id="maincontent"><!-- Main Content Container -->
  <main>

  <div class="container py-4">

    <div class="p-5 mb-4 bg-primary">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Custom jumbotron</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-light btn-lg" type="button">Example button</button>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark">
          <h2>Change the background</h2>
          <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
          <button class="btn btn-outline-light" type="button">Example button</button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border">
          <h2>Add borders</h2>
          <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
          <button class="btn btn-outline-secondary" type="button">Example button</button>
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

<?php include "./_includes/98-footer.php"; ?>

<?php include "./_includes/99-bottom.php"; ?>