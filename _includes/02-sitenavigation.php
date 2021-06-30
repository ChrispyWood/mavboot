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
          <a class="nav-link" href="./">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sample Lab Page</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Creative Possibilities
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="_hero.php">Add a Hero Section</a></li>
            <li><a class="dropdown-item" href="_sections.php">Split Sections</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>