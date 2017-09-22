<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>SandStorm</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
      
    <!-- Some extra styles (remove if not needed) -->
    <style>
        section {
            padding: 70px 0;
            border-bottom: 1px dotted #ccc;
        }

        /* So that we can see the grid */
        .grid-example  div[class^="col"] {
            border: 1px solid white;
            background: lightblue;
            text-align: center;
            padding-top: 8px;
            padding-bottom: 8px;
            }
        /* Overide Jumbotron's color */
        .jumbotron {
    background-color: lightskyblue;
        }
    </style>

  </head>

  <body data-spy="scroll" data-target="#navbar-example">

    <nav id="topNav" class="navbar navbar-full navbar-static-top navbar-dark bg-inverse">
        <div class="container">
            <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                &#9776;
            </button>
            <a class="navbar-brand" href="#">SandStorm</a>
            <div class="collapse navbar-toggleable-sm" id="collapsingNavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#grid">Welcome</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cards">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tags">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Form">Form</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Welcome to SandStormRadio website!</h1>
      </div>
    </div>

    <div class="container">
        <section id="grid">
            <h2>Welcome</h2>
            <p>OK, maybe not the best game's servers network, but we are working on quality of servers so please help us with suggesting new ideas and other things to us. Thank you.</p>
        </section>

        <section id="cards">
            <h2>About our network</h2>
            <p>Our network is new, and need staff. We are trying to make it much better everyday.</p>
			<p>If you want to apply for staff, please apply in bottom of the page.</p>

            <div class="card-columns">
                <!-- Card 1 -->
                <div class="card">
                    <div class="card-header"><b>Owner</b></div>
                        <div class="card-block">
                        <p class="card-text"><b>Titas</b></p>
						<p class="card-text">Im a owner of this project. Im friendly, and accepting new people in the way they are ✌</p>
						<p class="card-text">If you need help contact me at <a href="mailto:titas@sandstorm.ga">titas@sandstorm.ga</a></p>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="tags">
            <h2>News</h2>
            <p>Tag meanings : </p>
            <p>
                <span class="tag tag-default">Default</span>
                <span class="tag tag-primary">TOP</span>
                <span class="tag tag-success">Success</span>
                <span class="tag tag-info">Info</span>
                <span class="tag tag-warning">New Staff</span>
                <span class="tag tag-danger">Failure</span>
            </p>
			<p>
			
			<span class="tag tag-info">Info</span> <i><b>2017/09/08</b></i> We are just starting network and making progress with making network much better!</p>
			<progress class="progress progress-success" value="20" max="100">20%</progress>
			<span class="tag tag-success">Success</span> <i><b>2017/09/15</b></i> Our first server was made!
			<!--
            <h3>Pill Tags</h3>
            <p>Use the <code>.tag-pill</code> class to give your tags rounded corners.</p>
            <p>
                <span class="tag tag-pill tag-default">Default</span>
                <span class="tag tag-pill tag-primary">Primary</span>
                <span class="tag tag-pill tag-success">Success</span>
                <span class="tag tag-pill tag-info">Info</span>
                <span class="tag tag-pill tag-warning">Warning</span>
                <span class="tag tag-pill tag-danger">Danger</span>
            </p>
			-->
        </section>
		<!--
        <section id="customForms">
            <h2>Introducing Custom Forms</h2>
            <p>Bootstrap 4 introduces <a href="http://www.quackit.com/bootstrap/bootstrap_4/tutorial/bootstrap_custom_forms.cfm">custom forms</a>. These are custom form elements that completely replace the browser defaults. The idea behind custom forms is that they allow for more customization and cross browser consistency.</p>
            <p>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Boots</span>
                </label>
                <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Shoes</span>
                </label>
            </p>
            <div class="custom-controls-stacked">
                <label class="custom-control custom-radio">
                    <input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Boots</span>
                </label>
                <label class="custom-control custom-radio">
                    <input id="radioStacked2" name="radio-stacked" type="radio" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Shoes</span>
                </label>
            </div>
            <p>
                <select class="custom-select">
                    <option selected>Choose One...</option>
                    <option value="1">Boots</option>
                    <option value="2">Shoes</option>
                    <option value="3">Feet</option>
                </select>
            </p>
            <p>
                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input">
                    <span class="custom-file-control"></span>
                </label>
            </p>
        </section>


        <section id="outlineButtons">
            <h2>Outline Buttons</h2>
            <p>Bootstrap 4 introduces outline buttons &mdash; buttons with a contextual outline.</p>
            <button type="button" class="btn btn-lg btn-outline-primary">Primary</button>
            <button type="button" class="btn btn-lg btn-outline-secondary">Secondary</button>
            <button type="button" class="btn btn-lg btn-outline-info">Info</button>
            <button type="button" class="btn btn-lg btn-outline-success">Success</button>
            <button type="button" class="btn btn-lg btn-outline-warning">Warning</button>
            <button type="button" class="btn btn-lg btn-outline-danger">Danger</button>
        </section>



        <section id="progress">
            <h2>Progress Bars</h2>
            <p>Bootstrap 4 takes advantage of the HTML5 <a href="http://www.quackit.com/html/tags/html_progress_tag.cfm"><code>&lt;progress&gt;</code></a> element when working with progress bars.</p> 
            <progress class="progress progress-success" value="73" max="100">73%</progress>
            <progress class="progress progress-info" value="500" max="1000">50%</progress>
            <progress class="progress progress-warning" value="35" max="100">35%</progress>
            <progress class="progress progress-danger" value="200" max="1000">20%</progress>     
        </section>


        <section id="tables">
            <h2>Responsive Tables</h2>
            <p>Bootstrap 4 allows you to apply the <code>.table-responsive</code> class directly to the table (as opposed to being required to apply it to a parent element, like in Bootstrap 3).</p> 
  
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Header 1</th>
                        <th>Header 2</th>
                        <th>Header 3</th>
                        <th>Header 4</th>
                        <th>Header 5</th>
                        <th>Header 6</th>
                        <th>Header 7</th>
                        <th>Header 8</th>
                        <th>Header 9</th>
                        <th>Header 10</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section>
            <h3>Reflow Tables</h3>
            <p>There's a new <code>.table-reflow</code> class that effectively turns your table on its side.</p>

            <table class="table table-reflow">
                <thead>
                    <tr>
                        <th>Header 1</th>
                        <th>Header 2</th>
                        <th>Header 3</th>
                        <th>Header 4</th>
                        <th>Header 5</th>
                        <th>Header 6</th>
                        <th>Header 7</th>
                        <th>Header 8</th>
                        <th>Header 9</th>
                        <th>Header 10</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section>
            <h3>Table Head Styles</h3>
            <p>You can add background color to your table headers in Bootstrap 4.</p>

            <table class="table">
                <thead class="thead-inverse">
                    <tr>
                        <th>Header 1</th>
                        <th>Header 2</th>
                        <th>Header 3</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Footer 1</th>
                        <th>Footer 2</th>
                        <th>Footer 3</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                    <tr>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                    </tr>
                </tbody>
            </table>

        </section>
		-->
		        <section id="Form">
            <h2>Apply To Staff</h2>
		<center>
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdHIiCX9vcYPo_LRDrosnPbLkrl67YQXJ96XWtjl4wP3X7UOg/viewform?embedded=true" width="900" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </center>
		</section>
        <footer>
            <p>&copy; SandStorm 2017</p>
        </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

    <!-- Tether -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>

    <!-- Initialize Bootstrap functionality -->
    <script>
    // Initialize tooltip component
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

    // Initialize popover component
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
    </script>    

  </body>
</html>