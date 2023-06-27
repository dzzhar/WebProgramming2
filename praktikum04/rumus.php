<?php 

function luasLingkaran($jariJari)
{
    define("Phi", 3.14);
    echo Phi * $jariJari * $jariJari;
}

function luasPersegi($sisi)
{
    echo $sisi * $sisi;
}

function luasSegitiga($alas, $tinggi)
{
    echo 1/2 * $alas * $tinggi;
}