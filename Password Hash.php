<?php
    $password = "raHasi123a";
    // password_hash(PasswordYangAkanDiEnkripsi, metode enkripsinya);
    $password = password_hash($password, PASSWORD_DEFAULT);
    var_dump($password);
?>