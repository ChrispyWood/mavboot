<?php
/********************************************************
MAVBOOT - UTA Themed Bootstrap Framework
00-top.php
DO NOT EDIT
This page builds most of the top of the page.
*********************************************************/

// Assigning Variables if they are missing.
if (!isset($parentsite)) $parentsite = "College of Engineering";
if (!isset($parent_site_url)) $parent_site_url = "https://www.uta.edu/academics/schools-colleges/engineering";
if (!isset($sitename)) $sitename = "The University of Texas at Arlington";
if (!isset($pagename)) $pagename = "College of Engineering Webpage";
if (!isset($pagedescription)) $pagedescription = "The University of Texas at Arlington's College of Engineering is the most comprehensive engineering program in North Texas.";
if (!isset($og_title)) $og_title = $pagename;
if (!isset($og_description)) $og_description = $pagedescription;
if (!isset($og_image)) $og_image = $_SERVER['REQUEST_URI'] . "/mavboot/_images/uta/facebook_image.jpg";
if (!isset($og_sitename)) $og_sitename = $sitename;
if (!isset($subpage_depth)) $subpage_depth = "./";
if (!isset($twitter_title)) $twitter_title = $pagename;
if (!isset($twitter_image)) $twitter_image = "https://uta.engineering/mavboot/_images/uta/twitter_card.jpg";
if (!isset($twitter_description)) $twitter_description = $pagedescription;
if (!isset($og_image_alt)) $og_image_alt = $pagename;

// Build a URL for default og_url
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') $url = "https://";   
else $url = "http://";   

// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];  
if (!isset($og_url)) $og_url = $url;

?>
<!doctype html>
<html lang="en">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?php echo $pagename; ?></title>
  <meta name="description" content="<?php echo $pagedescription; ?>">
  <?php if (isset($canonical_url)) echo "<link rel='canonical' href='$canonical_url' />"; ?>


  <!-- Open Graph data: fallback for most social media service basic tags -->
  <meta property="og:title" content="<?php echo $og_title; ?>" /> 
  <meta property="og:url" content="<?php echo $og_url; ?>" /> 
  <meta property="og:image" content="<?php echo $og_image; ?>" /> 
  <meta property="og:image:alt" content="<?php echo $og_image_alt; ?>" /> 
  <meta property="og:description" content="<?php echo $og_description; ?>" /> 
  <meta property="og:site_name" content="<?php echo $og_sitename; ?>" /> 
  <meta property="og:type" content="website" /> 

  <!-- Twitter data -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@mavengineering">
  <meta name="twitter:creator" content="@ChrispyWood">
  <meta name="twitter:title" content="<?php echo $twitter_title; ?>">
  <meta name="twitter:description" content="<?php echo $twitter_description; ?>">
  <meta name="twitter:image" content="<?php echo $twitter_image; ?>"> 

  <!-- Icons -->
  <link href="<?php echo $subpage_depth;?>_icons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
  <link href="<?php echo $subpage_depth;?>_icons/favicon.ico" rel="icon" sizes="48x48">
  <link href="<?php echo $subpage_depth;?>_icons/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
  <link href="<?php echo $subpage_depth;?>_icons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">

  <!-- Bootstrap & Fontawsome -->
  <link rel="stylesheet" href="<?php echo $subpage_depth;?>_css/style.css?v=<?php echo rand(0,30000000);?>">
  <link href="<?php echo $subpage_depth;?>_css/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo $subpage_depth;?>_css/all.min.css" rel="stylesheet"> <!--load fontawesome -->

  <?php if (isset($page_scripts_css)) echo $page_scripts_css; ?>
</head>
<body>