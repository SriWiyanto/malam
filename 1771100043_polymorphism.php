<?php
class kendaraan{
private $merk;
private $harga;
function contruct($merk,$harga){
$this->merk=$merk;
$this->harga=$harga;
}
function Bacamerk(){
return $this->merk;
}
function Bacaharga(){
return $this->harga;
}
}
$Motor = new kendaraan("ducati",100000000);
echo "Merk Kendaraan = ".$Motor->Bacamerk()."<br>";
echo "Harga Motor = ".$Motor->Bacaharga()."<br>";
echo "============================================<br><br>";
$Motor2 = new kendaraan("bajaj",150000000);
echo "Merk kendaraan = ".$Motor2->Bacamerk()."<br>";
echo "Harga Motor = ".$Motor2->Bacaharga()."<br>";
?>
