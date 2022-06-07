<?php
// Studi Kasus

$mahasiswa = [
    ["Malwi Hidayat", "213040015", "malwihidayat@gmail.com", "Teknik Informatika"],
    ["Gilang Ramadhan", "213040004", "gilangramadhan@gmail.com", "Teknik Informatika"],
    ["Yobi Firdaus", "213040001", "yobifirdaus@gmail.com", "Teknik Informatika"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    

<?php foreach ($mahasiswa as $m) { ?>
        <ul>
            <li>Nama: <?php echo $m[0] ?></li>
            <li>NRP: <?php echo $m[1] ?></li>
            <li>Email: <?php echo $m[2] ?></li>
            <li>Jurusan: <?php echo $m[3] ?></li>
        </ul>
<?php } ?>

</body>
</html>