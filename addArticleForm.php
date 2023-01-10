<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TravelVJ</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/addArticle.css" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
   
  </head>
  <body>
      <header>   
          <!--  <div w3-include-html="header.html"></div>   -->
          <?php include 'header.php';?>   
    </header>

    

  <!-- section -->
    <section class="main">
         
      <div class="wrapper">
        <div class="left-col">
          <h3>Add Details for your Article</h3>
<br>
          <form action="addArticle.php"  method="POST" validate enctype="multipart/form-data">  
           
          <div class="mb-3"> 
            <label for="bio" class="form-label">Add Article related photo</label>
            <input type="file"   size="50" id="image" name="image" class="form-control" required/>
             (Select Photo in .jpg, .jpeg, .png and .gif format)
          </div>

            
            <div class="mb-3">
              <label for="text" size="200"  class="form-label">Title</label><br>
                <input  size="50"  type="text" placeholder="title"  id="title" class="form-control" name="title" required data-validation-required-message="Please enter the title." />
           </div>
         

            <div class="mb-3">
              <label for="bio" class="form-label">Article Content</label>
                <textarea
              name="content" cols="50" rows="10" maxlength="5000"  class="form-control" id="content" placeholder="content" required data-validation-required-message="Please enter a message."
                id="bio"
                class="form-control"
                cols="30"
                rows="3"></textarea>
            </div>


           <?php  
          $user_id = $_SESSION['user_id'];
         if(isset($user_id))  {
       
      ?>
            <div class="mb-3">
              <input  type="submit" name="register"  value="Post" name="update_profile_btn"
                id="update_profile_btn"
                class="update-profile-btn"
                value="Post"/>
            </div>
      <?php      } 

      else {  ?>
           <div class="mb-3">
               <a href="login.php"  class="update-profile-btn">   Please Login first to add your Article </a>
         </div>
      <?php }  ?>
          
          </form>
        </div>
          
       
      </div>
    
    </section>
     
  <!-- <div w3-include-html="navbar.html"></div> -->
   <?php include 'navbar.php';?>

       <script src="js/w3-include-HTML.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
     <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
        <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
   
          
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
  </body>
</html>
