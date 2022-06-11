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

    <title>Tambah Produk</title>
    <link rel="shortcut icon" href="img/icon-addressbar.png">
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
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
          <h3>Tambah Data Produk</h3>
          <div class="box">
            <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                <select class="input-control" name="kategori" required>
                    <option value="">--Pilih--</option>
                    <?php
                        $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                        while($r = mysqli_fetch_array($kategori)){
                    ?>
                    <option value="<?php echo $r['category_id'] ?>"><?php echo $r['category_name'] ?></option>
                    <?php } ?>
                </select>
                <input type="text" name="nama" class="input-control" placeholder="Nama Produk" required>
                <input type="text" name="harga" class="input-control" placeholder="Harga" required>
                <input type="file" name="gambar" class="input-control" required>
                <textarea class="input-control" name="deskripsi" placeholder="Deskripsi" required></textarea><br>
                
                <select class="input-control" name="status" >
                    <option value="">--Pilih--</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
            <?php 
                if(isset($_POST['submit'])) {
                    
                    // menampung inputan dari form
                    $kategori   = $_POST['kategori'];
                    $name       = $_POST['nama'];
                    $harga      = $_POST['harga'];
                    $deskripsi  = $_POST['deskripsi'];
                    $status     = $_POST['status'];

                    // menampung data file upload
                    $filename = $_FILES['gambar']['name'];
                    $temp_name = $_FILES['gambar']['tmp_name'];
                    
                    $type1 = explode('.',$filename);
                    $type2 = $type1[1];

                    $newname = 'produk'.time().'.'.$type2;

                    // menampung data format file yang di ijinkan
                    $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

                    // validasi format file
                    if(!in_array($type2, $tipe_diizinkan)) {
                        // jika format file tidak ada di dalam tipe diizinkan
                        echo '<script>alert("Format file tidak diizinkan")</script>';
                    }else{
                        // jika format file sesuai dengan yang ada di dalam array tipe diizinkan
                        // proses upload file sekaligus insert
                        move_uploaded_file($temp_name, './produk/'.$newname);
                        
                        $insert = mysqli_query($conn, "INSERT INTO tb_product VALUES (
                            null,
                            '".$kategori."',
                            '".$name."',
                            '".$harga."',
                            '".$deskripsi."',
                            '".$newname."',
                            '".$status."',
                            null
                                ) ");
                        if($insert) {
                            echo '<script>alert("Tambah data berhasil")</script>';
                            echo '<script>window.location="data-produk.php"</script>';
                        }else{
                            echo 'gagal'.mysqli_error($conn);
                        }
                    
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

      <script>
                        CKEDITOR.replace( 'deskripsi' );
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