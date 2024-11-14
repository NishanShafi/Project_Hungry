 <?php
 session_start();

 if($_SERVER["REQUEST_METHOD"]=="POST")
 {

    if(isset($_POST['Add']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'item_name');
            if(in_array($_POST['item_name'],$myitems))
            {
                echo"<script>alert('Item Already added');
                window.location.href='menu.php';
                </script>";

            }
            else
            {

            
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'item_price'=>$_POST['item_price'],'Quantity'=>1);
            echo"<script>alert('Item added');
            window.location.href='menu.php';
            </script>"; 

        }
        }
        else
        {
            $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'item_price'=>$_POST['item_price'],'Quantity'=>1);
            echo"<script>alert('Item added');
            window.location.href='menu.php';
            </script>";  
        }
    }
    if (isset($_POST['Remove_item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
           unset($_SESSION['cart'][$key]);
           $_SESSION['cart']=array_values($_SESSION['cart']);
           echo "<script>
           alert('item_removed');
           window.location.href='cart.php';
           </script>";
        }
    }
 }
 
 
 ?>