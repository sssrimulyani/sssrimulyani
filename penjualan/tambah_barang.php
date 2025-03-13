<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
</head>
<body>
    <form action="tambah_barang_proses.php" Method="POST">
        <table border="1">
            <tr>
                <td colspan="2" align="center">
                    TAMBAH DATA BARANG
               </td>
            </tr>
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kode" placeholder="Masukkan Kode Barang" required></td>
           </tr>
           <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama" placeholder="Masukkan Nama Barang" required></td>
           </tr> 
           <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" placeholder="Masukkan Stok" required></td>
           </tr> 
           <tr>
                <td>Harga Barang</td>
                <td><input type="text" name="harga" placeholder="Masukkan Harga Barang" required></td>
           </tr> 
           <tr>
            <td  colspan="2" align="center">
                <input type="submit" name="simpan" value="SIMPAN">
                <input type="reset" name="batal" value="BATAL">
            </td>
           </tr>
        </table>
        </form>
</body>
</html>