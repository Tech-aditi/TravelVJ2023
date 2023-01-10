<?php

$conn = mysqli_connect("127.0.0.1", "u955232666_travelvj", "0536282554aB$", "u955232666_TravelVJ");
//$conn = mysqli_connect("localhost", "root", "", "localtravelvj");         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        session_start();
       // if ($_SESSION['user_id']!=null){
       //   $user_id = $_SESSION['user_id']; 
       // }

    //if(isset($_POST['register'])){
    
      $articleId = mysqli_real_escape_string($conn, $_POST['articleId']);
      $userId = mysqli_real_escape_string($conn, $_POST['userLoggedIn']);
      $userName = mysqli_real_escape_string($conn, $_POST['comment_author']);
      $commentMessage = mysqli_real_escape_string($conn, $_POST['commentMessage']);
      $commentStatus = 'Active';  // TODO: Change it to be updated  dynamic
  
        $insert = mysqli_query($conn, "INSERT INTO `commentforarticle`( articleId, userId, userName, commentMessage, commentStatus) 
                                 VALUES 
                                 ('$articleId', '$userId', '$userName', '$commentMessage', '$commentStatus')" ) or die('query failed');

      if($insert){
          $message[] = 'comment added successfully!';
          header('location:showArticle.php?articleNo='.$articleId);
      }else{
          $message[] = 'Sorry! Unexpected error in adding comment at this moment!';
          header('location:index.php');
      }

   // }

