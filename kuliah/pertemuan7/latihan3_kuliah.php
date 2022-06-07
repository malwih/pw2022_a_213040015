<?php

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


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>

  <div class="container">
      <h1>Daftar Mahasiswa</h1>
      <table class="table">
  <thead>
    <tr>
      <th scope="col" class="align-middle">No.</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $no = 1; foreach ($mahasiswa as $m) { ?>
    <tr class="align-middle">
      <th scope="row" class="align-middle"><?= $no++; ?></th>
      <td>
          <img src="img/<?php echo $m["gambar"] ?>" widht="30" height="30" class="rounded-circle">
      </td>
      <td><?php echo $m["nama"] ?></td>
      <td>
        <a href="" class="btn badge bg-warning">Edit</a>
        <a href="" class="btn badge bg-danger">Delete</a>
        <a href="latihan4_kuliah.php?gambar=<?php echo $m["gambar"] ?>&nama=<?php echo $m["nama"] ?>&npm=<?php echo $m["npm"] ?>&email=<?php echo $m["email"] ?>&jurusan=<?php echo $m["jurusan"] ?>" class="btn badge bg-info">Detail</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>