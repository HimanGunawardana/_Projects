<?php
   @include 'config.php';
   session_start();
   if(!isset($_SESSION['admin_name'])){
      header('location:login_form.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">

</head>
<body>
   
<div class="container">

   <div class="content">

      <h1>WELCOME TO <span>ADMIN PANEL</span></h1>
      <h3>SETTINGS</h3><br>
      <a href="admin_page.php" class="btn">Home</a>
      <a href="/admin/about/about_page.php" class="btn">About us</a>
      <a href="/admin/contact/contact_page.php" class="btn">Contact Us</a>
      <a href="/admin/offer/offer_page.php" class="btn">Offer</a>
      <a href="/admin/event/event_page.php" class="btn">Event</a>
      <a href="/admin/menu/admin_page.php" class="btn">Menu</a>
      <a href="logout.php" class="btn">logout</a>

   </div>
   <main class="main-container">
      <div class="main-title">
         <h2>DASHBOARD</h2>
      </div>

      <div class="main-cards">

         <div class="card">
            <div class="card-inner">
               <h2>Customers</h2>
            </div>
            <h1>4,099+</h1>
         </div>

         <div class="card">
            <div class="card-inner">
               <h2>Events</h2>
            </div>
            <h1>49+</h1>
         </div>

         <div class="card">
            <div class="card-inner">
               <h2>Food Items</h2>
            </div>
            <h1>59+</h1>
         </div>

         <div class="card">
            <div class="card-inner">
               <h2>Orders</h2>
            </div>
            <h1>199+</h1>
         </div>

      </div>
   </main>

   
</div>


</body>
</html>