
<?php
include("laptopheader.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop shop</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <!-- 1st product-->
           <div class="col-lg-3">
               <form action="laptop_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="laptop/1.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Chrome Book</h5>
                    <p>A portable notebook for light work load Operating on chrome os. </p>
                    <p class="card-text">Price:18K</p>
                   
                    <button type="submit" name ="Add_To_Cart"class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "Laptop 1">
                    <input type="hidden" name="Price" value= "18000">

                 </div>
               </div>
               </form>
          </div>
          <!-- 2nd product-->
          <div class="col-lg-3">
               <form action="laptop_cart_manager.php" method="POST" >
        
              <div class="card">
                 <img src="laptop/2.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Laptop nootbook</h5>
                    <p>Perfect Laptop for all range of consumers. </p>
                    <p class="card-text">Price:35K</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "laptop 2">
                    <input type="hidden" name="Price" value= "35000">

                 </div>
               </div>
               </form>
          </div>
          <!-- 3rd product-->
          <div class="col-lg-3">
               <form action="laptop_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="laptop/3.jpg" class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Duel-Screen Laptop</h5>
                    <p>Build for professionals users.Can be used for intensive rendering and heavy work load.</p>
                    <p class="card-text">Price:1lac75K</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "laptop 3">
                    <input type="hidden" name="Price" value= "175000">

                 </div>
               </div>
               </form>
          </div>
          <!-- 4th product-->
          <div class="col-lg-3">
               <form action="laptop_cart_manager.php"method="POST">
        
              <div class="card">
                 <img src="laptop/4.jpg" style="max-width: 100%;"class="card-img-top" alt="...">
                 <div class="card-body text-center">
                    <h5 class="card-title">Mac M1</h5>
                    <p>Uses the powerful M1 chip. <br>The chip which never stutters. <br>Can be used for all range of works.  </p>
                    <p class="card-text">Price:1Lac60K</p>
                   
                    <button type="submit"name ="Add_To_Cart" class="btn btn-info">Add to Shopping Cart</button>
                    <input type="hidden" name="Item_Name" value= "laptop 4">
                    <input type="hidden" name="Price" value= "160000">

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