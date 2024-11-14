<html>
<head>
<title>HUNGRY.COM</title>
<?php 
session_start();


?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="Home.png">
<link rel="stylesheet" href="Drop.css">

</head>

<body>
<div class="drop">
<div class="logo"><h1>Hun<b>Gry</b></h1></div>
<div class="topnav ">
    <ul>
        <li><a href="HOME.php">HOME</a></li>
        <!-- <li><a href="#">Service</a></li> -->
        <li><a href="homecooks.html">Home Cooks</a></li>
        <!-- <li><a href="#">Menu</a></li> -->     
        <li><a href="menu.php">Menu</a></li>
        <li><a href="aboutus.html">Our Story</a></li>
        <li><a href="developer.html">Developers</a></li>

    </ul>
</div>
    
    <div>
        <?php 
        $count=0;
        if(isset($_SESSION['cart']))
        {
            $count=count($_SESSION['cart']);
        }
        ?>
        <a href="cart.php" class="btn ">My cart(<?php echo $count; ?>)</a>
    </div>
</div>

<div class="content">
<div class="contentleft">
    <div class="info"> 
            <h1><b></b>Order Your best food<br>from us</b></h1>
            <p>
                Food is symbolic of love when words. Are inadequate
                To eat a necessity, but to eat intelligently is an art.
                Eating good food
                with good friends and family.
                Welcome to our HUNGRY</p>

    </div>
    <br>
    <button class="btn">Search More</button>

</div>
<div class="image">
    <img src="1.png" alt="">
</div>
</div>

<!-- Map -->


<!-- filter form section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading"> our <span>Popular Foods</span> </h1><br><br><br>

    <div class="box-container">

         <div class="box" data-aos="fade-up">
                     <form action="manage_cart.php" method="POST">
            <div class="image">
                <img src="burger.jpg" >
                <h3> <i class="fas fa-utensils"></i> Burger </h3>
            </div>
            <div class="content">
                <div class="price"> 100 <span>350.99</span> </div>
                <p> Cheesy Burger
                    2.8/5 (14) Asian Seafood Fish Rice Dishes Bangladeshi<br> $ Tk 3 Service Fee $ </p>
                <button type="submit" name="Add" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="item_name" value="burger 1">
                <input type="hidden" name="item_price" value="100">
                
            </div>
                    </form>
        </div>

                <!-- item2 -->

        <div class="box" data-aos="fade-up">
                     <form action="manage_cart.php" method="POST">
            <div class="image">
                <img src="fajita.jpg" >
                <h3> <i class="fas fa-utensils"></i> POP </h3>
            </div>
            <div class="content">
                <div class="price"> 100 <span>350.99</span> </div>
                <p>Cheesy Fazita
                    2.8/5 (14) Asian Seafood Fish Rice Dishes Bangladeshi<br> $ Tk 3 Service Fee $</p>
                <button type="submit" name="Add" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="item_name" value="Fazita">
                <input type="hidden" name="item_price" value="190">
                
            </div>
                    </form>
        </div>

        <!-- item3 -->
        <div class="box" data-aos="fade-up">
                     <form action="manage_cart.php" method="POST">
            <div class="image">
                <img src="dosa.png" >
                <h3> <i class="fas fa-utensils"></i>Dosa </h3>
            </div>
            <div class="content">
                <div class="price"> 200 <span>350.99</span> </div>
                <p>Desi Dosa
                    2.8/5 (14) Asian Seafood Fish Rice Dishes Bangladeshi<br> $ Tk 3 Service Fee $</p>
                <button type="submit" name="Add" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="item_name" value="Desi Dosa">
                <input type="hidden" name="item_price" value="200">
                
            </div>
                    </form>
        </div>


        <!-- item 4 -->
<div class="box" data-aos="fade-up">
                     <form action="manage_cart.php" method="POST">
            <div class="image">
                <img src="biriyani.jpg" >
                <h3> <i class="fas fa-utensils"></i> Biriyani </h3>
            </div>
            <div class="content">
                <div class="price"> 150 <span>200</span> </div>
                <p> Chicken Biriyani
                    2.8/5 (14) Asian Seafood Fish Rice Dishes Bangladeshi<br> $ Tk 3 Service Fee $</p>
                <button type="submit" name="Add" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="item_name" value="Biriyani">
                <input type="hidden" name="item_price" value="150">
                
            </div>
                    </form>
        </div>
        <!-- item 4 -->
        <!-- <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="biryani.jpg" alt="">
                <h3> <i class="fas fa-utensils"></i> Biriyani </h3>
            </div>
            <div class="content">
                <div class="price"> 210/- <span>280.99/- </span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> Order now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="pasta.jpg" alt="">
                <h3> <i class="fas fa-utensils">Pasta</i>  </h3>
            </div>
            <div class="content">
                <div class="price"> 280/- <span>350.99/-</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> Order now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="pizza.jpg" alt="">
                <h3> <i class="fas fa-utensils"></i> Pizza </h3>
            </div>
            <div class="content">
                <div class="price"> 300/- <span>350.99/-</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="payment.html" class="btn"> Order now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="default-sweets-shop-4.webp" alt="">
                <h3> <i class="fas fa-utensils"></i> Sweet </h3>
            </div>
            <div class="content">
                <div class="price"> 250 /-<span>350.99/-</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> Order now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="cup_cake.jpg" alt="">
                <h3> <i class="fas fa-utensils"></i> Cup Cake</h3>
            </div>
            <div class="content">
                <div class="price"> 200/- <span>350.99 /-</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> Order now</a>
            </div>
        </div> -->

    </div>
<br><br><br>
</section>


<!-- order section starts  -->

<!-- <section class="order" id="order">

    <div class="heading">
       <span>order now</span>
       <h3>Fast home delivery</h3>
    </div>
 
    <form action="">
       <div class="box-container">
          <div class="box">
             <div class="inputBox">
                <span>full name</span>
                <input type="text" placeholder="enter your name">
             </div>
             <div class="inputBox">
                <span>food name</span>
                <input type="text" placeholder="food you want">
             </div>
             <div class="inputBox">
                <span>order details</span>
                <input type="text" placeholder="specifics with food">
             </div>
             <div class="inputBox">
                <span>your address</span>
                <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
             </div>
          </div>
          <div class="box">
             <div class="inputBox">
                <span>number</span>
                <input type="number" placeholder="enter your number">
             </div>
             <div class="inputBox">
                <span>how much</span>
                <input type="number" placeholder="how many you want">
             </div>
             <div class="inputBox">
                <span>when you want</span>
                <input type="datetime-local">
             </div>
             <div class="inputBox">
                <span>our address</span>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14759.438325068431!2d91.8100263!3d22.3589303!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8fe976105b47e2f0!2sPort%20City%20International%20University!5e0!3m2!1sen!2sbd!4v1675184181896!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
          </div>
       </div>
       <a href="payment.html"><input type="submit" value="order now" class="btn"></a>
    </form>
    
 </section>
 
  order section ends -->

<!-- Review Section --> 

<!-- <section class="review" id="review">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="swiper-container review-slider" data-aos="zoom-in">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <img src="images/pic-1.png" alt="">
                <h3>ALL Teacher of CSE PCIU</h3>
                <p>Every Teacher of CSE faculty prefered our food is hygenic and delicious.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>



      

            

        </div>

      

    </div>


</section> -->

   


    
















</body>


</html>