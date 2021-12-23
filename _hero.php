<?php
/********************************************************
MAVBOOT - UTA Themed Bootstrap Framework - version 211223
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
$pagename = "Hero Example Lorem Ipsum Lab Home";  // Title of this page (appears in tab of web browser)
$pagedescription = "Hero Example The Lorem Ipsum Lab takes samples and researches them.";  // Description of this page (appears in search engines)

/********************************************************
The following variables are optional for the current page.
*********************************************************/
//$og_title = ""; //Title for facebook and other social media
//$og_description = ""; //Description for facebook and other social media
//$og_image = ""; //Image for facebook and other social media
//$og_sitename = ""; //Sitename for facebook and other social media
//$canonical_url = ""; //Canonical URL
//$subpage_depth = ""; //Add '../' for each level deep in nav structure (e.g. localhost/beep/two needs '../../')
//$page_scripts_css = ""; //Contents of this variable will be inserted in the head of the page just before head end tag.

include "_includes/00-top.php"; // page top
include "_includes/01-utanavigation.php"; // UTA Global Navigation
include "_includes/_hero.php"; //comment to insert the hero section.
include "_includes/02-sitenavigation.php"; // This site Navigation

?>
<!-- Wrapper for all the page content -->
<div class="container mt-4" id="maincontent"><!-- Main Content Container -->

<?php
/*************************************************************
 *************************************************************
 * ADD PAGE CONTENT BELOW.
 *************************************************************
 *************************************************************/
?>
<div class='row'><!--Main row-->
  <div class='col-lg-9'><!--Main content-->
  <main>

  <h1>Lorem Ipsum Lab</h1>

    <p class="lead">This template uses the Bootstrap framework. View the <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">Bootstrap 
    Documentation</a> to learn the many options for styling. Almost everything has a CSS class to render appropriately and attractively.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel sem facilisis, suscipit dolor ac, volutpat nisi. In vitae tristique nisi. 
    Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi ut metus dictum neque lobortis maximus non id 
    dolor. Suspendisse a odio vitae justo volutpat blandit a in est. Morbi tincidunt sodales semper. Cras ut purus eu nibh scelerisque iaculis 
    faucibus quis sem. Vestibulum suscipit, sapien sit amet sagittis bibendum, neque velit sodales erat, vitae convallis metus turpis vitae dolor. 
    Maecenas vel ipsum tincidunt mauris faucibus tincidunt. In egestas, arcu eu finibus faucibus, felis massa volutpat felis, ac hendrerit nulla 
    dui in ante. Duis at faucibus enim.</p>

    <h2>Praesent Ent</h2>

    <ul>
      <li>Praesent vulputate neque eu sodales placerat.</li>
      <li>Fusce dictum est non mattis varius.</li>
      <li>Duis porta dolor eu elit viverra, vitae consectetur mauris gravida.</li>
      <li>Praesent ut dolor sed felis congue tincidunt ac quis leo.</li>
      <li>Duis gravida mauris nec nulla mollis, ac ornare quam pharetra.</li>
      <li>Curabitur interdum nibh in mi hendrerit, ac varius sem dignissim.</li>
    </ul>

    <p>Now is the time for all good men to come to the aid of their country. Act only according to that maxim whereby you can, at the same time, 
    will that it should become a universal law.</p>

  </main>
  </div><!--/Main content-->
<?php
/*************************************************************
 *************************************************************
 * The sidebar content can use the included sidebar or custom 
 * code can be included here.
 *************************************************************
 *************************************************************/
?> 
    <!-- Sidebar -->
    <div class='col-lg-3' id='site-sidebar'><!--Sidebar-->
        <aside>
<?php include "./_includes/10-sidebar.php"; ?>
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

</div><!-- /Main Content Container -->

<?php include "./_includes/98-footer.php"; ?>

<?php include "./_includes/99-bottom.php"; ?>