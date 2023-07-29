<?php
    include '../config/db.php';
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $type = isset($_POST['type']) ? $_POST['type'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $target_dir = "../uploads/";

   $picName = $_FILES['image']['name'];
   if (move_uploaded_file($_FILES['image']['tmp_name'] , $target_dir.basename($_FILES['image']['name']))) {
   echo "file moved";
   }else {
    echo "not uploaded";
   }
    $query = "INSERT INTO `product`(`name`, `type`, `price`,`image`) VALUES ('$name','$type','$price' , '$picName')";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    header('location: ../product-list.php');
?>