<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<?php
    $id = $_GET['id'];


    include "connection.php";
    
    $sql  = "select * from std where id=$id";
    $show = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($show))
    {
        $name = $row[1];
        $email = $row[2];
        $phno = $row[3];
        $address = $row[4];
        $ct = $row[7];
        $zip = $row[8];
        $about = $row[5];
    }
    
?>
<body>
    
    <div class="jumbotron container">
        <h1>Update</h1>
    </div>
    <div class="container mt-5">
    <form method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name:</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Name" name="name" value="<?php echo $name?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" value="<?php echo $email?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Phone No:</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Phone No" name="phno" value="<?php echo $phno ?>">
  </div>
  <div class="form-group">
    <label for="inputAddress">Address:</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="<?php echo $address?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City:</label>
      <input type="text" class="form-control" id="inputCity" name="ct" value="<?php echo $ct?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip">Zip:</label>
      <input type="text" class="form-control" id="inputZip" name="zip" value="<?php echo $zip?>">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">About:</label>
    <input type="text" class="form-control" name="about" id="inputZip"  value="<?php echo $about?>">
     
  </div>
  
  <input type="submit" name="up" class="btn btn-primary" value="Update">
  <a href="index.php"class="btn btn-primary">add</a>
  <a href="show.php" class="btn btn-danger">cancal update</a>
</form>
    </div>


<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php 
    if(isset($_POST['up']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phno = $_POST['phno'];
        $ct = $_POST['ct'];
        $zip = $_POST['zip'];
        $about = $_POST['about'];
       
       $update = "UPDATE `std` SET 
       `id`='".$id."',`nm`='".$name."',`email`='".$email."',`phoneno`='".$phno."',`aadr`='".$ct."',`about`='".$about."',`ct`='".$ct."',`zip`='".$zip."' WHERE id=$id";
       
       mysqli_query($con,$update);
       
       header("location:show.php");
    }

?>