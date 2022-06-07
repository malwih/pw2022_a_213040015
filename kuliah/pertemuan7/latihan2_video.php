<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["npm"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"])) {
    // redirect
    header("Location: latihan1_video.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>

<ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>" width="100" height="100"></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["npm"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
</ul>

<a href="latihan1_video.php">Kembali ke daftar mahasiswa</a>
    
</body>
</html>