<?php



$conn = mysqli_connect("127.0.0.1", "u955232666_travelvj", "0536282554aB$", "u955232666_TravelVJ");
//$conn = mysqli_connect("localhost", "root", "", "localtravelvj");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
       
session_start();
 
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])  ){
   
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelVJ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
     <link rel="stylesheet" href="css/profilepage.css">
</head>

<body>
   
    <header>   
          <!--  <div w3-include-html="header.html"></div>   -->
          <?php include 'header.php';?>   
    </header>

    <div class="whatsapp-btn-container">
      <a class="whatsapp-btn" href="https://wa.me/918655777737"><i class="fab fa-whatsapp"></i></a>
      <span>Contact Us</span>
  </div>
	<br><br>
    <body>

        <div class="container">
    
            <div class="profile">
                
    
                <div class="profile-image">
    
 <?php
         $select = mysqli_query($conn, "SELECT * FROM `userform` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
    
                </div>
    
                <div class="profile-user-settings">
                     <h3 class="profile-user-name"><?php echo $fetch['name']; ?></h3>
                    
                   
                    <!--<button  href='update_profile.php' class="btn profile-edit-btn">Edit Profile</button>-->
                   
                     <a href="update_profile.php" class="btn profile-edit-btn" style="text-decoration: none;">edit profile</a>
                      <a href="home.php?logout=<?php echo $user_id; ?>" style="text-decoration: none;" class="btn profile-edit-btn">logout</a>
                    <!--<button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>-->
    
                </div>
    
                <div class="profile-stats">
    
                    <!-- <ul>
                        <li><span class="profile-stat-count">164</span> posts</li>
                        <li><span class="profile-stat-count">188</span> followers</li>
                        <li><span class="profile-stat-count">206</span> following</li>
                    </ul> -->
    
                </div>
    
                <div class="profile-bio">
    
                    <p><span class="profile-real-name"><?php echo $fetch['name']; ?></span>&nbsp;Welcome to TravelVJ📷✈️🏕️</p>
    
                </div>
    
            </div>
            <!-- End of profile section -->
    
        </div>
        <!-- End of container -->
       <a  href='addArticleForm.php' class="btn profile-edit-btn">Add Your Article</a>
        <br><br><br>
        
        <h2> Your Articles  </h2>
        <br><br>
            <iframe src="displayArticleList.php?userHome" width="100%" height="500px">  </iframe>
    
    </body> 
     <!-- <div w3-include-html="navbar.html"></div> -->
   <?php include 'navbar.php'; ?>
    
 <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
        <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
   
          
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
   <script src="js/w3-include-HTML.js"></script>
    
    
    <!--<main>-->
    
    <!--    <div class="container">-->
    
    <!--        <div class="gallery">-->
    
    <!--            <div class="gallery-item" tabindex="0">-->
    
    <!--                <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop" class="gallery-image" alt="">-->
    
    <!--                <div class="gallery-item-info">-->
    
    <!--                    <ul>-->
    <!--                        <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>-->
    <!--                        <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>-->
    <!--                    </ul>-->
    
    <!--                </div>-->
    
    <!--            </div>-->
    
               
    
    <!--            <div class="gallery-item" tabindex="0">-->
    
    <!--                <img src="https://images.unsplash.com/photo-1426604966848-d7adac402bff?w=500&h=500&fit=crop" class="gallery-image" alt="">-->
    
    <!--                <div class="gallery-item-type">-->
    
    <!--                    <span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>-->
    
    <!--                </div>-->
    
    <!--                <div class="gallery-item-info">-->
    
    <!--                    <ul>-->
    <!--                        <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 42</li>-->
    <!--                        <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>-->
    <!--                    </ul>-->
    
    <!--                </div>-->
    
    <!--            </div>-->
    
              
    
    <!--            <div class="gallery-item" tabindex="0">-->
    
    <!--                <img src="https://images.unsplash.com/photo-1498471731312-b6d2b8280c61?w=500&h=500&fit=crop" class="gallery-image" alt="">-->
    
    <!--                <div class="gallery-item-type">-->
    
    <!--                    <span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>-->
    
    <!--                </div>-->
    
                 