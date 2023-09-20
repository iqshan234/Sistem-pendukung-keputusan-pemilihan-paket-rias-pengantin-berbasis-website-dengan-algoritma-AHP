<?php
include "koneksi.php";
?>
<?php
if (isset($_POST['update'])) {
    $id_paket = $_POST['id_paket'];
    $nm_paket = $_POST['nm_paket'];
    // $riasan = $_POST['riasan'];
    $riasan = $_POST['riasan'];
    $jml_orang = $_POST['jml_orang'];
    $jml_pakaian = $_POST['jml_pakaian'];
    $anggaran = $_POST['anggaran'];
    $deskripsi = $_POST['deskripsi'];
    // $img = $_POST['img'];
    $img = $_FILES['img']['name'];

    if ($img != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $img); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['img']['tmp_name'];
        $angka_acak     = rand(1, 999);
        $nama_gambar_baru = $angka_acak . '-' . $img; //menggabungkan angka acak dengan nama file sebenarnya
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru); //memindah file gambar ke folder gambar

            // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
            $a = "UPDATE paket SET nm_paket = '$nm_paket', 
                             riasan = '$riasan',
                             jml_orang = '$jml_orang', 
                             jml_pakaian = '$jml_pakaian', 
                             anggaran = '$anggaran', 
                             deskripsi = '$deskripsi', 
                             img = '$nama_gambar_baru'";
            $a .= "WHERE id_paket = '$id_paket'";
            $b = mysqli_query($koneksi, $a);
            if ($b) {
                echo "<script>alert('Data Paket Berhasil di Update.');window.location='m_satker.php';</script>";
            }
        } else {
            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='a_satker.php';</script>";
        }
    } else {
        $a = "UPDATE paket SET nm_paket = '$nm_paket', 
        riasan = '$riasan',
        jml_orang = '$jml_orang', 
        jml_pakaian = '$jml_pakaian', 
        anggaran = '$anggaran', 
        deskripsi = '$deskripsi'";
        $a .= "WHERE id_paket = '$id_paket'";
        $b = mysqli_query($koneksi, $a);
        if ($b) {
            echo "<script>alert('Alternatif berhasil ditambah.');window.location='m_satker.php';</script>";
        }
    }
}
?>
