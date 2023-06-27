<?php
function hitungUmur($tahunLahir, $tahunSekarang)
{
    $hitungUmur = $tahunSekarang - $tahunLahir;
    echo $hitungUmur . "<br>";
    echo $tahunSekarang - $tahunLahir;
}

hitungUmur(2002, 2023);
echo '<br>';
hitungUmur(1990, 2023);
echo '<br>';
hitungUmur(1918, 2023);
echo '<br>';
hitungUmur(2019, 2022);
echo "<br>";

function greeting($nama)
{
    return "Hai, namaku $nama!";
}

echo greeting("Dzzhar");
