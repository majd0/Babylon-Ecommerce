<?php session_start(); ?>
<?php require './php/core.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Babylon-Product Detail</title>
    <link rel="stylesheet" type="text/css" href="css/PDetail.css">
<!--    <link rel="stylesheet" type="text/css" href="css/style.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.thump a').mouseover(function(e){
          e.preventDefault();
          $('.imgBox img').attr("src", $(this).attr("href"));
        })
      })
    </script>
  </head>
  <body>
      <div class="home_page">
<?php include './includes/Header.inc.php'; ?>
    <div class="Search_bar">
      <input class="searchB" type="text" name="search" placeholder="Search for products...">
        <a href="#"><i class="fa fa-search" style="font-size:24px"></i></a>
    </div>

    <div class="container">
      <div class="path">
        </div>
        <div class="photos">
          <ul class="thump">
          <?php
          if(isset($_GET['id'])){
            $p_id = $_GET['id'];
          }

          $P_query = "SELECT * From product WHERE p_id = $p_id";
          $result = $con->query($P_query) or die($con->error);
          if ($result->num_rows) {
           $row = mysqli_fetch_array($result,MYSQLI_BOTH);
           $re = $row[5];
            // echo $re;
            $price = $row[2];
            $des = $row[7];
            $title = $row[1];
            $qq = $row[3];

          }
          // $email = $_SESSION['email'];
          $email = $_SESSION['email'];

          if(isset($_POST['Q']) && isset($_POST['add'])){
            // $sql = "UPDATE data SET Age='28' WHERE id=201";
            $new_qq = $qq-$_POST['Q'] ;
            $qq = $_POST['Q'];
            // update the quantity in the database
            $Q_query = "UPDATE product SET quantity=$new_qq  WHERE p_id = $row[0]";
            $result = $con->query($Q_query) or die($con->error);
            // add the cart
            $add_query = "INSERT INTO cart VALUES('$email',$row[0],$qq)";
             if($con->query($add_query)){
               echo '<script language="javascript">';
                echo 'alert("Added to cart successfully'.$qq.'")';
                echo '</script>';
             }

          }
          ?>
            <li><a href="<?php echo "./img/".$re."1.jpg";?>" target="imgBox"><img src="<?php echo "./img/".$re."1.jpg";?>" width="100px" height="100px"></a></li>
            <li><a href="<?php echo "./img/".$re."2.jpg";?>" target="imgBox"><img src="<?php echo "./img/".$re."2.jpg";?>" width="100px" height="100px"></a></li>
            <li><a href="<?php echo "./img/".$re."3.jpg";?>" target="imgBox"><img src="<?php echo "./img/".$re."3.jpg";?>" width="100px" height="100px"></a></li>
            <li><a href="<?php echo "./img/".$re."4.jpg";?>" target="imgBox"><img src="<?php echo "./img/".$re."4.jpg";?>" width="100px" height="100px"></a></li>
          </ul>
          <div class="imgBox"><img src="<?php echo "./img/".$re."1.jpg";?>">
          </div>
        </div>
        </div>
        <div class="Pdetails">
          <label id=price>
           <?php echo $title; ?></label> <br>
          <label id=price> SR <?php echo $price;?> </label><br>
          <label id=smalldetails> Price incl. VAT </label><br><br>
          <label id="story"> <h4>Product Describtion:</h4> <?php echo $des; ?></label><br><br>

            </div><br>
          <form action="" method="post">
            <input class="qunat"  name= "Q" type="number" placeholder="Quantity" min="1" max="<?php echo $qq;?>"><br><br>
            <button class="button button1" name="add" name="add"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to shopping cart
          </button><br>
            </form>
            <br><br><br><br>

            <br>
        </div>
        <!-- <br><br><br><br><br><br><br> -->
        <!-- <br> -->
        </div>
            </div>
        <footer><hr style="width: 60%;">BABYLON &copy; 2020 &#124; Web-Based Systems <br>
          <li class="logo"> <img class="logo1" src="images/white.png" width="170px" height="auto"/></li></footer>

  </body>
</html>
