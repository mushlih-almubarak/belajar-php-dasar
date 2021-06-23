<?php
// Pengkondisian atau If Else
/* 
1. If else
2. If else If else
3. Ternary: Untuk if else yang sederhana
4. Switch: Untuk if else yang rumit, disederhanakan menggunakan metode ini
*/

$kondisi = 10;

// If else
if ($kondisi < 20) {
    echo "Benar";
}
else {
    echo "Salah";
}

echo "<br>";

// if else if else
if ($kondisi < 20) {
    echo "Benar";
} else if ($kondisi == 30) {
    echo "Sama";
}
else {
    echo "Salah";
}

echo "<br>";

// Switch
$makanan = "rendang";
switch ($makanan) {
    case 'ayam':
        echo "Makanan favorit Anda adalah Ayam";
        break; // Agar tidak terprint kata setelahnya
    case 'rendang':
        echo "Makanan favorit Anda adalah Rendang";
        break;
    default:
        echo "Makanan favorit Anda adalah tidak tahu";
        break;
}
?>