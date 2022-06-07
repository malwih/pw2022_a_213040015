<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "Malwi Hidayat", 
        "npm" => "213040015", 
        "email" => "malwihidayat@gmail.com", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "user1.png"],
    [
        "nama" => "Gilang Ramadhan", 
        "npm" => "213040004", 
        "email" => "gilangramadhan@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "user2.png"],
    [
        "nama" => "Yobi Firdaus", 
        "npm" => "213040001",
        "email" => "yobifirdaus@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "user3.png"],
    [
        "nama" => "Revina Bella", 
        "npm" => "213040012",
        "email" => "revinabella@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "user4.png"],
    [
        "nama" => "Fadhila Fauzan", 
        "npm" => "213040021",
        "email" => "fadhilafauzan@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "user5.png"],
    [
        "nama" => "Barra Permana", 
        "npm" => "213040011",
        "email" => "barrapermana@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "user6.png"],
    [
        "nama" => "Rian Haris", 
        "npm" => "213040022",
        "email" => "rianharis@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "user7.png"],
    [
        "nama" => "Moh. Haykal", 
        "npm" => "213040031",
        "email" => "mohhaykal@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "user8.png"],
    [
        "nama" => "Syifa Rizki", 
        "npm" => "213040032",
        "email" => "syifarizki@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "user9.png"],
    [
        "nama" => "Diva Nur", 
        "npm" => "213040004",
        "email" => "divanur@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "user10.png"],
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?>
            <li>
                <a href="latihan2_video.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?></a><?= $mhs["nama"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>