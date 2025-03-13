<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <table border="1">
        <tr>
            <th colspan="5" align="center">DATA BARANG</th>
        </tr>
        <tr align="center">
            <th>NO</th>
            <th>KODE BARANG</th>
            <th>NAMA BARANG</th>
            <th>STOK BARANG</th>
            <th>HARGA BARANG</th>
        </tr>
        <?php
        include "config/koneksi.php";
        $no = 1;
        $query = mysqli_query($koneksi,"SELECT * FROM tbbarang");
        while($row=mysqli_fetch_array($query))
        {
        ?>
        <tr align="center">
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['kodebarang']; ?></td>
            <td><?php echo $row['namabarang']; ?></td>
            <td><?php echo $row['stok']; ?></td>
            <td><?php echo $row['hargabarang']; ?></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="5" align="center"><a href="tambah_barang.php">Tambah Data Barang</a></td>
        </tr>
    </table>   
</body>
</html>