<?php session_start(); ?>
<?php
include 'includes/db_connect.php'; //$conn
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <link rel="stylesheet" type='text/css' href="./includes/Footer_Header.css">
    <link rel="stylesheet" type='text/css' href="./Cart.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <title>Shopping Cart</title>
  </head>

  <body>
    <?php
    include 'includes/Header.inc.php';
    ?>
    <div  class="ShoppingCart">
    <h2>Orders History </h2>

    <?php
    $email=$_SESSION['email']; //add the user email here by using session global variable to retreive customer items based on his/her email;
    $query="SELECT * FROM `orders` WHERE cust_email='$email';";
    $result=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($result))
  {
  ?>
  <div class="itemsbox" style="border:1px solid grey;border-radius:5px;margin:2%;">
    <div class="details">
      <p id="qunatity">Order ID: <?php echo $row["o_id"]; ?></p>
      <p id="date">Date Placed:<?php echo $row["date_placed"]; ?> </p>
      <p style="font-weight:bold; color: green;">Address: <?php echo $row["Address"]; ?></p>
      <p id="date">Status: <?php echo $row["Status"]; ?> </p>
    </div>
  </div>

  <?php  }   //Loop End ?>


  </div>

  <div style="margin: 0 auto;margin-top:30%;">

        <?php include 'includes/Footer.inc.php'; ?>
  </div>





  </body>

  </html>
