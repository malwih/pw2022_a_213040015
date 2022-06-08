<?php
  session_start();
  include 'functions.php';
  if($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>';
  }

  $kategori = mysqli_query($conn, "SELECT * FROM tb_category WHERE category_id = '".$_GET['id']."' ");
  if(mysqli_num_rows($kategori) == 0) {
      echo '<script>window.location="data-kategori.php"</script>';
  }
  $k = mysqli_fetch_object($kategori);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Malwicam</title>
  </head>
  <body>
      <!-- Header -->
      <header>
          <div class="container">
          <h1><a href="dashboard.php"><img src="img/logo-malwicam.png" width="150px"></a></h1>
          <ul>
              <li><a href="dashboard.php">Dashboard</a></li>
              <li><a href="profil.php">Profil</a></li>
              <li><a href="data-kategori.php">Data Kategori</a></li>
              <li><a href="data-produk.php">Data Produk</a></li>
              <li><a href="keluar.php">Keluar</a></li>
          </ul>
          </div>
      </header>

      <!-- Content -->
      <div class="section">
        <div class="container">
          <h3>Edit</h3>
          <div class="box">
            <form action="" method="POST" autocomplete="off">
                <input type="text" name="nama" placeholder="Nama Kategori" class="input-control" value="<?php echo $k->category_name ?>" required>
                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
            <?php 
                if(isset($_POST['submit'])) {
                    $nama = ucwords($_POST['nama']);
                    $update = mysqli_query($conn, "UPDATE tb_category SET
                                category_name = '".$nama."'
                                WHERE category_id = '".$k->category_id."'");
                    if($update) {
                        echo '<script>alert("Edit data berhasil")</script>';
                        echo '<script>window.location="data-kategori.php"</script>';
                    }else{
                        echo 'gagal'.mysqli_error($conn);
                    }
                }
            ?>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer>
        <div class="container">
          <small>Copyright &copy; 2022 - Malwicam</small>
        </div>
      </footer>

  
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