<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body>
    <!--"nama_lengkap" diambil dari value di atribut form-->
    <h1>Selamat Datang, <?= $_POST["nama_lengkap"] ?></h1>
</body>
</html>