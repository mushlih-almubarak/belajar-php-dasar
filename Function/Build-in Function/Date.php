<?php
    // Menyetel zona waktu default | https://www.php.net/manual/en/timezones.php
    date_default_timezone_set("Asia/Riyadh");
    // Mengecek zona waktu yang digunakan
    echo date_default_timezone_get();
    echo "<br>";
    // Menampilkan hari/tanggal/bulan/tahun/jam/menit/detik/dll dalam format tertentu (sesuai zona waktu yang kita tentukan diatas)
    echo date("l, d-M-Y, H:i:s");
    
// Parameter-parameter di function date:
/* 
1. l = Hari saat ini
2. d = tanggal saat ini
3. M = Bulan saat ini (Menggunakan nama bulan)
3. m = Bulan saat ini (Menggunakan angka)
4. Y = Tahun
5. H = Jam dalam format 24 jam
5. h = Jam dalam format 12 jam
6. i = Menit
7. s = Detik
8. Lainnya: https://www.php.net/manual/en/function.date#example-2058
*/
?>