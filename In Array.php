<?php
    $valid = ["jpg", "jpeg", "png", "gif"];
    $user_input = "jpeg";
    // Memeriksa apakah yang diinputkan user ada di array yg kita buat atau tdk?
    $hasil = in_array($user_input, $valid);
    echo $hasil;
?>