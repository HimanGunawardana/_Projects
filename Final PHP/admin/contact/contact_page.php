<?php

@include 'config.php';

if(isset($_POST['add_contact'])){

   $address = $_POST['address'];
   $contact1 = $_POST['contact1'];
   $contact2 = $_POST['contact2'];
   $twitter = $_POST['twitter'];
   $email = $_POST['email'];

   if(empty($address) || empty($contact1) || empty($contact2) || empty($twitter) || empty($email)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO contact(address, contact1, contact2, twitter, email) VALUES('$address', '$contact1', '$contact2', '$twitter', '$email')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         $message[] = 'new contact added successfully';
      }else{
         $message[] = 'could not add the contact';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM contact WHERE id = $id");
   header('location:contact_page.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Details Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
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

   <div class="admin-contact-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add new contact details</h3>
         <input type="text" name="address" placeholder="Enter Your Address" class="box">
         <input type="phone" name="contact1" placeholder="Enter Contact 01" class="box">
         <input type="phone" name="contact2" placeholder="Enter Contact 02" class="box">
         <input type="link" name="twitter" placeholder="Enter Your Twiiter" class="box">
         <input type="email" name="email" placeholder="Enter Your Email" class="box">
         <input type="submit" class="btn" name="add_contact" value="add contact">
         <a href="/admin/admin/mainadmin_page.php" class="btn">go back!</a>
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM contact");
   
   ?>
   <div class="contact-display">
      <table class="contact-display-table">
         <thead>
         <tr>
            <th>address</th>
            <th>contact 01</th>
            <th>contact 02</th>
            <th>twitter</th>
            <th>email</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['contact1']; ?></td>
            <td><?php echo $row['contact2']; ?></td>
            <td><?php echo $row['twitter']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
               <a href="contact_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="contact_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>