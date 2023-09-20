<?php
include "../koneksi.php";
$id_jml_orang =   $_POST['pakaian_data'];

$pakaian = "SELECT * FROM pakaian WHERE id_jml_orang = $id_jml_orang";

$pakaian_qry = mysqli_query($koneksi, $pakaian);
// $output="";
$output = '<option value="">Pilih Jumlah Pakaian Perorang</option>';
while ($pakaian_row = mysqli_fetch_assoc($pakaian_qry)) {
    $output .= '<option value="' . $pakaian_row['id_jml_pakaian'] . '">' . $pakaian_row['jml_pakaian'] . '</option>';
}
echo $output;
