<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data takjil</title>
</head>
<body>
    <table border="1">
        <tr>
            <th colspan="5" align="center">KEDAI XI PPLG<br>DATA MAKANAN</th>
        </tr>
        <tr align="center">
            <th>NO</th>
            <th>ID MAKANAN</th>
            <th>NAMA MAKANAN</th>
            <th>HARGA MAKANAN</th>
        </tr>
        <?php
        include "koneksi.php";
        $no = 1;
        $query= mysqli_query($koneksi, "SELECT * FROM tbmakanan");
        while($row=mysqli_fetch_array($query))
        {
        ?>
        <tr align="center">
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['idmakanan']; ?></td>
            <td><?php echo $row['namamakanan']; ?></td>
            <td><?php echo $row['hargamakanan']; ?></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="5" align="center"><a href="tambah_makanan.php">Tambah Data Makanan</a></td>
        </tr>
    </table>
</body>
</html>