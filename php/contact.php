<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "2170007646@iau.edu.sa";
  $headers = "From: ".$emailFrom;
  $text = "You have received an email from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $text, $headers);
  header("Location: home.html?mailsend");
}

 ?>
