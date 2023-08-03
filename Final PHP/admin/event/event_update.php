<?php

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_event'])){

   $event_name = $_POST['event_name'];
   $event_price = $_POST['event_price'];
   $event_image = $_FILES['event_image']['name'];
   $event_image_tmp_name = $_FILES['event_image']['tmp_name'];
   $event_image_folder = 'uploaded_img/'.$event_image;

   if(empty($event_name) || empty($event_price) || empty($event_image)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE event SET name='$event_name', price='$event_price', image='$event_image'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         move_uploaded_file($event_image_tmp_name, $event_image_folder);
         header('location:event_page.php');
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
   <title>Event Update Page</title>
   <link rel="stylesheet" href="style2.css">
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


<div class="admin-event-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM event WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the event</h3>
      <input type="text" class="box" name="event_name" value="<?php echo $row['name']; ?>" placeholder="Enter the event name">
      <input type="number" min="0" class="box" name="event_price" value="<?php echo $row['price']; ?>" placeholder="Enter the price per hour">
      <input type="file" class="box" name="event_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update event" name="update_event" class="btn">
      <a href="event_page.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>