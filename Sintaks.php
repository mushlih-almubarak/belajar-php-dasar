<?php
// Standar output pada PHP:
/* 
echo "hello";
print "hello";
print_r("Hello");
var_dump("Hello");
*/
echo "Ini hari Jum'at.";
echo 'Hello';
print "Selamat Datang";
// Jika menulis angka tidak perlu pakai titik dua
print 12;

// Ini akan mencetak sekaligun memberitahu jumlah semua karakter (kecuali titik duanya) yang ada pada yang di cetaknya
var_dump("Hello World!");

// Bisa utk mencetak array ataupun string
print_r("Hello");

// Membuat enter
echo "<br>";
echo nl2br("baris \n baru");
echo "<br>";
echo "Baris <br> Baru";
echo "<br>";
echo 1, "<br>", 2, "<br>";

// Memberi koma pada angka
echo number_format("100000000");
echo "<br>";
// Aslinya outputnya 1.5 , tapi "titik"nya kita ganti ke koma
echo str_replace('.', ',', 1.5);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penulisan PHP</title>
</head>

<body>
    <h1>PHP Dapat Ditulis Di Dalam HTML, dan HTML Bisa Ditulis di Dalam PHP</h1>
    <h2>Hello <?php echo "World"; ?></h2>
    <?php
    echo "<h2>Hello World</h2>"
    ?>
</body>

</html>