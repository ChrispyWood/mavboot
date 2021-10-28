<?php
/********************************************************
MAVBOOT - UTA Themed Bootstrap Framework
02-sitenavigation.php
This page builds the main site navigation.
See getbootstrap.com
*********************************************************/

/**********************************************
 * Edit the navigation menu below.
 **********************************************/
?>

<!-- Site Navigation Menu -->
<nav title="Site Navigation" id="sitenav" class="navbar navbar-expand-lg navbar-light bg-light border-bottom p-0">
  <div class="container">
    <div class="collapse navbar-collapse" id="theNavbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $subpage_depth;?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="mavnav2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Some Features
          </a>
          <ul class="dropdown-menu" aria-labelledby="mavnav2">
            <li><a class="dropdown-item" href="/mavboot/#tables">Tables</a></li>
            <li><a class="dropdown-item" href="/mavboot/#figures">Figures</a></li>
            <li><a class="dropdown-item" href="/mavboot/#forms">Forms</a></li>
            <li><a class="dropdown-item" href="/mavboot/#accordion">Accordion</a></li>
            <li><a class="dropdown-item" href="/mavboot/#alerts">Alerts</a></li>
            <li><a class="dropdown-item" href="/mavboot/#buttons">Buttons</a></li>
            <li><a class="dropdown-item" href="/mavboot/#card">Card</a></li>
            <li><a class="dropdown-item" href="/mavboot/#carousel">Carousel</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="mavnav1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Layout Possibilities
          </a>
          <ul class="dropdown-menu" aria-labelledby="mavnav1">
            <li><a class="dropdown-item" href="<?php echo $subpage_depth;?>_hero.php">Add a Hero Section</a></li>
            <li><a class="dropdown-item" href="<?php echo $subpage_depth;?>_sections.php">Split Sections</a></li>
            <li><a class="dropdown-item" href="<?php echo $subpage_depth;?>_jumbotrons.php">Jumbotrons</a></li>
            <li><a class="dropdown-item" href="<?php echo $subpage_depth;?>_plainjane.php">Plain Jane</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" target='blank' href="https://carida.uta.edu/">Theme in Use (carida.uta.edu)</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Back to top button -->
<nav id='back-to-top-button' title="back to top">
<button type="button" class="btn btn-primary btn-floating " id="btn-back-to-top" title='Back to Top'>
  <i class="fas fa-arrow-up"></i> &nbsp; Back to Top &nbsp; <i class="fas fa-arrow-up"></i>
</button>
</nav>