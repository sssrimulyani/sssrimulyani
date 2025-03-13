<?php

include "koneksi.php";
$kode   =$_POST['kode'];
$nama   =$_POST['nama'];
$rating   =$_POST['rating'];
$catatan   =$_POST['catatan'];

$simpan = mysqli_query($koneksi, "INSERT INTO tbkue VALUES ('$kode','$nama','$rating','$catatan')");
if ($simpan)
{
    echo "<script>alert('Data ulasan berhasil disimpan');
    window.location.href='data_kue.php';</script>";
}
else
{
    echo "<script>alert('Data ulasan gagal disimpan');
    window.location.href='tambah_kue.php';</script>";

}

?>