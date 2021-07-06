<?php
// Untuk membuat nama elemennya secara kustom (tidak memakai index yang dimulai dari 0), maka gunakan kode dibawah ini. Tidak harus menggunakan string, bisa juga menggunakan angka.
    $siswa = ["nama" => "Mushlih", "kelas" => "1 SMA", "Sekolah" => "Ma'had Ilmi"];
    echo $siswa["kelas"]; // Huruf besar dan kecil harus sama dengan nama kustomnya
    echo "<br>";
    $nama = [
        [
            "depan" => "Mushlih",
            "tengah" => null,
            "belakang" => "Almubarak"
        ],
        [
            "depan" => "Muhammad",
            "tengah" => null,
            "belakang" => "hadziq"
        ],
        [
            "depan" => "Khadijah",
            "tengah" => "Asy",
            "belakang" => "Syakira"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
<br>
    <h1>Daftar Nama</h1>
    <?php foreach ($nama as $nam) :?>
    <ul>
    <li>Nama Depan: <?php echo $nam["depan"] ?></li>
    <li>Nama Tengah: <?php echo $nam["tengah"] ?></li>
    <li>Nama Belakang: <?php echo $nam["belakang"] ?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>