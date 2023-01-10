<?php

$conn = mysqli_connect("127.0.0.1", "u955232666_travelvj", "0536282554aB$", "u955232666_TravelVJ");
//$conn = mysqli_connect("localhost", "root", "", "localtravelvj");         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         if( !isset($_SESSION))      {
            session_start();
        }
        
        if ($_SESSION['user_id']!=null){
          $user_id = $_SESSION['user_id']; 
        }
        
if(isset($_POST['register'])){

   $title = mysqli_real_escape_string($conn, $_POST['title']);
   $content = mysqli_real_escape_string($conn, $_POST['content']);
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   if($image_size > 2000000){
        $message[] = 'image size is too large!';
    }else{
        echo $title;
      
        $insert = mysqli_query($conn, "INSERT INTO `articleList`(title, content, articlephoto, UserId) VALUES ('$title', '$content', '$image', '$user_id')" ) or die('query failed');

        if($insert){
        move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'registered successfully!';
            header('location:home.php');
        }else{
            $message[] = 'registeration failed!';
            header('location:addArticle.html');
        }
    }

}

