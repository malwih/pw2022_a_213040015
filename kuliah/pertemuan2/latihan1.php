<?php 
    // Pertemuan2, membahas mengenai sintaks php
    // Nilai: integer, string, boolean
    echo 10;
    echo "<hr>";

    // VARIABEL
    // Wadah untuk menyimpan NILAI
    // Aturan variabel : namanya bebas , tidak boleh diawali angka dan spasi
    $nama = 'Malwi';
    echo $nama;
    echo "<br>";

    // perilaku PHP : bisa ditimpa / overwrite
    $nama = "Hidayat";
    echo $nama;
    echo "<hr>";


    // STRING
    // '' , ""
    echo "Jum'at";
    echo "<br>";
    // Escaped charachter
    // menggunakan tanda \
    echo 'Malwi : "Hallo, Jum\'at"';
    echo "<br>";
    echo "Malwi : \"Jum'at\"";
    echo "<br>";
    // Interpolasi
    // mencetak isi variable dan hanya bisa digunakan oleh "" (bisa mencetak variabel)
    echo "Hallo, nama saya $nama";
    echo "<br>";
    $price = 200;
    echo "Price : $$price";
    echo "<hr>";


    // OPERATOR
    // Aritmatika +, -, *, /, % (modulus / sisa bagi)
    echo (1 + 2) * 3 - 4;
    echo "<br>";

    $alas = 10;
    $tinggi = 20;
    $luas_segitiga = ($alas * $tinggi) / 2;
    echo $luas_segitiga;
    echo "<br>";
    echo 3 % 2;
    echo "<hr>";


    // CONCAT
    // Menggabungkan 2 String
    // menggunakan tanda titik .
    $nama_depan = 'Malwi';
    $nama_belakang = 'Hidayat';
    echo $nama_depan . " " . $nama_belakang;
    echo "<hr>";


    // PERBANDINGAN
    // <, >, <=, >=, ==, !=
    echo 1 < 5;
    echo "<br>";
    echo 10 == 10;
    echo "<hr>";


    // IDENTITAS / strict comparison
    // === , !==
    echo 10 === "10";
    echo "<br>";
    var_dump(1 > 5);
    echo "<hr>";


    // INCREMENT / DECREMENT
    // Penambahan / Pengurangan 1
    // += , --
    $x = 10;
    $x++;
    echo $x++;
    echo "<br>";
    echo ++$x;
    echo "<hr>";


    // LOGIKA
    // && , || , !
    $x = 30;
    var_dump($x < 20 && $x % 2 == 0);
    echo "<br>";
    var_dump($x < 20 || $x % 2 == 0);
?>