
<?php
session_start();
require './php/core.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <link rel="stylesheet" type='text/css' href="./css/Footer_Header.css">
    <link rel="stylesheet" type='text/css' href="./css/Cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <title>Shopping Cart</title>
  </head>
  <header>
    <?php require './includes/Header.inc.php' ?>


  </header>
  <body>
    <?php
    $total = 0;
    $email = $_SESSION['email'];
    $query = "SELECT * FROM cart WHERE email = '$email'";
    $result = $con->query($query);
    $items = $result->num_rows;



    ?>
    <div class="ShoppingCart">
      <h2>Shopping Cart (<?php echo $items;?>)</h2>
      <?php
      while($row = mysqli_fetch_array($result)){
        $query = "SELECT * FROM product WHERE p_id = '$row[1]'";
        $result1 = mysqli_query($con,$query);
        $row1 = mysqli_fetch_array($result1,MYSQLI_BOTH);
        $total = $total+$row1[2]*$row[2];

      ?>

      <div class="itemsbox">
        <div class="img1">
          <img src="./images/img1.jpg" alt="">
        </div>
        <div class="details">
          <p id="title"><?php echo $row1[1];?></p>
          <p id="qunatity">Quantity: <?php echo $row[2];?></p>
          <p id="price">Price: <?php echo $row1[2];?> SR</p><br>
          <p id="describtion">Describtion: <br> <?php echo $row1[7];?></p>
          <a href="#"><img src="<?php echo $row1[5];?>" width="24" alt=""></a>

        </div>
      </div>
      <br>
    <?php }?>

    </div>
  <?php if($total>0){
    ?>
    <div class="checkoutbox">
      <div class="tprice">
        <p id="totalprice">Total Price:</p>
        <p id="pricee"><?php echo $total;?> SR</p><br>
        <hr><br>
        <p id="note">*Order total includes any applicable VAT</p>
        <a href=<?php echo "./checkout.php?price=".$total?>><button class="button button1" name="checkout"><i class="fa fa-cart-plus" aria-hidden="true"></i> Continue to Checkout </button></a><br>
      </div>
    </div>
  <?php } else { ?>
    <div class="checkoutbox" style="background-color:Grey;border:1px solid #000;">
      <div class="tprice">
        <p id="totalprice">Your Shopping Cart is empty</p>
        <p id="pricee">Please add items to your cart first</p><br>
        <hr><br>
      </div>
    </div>
  <?php } ?>
  </body>
  </html>
