<?php
/********************************************************
MAVBOOT - UTA Themed Bootstrap Framework - version 200701
This is the php version.
*********************************************************/

/********************************************************
The following variables are required for the current page.
*********************************************************/
$sitename = "Lorem Ipsum Lab";  // Name of this webiste
$parentsite = "College of Engineering";  // College or department to which the lab belongs
$parent_site_url = "https://www.uta.edu/academics/schools-colleges/engineering";  // URL of the college or department homepage
$pagename = "Lorem Ipsum Lab Home";  // Title of this page (appears in tab of web browser)
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
    <div class='col-lg-9'><!--Main content-->
        <h1>Lorem Ipsum Lab</h1>
        <p class="lead">This template uses the Bootstrap framework</a>. View the <a href="https://getbootstrap.com/docs/4.5/getting-started/introduction/">Bootstrap 
        Documentation</a> to learn the many options for styling. Almost everything has a CSS to render appropriately and attractively.</p>
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

        <h2>Table</h2>
        <table class="table table-hover table-sm">
            <thead class='thead-light'>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>

        <h2>Other Elements</h2>
        <h3>Blockquote</h3>
        <blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>

        <h3>Buttons</h3>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>
        <h4>Small Buttons</h4>
        <button type="button" class="btn btn-primary btn-sm">Primary</button>
        <button type="button" class="btn btn-secondary btn-sm">Secondary</button>
        <button type="button" class="btn btn-success btn-sm">Success</button>
        <button type="button" class="btn btn-danger btn-sm">Danger</button>
        <button type="button" class="btn btn-warning btn-sm">Warning</button>
        <button type="button" class="btn btn-info btn-sm">Info</button>
        <button type="button" class="btn btn-light btn-sm">Light</button>
        <button type="button" class="btn btn-dark btn-sm">Dark</button>

        <h3>Alerts</h3>
        <div class="alert alert-primary" role="alert">
        A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-secondary" role="alert">
        A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-success" role="alert">
        A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-danger" role="alert">
        A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-warning" role="alert">
        A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-info" role="alert">
        A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-light" role="alert">
        A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>
        <div class="alert alert-dark" role="alert">
        A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
        </div>

    </div><!--/Main content-->
<?php
/*************************************************************
 *************************************************************
 * The sidebar content can use the included sidebar or custom 
 * code can be included here.
 *************************************************************
 *************************************************************/
?> 
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
</div>
<?php include "./_includes/98-footer.php"; ?>
<?php include "./_includes/99-bottom.php"; ?>