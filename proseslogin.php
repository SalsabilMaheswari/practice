<?php
session_start();
require_once("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$level = "Admin"; 
$sql = "SELECT * FROM user WHERE username = '$username'";
$query = $db->query($sql);
$hasil = $query->fetch_assoc();
if ($query->num_rows == 0) {
    echo "<div align='center'>Username Belum Terdaftar! <a 
href='login.php'>Back</a></div>";
} else {
    if ($pass <> $hasil['password']) {
        echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
    } else {
        if($level == $hasil['level']) {
            $_SESSION['username'] = $hasil['username'];
            $_SESSION['level'] = $hasil['level'];
            header('location:index.php');
            }
            else{ 
        $_SESSION['username'] = $hasil['username'];
        $_SESSION['level'] = $hasil['level'];
        header('location:haluser.php');
            }
    }
}
