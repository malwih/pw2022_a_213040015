<?php
// ARRAY
// Array adalaah variable yang dapat menampung lebih dari satu nilai sekaligus

// Membuat Array
$hari = ["Senin", "Selasa", "Rabu", "Kamis"]; // cara baru
$bulan = array("Januari", "Februari", "Maret"); // cara lama
$myArray = [100, "Malwi", true];

// Mencetak Array
// mencetak 1 elemen / nilai menggunakan indexnya, index dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// mencetak semua elemen pada array
// var_dump() atau print_r()
// khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

// Mencetak menggunakan looping
// for
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}

echo "<hr>";

// foreach (khusus untuk array)
foreach($bulan as $bln) {
    echo $bln;
    echo "<br>";
}

echo "<hr>";

foreach ($hari as $key => $value) {
    echo "Key : $key, Value : $value";
    echo "<br>";
}

// Memanipulasi isi array
// menambah elemen baru di akhir array
$hari[] = "Sabtu"; // jika indexnya dihapus akan menmbahkan array secara otomatis
var_dump($hari);
echo "<br>";
?>