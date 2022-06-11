<?php
  session_start();
  include 'functions.php';
  if($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>';
  }

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

    <title>Data Kategori</title>
    <link rel="shortcut icon" href="img/icon-addressbar.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
          <h3>Data Kategori</h3>
          <p class="btn badge bg-success"><a href="tambah-kategori.php">Tambah Kategori</a></p>
          <input class="searchform mt-1" type="text" id="search" name="search" placeholder="Cari Kategori..." autocomplete="off" autofocus class="keyword">
          <table class="table">
  <thead>
    <tr>
      <th scope="col" class="align-middle">No</th>
      <th scope="col">Kategori</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody id="tampil">
  <?php 
        $no = 1;
        $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
        if(mysqli_num_rows($kategori) > 0) {
        while($row = mysqli_fetch_array($kategori)) { ?>
    <tr class="align-middle">
      <th scope="row" class="align-middle"><?php echo $no++; ?></th>
      <td><?php echo $row['category_name']; ?></td>
      <td>
        <a href="edit-kategori.php?id=<?php echo $row['category_id'] ?>" class="btn badge bg-warning">Edit</a>
        <a href="proses-hapus.php?idk=<?php echo $row['category_id'] ?>" onclick="return confirm('Yakin ingin hapus?')" class="btn badge bg-danger">Delete</a>
      </td>
    </tr>
    <?php }}else{ ?>
        <tr>
          <td colspan="3">Tidak ada data</td>
        </tr>
      <?php } ?>
  </tbody>
</table>
  </div>
        </div>
      </div>

      <!-- Footer -->
      <footer>
        <div class="container">
          <small>Copyright &copy; 2022 - Malwicam</small>
        </div>
      </footer>

      <script>
          $(document).ready(function() {
              $("#search").keyup(function() {
                    $.ajax({
                        type: 'POST',
                        url: 'search-datakategori.php',
                        data: {
                            search: $(this).val()
                        },
                        cache: false,
                        success: function(data) {
                            $("#tampil").html(data);
                        }
                    });
              });
          });
      </script>

  
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