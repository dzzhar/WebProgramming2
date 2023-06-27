<?php
class Kubus
{
    public $sisi;

    public function hitungVolume()
    {
        return "V = " . $this->sisi * $this->sisi;
    }

    public function hitungLuasPermukaan()
    {
        return "LP = " . 6 * $this->sisi * $this->sisi; 
    }
}

$objekKubus = new Kubus;
$objekKubus->sisi = 45;

echo $objekKubus->hitungVolume();
echo "<br>";
echo $objekKubus->hitungLuasPermukaan();
?>