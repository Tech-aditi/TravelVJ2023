

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
       

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="css/navbar.css">

       
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
           
                <!-- <a href="#" class="nav__logo"></a> -->

               
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav__link active-link">
                            <ion-icon name="globe"></ion-icon>
                            <span class="nav__name">Explore</span>
                        </a>
                    </li>
                    
                    <li class="nav__item">
                        <a href="learn.php" class="nav__link active-link">
                            <ion-icon name="book"></ion-icon>
                            <span class="nav__name">Learn</span>
                        </a>
                    </li>

                         <?php  
                  if( !isset($_SESSION))       {
                    session_start();
                }
                if( $_SESSION!=null && $_SESSION['user_id']!=null)  {
           ?>
                    <li class="nav__item">   
                        <a href="addArticleForm.php" class="nav__link active-link">
                            <ion-icon name="add-circle-outline"></ion-icon>
                            <span class="nav__name">Add</span>
                        </a>
                    </li>
            <?php
                } else {
            ?>
                    <li class="nav__item">
                    <a href="login.php" class="nav__link active-link">
                            <ion-icon name="add-circle-outline"></ion-icon>
                            <span class="nav__name">Add</span>
                        </a>
                    </li>
            <?php
                } 
            ?>

                <li class="nav__item">
                        <a href="travel.php" class="nav__link active-link">
                            <ion-icon name="compass"></ion-icon>
                            <span class="nav__name">Travel</span>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="ecom.php" class="nav__link active-link">
                           <ion-icon name="cart-outline"></ion-icon>
                            <span class="nav__name">Shop</span>
                        </a>
                    </li>
                </ul>
            </div>


                <!-- <img src="assets/img/perfil.png" alt="" class="nav__img"> -->
            
        </header>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
        <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
         

        
    </body>
</html>
