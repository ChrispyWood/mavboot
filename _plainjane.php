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
$pagename = "Plain Jane Examples Lorem Ipsum Lab Home";  // Title of this page (appears in tab of web browser)
$pagedescription = "Plain Jane Examples: The Lorem Ipsum Lab takes samples and researches them.";  // Description of this page (appears in search engines)

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
//include "_includes/_hero.php"; //comment to insert the hero section.
include "_includes/02-sitenavigation.php"; // This site Navigation

?>
<!-- Wrapper for all the page content -->
<div id="maincontent" class='container mt-4'><!-- Main Content Container -->
  <main>

  <h1>Lorem Ipsum</h1>

  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et dapibus magna. Maecenas porta sem non laoreet rhoncus. Vestibulum in volutpat neque, 
    id dictum arcu. Nullam eu rhoncus leo. Fusce ipsum arcu, congue sit amet ullamcorper a, gravida ut nunc. Pellentesque habitant morbi tristique senectus 
    et netus et malesuada fames ac turpis egestas. Cras accumsan ante ac ligula mollis condimentum sed ac neque. Vestibulum a quam at mi varius porttitor 
    at eget odio. Vestibulum sed arcu feugiat diam dictum lobortis a varius eros. Ut at placerat tortor. Pellentesque id ipsum sit amet mi tincidunt placerat. 
    Donec id augue eget lorem volutpat laoreet ut quis tortor. Integer molestie nisl eget tellus rhoncus tincidunt eu non sem. Nullam tempus commodo tempor. 
    Quisque tristique condimentum pellentesque. Mauris iaculis ex ac nisl tempus, a vestibulum orci sodales.</p>

  <p>Pellentesque sollicitudin lorem ipsum, quis tempus diam varius et. Proin quis elit at orci commodo interdum. Nam vulputate lorem vitae augue consectetur 
    semper. Sed ac ornare diam. Donec placerat interdum tellus vitae consequat. Nam tempor dolor eros, in cursus lorem dapibus vel. Sed ultricies eleifend 
    sem quis tempor. Fusce placerat nisl lacus, mollis placerat mi sodales vel. Pellentesque eu felis sit amet lectus sagittis hendrerit et venenatis libero.</p>

  <h2>Donec Efficitur Juso et Tempus Posuere</h2>

  <p>Donec efficitur, justo et tempus posuere, magna risus consequat justo, a porta arcu orci placerat felis. Mauris ac sapien quis lacus sollicitudin vehicula. 
    Nulla condimentum aliquet dictum. Pellentesque porta, nisi nec sodales hendrerit, erat ante sodales nisi, nec malesuada sem tortor vitae mi. Vivamus tempor 
    nibh a est venenatis dapibus. Nullam vitae orci luctus ex lacinia luctus. Nullam non ultricies sapien, at porta nunc.</p>

  <h3>Quisque</h3>

  <ul>
    <li>Quisque in est nec nisi sollicitudin condimentum.</li>
    <li>Mauris condimentum urna a lobortis ornare.</li>
    <li>Ut tincidunt quam imperdiet libero tincidunt, id consectetur leo semper.
      <ul>
        <li>Duis vel arcu at arcu congue scelerisque.</li>
        <li>Phasellus sodales eros et imperdiet ultricies.</li>
        <li>Pellentesque hendrerit quam eget sem suscipit egestas.</li>
      </ul>   
    </li>
    <li>Duis consectetur orci fringilla nisi luctus, eu sodales mauris rutrum.</li>
  </ul>

  <h3>Nam Ultricies</h3>

  <p>Nam tempor dolor eros, in cursus lorem dapibus vel.</p>

  <ol>
    <li>Nam ultricies lacus sit amet ultricies convallis.</li>
    <li>Sed lobortis tortor in turpis porttitor sollicitudin.</li>
    <li>Vestibulum consectetur metus a tellus dapibus, eget pellentesque diam ultricies.</li>
    <li>Pellentesque pretium ante nec dictum molestie.</li>
  </ol>

  <p>Maecenas consectetur lectus in felis consectetur vulputate. Donec ac nibh sapien. Maecenas porttitor vitae libero non hendrerit. Morbi iaculis nunc ac ex cursus, 
    ac vehicula nisl sollicitudin. Aenean id porta dui. Etiam purus urna, volutpat non augue non, pellentesque accumsan ligula.</p>

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