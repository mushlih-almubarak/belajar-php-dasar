<?php
    // User menulis password biasa, lalu dihash, kemudian dicek apakah hash password tersebut sudah benar dengan hash password aslinya
    $password = 'rahasia';
    $konfirmasi = '$2y$10$S2vwv9f1XRKkeGmsv/rVAOawXJ3TN5h/JAwCvtNW75XP/AGygD5wi'; // Password setelah di hash

    // password_verify($password_yang_ditulis_user, $password_yang_benar);
    $hasil = password_verify($password, $konfirmasi);
    var_dump($hasil);
?>