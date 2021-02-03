<?php
session_start();
require './core.inc.php';

$email = $_POST['email'];
$password = $_POST['password'];



$result = $con->query("SELECT * FROM User WHERE email = '$email' AND pass = '$password'") or die($con->error);
if ($result->num_rows) {
  $row = mysqli_fetch_array($result,MYSQLI_BOTH);
  $ID = $email;
  $_SESSION['email'] = $ID;
  $_SESSION['isAdmin'] = $row['isAdmin'];
  $_SESSION['name'] = $row[3];
  header ("location:../");
} else {
  header ("location:../login.php?invalid=1");
}

?>
