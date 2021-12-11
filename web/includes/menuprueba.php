<!DOCTYPE html>
<html>
<head>
<title>Lorem Framework</title>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://loremframework.altervista.org/css/materialize.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body onload="vai();">

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height:100%">
<a href="#" data-target="slide-out" class="sidenav-trigger show-on-large white-text"><i class="material-icons">menu</i></a>
  <a class="navbar-brand" href="#">Lorem Framework v1.0</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
      <li class="nav-item active">
        <a class="nav-link" href="#">Home1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 white-text" type="search" placeholder="Search" aria-label="Search">
      <button class="btn my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- SideNav -->
<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="https://loremframework.altervista.org/img/1.jpg">
      </div>
      <a href="#user"><img class="circle" src="https://loremframework.altervista.org/img/2.jpg"></a>
      <a href="#name"><span class="white-text name">Alessandro Fiori</span></a>
      <a href="#email"><span class="white-text email">alefiori3@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>

<!-- Carousel/Title -->
<h1 style="text-align:center;">Lorem Framework</h1>
<h3 style="text-align:center;"><span id ="testo"></span></h3>
<div class="carouselM">
    <a class="carouselM-item" href="#one!"><img src="https://loremframework.altervista.org/img/1.jpg"></a>
    <a class="carouselM-item" href="#two!"><img src="https://loremframework.altervista.org/img/2.jpg"></a>
    <a class="carouselM-item" href="#three!"><img src="https://loremframework.altervista.org/img/3.jpg"></a>
    <a class="carouselM-item" href="#four!"><img src="https://loremframework.altervista.org/img/4.jpg"></a>
    <a class="carouselM-item" href="#five!"><img src="https://loremframework.altervista.org/img/5.jpg"></a>
  </div>
</header>

<section>
<h1 style="text-align:center;">Badges</h1>
<div class="container">
    <div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">W3C</span>
          <p>Updates <span class="w3-badge">9</span></p>
        </div>
      </div>
    </div>

<div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Materialize</span>
          <div class="collection">
    <a href="#!" class="collection-item"><span class="badge">1</span>Alan</a>
    <a href="#!" class="collection-item"><span class="new badge">4</span>Alan</a>
    <a href="#!" class="collection-item">Alan</a>
    <a href="#!" class="collection-item"><span class="badge">14</span>Alan</a>
  </div>
        </div>
      </div>
    </div>

<div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Bootstrap</span>
          <h1>Example heading <span class="badge badge-secondary white-text">New</span></h1>
<h2>Example heading <span class="badge badge-secondary white-text">New</span></h2>
<h3>Example heading <span class="badge badge-secondary white-text">New</span></h3>
<h4>Example heading <span class="badge badge-secondary white-text">New</span></h4>
<h5>Example heading <span class="badge badge-secondary white-text">New</span></h5>
<h6>Example heading <span class="badge badge-secondary white-text">New</span></h6>
        </div>
      </div>
    </div>

</div>

<hr />

<h1 style="text-align:center;">Buttons</h1>
<div class="container">
    <div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">W3C</span>
          <input class="w3-button w3-black" type="button" value="Input Button">
<button class="w3-button w3-black">Button Button</button>
<a href="https://www.w3schools.com" class="w3-button w3-black">Link Button</a>

<input class="w3-btn w3-black" type="button" value="Input Button">
<button class="w3-btn w3-black">Button Button</button>
<a href="https://www.w3schools.com" class="w3-btn w3-black">Link Button</a>
        </div>
      </div>
    </div>

<div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Materialize</span>
          <a class="waves-effect waves-light btn">button</a>
<a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>button</a>
<a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>
        </div>
      </div>
    </div>

<div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Bootstrap</span>
          <a type="button" class="waves-effect waves-light btn btn-primary">Primary</a>
<a type="button" class="waves-effect waves-light btn btn-secondary">Secondary</a>
<a type="button" class="waves-effect waves-light btn btn-success">Success</a>
<a type="button" class="waves-effect waves-light btn btn-danger">Danger</a>
<a type="button" class="waves-effect waves-light btn btn-warning">Warning</a>
<a type="button" class="waves-effect waves-light btn btn-info">Info</a>
<a type="button" class="waves-effect waves-light btn btn-light">Light</a>
<a type="button" class="waves-effect waves-light btn btn-dark">Dark</a>

<a type="button" class="waves-effect waves-light btn btn-link">Link</a>
        </div>
      </div>
    </div>

</div>

<hr />

<h1 style="text-align:center;">Breadcrumbs</h1>
<div class="container">
    <div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">W3C</span>
          <p>Not available</p>
        </div>
      </div>
    </div>

<div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Materialize</span>
          <p>Not available</p>
        </div>
      </div>
    </div>

<div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Bootstrap</span>
          <nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-dark">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-dark">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-dark">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
        </div>
      </div>
    </div>

