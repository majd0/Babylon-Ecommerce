<?php session_start(); ?>
<?php include 'includes/Header.inc.php'; ?>

<?php include './php/core.inc.php';
if(isset($_POST['place'])){
  $email = $_SESSION['email'];
  $date = date('Y-m-d', strtotime("YYYY-MM-DD"));
  $address = $_POST['address']."[".$_POST['country']."]";
    $i_query = "INSERT INTO orders (ordered_items,date_placed,Address,status,cust_email)
    VALUES ('items', '$date', '$address', 'placed', '$email')" ;
    $result = $con->query($i_query) or die($con->error);
    echo '<script language="javascript">';
     echo 'alert("Order had been placed")';
     echo '</script>';
     $i_query = "DELETE FROM cart WHERE email='$email'" ;
     $result = $con->query($i_query) or die($con->error);
     header("location:./");
  }


if(isset($_GET['price']))
$price = $_GET['price'];
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/Footer_Header.css">
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  </head>
  <body>
      <form class="checkoutForm" action="" method="post" >
        <p><b>Payment Details</b></p>
        <?php echo "<p> Your Total is $price SAR</p>";?>
      <p style="margin-top: 40px;"><label>Full Name</label></p> <input id="inp" type="text" name="name" value="" placeholder="Enter your full name" required>
      <p><label>Country</label></p>
      <p><select id="inp" style="margin-left:1px;" name="country">
        <option>Saudi Arabia</option>
        <option>UAE</option>
        <option>Bahrain</option>
        <option>Kuwait</option>
      </select></p>
      <p><label>State/Region &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Postal Code</label></p><input id="inpSP" type="text" name="" value="" required>
      <input id="inpSP" type="text" name="" value="" required>
      <div class="">
        <br><br>
      </div>

      <p><label>Card number</label></p> <input  id="inp" type="tel" name="" value="" placeholder="xxxx xxxx xxxx xxxx" pattern="4[0-9]{12}(?:[0-9]{3})?)" required>
      <p><label>Expiration date &emsp;&emsp;&emsp;&emsp;&emsp; Security code</label></p> <input  id="inpSP" type="month" name="" value="">
      <input  id="inpSP" type="tel" name="" value="" >
        <div id="placeOrder" style="margin-left:10%">
          <h4>By clicking the button, you agree to the Terms and Conditions!</h4>
          <input id="inpbtn" placeholder="Place Order" type="submit" name="place">
        </div>
    </form>

      <?php include 'includes/Footer.inc.php'; ?>
  </body>
</html>
