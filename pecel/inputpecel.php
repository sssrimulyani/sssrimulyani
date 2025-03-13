<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUMAH MAKAN</title>
</head>
<body>
<form action="tampilpecel.php" method="POST">
        <h2>RUMAH MAKAN PECEL LELE LELO</h2>
        <table border="2">
            <tr>
                <td>NAMA PEMBELI</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>ALAMAT PEMBELI</td>
                <td><textarea name="alamat"></textarea><br></td>
            </tr>
            <tr>
                <td>PAKET</td>
                <td><select name="paket">
                    <option value="paket1">PAKET 1</option>
                    <option value="paket2">PAKET 2</option>
                    <option value="paket3">PAKET 3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>MENU TAMBAHAN</td>
                <td><input type="checkbox" name="nasi"value="nasi">NASI<br>
                    <input type="checkbox" name="kentang"value="kentang">KENTANG GORENG<br>
                    <input type="checkbox" name="telur"value="telur">TELUR REBUS<br>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                <input type="submit" name="proses" value="PROSES">
                <input type="reset" name="batal" value="BATAL">
                </td>
            </tr>
    </form>
</html>