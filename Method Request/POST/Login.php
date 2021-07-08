<?php
    // Cek apakah form telah dikirim
    if (isset($_POST["kirim"])) {
        // Cek apakah username dan password benar atau salah
        if ($_POST["username"] == "Mushlih" && $_POST["password"] == "rahasiaBanget133S") {
            $benar = true;
        } else {
            $salah = false;
        }
    }
?>


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
    <br>
    <?php
        if (isset($benar)) : ?>
            <h2>Selamat datang <?= $_POST["username"] ?></h2>"
        <?php elseif (isset($salah)) : ?>
            <h2>Username atau password salah!</h2>
        <?php endif ?>
    
        <form method="POST">
            <li>
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" required>
            </li>
            <br>
            <li>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" required>
            </li>
            <button type="submit" name="kirim">Kirim</button>
        </form>
</body>
</html>