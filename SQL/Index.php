<?php require 'Query.php'; /* Menghubungkan file */ ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        .warna {
            background-color: aqua;
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="penambahan.php">Tambah Data Mahasiswa</a>
    <br><br>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th class="warna">No.</th>
            <th class="warna">Aksi</th>
            <th class="warna">Gambar</th>
            <th class="warna">Nama</th>
            <th class="warna">Email</th>
            <th class="warna">Jurusan</th>
        </tr>
        <?php $nomor = 1; /* Variabel untuk memberikan penomoran dari 1 */?>
        <?php foreach ($mhs as $siswa) : ?>
        <tr>
            <td class="warna"><?= $nomor; ?></td>
            <td>
                <a href="update.php?id=<?= $siswa["Id"] ?>">Ubah</a>
                <span>|</span>
                <a href="hapus.php?id=<?= $siswa["Id"]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?') /*Konfirmasi sebelum menghapus datanya dengan js*/">Hapus</a>
            </td>
            <td>
                <img src="../Img/<?= htmlspecialchars($siswa["Gambar"]); ?>" alt="Profil" width="50" height="50">
            </td>
            <td><?= htmlspecialchars($siswa["Nama"]); ?></td>
            <td><?= htmlspecialchars($siswa["Email"]); ?></td>
            <td><?= htmlspecialchars($siswa["Jurusan"]); ?></td>
        </tr>
        <?php $nomor++; ?>
        <?php endforeach ?>
    </table>
</body>
</html>