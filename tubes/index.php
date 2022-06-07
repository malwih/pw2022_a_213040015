<?php
    include 'functions.php';
    $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
    $a = mysqli_fetch_object($kontak);
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </head>
  <body>
      <!-- Header -->
      <header>
          <div class="container">
          <h1><a href="index.php">Malwicam</a></h1>
          <ul>
              <li><a href="produk.php">Produk</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="registrasi.php">Registrasi</a></li>
          </ul>
          </div>
      </header>

      <!-- Search -->
      <div class="search">
          <div class="container">
              <!-- <form action="" method="POST"> -->
                  <input class="searchform" type="text" id="search" placeholder="Cari Produk..." autocomplete="off" autofocus class="keyword">
                  <!-- <input type="submit" class="btn btn-primary" name="tombol-cari" value="Cari Produk"> -->
              <!-- </form> -->
          </div>
      </div>

      <!-- Category -->
      <div class="section">
          <div class="container">
              <h3>Kategori</h3>
              <div class="box">
                  <?php
                    $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                    if(mysqli_num_rows($kategori) > 0) {
                        while($k = mysqli_fetch_array($kategori)) {

                  ?>
                  <a href="produk.php?kat=<?php echo $k['category_id'] ?>">
                <div class="col-5">
                    <img src="img/icon-category.png" width="50px" style="margin-bottom: 5px">
                    <p><?php echo $k['category_name'] ?></p>
                </div>
                        </a>
                <?php }}else{ ?>
                        <p>Kategori tidak ada</p>
                    <?php } ?>
              </div>
          </div>
      </div>

      <!-- New Product -->

      <div class="section">
          <div class="container">
              <h3>Produk Terbaru</h3>
              <div id="tampil" class="box">
                  <?php
                    $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");
                    if(mysqli_num_rows($produk) > 0) {
                        while($p = mysqli_fetch_array($produk)) {
                  ?>
                  <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
                    <div class="col-4">
                        <img src="produk/<?php echo $p['product_image'] ?>">
                        <p class="nama"><?php echo substr($p['product_name'], 0, 25)  ?></p>
                        <p class="harga"><?php echo number_format($p['product_price']) ?></p>
                    </div>
                        </a>
                    <?php }}else{ ?>
                        <p>Produk tidak ada</p>
                    <?php } ?>
              </div>
          </div>
      </div>

      <!-- Footer -->

      <div class="footer">
          <div class="container">
              <h4>Alamat</h4>
              <p><?php echo $a->admin_address ?></p>

              <h4>Email</h4>
              <p><?php echo $a->admin_email ?></p>

              <h4>No.HP</h4>
              <p><?php echo $a->admin_telp ?></p>
              <small>Copyright &copy; 2022 - Malwicam</small>
          </div>
      </div>

      <script>
          $(document).ready(function() {
              $("#search").keyup(function() {
                    $.ajax({
                        type: 'POST',
                        url: 'search.php',
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