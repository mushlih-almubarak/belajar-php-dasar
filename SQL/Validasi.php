<?php
    // Koneksi ke database
    $db = mysqli_connect("localhost", "root", "", "php_dasar") ;

    // Cek apakah data telah ditambahkan
    if (isset($_POST["kirim"])) {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $jurusan = $_POST["jurusan"];
        $gambar = $_POST["foto"];

        $queri = "INSERT INTO mahasiswa VALUES ('', '$gambar', '$nama', '$email', '$jurusan')"; // Urutannya harus sesuai urutan field yang ada di tabel dbnya

        mysqli_query($db, $queri); // Melakukan query

        // Mengecek apakah data berhasil ditambahkan
        if (mysqli_affected_rows($db) > 0) {
            echo "  <script> alert('Alhamdulillah, Data Berhasil Ditambahkan');
                        document.location.href = 'index.php'; </script>"; // Meredirect (menggunakan js) ketika tombol "ok" di klik
        } else {
            echo "  <script>
                        alert('Maaf, data gagal ditambahkan');
                    </script>";
        }
    }
?>