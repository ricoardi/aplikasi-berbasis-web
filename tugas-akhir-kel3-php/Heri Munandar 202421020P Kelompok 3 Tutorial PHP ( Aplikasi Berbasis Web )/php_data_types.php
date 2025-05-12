<?php
// String
$nama = "Andi";
echo "Tipe String: $nama<br>";

// Integer
$umur = 25;
echo "Tipe Integer: $umur<br>";

// Float
$tinggi = 172.5;
echo "Tipe Float: $tinggi<br>";

// Boolean
$isActive = true;
echo "Tipe Boolean: ";
echo $isActive ? "true<br>" : "false<br>";

// Array
$buah = array("Apel", "Jeruk", "Mangga");
echo "Tipe Array: " . $buah[0] . ", " . $buah[1] . ", " . $buah[2] . "<br>";

// Object
class Siswa {
    public $nama;
    public function __construct($nama) {
        $this->nama = $nama;
    }
    public function tampilkanNama() {
        return "Nama Siswa: " . $this->nama;
    }
}
$siswa1 = new Siswa("Rina");
echo $siswa1->tampilkanNama() . "<br>";

// NULL
$data = null;
echo "Tipe NULL: ";
var_dump($data);
?>
