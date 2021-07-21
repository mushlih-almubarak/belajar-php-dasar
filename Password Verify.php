<?php
    // User menulis password yang biasa, lalu dihash, kemudian dicek apakah hash password tersebut sudah benar dengan password aslinya
    $password = '$2y$10$S2vwv9f1XRKkeGmsv/rVAOawXJ3TN5h/JAwCvtNW75XP/AGygD5wi'; // Contoh disini menggunakan password setelah di hash
    $konfirmasi = 'rahasia'; 

    // password_verify($password_yang_benar, $password_yang_ditulis_user);
    $hasil = password_verify($konfirmasi, $password);
    var_dump($hasil);
?>