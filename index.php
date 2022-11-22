<?php include("header.php");
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>

    <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
             <div class="card" >                
                  <img src="images/image1.jpg" class="card-img-top">
                    <div class="card-body tex-center">
                     <h5 class="card-title">shoes</h5>
                      <p class="card-text">price $200.</p>
                      <button type="sibmit" class="btn btn-info">Add to Cart</button>
                     <input type="hidden" name="Item_Name" value="shoes">
                     <input type="hidden" name="Price" value="200">
                    </div>
                </div>

            </form>
            </div>
        </div>
        <div class="col-lg-3">

            <form action="manage_cart.php" method="POST">
             <div class="card" >                
                  <img src="images/image2.jpg" class="card-img-top">
                    <div class="card-body tex-center">
                     <h5 class="card-title">Bag</h5>
                      <p class="card-text">price $1000.</p>
                      <button type="Add To Cart" class="btn btn-info">Add to Cart</button>
                     <input type="hidden" name="Item_Name" value="Bag">
                     <input type="hidden" name="Price" value="1000">
                    </div>
                </div>

            </form>
            </div>
        </div>

    </div>

    
</body>
</html>