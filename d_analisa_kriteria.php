<?php
error_reporting(0);
include "koneksi.php";


	$j="select a.id_kriteria_1, b.nm_kriteria from analisa_kriteria a, kriteria b where a.id_kriteria_1 = b.id_kriteria group by a.id_kriteria_1";
            $k=mysqli_query($koneksi,$j);

            while($l=mysqli_fetch_array($k)){

              $update = "update kriteria set jumlah_kriteria = 0 where id_kriteria =  '".$l['id_kriteria_1']."' ";
              $hasil_update = mysqli_query($koneksi, $update);
                
              }

	$sql="delete from analisa_kriteria";
	
	
	$query=mysqli_query($koneksi,$sql);
	
	$sql1="delete from temp";
	
	
	$query1=mysqli_query($koneksi,$sql1);

	echo "<script language='javascript'>
	alert('Data Analisa Kriteria berhasil direset');
	document.location='home2.php';
	</script>";
?>