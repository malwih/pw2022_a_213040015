<?php
if(isset($_POST['search'])) {
include "functions.php";
$no = 1;
$search = $_POST['search'];
$data = mysqli_query($conn, "SELECT * FROM tb_category WHERE category_name LIKE '%".$search."%' ");
while($row = mysqli_fetch_array($data)) {



?>

<tr class="align-middle">
      <th scope="row" class="align-middle"><?php echo $no++; ?></th>
      <td><?php echo $row['category_name']; ?></td>
      <td>
        <a href="edit-kategori.php?id=<?php echo $row['category_id'] ?>" class="btn badge bg-warning">Edit</a>
        <a href="proses-hapus.php?idk=<?php echo $row['category_id'] ?>" onclick="return confirm('Yakin ingin hapus?')" class="btn badge bg-danger">Delete</a>
      </td>
    </tr>

<?php } } ?>