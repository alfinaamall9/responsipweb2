<?php 

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomor1 = $_POST['nomor1'];
$nomor2 = $_POST['nomor2'];
$tipe = $_POST['tipe'];

echo "<head><title>Data Penyewa Kost</title></head>";
$fp = fopen("penyewa.txt", "a+");
fputs($fp, "$nama|$alamat|$nomor1|$nomor2|$tipe\n");
fclose($fp);

header("Location: header2.php")

?>



