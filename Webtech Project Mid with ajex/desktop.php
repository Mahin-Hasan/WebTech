<?php
include("desktopheader.php");
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
               <form action="desktop_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="desktop/1.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Gaming Pc</h5>
                    <p>Full gaming and streaming set up. <br>Maximum Peerformance. </p>
                    <p class="card-text">Price:1Lac80K</p>
                   
                    <button type="submit" name ="Add_To_Cart"class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "Pc 1">
                    <input type="hidden" name="Price" value= "180000">

                 </div>
               </div>
               </form>
          </div>
          <!-- 2nd product-->
          <div class="col-lg-3">
               <form action="desktop_cart_manager.php" method="POST" >
        
              <div class="card">
                 <img src="desktop/2.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Basic Office Pc</h5>
                    <p>A Pc capable of performing basic tasks like browsing,Ms word,Power Point, Excel etc.</p>
                    <p class="card-text">Price:35K</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "Pc 2">
                    <input type="hidden" name="Price" value= "35000">

                 </div>
               </div>
               </form>
          </div>
          <!-- 3rd product-->
          <div class="col-lg-3">
               <form action="desktop_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="desktop/3.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Productivity Pc</h5>
                    <p>Mid raange best price to performance productive build.</p>
                    <p class="card-text">Price:85K</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "Pc 3">
                    <input type="hidden" name="Price" value= "85000">

                 </div>
               </div>
               </form>
          </div>
          <!-- 4th product-->
          <div class="col-lg-3">
               <form action="desktop_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="desktop/4.jpg" style="max-width: 100%;"class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">I-Mac M1</h5>
                    <p>Uses the powerful M1 chip. <br>The chip which never stutters.  </p>
                    <p class="card-text">Price:1Lac45K</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "Pc 4">
                    <input type="hidden" name="Price" value= "145000">

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