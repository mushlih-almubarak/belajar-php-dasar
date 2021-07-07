<?php
$profil = [
        [
            "gambar" => "Mushlih.jpg",
            "depan" => "Mushlih",
            "tengah" => null,
            "belakang" => "Almubarak"
        ],
        [
            "gambar" => "Hadziq.png",
            "depan" => "Muhammad",
            "tengah" => null,
            "belakang" => "Alhadziq"
        ],
        [
            "gambar" => "Syakira.png",
            "depan" => "Khadijah",
            "tengah" => "Asy",
            "belakang" => "Syakira"
        ]
    ]
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Profile</title>
</head>
<body>
    <h1>List Profil</h1>
    <?php foreach ($profil as $prof) : ?>
        <ul>
            <li>Gambar: 
            <img src="../../img/<?= $prof["gambar"] ?>" alt="Gambar Profil" width="100" height="100"></li>
            <li>Nama Depan: <?= $prof["depan"] ?></li>
            <li>Nama Tengah: <?= $prof["tengah"]?></li>
            <li>Nama Belakang: <?= $prof["belakang"]?></li>
            <a href="Profile.php?nama_depan=<?= $prof["depan"] ?>&nama_tengah=<?= $prof["tengah"] ?>&nama_belakang=<?= $prof["belakang"] ?>&gambar=<?= $prof["gambar"] ?>">Kunjungi Profil</a>
        </ul>
        <br>
        <?php endforeach ?>
</body>
</html>