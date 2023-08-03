<?php
    @include 'config.php';

    session_start();

    if(isset($_POST['submit']))
    {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']);
        $cpass = md5($_POST['cpassword']);
        $user_type = $_POST['user_type'];

        $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);

            if($row['user_type'] == 'admin'){
                $_SESSION['admin_name'] = $row['name'];
                header('location:mainadmin_page.php');
            }
            elseif($row['user_type'] == 'user'){
                $_SESSION['user_name'] = $row['name'];
                header('location:user_page.php');
            }
        }else{
            $error[] = 'Incorrect Email or Password';
        }
    };
?> 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <link rel="stylesheet" href="style1.css">

</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Login Now</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class ="error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <input type="email" name="email" placeholder="Enter Your Email">
            <input type="password" name="password" placeholder="Enter Your Password">
            <input type="submit" name="submit" value="Login Now" class="form-btn">
        </form>
    </div>
</body>
</html>