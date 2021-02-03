<?php session_start(); ?>
<?php require './php/core.inc.php'; ?>

<?php
 if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $price = $_POST['price'];
  $quantity= $_POST['quantity'];
  $category = $_POST['category'];
  $description = $_POST['desc'];
  $target_dir = "images/";  // the folder name you have to write it like this folder_name/
  $target_file = rand(0,99999999)."-";
  $uploadOk = 1;
  $FileType = strtolower(pathinfo(basename($_FILES["file"]["name"]),PATHINFO_EXTENSION));
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["file"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($FileType != "jpg") {
      echo "Sorry, only jpg files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      // $new_location = $target_dir.$target_file;
      if ((move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir.$target_file."1.jpg")) && (move_uploaded_file($_FILES["file1"]["tmp_name"],$target_dir.$target_file."2.jpg")) && (move_uploaded_file($_FILES["file2"]["tmp_name"],$target_dir.$target_file."3.jpg"))
      && (move_uploaded_file($_FILES["file3"]["tmp_name"],$target_dir.$target_file."4.jpg"))) {
        // $file1 = $_FILES['file']['name'];
        $email = "user@gmail.com";
        $i_query = "INSERT INTO product ( name ,  price ,  quantity ,  category ,  image ,  added_by ,  description )
        VALUES ('$name', '$price', '$quantity', '$category', '$target_file', '$email', '$description')" ;
        // $u_query = "UPDATE product SET image='$file1'  WHERE p_id=3";
        $result = $con->query($i_query) or die($con->error);
        $file_name = basename( $_FILES["file"]["name"]);
          echo "The files ". $file_name. " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
 }

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>upload image</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label>Product Name:</label>
        <input type="text" name="name"><br><br>
        <label>Product Price:</label>
        <input type="text" name="price"><br><br>
        <label>Product Quantity:</label>
        <input type="text" name="quantity"><br><br>
        <label>Category:</label>
        <input type="text" name="category"><br><br>
        <label for="file">Image 1:</label>
        <input type="file" name="file" id="file"><br><br>
        <label for="file">Image 2:</label>
        <input type="file" name="file1" id="file"><br><br>
        <label for="file">Image 3:</label>
        <input type="file" name="file2" id="file"><br><br>
        <label for="file">Image 4:</label>
        <input type="file" name="file3" id="file"><br><br>
        <label>Product Description:</label>
        <input type="text" name="desc"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
