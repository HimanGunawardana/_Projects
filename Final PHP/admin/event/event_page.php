<?php

@include 'config.php';

if(isset($_POST['add_event'])){

   $event_name = $_POST['event_name'];
   $event_price = $_POST['event_price'];
   $event_image = $_FILES['event_image']['name'];
   $event_image_tmp_name = $_FILES['event_image']['tmp_name'];
   $event_image_folder = 'uploaded_img/'.$event_image;

   if(empty($event_name) || empty($event_price) || empty($event_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO event (name, price, image) VALUES('$event_name', '$event_price', '$event_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($event_image_tmp_name, $event_image_folder);
         $message[] = 'new event added successfully';
      }else{
         $message[] = 'could not add the event';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM event WHERE id = $id");
   header('location:event_page.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Event Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
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

   <div class="admin-event-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new event</h3>
         <input type="text" placeholder="Enter event name" name="event_name" class="box">
         <input type="number" placeholder="Enter the price per hour" name="event_price" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="event_image" class="box">
         <input type="submit" class="btn" name="add_event" value="add event">
         <a href="/admin/admin/mainadmin_page.php" class="btn">go back!</a>
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM event ");
   
   ?>
   <div class="event-display">
      <table class="event-display-table">
         <thead>
         <tr>
            <th>event image</th>
            <th>event name</th>
            <th>event price</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>$<?php echo $row['price']; ?>/-</td>
            <td>
               <a href="event_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="event_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>
</body>
</html>