<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <div class="jumbotron container">
        <h1>Manage</h1>
    </div>

    <div class="container mt-5">
        <a href="index.php" class="btn btn-primary">add</a>
    </div>

    <div class="container mt-5">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone no</th>
      <th scope="col">address</th>
      <th scope="col">about</th>
      <th scope="col">date</th>
      <th scope="col">city</th>
      <th scope="col">zip</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <?php
    include("connection.php");
    $sql = "select * from std";
    $show = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($show))
    {
  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $row['0'];?></th>
      <td><?php echo $row['1'];?></td>
      <td><?php echo $row['2'];?></td>
      <td><?php echo $row['3'];?></td>
      <td><?php echo $row['4'];?></td>
      <td><?php echo $row['5'];?></td>
      <td><?php echo $row['6'];?></td>
      <td><?php echo $row['7'];?></td>
      <td><?php echo $row['8'];?></td>
      <td class="d-flex p-5">
          <a href="update.php?id=<?php echo $row[0]?>" class="btn btn-primary">update</a>
          &nbsp;&nbsp;&nbsp;
          <a href="del.php?id=<?php echo $row[0]?>" class="btn btn-danger">delete</a>
      </td>
    </tr>
  </tbody>
  <?php } ?>
</table>
</tbody>
</table>
    </div>


<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>