<?php
if(isset($_POST['search'])) {
include "functions.php";
$no = 1;
$search = $_POST['search'];
$data = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_name LIKE '%".$search."%' ");
while($p = mysqli_fetch_array($data)) {



?>

<div class="col-4">
                        <img src="produk/<?php echo $p['product_image'] ?>">
                        <p class="nama"><?php echo substr($p['product_name'], 0, 25)  ?></p>
                        <p class="harga"><?php echo number_format($p['product_price']) ?></p>
                    </div>

<?php } } ?>