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
	<link href="css/bootstrap-4.4.1chef.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="style.css">

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
  <div class="banner-text">
    <h1 class="bh">Meet our <span class="bh2"> food specialist</span></h1>
    <p class="bp">Whether it's the warmth of Italy, the finesse of France, the boldness of India, or the precision of Japan, these talented chefs are sure to elevate your restaurant's culinary offerings to new heights.</p>
  </div>
<div class="row">
  <div class="profile">
                <img src="pictures/chef1.jpeg">

      <div class="info">
                    <h2 class="name">Chef Mia Nakamura</h2>
                    <p class="bio">"Sushi Sensation"</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

    </div>
  <div class="profile">
                <img src="pictures/chef2.jpeg">

      <div class="info">
                    <h2 class="name">Chef Marco Rossi</h2>
                    <p class="bio">"Master of Italian Flavors"</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

    </div>
  <div class="profile">
                <img src="pictures/chef3.jpeg">

      <div class="info">
                    <h2 class="name">Chef Emily Leclerc</h2>
                    <p class="bio">"Queen of French Patisserie"</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

    </div>
  <div class="profile">
      <img src="pictures/chef5.jpeg">

      <div class="info">
                    <h2 class="name">Chef Raj Patel</h2>
                    <p class="bio">"Indian Spice Maestro"</p>

                    <div class="team_icon">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>

                </div>

    </div>
</div>
  <div class="discript">
    <h3 class="dis-h">&nbsp;Chef Mia "<span class="dh">Sushi Sensation</span>" Nakamura:</h3>
    <p class="dis-p">&nbsp;With a keen eye for detail and an unwavering commitment to quality, Chef Mia is a sushi virtuoso who brings the art of Japanese culinary precision to your table. Her carefully handcrafted sushi rolls and sashimi showcase the finest ingredients, creating an unforgettable dining experience.</p>
	  
    <h3 class="dis-h">&nbsp;Chef Marco "<span class="dh">Master of Italian Flavors</span>" Rossi:</h3>
    <p class="dis-p">Chef Marco, a culinary virtuoso hailing from Italy, brings the art of traditional Italian cuisine to your plate. With decades of experience, he infuses each dish with passion and authenticity, creating a symphony of flavors that transport diners to the heart of Italy.</p>
	  
    <h3 class="dis-h">Chef Emily "<span class="dh">Queen of French Patisserie</span>" Leclerc:</h3>
    <p class="dis-p">A trailblazer in the world of French desserts, Chef Emily's expertise lies in crafting exquisite pastries and delicate confections that delight both the eye and the palate. Her creations are a fusion of classic French techniques and innovative twists, capturing the essence of Parisian charm.</p>
	  
    <h3 class="dis-h">Chef Raj "<span class="dh">Spice Maestro</span>" Patel:</h3>
    <p class="dis-p">Hailing from the vibrant streets of Mumbai, Chef Raj is a culinary genius known for his mastery of spices. His dishes boast an explosion of flavors that take diners on a journey through the rich tapestry of Indian cuisine, offering a delightful balance of tradition and innovation.</p>
  </div>
</div>
<footer class="footer" style="margin-top: -10px;">
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
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>