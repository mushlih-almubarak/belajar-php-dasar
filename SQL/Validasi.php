<?php
    // Koneksi ke database
    $db = mysqli_connect("localhost", "root", "", "php_dasar") ;

    // Cek apakah data telah ditambahkan
    if (isset($_POST["kirim"])) {
        $nama = $_POST["Nama"];
        $email = $_POST["Email"];
        $jurusan = $_POST["Jurusan"];
        $gambar = $_POST["Gambar"];

        $queri = "INSERT INTO mahasiswa VALUES ('', '$gambar', '$nama', '$email', '$jurusan')"; // Urutannya harus sesuai urutan field yang ada di tabel dbnya

        mysqli_query($db, $queri); // Melakukan query

        // Mengecek apakah data berhasil ditambahkan
        if (mysqli_affected_rows($db) > 0) {
            echo "Alhamdulillah, data berhasil ditambahkan";
        } else {
            echo "Maaf, data gagal ditambahkan";
        }
    }
?>