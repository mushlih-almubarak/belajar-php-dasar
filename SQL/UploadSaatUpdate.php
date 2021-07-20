<?php
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
?>