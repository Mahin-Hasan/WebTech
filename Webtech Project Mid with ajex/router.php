<?php
include("routerheader.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desktop shop</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <!-- 1st product-->
           <div class="col-lg-3">
               <form action="router_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="router/1.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Router</h5>
                    <p>5 Ghz dual band router with 4 antennas for maximum coverage. </p>
                    <p class="card-text">Price:4K</p>
                   
                    <button type="submit" name ="Add_To_Cart"class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "Router 1">
                    <input type="hidden" name="Price" value= "4000">

                 </div>
               </div>
               </form>
          </div>
          <!-- 2nd product-->
          <div class="col-lg-3">
               <form action="router_cart_manager.php" method="POST" >
        
              <div class="card">
                 <img src="router/2.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Network Hub</h5>
                    <p>Multiple users can be connected in the same network with the help of hub.</p>
                    <p class="card-text">Price:2K</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "Hub 2">
                    <input type="hidden" name="Price" value= "2000">

                 </div>
               </div>
               </form>
          </div>
          <!-- 3rd product-->
          <div class="col-lg-3">
               <form action="router_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="router/3.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Network Repeater</h5>
                    <p>Can be used to increase the range of the routers.</p>
                    <p class="card-text">Price:1.2K</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "Repeater 3">
                    <input type="hidden" name="Price" value= "1200">

                 </div>
               </div>
               </form>
          </div>
          <!-- 4th product-->
          <div class="col-lg-3">
               <form action="router_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="router/4.jpg" style="max-width: 100%;"class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Wireless Pocket Router</h5>
                    <p>Portable pocket router can be used anytime anywhere.  </p>
                    <p class="card-text">Price:800Taka</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "Pocket Router 4">
                    <input type="hidden" name="Price" value= "800">

                 </div>
               </div>
               </form>
          </div>
        </div>
    </div>
    <style>
       body { background:linear-gradient(rgba(190, 255, 252, 0.8),#1c4d44);}
      
    </style>
    
</body>
</html>