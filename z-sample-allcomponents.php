<?php
/********************************************************
MAVBOOT - UTA Themed Bootstrap Framework - version 200701
This is the php version.
*********************************************************/

/********************************************************
The following variables are required for the current page.
*********************************************************/
$sitename = "Sample Research Lab";  // Name of this webiste
$parentsite = "College of Engineering";  // College or department to which the lab belongs
$parent_site_url = "https://www.uta.edu/academics/schools-colleges/engineering";  // URL of the college or department homepage
$pagename = "Sample Research Lab Home";  // Title of this page (appears in tab of web browser)
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
 * ADD PAGE CONTENT BELOW.
 *************************************************************/
?>



<h1>MavBoot All Components!</h1>


<p class='lead'>This page should demonstrate all companents.</p>

<p>Nulla iaculis finibus sollicitudin. Ut sagittis laoreet massa, sed pellentesque diam sollicitudin a. Cras a sagittis massa, vel condimentum nisl. Vivamus interdum ipsum 
risus, sed viverra diam ornare sed. Praesent imperdiet, nunc condimentum consectetur ornare, ligula magna efficitur enim, vehicula tincidunt neque enim eget velit. Quisque et 
pretium odio. Phasellus nisi lacus, fermentum in augue ac, convallis scelerisque odio. Duis placerat sapien et nisi gravida, nec porta dui feugiat. Duis dignissim blandit dui, 
porttitor mattis ligula viverra sit amet. Integer congue mi molestie porttitor maximus.</p>

<hr>

<h2>Heading Two</h2>
<h3>Heading Three</h3>
<h4>Heading Four</h4>
<h5>Heading Five</h5>
<h6>Heading Six</h6>
<hr>
<h3>
Fancy display heading
<small class="text-muted">With faded secondary text</small>
</h3>
<hr>
<h1 class="display-1">Display 1</h1>
<h1 class="display-2">Display 2</h1>
<h1 class="display-3">Display 3</h1>
<h1 class="display-4">Display 4</h1>
<hr>

<h2>Lists</h2>

<ul>
<li>Lorem ipsum dolor sit amet</li>
<li>Consectetur adipiscing elit</li>
<li>Integer molestie lorem at massa</li>
<li>Facilisis in pretium nisl aliquet</li>
<li>Nulla volutpat aliquam velit
<ul>
<li>Phasellus iaculis neque</li>
<li>Purus sodales ultricies</li>
<li>Vestibulum laoreet porttitor sem</li>
<li>Ac tristique libero volutpat at</li>
</ul>
</li>
<li>Faucibus porta lacus fringilla vel</li>
<li>Aenean sit amet erat nunc</li>
<li>Eget porttitor lorem</li>
</ul>

<ol>
<li>Lorem ipsum dolor sit amet</li>
<li>Consectetur adipiscing elit</li>
<li>Integer molestie lorem at massa</li>
<li>Facilisis in pretium nisl aliquet</li>
<li>Nulla volutpat aliquam velit</li>
<li>Faucibus porta lacus fringilla vel</li>
<li>Aenean sit amet erat nunc</li>
<li>Eget porttitor lorem</li>
</ol>

<hr>

<h2>Preformatted</h2>
<pre>
____________________|____________________
               \  |   |  /
                `.#####.'
                 /`#_#'\
               O'   O   `O  -WDW
</pre>

<hr>
<h2>Table</h2>
<table class="table table-hover">
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

<hr>

<h2>Description Lists</h2>

<dl class="row">
<dt class="col-sm-3">Description lists</dt>
<dd class="col-sm-9">A description list is perfect for defining terms.</dd>

<dt class="col-sm-3">Euismod</dt>
<dd class="col-sm-9">
<p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
<p>Donec id elit non mi porta gravida at eget metus.</p>
</dd>

<dt class="col-sm-3">Malesuada porta</dt>
<dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

<dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
<dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

<dt class="col-sm-3">Nesting</dt>
<dd class="col-sm-9">
<dl class="row">
<dt class="col-sm-4">Nested definition list</dt>
<dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
</dl>
</dd>
</dl>

<hr>
<blockquote class="blockquote">
<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>

<hr>

<pre><code>&lt;p&gt;Sample text here...&lt;/p&gt;
&lt;p&gt;And another line of sample text here...&lt;/p&gt;
</code></pre>

<hr>

To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
To edit settings, press <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>

<hr>

<h2>Responsive Image</h2>
<img src="http://via.placeholder.com/1200x350" class="figure-img img-fluid rounded" alt="A generic placeholder image with rounded corners in a figure.">

<h2>Responsive Captioned Image in a figure tag</h2>
<figure class="figure">
<img src="http://via.placeholder.com/1200x350" class="figure-img img-fluid rounded" alt="A generic placeholder image with rounded corners in a figure.">
<figcaption class="figure-caption">A caption for the above image.</figcaption>
</figure>

<hr>
<h2>Extremely Long Non-breaking Texts Lines</h2>
<a class='dont-break-out' href='#'>https://www.example.com/biglongnames/biglongdirectorynames/biglongfilenamesthatmakeeverythingimpossibletotypeorremember.php?querystring=someincredibleunusuallyridiculouslylongthingjusttomakemylinewraparoundtothenextline&anotherlongthingy=nowisthetimeforallgoodmentocometotheaidoftheircountry</a>

<hr>

<h2>Alerts</h2>
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

<hr>
<h2>Badges</h2>
<h4>Example heading <span class="badge badge-secondary">New</span></h4>
<h5>Example heading <span class="badge badge-secondary">New</span></h5>
<h6>Example heading <span class="badge badge-secondary">New</span></h6>
<button type="button" class="btn btn-primary">
Notifications <span class="badge badge-light">4</span>
</button>
<span class="badge badge-primary">Primary</span>
<span class="badge badge-secondary">Secondary</span>
<span class="badge badge-success">Success</span>
<span class="badge badge-danger">Danger</span>
<span class="badge badge-warning">Warning</span>
<span class="badge badge-info">Info</span>
<span class="badge badge-light">Light</span>
<span class="badge badge-dark">Dark</span>
<hr>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button>
<div class="btn-group" role="group" aria-label="Basic example">
<button type="button" class="btn btn-secondary">Left</button>
<button type="button" class="btn btn-secondary">Middle</button>
<button type="button" class="btn btn-secondary">Right</button>
</div>
<hr>

<h2>Cards</h2>

<div class="card" style="width: 18rem;">
<img class="card-img-top" src="http://via.placeholder.com/286x180" alt="Card image cap">
<div class="card-body">
<h5 class="card-title">Card title</h5>
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

<hr>

<h2>Forms</h2>
<form>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">@</span>
</div>
<input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
<div class="input-group-append">
<span class="input-group-text" id="basic-addon2">@example.com</span>
</div>
</div>

<label for="basic-url">Your vanity URL</label>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
</div>
<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text">$</span>
</div>
<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
<div class="input-group-append">
<span class="input-group-text">.00</span>
</div>
</div>

<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">With textarea</span>
</div>
<textarea class="form-control" aria-label="With textarea"></textarea>
</div>
</form>






<?php
/*************************************************************
 * ADD PAGE CONTENT ABOVE.
 *************************************************************/
?>
</div>

<?php include "./_includes/99-bottom.php";