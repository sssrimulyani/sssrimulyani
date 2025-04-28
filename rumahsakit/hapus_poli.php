<?php
include "koneksi.php";

$id=$_GET['id_hapus'];
$simpan=mysqli_query($koneksi,"DELETE FROM tbpoli WHERE norm='$id'");
if ($simpan) {
echo "<script>alert('Data pasien berhasil disimpan');
window.location.href='data_poli.php';</script>";
}
else
{
echo "<script>alert('Data pasien gagal disimpan')
window.location.href='data_poli.php';</script>";
}

?>