<?php
class Buah
{
    public $nama = "Jeruk", $warna, $rasa;

    public function __construct($n, $w, $r)
    {
        $this->nama = $n;
        $this->warna = $w;
        $this->rasa = $r;
    }

    function tumbuh()
    {
        return "$this->nama bisa tumbuh besar, $this->warna adalah warnanya, $this->rasa kan rasanya.";
    }
}

$objekBuah = new Buah("Jeruk", "Oranye", "Manis");
echo $objekBuah->tumbuh();