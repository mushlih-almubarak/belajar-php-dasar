<?php
// Cek apakah datanya ada di URL?
if ( !isset($_GET["nama_depan"]) || !isset($_GET["nama_depan"]) || !isset($_GET["nama_belakang"]) || !isset($_GET["gambar"]) ) {
    // Redirect
    header("Location: Daftar Nama.php");
    exit; // Agar kode dibawahnya tidak dijalankan
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Orang</title>
</head>
<body>
    <h1><?php
    echo $_GET["nama_depan"]. " ";
    echo $_GET["nama_tengah"]. " ";
    echo $_GET["nama_belakang"];
    ?></h1>
    <ol>
        <li>Foto Profil: <img src="../../img/<?= $_GET["gambar"] ?>" alt="Foto" width="100" height="100"></li>
        <li>Nama Depan: <?= $_GET["nama_depan"] ?></li> <!--nama_depan ngambil dari variabel $_GET yang di tulis di URL di file daftar nama-->
        <li>Nama Tengah: <?= $_GET["nama_tengah"] ?></li>
        <li>Nama Belakang: <?= $_GET["nama_belakang"] ?></li>
        <br>
        <a href="Daftar Nama.php">Kembali ke daftar nama</a>
    </ol>
</body>
</html>