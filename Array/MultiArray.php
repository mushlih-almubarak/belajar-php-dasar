<?php
// Membuat banyak array di dalam array
$arr1 = [
    ["Mushlih", 17], // Elemen luar 0 
    ["Hadziq", 10], // Elemen luar 1
    ["Syakira", 14] // Elemen luar 2
];
// Buka elemen luar 2, lalu tampilkan index yang ke 1
echo $arr1[2][1];

echo "<br>";

$arr2 = [
    [
        "depan" => "Mushlih",
        "belakang" => "Almubarak",
        "nilai" => [90, 95, 85] // Array di dalam 2 array
    ],
    [
        "depan" => "Muhammad",
        "belakang" => "Alhadziq",
        "nilai" => [
                    "akidah" => 98, 
                    "fikih" => 90, 
                    "hadis" => 82
            ]
    ]
];
echo $arr2[0]["nilai"][1];
echo "<br>";
echo $arr2[1]["nilai"]["hadis"];
?>