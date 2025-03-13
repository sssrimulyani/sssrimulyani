<?php
$nama               = $_POST['nama'];
$alamat             = $_POST['alamat'];
$paket              = $_POST['paket'];
$nasi               = $_POST['nasi'];
$kentang            = $_POST['kentang'];
$telur              = $_POST['telur'];

date_default_timezone_set('Asia/Jakarta');
$tgl = date('d/m/Y');
$jam = date('H:i:s') ;


if ($paket == 'paket1') {
    $menu = 'Nasi, Ayam Goreng, Teh Botol ';
    $Harga = 15000;
} else if ($paket == 'paket2') {
    $menu = 'Nasi, Lele Goreng, Es Teh Manis';
    $Harga = 20000;
} else if ($paket == 'paket3') {
    $menu = 'Nasi, Ayam Goreng, Lele Goreng, Es Jeruk';
    $Harga = 25000;
}

if ($nasi == 'nasi'){
    $harganasi = 2500 ;
}
if ($kentang == 'kentang'){
    $hargakentang = 3000 ;
}  
if ($telur == 'telur'){
    $hargatelur = 2000 ;
}
$Tambahan = $harganasi + $hargakentang + $hargatelur;

$Subtotal = $Harga + $Tambahan;

if($Subtotal > 15000){
    $Potongan = $Subtotal * 0.1 ;
    $total = $Subtotal-$Potongan;
}



echo "<pre>";
echo "<h3>RUMAH MAKAN PECEL LELE LELO</h3>";
echo "Tanggal Pesan     : $tgl<br>";
echo "Jam Pesan         : $jam          Nama Pemesan   : $nama<br>";
echo "=======================================================<br>";
echo "Pilihan Paket     : $menu<br>";
echo "Menu  tambahan    : $nasi,$kentang,$telur<br>";
echo "Harga Paket       : $Harga<br>";
echo "Biaya tambahan    : $Tambahan<br>";
echo "=======================================================<br>";
echo "Subtotal          : $Subtotal<br>";
echo "Potongan          : $Potongan<br>";
echo "=======================================================<br>";
echo "Total bayar       : $total<br>";
echo "</pre>";
?>