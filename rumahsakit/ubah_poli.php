<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Ulasan Kue</title>
</head>
<body>
    <form action="ubah_poli_proses.php" method="POST">
    <?php
        include "koneksi.php";
        $id_ubah = $_GET['id_ubah'];
        $query = mysqli_query($koneksi,"SELECT * FROM tbpoli WHERE norm='$id_ubah'");
        $row=mysqli_fetch_array($query)
    ?>
    <table border="1">
        <tr>
            <td colspan="2" align="center">INPUT DATA PASIEN POLI</td>
        </tr>
        <tr>
            <td>No. Rekam Medis</td>
            <td><input type="int" name="norm" value="<?php echo $row['norm']; ?>" readonly></td>
        </tr>
        <tr>
            <td>Nama Pasien</td>
            <td><input type="text" name="nama" value="<?php echo $row['namapasien']; ?>" required></td>
        </tr>
        <tr>
            <td>Tanggal Kunjungan</td>
            <td><input type="date" name="tanggal" value="<?php echo $row['tanggalkunjungan']; ?>" required></td>
        </tr>
        <tr>
            <td>Poli</td>
                <td><select name="poli">
                    <option value="<?php echo $row['poli']; ?>"><?php echo $row['poli']; ?></option>
                    <option value="Dalam">Dalam</option>
                    <option value="Jantung">Jantung</option>
                    <option value="Paru-Paru">Paru-Paru</option>
                    </select>
                </td>
        </tr>
        <tr>
            <td>Catatan</td>
            <td><textarea name="catatan" placeholder="Masukan Catatan"><?php echo $row['catatandokter']; ?></textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
               <input type="submit" name="ubah" value="UBAH">
               <a href="data_poli.php"><--Kembali</a>
        </td>
        </tr>
    </table>
    </form>
</body>
</html>