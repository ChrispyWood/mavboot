<?php
/********************************************************
MAVBOOT - UTA Themed Bootstrap Framework - version 200707
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
$pagename = "Lorem Ipsum Lab Home";  // Title of this page (appears in tab of web browser)
$pagedescription = "The SR Lab takes samples and researches them.";  // Description of this page (appears in search engines)

/********************************************************
The following variables are optional for the current page.
*********************************************************/
//$og_title = ""; //Title for facebook and other social media
//$og_description = ""; //Description for facebook and other social media
//$og_sitename = ""; //Sitename for facebook and other social media
//$canonical_url = ""; //Canonical URL
//$subpage_depth = ""; //Add '../' for each level deep in nav structure (e.g. localhost/beep/two needs '../../')
//$page_scripts_css = ""; //Contents of this variable will be inserted in the head of the page just before head end tag.

include "./_includes/00-top.php";
include "./_includes/01-navigation.php";
?>
<!-- Wrapper for all the page content -->
<div class="container" id="maincontent"><!-- Main Content Container -->

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
        <p class="lead">This template uses the Bootstrap framework. View the <a href="https://getbootstrap.com/docs/4.5/getting-started/introduction/">Bootstrap 
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

        <h2>Table</h2>
        <table class="table table-hover table-sm" id="Example_Table">
            <caption class='sr-only'>A table of fake data to illustrate the proper way to mark up a table.</caption>
            <thead class='thead-light'>
                <tr>
                    <th scope="col" id="number">#</th>
                    <th scope="col" id="first">First</th>
                    <th scope="col" id="last">Last</th>
                    <th scope="col" id="handle">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" id="one">1</th>
                    <td headers="one first">Mark</td>
                    <td headers="last">Otto</td>
                    <td headers="handle">@mdo</td>
                </tr>
                <tr>
                    <th scope="row" id="two">2</th>
                    <td headers="two first">Jacob</td>
                    <td headers="last">Thornton</td>
                    <td headers="handle">@fat</td>
                </tr>
                <tr>
                    <th scope="row" id="three">3</th>
                    <td headers="three first">Larry</td>
                    <td headers="last">the Bird</td>
                    <td  headers="handle">@twitter</td>
                </tr>
            </tbody>
        </table>

        <h2>Other Elements</h2>
        <h3>Lists</h3>
        <h4>Unordered</h4>
        <ul>
            <li>Foghorn Leghorn</li>
            <li>Chicken Little</li>
            <li>Robin Hood Chickens &amp; Roosters
                <ul>
                    <li>Alan-a-dale</li>
                    <li>Lady Kluck</li>
                </ul>
            </li>
            <li>Rocky</li>
        </ul>
        <h4>Ordered</h4>
        <ol>
            <li>Bullitt</li>
            <li>The French Connection</li>
            <li>Cannonball Run
                <ul>
                    <li>Cannonball Run</li>
                    <li>Cannonball Run 2</li>
                </ul>
            </li>
            <li>Death Proof</li>
        </ol>
        <h3>Blockquote</h3>
        <blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <span class="blockquote-footer">Someone famous in <cite title="Some Book Title">Source Title</cite></span>
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

        <h3>Cards</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card One title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card Two title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="https://via.placeholder.com/286x180" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Card Three title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>        

        <h3 id="endofascii">Headings</h3>

            <h1>Heading One</h1>
            <h2>Heading Two</h2>
            <h3>Heading Three</h3>
            <h4>Heading Four</h4>
            <h5>Heading Five</h5>
            <h6>Heading Six</h6>
    
        <h3>Fancy display heading <small class="text-muted">With faded secondary text</small></h3>
        
        <h3>Display Headings</h3>
            <h1 class="display-1">Display 1</h1>
            <h1 class="display-2">Display 2</h1>
            <h1 class="display-3">Display 3</h1>
            <h1 class="display-4">Display 4</h1>

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