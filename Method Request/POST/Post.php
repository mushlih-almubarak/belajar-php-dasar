<?php
    /*  POST digunakan untuk form.
        $_POST mirip seperti $_GET, tapi ia mengirim datanya di balik layar, dan bukan di URLnya */
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <h1>Form Nama</h1>
    <!--    Action: Kirim data ke halaman mana setelah user mengisi form | Defaultnya adalah dikirim ke halaman itu sendiri.
            Method: Cara yang digunakan untuk mengirim form, bisa menggunakan GET ataupun POST-->
    <form action="Halo.php" method="POST"> 
    <!--atribut "name=value" harus diisi agar method requestnya dapat bekerja-->
    <li><label for="nama"></label>Nama: <input type="text" name="nama_lengkap" id="nama"></li>
    <br>
    <button type="submit">Kirim Data</button>
    </form>
</body>
</html>