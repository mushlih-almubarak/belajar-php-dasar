<?php
    session_start(); // Tetap gunakan fungsi ini walaupun halaman ini digunakan utk menghentikan sesinya
    // Session akan dihapus/selesai saat browser ditutup atau laptop direstart, jika ingin menghentikan sesinya tanpa kedua itu, gunakan fungsi di bawah ini
    session_destroy();
?>