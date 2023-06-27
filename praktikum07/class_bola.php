<?php
class Bola
{
    public $jariJari;

    public function __construct($r)
    {
        $this->phi = 3.14;
        $this->jariJari = $r;
    }

    function volume()
    {
        return "Volume Bola = 4/3 x $this->phi x ($this->jariJari^3) <br> Volume Bola = ". 
        ((4/3) * $this->phi * ($this->jariJari * $this->jariJari * $this->jariJari));
    }

    function luasPermukaan()
    {
        return "<br>Luas Permukaan Bola = 4 x $this->phi x ($this->jariJari^2) <br> Luas Permukaan Bola = ". 
        (4 * $this->phi * ($this->jariJari * $this->jariJari));
    }
}

$objekBola = new Bola(32);
echo $objekBola->volume();
echo "<br>";
echo $objekBola->luasPermukaan();
?>