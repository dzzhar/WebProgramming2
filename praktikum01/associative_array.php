<?php
// asosiatif array
$profileArray = [
    "nama" => "dzzhar",
    "kelas" => "TI11"
];

echo $profileArray["nama"] . "<br>";
echo $profileArray["kelas"] . "<br>";

//multi dimensional array
$profileMultiArray = [
    [
        "nama" => "dzzhar",
        "semester" => 2
    ], [
        "nama" => "Fauzi",
        "semester" => 7
    ], [
        "nama" => "Paul Scholes",
        "semester" => 2
    ]
];

foreach ($profileMultiArray as $profile) {
    echo $profile["nama"] . "<br>";
    echo $profile["semester"] . "<br>";
}
