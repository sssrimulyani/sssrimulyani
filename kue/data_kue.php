<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Ulasan Kue</title>
</head>
<body>
    <table border="1">
        <tr>
            <th colspan="7" align="center">CODEGREEN<br>INPUT DATA ULASAN KUE</th>
        </tr>
        <tr align="center">
            <th>NO</th>
            <th>KODE KUE</th>
            <th>NAMA KUE</th>
            <th>RATING</th>
            <th>CATATAN</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($koneksi,"SELECT * FROM tbkue");
        while($row=mysqli_fetch_array($query))
        {
        ?>
        <tr align="center">
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['kodekue']; ?></td>
            <td><?php echo $row['namakue']; ?></td>
            <td><?php echo $row['rating']; ?></td>
            <td><?php echo $row['catatan']; ?></td>
            <td><a href="ubah_kue.php?id_ubah=<?php echo $row['kodekue']; ?>">UBAH</a></td>
            <td><a href="hapus_kue.php?id_hapus=<?php echo $row['kodekue']; ?>">HAPUS</a></td>
        </tr>
        <tr>
        <?php } ?>
        <tr>
            <td colspan="7" align="center"><a href="tambah_kue.php">Tambah Data Ulasan Kue</a></td>
        </tr>
    </table>  
</body>
</html>