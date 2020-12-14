<?php

include ('koneksi.php');

$nama = $_POST['nama'];
$kendaraan = $_POST['kendaraan'];
$plat_nomor = $_POST['plat_nomor'];
$nomor_rangka = $_POST['nomor_rangka'];
$nominal = $_POST['nominal'];
$keterangan = $_POST['keterangan'];

$sql = "UPDATE tb_pajak SET nama='$nama', kendaraan='$kendaraan', plat_nomor='$plat_nomor', nomor_rangka='$nomor_rangka', nominal='$nominal', keterangan='$keterangan' WHERE id='".$_GET['id']."'";
$result = mysqli_query($connection,$sql);

?>
