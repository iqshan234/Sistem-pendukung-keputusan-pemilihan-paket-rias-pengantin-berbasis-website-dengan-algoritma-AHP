<?php
include "../koneksi.php";
$id_jml_pakaian =   $_POST['anggaran_data'];

$anggaran = "SELECT * FROM harga WHERE id_jml_pakaian = $id_jml_pakaian";

$anggaran_qry = mysqli_query($koneksi, $anggaran);
// $output="";
$output = '<option value="">Pilih Anggaran</option>';
while ($anggaran_row = mysqli_fetch_assoc($anggaran_qry)) {
    $output .= '<option value="' . $anggaran_row['id_anggaran'] . '">' . $anggaran_row['anggaran'] . '</option>';
}
echo $output;
