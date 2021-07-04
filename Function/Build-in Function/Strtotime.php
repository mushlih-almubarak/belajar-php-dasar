<?php
// Strtotime adalah kebalikan dari mktime, jika mktime menggunakan angka semua, maka ini menggunakan string
    echo date("l, d-M-Y, H:i:s", strtotime("15 aug 2004 13:29:05"));
    echo "<br>";

    date_default_timezone_set("Asia/Riyadh"); // Menyetel zona waktu default
    echo date("l, d-M-Y, H:i:s", strtotime("now"));
    echo "<br>";
    echo date("l, d-M-Y, H:i:s", strtotime("+1 day"));
    echo "<br>";
?>