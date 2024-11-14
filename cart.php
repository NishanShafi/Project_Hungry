<?php 
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
<head>
<title>HUNGRY.COM</title>

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
 <div class="container">
        <div class="row">
            <div class="clo-lg-12 text-center border rounded bg-light my-5">
                      <h1>CART</h1>      
    </div>
    <div class="col-lg-9">

            <table class="table">
            <thead class="text-center">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Items</th>
                <th scope="col">Per Prize</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
              /*   $total=0; */
                if(isset($_SESSION['cart']))
                {

        
                foreach($_SESSION['cart']as $key=>$value)
                {
                    $sr=$key+1;
                    /* $total=$total+$value['item_price']; */
                    echo"<tr>
                    <td>$sr</td>
                    <td>$value[item_name]</td>
                    <td>$value[item_price]<input type='hidden' class='iprice' value='$value[item_price]'></td>
                    <td><input class='text-center iquantity' onchange='subTotal()' type='number'value='$value[Quantity]' min='1' max='10'</td>
                    <td class='itotal'></td>
                    <td>
                    <form action='manage_cart.php' method='POST'>
                    <button name='Remove_item' class='btn btn-sm btn-outline-danger'>Remove</button>
                    <input type='hidden' name='item_name' value='$value[item_name]'>
                    </form>
                    </td>
                    </tr>
                    ";
                }
            }
                ?>
                                
            </tbody>
            </table>
        </div>

<div class="col-lg-3"></div>
<div class="border bg-light rounded p-4">
            <h4>Sub Total:</h4>
            <h5 class="text-right "id="gtotal">
            <br>
        
        </div>
        <form> <button class='btn btn-primary btn-block'><a href="payment.html">Checkout</a></button></form>
                    
        </div> 

    </div>



    <script>
        var gt=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal=document.getElementById('gtotal');
        function subTotal()
        {
            gt=0;
            for(i=0;i<iprice.length;i++)
         {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

            gt=gt+(iprice[i].value)*(iquantity[i].value);
         }
         gtotal.innerText=gt;
        }
        subTotal();
        </script>
</body>
</html>
