<?php
/********************************************************
MAVBOOT - UTA Themed Bootstrap Framework - version 221202
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
$pagedescription = "The Lorem Ipsu Lab takes samples and researches them.";  // Description of this page (appears in search engines)

/********************************************************
The following variables are optional for the current page.
*********************************************************/
$og_title = "Webpage Templates for UTA College of Engineering"; //Title for facebook and other social media
$og_description = "HTML and PHP versions of mavboot, a template for faculty and lab web pages."; //Description for facebook and other social media
$og_image = "https://uta.engineering/mavboot/_images/uta/facebook_image.jpg"; //Image for facebook and other social media
$og_sitename = "The College of Engineering at The University of Texas at Arlington"; //Sitename for facebook and other social media
$canonical_url = "https://uta.engineering/mavboot/"; //Canonical URL
//$subpage_depth = ""; //Add '../' for each level deep in nav structure (e.g. localhost/beep/two needs '../../')
//$page_scripts_css = ""; //Contents of this variable will be inserted in the head of the page just before head end tag.

$twitter_title = "Webpage Templates for UTA College of Engineering"; //Title for twitter card
$twitter_image = "https://uta.engineering/mavboot/_images/uta/twitter_card.jpg"; //Image for facebook and other social media
$twitter_description = "HTML and PHP versions of mavboot, a template for faculty and lab web pages."; //Description for facebook and other social media

include "_includes/00-top.php"; // page top
include "_includes/01-utanavigation.php"; // UTA Global Navigation
//include "_includes/_hero.php"; //comment to insert the hero section.
include "_includes/02-sitenavigation.php"; // This site Navigation

