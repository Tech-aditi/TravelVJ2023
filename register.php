<?php



$conn = mysqli_connect("127.0.0.1", "u955232666_travelvj", "0536282554aB$", "u955232666_TravelVJ");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
       

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder ='uploaded_img/'.$image;

   $select = mysqli_query($conn, "SELECT * FROM `userform` WHERE email = '$email' AND password = '$pass'");

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist'; 
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }elseif($image_size > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $insert = mysqli_query($conn, "INSERT INTO `userform`(name,email,password,image) VALUES('$name','$email','$pass','$image')") or die('query failed');

           if($insert){
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            // header('location:login.php');
         }else{
            $message[] = 'registeration failed!';
         }
      }
   }

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="stylesheet" type="text/css" href="css/register.css">

	<title>TravelVJ</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email" enctype="multipart/form-data">
            <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
            
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
                <input type="text" name="name" placeholder="enter username"  required>
			</div>
			<div class="input-group">
                <input type="email" name="email" placeholder="enter email"  required>

			</div>
			<div class="input-group">
                <input type="password" name="password" placeholder="enter password"  required>
            </div>
            <div class="input-group">
                <input type="password" name="cpassword" placeholder="confirm password"  required>
			</div>
            <div class="input-group">

               <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>