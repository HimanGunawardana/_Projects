<?php
    require_once 'config.php';

    $sql = "SELECT * FROM event";
    $all_product = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KingsmanRestaurant</title>
  <link rel="icon" href="pictures/logo.jpg" type="image/x-icon">
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1eve.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="stylee.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
	
  </head>
  <body>
  <div class="container-fluid">
    <nav style="background-color: #f2f2f2" class="navbar fixed-top navbar-expand-lg"> <a class="navbar-brand" href="index.php"><img src="pictures/logo.jpg" style="border-radius: 20%;border-left: 5px #fac031 solid;border-bottom:  5px rgba(252,156,17,1) solid" width="70" height="50" alt=""/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><img src="pictures/list.png" width="30" height="30"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent1" style="padding-left: 100px">
        <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <a  class="nav-link" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a> </li>
      <li class="nav-item active"> <a class="nav-link " href="menu.php"><b>Menu</b>&nbsp;</a></li>
      <li class="nav-item active"> <a class="nav-link " href="event.php"><b>Event</b>&nbsp;</a></li>
      <li class="nav-item active"> <a class="nav-link" href="offer.php"><b>Offers</b>&nbsp;</a></li>
      <li class="nav-item active"> <a class="nav-link" href="about.php"><b>About Us</b> <span class="sr-only"></span></a></li>
      <li class="nav-item active"> <a class="nav-link" href="contactus.php"><b>Contact Us</b>&nbsp;</a> </li>
      
        </ul>
        <form class="form-inline my-2 my-lg-0">
</form>
      </div>
    </nav>
    <img src="pictures/5.jpg" width="100%" height="600" alt=""/> 
    <h1 class="htf"><center>Enjoy <span style="color: white;text-shadow: #6f493c 12px -24px 20px,#6f493c -10px 22px 18px;">With</span> US</center></h1>
    <br><br> 
    <?php
    while($row = mysqli_fetch_assoc($all_product)){ 
    ?> 
    <div class="row" style="max-width: 100%; margin: auto;">
      <div class="col-lg-3" >
		<div class="card col-md-3 col-lg-12">
          <div class="card-header"><?php echo $row['name'] ?></div>
          <img src="pictures/<?php echo $row['image'] ?>" class="img-fluid" alt="Placeholder image">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Rs.<?php echo $row['price']; ?>/-</li>
          </ul>
        </div>
		&nbsp;</div>
    <?php 
    }
    ?>  
      
    <div style="background-color:black"><br><br><h1 style="color:rgba(252,156,17,0.97);font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Welcome to our restaurant's exciting event web page!</h1>
	  <p style="color:yellow;font-style: oblique;"><br>
		We believe that dining is not just about enjoying delicious food but also about creating unforgettable experiences for our valued guests.On this dedicated page,<br>we showcase an array of captivating events, designed to tantalize your taste buds and elevate your dining journey. From exclusive chef's tasting menus that unveil<br> culinary artistry to themed food festivals celebrating diverse cuisines,there's something for every palate.Whether you're a food enthusiast, a connoisseur, or simply<br> seeking a delightful time,our event web page promises to keep you updated on the latest happenings.Join us as we blend extraordinary flavors,cultural inspirations,<br> and warm hospitality to make each event a cherished memory for all who walk through our restaurant's doors.</p><br><br> <p style="font-size:160%; color:rgba(252,156,17,0.97);" >Stay connected,and let the festivities<br><br> 
      </p>
    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: grey">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active"> <img class="d-block mx-auto" src="pictures/15.jpg" width="100%" height="750" alt="First slide">
          <div class="carousel-caption">
            
          </div>
</div>
        <div class="carousel-item"> <img src="pictures/12.jpg" alt="Second slide" width="100%" height="750"  class="d-block mx-auto">
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="carousel-item"> <img src="pictures/13.jpg" alt="Third slide" width="100%" height="s750" class="d-block mx-auto img-fluid">
          <div class="carousel-caption">
            
          </div>
	    </div>
      </div>
      <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span></a>    </div>
</div>
</div>
  </div>

  <footer class="footer">
		<div class="container">
			<div class="rw">
				<div class="footer-col">
					<h4>Quick Links</h4>
					<u1>
						<li><a href="index.php">Home</a></li>
						<li><a href="menu.php">Menu</a></li>
						<li><a href="offer.php">Offers</a></li>
						<li><a href="event.php">Event</a></li>
						<li><a href="about.php">About US</a></li>
						<li><a href="contactus.php">Contact US</a></li>
					</u1>
				</div>
				<div class="footer-col">
					<h4>Contact Now</h4>
					<u1>
						<li><a href="#">(+94) 114565789</a></li>
						<li><a href="#">(+94) 114561681</a></li>
						<li><a href="#" style="text-transform: lowercase">kingsman00@gmail.com</a></li>
						<li><a href="#">Homagama(main)</a></li>
					</u1>
				</div>
				<div class="footer-col">
					<h4>Branches</h4>
					<u1>
						<li><a href="#" >Matara</a></li>
						<li><a href="#">Homagama</a></li>
						<li><a href="#">Maharagama</a></li>
						<li><a href="#">Nugegoda</a></li>
					</u1>
				</div>
				<div class="footer-col">
					<h4>Follow US</h4>
					<div class="social-links">
						<a href="#"><i class="fab fa-facebook-f"></i></a><br>
						<a href="#"><i class="fab fa-twitter"></i></a><br>
						<a href="#"><i class="fab fa-instagram"></i></a><br> 
						<a href="#"><i class="fab fa-whatsapp"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
<!-- body code goes here -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.3.1eve.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/poppereve.min.js"></script> 
  <script src="js/bootstrap-4.3.1eve.js"></script>
  </body>
</html>