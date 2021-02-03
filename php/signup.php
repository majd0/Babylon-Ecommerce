
<?php
session_start();
require './core.inc.php';
if(isset($_POST['email']) && isset($_POST['fName']) && isset($_POST['lName']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['dob'])){
$email = $_POST['email'];
$password = $_POST['password'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
} else {
   header ("location:../login.php?signup=12");
}
$result = $con->query("SELECT * FROM User WHERE email = '$email'") or die($con->error);
if ($result->num_rows) {
  header ("location:../login.php?signup=99");
}
$query  = "INSERT INTO `User` (`email` , `pass`, `fName`, `lName`, `phone` , `DoB`)
    VALUES('" . $email . "','" . $password . "',
    '" . $fName . "', '". $lName ."','". $phone ."' ,'". $dob . "')";
$success = $con->query($query);


if ($success) {
  $_SESSION['email'] = $email;
  $_SESSION['name'] = $fName;
    header ("location:../");
} else {
   // header ("location:../login.php?signup=1");
}

?>
