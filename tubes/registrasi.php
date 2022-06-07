<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Registrasi | Malwicam</title>
  </head>
  <body id="bg-login">
  <div class="box-login">
    <h2>Registrasi</h2>
    <form action="" method="POST">

        <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" autofocus autocomplete="off" required>
        <input type="email" name="email" placeholder="Email" class="input-control" autofocus autocomplete="off" required>
        <input type="text" name="nohp" placeholder="Nomor Handphone" class="input-control" autofocus autocomplete="off" required>
        <input type="text" name="alamat" placeholder="Alamat" class="input-control" autofocus autocomplete="off" required>
        <input type="text" name="username" placeholder="Username" class="input-control" autofocus autocomplete="off" required>
        <input type="password" name="pass1" placeholder="Password" class="input-control" required>
        <input type="password" name="pass2" placeholder="Konfirmasi Password" class="input-control" required>
        <input type="submit" name="registrasi" value="Registrasi" class="btn-reg">
    </form>
    <?php 
        include 'functions.php';
        if(isset($_POST['registrasi'])) {
            $nama = mysqli_real_escape_string($conn, $_POST['nama']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $nohp = mysqli_real_escape_string($conn, $_POST['nohp']);
            $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $pass1 = mysqli_real_escape_string($conn, $_POST['pass1']);
            $pass2 = mysqli_real_escape_string($conn, $_POST['pass2']);

            if(empty($username) || empty($pass1) || empty($pass2)) {
                echo '<script>alert("Username / Password tidak boleh kosong!")</script>';
                echo '<script>window.location="registrasi.php"</script>';
            }

            $cekuser = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$username."' ");
            if(mysqli_num_rows($cekuser) == 1) {
                echo '<script>alert("Username sudah tersedia!")</script>';
                echo '<script>window.location="registrasi.php"</script>';
            }

            if($pass1 !== $pass2) {
                echo '<script>alert("Konfirmasi password tidak sama!")</script>';
                echo '<script>window.location="registrasi.php"</script>';
            }

            if(strlen($pass1) < 5) {
                echo '<script>alert("Password harus lebih dari 5 digit!")</script>';
                echo '<script>window.location="registrasi.php"</script>';
            }

            $userbaru = mysqli_query($conn,"INSERT INTO tb_admin VALUES
                        (null, '".$nama."', '".$username."', '".MD5($pass1)."', '".$nohp."', '".$email."', '".$alamat."' )");
            
            
            

            if($userbaru) {
                echo '<script>alert("User berhasil ditambahkan!")</script>';
                echo '<script>window.location="login.php"</script>';
            }else{
                echo '<script>alert("User gagal ditambahkan!")</script>';
                echo '<script>window.location="registrasi.php"</script>';
            }
        }
    ?>

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