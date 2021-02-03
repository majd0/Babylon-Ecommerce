<?php session_start(); ?>
<?php include 'includes/Header.inc.php';
 require './php/core.inc.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="includes/Footer_Header.css">
    <link rel="stylesheet" href="css/adminPanel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  </head>
  <body>

    <div id="dashbo">
      <h2>Admin Panel</h2>
        <form  action="#" method="post">
          <p><button id="buttons" type="submit" name="viewArticles">View Products_W</button></p>
          <p><button id="buttons" type="submit" name="addArticle1">Add Product_W</button></p>
          <p><button id="buttons" type="submit" name="deleteProduct1">Delete Product_W</button></p>
          <p><button id="buttons" type="submit" name="change1">Change Price_W</button></p>
          <p><button id="buttons" type="submit" name="addUser1">Add User</button></p>
          <p><button id="buttons" type="submit" name="viewUsers">View Users_W</button></p>
          <p><button id="buttons" type="submit" name="viewOrders">View Orders_W</button></p>

        </form>
    </div>

    <div id="apanel">
        <h1>Welcome to the Admin Panel Dashboard</h1>
        <img width="50%;"src="images/babylon-transparent.png" alt="">
    <?php
    if (isset($_POST['addArticle1'])){
      ?>
      <script type="text/javascript" language="Javascript">window.open("./Upload.php", "window name","height=500,width=400,modal=yes,alwaysRaised=yes");</script>

       <?php


    }
    if (isset($_POST['addUser1'])){
      echo "<br>";?>

      <form id="addingForm" action="#" method="post">
        <p> <label>Email:</label><input type="email" name="email" value="alawlqi@email.com"> </p>
        <p> <label>Password:</label><input type="password" name="pass" value=""> </p>
        <p> <label>First Name:</label><input type="text" name="fName" value=""> </p>
        <p> <label>Last Name:</label><input type="text" name="Lname" value=""> </p>
        <p> <label>Phone:</label><input type="tel" name="phone" value=""> </p>
        <p> <label>Date of Birth:</label><input type="date" name="dob" value=""> </p>
        <p> <label>Is Admin</label><input type="number" name="isAdmin" value=""> </p>
        <button id="buttons" type="submit" name="addUser">Add User</button>
      </form>
      <?php

      if (isset($_POST['addUser'])){
      //   echo "<h1>hello</h1>";
        $email = "alawlqi@email.com";
        $pass = $_POST['pass'];
        $fName= $_POST['fName'];
        $lName = $_POST['Lname'];
        $phone = $_POST['phone'];
        $DoB = $_POST['dob'];
        $isAdmin = $_POST['isAdmin'];

                      $sql = "INSERT INTO product (email, pass, fName, lName, phone, DoB, isAdmin)
                      VALUES ('$email','$pass', '$fName', '$lName', '$phone','$DoB', '$isAdmin')";
                      // -- VALUES ('15','table', '500', '20', 'kitchen','table-image', 'alawlqi@email.com', 'dinner table')

                      //values needed to be assigned properly. This was just test, but p_id I guess makes problem

                      if ($conn->query($sql) === TRUE) {
                          echo "<br><h3>New record created successfully<br><h3>";
                      } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                      }

                      $conn->close();
      }
    }
      if (isset($_POST['viewUsers'])) {

        $sql = "SELECT * FROM user";
        $result = $conn-> query($sql);
        echo "<h2>BABYLON USERS<br></h2>";
        ?>
        <h3>All Users in the System</h3>
  <table id="userTable" border="1">
    <tr>
      <th>EMAIL</th>
      <th>PASSWORD</th>
      <th>FIRST NAME</th>
      <th>LAST NAME</th>
      <th>PHONE</th>
      <th>DATE OF BIRTH</th>
      <th>IS ADMIN</th>
    </tr>
    <?php
        if ($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
              echo "<tr><td>".$row['email'].
                   "</td><td>".$row['pass'].
                   "</td><td>".$row["fName"].
                   "</td><td>".$row["lName"].
                   "</td><td>".$row["phone"].
                   "</td><td>".$row["DoB"].
                   "</td><td>".$row["isAdmin"]."</td></tr>";
            }
            echo "</table>";
          }
          else {
            echo "<h1>Database is empty!</h1>";
          }
        }

    if (isset($_POST['viewArticles'])) {

      $sql = "SELECT * FROM product";
      $result = $conn-> query($sql);
      echo "<h2>BABYLON DATABASE<br></h2>";
      ?>
      <h3>All Articles in Database</h3>
      <table id="productTable" border="1">
      <tr>
        <th>PRODUCT ID</th>
        <th>PRODUCT NAME</th>
        <th>PRICE</th>
        <th>QUANTITY</th>
        <th>CATEGORY</th>
        <th>IMAGE</th>
        <th>ADDED BY</th>
        <th>DESCRIPTION</th>
      </tr>
  <?php
      if ($result-> num_rows > 0) {
          while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>".$row['p_id'].
                 "</td><td>".$row['name'].
                 "</td><td>".$row["price"].
                 "</td><td>".$row["quantity"].
                 "</td><td>".$row["category"].
                 "</td><td>".$row["image"].
                 "</td><td>".$row["added_by"].
                 "</td><td>".$row["description"]."</td></tr>";
          }
          echo "</table>";
        }
        else {
          echo "<h1>Database is empty!</h1>";
        }
      }

  if (isset($_POST['viewOrders'])) {

    $sql = "SELECT * FROM orders";
    $result = $conn-> query($sql);
    echo "<h2>BABYLON ORDERS<br></h2>";
    ?>
    <h3>All Orders in the System</h3>
    <table id="orderTable" border="1">
    <tr>
      <th>ORDER ID</th>
      <th>ORDERED ITEMS</th>
      <th>DATE PLACED</th>
      <th>ADDRESS</th>
      <th>STATUS</th>
      <th>USER'S EMAIL</th>
      <th>TRACK</th>
    </tr>
<?php
    if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
          echo "<tr><td>".$row['o_id'].
               "</td><td>".$row['ordered_items'].
               "</td><td>".$row["date_placed"].
               "</td><td>".$row["Address"].
               "</td><td>".$row["Status"].
               "</td><td>".$row["cust_email"].
               "</td><td>".$row["track"]."</td></tr>";
        }
        echo "</table>";
      }
      else {
        echo "<h1>Database is empty!</h1>";
      }
    }
