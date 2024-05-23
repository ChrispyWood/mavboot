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
<nav id='skipto-links' title='skip to content'>
<a class="skippy visually-hidden-focusable" href="#maincontent">
    <span class="skippy-text">Skip to main content.</span>
</a>
</nav>

<!-- Global Navigation Banner and Links -->
<nav title="Banner and Global UTA Navigation" >
  <div id="global-navigation" class="d-flex justify-content-between navbar-dark">
    <div class="d-flex align-items-center">
        <a class="navbar-brand" href="https://www.uta.edu/">
          <img src="<?php echo $subpage_depth;?>_images/uta/uta-logo.png" id="uta-logo" alt="The University of Texas at Arlington logo">
          <span class='visually-hidden'>The University of Texas at Arlington</span>
        </a>
        <span id="site-title" class="h2 mt-1"><?php echo $sitename;?></span>
    </div>
    
    <div class="d-flex align-items-center">
      <a class="p-2 text-light d-none d-lg-block pe-3" href="<?php echo $parent_site_url?>">
        <?php echo $parentsite; ?>
      </a>
      <button class="navbar-toggler d-lg-none m-1" type="button" data-bs-toggle="collapse" data-bs-target="#theNavbar" aria-controls="theNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</nav> 