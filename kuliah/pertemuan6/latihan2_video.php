<?php
// $mahasiswa = [
//     ["Malwi Hidayat","213040015","malwihidayat@gmail.com","Teknik Informatika"],
//     ["Amalia","213040011","amalia@gmail.com","Teknik Informatika"]    
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Malwi Hidayat", 
        "npm" => "213040015", 
        "email" => "malwihidayat@gmail.com", 
        "jurusan" => "Teknik Informatika"],
    [
        "nama" => "Gilang Ramadhan", 
        "npm" => "213040004", 
        "email" => "gilangramadhan@gmail.com",
        "jurusan" => "Teknik Informatika"],
    [
        "nama" => "Yobi Firdaus", 
        "npm" => "213040001",
        "email" => "yobifirdaus@gmail.com",
        "jurusan" => "Teknik Informatika"],
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>DAFTAR MAHASISWA</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
       <li>Nama : <?= $mhs["nama"]; ?></li>
       <li>NRP : <?= $mhs["npm"]; ?></li> 
       <li>Email :<?= $mhs["email"]; ?></li> 
       <li>Jurusan : <?= $mhs["jurusan"]; ?></li> 
    </ul>
    <?php endforeach; ?>
    
</body>
</html>