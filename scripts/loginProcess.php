<?php
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    include '../config/db.php';

    $query = "SELECT * FROM `users` WHERE email = '$email' AND pwd = '$pwd'";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($res);
    if ($row) {
        session_start();
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['role'] = $row['role'];
        if ($row['role'] == 'user') {
            header('location: ../index.php');
        } else {
            header('location: ../dashboard.php');
        }
    } else {
        echo'
        <script>
            alert("Incorrect username / password");
            window.location.href = "../login.php";
        </script>
        ';
       
    }
?>


