<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome To Babylon</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Footer_Header.css">

  </head>
  <body>



  <?php
  if(isset($_POST['search'])){
    header("Location:./products.php?cat=".$_POST['search']);
  }
   include './includes/Header.inc.php'; ?>

<div class="home_page">

      <form action="index.php" method="post">
        <input id="search-bar" type="text" name="search" value="" placeholder="Search for product">
      </form>
      <div class="welcome">

      </div>
       <div class="welcome-msg-left">
       <h1 id="welcome-to">Welcome To</h1>
        <p id="welcome-msg">At Babylon we are constantly striving to reduce costs without compromising quality. Discover our wide range of affordable furniture and homeware that will help make your everyday life wonderfull!</p>
       </div>
        <br>
        <hr>
        <h2>SHOP BY CATEGORY</h2>
        <div class="shop-by-categories">
        <ul class="categories">
            <a href="./products.php?cat=bedroom"><li id="bedrooms">Bedrooms</li></a>
            <a href="./products.php?cat=living-room"><li id="livingroom">Livingrooms</li></a>
            <a href="./products.php?cat=kitchen"><li id="kitchen">Kitchens</li></a>
            <a href="./products.php?cat=laundry"><li id="laundry">Laundry</li></a>
            <a href="./products.php?cat=outdoors"><li id="outdoor">Outdoor</li></a>
            <a href="./products.php?cat=office"><li id="office">Office</li></a>
        </ul>
        </div>
        <hr>
            <!-- <h2>OUR SERVICES</h2>
        <div class="our-services">
            <ul>
                <li id="delivery">Free Shipping Order</li>
                <li>Specifal Gift Card</li>
                <li>Return and Refund</li>
                <li>Quality Support</li>
            </ul>
        </div> -->


    </div>
    <footer><hr style="width: 60%;">BABYLON &copy; 2020 &#124; Web-Based Systems
     <p><img class="logo1" src="images/white_logo.png" width="170px" height="auto"></p></footer>
  </body>
</html>
