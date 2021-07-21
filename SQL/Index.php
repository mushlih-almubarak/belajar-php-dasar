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
    <form>
        <label for="pencarian">Cari Data</label>
        <input type="text" name="cari" id="pencarian" size="30" value="<?php if (isset($_GET['cari'])) {echo $_GET['cari'];} ?>" autofocus>
        <button type="submit">Cari</button>
        <br><br>
    </form>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th class="warna">No.</th>
            <th class="warna">Aksi</th>
            <th class="warna">Gambar</th>
            <th class="warna">Nama</th>
            <th class="warna">Email</th>
            <th class="warna">Jurusan</th>
        </tr>
        <?php if (!isset($_GET["cari"])) : ?>
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
                <?php endforeach; ?>
            </table>
            <br>
            <a href="../Sistem Login/Logout.php">logout</a>
        <?php else : ?>
            <?php $no = 1; ?>
            <?php foreach ($cari_data as $data) : ?>
                <tr>
                    <td class="warna"><?= $no; ?></td>
                    <td>
                        <a href="update.php?id=<?= $data["Id"] ?>">Ubah</a>
                        <span>|</span>
                        <a href="hapus.php?id=<?= $data["Id"]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?') /*Konfirmasi sebelum menghapus datanya dengan js*/">Hapus</a>
                    </td>
                    <td>
                        <img src="../Img/<?= htmlspecialchars($data["Gambar"]); ?>" alt="Profil" width="50" height="50">
                    </td>
                    <td><?= htmlspecialchars($data["Nama"]); ?></td>
                    <td><?= htmlspecialchars($data["Email"]); ?></td>
                    <td><?= htmlspecialchars($data["Jurusan"]); ?></td>
                </tr>
            <?php $no++; ?>
            <?php endforeach ?>
                </table>
            <br>
            <a href="index.php">Kembali ke semua daftar mahasiswa</a>
            <br>
            <a href="../Sistem Login/Logout.php">logout</a>
        <?php endif; ?>
</body>
</html>