?>
      <?php
       if (isset($_POST['deleteProduct1'])) { ?>
        <form action="#" method="post">
          <label>Enter Product ID: </label> <input type="text" name="pr_id" value="">
          <p><button id="buttons" type="submit" name="deleteProduct">Delete Product</button></p>

        </form>
      <?php

         if (isset($_POST['deleteProduct'])) {
               $p_id = $_POST['pr_id'];
               $sql = "DELETE FROM product WHERE p_id=$p_id";

               if ($conn->query($sql) === TRUE) {
               echo "Record deleted successfully";
             } else {
               echo "Error deleting record: " . $conn->error;
               }

               $conn->close();
        }
      }

      ?>
      <?php if (isset($_POST['change1'])) { ?>
          <form action="#" method="post">
          <label>Product ID: </label>  <input type="number" name="p_id" value="">
          <label>New Price:</label>  <input type="text" name="price" value="">
          <button id="buttons" type="submit" name="change">Change Price</button>
          </form>
      <?php
   if (isset($_POST['change'])) {
        $p_id = $_POST['p_id'];
        $price = $_POST['price'];
        $sql = "UPDATE product SET price=$price WHERE p_id=$p_id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $conn->close();
  }
}
?>
</div>
    <footer><?php include 'includes/Footer.inc.php'; ?></footer>

  </body>
</html>
