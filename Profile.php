<?php
session_start();
require './php/core.inc.php'; ?>

<?php

$email = "";
$fName =  "";
$lName = "";
$phone ="";
$dob = "";
$status = "";

$s_query = "SELECT * FROM user";
$result = $con->query($s_query) or die($con->error);
if($result->num_rows){
  $row = $result->fetch_assoc();
  $email = $row["email"];

  $fName =  $row["fName"];
  $lName = $row["lName"];
  $phone = $row["phone"];
  $dob =  $row["DoB"];
  // $address =  $row["email"];
  // print ($email);
}

    if(isset($_POST['phone'])){
      $phone = $_POST['phone'];
      $u_query = "UPDATE user SET phone='$phone' WHERE email='$email'  "; // email='$email'
      if($con->query($u_query) === TRUE){
          $status = "inforamtion updated successfully" ;
        } else{
          $status = ' <p style = "color : red ;">inforamtion has not updated' ;

    }
  }

  if(isset($_POST['fname'])){
    $fname = $_POST['fname'];
    $u_query = "UPDATE user SET fName='$fname' WHERE email='$email'";
    // $result = $con->query($u_query) or die($con->error);
    if($con->query($u_query) === TRUE){
      $status = "inforamtion updated successfully" ;
      } else{
        $status = ' <p style = "color : red ;">inforamtion has not updated' ;
  }
}

  if(isset($_POST['lname'])){
    $lname = $_POST['lname'];
    $u_query = "UPDATE user SET lName='$lname' WHERE email='$email'  ";
    // $result = $con->query($u_query) or die($con->error);
    if($con->query($u_query) === TRUE){

      $status = "inforamtion updated successfully" ;
      } else{
        $status = ' <p style = "color : red ;">inforamtion has not updated' ;
      }

  }
  if(isset($_POST['dob'])){
    $dob = $_POST['dob'];
    $u_query = "UPDATE user SET DoB = '$dob' WHERE email='$email'  ";
    if($con->query($u_query) === TRUE){
      $status = "inforamtion updated successfully" ;
      } else{
        $status = ' <p style = "color : red ;">inforamtion has not updated' ;
}
  }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type='text/css' href="./css/Profile.css">
    <link rel="stylesheet" type='text/css' href="./includes/Footer_Header.css">
    <title>User Profile</title>
  </head>
  <header>
    <?php require './includes/Header.inc.php' ?>
  </header>

  <body>
    <div class="Edit">
        <h1>Update Profile Information</h1><br> <hr> <br>
        <form class="editprofile" action="" method="post">

          <h3>Personal Information:</h3><br>
          <label>First Name: </label><input type="text" name="fname" placeholder="<?php echo$fName; ?>"  id="fname" required disabled="disabled"> <!-- disabled="disabled" -->
          <label>Last Name: </label><input type="text" name="lname" placeholder="<?php echo$lName; ?>" id="lname" required disabled="disabled">
          <label>Date of Birth: </label><input type="date" name="dob" placeholder="<?php echo$dob; ?>" id="dob"required  disabled="disabled">
          <input  calss ="inputsss" onclick="enable1()" type="button" name="" value="Edit" style="background-color: #2d2d2d ;
          color: white;" >
          <br><br><hr><br>
          <h3>Contact Information:</h3><br>
          <!-- <label>E-mail: </label><input type="email" name="email" value="" id="email" > -->
          <label>Phone: </label><input type="tel" name="phone" placeholder="<?php echo$phone; ?>" value="" id="phone" pattern="[0-9]{9}" required disabled="disabled">
          <input calss ="inputsss" onclick="enable2()" type="button" name="" value="Edit" style="background-color: #2d2d2d ;
          color: white;" >
          <br><br><hr><br>
          <h3>Shipping Information:</h3><br>
          <label>Address: </label><input type="text" name="address" placeholder="Dammam"  value="" id="address" disabled="disabled">
          <input calss ="inputsss" onclick="enable3()" type="button" name="" value="Edit" style="background-color: #2d2d2d ;
          color: white;" >

          <br><br><hr><br>
          <input id="submit" type="submit" name="submit" value="Save">

          <p style="color: green ;"> <?php
          echo $status ;?></p>

        </form>

        <script type="text/javascript">
          function enable1() {
            document.getElementById("fname").disabled = false;
            document.getElementById("lname").disabled = false;
            document.getElementById("dob").disabled = false;
          }
          function enable2() {

            document.getElementById("phone").disabled = false;
          }
          function enable3() {
            document.getElementById("address").disabled = false;
          }
        </script>


    </div>
<footer>    <?php require './includes/Footer.inc.php' ?></footer>
  </body>

</html>
