<?php
    // Session memungkinkan kita utk mengakses variabel di suatu halaman pada halaman lain 
    session_start(); // Gunakan fungsi ini untuk memulai sessionnya 
    echo $_SESSION["nama"]; // Variabel ini diambil dari file SessionStart.php
?>