<?php
// 1. preg_match() - Memeriksa apakah pola cocok dengan string
$email = "example@example.com";
$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/";

if (preg_match($pattern, $email)) {
    echo "Email yang valid: $email<br>";
} else {
    echo "Email tidak valid.<br>";
}

// 2. preg_replace() - Mengganti bagian string yang cocok dengan pola
$text = "Saya suka PHP dan Python.";
$pattern = "/PHP/";
$replacement = "JavaScript";
$new_text = preg_replace($pattern, $replacement, $text);
echo "Teks setelah penggantian: $new_text<br>";

// 3. preg_split() - Memisahkan string berdasarkan pola
$sentence = "PHP is great, and JavaScript is powerful.";
$pattern = "/[\s,]+/"; // Memisahkan berdasarkan spasi dan koma
$words = preg_split($pattern, $sentence);
echo "Kata-kata yang dipisahkan: ";
print_r($words);
echo "<br>";

// 4. preg_match_all() - Mencari semua kecocokan dengan pola
$text = "Ada 2 email di sini: john.doe@example.com dan jane.smith@domain.org";
$pattern = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}/";
preg_match_all($pattern, $text, $matches);
echo "Email yang ditemukan: <br>";
print_r($matches[0]);
?>
