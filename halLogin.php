<?php

//code di koneksi.php bisa disatukan menjadi satu dengan halLogin
require_once 'koneksi.php';
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title></title>
    
</head>
<body>
    <div class="container mt-2" >
        <div class="card">
            <div class="card-header">
                
                <?php if (isset($_SESSION['login'])) { ?>
                <?php if ($_SESSION['login'] == 0) { ?>

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $_SESSION ['pesan_login']; ?>
                    </div>
                <?php } ?>

                <?php } ?>
                <h1>Halaman Login</h1>
            </div>

            <div class="card-body">
                <form action="proses.php" method="POST">
                
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Masukkan username/email" required>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-info btn-block" type="submit" value="Submit" class="form-control">
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>