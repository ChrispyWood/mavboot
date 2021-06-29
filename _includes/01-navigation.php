<?php
/********************************************************
MAVBOOT - UTA Themed Bootstrap Framework
01-navigation.php
This page builds the main navigation. Only the site 
navigation menu at the bottom should be edited.
See getbootstrap.com
*********************************************************/

// If these variables are missing, they get default values.
if (!isset($parentsite)) $$sitename = "A College of Engineering Webpage";
if (!isset($parentsite)) $parentsite = "College of Engineering";
if (!isset($parent_site_url)) $parent_site_url = "https://www.uta.edu/academics/schools-colleges/engineering";
?>

<!-- Skip to content link for screen readers only -->
<a class="skippy visually-hidden-focusable" href="#maincontent">
    <span class="skippy-text">Skip to main content.</span>
</a>

<!-- Global Navigation Banner and Links -->
<nav title="Banner and Global UTA Navigation" >
  <div id="global-navigation" class="d-flex flex-column flex-md-row align-items-center pt-1 px-md-4 navbar-dark" >
    <a class="navbar-brand" href="https://www.uta.edu/">
      <img src="./_images/uta/uta-logo.png" id="uta-logo" alt="The University of Texas at Arlington logo">
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

<?php
/**********************************************
 * Edit the navigation menu below.
 **********************************************/
?>

<!-- Site Navigation Menu -->
<nav title="Site Navigation" id="sitenav" class="navbar navbar-expand-lg navbar-light bg-light mb-4 border-bottom p-0">
  <div class="container">
    <div class="collapse navbar-collapse" id="theNavbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sample Lab Page</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>