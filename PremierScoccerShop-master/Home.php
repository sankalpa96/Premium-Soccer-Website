<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Premier Soccer Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
     
  }
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">PREMIER SOCCER</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
		<li><a href="Login/index.html">SHOP</a></li>
		<li><a href="#tour">OFFERINGS</a></li>
        <li><a href="#band">TEAM</a></li>
		<li><a href="QUIZ/Quiz.html">QUIZ</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CV's
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cv/dulaj.html">Dulaj</a></li>
            <li><a href="cv/Samitha.html">Samitha</a></li>
            <li><a href="cv/wanni.html">Tharindu</a></li>
			<li><a href="cv/Sithum.html">Sankalpa</a></li>
			<li><a href="cv/Hemal.html">Hemal</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="HomePagePics/adidas.jpg" alt="adidas" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Adidas</h3>
          <p>Shop our brand new adidas men and women soccer collection.</p>
        </div>
      </div>

      <div class="item">
        <img src="HomePagePics/nike.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Nike</h3>
          <p>new nike men and women soccer collection.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="HomePagePics/puma.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>puma</h3>
          <p>new items available for men and women</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>Premier Soccer</h3>
  <p><em>Give your soccer items a second chance!</em></p>
  <p>THE premier Soccer is the soccer store for all your soccer equipment and apparel needs! Our mission is to offer the best products and services that 
  inspire soccer players to elevate their game and play with passion and confidence. 

THE Premier Soccer strives to provide the best soccer shopping experience to both the Dallas / Fort Worth and Austin community and the national soccer fan. 
THE Premier Soccer is a leading dealer of soccer equipment for all levels of soccer player, including recreational, club, and school. Our online soccer 
shop has thousands of items to fulfil all your player, coaching, or fan based needs. In addition to our online soccer store, PrmierSoccer.com</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Sankalpa</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="HomePagePics/sankalpa.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
	    <p>Sithum Sankalpa Nanayakkara</p>
        <p>Born in 1996-12-12</p>
		<p>Went to St Benedict's college</p>
		<p>Following a software engineering degree at IIT</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Dulaj</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="HomePagePics/dulaj.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Dulaj Gamage</p>
        <p>Born in 1995-03-07</p>
        <p>Went to St Sebastian College</p>
		<p>Following a software engineering degree at IIT</p>
      </div>
    </div>
	<div class="col-sm-4">
      <p class="text-center"><strong>Samitha</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="HomePagePics/samitha.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo4" class="collapse">
        <p>Samitha Udakara</p>
        <p>Born in 1994-10-04</p>
        <p>Went to Rahula college</p>
		<p>Following a software engineering degree at IIT</p>
      </div>
    </div>
	<div class="col-sm-4">
      <p class="text-center"><strong>Tharindu</strong></p><br>
      <a href="#demo5" data-toggle="collapse">
        <img src="HomePagePics/tharindu.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo5" class="collapse">
        <p>Tharindu Prabhashwara Wanninayake</p>
        <p>Born in 1996-07-10</p>
        <p>Went to  Bandaranayake College</p>
		<p>Following a software engineering degree at IIT</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Hemal</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="HomePagePics/hemal.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Nuwan Hemal Hearth</p>
        <p>Born in 1997-01-18</p>
        <p>Went to Maliyadeva College</p>
		<p>Following a software engineering degree at IIT</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">SPECIAL OFFERS</h3>
    <p class="text-center">Premier Soccer shop will give you massive discounts<br> Until 31<sup>st</sup> December!</p>
    
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="HomePagePics/ball.jpg" alt="adidas" width="400" height="300">
          <p><strong>Adidas football</strong></p>
          <p>30% discount</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Now</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="HomePagePics/nshoe.jpg" alt="Nike" width="400" height="300">
          <p><strong>Nike shoe</strong></p>
          <p>10% discount </p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Now</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="HomePagePics/pgloves.jpg" alt="puma" width="400" height="300">
          <p><strong>Puma gloves</strong></p>
          <p>25% discount</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Online Pay</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> No of Items</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span>Country code</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter your country code">
			  
            </div>
              <button type="submit" class="btn btn-block" data-target="#myPage">Pay
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="https://countrycode.org/"  target="_blank">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Soccer Shop</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +94 15506756</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: Soccershop@gmail.com</p>
    </div>
	
	
	
	
    <div class="col-md-8">
      <div class="row">
	  
	   <form action="" method="POST">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="Name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="Comment" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
         <!-- <button class="btn pull-right" type="submit">Send</button>-->
		  <input type="submit" name="Submit" value="Submit Comment" class="btn pull-right">
        </div>
      </div>
	  </form>
    </div>
  </div>
  
    
   <?php
 
 if($_POST['Submit']){
  print "<h1>Your comment has been submitted!</h1>";

  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];

  #Get old comments
  $old = fopen("comments.txt", "r+t");
  $old_comments = fread($old, 1024);

  #Delete everything, write down new and old comments
  $write = fopen("comments.txt", "w+");
  $string = "<b>".$Name."</b><br><ul>".$Comment."</ul><hr>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

 #Read comments
 $read = fopen("comments.txt", "r+t");
 echo "<br><br>Comments<hr>".fread($read, 1024);
 fclose($read);

?>


  
  
   
  <br>
  <h3 class="text-center">From The Blog</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Sankalpa</a></li>
    <li><a data-toggle="tab" href="#menu1">Samitha</a></li>
    <li><a data-toggle="tab" href="#menu2">Dulaj</a></li>
	<li><a data-toggle="tab" href="#menu3">Tharindu</a></li>
	<li><a data-toggle="tab" href="#menu4">Hemal</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Sankalpa Nanayakkara</h2>
      <p>No.280/B, Pattiyawala, Wattala</p>
	  <p>sithtumsankalpa@gmail.com</p>
	  <p>075-5643786</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Samitha Udakara</h2>
      <p>No.76/3,Piliyandala,Colombo</p>
	  <p>samithaudakara@gmail.com</p>
	  <p>071-1643486</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Dulaj Gamage</h2>
      <p>No.344 Station road,Lunawa</p>
	  <p>dulajgamage@gmail.com</p>
	  <p>072-2223786</p>
    </div>
	 <div id="menu3" class="tab-pane fade">
      <h2>Tharindu Wanninayake</h2>
      <p>No.05,Kandy road,Kiribathgoda</p>
	  <p>tharinduwanninayake@gmail.com</p>
	  <p>077-5643789</p>
    </div>
	 <div id="menu4" class="tab-pane fade">
      <h2>Hemal Herath</h2>
      <p>No.299/7,Kandy road,Kurunegala</p>
	  <p>nuwanhemal@gmail.com</p>
	  <p>071-8850419</p>
    </div>
  </div>
</div>




















<div id="googleMap"></div>

<!-- Add Google Maps -->

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(6.865320, 79.859823);

function initialize() {
var mapProp = {
center:myCenter,
zoom:12,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
position:myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>

</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>

