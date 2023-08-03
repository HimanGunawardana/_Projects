<?php

@include 'config.php';

if(isset($_POST['add_offer'])){

   $offer_name = $_POST['offer_name'];
   $offer_descri = $_POST['offer_descri'];
   $offer_discount = $_POST['offer_discount'];
   $offer_price = $_POST['offer_price'];
   $offer_image = $_FILES['offer_image']['name'];
   $offer_image_tmp_name = $_FILES['offer_image']['tmp_name'];
   $offer_image_folder = 'uploaded_img/'.$offer_image;
   $offer_type = $_POST['offer_type'];

   if(empty($offer_name) || empty($offer_price) || empty($offer_image) || empty($offer_discount) || empty($offer_type)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO offer (name, descri, discount, price, image, offer_type) VALUES('$offer_name', '$offer_descri', '$offer_discount', '$offer_price', '$offer_image', '$offer_type')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($offer_image_tmp_name, $offer_image_folder);
         $message[] = 'new offer added successfully';
      }else{
         $message[] = 'could not add the offer';
      }
   }

};

if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM offer WHERE id = $id");
   $message[] = 'Delete Successfully';
   header('location:offer_page.php');
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>offer Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
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

   <div class="admin-offer-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new offer</h3>
         <input type="text" placeholder="Enter offer name" name="offer_name" class="box">
         <input type="text" placeholder="Enter the description" name="offer_descri" class="box">
         <input type="number" placeholder="Enter discount" name="offer_discount" class="box">
         <input type="number" placeholder="Enter new price" name="offer_price" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="offer_image" class="box">
         <select name="offer_type" class="box">
            <option value="weekend">Select Weekend or Special Day</option>
            <option value="weekend">Weekend</option>
            <option value="day">Special Day</option>
         </select>
         <input type="submit" class="btn" name="add_offer" value="add offer">
         <a href="/admin/admin/mainadmin_page.php" class="btn">go back!</a>
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM offer");
   
   ?>
   <div class="offer-display">
      <table class="offer-display-table">
         <thead>
         <tr>
            <th>offer image</th>
            <th>offer name</th>
            <th>new price</th>
            <th>offer discount price</th>
            <th>offer description</th>
            <th>offer type</th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td>Rs.<?php echo $row['price']; ?>/-</td>
            <td>Rs.<?php echo $row['discount'] ?>/-</td>
            <td><?php echo $row['descri'] ?></td>
            <td><?php echo $row['offer_type'] ?></td>
            <td>
               <a href="offer_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
               <a href="offer_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>


</body>
</html>