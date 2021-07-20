<?php
    // Koneksi ke database: "nama_host", "usernameMySQL", "passwordMySQL", "nama_database"
    $db = mysqli_connect("localhost", "root", "", "php_dasar");

    /* Perintah untuk mengambil (fetch) data dari tabel di database 
    mysqli_fetch_row() = Mengembalikan array numerik
    mysqli_fetch_assoc() = Mengembalikan array asosiatif, nama indexnya berdasarkan nama field di databasenya
    mysqli_fetch_array() = Mengembalikan keduanya
    */

    // Query untuk menampilkan semua data
    if (!isset($_GET["id"])) {
        function perintah($query) {
            global $db;
            $hasil = mysqli_query($db, $query); // Melakukan query, $query diambil dari parameter function "perintah"
            
            $rows = []; // Membuat array asosiatif baru yang belum ada isi
            while ($row = mysqli_fetch_assoc($hasil)) { // $row adalah variabel baru
                $rows[] = $row; 
            }
            return $rows;
        }

        $mhs = perintah("SELECT * FROM mahasiswa");
    }

    // Query untuk menampilkan semua data berdasarkan id
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $data_id = mysqli_query($db, "SELECT * FROM mahasiswa WHERE Id = $id");
        $get_id = mysqli_fetch_assoc($data_id);
        
        // Query ubah data
        if (isset($_POST["update"])) {
            $nama = $_POST["nama"];
            $email = $_POST["email"];
            $jurusan = $_POST["jurusan"];

            // Mengecek apakah gambar diubah atau tidak
            $error = $_FILES["foto"]["error"];
            if ($error == 4) {
                $query_tanpa_gambar = "UPDATE mahasiswa SET Nama = '$nama', Email = '$email', Jurusan = '$jurusan' WHERE id = $id";
                $update_query = mysqli_query($db, $query_tanpa_gambar);
            } else {
                require 'UploadSaatUpdate.php';
                $query_dengan_gambar = "UPDATE mahasiswa SET Nama = '$nama', Email = '$email', Jurusan = '$jurusan', Gambar = '$ubah' WHERE id = $id";
                $update_query = mysqli_query($db, $query_dengan_gambar);
            }
                // Mengecek apakah data berhasil di update
                if (mysqli_affected_rows($db) > 0) {
                    echo "  <script> alert('Alhamdulillah, Data Berhasil Diubah');
                                document.location.href = 'index.php'; </script>";
                } else {
                    echo "  <script>
                                alert('Maaf, Data Gagal Diubah');
                            </script>";
                }
            }
    }

    // Query untuk pencarian
    if (isset($_GET["cari"])) {
        function pencarian($cari) {
            global $db;
            $hasil_pencarian = mysqli_query($db, $cari);

            $isi = [];
            while ($data = mysqli_fetch_assoc($hasil_pencarian)) {
                $isi[] = $data;
            }
            return $isi;
        }

        $keyword = $_GET["cari"];
        $cari_data = pencarian("SELECT * FROM mahasiswa WHERE Nama LIKE '%$keyword%' OR Email LIKE '%$keyword%' OR Jurusan LIKE '%$keyword%'");
    }
?>