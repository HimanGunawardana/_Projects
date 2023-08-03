<?php

@include 'config.php';

if(isset($_POST['add_about'])){

   $date = $_POST['date'];
   $description = $_POST['description'];

   if(empty($date) || empty($description)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO about(date, description) VALUES('$date', '$description')";
      $upload = mysqli_query($con,$insert);
      if($upload){
         $message[] = 'new about added successfully';
      }else{
         $message[] = 'could not add the about';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($con, "DELETE FROM about WHERE id = $id");
   header('location:about_page.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about Details Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
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

   <div class="admin-about-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add new about details</h3>
         <input type="date" name="date" class="box">
         <input type="text" name="description" placeholder="Enter the description" class="box">
         <input type="submit" class="btn" name="add_about" value="add about">
         <a href="/admin/admin/mainadmin_page.php" class="btn">go back!</a>
      </form>

   </div>

   <?php

   $select = mysqli_query($con, "SELECT * FROM about");
   
   ?>
   <div class="about-display">
      <table class="about-display-table">
         <thead>
         <tr>
            <th>date</th>
            <th>description</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>
               <a href="about_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="about_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>