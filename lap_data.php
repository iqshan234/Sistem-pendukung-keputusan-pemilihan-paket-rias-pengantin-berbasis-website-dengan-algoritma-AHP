
<?php
error_reporting(0);
session_start();
include 'koneksi.php';

//ProsesCetak

ob_start();
require("html2pdf/html2pdf.class.php");
//$now = date('Y-m-d-His');
//$now2 = date('d-m-Y');
$filename = "Laporan Analisa Perbandingan Paket Rias Idean.pdf";
$content = ob_get_clean();

//Menampilkan Data
$periode = $_POST['periode']; 

$query = mysqli_query($koneksi, "SELECT a.id_paket, b.nm_paket, b.nilai_akhir FROM analisa_alternatif a, paket b where a.id_paket = b.id_paket  and a.periode='$periode'
  	  group by a.id_paket order by b.nilai_akhir desc");
$data = mysqli_fetch_array($query);

$content = "<style>
  p.kop{
    margin-left:45px;
	margin-bottom:1px;
  }
    p.kop1{
    margin-left:50px;
  }
  
  </style>
<table border='0' width='600px' align='center'>
<tr>
    <th rowspan='4' width='100px'><img src='idean.jpg' align='center'></th>
    <th align='center'>SANGGAR RIAS IDEAN</th>
    
  </tr>
  <tr>
    <td colspan='2'align='center'> Alamat: Jl. Masjid Darul Mualimin Rt 03 Rw 07 Kecamatan Pondok Aren,</td>
	
  </tr>
  <tr>
  <td align='center'>  Kelurahan Pondok Kacang Timur, Kota Tanggerang Selatan.</td> 
  </tr>
  <tr>
    <td align='center'>Telp: 08161913978 / Email: Maryaniyani388@Gmail.Com</td>
    
  </tr>
</table>
  
  	
 
		<p align='center'>___________________________________________________________________________________________________</p>

		<h5 align='center'>LAPORAN ANALISA PERBANDINGAN PAKET SANGGAR RIAS IDEAN : Hari Ini</h5>
		
		
		
	
	<table cellpadding='0' cellspacing='1' style='width: 210mm;' border=0.5 align='center'>
		<tr align='center' bgcolor='#CCCCCC'>
		<th style='width: 100px; height: 20px'>Urutan</th>
			<th style='width: 100px; height: 20px'>Kode Rias</th>
			<th style='width: 150px; height: 20px'>Nama Paket</th>
			<th style='width: 150px; height: 20px'>Nilai Akhir</th>
			
		
		</tr>";

//Menampilkan Data
$periode = $_POST['periode'];
$query = "SELECT a.id_paket, b.nm_paket, b.nilai_akhir FROM analisa_alternatif a, paket b where a.id_paket = b.id_paket  and a.periode='$periode'
			  group by a.id_paket order by b.nilai_akhir desc";

$sql = mysqli_query($koneksi, $query);
$no = 1; // nomor baris
while ($r = mysqli_fetch_array($sql)) {

	$content .= "<tr bgcolor='#0000' align='center'>
	<td>$no</td>
        <td style='text-transform:capitalize'>$r[id_paket]</td>
        <td style='text-align:center'>$r[nm_paket]</td>
		<td style='text-align:center'>$r[nilai_akhir]</td>
      </tr>";

	$no++;
}




$content .= "
	</table>
	<br>
	
	<br><br>
	<table cellpadding='0' style='width: 210mm;'  align='left'>
		<tr align='center'>
		<th style='width: 50px; height: 20px'></th>
			<th style='width: 160px; height: 20px'></th>
			<th style='width: 150px; height: 20px'></th>
			<th style='width: 150px; height: 20px'></th>
			<th style='width: 160px; height: 5px'>Pemilik Sanggar Rias</th>
		
			
		
		</tr>
		<th style='width: 50px; height: 20px'></th>
			<th style='width: 155px; height: 20px'></th>
			<th style='width: 150px; height: 20px'></th>
			<th style='width: 55px; height: 20px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th style='width: 55px; height: 2px'></th>
			<th rowspan='4' width='20px'><img src='ttd.png' align='center'></th>
		</table>
		<br><br><br><br>
		
	<table cellpadding='0' style='width: 210mm;'  align='left'>
		<tr align='center'>
		<th style='width: 50px; height: 20px'></th>
			<th style='width: 155px; height: 20px'></th>
			<th style='width: 150px; height: 20px'></th>
			<th style='width: 110px; height: 20px'></th>
			<th style='width: 40px; height: 20px'></th>
		
			<br><br><br><br>
		
		</tr>
		<th style='width: 50px; height: 20px'></th>
			<th style='width: 155px; height: 20px'></th>
			<th style='width: 150px; height: 20px'></th>
			<th style='width: 110px; height: 20px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th style='width: 105px; height: 50px'><br><br><br></th>
			<th style='width: 150px; height: 70px'>Maryani</th>


		</table>
	
	
  ";


ob_end_clean();
// conversion HTML => PDF
try {
	$html2pdf = new HTML2PDF('P', 'A4', 'fr', false, 'ISO-8859-15', array(2, 2, 2, 2));
	$html2pdf->setDefaultFont('Arial');
	$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
	$html2pdf->Output($filename);
} catch (HTML2PDF_exception $e) {
	echo $e;
}
