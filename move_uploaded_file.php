<?php
    if (isset($_POST["kirim"])) {
        $sementara = $_FILES["gambar"]["tmp_name"];
        $nama_file = $_FILES["gambar"]["name"];
        move_uploaded_file($sementara, "img/$nama_file"); // Tempat sementara/default (yang dibuat secara otomatis oleh $_FILES) file, tempat file ingin dipindahkan
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Path Info</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="gambar">
        <br>
        <button type="submit" name="kirim">Kirim</button>
    </form>
</body>
</html>