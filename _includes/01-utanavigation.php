<?php
/********************************************************
MAVBOOT - UTA Themed Bootstrap Framework
01-utanavigation.php
This page builds the top navigation. Only the site 
navigation menu at the bottom should be edited.
See getbootstrap.com
*********************************************************/
?>

<!-- Skip to content link for screen readers only -->
<a class="skippy visually-hidden-focusable" href="#maincontent">
    <span class="skippy-text">Skip to main content.</span>
</a>

<!-- Global Navigation Banner and Links -->
<nav title="Banner and Global UTA Navigation" >
  <div id="global-navigation" class="d-flex flex-column flex-md-row align-items-center pt-1 px-md-4 navbar-dark" >
    <a class="navbar-brand" href="https://www.uta.edu/">
      <img src="<?php echo $subpage_depth;?>_images/uta/uta-logo.png" id="uta-logo" alt="The University of Texas at Arlington logo">
      <span class='visually-hidden'>The University of Texas at Arlington</span>
    </a>
    <span id="site-title" class="my-2 mx-3 mr-md-auto h2"><?php echo $sitename;?></span>
    <div class="my-2 my-md-0 mr-md-3 flex-grow-1 d-flex justify-content-end">
      <a class="p-2 text-light d-none d-lg-block" href="<?php echo $parent_site_url?>">
        <?php echo $parentsite; ?>
      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#theNavbar" aria-controls="theNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</nav>

