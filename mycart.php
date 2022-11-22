 <?php
  include("header.php");
  session_start();
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART </h1>

            </div>
            <div class="col-lg-8">
               <table class="table">
                  <thead>
                     <tr>
                          <th  scope="col">Serial No.</th>
                          <th scope="col">Item Name</th>
                          <th scope="col">Item Price</th>
                          <th scope="col">Quantity</th>
                     </tr>
                   </thead class="text-center">
                    <tbody class="text-center">
                        <?php
                          if(isset($_SESSION['cart']))
                           {
                             foreach($_SESSION['cart'] as $key => $value)
                                {
                                    echo"
                                       <tr>
                                          <td>1</td>
                                          <td>$value[Item<_Name]</td>
                                          <td>$value[Price]</td>
                                          <td>input class='text-center' type='number' 'value=$[quantity]</td>
                                          <td><button class='btn btn-sm btn-outline-danger'>REMOVE</button></td>

                                       </td>
                                    
                                    ";
                                }

                            }
                        ?>
                                        
                
                   </tbody>
             </table>

            </div>
        </div>
    </div>
    
</body>
</html>