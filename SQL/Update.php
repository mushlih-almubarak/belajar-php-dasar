<?php 
    require 'Query.php';
    // Redirect jika tidak ada data di URL
    if (!isset($_GET["id"])) { 
        header("Location: Index.php");
    }
    ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>
    <form method="POST" enctype="multipart/form-data">
        <ol>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" id="nama" name="nama" value="<?= $get_id["Nama"] ?>" required>
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="email" id="email" name="email" value="<?= $get_id["Email"] ?>" required>
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" id="Jurusan" name="jurusan" value="<?= $get_id["Jurusan"] ?>" required>
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <br>
                <img src="../Img/<?= $get_id["Gambar"] ?>" alt="foto profil" width="100" height="100">
                <br>
                <input type="file" id="gambar" name="foto">
            </li>
            <br>
            <button type="submit" name="update">Update Data</button>
        </ol>
    </form>
    <a href="Index.php">Kembali ke daftar Mahasiswa</a>
</body>
</html>