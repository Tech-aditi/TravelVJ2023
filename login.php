
<?php
$conn = mysqli_connect("127.0.0.1", "u955232666_travelvj", "0536282554aB$", "u955232666_TravelVJ");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
session_start();
if(isset($_SESSION['user_id'])){
     header('location:home.php');
}


if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select = mysqli_query($conn, "SELECT * FROM `userform` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
 $_SESSION['user_name'] =  $row['name'];
      header('location:home.php');
   }
   else{
      $message[] = 'incorrect email or password!';
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
		<form action="" method="post" class="login-email"  enctype="multipart/form-data">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" name="email" placeholder="enter email"  required>
			</div>
			<div class="input-group">
                <input type="password" name="password" placeholder="enter password"  required>
			</div>
			<div class="input-group">
				<button name="submit"  class="btn" value="login now">Login</button>
			</div>
			 <!--<a class="small text-muted" href="forgot_password.php">Forgot password?</a>-->
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>
</html>


      