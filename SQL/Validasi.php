<?php
    // Halaman validasi untuk penambahan.php
    // Koneksi ke database
    $db = mysqli_connect("localhost", "root", "", "php_dasar") ;

    // Cek apakah data telah ditambahkan
    if (isset($_POST["kirim"])) {
        // Variabel untuk upload gambar
        $nama_gambar = $_FILES["foto"]["name"];
        $ukuran_gambar = $_FILES["foto"]["size"];
        $tempat_sementara_gambar = $_FILES["foto"]["tmp_name"];

        // Ekstensi gambar yang diperbolehkan
        $ekstensi_gambar_valid = ["jpg", "jpeg", "png", "gif"]; // Menggunakan array
        $ekstensi_gambar = pathinfo($nama_gambar);
        $ekstensi_gambar = $ekstensi_gambar["extension"];

        if (!in_array($ekstensi_gambar, $ekstensi_gambar_valid)) {
            echo "<script>alert('Yang Anda upload bukan gambar')</script>";
            return false;
        }

        // Ukuran gambar maksimal
        if ($ukuran_gambar > 1000000) {
            echo "<script>alert('Maaf, ukuran gambar teralu besar')</script>";
            return false;
        }

        // Pindahkan file gambar ke folder img
        move_uploaded_file($tempat_sementara_gambar, "../Img/$nama_gambar");

        // Mengubah nama filenya secara acak agar tidak terjadi duplikat
        $tanpa_ekstensi = pathinfo("../Img/$nama_gambar");
        $tanpa_ekstensi = $tanpa_ekstensi["filename"];
        $asli = "../Img/$nama_gambar";
        $ubah = "../Img/$tanpa_ekstensi" . uniqid() . "." . $ekstensi_gambar;
        rename($asli, $ubah);

        // Variabel untuk query
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $jurusan = $_POST["jurusan"];

        $queri = "INSERT INTO mahasiswa VALUES ('', '$ubah', '$nama', '$email', '$jurusan')"; // Urutannya harus sesuai urutan field yang ada di tabel dbnya

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