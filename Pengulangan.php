<?php
// Jenis pengulangan di PHP
/* 
1. do
2. while
3. do.. while
4. foreach (khusus array)
*/
// do, sintaksnya: for ($namaVariabel = jumlahAwalPengulangan; $namaVarabelYangTadi < angkaMaksimalPengulangan; %namaVariabelTadiTambahSatuSetiapPengulangan)
// Variabel ulang adalah 0, jika 0 kurang da 5, maka tambahkan terus 1 pada 0-nya, hinggan jumlah 0 nya menjadi sama/tidak lebih besar dari 5 
for( $ulang = 0; $ulang < 5; $ulang++ ) {
    echo "Hello World <br>"; // Yang diulang
}

//While, angka awal dan $variabel++ ditulis di luarnya
// While, akan dijalankan dengan cara: Cek dahulu kondisinya, jika true jalankan, jika false berenti (Cek dulu kondisinya, baru jalankan jika true)
$angka1 = 0;
while ( $angka1 < 10 ) {
    echo "Hello World1! <br>";
$angka1++;
}

// Sedangka do while akan dijalankan, dengan cara memprintnya dahulu (mau true atau false), kemudian baru mengecek kondisinya, jika true dilanjutkan, jika false berhenti
$angka2 = 0;
do {
    echo "Hello World2! <br>";
    $angka2++;
} while ($angka2 < 10);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
</head>
<body>
    
<h1>Contoh Pengulangan Pembuatan Tabel Menggunakan PHP</h1>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <?php
// 1 = Nomor awal barisnya | Tanda sama dengan (=) setelah (<) maksudnya, agar $baris masih ditambahkan 1 ketika $baris telah sama dengan (=) angka 3 
            for ( $baris = 1; $baris <= 3; $baris++ ) {
                echo "<tr>";
                for ( $kolom = 1; $kolom <= 5; $kolom++ ) {
                    echo "<td>$baris,$kolom</td>"; // Isi dari tabelnya adalah, "nomor baris (diambil dari variabel $baris)", "nomor kolom (diambil dari variabel $kolom)"
                }
                echo "</tr>";
            }
        ?>
    </tr>
</table>
</body>
</html>