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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Some Features
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <li><a class="dropdown-item" href="#tables">Tables</a></li>
            <li><a class="dropdown-item" href="#figures">Figures</a></li>
            <li><a class="dropdown-item" href="#forms">Forms</a></li>
            <li><a class="dropdown-item" href="#accordion">Accordion</a></li>
            <li><a class="dropdown-item" href="#alerts">Alerts</a></li>
            <li><a class="dropdown-item" href="#buttons">Buttons</a></li>
            <li><a class="dropdown-item" href="#card">Card</a></li>
            <li><a class="dropdown-item" href="#carousel">Carousel</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Layout Possibilities
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="_hero.php">Add a Hero Section</a></li>
            <li><a class="dropdown-item" href="_sections.php">Split Sections</a></li>
            <li><a class="dropdown-item" href="_jumbotrons.php">Jumbotrons</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" target='blank' href="https://carida.uta.edu/">Theme in Use (carida.uta.edu)</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>