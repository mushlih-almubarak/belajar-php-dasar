<?php
    // Pengulangan pada array bisa menggunakan for/foreach

    $angka = [1, "abcsdss", 23, 6, "tulisan", 85, 59, "p"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan Array</title>
    <style>
    div {
        width: 100px;
        height: 100px;
        background-color: aqua;
        text-align: center;
        line-height: 100px;
        font-size: 24px;
        margin: 5px;
        float: left;
    }

    br {
        clear: left;
    }
    </style>
</head>
<body>
    <h1>Isinya sesuai dengan yang ada di Array</h1>
    <br>
    <h2>Menggunakan pengulangan for</h2>
    <?php
    // count($angka) = Jumlah elemen arraynya
    for($i = 0; $i < count($angka); $i++) {
        echo "<div>$angka[$i]</div>";
    }
?>
    <br><br><br><br><br>
    <h2>Menggunakan pengulangan foreach</h2>
    <?php
        // Variabel $a kita buat baru langsung di pengulangannya
        foreach ($angka as $a) {
            echo "<div>$a</div>";
        }
    ?>
</body>
</html>