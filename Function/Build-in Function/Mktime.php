<?php
// Menghitung sudah berapa detik dari hari yang kita tentukan
// Parameternya (harus berurutan): jam, menit, detik, bulan, tanggal, tahun

// PHP, sudah berapa detik dari tanggal 31 oktober 2004?
echo mktime(0, 0, 0, 31, 10, 2004);
echo "<br>";

// PHP, pada tanggal 31 oktober 2004 itu hari apa?
echo date("l", mktime(0, 0, 0, 31, 10, 2004));
?>