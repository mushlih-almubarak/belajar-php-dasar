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
            while ($row = mysqli_fetch_assoc($hasil)) {
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
            $gambar = $_POST["foto"];
            
            $query = "UPDATE mahasiswa SET Nama = '$nama', Email = '$email', Jurusan = '$jurusan', Gambar = '$gambar' WHERE id = $id";
            $update_query = mysqli_query($db, $query);
            
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
?>