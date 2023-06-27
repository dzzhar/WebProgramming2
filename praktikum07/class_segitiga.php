<?php
class Segitiga
{
    public $alas, $tinggi;

    public function __construct($a, $t)
    {
        $this->alas = $a;
        $this->tinggi = $t;
    }
    
    function Luas()
    {
        return "Luas = " . ($this->alas * $this->tinggi)/2;
    }
}

$objekSegitiga = new Segitiga (20, 30);

echo $objekSegitiga->Luas();
?>