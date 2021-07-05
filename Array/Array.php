<?php
    // Array adalah variabel yang dapat menampung banyak isi/data
    // Value/elemen array dimulai dari 0

    // Membuat array dengan cara lama (Sebelum versi 5.4)
    $hari = array("Ahad", "Senin", "Selasa", "Rabu");

    // Membuat array dengan cara baru (Setelah versi 5.4)
    $bulan = ["Maret", "April", "Mei"];
    // Elemen array boleh berbeda-beda tipe datanya 
    $acak = ["tulisan", 645, true];

    // Untuk mencetak array pakai print_r, bukan echo
    print_r($bulan);
    echo "<br>";
    // Untuk mencetak hanya satu saja elemen arraynya, bisa kita gunakan: echo $nama_variabel[NomorElemenYangInginDiCetak]
    echo $acak[1];
    echo "<br>";

    // Untuk menambahkan elemen (Secara terpisah) pada array yang telah kita buat, gunakan cara ini:
    $bulan[] = "Juni";
    $bulan[] = "Juli";
    print_r($bulan);
?>