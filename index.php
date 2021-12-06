<?php

include_once (dirname(__FILE__)) . '/./settings/core.php';

if (isset($_SESSION['user_id']) && isset($_SESSION['user_role'])) {
    
    // page if admin logs in
    if ($_SESSION['user_role'] == '1') {
        header('location: ./admin/admin-main.php');
    } 
    
    // if normal user logs in
    
    else if ($_SESSION['user_role'] == '2') {

        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="stylesheet" href="./css/style.css" />
            <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
            <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
            <title>Myz_pejay’s Collections | Quality and Affordable Women's clothing</title>
        </head>

        <body>
            <div class="hero-container">
                <div class="navbar">
                    <!-- navigation bar -->
                    <div class="nav-container">
                        <div class="brand">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="./assets/logo.png" alt="">
                                </a>
                            </div>

                            <nav>
                                <ul class="nav-links">
                                    <li><a href="./view/shop.php" class="link">Shop</a></li>
                                    <li><a href="" class="link">Dresses</a></li>
                                    <li><a href="" class="link">Accessories</a></li>
                                    <li><a href="" class="link">Jeans</a></li>
                                    <li><a href="" class="link">Shoes</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- wishlist, search, account, cart -->
                        <div class="us_actions">
                            <a href="" class="icon">
                                <img src="./assets/icons/bi_heart.svg" alt="" />
                            </a>
                            <div class="searchBar">
                                <form action="">
                                    <div class="form-control">
                                        <input type="text" placeholder="Search for items..." />
                                    </div>
                                </form>
                            </div>
                            <a href="./view/cart.php" class="icon">
                                <img src="./assets/icons/ic_baseline-shopping-basket.svg" alt="" />
                            </a>
                            <!-- dropdown -->
                            <div class="dropdown">
                                <div class="icon">
                                    <img src="./assets/icons/codicon_account.svg" class="dropbtn" alt="" />
                                </div>
                                <div class="dropdown-content">
                                    <a href="./view/userprofile/user-main.php">Profile</a>
                                    <a href="./login/logout.php">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- intro section -->
                <section class="hero">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Swiper Text -->
                        <div class="intro-text">
                            <p>Myz_pejay’s collections</p>
                            <h1>Top notch women’s <span>clothing</span></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida non facilisis est amet, venenatis vulputate odio tincidunt ut. Vitae ut nullam quis non.</p>
                            <button onclick="document.location.href='./view/shop.php'">Shop Now</button>
                        </div>
                        <!-- Additional required wrapper -->
                        <!-- hellow -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="./assets/backgrounds/seth-doyle-unxNhCRr8iU-unsplash.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/backgrounds/alyssa-strohmann-TS--uNw-JqE-unsplash.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/backgrounds/s-o-c-i-a-l-c-u-t-aXJdmnxauwY-unsplash.jpg" alt="">

                            </div>
                        </div>
                    </div>

                </section>
            </div>

            <main>
                <!-- value proposition section -->
                <section class="vfb">
                    <div class="content">
                        <div class="WYS">
                            <div class="left">
                                <h1>Why you should shop with us?</h1>
                            </div>
                            <div class="right">
                                <div class="vf_plaq">
                                    <div class="icon">
                                        <img src="./assets/icons/carbon_delivery-parcel.svg" alt="">
                                    </div>
                                    <strong>Free Delivery</strong>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, distinctio.</p>
                                </div>
                                <div class="vf_plaq">
                                    <div class="icon">
                                        <img src="./assets/icons/bi_cloud-download-fill.svg" alt="">
                                    </div>
                                    <strong>24/7 Hour Support</strong>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, distinctio.</p>
                                </div>
                                <div class="vf_plaq">
                                    <div class="icon">
                                        <img src="./assets/icons/fluent_money-hand-20-filled.svg" alt="">
                                    </div>
                                    <strong>100% Money back</strong>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, distinctio.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- best sellers -->
                <section class="bestSellers">
                    <div class="content">
                        <div class="heading">
                            <h1>Best Sellers</h1>
                            <button>
                                <img src="./assets/icons/eva_arrow-down-outline.svg" alt="">
                            </button>
                        </div>

                        <!-- product cards -->
                        <div class="productGrid">
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </section>


                <!-- featured -->
                <section class="bestSellers featured">
                    <div class="content">
                        <div class="heading">
                            <h1>Featured Products</h1>
                            <button>
                                <img src="./assets/icons/eva_arrow-down-outline.svg" alt="">
                            </button>
                        </div>

                        <!-- product cards -->
                        <div class="productGrid">
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>

                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                            <div class="product_card">
                                <div class="imgSpace">
                                    <!-- <img src="" alt=""> -->
                                </div>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat">CATEGORY</p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3>Lorem ipsum dolor </h3>
                                        <p class="price">$65.00</p>
                                    </div>
                                    <div class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </div>
                                </div>

                                <!-- favorites -->
                                <div class="wish">
                                    <img src="./assets/icons/bi_heart-1.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- testimonials -->
                <section class="testimonials">
                    <div class="content">
                        <div class="heading">
                            <p>PEOPLE LOVE SHOPPING WITH US!</p>
                        </div>

                        <!-- testimonials -->

                        <div class="t_swiper">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="name">
                                        <div class="pp">

                                        </div>
                                        <p>Lorem ipsum dolor</p>
                                    </div>
                                    <p>Awesome work!</p>
                                    <p class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat placerat aliquam in nunc, id fermentum arcu a. Ut et.</p>
                                    <div class="ratings">
                                        <img src="./assets/icons/ratings.svg" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="name">
                                        <div class="pp">

                                        </div>
                                        <p>Lorem ipsum dolor</p>
                                    </div>
                                    <p>Awesome work!</p>
                                    <p class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat placerat aliquam in nunc, id fermentum arcu a. Ut et.</p>
                                    <div class="ratings">
                                        <img src="./assets/icons/ratings.svg" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="name">
                                        <div class="pp">

                                        </div>
                                        <p>Lorem ipsum dolor</p>
                                    </div>
                                    <p>Awesome work!</p>
                                    <p class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat placerat aliquam in nunc, id fermentum arcu a. Ut et.</p>
                                    <div class="ratings">
                                        <img src="./assets/icons/ratings.svg" alt="">
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="name">
                                        <div class="pp">

                                        </div>
                                        <p>Lorem ipsum dolor</p>
                                    </div>
                                    <p>Awesome work!</p>
                                    <p class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat placerat aliquam in nunc, id fermentum arcu a. Ut et.</p>
                                    <div class="ratings">
                                        <img src="./assets/icons/ratings.svg" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>

            </main>

            <!-- footer -->
            <footer>
                <div class="content">
                    <div class="compInf">
                        <div class="brandLogo">
                            <img src="./assets/logo.png" alt="">
                            <p class="mail">codeXtechnologies@hkUK.co</p>
                            <div class="socials">
                                <a href="" class="sc">
                                    <img src="./assets/icons/Instagram.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="f_links">
                        <div class="link_item">
                            <p class="head">ACCOUNT</p>
                            <div class="links">
                                <a href="http://">Orders & Returns</a>
                                <a href="http://">Feedback</a>
                                <a href="http://"></a>
                                <a href="http://">Account Settings</a>
                            </div>
                        </div>

                        <div class="link_item">
                            <p class="head">HELP</p>
                            <div class="links">
                                <a href="http://">Help Center</a>
                                <a href="http://">Contact Customer Care</a>
                                <a href="http://">Shipping Information</a>
                                <a href="http://">Return Policy</a>
                            </div>
                        </div>

                        <div class="link_item">
                            <p class="head">COMPANY INFORMATION</p>
                            <div class="links">
                                <a href="http://">About CodeX</a>
                                <a href="http://">Affiliate Program</a>
                                <a href="http://">Influencer Program</a>
                                <a href="http://">Advertisement Program</a>
                            </div>
                        </div>
                    </div>
                </div>

            </footer>
            <!-- copyright -->
            <div class="cp_container">
                <hr>
                <div class="cp">
                    &copy;
                    <p>Copyright 2021 CodeX All rights reserved</p>
                </div>
            </div>


            <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
            <script src="./js/heroCarousel.js"></script>
        </body>

        </html>
        <?php
    }

    // if user is not logged in
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./css/style.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
        <title>Myz_pejay’s Collections | Quality and Affordable Women's clothing</title>
    </head>

    <body>
        <div class="hero-container">
            <div class="navbar">
                <!-- navigation bar -->
                <div class="nav-container">
                    <div class="brand">
                        <div class="logo">
                            <a href="index.php">
                                <img src="./assets/logo.png" alt="">
                            </a>
                        </div>

                        <nav>
                            <ul class="nav-links">
                                <li><a href="./view/shop.php" class="link">Shop</a></li>
                                <li><a href="" class="link">Dresses</a></li>
                                <li><a href="" class="link">Accessories</a></li>
                                <li><a href="" class="link">Jeans</a></li>
                                <li><a href="" class="link">Shoes</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- wishlist, search, account, cart -->
                    <div class="us_actions">
                        <a href="" class="icon">
                            <img src="./assets/icons/bi_heart.svg" alt="" />
                        </a>
                        <div class="searchBar">
                            <form action="">
                                <div class="form-control">
                                    <input type="text" placeholder="Search for items..." />
                                </div>
                            </form>
                        </div>
                        <a href="./view/cart.php" class="icon">
                            <img src="./assets/icons/ic_baseline-shopping-basket.svg" alt="" />
                        </a>
                        <!-- dropdown -->
                        <div class="dropdown">
                            <div class="icon">
                                <img src="./assets/icons/codicon_account.svg" class="dropbtn" alt="" />
                            </div>
                            <div class="dropdown-content">
                                <a href="./login/login.php">Login</a>
                                <a href="./login/register.php">Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- intro section -->
            <section class="hero">
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Swiper Text -->
                    <div class="intro-text">
                        <p>Myz_pejay’s collections</p>
                        <h1>Top notch women’s <span>clothing</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Gravida non facilisis est amet, venenatis vulputate odio tincidunt ut. Vitae ut nullam quis non.</p>
                        <button onclick="document.location.href='./view/shop.php'">Shop Now</button>
                    </div>
                    <!-- Additional required wrapper -->
                    <!-- hellow -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img src="./assets/backgrounds/seth-doyle-unxNhCRr8iU-unsplash.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/backgrounds/alyssa-strohmann-TS--uNw-JqE-unsplash.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/backgrounds/s-o-c-i-a-l-c-u-t-aXJdmnxauwY-unsplash.jpg" alt="">

                        </div>
                    </div>
                </div>

            </section>
        </div>

        <main>
            <!-- value proposition section -->
            <section class="vfb">
                <div class="content">
                    <div class="WYS">
                        <div class="left">
                            <h1>Why you should shop with us?</h1>
                        </div>
                        <div class="right">
                            <div class="vf_plaq">
                                <div class="icon">
                                    <img src="./assets/icons/carbon_delivery-parcel.svg" alt="">
                                </div>
                                <strong>Free Delivery</strong>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, distinctio.</p>
                            </div>
                            <div class="vf_plaq">
                                <div class="icon">
                                    <img src="./assets/icons/bi_cloud-download-fill.svg" alt="">
                                </div>
                                <strong>24/7 Hour Support</strong>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, distinctio.</p>
                            </div>
                            <div class="vf_plaq">
                                <div class="icon">
                                    <img src="./assets/icons/fluent_money-hand-20-filled.svg" alt="">
                                </div>
                                <strong>100% Money back</strong>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas, distinctio.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- best sellers -->
            <section class="bestSellers">
                <div class="content">
                    <div class="heading">
                        <h1>Best Sellers</h1>
                        <button>
                            <img src="./assets/icons/eva_arrow-down-outline.svg" alt="">
                        </button>
                    </div>

                    <!-- product cards -->
                    <div class="productGrid">
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <!-- featured -->
            <section class="bestSellers featured">
                <div class="content">
                    <div class="heading">
                        <h1>Featured Products</h1>
                        <button>
                            <img src="./assets/icons/eva_arrow-down-outline.svg" alt="">
                        </button>
                    </div>

                    <!-- product cards -->
                    <div class="productGrid">
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>

                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                        <div class="product_card">
                            <div class="imgSpace">
                                <!-- <img src="" alt=""> -->
                            </div>
                            <div class="p_details">
                                <div class="dets">
                                    <div class="top">
                                        <p class="cat">CATEGORY</p>
                                        <img src="./assets/icons/ratings.svg" width="100" alt="">
                                    </div>
                                    <h3>Lorem ipsum dolor </h3>
                                    <p class="price">$65.00</p>
                                </div>
                                <div class="cartIcon">
                                    <button>
                                        <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                    </button>
                                </div>
                            </div>

                            <!-- favorites -->
                            <div class="wish">
                                <img src="./assets/icons/bi_heart-1.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- testimonials -->
            <section class="testimonials">
                <div class="content">
                    <div class="heading">
                        <p>PEOPLE LOVE SHOPPING WITH US!</p>
                    </div>

                    <!-- testimonials -->

                    <div class="t_swiper">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class="name">
                                    <div class="pp">

                                    </div>
                                    <p>Lorem ipsum dolor</p>
                                </div>
                                <p>Awesome work!</p>
                                <p class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat placerat aliquam in nunc, id fermentum arcu a. Ut et.</p>
                                <div class="ratings">
                                    <img src="./assets/icons/ratings.svg" alt="">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="name">
                                    <div class="pp">

                                    </div>
                                    <p>Lorem ipsum dolor</p>
                                </div>
                                <p>Awesome work!</p>
                                <p class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat placerat aliquam in nunc, id fermentum arcu a. Ut et.</p>
                                <div class="ratings">
                                    <img src="./assets/icons/ratings.svg" alt="">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="name">
                                    <div class="pp">

                                    </div>
                                    <p>Lorem ipsum dolor</p>
                                </div>
                                <p>Awesome work!</p>
                                <p class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat placerat aliquam in nunc, id fermentum arcu a. Ut et.</p>
                                <div class="ratings">
                                    <img src="./assets/icons/ratings.svg" alt="">
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="name">
                                    <div class="pp">

                                    </div>
                                    <p>Lorem ipsum dolor</p>
                                </div>
                                <p>Awesome work!</p>
                                <p class="comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Consequat placerat aliquam in nunc, id fermentum arcu a. Ut et.</p>
                                <div class="ratings">
                                    <img src="./assets/icons/ratings.svg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </main>

        <!-- footer -->
        <footer>
            <div class="content">
                <div class="compInf">
                    <div class="brandLogo">
                        <img src="./assets/logo.png" alt="">
                        <p class="mail">codeXtechnologies@hkUK.co</p>
                        <div class="socials">
                            <a href="" class="sc">
                                <img src="./assets/icons/Instagram.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="f_links">
                    <div class="link_item">
                        <p class="head">ACCOUNT</p>
                        <div class="links">
                            <a href="http://">Orders & Returns</a>
                            <a href="http://">Feedback</a>
                            <a href="http://"></a>
                            <a href="http://">Account Settings</a>
                        </div>
                    </div>

                    <div class="link_item">
                        <p class="head">HELP</p>
                        <div class="links">
                            <a href="http://">Help Center</a>
                            <a href="http://">Contact Customer Care</a>
                            <a href="http://">Shipping Information</a>
                            <a href="http://">Return Policy</a>
                        </div>
                    </div>

                    <div class="link_item">
                        <p class="head">COMPANY INFORMATION</p>
                        <div class="links">
                            <a href="http://">About CodeX</a>
                            <a href="http://">Affiliate Program</a>
                            <a href="http://">Influencer Program</a>
                            <a href="http://">Advertisement Program</a>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- copyright -->
        <div class="cp_container">
            <hr>
            <div class="cp">
                &copy;
                <p>Copyright 2021 CodeX All rights reserved</p>
            </div>
        </div>


        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="./js/heroCarousel.js"></script>
    </body>

    </html>
    <?php    
}
