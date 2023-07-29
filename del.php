<?php 

include('config/db.php');
$id = $_GET['data'];
$sql = "DELETE FROM `product` WHERE `id` =  '$id'";
$result = mysqli_query($conn , $sql);
if ($result) {
    header('location:product-list.php');
}


?>