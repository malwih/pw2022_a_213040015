<style>
    #judul{
        text-align:center;
        font-size:14pt;
        font-weight:bold;
        margin-bottom:20px;
    }
    table{
        border-collapse:collapse;
    }
    th{
        padding:5px;
        text-align:center;
    }
    td{
        padding-left:5px;
        padding-right:5px;
    }
</style>

<?php
  include 'functions.php';
?>

<div id="judul">LAPORAN DATA PRODUK</div>

<table border="1" align="center">
    <tr>
        <th width="20">No</th>
        <th width="50">Kategori</th>
        <th width="250">Nama Produk</th>
        <th width="100">Harga</th>
        <th width="100">Status</th>
</tr>
<?php 
        $no = 1;
        $produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) ORDER BY product_id DESC");
        if(mysqli_num_rows($produk) > 0){
        while($row = mysqli_fetch_array($produk)) { ?>
<tr>
    <td align="center"><?php echo $no++; ?></td>
    <td align="center"><?php echo $row['category_name']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    <td align="left">Rp. <?php echo number_format($row['product_price']); ?></td>
    <td align="center"><?php echo ($row['product_status'] == 0 )? 'Tidak Aktif':'Aktif'; ?></td>
</tr>
<?php }}else{ ?>
        <tr>
            <td colspan="7">Tidak ada data</td>
        </tr>
    <?php } ?>
</table>