?>
<!-- Wrapper for all the page content -->
<div class="container mt-4" id="maincontent"><!-- Main Content Container -->

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
    
    <p class="lead">This template uses the Bootstrap framework. View the <a href="https://getbootstrap.com/docs/5.2/getting-started/introduction/">Bootstrap 
    Documentation</a> to learn the many options for styling. Almost everything has a CSS class to render appropriately and attractively.</p>

    <p class="lead">The approriate css and fonts are loaded to use both <a href='https://fontawesome.com/icons'>Font Awesome feee icons</a> and <a href='https://icons.getbootstrap.com/'>Bootstrap Icons</a>.</p>

    <p class="lead">Links to download theme in php or html and to view on github can be found on the the <a href='https://resources.uta.edu/engineering/faculty-websites.php'>College of Engineering Resources page on faculty and lab sites.</a></p>

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
          <td headers="handle">@twitter</td>
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

    <hr class='mt-5'>

    <hr class='mb-3'>

    <section id="content">

      <h2 class="pb-2 pb-xl-3">More Examples of Bootstrap Components</h2>

      <hr class='mt-2'>
      <hr class='mb-5'>

    <article class="my-3" id="typography">

      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>Typography</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/content/typography/">Typography Documentation</a><hr class='my-4'>
      </div>

      <div class="bd-example">
        <p class="display-1">Display 1</p>
        <p class="display-2">Display 2</p>
        <p class="display-3">Display 3</p>
        <p class="display-4">Display 4</p>
        <p class="display-5">Display 5</p>
        <p class="display-6">Display 6</p>
      </div>

      <div class="bd-example">
        <p class="h1">Heading 1</p>
        <p class="h2">Heading 2</p>
        <p class="h3">Heading 3</p>
        <p class="h4">Heading 4</p>
        <p class="h5">Heading 5</p>
        <p class="h6">Heading 6</p>
      </div>

      <div class="bd-example">
        <p class="lead">
          This is a lead paragraph. It stands out from regular paragraphs.
        </p>
      </div>

      <div class="bd-example">
        <p>You can use the mark tag to <mark>highlight</mark> text.</p>
        <p><del>This line of text is meant to be treated as deleted text.</del></p>
        <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
        <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
        <p><u>This line of text will render as underlined.</u></p>
        <p><small>This line of text is meant to be treated as fine print.</small></p>
        <p><strong>This line rendered as bold text.</strong></p>
        <p><em>This line rendered as italicized text.</em></p>
      </div>

      <div class="bd-example">
        <blockquote class="blockquote">
          <p>A well-known quote, contained in a blockquote element.</p>
          <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
        </blockquote>
      </div>

      <div class="bd-example">
        <ul class="list-unstyled">
          <li>This is a list.</li>
          <li>It appears completely unstyled.</li>
          <li>Structurally, it's still a list.</li>
          <li>However, this style only applies to immediate child elements.</li>
          <li>Nested lists:
            <ul>
              <li>are unaffected by this style</li>
              <li>will still show a bullet</li>
              <li>and have appropriate left margin</li>
            </ul>
          </li>
          <li>This may still come in handy in some situations.</li>
        </ul>
      </div>

      <div class="bd-example">
        <ul class="list-inline">
          <li class="list-inline-item">This is a list item.</li>
          <li class="list-inline-item">And another one.</li>
          <li class="list-inline-item">But they're displayed inline.</li>
        </ul>
      </div>
    </article>

    <article class="my-3" id="images">

      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <hr class='my-4'><h3>Images</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/content/images/">Image Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
          <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/></svg>
        </div>

        <div class="bd-example">
          <svg class="bd-placeholder-img img-thumbnail" width="200" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera: 200x200" preserveAspectRatio="xMidYMid slice" focusable="false"><title>A generic square placeholder image with a white border around it, making it resemble a photograph taken with an old instant camera</title><rect width="100%" height="100%" fill="#868e96"/></svg>
        </div>
      </div>

    </article>

    <article class="my-3" id="tables">

      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <hr class='my-4'><h3>Tables</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/content/tables/">Tables Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
          <table class="table table-striped">
            <thead>
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
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
            </tbody>
          </table>
        </div>

        <div class="bd-example">
          <table class="table table-dark table-borderless">
            <thead>
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
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
            </tbody>
          </table>
        </div>

        <div class="bd-example">
          <table class="table table-hover">
            <thead>
            <tr>
              <th scope="col">Class</th>
              <th scope="col">Heading</th>
              <th scope="col">Heading</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row">Default</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>

            <tr class="table-primary">
              <th scope="row">Primary</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-secondary">
              <th scope="row">Secondary</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-success">
              <th scope="row">Success</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-danger">
              <th scope="row">Danger</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-warning">
              <th scope="row">Warning</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-info">
              <th scope="row">Info</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-light">
              <th scope="row">Light</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            <tr class="table-dark">
              <th scope="row">Dark</th>
              <td>Cell</td>
              <td>Cell</td>
            </tr>
            </tbody>
          </table>
        </div>

        <div class="bd-example">
          <table class="table table-sm table-bordered">
            <thead>
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
              <td colspan="2">Larry the Bird</td>
              <td>@twitter</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </article>

    <article class="my-3" id="figures">

      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <hr class='my-4'><h3>Figures</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/content/figures/">Figures Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <figure class="figure">
          <svg class="bd-placeholder-img figure-img img-fluid rounded" width="400" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 400x300" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/></svg>

          <figcaption class="figure-caption">A caption for the above image.</figcaption>
        </figure>
        </div>
      </div>
    </article>
  </section>

  <section id="forms">
    <h2 class="fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">Forms</h2>

    <article class="my-3" id="overview">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Overview</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/forms/overview/">Overview Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <fieldset class="mb-3">
            <legend>Radios buttons</legend>
            <div class="form-check">
              <input type="radio" name="radios" class="form-check-input" id="exampleRadio1">
              <label class="form-check-label" for="exampleRadio1">Default radio</label>
            </div>
            <div class="mb-3 form-check">
              <input type="radio" name="radios" class="form-check-input" id="exampleRadio2">
              <label class="form-check-label" for="exampleRadio2">Another radio</label>
            </div>
          </fieldset>
          <div class="mb-3">
            <label class="form-label" for="customFile">Upload</label>
            <input type="file" class="form-control" id="customFile">
          </div>
          <div class="mb-3 form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
          </div>
          <div class="mb-3">
            <label for="customRange3" class="form-label">Example range</label>
            <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </article>
    <article class="my-3" id="disabled-forms">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Disabled forms</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/forms/overview/#disabled-forms">Disabled Forms Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <form>
          <fieldset disabled aria-label="Disabled fieldset example">
            <div class="mb-3">
              <label for="disabledTextInput" class="form-label">Disabled input</label>
              <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
            </div>
            <div class="mb-3">
              <label for="disabledSelect" class="form-label">Disabled select menu</label>
              <select id="disabledSelect" class="form-select">
                <option>Disabled select</option>
              </select>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                <label class="form-check-label" for="disabledFieldsetCheck">
                  Can't check this
                </label>
              </div>
            </div>
            <fieldset class="mb-3">
              <legend>Disabled radios buttons</legend>
              <div class="form-check">
                <input type="radio" name="radios" class="form-check-input" id="disabledRadio1" disabled>
                <label class="form-check-label" for="disabledRadio1">Disabled radio</label>
              </div>
              <div class="mb-3 form-check">
                <input type="radio" name="radios" class="form-check-input" id="disabledRadio2" disabled>
                <label class="form-check-label" for="disabledRadio2">Another radio</label>
              </div>
            </fieldset>
            <div class="mb-3">
              <label class="form-label" for="disabledCustomFile">Upload</label>
              <input type="file" class="form-control" id="disabledCustomFile" disabled>
            </div>
            <div class="mb-3 form-check form-switch">
              <input class="form-check-input" type="checkbox" id="disabledSwitchCheckChecked" checked disabled>
              <label class="form-check-label" for="disabledSwitchCheckChecked">Disabled checked switch checkbox input</label>
            </div>
            <div class="mb-3">
              <label for="disabledRange" class="form-label">Disabled range</label>
              <input type="range" class="form-range" min="0" max="5" step="0.5" id="disabledRange">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </fieldset>
        </form>
        </div>
      </div>
    </article>
    <article class="my-3" id="sizing">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Sizing</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/forms/form-control/#sizing">Sizing Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <div class="mb-3">
          <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
        </div>
        <div class="mb-3">
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="mb-3">
          <input type="file" class="form-control form-control-lg" aria-label="Large file input example">
        </div>
        </div>

        <div class="bd-example">
        <div class="mb-3">
          <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
        </div>
        <div class="mb-3">
          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="mb-3">
          <input type="file" class="form-control form-control-sm" aria-label="Small file input example">
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="input-group">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Input group</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/forms/input-group/">Input Group Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">@</span>
          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <span class="input-group-text" id="basic-addon2">@example.com</span>
        </div>
        <label for="basic-url" class="form-label">Your vanity URL</label>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text">$</span>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <span class="input-group-text">.00</span>
        </div>
        <div class="input-group">
          <span class="input-group-text">With textarea</span>
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="floating-labels">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Floating labels</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/forms/floating-labels/">Floating Labels Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <form>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
        </form>
        </div>
      </div>
    </article>

  </section>

  <section id="components">
    <h2 class="fw-bold pt-3 pt-xl-5 pb-2 pb-xl-3">Components</h2>

    <article class="my-3" id="accordion">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Accordion</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/accordion/">Accordian Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Accordion Item #1
              </button>
            </h4>
            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
              </button>
            </h4>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
              </button>
            </h4>
            <div id="collapseThree" class="accordion-collapse collapse"  data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="alerts">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Alerts</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/alerts/">Alerts Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">

        <div class="alert alert-primary alert-dismissible fade show" role="alert">
          A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
          A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-info alert-dismissible fade show" role="alert">
          A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-light alert-dismissible fade show" role="alert">
          A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-dark alert-dismissible fade show" role="alert">
          A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        </div>

        <div class="bd-example">
        <div class="alert alert-success" role="alert">
          <h4 class="alert-heading">Well done!</h4>
          <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
          <hr>
          <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="badge">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Badge</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/badge/">Badge Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <p class="h1">Example heading <span class="badge bg-primary">New</span></p>
        <p class="h2">Example heading <span class="badge bg-secondary">New</span></p>
        <p class="h3">Example heading <span class="badge bg-success">New</span></p>
        <p class="h4">Example heading <span class="badge bg-danger">New</span></p>
        <p class="h5">Example heading <span class="badge bg-warning text-dark">New</span></p>
        <p class="h6">Example heading <span class="badge bg-info">New</span></p>
        <p class="h6">Example heading <span class="badge bg-light text-dark">New</span></p>
        <p class="h6">Example heading <span class="badge bg-dark">New</span></p>
        </div>

        <div class="bd-example">

        <span class="badge rounded-pill bg-primary">Primary</span>
        <span class="badge rounded-pill bg-secondary">Secondary</span>
        <span class="badge rounded-pill bg-success">Success</span>
        <span class="badge rounded-pill bg-danger">Danger</span>
        <span class="badge rounded-pill bg-warning text-dark">Warning</span>
        <span class="badge rounded-pill bg-info">Info</span>
        <span class="badge rounded-pill bg-light text-dark">Light</span>
        <span class="badge rounded-pill bg-dark">Dark</span>
        </div>
      </div>
    </article>
    <article class="my-3" id="breadcrumb">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Breadcrumb</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/breadcrumb/">Breadcrumb Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
          </ol>
        </nav>
        </div>
      </div>
    </article>
    <article class="my-3" id="buttons">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Buttons</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/buttons/">Buttons Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-secondary">Secondary</button>
          <button type="button" class="btn btn-success">Success</button>
          <button type="button" class="btn btn-danger">Danger</button>
          <button type="button" class="btn btn-warning">Warning</button>
          <button type="button" class="btn btn-info">Info</button>
          <button type="button" class="btn btn-dark">Dark</button>
          <button type="button" class="btn btn-link">Link</button>
        </div>

        <div class="bd-example">
          <button type="button" class="btn btn-outline-primary">Primary</button>
          <button type="button" class="btn btn-outline-secondary">Secondary</button>
          <button type="button" class="btn btn-outline-success">Success</button>
          <button type="button" class="btn btn-outline-danger">Danger</button>
          <button type="button" class="btn btn-outline-warning">Warning</button>
          <button type="button" class="btn btn-outline-info">Info</button>
          <button type="button" class="btn btn-outline-dark">Dark</button>
        </div>

        <div class="bd-example">
          <button type="button" class="btn btn-primary btn-sm">Small button</button>
          <button type="button" class="btn btn-primary">Standard button</button>
          <button type="button" class="btn btn-primary btn-lg">Large button</button>
        </div>

      </div>
    </article>
    <article class="my-3" id="button-group">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Button group</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/button-group/">Button Group Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
          <div class="btn-group me-2" role="group" aria-label="First group">
            <button type="button" class="btn btn-secondary">1</button>
            <button type="button" class="btn btn-secondary">2</button>
            <button type="button" class="btn btn-secondary">3</button>
            <button type="button" class="btn btn-secondary">4</button>
          </div>
          <div class="btn-group me-2" role="group" aria-label="Second group">
            <button type="button" class="btn btn-secondary">5</button>
            <button type="button" class="btn btn-secondary">6</button>
            <button type="button" class="btn btn-secondary">7</button>
          </div>
          <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-secondary">8</button>
          </div>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="card">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Card</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/card/">Card Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <div class="row  row-cols-1 row-cols-md-2 g-4">
          <div class="col">
            <div class="card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/></svg>

              <div class="card-body">
                <h4 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-header">
                Featured
              </div>
              <div class="card-body">
                <h4 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
              </ul>
              <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <div class="row g-0">
                <div class="col-md-4">
                  <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/></svg>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h4 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small>Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </article>

    <article class="my-3" id="dropdowns">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Dropdowns</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/dropdowns/">Dropdowns Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <div class="btn-group w-100 align-items-center justify-content-between flex-wrap">
          <div class="dropdown">
            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButtonSM" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonSM">
              <li><h6 class="dropdown-header">Dropdown header</h6></li>
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <li><h6 class="dropdown-header">Dropdown header</h6></li>
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" id="dropdownMenuButtonLG" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLG">
              <li><h6 class="dropdown-header">Dropdown header</h6></li>
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </div>
        </div>
        </div>

        <div class="bd-example">
        <div class="btn-group">
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-secondary">Secondary</button>
          <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-success">Success</button>
          <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-info">Info</button>
          <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-warning">Warning</button>
          <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div><!-- /btn-group -->
        <div class="btn-group">
          <button type="button" class="btn btn-danger">Danger</button>
          <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div><!-- /btn-group -->
        </div>

        <div class="bd-example">
        <div class="btn-group w-100 align-items-center justify-content-between flex-wrap">
          <div class="dropend">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropendMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              Dropend button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropendMenuButton">
              <li><h6 class="dropdown-header">Dropdown header</h6></li>
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </div>
          <div class="dropup">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropupMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              Dropup button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropupMenuButton">
              <li><h6 class="dropdown-header">Dropdown header</h6></li>
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </div>
          <div class="dropstart">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropstartMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              Dropstart button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropstartMenuButton">
              <li><h6 class="dropdown-header">Dropdown header</h6></li>
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </div>
        </div>
        </div>

        <div class="bd-example">
        <div class="btn-group">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownRightMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
              End-aligned menu
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownRightMenuButton">
              <li><h6 class="dropdown-header">Dropdown header</h6></li>
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
          </div>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="list-group">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>List group</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/list-group/">List Group Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <ul class="list-group">
          <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
          <li class="list-group-item">A fourth item</li>
          <li class="list-group-item">And a fifth one</li>
        </ul>
        </div>

        <div class="bd-example">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">An item</li>
          <li class="list-group-item">A second item</li>
          <li class="list-group-item">A third item</li>
          <li class="list-group-item">A fourth item</li>
          <li class="list-group-item">And a fifth one</li>
        </ul>
        </div>

        <div class="bd-example">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">A simple default list group item</a>

          <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
          <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="modal">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Modal</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/modal/">Modal Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <div class="d-flex justify-content-between flex-wrap">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalDefault">
            Launch demo modal
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">
            Launch static backdrop modal
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable">
            Vertically centered scrollable modal
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">
            Full screen
          </button>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="navs">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Navs</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/navs-tabs/">Nav Tabs Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <nav class="nav" title='example-nav-1'>
          <a class="nav-link active" aria-current="page" href="#">Active</a>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link" href="#">Link</a>
          <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
        </nav>
        </div>

        <div class="bd-example">
        <nav title='example-nav-2'>
          <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist" title='example navigation two'>
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <p><strong>This is some placeholder content the Home tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <p><strong>This is some placeholder content the Profile tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <p><strong>This is some placeholder content the Contact tab's associated content.</strong> Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling. You can use it with tabs, pills, and any other <code>.nav</code>-powered navigation.</p>
          </div>
        </div>
        </div>

        <div class="bd-example">
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        </div>
      </div>
    </article>


    <article class="my-3" id="pagination">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Pagination</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/pagination/">Pagination Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <nav aria-label="Pagination example">
          <ul class="pagination pagination-sm">
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
          </ul>
        </nav>
        </div>

        <div class="bd-example">
        <nav aria-label="Standard pagination example">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
        </div>

        <div class="bd-example">
        <nav aria-label="Another pagination example">
          <ul class="pagination pagination-lg flex-wrap">
            <li class="page-item disabled">
              <a class="page-link" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
        </div>
      </div>
    </article>
    <article class="my-3" id="popovers">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Popovers</h3>
       <div class='alert alert-info'>NOTICE: These will only work if you initialize them.  See the documentation.</div>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/popovers/">Popovers Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">
        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
        </div>

        <div class="bd-example">
        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
          Popover on top
        </button>
        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
          Popover on end
        </button>
        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
          Popover on bottom
        </button>
        <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
          Popover on start
        </button>
        </div>
      </div>
    </article>

    <article class="my-3" id="spinners">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Spinners</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/spinners/">Spinners Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example">

        <div class="spinner-border text-primary" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-border text-secondary" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-border text-success" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-border text-danger" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-border text-info" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-border text-dark" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        </div>

        <div class="bd-example">

        <div class="spinner-grow text-primary" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow text-success" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow text-danger" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow text-warning" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow text-info" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow text-light" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        <div class="spinner-grow text-dark" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
        </div>
      </div>
    </article>
    <article class="my-3" id="toasts">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
       <hr class='my-4'><h3>Toasts</h3>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/toasts/">Toasts Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example bg-dark p-5 align-items-center">
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <svg class="bd-placeholder-img rounded me-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#007aff"/></svg>

            <strong class="me-auto">Bootstrap</strong>
            <small class="text-muted">11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>
        </div>
      </div>
    </article>
    <article class="mt-3 mb-5 pb-5" id="tooltips">
      <div class="bd-heading  align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <hr class='my-4'><h3>Tooltips</h3>
        <div class='alert alert-info'>NOTICE: These will only work if you initialize them.  See the documentation.</div>
        <a class="d-flex align-items-center" href="https://getbootstrap.com/docs/5.0/components/tooltips/">Tooltips Documentation</a><hr class='my-4'>
      </div>

      <div>
        <div class="bd-example tooltip-demo">
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">Tooltip on top</button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on end">Tooltip on end</button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on start">Tooltip on start</button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">Tooltip with HTML</button>
        </div>
      </div>
    </article>
  </section>


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