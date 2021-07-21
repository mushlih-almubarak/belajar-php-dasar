<?php require 'Functions.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pendaftaran</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Daftar</h1>
    <form method="POST">
            <label for="username">Username: </label>
            <input type="text" id="username" name="username" required>
            <label for="email">Email: </label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password: </label>
            <input type="password" id="password" name="password" required>
            <!--Konfirmasi password-->
            <label for="password2">Konfirmasi Password: </label>
            <input type="password" id="password2" name="password2" required>
            <br><br>
            <button type="submit" name="daftar">Daftar</button>
    </form>
</body>
</html>