<?php
class Balok
{
    public $panjang, $lebar, $tinggi;

    public function hitungVolume()
    {
        return "Volume Balok = $this->panjang x $this->lebar x $this->tinggi <br> Volume Balok = ". 
        $this->panjang * $this->lebar * $this->tinggi;
    }

    public function hitungLuasPermukaan()
    {
        return "<br>Luas Permukaan Balok = 2 x (($this->panjang x $this->lebar) + ($this->panjang x $this->tinggi) + ($this->lebar x $this->tinggi)) <br> Luas Permukaan Balok = ". 
        2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }
}

$objekBalok = new Balok;
$objekBalok->panjang = 12;
$objekBalok->lebar = 9;
$objekBalok->tinggi = 3;

echo $objekBalok->hitungVolume();
echo "<br>";
echo $objekBalok->hitungLuasPermukaan();
