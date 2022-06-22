<?php
include("accessoriesheader.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessories shop</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <!-- 1st product-->
           <div class="col-lg-3">
               <form action="accessories_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="accessories/1.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Keyboard</h5>
                    <p>Membrane and mechanical keyboard is available. </p>
                    <p class="card-text">Price:5K</p>
                   
                    <button type="submit" name ="Add_To_Cart"class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "Keyboard 1">
                    <input type="hidden" name="Price" value= "5000">

                 </div>
               </div>
               </form>
          </div>
          <!-- 2nd product-->
          <div class="col-lg-3">
               <form action="accessories_cart_manager.php" method="POST" >
        
              <div class="card">
                 <img src="accessories/2.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Mouse</h5>
                    <p>Variable dpi mouse ready stock.</p>
                    <p class="card-text">Price:3K</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "Mouse 2">
                    <input type="hidden" name="Price" value= "3000">

                 </div>
               </div>
               </form>
          </div>
          <!-- 3rd product-->
          <div class="col-lg-3">
               <form action="accessories_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="accessories/3.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Webcam</h5>
                    <p>Hd 720 p webcam .</p>
                    <p class="card-text">Price:7K</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "Webcam 3">
                    <input type="hidden" name="Price" value= "7000">

                 </div>
               </div>
               </form>
          </div>
          <!-- 4th product-->
          <div class="col-lg-3">
               <form action="accessories_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="accessories/4.jpg" style="max-width: 100%;"class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Microphone</h5>
                    <p>Audible Noise cancellation microphone.  </p>
                    <p class="card-text">Price:12K</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "Microphone 4">
                    <input type="hidden" name="Price" value= "12000">

                 </div>
               </div>
               </form>
          </div>
           <!-- 1st product-->
          <div class="col-lg-3">
               <form action="accessories_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="accessories/5.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">SSD</h5>
                    <p>Use solid state drive for better Peerformance. </p>
                    <p class="card-text">Price:4.2K</p>
                   
                    <button type="submit" name ="Add_To_Cart"class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "SSD 5">
                    <input type="hidden" name="Price" value= "4200">

                 </div>
               </div>
               </form>
          </div>
          <!-- 2nd product-->
          <div class="col-lg-3">
               <form action="accessories_cart_manager.php" method="POST" >
        
              <div class="card">
                 <img src="accessories/6.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">GPU</h5>
                    <p>Install external graphics card if your task is high graphics demanding.</p>
                    <p class="card-text">Price:42K</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "GPU 6">
                    <input type="hidden" name="Price" value= "42000">

                 </div>
               </div>
               </form>
          </div>
          <!-- 3rd product-->
          <div class="col-lg-3">
               <form action="accessories_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="accessories/7.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Ram</h5>
                    <p>Running multiple application can become much smoother.</p>
                    <p class="card-text">Price:7.2K</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "Ram 7">
                    <input type="hidden" name="Price" value= "7200">

                 </div>
               </div>
               </form>
          </div>
          <!-- 4th product-->
          <div class="col-lg-3">
               <form action="accessories_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="accessories/8.jpg" style="max-width: 100%;"class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">HDD</h5>
                    <p>If Your storage running out it's always better to install another HDD.  </p>
                    <p class="card-text">Price:5.2K</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "HDD 8">
                    <input type="hidden" name="Price" value= "5200">

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