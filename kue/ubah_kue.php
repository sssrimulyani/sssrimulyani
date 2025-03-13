<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Ulasan Kue</title>
</head>
<body>
    <form action="ubah_kue_proses.php" method="POST">
    <?php
        include "koneksi.php";
        $id_ubah = $_GET['id_ubah'];
        $query = mysqli_query($koneksi,"SELECT * FROM tbkue WHERE kodekue='$id_ubah'");
        $row=mysqli_fetch_array($query)
    ?>
    <table border="1">
        <tr>
            <td colspan="2" align="center">UBAH DATA ULASAN KUE</td>
        </tr>
        <tr>
            <td>Kode Kue</td>
            <td><input type="text" name="kode" value="<?php echo $row['kodekue']; ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Kue</td>
            <td><input type="text" name="nama" value="<?php echo $row['namakue']; ?>" placeholder="Masukkan Nama Kue" required></td>
        </tr>
        <tr>
            <td>Rating</td>
                <td><select name="rating">
                    <option value="<?php echo $row['namakue']; ?>"><?php echo $row['rating']; ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    </select>
                </td>
        </tr>
        <tr>
            <td>Catatan</td>
            <td><textarea name="catatan" placeholder="Masukan Catatan" required><?php echo $row['catatan']; ?></textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
               <input type="submit" name="ubah" value="UBAH">
               <a href="data_kue.php"><--Kembali</a>
        </td>
        </tr>
    </table>
    </form>
</body>
</html>