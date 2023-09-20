<?php
include "koneksi.php";


$j = "select a.id_paket, b.nm_paket from analisa_alternatif a, paket b where a.id_paket = b.id_paket group by a.id_paket";
$k = mysqli_query($koneksi, $j);

while ($l = mysqli_fetch_array($k)) {

	$update = "update paket set nilai_akhir = 0 where id_paket =  '" . $l['id_paket'] . "' ";
	$hasil_update = mysqli_query($koneksi, $update);
}


$sql = "delete from analisa_alternatif";


$query = mysqli_query($koneksi, $sql);

echo "<script language='javascript'>
	alert('Data Analisa Alternatif berhasil direset');
	document.location='home2.php';
	</script>";
