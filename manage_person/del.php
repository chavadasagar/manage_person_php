<?php 
    $id = $_GET['id'];

    echo $id;

    include "connection.php";

    mysqli_query($con,"delete from std where id=$id");

    header("location:show.php");
?>