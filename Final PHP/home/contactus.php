<?php
    require_once 'config.php';

    $sql = "SELECT * FROM contact";
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
	<link href="css/bootstrap-4.4.1c.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	
	  <style>
		  #cd1{
			  cursor: url(),pointer;
		  }
		  #cd2{
			  cursor: url(),pointer;
		  }
		  #cd3{
			  cursor: url(),pointer;
		  }
		  #cd4{
			  cursor: url(),pointer;
		  }
		  .heading{color: black; position: absolute; top: 20%; width: 90%; text-align: center}
		  .row{position: absolute; top:50%; width: 80%; color: black; font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, "sans-serif";background-color: transparent;
		  }
		  .nav-link{
			  color: black;
		  }
		  .pg{
                background-color:rgba(252,156,17,0.97);
                width: 100%;
			  	height: 50px;
			    	    
			  				    
            }
	  </style>
	  
  </head>
  <body style="padding-top: 70px">
  <div class="container-fluid">
	  
    <div class="container">
      <nav style="background-color: #f2f2f2" class="navbar fixed-top navbar-expand-lg"> <a class="navbar-brand" href="index.php"><img src="pictures/logo.jpg" style="border-radius: 20%;border-left: 5px #fac031 solid;border-bottom:  5px rgba(252,156,17,1) solid" width="70" height="50" alt=""/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><img src="pictures/list.png" width="30" height="30"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent1" style="padding-left: 100px">
          <ul class="navbar-nav mr-auto">
		    <li class="nav-item active"> <a  class="nav-link" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a> </li>
			  <li class="nav-item active"> <a class="nav-link " href="Menu.php"><b>Menu</b>&nbsp;</a></li>
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
	  
    <img src="pictures/pexels-yan-krukau-8867432.jpg"	 width="100%" alt="">
	  
	 
	 
	  
		<p class="pg">&nbsp;</p>
		
    <h1 class="heading" style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">&nbsp; </h1></div>
    <div class="container">
  
  <br>
  <div class="row">
    <div class="col-lg-3">
      <div id="cd1" class="card col-md-4 col-lg-10" style="border-radius: 20px; background-color: #ffffcc"><img class="card-img-top" src="pictures/plate.png" alt="Card image cap" width="100%" height="100%">
        <div class="card-body">
          <h6 class="card-title"><b><center>Dining</center></b></h6>
</div>
      </div>
      &nbsp;</div>
    <div class="col-lg-3">
      <div id="cd2" class="card col-md-4 col-lg-10" style="border-radius: 20px; background-color: #ffffcc"><img class="card-img-top" src="pictures/takeaway.png" alt="Card image cap" width="100%" height="100%">
        <div class="card-body">
          <h6 class="card-title"><b><center>Takeaway</center></b></h6>
</div>
      </div>
      &nbsp;</div>
    <div class="col-lg-3">
      <div id="cd3" class="card col-md-4 col-lg-10" style="border-radius: 20px; background-color: #ffffcc"> <img class="card-img-top" src="pictures/reservation.png" alt="Card image cap" width="100%" height="100%">
        <div class="card-body">
          <h6 class="card-title"><b><center>Reservation</center></b></h6>
</div>
      </div>
      &nbsp;</div>
    <div class="col-lg-3">
      <div id="cd4" class="card col-md-4 col-lg-10" style="border-radius: 20px; background-color: #ffffcc"> <img class="card-img-top" src="pictures/delevery.png" alt="Card image cap" width="100%" height="100%">
        <div class="card-body">
          <h6 class="card-title"><b><center>Delevery</center></b></h6>
			
</div>
      </div>
      &nbsp;</div>
  </div>


<p>
<?php
  while($row = mysqli_fetch_assoc($all_product)){ 
?>  
	
	<h2 style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'">&nbsp; <b>Contact us&nbsp;</b></h2>
    <br>
	  
    <h6 style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'"><img src="pictures/location.png" width="15" height="20" alt=""/>&nbsp;<?php echo $row['address']; ?></h6>
	
    <h6 style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'"><img src="pictures/call.png" width="16" height="20" alt=""/>&nbsp;&nbsp;<?php echo $row['contact1']; ?></h6>
    <h6 style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'"><img src="pictures/call.png" width="20" height="20" alt=""/>&nbsp;<?php echo $row['contact2'] ?>&nbsp;</h6>
    <h6 style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'" ><img src="pictures/twitter.png" width="20" height="20" alt=""/>&nbsp;<?php echo $row['twitter']; ?></h6>
    <h6 style="font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif'" ><img src="pictures/gmail.png" width="20" height="20" alt=""/>&nbsp;<?php echo $row['email'] ?>&nbsp;</h>
<?php 
  }
?>    	
</p>
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
	<script src="js/jquery-3.4.1.c.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.c.min.js"></script> 
	<script src="js/bootstrap-4.4.1.c.js"></script>
</body>
</html>