<?php
class Persegi
{
    public $sisi;
    
    public function __construct($s)
    {
        $this->sisi = $s;
    }

    function Luas()
    {
        return "Luas = " . $this->sisi * $this->sisi;
    }
}

$objekPersegi = new Persegi(40);

echo $objekPersegi->Luas();
?>