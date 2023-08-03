<?php
    require_once 'config.php';

    $sql = "SELECT * FROM products";
    $all_product = $con->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kingsman Restaurant</title>
        <link rel="icon" href="pictures/logo.jpg" type="image/x-icon">
            <!--for icons-->
            <link rel="stylesheet" href="https://iconscout.com/unicons/explore">
            <!---Bootstrap CSS--->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <!--for swiper slides--> 
            <link rel="stylesheet" href="assets/css/swiper-bundle.min.">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  

        <!--fancy box-->
        <link rel="stylesheet" href="assets/css/jqueary.fancybox.min.css">
        <link rel="stylesheet" href="style.css">
        <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!--custom css-->
        <link rel="stylesheet" href="stylem.css">
    </head>
<body class="body-fixed">
    <div class="Home">
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
    </div>

    <!--poster-->

    <div class="poster">
        <h1>Our<span>Menu</span></h1>
    </div>

    <!--paragraph1-->

    <div class="para">
        <p>"Welcome to [Restaurant Name], where culinary delights await to tantalize your taste buds.
             Our meticulously crafted menu is a symphony of flavors, carefully curated to take you on a culinary journey like no other.
              From sizzling burgers and mouthwatering pizzas to wholesome sandwiches and refreshing beverages, our dishes are a fusion of innovation and tradition.
               Each ingredient is handpicked to ensure the finest quality, and every recipe is prepared with passion and expertise.
                Embark on a gastronomic adventure with us and indulge in the artistry of taste.<br><br><span>
                 Join us for a dining experience that will leave you craving for more.</span><br>
                  <span> appétit!"</span></p>
    </div>

<!--Menu-->


    <div class="menu">
        <div class="cat pizza">
            <h2>OUR SPECIAL MENU</h2>
            
            <div class="menu_box">
            <?php
                while($row = mysqli_fetch_assoc($all_product)){ 
            ?>    
                <div class="menu_card">
                    <div class="menu_image">
                        <img src="pictures/<?php echo $row["picture"]; ?>" alt="">
                    </div>
    
                    <div class="menu_info">
                        <h2><?php echo $row["name"] ?></h2>
                        <p>
                            <?php echo $row["description"] ?>
                        </p>
                        <h3>Rs.<?php echo $row["price"] ?>/-</h3>
                        <a href="#" class="menu_btn">Order Now</a>
                    </div>
                </div>
                <?php
            }
        ?>    
            </div>
        </div>
        

    <footer class="footer">
		<div class="container">
			<div class="row">
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

    <script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.4.1.js"></script>

</body>
</html>