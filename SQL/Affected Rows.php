<?php
    $db = mysqli_connect("localhost", "root", "", "php_dasar");

    /*  Mengecek apakah ada data yang bertambah atau gagal ditambahkan
        Jika gagal ditambahkan, maka hasilnya adalah dibawah 0
        Jika berhasil ditambahkan, maka hasilnya adalah diatas 0
        Jika tidak ada perubahan, maka hasilnya adalah 0
    */
    var_dump(mysqli_affected_rows($db));
?>