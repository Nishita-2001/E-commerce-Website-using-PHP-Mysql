<?php
    include '../config/db.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    
    $query = "UPDATE `db` SET `name`='$name',`type`='$type',`price`='$price',`image`= $image WHERE id='$id'";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    header('location: ../product-list.php');
?>