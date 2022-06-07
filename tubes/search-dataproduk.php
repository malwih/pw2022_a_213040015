<?php
if(isset($_POST['search'])) {
include "functions.php";
$no = 1;
$search = $_POST['search'];
$data = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id)  WHERE product_name LIKE '%".$search."%' ");
while($row = mysqli_fetch_array($data)) {



?>

<tr class="align-middle">
      <th scope="row" class="align-middle"><?php echo $no++; ?></th>
      <td><?php echo $row['category_name']; ?></td>
      <td><?php echo $row['product_name']; ?></td>
      <td>Rp. <?php echo number_format($row['product_price']); ?></td>
      <td><a href="produk/<?php echo $row['product_image'] ?>" target="_blank"><img src="produk/<?php echo $row['product_image'] ?>" width="50px"></a></td>
      <td><?php echo ($row['product_status'] == 0 )? 'Tidak Aktif':'Aktif'; ?></td>
      <td>
        <a href="edit-produk.php?id=<?php echo $row['product_id'] ?>" class="btn badge bg-warning">Edit</a>
        <a href="proses-hapus.php?idp=<?php echo $row['product_id'] ?>" onclick="return confirm('Yakin ingin hapus?')" class="btn badge bg-danger">Delete</a>
      </td>
    </tr>

<?php } } ?>