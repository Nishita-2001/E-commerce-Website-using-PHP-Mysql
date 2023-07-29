<!-- Template Head Start -->
<?php
session_start();
// if (!isset($_SESSION['id'])) {
//     header('location: login.php');
// }
    $pageName = 'Dashboard';
    include 'partials/head.php';
    include 'partials/navbar.php';
?>
<!-- Template Head End -->
<!-- Page Body Start -->
<?php
    include 'partials/modules.php';
?>
<!-- Page Body End -->
<!-- Template Body Start -->
<?php
    include 'partials/footer.php';
    include 'partials/scripts.php';
?>
<!-- Template Body End -->