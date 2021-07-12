<?php
    // Koneksi ke database: "nama_host", "usernameMySQL", "passwordMySQL", "nama_database"
    $db = mysqli_connect("localhost", "root", "", "php_dasar");

    /* Perintah untuk mengambil (fetch) data dari tabel di database 
    mysqli_fetch_row() = Mengembalikan array numerik
    mysqli_fetch_assoc() = Mengembalikan array asosiatif, nama indexnya berdasarkan nama field di databasenya
    mysqli_fetch_array() = Mengembalikan keduanya
    */

    // isi dari parameter $query ada di baris ke 3 file index.php di folder ini
    function perintah($query) {
        global $db;
        $hasil = mysqli_query($db, $query); // Melakukan query, $query diambil dari parameter function "perintah"
        
        $rows = []; // Membuat array asosiatif baru yang belum ada isi
        while ($row = mysqli_fetch_assoc($hasil)) {
            $rows[] = $row;
        }
        return $rows;
    }
?>