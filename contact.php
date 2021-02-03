<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Footer_Header.css">
    <link rel="stylesheet" href="css/contact_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spartan">
  </head>
    
  <body>
    <?php include './includes/Header.inc.php'; ?>
    <main>
      
    <div class="contact-page">
        <p><img id="contact-img" src="images/babylon-transparent.png"></p>
        <hr id="hr">
        <p id="contact-heading">CONTACT US</p>
        <div id="form">
            <form class="contact-form" action="php/contact.php" method="post">
              <label id="inp">NAME: <input id="inputs" type="text" name="name" placeholder="Full name"><br></label>
              <label id="inp">EMAIL:<input id="inputs" type="text" name="email" placeholder="Your email"><br></label>
              <label id="inp">SUBJT:<input id="inputs" type="text" name="subject" placeholder="Subject"><br></label>
              <label id="msg">MSSG: <textarea id="inputs-msg" name="message" placeholder="Message"></textarea><br></label>
              <button id="send-mail" type="submit" name="submit">SEND</button><br>
            </form>
        </div>
    </div>
    </main>
        
    <footer><hr style="width: 60%;">BABYLON &copy; 2020 &#124; Web-Based Systems
     <p><img class="logo1" src="images/white_logo.png" width="170px" height="auto"></p></footer>
  </body>
</html>
