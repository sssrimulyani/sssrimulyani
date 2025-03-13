<?php

include "koneksi.php";

$nama =$_POST['nama'];
$harga =$_POST['harga'];

$simpan =mysqli_query ($koneksi, "INSERT INTO tbmakanan VALUES (NULL, '$nama', '$harga')");
if ($simpan)
{
    echo "<script>alert('Data makanan berhasil disimpan');
    window.location.href='data_makanan.php';</script>";
}
else
{
    echo "<script>alert('Data makanan gagal disimpan');
    window.location.href='tambah_makanan.php';</script>";
}

?>
