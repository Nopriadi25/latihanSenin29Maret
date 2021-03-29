<?php
include 'koneksi.php';
session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

$cekDataUser = "SELECT * FROM tb_user WHERE (username = '$user' OR email = '$user') AND password = '$pass' ";
$result = $conn->query($cekDataUser);

if ($result->num_rows > 0) {
    $_SESSION ['login'] = 1;
    $_SESSION ['pesan_login'] = 'Welcome';
    header("location: ../latihanDatabase/hal_bk_tamu.php");
}else{
    $_SESSION ['login'] = 0;
    $_SESSION ['pesan_login'] = 'Failed, invalid username or password';
    header("location: halLogin.php");
}
?>