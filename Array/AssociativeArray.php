<?php
// Untuk membuat nama elemennya secara kustom (tidak memakai index yang dimulai dari 0), maka gunakan kode dibawah ini. Tidak harus menggunakan string, bisa juga menggunakan angka.
    $siswa = ["nama" => "Mushlih", "kelas" => "1 SMA", "Sekolah" => "Ma'had Ilmi"];
    echo $siswa["kelas"]; // Huruf besar dan kecil harus sama dengan nama kustomnya
    echo "<br>";
    $nama = [
        [
            "depan" => "Mushlih",
            "belakang" => "Almubarak"
        ],
        [
            "depan" => "Muhammad",
            "belakang" => "hadziq"
        ],
        [
            "depan" => "Khadijah",
            "tengah" => "Asy",
            "belakang" => "Syakira"
        ]
    ];
    echo $nama[1]["belakang"];
?>