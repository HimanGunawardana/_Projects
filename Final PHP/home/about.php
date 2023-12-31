<?php
    require_once 'config.php';

    $sql = "SELECT * FROM about";
    $all_product = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <!-- Bootstrap -->
	<!-- <link href="css/bootstrap-4.4.1.css" rel="stylesheet"> -->
	<!-- <link href="css/bootstrap-4.3.12.css" rel="stylesheet" type="text/css"> -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<style>
        div.about{
            background-color:black; 
            color:yellow; 
            font-size:100%;
            margin-left: -15px;
            margin-right: -15px;
        }
        p.sp{
            background-color:black; 
            color:yellow;
            font-size:150%;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        div.topic{
			top: 30%;
			margin-left: 450px;
			position: absolute;
      font-size: 150px;    
      color:rgba(252,156,17,0.97) ;			
			font-family: Fantasy;
			font-style: oblique;
			text-shadow: black 10px -24px 20px;
						
        } 
        h1.size{
            font-size: 100%;
        }
        
		.paragraph{
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
			font-size: 25px;
			margin: 5px 15px 5px 15px;
			text-align: justify
		}
    </style>
</head>
  <body>
<div class="container-fluid">
  
	<div class="container">
      <nav style="background-color: #f2f2f2" class="navbar fixed-top navbar-expand-lg"> <a class="navbar-brand" href="index.html"><img src="pictures/logo.jpg" style="border-radius: 20%;border-left: 5px #fac031 solid;border-bottom:  5px rgba(252,156,17,1) solid" width="70" height="50" alt=""/></a>
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
		<img src="pictures/restauran.jpg" alt="image" width="100%" height="550px"/>
    
  <div class="topic"><h1 class="size">About <span style="font-family: Cursive;color: aliceblue">US</span></h1></div>
      <center>
        <?php
          while($row = mysqli_fetch_assoc($all_product)){ 
        ?>  
        <div class="about">
        <p>KingsmanResturent is a family restaurant which is locating very calm and beautiful environment. It is nearly takes 5 mins from Kottawa highway entarence, 10 mins from Godagama to our location.</p>
          <p>You can share your speacial moments with us. Such as birthday parties,office functions,etc...</p>
          <p> Other than that we have special offers on weekends for some special foods.</p>
          <p class="sp">We invite you to come and get experience with us.</p>
        </div>
        <?php
          }
        ?>    
  </center><h1 style="font-size: 45px;font-family: Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', 'monospace';padding-left: 10%;color: rgba(252,156,17,0.97);text-shadow: back 10px -20px 13px">NSBM Green University<img src="pictures/nsbmlogo.png" width="247.9px" height="111.2px" style="margin-left: 8%;"></a></h1>
  <p><div class="paragraph"><span>NSBM Green University, the nation’s premier degree-awarding institute, is the first of 
its kind in South Asia. It is a government-owned self-financed institute that operates 
under the purview of the Ministry of Education. As a leading educational centre in the 
country, NSBM has evolved into becoming a highly responsible higher education 
institute that offers unique opportunities and holistic education on par with international 
standards while promoting sustainable living.<br><br>
NSBM offers a plethora of undergraduate and postgraduate degree programmes under 
five faculties: Business, Computing, Engineering, Science and Postgraduate & 
Professional Advancement. These study programmes at NSBM are either its own 
programmes recognised by the University Grants Commission and the Ministry of 
Higher Education or world-class international programmes conducted in affiliation with 
top-ranked foreign universities such as University of Plymouth, UK, and Victoria 
University, Australia. <br><br>
Focused on producing competent professionals and innovative entrepreneurs for the 
increasingly globalising world, NSBM nurtures its graduates to become productive 
citizens of society with their specialisation ranging in study fields such as Business, 
Management, Computing, IT, Engineering, Science, Psychology, Nursing, Interior 
design, Quantity Surveying, Law and Multimedia.<br><br>
Inspired by the vision of being Sri Lanka’s best-performing graduate school and being 
recognised internationally, NSBM currently achieves approximately 3000 new 
enrollments per year and houses above 11,000 students reading over 50 degree 
programmes under 4 faculties. Moreover, over the years, NSBM Green University has 
gifted the nation with 14,000+ graduates and has proved its global presence with an 
alumni network spread all across the world.<br><br>	
Nestling on a 40-acre land amidst the greenery and serenity in Pitipana, Homagama, 
NSBM Green University, is an ultra-modern university complex constructed with state-of-the-art facilities and amenities that provides the perfect setting for high-quality 
	teaching, learning and research. </span>
</div><br>
	<div class="weblink"><h2 style="font-size: 20px;font-weight: bold;">Web Link: <a href="https://www.nsbm.ac.lk/story-of-nsbm/"><span style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif';font-size: 20px">Story of NSBM | NSB</span></a></h2></div>
  
</p>


	  
  
</div>
<div>
  <br>
  <a href="https://www.nsbm.ac.lk/story-of-nsbm/" ><img src="pictures/nsbm.jpg" width="100%" height="550px"></a>
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
<!-- body code goes here -->


	
	
	  
	    
    <!-- <script src="js/bootstrap-4.4.1.js"></script> -->
  <!-- <script src="js/bootstrap-4.3.1.js"></script> -->
    <script src="js/bootstrap-4.4.1about.js"></script>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1about.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popperabout.min.js"></script>
</body>
</html>