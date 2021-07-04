<?php
    // Bisa menggunakan parameter ataupun tidak, parameternya bisa ada defaultnya ataupun tidak
    function salam($waktu, $nama = "Admin") {
        echo "Selamat $waktu, $nama";
    }

    // Jika functionnya menggunakan parameter, maka tulis SEMUA isi parameternya di sini, harus sama urutannya dengan yang di function yang kita buat
    echo salam("Pagi", "Mushlih");
    echo "<br>";
    // Jika parameternya tidak ditulis, maka yang diambil adalah parameter defaultnya
    echo salam("Siang");
?>