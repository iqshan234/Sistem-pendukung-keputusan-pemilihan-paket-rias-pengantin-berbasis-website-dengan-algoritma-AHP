<?php
include "koneksi.php";

if (isset($_GET['id_paket'])) {
	$kode = $_GET['id_paket'];
	$sql = "delete from paket where id_paket='$kode'";

	$query = mysqli_query($koneksi, $sql);
	echo "<script language='javascript'>
	alert('Data Paket Rias berhasil dihapus');
	document.location='m_satker.php';
	</script>";
} else {
	echo "Data yang dihapus belum dipilih";
}
