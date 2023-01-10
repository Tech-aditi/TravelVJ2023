<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8636770048871025"
     crossorigin="anonymous"></script>

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="css/ecom.css">

    
</head>
<body>
     <header>   
        <!--     <div w3-include-html="header.html"></div>  -->
             <?php include 'header.php';?>
    </header>

    
    <!--==================== HEADER ====================-->
   

    

    <!--==================== MAIN ====================-->
    <main class="main">
      
       

        <!--==================== FEATURED ====================-->
        <section class="featured section container" id="featured">
            <h2 class="section__title">
                Featured
            </h2>
            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="images/combo.jpeg" alt="" class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">Adventure Kit</h3>
                    <span class="featured__price">Starting from ₹5000</span>
                </div>

                <button class="button featured__button">ADD TO CART</button>
            </article>

            <div class="featured__container grid">
                <article class="featured__card">
                    <span class="featured__tag">Sale</span>

                    <img src="images/Nature.jpg" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Tent</h3>
                        <span class="featured__price">Starting from ₹2000</span>
                    </div>

                    <button class="button featured__button">ADD TO CART</button>
                </article>

               
                <article class="featured__card">
                    <span class="featured__tag">Sale</span>

                    <img src="images/travel cycle.jpg" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title"> Cycle</h3>
                        <span class="featured__price">Starting from ₹10000</span>
                    </div>

                    <button class="button featured__button">ADD TO CART</button>
                </article>
                <article class="featured__card">
                    <span class="featured__tag">Sale</span>

                    <img src="images/swimgear1.jpeg" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Swimming Gears</h3>
                        <span class="featured__price">Starting from ₹500</span>
                    </div>

                    <button class="button featured__button">ADD TO CART</button>
                </article>
                <article class="featured__card">
                    <span class="featured__tag">Sale</span>

                    <img src="images/travelshoe1.jpeg" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Trekking Shoes</h3>
                        <span class="featured__price">Starting from ₹1000</span>
                    </div>

                    <button class="button featured__button">ADD TO CART</button>
                </article>
            </div>
        </section>

        <!--==================== STORY ====================-->
        

        <!--==================== PRODUCTS ====================-->
        <section class="products section container" id="products">
            <h2 class="section__title">
                Products
            </h2>

            <div class="products__container grid">
                <article class="products__card">
                    <img src="images/travelshoe.jpeg" alt="" class="products__img">

                    <h3 class="products__title">Trekking Shoes</h3>
                    <!-- <span class="products__price">$1500</span> -->

                    <button class="products__button">
                        <i class='bx bx-shopping-bag'></i>
                    </button>
                </article>

                <article class="products__card">
                    <img src="images/cycle1.jpeg" alt="" class="products__img">

                    <h3 class="products__title">Cycle</h3>
                    <!-- <span class="products__price">$1350</span> -->

                    <button class="products__button">
                        <i class='bx bx-shopping-bag'></i>
                    </button>
                </article>

                <article class="products__card">
                    <img src="images/swim gears.jpeg" alt="" class="products__img">

                    <h3 class="products__title">Swimming Gears</h3>
                    <!-- <span class="products__price">$870</span> -->

                    <button class="products__button">
                        <i class='bx bx-shopping-bag'></i>
                    </button>
                </article>
                <article class="products__card">
                    <img src="images/Camping (1).jpg" alt="" class="products__img">

                    <h3 class="products__title">Tent</h3>
                    <!-- <span class="products__price">$870</span> -->

                    <button class="products__button">
                        <i class='bx bx-shopping-bag'></i>
                    </button>
                </article>

               

                
            </div>
        </section>

        <!--==================== TESTIMONIAL ====================-->
       
        <!--==================== NEW ====================-->
        <section class="new section container" id="new">
            <h2 class="section__title">
                New Arrivals
            </h2>
            
            <article class="products__card">
                <img src="images/bag.jpeg" alt="" class="products__img">

                <h3 class="products__title">Trekking Bag</h3>
                <!-- <span class="products__price">$650</span> -->

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>
            
           
            
            <article class="products__card">
                <img src="images/swimgear2.jpeg" alt="" class="products__img">

                <h3 class="products__title">Swimming Gears</h3>
                <!-- <span class="products__price">$650</span> -->

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>
            <article class="products__card">
                <img src="images/cycle2.jpeg" alt="" class="products__img">

                <h3 class="products__title">Cycle</h3>
                <!-- <span class="products__price">$650</span> -->

                <button class="products__button">
                    <i class='bx bx-shopping-bag'></i>
                </button>
            </article>
        
        </section>
        
       
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list_footer">
                <li class="nav__item">
                    <a href="index.php" class="nav__link_footer active-link">
                        <ion-icon name="globe"></ion-icon>
                        <span class="nav__name">Explore</span>
                    </a>
                </li>
                
                <li class="nav__item">
                    <a href="learn.php" class="nav__link_footer active-link">
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
                        <a href="addArticleForm.php" class="nav__link_footer active-link">
                            <ion-icon name="add-circle-outline"></ion-icon>
                            <span class="nav__name">Add</span>
                        </a>
                    </li>
            <?php
                } else {
            ?>
                    <li class="nav__item">
                    <a href="login.php" class="nav__link_footer active-link">
                            <ion-icon name="add-circle-outline"></ion-icon>
                            <span class="nav__name">Add</span>
                        </a>
                    </li>
            <?php
                } 
            ?>

                <li class="nav__item">
                    <a href="travel.php" class="nav__link_footer active-link">
                        <ion-icon name="compass"></ion-icon>
                        <span class="nav__name">Travel</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="ecom.php" class="nav__link_footer active-link">
                       <ion-icon name="cart-outline"></ion-icon>
                        <span class="nav__name">Shop</span>
                    </a>
                </li>

            </ul>
        </div>   
        
   <script src="js/w3-include-HTML.js"></script>
         <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
        <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
   
          
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
 
 
   
    
  


       
    
    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="js/ecom.js"></script>
</body>
</html>