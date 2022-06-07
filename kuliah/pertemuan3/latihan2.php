<?php
// Pengkondisian / Percabangan
// if else
// if else if else
// switch

// Pengkondisian menggunakan if else
// Contoh 1 : Kondisi True
$x = 10;
if($x < 20) {
    echo "benar";
} else {
    echo "salah";
}
echo "<hr>";

// Contoh 2 : Kondisi False
$x = 30;
if($x < 20) {
    echo "benar";
} else {
    echo "salah";
}
echo "<hr>";

// Pengkondisian menggunakan if else if else
// Contoh : Menampilkan kondisi else if muncul tulisan "bingo!"
$x = 20;
if($x < 20) {
    echo "benar";
} else if($x == 20) {
    echo "bingo!";
}
else {
    echo "salah";
}
echo "<hr>";

?>