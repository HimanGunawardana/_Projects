<?php

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_offer'])){

   $offer_name = $_POST['offer_name'];
   $offer_descri = $_POST['offer_descri'];
   $offer_discount = $_POST['offer_discount'];
   $offer_price = $_POST['offer_price'];
   $offer_image = $_FILES['offer_image']['name'];
   $offer_image_tmp_name = $_FILES['offer_image']['tmp_name'];
   $offer_image_folder = 'uploaded_img/'.$offer_image;
   $offer_type = $_POST['offer_type'];

   if(empty($offer_name) || empty($offer_price) || empty($offer_image) || empty($offer_discount) || empty($offer_type)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE offer SET name='$offer_name', descri='$offer_descri', discount='$offer_discount', price='$offer_price', image='$offer_image', WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($offer_image_tmp_name, $offer_image_folder);
         header('location:offer_page.php');
      }else{
         $$message[] = 'please fill out all!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Offer Update Page</title>
   <link rel="stylesheet" href="style3.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-offer-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM offer WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the offer</h3>
      <input type="text" class="box" name="offer_name" value="<?php echo $row['name']; ?>" placeholder="Enter the offer name">
      <input type="text" class="box" name="offer_descri" value="<?php echo $row['descri']; ?>" placeholder="Enter the description">
      <input type="number" min="0" class="box" name="offer_price" value="<?php echo $row['discount']; ?>" placeholder="Enter the offer discount">
      <input type="number" min="0" class="box" name="offer_price" value="<?php echo $row['price']; ?>" placeholder="Enter the offer price">
      <input type="file" class="box" name="offer_image"  accept="image/png, image/jpeg, image/jpg">
      <select name="offer_type" class="box">
      <option value="weekend">Select Weekend or Special Day</option>
         <option value="weekend">Weekend</option>
         <option value="day">Special Day</option>
      </select>
      <input type="submit" value="update offer" name="update_offer" class="btn">
      <a href="offer_page.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>