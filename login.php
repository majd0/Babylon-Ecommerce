<?php
session_start();
require './php/core.inc.php';
if(isset($_GET['signup'])){
  if($_GET['signup'] == "99")
    $error2 = '<p style="color:orange;">Error: email already in use.</p>';
    else $error2 = '<p style="color:red;">Error: Make sure to fill in all the field.</p>';
} else $error2 = '<p>Login and add a masterpeice to your home</p>';
if(isset($_GET['invalid']))
    $error = '<p style="color:red;">Invalid username/password</p>';
else $error = '<p>Join us and start shopping now</p>';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/Footer_Header.css">
  </head>
  <body>




    <div class="loginPic" style="position:absolute;right:50%;background-image:;">

    </div>


    <div class="container" id="container">
    <div class="form-container sign-up-container">
  <form action="./php/signup.php" method="post">
      <h1>Create Account</h1>
      <?php echo $error2; ?>
      <input type="email" name="email" placeholder="Email" />
      <input type="password" name="password" placeholder="Password" />
      <input type="text" name="fName" placeholder="First Name" />
      <input type="text" name="lName" placeholder="Last Name" />
      <input type="text" name="phone" placeholder="Phone Number" />
      <input type="date" name="dob" placeholder="Date of Birth" />
      <button>Sign Up</button>
  </form>
    </div>
    <div class="form-container sign-in-container">
  <form method="post" action="./php/checkLogin.php" >
     <h1>Sign in</h1>
     <?php echo $error; ?>
     <input type="email" name="email" placeholder="Email" />
     <input type="password" name="password"placeholder="Password" />
     <a href="#">Forgot your password?</a>
     <button>Sign In</button>
 </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
      <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>

          <button class="ghost" id="signIn">Sign In</button>
      </div>
      <div class="overlay-panel overlay-right">
          <h1>Build Your Dream Home!</h1>
          <p>Join us and start shopping now</p>

          <button class="ghost" id="signUp">Sign Up</button>
      </div>
  </div>
    </div>
</div>

<script src="JS/login.js"></script>
<script type="text/javascript">
<?php
  if (isset($_GET['signup'])) {
    echo 'document.getElementById("signUp").click();';
  }
?>
</script>
      <footer style="position: absolute; margin-bottom: -200px;" ><hr style="width: 60%;">BABYLON &copy; 2020 &#124; Web-Based Systems
     <p><img class="logo1" src="images/white_logo.png" width="170px" height="auto"></p></footer>
  </body>

</html>
