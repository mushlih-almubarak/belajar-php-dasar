<?php
// Standar output pada PHP:
/* 
echo "hello";
print "hello";
print_r("Hello");
var_dump("Hello");
*/
echo "Ini hari Jum'at. <br>";
echo 'Hello <br>';
print "Selamat Datang <br>";
// Jika menulis angka tidak perlu pakai titik dua
print 12;

// Bisa utk mencetak array ataupun string
print_r("Hello <br>");

// Ini akan mencetak sekaligun memberitahu jumlah semua karakter (kecuali titik duanya) yang ada pada yang di cetaknya
var_dump("Hello World! <br>");

// Variabel pada PHP
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Mushlih";
echo "Nama saya $nama <br>";
// Jika menggunakan titik dua, maka ia tidak bisa membaca isi variabelnya
echo 'Nama saya $nama <br>';


// Operator arimatika: + - * / % (Modulus: Sisa bagi)
echo 7 + 1
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penulisn PHP</title>
</head>
<body>
    <h1>PHP Dapat Ditulis Di Dalam HTML, dan HTML Bisa Ditulis di Dalam PHP</h1>
    <h2>Hello <?php echo "World"; ?></h2>
    <?php
    echo "<h2>Hello World</h2>"
    ?>
    <h2>Selamat datang <?php echo $nama ?></h2>
</body>
</html>