<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    
    include '../config/db.php';

    $query = "INSERT INTO `users`(`name`, `email`, `pwd`) VALUES ('$name','$email','$pwd')";
    echo $query;
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    header("location: ../login.php");
?>
