<?php
require_once "koneksi.php" ;

session_start();
unset($_SESSION['']);
session_destroy();
header("location: halLogin.php");
?>