<?php
$mahasiswa = ["Mushlih Almubarak", 357, "Akidah", "mushlih2004@gmail.com"];
$nama_nama = [["Hadziq", 10, "SIR"], ["Syakira", 14, "BPIBS"], ["Mushlih", 17, "Mahad Ilmi"]];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
<h1>Data</h1>
<br>
    <h2>Daftar Mahasiswa</h2>
    <ul>
    <?php
        foreach ($mahasiswa as $mhs) {
            echo "<li>$mhs</li>";
        }
    ?>
    </ul>
    <br><br><br>
    <h2>Daftar Siswa</h2>
    <?php
        foreach ($nama_nama as $nama) {
            echo "<ul>";
            foreach ($nama as $nm) {
                echo "<li>$nm</li>";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>