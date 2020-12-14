<?php
$id = $_POST['id'];
$nama = $_POST['nama'];
$kendaraan = $_POST['kendaraan'];
$platnomor = $_POST['plat_nomor'];
$nomorrangka = $_POST['nomor_rangka'];
$nominal = $_POST['nominal'];
$keterangan = $_POST['keterangan'];

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='pajak';
$db= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if ($db->connect_error){
    die("connection failed : " .$db->connect_error);
}

$stmt = $db->prepare("INSERT INTO tb_pajak (id, nama, kendaraan, plat_nomor, nomor_rangka, nominal, keterangan) values(?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $id, $nama, $kendaraan, $platnomor, $nomorrangka, $nominal, $keterangan);
$stmt->execute();

echo "Selamat, Data Anda Sudah Tersimpan";
$stmt->close();
$db->close();