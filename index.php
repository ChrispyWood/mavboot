<?php
/********************************************************
MAVBOOT - UTA Themed Bootstrap Framework - version 200701
This is the php version.
*********************************************************/

/********************************************************
The following variables are required for the current page.
*********************************************************/
$sitename = "Sample Research Lab";  // Name of this webiste
$parentsite = "College of Engineering";  // College or department to which the lab belongs
$parent_site_url = "https://www.uta.edu/academics/schools-colleges/engineering";  // URL of the college or department homepage
$pagename = "Sample Research Lab Home";  // Title of this page (appears in tab of web browser)
$pagedescription = "The SR Lab takes samples and researches them.";  // Description of this page (appears in search engines)

/********************************************************
The following variables are optional for the current page.
*********************************************************/
//$page_scripts_css = ""; //Contents of this variable will be inserted in the head of the page just before head end tag.
//$og_title = ""; //Title for facebook and other social media
//$og_description = ""; //Description for facebook and other social media
//$og_sitename = ""; //Sitename for facebook and other social media
//$canonical_url = ""; //Canonical URL
//$subpage_depth = ""; //Add '../' for each level deep in nav structure (e.g. localhost/beep/two needs '../../')

include "./_includes/00-top.php";
include "./_includes/01-navigation.php";
?>
<div class="container" id="maincontent">
<?php
/*************************************************************
 *************************************************************
 * ADD PAGE CONTENT BELOW.
 *************************************************************
 *************************************************************/
?>
<div class='row'><!--Main row-->
    <div class='col-md-9'><!--Main content-->
        <h1>Sample Lab Page</h1>

    </div><!--/Main content-->
<?php
/*************************************************************
 *************************************************************
 * The sidebar content can use the included sidebar or custom 
 * code can be included here.
 *************************************************************
 *************************************************************/
?> 
    <div class='col-md-3' id='site-sidebar'><!--Sidebar-->
        <aside>
            Sidebar
        </aside>
    </div><!--/Sidebar-->
</div><!--/Main row-->







<?php
/*************************************************************
 *************************************************************
 * ADD PAGE CONTENT ABOVE.
 *************************************************************
 *************************************************************/
?>
</div>
<?php include "./_includes/98-footer.php"; ?>
<?php include "./_includes/99-bottom.php"; ?>