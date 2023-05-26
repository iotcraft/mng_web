<?php

include 'configy.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'uživatel už existuje'; 
   }else{
      if($pass != $cpass){
         $message[] = 'hesla se neschodují';
      }elseif($image_size > 2000000){
         $message[] = 'obrázek je příliš velký';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');

         if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registrace úsěšná';
            header('location:login.php');
         }else{
            $message[] = 'registrace neúspěšná';
         }
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="bomba.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
      <input type="text" name="name" placeholder="zadejte uživatelské jméno" class="box" required>
      <input type="email" name="email" placeholder="zadej email" class="box" required>
      <input type="password" name="password" placeholder="zadej heslo" class="box" required>
      <input type="password" name="cpassword" placeholder="potvrď heslo" class="box" required>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
      <input type="submit" name="submit" value="zaregistruj se" class="btn">
      <p>už máš účet? <a href="login.php">login now</a></p>
      <p>nechceš se přihlašovat? <a href="main_boot_guest.php">Pokračovat jako guest</a></p>
   </form>

</div>

</body>
</html>