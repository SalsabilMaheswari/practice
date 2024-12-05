<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
} else {
    $username = $_SESSION['username'];
    $level = $_SESSION['level'];
}
?>
<title>Halaman User</title>
<div align='center'>Selamat Datang <b><?php echo $username; ?></b>, <?php echo $level; ?> 
<a href="logout.php"><b>Logout</b></a></div>