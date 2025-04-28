<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PASIEN RUMAH SAKIT</title>
</head>
<body>
    <form action="tambah_poli_proses.php" method="POST">
    <table border="1">
        <tr>
            <td colspan="2" align="center">INPUT DATA PASIEN POLI</td>
        </tr>
        <tr>
            <td>No. Rekam Medis</td>
            <td><input type="int" name="norm" placeholder="Masukan No. RM" required></td>
        </tr>
        <tr>
            <td>Nama Pasien</td>
            <td><input type="text" name="nama" placeholder="Masukan Nama Pasien" required></td>
        </tr>
        <tr>
            <td>Tanggal Kunjungan</td>
            <td><input type="date" name="tanggal"required></td>
        </tr>
        <tr>
            <td>Poli</td>
            <td><select name="poli">
                 <option value="Dalam">Dalam</option>
                 <option value="Jantung">Jantung</option>
                 <option value="Paru-Paru">Paru-Paru</option>
                </select>
            </td>
         </tr>
         <tr>
            <td>Catatan Dokter</td>
            <td><textarea name="catatan" placeholder="Masukan Catatan" required></textarea></td>
        </tr>
        <td colspan="2" align="center">
            <input type="submit" name="simpan" value="SIMPAN">
            <input type="reset" name="batal" value="BATAL">
        </td>
        </tr>
    </table>
    </form>
</body>
</html>