<?php
    include "php/config.php";
?>

<DOCTYPE html>

<html>

    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/9088cc6401.js" crossorigin="anonymous"></script>


    <!--==Title==================================-->
    <title>

       GreensGate Store

    </title>

    <!--==Stylesheet=============================-->
    <link rel="stylesheet" type="text/css" href="index.css">

    <!--==Fav-icon===============================-->
    <link rel="shortcut icon" href="images/fav-icon.png"/>

    <!--==Using-Font-Awesome=====================-->
    <script src="https://kit.fontawesome.com/5471644867.js" crossorigin="anonymous"></script>

	    
   <link rel="shortcut icon" type="image/jpg" href="C:\Users\hp\Desktop\College\First Semester\Introduction To Web Technologies\Notepad ++ Files\Project\favicon.ico"/>

    </head>

    

    <body>

        <!--==Navigation================================-->
        <nav class="navigation">

            <!--logo-------->
            <a href="#" class="logo">

                <span>GG</span>Store

            </a>

            <!--menu-btn---->
            <input type="checkbox" class="menu-btn" id="menu-btn">

            <label for="menu-btn" class="menu-icon">

                <span class="nav-icon"></span>

            </label>

            <!--menu-------->
            <ul class="menu">

                <li>
                    <a href="index.html" class="active">
                        
                        Home

                    </a>
                
                </li>

                <li>

                    <a href="#category">

                        Categories
                    
                    </a>
                
                </li>

                <li>

                    <a href="#popular-bundle-pack">
                        
                        Packages
                    
                    </a>
                
                </li>

                <li>
                    
                    <a href="Contact Form.html">
                        
                        Contact&nbsp;Us
                    
                    </a>
                
                </li>
				
				<li>
                    
                    <a href="Feedback Form.html">
                        
                        Feedback
                    
                    </a>
                
                </li>
				
				<li>

					<a href="About Us.html">

						About&nbsp;us

					</a>

                </li>
                <li>
                    
                    <a href="Login And Registration.html">
                            
                        Sign&nbsp;up
                        
                    </a>
                    
                </li>

                
                <li>
                    
                    <a href="Login And Registration.html">
                        
                        Login
                    
                    </a>
                
                </li>

				</ul>

            <!--right-nav-(cart-like)-->
            <div class="right-nav">

                <!--cart----->
                <a href="" class="cart">

                    <i class="fas fa-shopping-cart"></i>

                    <span>
                        
                        2
                    
                    </span>

                </a>

            </div>

        </nav>

        <!--nav-end--------------------->
        <!--==Search-banner=======================================-->
        <section id="search-banner">

            <!--bg--------->
            <img alt="bg" class="bg-1" src="https://i.imgur.com/h8pXo1s.png">

            <img alt="bg" class="bg-1_rev" src="https://i.imgur.com/h8pXo1s.png">

            <img alt="bg-2" class="bg-2" src="https://i.imgur.com/2smuQIz.png">

            <!--text------->
            <div class="search-banner-text">

                <h1>
                    
                    Order Your daily Groceries
                
                </h1>

                <strong>
                    
                    #Free Delivery
                
                </strong>

                <!--search-box------>
                <form action="" method="post" class="search-box">

                    <!--icon------>
                    <i class="fas fa-search"></i>

                    <!--input----->
                    <input type="text" id="search_bar" class="search-input" placeholder="Search" name="search" size = "80px" required>

                    <!--btn------->
                    <input type="submit" class="search-btn" value="Search">

                </form>

                <br>

                <h3>

                    <a href = 'Best Deals.html' style = 'color: #40aa54'>

                        Click here to learn about today's best deals

                    </a>

                </h3>

            </div>

        </section>


        <!--search-banner-end--------------->

        <!-- searchbar-result====================================== -->
        <section id="search-result">

            
        </section>
        <!-- searchbar-result-end===================================== -->

        <h2 class = 'sale-heading'>

            New Year Offer Sale is Live For

        </h2>

        <div class="countdown-container">

            <div class="countdown-el days-c">
                <p class="big-text" id="days">0</p>
                <span>Days</span>
            </div>
            <div class="countdown-el hours-c">
                <p class="big-text" id="hours">24</p>
                <span>Hours</span>
            </div>
            <div class="countdown-el mins-c">
                <p class="big-text" id="mins">60</p>
                <span>Min</span>
            </div>
            <div class="countdown-el seconds-c">
                <p class="big-text" id="seconds">60</p>
                <span>Seconds</span>
            </div>
        </div>
        <!--==category=========================================-->
        <section id="category">

        


        </section>
        <!--category-end----------------------------------->
        <!--==Products====================================-->
        <section id="popular-product">
            <!--heading----------->
            <div class="product-heading">
                <h3>Popular Product</h3>
                <span>All</span>
            </div>
            <!--box-container------>
            <div class="product-container" id="product_items">
            </div>
        </section>
        <!--popular-product-end--------------------->
        <!--Popular-bundle-pack===================================-->
        <section id="popular-bundle-pack">
            <!--heading-------------->
            <div class="product-heading">
                <h3>Popular Bundle Pack</h3>
            </div>
            <!--box-container------>
            <div class="product-container">
                <!--box---------->
                <div class="product-box">
                    <img alt="pack" src="https://i.imgur.com/Zm8Xo2j.png">
                    <strong>Big Pack</strong>
                    <span class="quantity">Lemon, Tomato, Potato,+4</span>
                    <span class="price">Rs. 800</span>
                    <!--cart-btn------->
                    <a href="" class="cart-btn">
                        <i class="fas fa-shopping-bag"></i> Add to Cart
                    </a>
                    <!--like-btn------->
                    <a class="like-btn">
                        <i class="far fa-heart"></i>
                    </a>
                </div>
                <!--box---------->
                <div class="product-box">
                    <img alt="apple" src="https://i.imgur.com/vMA9mRm.jpg">
                    <strong>Large Pack</strong>
                    <span class="quantity">Lemon, Tomato, Potato,+2</span>
                    <span class="price">Rs. 900</span>
                    <!--cart-btn------->
                    <a href="" class="cart-btn">
                        <i class="fas fa-shopping-bag"></i> Add to Cart
                    </a>
                    <!--like-btn------->
                    <a class="like-btn">
                        <i class="far fa-heart"></i>
                    </a>
                </div>
                <!--box---------->
                <div class="product-box">
                    <img alt="apple" src="https://i.imgur.com/CeVqxe2.png">
                    <strong>Small Pack</strong>
                    <span class="quantity">Lemon, Tomato, Potato</span>
                    <span class="price">Rs. 500</span>
                    <!--cart-btn------->
                    <a href="" class="cart-btn">
                        <i class="fas fa-shopping-bag"></i> Add to Cart
                    </a>
                    <!--like-btn------->
                    <a class="like-btn">
                        <i class="far fa-heart"></i>
                    </a>
                </div>
                <!--box---------->
                <div class="product-box">
                    <img alt="pack" src="https://i.imgur.com/Zm8Xo2j.png">
                    <strong>Big Pack</strong>
                    <span class="quantity">Lemon, Tomato, Potato,+4</span>
                    <span class="price">Rs. 1100</span>
                    <!--cart-btn------->
                    <a href="" class="cart-btn">
                        <i class="fas fa-shopping-bag"></i> Add to Cart
                    </a>
                    <!--like-btn------->
                    <a class="like-btn">
                        <i class="far fa-heart"></i>
                    </a>
                </div>
                <!--box---------->
                <div class="product-box">
                    <img alt="apple" src="https://i.imgur.com/vMA9mRm.jpg">
                    <strong>Large Pack</strong>
                    <span class="quantity">Lemon, Tomato, Potato,+2</span>
                    <span class="price">Rs. 1000</span>
                    <!--cart-btn------->
                    <a href="" class="cart-btn">
                        <i class="fas fa-shopping-bag"></i> Add to Cart
                    </a>
                    <!--like-btn------->
                    <a class="like-btn">
                        <i class="far fa-heart"></i>
                    </a>
                </div>
                <!--box---------->
                <div class="product-box">
                    <img alt="apple" src="https://i.imgur.com/CeVqxe2.png">
                    <strong>Small Pack</strong>
                    <span class="quantity">Lemon, Tomato, Potato</span>
                    <span class="price">Rs. 600</span>
                    <!--cart-btn------->
                    <a href="" class="cart-btn">
                        <i class="fas fa-shopping-bag"></i> Add to Cart
                    </a>
                    <!--like-btn------->
                    <a class="like-btn">
                        <i class="far fa-heart"></i>
                    </a>
                </div>
            </div>
        </section>
        <!--popular-bundle-pack-end-------------------------------->
        <!--==Clients===============================================-->
        <section id="clients">
            <!--heading---------------->
            <div class="client-heading">
                <h3>OUR PATNER GREENSGATE</h3>
            </div>
            <!--box-container---------->
            <div class="client-box-container">
                <!--box------------->
                <div class="client-box">
                    <!--==profile===-->
                    <div class="client-profile">
                        <!--img--->
                        
                        <div class="profile-text">
                            <strong>Abal Bohara</strong>
                            <span></span>
                        </div>
                    </div>
                    <!--==Rating======-->
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!--==comments===-->
                    <p>GreensGate Store is the best.GreensGate never fails to dissapoint me. Vegetable shopping has become so easy with GreensGate Store.</Str></p>
                </div>
                <!--box------------->
                <div class="client-box">
                    <!--==profile===-->
                    <div class="client-profile">
                        <!--img--->
                        
                        <div class="profile-text">
                            <strong>Durga Ale Magar</strong>
                
                        </div>
                    </div>
                    <!--==Rating======-->
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!--==comments===-->
                    <p>GreensGate Store is just amazing. I can buy all my groceries from a single place. The Vegetables are available at very affordable prices. And, the groceries are delivered at the time slot you choose and prefer.</p>
                </div>
                <!--box------------->
                <div class="client-box">
                    <!--==profile===-->
                    <div class="client-profile">
                        <!--img--->
                        
                        <div class="profile-text">
                            <strong>Sajan Chemjong Limbu</strong>
                            <span></span>
                        </div>
                    </div>
                    <!--==Rating======-->
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <!--==comments===-->
                    <p>At GreensGate Store, you can get fresh fruits and vegetables. And it is only about fruits or vegetables, you can buy organic and fresh item from here.</p>
                </div>
            </div>
        </section>
        <!--client-section-end---------->
     
        
        <!--==Footer=============================================-->
        <footer>
            <div class="footer-container">
               
                <!--links------------------------->
            <div class="footer-links">
                <strong>Product</strong>
                <ul>
                    <li><a href="#">Grocery</a></li>
                    <li><a href="#">Packages</a></li>
                    <li><a href="#">Popular</a></li>
                    <li><a href="#">New</a></li>
                </ul>
            </div>
            <!--links------------------------->
            <div class="footer-links">
                <strong>Category</strong>
                <ul>
                    <li><a href="#">Vegetables</a></li>
                </ul>
            </div>
            <!--links-------------------------->
            <div class="footer-links">
                <strong>Contact</strong>
                <ul>
                    <li><a href="#">Phone :+9779746953539</a></li>
                    <li><a href="#">Email :themailofabal@gmail.com</a></li>
                    <li><a href="#">Cities we serve</a></li>
                </ul>
				<br><p style="color: aliceblue;">Copyright ©2023 | ALL THE THEAM CONTAIN GGStore</p>
            </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src = 'index.js' defer></script>
        <script>
            $(document).ready(()=>{
                function request_search(key){
                    $.ajax({
                        url:"php/load_data.php",
                        type:"POST",
                        data: {search:key,mode:"search"},
                        success:function(data){
                                $("#search-result").html(data);
                        }   
                    });
                }
                function get_items(){
                    $.ajax({
                        url:"php/load_data.php",
                        type:"POST",
                        data: {mode:"items_display"},
                        success:function(data){
                                $("#product_items").html(data);
                        }   
                    });
                }
                get_items();

                $("#search_bar").on("input",function(){
                    var search_for = $("#search_bar").val();
                    if(search_for==""){
                        $("#search-result").html(" ");
                    }else{
                        request_search(search_for);
                    }
                });
            });
        </script>
    </body>
</html>
