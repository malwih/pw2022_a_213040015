<?php
// Array Associative
// Array yang indexnya berupa string yang berasosiasi dengan nilainya

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

// var_dump($mahasiswa[2]["nama"]);
?>

<?php foreach ($mahasiswa as $m) { ?>
    <ul>
        <li>Nama: <?php echo $m["nama"] ?></li>
        <li>NRP: <?php echo $m["npm"] ?></li>
        <li>Email: <?php echo $m["email"] ?></li>
        <li>Jurusan: <?php echo $m["jurusan"] ?></li>
    </ul>
<?php } ?>