<?php
// 1. Membuat array
$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];

// 2. Menambahkan elemen ke akhir array dengan array_push()
array_push($buah, "Semangka");
echo "Setelah array_push() (menambahkan Semangka):\n";
print_r($buah);

// 3. Menghapus elemen terakhir array dengan array_pop()
$terhapus = array_pop($buah);
echo "\nSetelah array_pop() (menghapus '$terhapus'):\n";
print_r($buah);

// 4. Menambahkan elemen ke awal array dengan array_unshift()
array_unshift($buah, "Durian");
echo "\nSetelah array_unshift() (menambahkan Durian di awal):\n";
print_r($buah);

// 5. Menghapus elemen pertama array dengan array_shift()
$terhapus = array_shift($buah);
echo "\nSetelah array_shift() (menghapus '$terhapus'):\n";
print_r($buah);

// 6. Menggabungkan dua array dengan array_merge()
$buah2 = ["Melon", "Apel"];
$buah_merged = array_merge($buah, $buah2);
echo "\nSetelah array_merge() (menggabungkan array):\n";
print_r($buah_merged);

// 7. Membandingkan dua array dan mengambil elemen yang berbeda dengan array_diff()
$buah3 = ["Apel", "Pisang", "Durian"];
$buah_diff = array_diff($buah_merged, $buah3);
echo "\nSetelah array_diff() (elemen yang berbeda):\n";
print_r($buah_diff);

// 8. Mengambil elemen yang ada di kedua array dengan array_intersect()
$buah_intersect = array_intersect($buah_merged, $buah3);
echo "\nSetelah array_intersect() (elemen yang ada di kedua array):\n";
print_r($buah_intersect);

// 9. Mengambil potongan array dengan array_slice()
$potongan_buah = array_slice($buah_merged, 1, 3);  // Mengambil elemen dari indeks 1, 3 elemen
echo "\nSetelah array_slice() (potongan array):\n";
print_r($potongan_buah);

// 10. Menerapkan fungsi ke setiap elemen dalam array dengan array_map()
$buah_upper = array_map('strtoupper', $buah_merged);
echo "\nSetelah array_map() (semua huruf kapital):\n";
print_r($buah_upper);

// 11. Menyaring array berdasarkan kondisi dengan array_filter()
$buah_filtered = array_filter($buah_merged, function($item) {
    return strlen($item) > 5;  // Menyaring buah dengan nama lebih dari 5 huruf
});
echo "\nSetelah array_filter() (buah dengan nama lebih dari 5 huruf):\n";
print_r($buah_filtered);

// 12. Menjumlahkan elemen numerik array dengan array_sum()
$harga_buah = [15000, 12000, 10000, 8000];
$total_harga = array_sum($harga_buah);
echo "\nTotal harga buah dengan array_sum(): Rp$total_harga\n";

// 13. Mencari nilai dalam array dengan array_search()
$kunci = array_search("Mangga", $buah_merged);
echo "\nIndeks 'Mangga' dalam array: $kunci\n";
?>