</div>

<hr />

<h1 style="text-align:center;">Collections</h1>
<div class="container">
    <div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">W3C</span>
          <ul class="w3-ul">
  <li>Jill</li>
  <li>Eve</li>
  <li>Adam</li>
</ul>
        </div>
      </div>
    </div>

<div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Materialize</span>
          <ul class="collection black-text">
      <li class="collection-item">Alvin</li>
      <li class="collection-item">Alvin</li>
      <li class="collection-item">Alvin</li>
      <li class="collection-item">Alvin</li>
    </ul>
        </div>
      </div>
    </div>

<div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Bootstrap</span>
          <ul class="list-group black-text">
  <li class="list-group-item">Cras justo odio</li>
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item">Morbi leo risus</li>
  <li class="list-group-item">Porta ac consectetur ac</li>
  <li class="list-group-item">Vestibulum at eros</li>
</ul>
        </div>
      </div>
    </div>

</div>

<hr />

<h1 style="text-align:center;">Collapsible</h1>
<div class="container">
    <div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Materialize</span>
          <ul class="collapsible black-text">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>
        </div>
      </div>
    </div>

</div>

<hr />

<h1 style="text-align:center;">Dropdown</h1>
<div class="container">
    <div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Materialize</span>
          <!-- Dropdown Trigger -->
  <a class='dropdown-trigger btn' href='#' data-target='dropdown1'>Drop Me!</a>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="#!">three</a></li>
    <li><a href="#!"><i class="material-icons">view_module</i>four</a></li>
    <li><a href="#!"><i class="material-icons">cloud</i>five</a></li>
  </ul>
        </div>
      </div>
    </div>

</div>

<hr />

<h1 style="text-align:center;">Material Box</h1>
<div class="container">
    <div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Materialize</span>
          <img class="materialboxed" width="100%" src="https://loremframework.altervista.org/img/1.jpg">
        </div>
      </div>
    </div>

</div>

<hr />

<h1 style="text-align:center;">Modal</h1>
<div class="container">
    <div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Materialize</span>
          <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal black-text">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
        </div>
      </div>
    </div>

</div>

<hr />

<h1 style="text-align:center;">Scrollspy</h1>
<div class="container">
    <div class="col s4 m12">
      <div class="card blue-grey lighten-5">
        <div class="card-content black-text">
          <span class="card-title">Materialize</span>
          <div class="row">
    <div class="col s12 m9 l10">
      <div id="introduction" class="section scrollspy">
        <p>Content </p>
      </div>

      <div id="structure" class="section scrollspy">
        <p>Content </p>
      </div>

      <div id="initialization" class="section scrollspy">
        <p>Content </p>
      </div>
    </div>
    <div class="col hide-on-small-only m3 l2">
      <ul class="section table-of-contents">
        <li><a href="#introduction">Introduction</a></li>
        <li><a href="#structure">Structure</a></li>
        <li><a href="#initialization">Intialization</a></li>
      </ul>
    </div>
  </div>
        </div>
      </div>
    </div>

</div>

<hr />

<h1 style="text-align:center;">Tabs</h1>
<div class="container">
    <div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Materialize</span>
          <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1">Test 1</a></li>
        <li class="tab col s3"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab col s3 disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab col s3"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">Test 1</div>
    <div id="test2" class="col s12">Test 2</div>
    <div id="test3" class="col s12">Test 3</div>
    <div id="test4" class="col s12">Test 4</div>
  </div>
        </div>
      </div>
    </div>

</div>

<hr />

<h1 style="text-align:center;">Tooltip</h1>
<div class="container">
    <div class="col s4 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Materialize</span>
          <a class="btn tooltipped" data-position="bottom" data-tooltip="I am a tooltip">Hover me!</a>
        </div>
      </div>
    </div>

</div>

<hr />
<h1 style="text-align:center;">And more... Near all components from W3.CSS, Materialize and Bootstrap!</h1>
<h1 style="text-align:center;">Unify the Web!</h1>
</section>

<!-- Floating Action Button -->
<div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul>
    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
  </ul>
</div>

<footer class="page-footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Lorem Framework - Unify The Web!
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>

<script src="https://loremframework.altervista.org/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script>
M.AutoInit();
</script>

<script language="JavaScript">
//variabile dove memorizzare il tempo di pausa in millisecondi
var attesa = 200;
// singolo carattere del messaggio
var cchar ="";
//stringa da visualizzare
var visibile="";
var i=-1;
var messaggio='Unify The Web!';
function vai() {
	if (i < messaggio.length) {
         	i++
		cchar = messaggio.substr(i, 1);
        	visibile = visibile + cchar;
        	 setTimeout("vai()", attesa);
        	if(document.all.testo) document.all.testo.innerHTML = visibile;
        }	
	else {
		return false
	}	
}
</script>
</body>
</html>