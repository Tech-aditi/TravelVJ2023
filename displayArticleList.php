<!DOCTYPE html>
<html>
<head>
  <title>Display Articles</title>
    <!-- Custom Style   -->
    <link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/addArticle.css" />

</head>
<body>



<?php
   $conn = mysqli_connect("127.0.0.1", "u955232666_travelvj", "0536282554aB$", "u955232666_TravelVJ");
   //$conn = mysqli_connect("localhost", "root", "", "localtravelvj");
    // Check connection
    if($conn === false){
      die("ERROR: Could not connect. ". mysqli_connect_error());
  } 
  session_start();
  

  if(isset($_GET['userHome'])  ){    
    $user_id = $_SESSION['user_id'];  
      if($user_id!=null){
        $sql = "select * from articleList where UserId=$user_id order by articleNo desc"; 
      }
    }
    else  if(isset($_GET['webHome'])  ){ 
          $sql = "select * from articleList order by articleNo desc"; 
    } else{
      $sql = "select * from articleList order by articleNo desc"; 
    }


  $result = mysqli_query($conn, $sql);  

  //$count = mysqli_num_rows($result);  
  //echo ' count is : '.$count;
//$records = mysqli_query($link,"select * from articleList"); // fetch data from database

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
{
?>

<?php
        if(isset($_GET['userHome'])  ){ 
          $user_id = $_SESSION['user_id'];  
        }
        else  if(isset($_GET['webHome'])  ){ 
          $user_id = $row['UserId'];
        }

       $select = mysqli_query($conn, "SELECT * FROM `userform` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
        
  ?>

<div class="post">
    
    <div class="post-top">
        <div class="dp">
         
          <?php
              if($fetch['image'] == ''){
                  echo '<img src="images/default-avatar.png">';
              }else{
                  echo '<img src="uploaded_img/'.$fetch['image'].'">';
              }
          ?>
        </div>
        <div class="post-info">
            <p class="name"><?php echo $fetch['name']; ?> </p>
            <span class="time"><?php echo $row['dateCreated']; ?></span>
        </div>
        <i class="fas fa-ellipsis-h"></i>
    </div>
    <div class="post-content" >
        
        <a href="showArticle.php?articleNo=<?php echo $row['articleNo']; ?>">
    <p><b><h1 style="font-size:15.9px;"> 
      <?php echo $row['title']; ?>  
    </h1></p>
            </a>
        <br><br>    
<p class="displayImage">
  <a href="showArticle.php?articleNo=<?php echo $row['articleNo']; ?>">  <?php echo '<img src="uploaded_img/'.$row['articlePhoto'].'" >';  ?> </a>
</p>       
    </div>
         <div class="post-bottom">
                    <div class="action">
                        <i class="far fa-thumbs-up"></i>
                        <span>Like</span>
                    </div>
                    <div class="action">
                        <i class="far fa-comment"></i>
                        <span>Comment</span>
                    </div>
      
                 <div class="action">
    <?php    $string = $row['title'];
    $replaced = str_replace(' ', '_', $string);
    //echo $replaced;  ?>
           <a href="whatsapp://send?text=<<https://travelvj.com/showArticle/<?php echo $row['articleNo']; ?>/<?php echo $replaced; ?> >>" data-action="share/whatsapp/share" >
            <i class="fa fa-share"></i>
            <span>Share</span>
            </a>
        </div>
    </div>
</div>



<?php
}
?>


<?php mysqli_close($conn);  // close connection ?>

</body>
</html>