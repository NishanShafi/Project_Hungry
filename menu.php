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
        <li><a href="homecook.html">Best Home Cook</a></li>
        <!-- <li><a href="#">Menu</a></li> -->     
        <li><a href="#">Menu</a></li>
        <li><a href="aboutus.html">About us</a></li>
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
        <a href="cart.php" class="btn">My cart(<?php echo $count; ?>)</a>
    </div>
</div>


<section class="packages" id="packages">

    <h1 class="heading"> our <span>Burger Special</span> </h1><br><br><br>

    <div class="box-container">

         <div class="box" data-aos="fade-up">
                     <form action="manage_cart.php" method="POST">
            <div class="image">
                <img src="burger.jpg" >
                <h3> <i class="fas fa-utensils"></i> Special Burger </h3>
            </div>
            <div class="content">
                <div class="price"> 100/- <span>350.99</span> </div>
                <p> Cheesy Burger
                    2.8/5 (14) Asian Seafood Fish Rice Dishes Bangladeshi<br> $ Tk 3 Service Fee $ </p>
                <button type="submit" name="Add" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="item_name" value="Special Burger">
                <input type="hidden" name="item_price" value="100">
                
            </div>
                    </form>
        </div>


                <!-- item a1 -->
                <div class="box" data-aos="fade-up">
                     <form action="manage_cart.php" method="POST">
            <div class="image">
                <img src="a1.jpg" >
                <h3> <i class="fas fa-utensils"></i> Regular Burger </h3>
            </div>
            <div class="content">
                <div class="price"> 50/- <span>65.00</span> </div>
                <p> Regular Burger
                    2.8/5 (14) Asian Seafood Fish Rice Dishes Bangladeshi<br> $ Tk 3 Service Fee $ </p>
                <button type="submit" name="Add" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="item_name" value="Regular Burger">
                <input type="hidden" name="item_price" value="50">
                
            </div>
                    </form>
        </div>

  <!-- item a2 -->
  <div class="box" data-aos="fade-up">
                     <form action="manage_cart.php" method="POST">
            <div class="image">
                <img src="a2.jpg" >
                <h3> <i class="fas fa-utensils"></i> Naga Burger </h3>
            </div>
            <div class="content">
                <div class="price"> 310/- <span>331.00</span> </div>
                <p> Naga Burger
                    2.8/5 (14) Asian Seafood Fish Rice Dishes Bangladeshi<br> $ Tk 3 Service Fee $ </p>
                <button type="submit" name="Add" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="item_name" value="Naga Burger">
                <input type="hidden" name="item_price" value="310">
                
            </div>
                    </form>
        </div>

  <!-- item a3 -->
  <div class="box" data-aos="fade-up">
                     <form action="manage_cart.php" method="POST">
            <div class="image">
                <img src="a3.jpg" >
                <h3> <i class="fas fa-utensils"></i> Spicy Burger </h3>
            </div>
            <div class="content">
                <div class="price"> 299/- <span>331.00</span> </div>
                <p> Spicy Burger
                    2.8/5 (14) Asian Seafood Fish Rice Dishes Bangladeshi<br> $ Tk 3 Service Fee $ </p>
                <button type="submit" name="Add" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="item_name" value="Spicy Burger">
                <input type="hidden" name="item_price" value="299">
                
            </div>
                    </form>
        </div>
  <!-- item a4 -->
  <div class="box" data-aos="fade-up">
                     <form action="manage_cart.php" method="POST">
            <div class="image">
                <img src="a4.jpg" >
                <h3> <i class="fas fa-utensils"></i> Patty Burger </h3>
            </div>
            <div class="content">
                <div class="price"> 135/- <span>211.00</span> </div>
                <p> patty Burger
                    2.8/5 (14) Asian Seafood Fish Rice Dishes Bangladeshi<br> $ Tk 3 Service Fee $ </p>
                <button type="submit" name="Add" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="item_name" value="Patty Burger">
                <input type="hidden" name="item_price" value="135">
                
            </div>
                    </form>
        </div

        <!-- item a5 -->

        <div class="box" data-aos="fade-up">
                     <form action="manage_cart.php" method="POST">
            <div class="image">
                <img src="a5.jpg" >
                <h3> <i class="fas fa-utensils"></i> Combo Burger </h3>
            </div>
            <div class="content">
                <div class="price"> 999/- <span>2011.00</span> </div>
                <p> Combo Burger
                    2.8/5 (14) Asian Seafood Fish Rice Dishes Bangladeshi<br> $ Tk 3 Service Fee $ </p>
                <button type="submit" name="Add" class="btn btn-info">Add To Cart</button>
                <input type="hidden" name="item_name" value="Combo Burger">
                <input type="hidden" name="item_price" value="999">
                
            </div>
                    </form>
        </div









<br>
<br>
<br>
<br>
<br>
<br>
        
                <!-- item 2  -->

<br>
<h1 class="heading"> our <span> Special</span> </h1><br><br><br>

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



        <!-- ext -->
       
















        
    </div>
<br><br><br>
</section>





    </body>
    </html>