<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data Makanan</title>
</head>
<body>
    <form action="tambah_makanan_proses.php" method="POST">
    <table border="1">
        <tr>
            <td colspan="2" align="center">INPUT DATA MAKANAN</td>
        </tr>
        <tr>
            <td>Nama Makanan</td>
            <td><input type="text" name="nama" placeholder="Masukan Nama Barang" required></td>
        </tr>
        <tr>
            <td>Harga Makanan</td>
            <td><input type="text" name="harga" placeholder="Masukan Harga Barang" required></td>
        </tr>
        <tr>
        <td colspan="2" align="center">
            <input type="submit" name="simpan" value="SIMPAN">
            <input type="reset" name="batal" value="BATAL">
        </td>
        </tr>
    </table>
    </form>
</body>
</html>