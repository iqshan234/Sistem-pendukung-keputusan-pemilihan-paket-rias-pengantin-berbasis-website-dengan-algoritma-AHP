<?php
include "../koneksi.php";
$id_riasan =   $_POST['riasan_data'];

$jml_orang = "SELECT * FROM paket WHERE id_riasan = $id_riasan";

$jml_orang_qry = mysqli_query($koneksi, $jml_orang);
// $output="";
$output = '<option value="">Pilih Jumlah Orang</option>';
while ($jml_orang_row = mysqli_fetch_assoc($jml_orang_qry)) {
    $output .= '<option value="' . $jml_orang_row['jml_orang'] . '">' . $jml_orang_row['jml_orang'] . '</option>';
}
echo $output;
