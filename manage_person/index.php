<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="jumbotron container">
        <h1>Home</h1>
    </div> 

    <div class="container mt-5">
    <form method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name:</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Name" name="name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone No:</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Phone No" name="phno">
  </div>
  <div class="form-group">
    <label for="inputAddress">Address:</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City:</label>
      <input type="text" class="form-control" id="inputCity" name="ct">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Zip:</label>
      <input type="text" class="form-control" id="inputZip" name="zip">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">About:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="about"></textarea>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <input type="submit" name="add" class="btn btn-primary" value="add">
  <input type="submit" name="manage" class="btn btn-primary" value="Manage">
</form>
    </div>

<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php 
include("connection.php");
  if(isset($_POST['add']))
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phno = $_POST['phno'];
    $ct = $_POST['ct'];
    $zip = $_POST['zip'];
    $about = $_POST['about'];


    $sql = "INSERT INTO `std`(`nm`, `email`, `phoneno`, `aadr`, `about`, `ct`, `zip`) VALUES 
    ('".$name."','".$email."','".$phno."','".$address."','".$about."','".$ct."','".$zip."')";
   
    mysqli_query($con,$sql);
    echo mysqli_error($con);

    
    

  }
  if(isset($_POST['manage']))
  {
    header("location:show.php");
  }
?>