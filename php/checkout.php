<?php
if(isset($_GET['place'])){
  $email = $_SESSION['email'];
  $date = date('Y-m-d', strtotime("YYYY-MM-DD"));
  $address = $_POST['address']."[".$_POST['country']."]";
    $i_query = "INSERT INTO orders (ordered_items,date_placed,Address,status,cust_email)
    VALUES ('items', '$date', '$address', 'placed', '$email')" ;
    $result = $con->query($i_query) or die($con->error);
    echo '<script language="javascript">';
     echo 'alert("Order had been placed")';
     echo '</script>';
  }

?>
