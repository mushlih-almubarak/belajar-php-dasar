<?php require 'Functions.php' ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <li>
            <label for="username">Username: </label>
            <input type="text" id="username" name="username">
        </li>
        <li>
            <label for="password">password: </label>
            <input type="text" id="password" name="password">
        </li>
        <br>
        <button type="submit" name="login">Login</button>
    </form>
    <br>
    <span>Belum punya akun? <a href="Register.php">Daftar disini</a></span>
</body>
</html>