<?php
// 1. __LINE__ - Menampilkan nomor baris tempat konstanta digunakan
echo "Nomor baris saat ini: " . __LINE__ . "<br>"; // Output: Nomor baris saat ini: 6

// 2. __FILE__ - Menampilkan path lengkap ke file saat ini
echo "Path lengkap file saat ini: " . __FILE__ . "<br>"; 
// Output: Path lengkap file saat ini: /path/to/your/file.php (sesuaikan dengan lokasi file Anda)

// 3. __DIR__ - Menampilkan direktori tempat file saat ini berada
echo "Direktori tempat file ini berada: " . __DIR__ . "<br>"; 
// Output: Direktori tempat file ini berada: /path/to/your

// 4. __FUNCTION__ - Menampilkan nama fungsi saat ini
function myFunction() {
    echo "Nama fungsi saat ini: " . __FUNCTION__ . "<br>"; 
}
myFunction(); // Output: Nama fungsi saat ini: myFunction

// 5. __CLASS__ - Menampilkan nama kelas saat ini
class MyClass {
    public function showClassName() {
        echo "Nama kelas saat ini: " . __CLASS__ . "<br>"; 
    }
}
$obj = new MyClass();
$obj->showClassName(); // Output: Nama kelas saat ini: MyClass

// 6. __METHOD__ - Menampilkan nama metode saat ini (termasuk nama kelas)
class MyClassMethod {
    public function myMethod() {
        echo "Nama metode saat ini: " . __METHOD__ . "<br>";
    }
}
$objMethod = new MyClassMethod();
$objMethod->myMethod(); // Output: Nama metode saat ini: MyClassMethod::myMethod

// 7. __NAMESPACE__ - Menampilkan namespace saat ini
namespace MyNamespace;
echo "Namespace saat ini: " . __NAMESPACE__ . "<br>"; // Output: Namespace saat ini: MyNamespace

?>
