<?php 

/**
 * 
 */
class Sepatu

{
	public $merk;
	public $warna;
	public $ukuran;
	public $manfaat;
	public $harga;
	
	public function sepatu_1()
	{

		return " Sepatu tersebut adalah barang dengan merk terbaik.";
	}
	public function sepatu_2()
	{
		return " Sepatu tersebut memiliki warna yang indah.";
	}
	public function sepatu_3()
	{
		return " Sepatutersebut memiliki ukuran yang simple.";
	}
	public function sepatu_4()
	{
		return " Sepatu tersebut memiliki manfaat yang beragam. ";
	}
	public function sepatu_5()
	{
		return " Sepatu tersebut murah tetapi berkualitas. ";
	}
}



$sepatu = new sepatu();
$sepatu -> merk = "Sepatu tersebut adalah barang dengan merk terbaik." ;
$sepatu -> warna = "Sepatu tersebut memiliki warna yang indah.";
$sepatu -> ukuran = "Sepatu tersebut memiliki ukuran yang praktis.";
$sepatu -> manfaat = "Sepatu tersebut memiliki manfaat yang beragam.";
$sepatu -> harga = "Sepatu tersebut murah tetapi berkualitas.";

echo "Sepatu yang sangat dianjurkan untuk dipakai : ";
echo "<br>";
echo "1. " .$sepatu-> merk;
echo "<br>";
echo "2. " . $sepatu -> warna;
echo "<br>";
echo "3. " .  $sepatu -> ukuran;
echo "<br>";
echo "4. " . $sepatu -> manfaat;
echo "<br>";
echo "5. " . $sepatu-> harga;
echo "<br>";







?>
