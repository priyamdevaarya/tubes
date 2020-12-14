<?php
include ('koneksi.php');

$sql = "SELECT * FROM tb_pajak";
$result = mysqli_query($connection,$sql);
if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result)){
        $link_update = "<button class='btn btn-warning'><a class='updateData'  href='update.php?id=".$row['id']."'
        id='".$row['id']."' nama='".$row['nama']."' kendaraan='".$row['kendaraan']."' 
        plat_nomor='".$row['plat_nomor']."' nomor_rangka='".$row['nomor_rangka']."' 
        nominal='".$row['nominal']."' keterangan='".$row['keterangan']."'>Ubah</a></button>";

        echo "<tr><td>".$row['id'].
        "</td><td>".$row['nama'].
        "</td><td>".$row['kendaraan'].
        "</td><td>".$row['plat_nomor'].
        "</td><td>".$row['nomor_rangka'].
        "</td><td>".$row['nominal'].
        "</td><td>".$row['keterangan'].
        "</td><td>"
        .$link_update."</td></tr>";
    }

}
?>