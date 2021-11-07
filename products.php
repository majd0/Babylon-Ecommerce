<?php
session_start();
include 'includes/Header.inc.php';
include 'includes/db_connect.php'; //$conn
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="includes/Footer_Header.css">
<?php
if(isset($_GET['cat'])){
  $cat = $_GET['cat'];
  $name = $cat;
}
else $name = "Furnitures";
?>
    <meta charset="utf-8">
    <title>Products</title>
  </head>
  <body>
    <div style="margin-left:12%;;margin-top:5%;" class="col-sm-9 padding-right">
        <div class="features_items"><!--features_items-->
            <h2 class="title text-center"><?php echo $name; ?></h2>

    <?php
    if(isset($_GET['cat'])){
      $cat = $_GET['cat'];
      $query="SELECT * FROM product WHERE category LIKE '$cat'";
    } else $query="select * from product";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result,MYSQLI_BOTH))
    {
    ?>
     <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="./img/<?php echo $row["image"]?>1.jpg" alt="" width="180" height="381" />
                                        <h2>SAR <?php echo $row["price"]; ?></h2>
                                        <p><?php echo $row["name"]; ?></p>
                                        <a href="product_details.php?id=<?php echo $row["p_id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Description</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>SAR <?php echo $row["price"]; ?></h2>
                                            <p><?php echo $row["name"]; ?></p>
                                            <a href="./product_details.php?id=<?php echo $row["p_id"]; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Description</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">

                                    </ul>
                                </div>
                            </div>
                        </div>

    <?php  }   //Loop End ?>

            <div class="col-sm-4">
            <li><a href="">»</a></li>
					</div>
				</div>
   </div>
  </body>
</html>
