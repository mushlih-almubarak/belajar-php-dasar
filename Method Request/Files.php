<?php
    // Untuk mengelola file yang diopload

    // Melihat hasil setelah filenya diupload
    if (isset($_POST["submit"])) {
        var_dump($_POST);
        var_dump($_FILES);
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_FILES</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data"> <!--Tambahkan: enctype="multipart/form-data agar dapat menggunakan $_FILES"-->
        <input type="text" name="nama">
        <br>
        <input type="file" name="file">
        <br>
        <button type="submit" name="submit">Kirim data</button>
    </form>
</body>
</html>