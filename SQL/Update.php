<?php require 'Query.php'; ?>

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
    <h2><?php require 'Validasi.php' ?></h2>
    <form method="POST">
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
                <input type="gambar" id="gambar" value="<?= $get_id["Gambar"] ?>" name="foto">
            </li>
            <br>
            <button type="submit" name="update">Update Data</button>
        </ol>
    </form>
    <a href="Index.php">Kembali ke daftar Mahasiswa</a>
</body>
</html>