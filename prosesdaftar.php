<?php
require_once("koneksi.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$level = $_POST['level'];
$sql = "SELECT * FROM user WHERE username = '$username'";
$query = $db->query($sql);
if ($query->num_rows != 0) {
    echo "<style>body{
        background-color: #B7D3DF;}</style><div align='center'>Username Sudah Terdaftar! <a href='daftar.php'>Back</a></div>";
} else {
    if (!$username || !$pass) {
        echo "<style>body{
            background-color: #B7D3DF;}</style><div align='center'>Masih ada data yang kosong! <a href='daftar.php'>Back</a>";
    } else {
        $data = "INSERT INTO user VALUES (NULL, '$username', '$pass', '$level')";
        $simpan = $db->query($data);
        if ($simpan) {
            echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='login.php'>Login</a></div>";
        } else {
            echo "<div align='center'>Proses Gagal!</div>";
        }
    }
}
