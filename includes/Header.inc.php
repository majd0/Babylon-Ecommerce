    <div class="header">
      <div class="inner_header">
        <div class="logo_container">
          <a href=""><img class"logo" src="./includes/img/babylon-transparent.png" alt="babylon" width="170px" height="auto"></a>
        </div>
        <div class="navv">
          <ul>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./products.php">Products</a></li>
            <li><a href="./shops.php">Shops</a></li>
            <li><a href="./contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="navvicons">
<?php
          if(isset($_SESSION['email'])){
            ?>
          <a href="./Cart.php"><img src="./includes/img/cart_l.png" alt="wish list" width="22" height="auto"  onmouseover="this.src='./includes/img/cart_b.png'" onmouseout="this.src='./includes/img/cart_l.png'"></a>
          <a href="./Profile.php"><img src="./includes/img/user_l.png" alt="wish list" width="22" height="auto" onmouseover="this.src='./includes/img/user_b.png'" onmouseout="this.src='./includes/img/user_l.png'"></a>
          <a href="./logout.php"><img src="./includes/img/logout_l.png" alt="wish list" width="22" height="auto" onmouseover="this.src='./includes/img/logout_b.png'" onmouseout="this.src='./includes/img/logout_l.png'"></a>
<?php } else {
  ?>
  <a href="./login.php"><img src="./includes/img/key_l.png" alt="wish list" width="22" height="auto" onmouseover="this.src='./includes/img/key_b.png'" onmouseout="this.src='./includes/img/key_l.png'"></a>

  <?php
}
if(isset($_SESSION['isAdmin'])){
  ?>
          <a href="./adminPanel.php"><img src="./includes/img/key_l.png" alt="wish list" width="22" height="auto" onmouseover="this.src='./includes/img/key_b.png'" onmouseout="this.src='./includes/img/key_l.png'"></a>
<?php
  }
  ?>

        </div>
      </div>
    </div>
