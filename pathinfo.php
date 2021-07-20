<?php
    if (isset($_POST["kirim"])) {
        $info_gambar = pathinfo($_FILES["gambar"]["name"]);
        var_dump($info_gambar["extension"]); // Menampilkan info-info yang ada di nama filenya
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