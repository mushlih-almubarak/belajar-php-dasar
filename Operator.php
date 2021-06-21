<?php
// Operator pada PHP
// 1. Operator arimatika: + - * / % (Modulus: Sisa bagi, dikurang terus sampai gk bisa di kurang lagi pakai angka segitu)
echo 7 + 1;
echo "<br>";

// 2. Penggabungan string / concat: .
$nama_depan = "Mushlih";
$nama_belakang = "Almubarak";
echo $nama_depan . " " . $nama_belakang;
echo "<br>";

// 3. Assignment: =, +=, -=, *=, /=, %=, .=
$angka = 5;
$angka += 7;
echo $angka;
echo "<br>";

$nama = "Mushlih";
$nama .= " ";
$nama .= "Almubarak";
echo $nama;
echo "<br>";

// 4. Perbandingan: <, >, <= (Kurang dari atau sama dengan), >= (Lebih dari atau sama dengan), == (sama dengan), != (tidak sama dengan)
// Hasilnya adalah boolean
var_dump (5 > 7);
echo "<br>";
var_dump (5 < 7);
echo "<br>";
var_dump (5 >= 5);
echo "<br>";
var_dump (5 == 7);
echo "<br>";
var_dump (5 != 5);
echo "<br>";
// Apakah angka 1 sama dengan string "1"? Hasilnya adalah "true", karena operator ini hanya mengecek nilanya, tidak mengecek tipe datanya
var_dump(1 == "1");
echo "<br>";

// Untuk mengecek apakah nilai-nilai yang di perbandingan sama atau tidak, gunakan "identitas": ===, !==
var_dump(3 === "3");
echo "<br>";
var_dump(3 !== "3");
echo "<br>";
var_dump(3 === 3);
echo "<br>";
var_dump(3 !== 3);
echo "<br>";

// Logika: && (Dan), || (Atau), ! (Tidak/Membalikkan Suatu Nilai Boolean)
/* Apakah 15 lebih besar dari 20? Tidak. DAN. Apakah 40 dikurangi 2 sampai akhir sisanya 0? Ya
Hasilnya adalah "false", karena memakai operator &&, jadi kalau salah satunya aja "false", maka hasil akhirnya adalah "false", meskipun ada yang "true" */
var_dump (15 > 20 && 40 % 2 == 0);
echo "<br>";
// Meskipun ada hasil yang "false", tapi kalau pakai operator || (atau) maka cukup salah satu saja "true", dan hasil akhirnya adalah "true"
var_dump (15 > 20 || 40 % 2 == 0);
echo "<br>";
// Contoh utk operator !
$x = false;  
if (!$x) {
    echo "Ini True 1";
}

if ($x) {
    echo "Ini True 2";
}
?>