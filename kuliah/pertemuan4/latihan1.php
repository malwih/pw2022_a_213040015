<?php
// FUNCTION

// Built-in function
// date() => (untuk menampilkan tanggal dengan format tertentu)
    echo date("l, j F Y");
    echo "<hr>";

// TIME
//time()
    echo time();
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 januari 1970
    echo "<br>";
    echo time() + 60 * 60 * 24; // manipulasi detik 1 hari kedepan
    echo "<br>";
    echo date("l, j F Y", time() + 60 * 60 * 24 * 100); // manipulasi hari, tanggal, bulan, tahun 100 hari kedepan
    echo "<hr>";

//mktime(0,0,0,0,0,0)
// mendapatkan detik tanggal tertentu
// format : jam, menit, detik, bulan, tanggal, tahun
    echo mktime(0,0,0,3,5,2022);
    echo "<hr>";
    echo date("l", mktime(0,0,0,5,28,1997)); //menampilkan hari dengan tanggal tertentu yang sudah berlalu
    echo "<hr>";
// strtotime
echo date("l", strtotime("28 may 1997")); // menampilkan hari di tanggal yang sudah berlalu
echo "<hr>";

//MATH
echo pow(2,3); // function pangkat
echo "<br>";
echo rand(1,10); // function random
echo "<br>";
// Pembulatan
// round(), ceil(), floor()
echo round(2.5); //pembulatan bilangan desimal
echo "<br>";
echo ceil(2.1); // pembulatan bilangan ke atas (ceiling)
echo "<br>";
echo floor(2.9); // pembulatan bilangan ke bawah (lantai)
echo "<hr>";

?>