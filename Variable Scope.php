<?php
$i = 10;
$a = 15;

function fungsi(){
    echo $i; // Variabel $i tidak dikenal karena ia tidak bisa mengambil variabel yang ada di luar function
    global $a; // Agar bisa mengambil variabel di luar (namun tetap di file yang sama), gunakan kode global $variabel_luarnya.
    echo $a;
}

function fungsi2() {
    // Agar variabel $x bisa diambil di luar function (namun tetap di file yang sama), tulis global dahulu, kemudian baru nama variabelnya
    global $x;
    $x = "Tulis";
}

fungsi();
echo "<br>";

// Tetap panggil nama functionnya untuk bisa memanggil variabel di function tsb 
fungsi2();
echo $x;
?>