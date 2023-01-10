<!DOCTYPE html>
<br lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/explore.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="../static/home.css"> -->
   
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

	<link rel="stylesheet" href="https://www.flaticon.com/free-icons/travel">
  

</head>
<body>

   <!-- <div id="menu-bar" class="fas fa-bars"></div> -->
    <header class="head">
     <a href="#" class="logo"><img src="images/travelvj.png" width="100%" height="100%"  >
   </a>
  <nav class="navbar">
        <a href="index.php">Explore</a> 

        <a href="learn.php">Learn</a>

        <a href="travel.php">Travel</a>

        <a href="ecom.php">Shop</a>

   </nav>
<!--               <div class="icons" style="svg[data-icon='line-md:alert'] {-->
<!--   font-size: 48px;-->
<!--   color: #ba3329;-->
<!--}">-->
       
<!--               <a href="https://facebook.com/groups/rajatshukla/"  target="_blank"><iconify-icon icon="dashicons:facebook-alt" style="color: black;" width="20" height="20"></iconify-icon></a>-->
<!--               <a href="https://instagram.com/rajatshukla___"  target="_blank"><iconify-icon icon="akar-icons:instagram-fill" style="color: black;padding:3px;" width="20" height="20"></iconify-icon></a>-->
<!--               <a href="https://www.youtube.com/channel/UCX7cUaY4sDJdY56gFje0iWA " target="_blank"><iconify-icon icon="akar-icons:youtube-fill" style="color: black; padding:3px;" width="20" height="20"></iconify-icon></a>-->
<!--                <a href="https://www.strava.com/athletes/103689739"  target="_blank"><iconify-icon icon="ion:bicycle-sharp" style="color: black;padding:3px;" width="20" height="20"></iconify-icon></a>-->
<!--                <a href="https://www.couchsurfing.com/users/2013768801"  target="_blank"><iconify-icon icon="tabler:brand-couchsurfing" style="color: black;padding:3px;" width="20" height="20"></iconify-icon></a>-->
<!--                  <a href="https://www.linkedin.com/mwlite/in/rajat-shukla-023256157 "  target="_blank"><iconify-icon icon="akar-icons:linkedin-box-fill" style="color: black;padding:3px;" width="20" height="20"></iconify-icon></a>-->
                 
<!--       </div>-->
       
    <ul><li>
       <div class="navbar1"> <a href="login.php"> <iconify-icon icon="iconoir:profile-circled" style="color: black;" width="20" height="23"></iconify-icon></a></div>
      </li>
      <?php  
     if( !isset($_SESSION))       {
      session_start();
    }
      if( $_SESSION!=null && $_SESSION['user_name'])  {
           $string = $_SESSION['user_name'];
      }
      else {
        $string = 'Guest';
      }
    ?>
      <li>   Hello <?php echo $string;  ?>  </li>
    </ul>
    </ul>


    </header>
    
</body>