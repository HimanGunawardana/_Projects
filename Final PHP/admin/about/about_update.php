<?php

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_about'])){

    $date = $_POST['date'];
    $description = $_POST['description'];

   if(empty($date) || empty($description)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE about SET date='$date', description='$description' WHERE id = '$id'";
      $upload = mysqli_query($con, $update_data);

      if($upload){
         $message[] = 'Update Successfully';
         header('location:about_page.php');
      }else{
         $message[] = 'please fill out all!'; 
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
   <title>About Details Update Page</title>
   <link rel="stylesheet" href="style7.css">
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


<div class="admin-about-form-container centered">

   <?php
      
      $select = mysqli_query($con, "SELECT * FROM about WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the about</h3>
      <input type="date" class="box" name="date" value="<?php echo $row['date']; ?>">
      <input type="text" class="box" name="description" value="<?php echo $row['description']; ?>" placeholder="Enter the description">
      <input type="submit" value="update about" name="update_about" class="btn">
      <a href="about_page.php" class="btn">go back!</a>
   </form>
   <?php }; ?>
</div>
</div>
</body>
</html>