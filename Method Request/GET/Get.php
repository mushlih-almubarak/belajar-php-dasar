<?php
    /*  $_GET adalah salah satu variabel yang dibuat oleh PHP.
        $_GET bersifat AssociativeArray.
        Untuk menambahkan elemen pada variabel $_GET, bisa ditulis manual di kodingannya, atau di tulis setelah URLnya seperti ini:
        ?nama_element=isiElementnya&namaLainnya=Isi_Lainnya */

    // $_GET["nama"] = "Mushlih"; // Menambahkan element array di variabel $_GET
    // $_GET["id"] = 4565894098; // Menambahkan element array di variabel $_GET
    print_r ($_GET);
?>