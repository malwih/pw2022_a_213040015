<?php
// Menghitung total 2 kubus
// $a = 9;
// $b = 4;

// $luas_a = $a * $a * $a;
// $luas_b = $b * $b * $b;

// $total = $luas_a + $luas_b;

// echo "Total luas dari kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";

// echo "<hr>";


// // Membuat function / definisi untuk total luas dua kubus
// function total_luas_dua_kubus($a, $b) {
//     $luas_a = $a * $a * $a;
//     $luas_b = $b * $b * $b;

//     $total = $luas_a + $luas_b;
//     return "Total luas dari kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
// }

// echo total_luas_dua_kubus(9,4);
// echo "<hr>";
// echo total_luas_dua_kubus(10,15);

function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Latihan Function</title>
 </head>
 <body>
     <h1><?php echo salam("Pagi"); ?></h1>
 </body>
 </html>