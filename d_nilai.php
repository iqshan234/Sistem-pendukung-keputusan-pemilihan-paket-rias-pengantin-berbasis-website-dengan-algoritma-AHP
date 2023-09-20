<?php
include "koneksi.php";

if(isset($_GET['id_nilai'])){
	$kode=$_GET['id_nilai'];
	$sql="delete from nilai where id_nilai='$kode'";
	
	
	$query=mysqli_query($koneksi,$sql);
	echo "<script language='javascript'>
	alert('Data Nilai berhasil dihapus');
	document.location='m_nilai.php';
	</script>";
	}else{
	echo "Data yang dihapus belum dipilih";
}
?>