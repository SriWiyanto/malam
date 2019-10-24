<?php
//class handphone
class handphone {
//membuat propertise dengan kondisi private
private $merk;
private $harga;
private $seri;

// membuat function untuk seting nilai propertise
function setMerk($merk){
$this->merk=$merk;
}
function setHarga($harga){
$this->harga=$harga;
}
function setseri($seri){
$this->seri=$seri;
}
//membuat function kondisi status harga
function statusharga(){
if ($this->harga >150000000){
return "Mahal";
}else {
return "Murah";
}
}
//membuat function untuk mengambil nilai dari propertise yang diseting dan menampilkan di browswer
function getMerk(){
return $this->merk;
}
function getHarga(){
return $this->harga;
}
function getseri(){
return $this->seri;
}
}
//membuat object
$objhandphone = new handphone();
//menseting nilai propertise dari function yang dibuat
$objhandphone->setMerk("Samsung");
$objhandphone->setHarga(160000000);
$objhandphone->setseri(4);
//menampilkan program yang disetting
echo 'Merk handphone adalah '.$objhandphone->getMerk().'<br>';
echo 'Harga handphone = '.$objhandphone->getHarga().'<br>';
echo 'Jumlahseri = '.$objhandphone->getseri().'<br>';
//menampilkan function kondisi yang dibuat
echo 'Status Harga = '.$objhandphone->statusharga();
?>