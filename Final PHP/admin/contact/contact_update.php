<?php

@include 'config.php';

$id = $_GET['edit'];

if(isset($_POST['update_contact'])){

    $address = $_POST['address'];
    $contact1 = $_POST['contact1'];
    $contact2 = $_POST['contact2'];
    $twitter = $_POST['twitter'];
    $email = $_POST['email'];

   if(empty($address) || empty($contact1) || empty($contact2) || empty($twitter) || empty($email)){
      $message[] = 'please fill out all!';    
   }else{

      $update_data = "UPDATE contact SET address='$address', contact1='$contact1', contact2='$contact2', twitter='$twitter', email='$email'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_data);

      if($upload){
         $message[] = 'Update Successfully';
         header('location:contact_page.php');
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
   <title>Contact Details Update Page</title>
   <link rel="stylesheet" href="style6.css">
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


<div class="admin-contact-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM contact WHERE id = '$id'");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update the contact</h3>
      <input type="text" class="box" name="address" value="<?php echo $row['address']; ?>" placeholder="Enter the address">
      <input type="tel" class="box" name="contact1" value="<?php echo $row['contact1']; ?>" placeholder="Enter the contact 01">
      <input type="tel" class="box" name="contact2" value="<?php echo $row['contact2']; ?>" placeholder="Enter the contact 02">
      <input type="link" class="box" name="twitter" value="<?php echo $row['twitter']; ?>" placeholder="Enter the twitter">
      <input type="email" class="box" name="email" value="<?php echo $row['email']; ?>" placeholder="Enter the email">
      <input type="submit" value="update contact" name="update_contact" class="btn">
      <a href="contact_page.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

</body>
</html>