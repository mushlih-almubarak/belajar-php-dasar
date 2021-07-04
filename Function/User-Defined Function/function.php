<?php
    // Bisa menggunakan parameter ataupun tidak, parameternya bisa ada defaultnya ataupun tidak
    function salam($waktu, $nama = "Admin") {
        echo "Selamat $waktu, $nama";
    }

    // Salam berdasarkan waktu
    function dapatkanWaktu($name) {
        date_default_timezone_set("Asia/Riyadh");

        $jam = date("H");
        if ($jam >= 4 && $jam <= 12) {
            echo "Selamat Pagi, $name";
        } elseif ($jam >= 13 && $jam <= 15) {
            echo "Selemat Siang, $name";
        } elseif ($jam >= 16 && $jam <= 18) {
            echo "Selamat Sore, $name";
        } elseif ($jam >= 19 && $jam <= 3) {
            echo "Selamat Malam, $name";
        }
    }

    // Jika functionnya menggunakan parameter, maka tulis SEMUA isi parameternya di sini, harus sama urutannya dengan yang di function yang kita buat
    echo salam("Pagi", "Mushlih");
    echo "<br>";
    // Jika parameternya tidak ditulis, maka yang diambil adalah parameter defaultnya
    echo salam("Siang");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <br>
    <h1>Sapaan Sesuai Waktu</h1>
    <br>
    <?php echo dapatkanWaktu("Mushlih")?></h2>
</body>
</html>