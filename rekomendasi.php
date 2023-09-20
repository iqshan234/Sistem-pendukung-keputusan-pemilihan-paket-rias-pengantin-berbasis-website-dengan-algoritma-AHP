<?php
// include_once 'koneksi.php';
include "koneksi.php";
// $query = "SELECT * FROM paket Order by id_paket";
$query = "SELECT * FROM riasan";
$result = mysqli_query($koneksi, $query);

$temp_rekomendasi = "SELECT * FROM temp_rekomendasi";
$temp = mysqli_query($koneksi, $temp_rekomendasi);
$rek = mysqli_fetch_array($temp)
// $result = $db->query($query)


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPK AHP </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <!-- <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css"> -->
  <!-- bootstrap datepicker -->
  <!-- <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"> -->
  <!-- iCheck for checkboxes and radio inputs -->
  <!-- <link rel="stylesheet" href="plugins/iCheck/all.css"> -->
  <!-- Bootstrap Color Picker -->
  <!-- <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css"> -->
  <!-- Bootstrap time Picker -->
  <!-- <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css"> -->
  <!-- Select2 -->
  <!-- <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
  <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
  <!-- <title>CodingHax</title> -->


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-white sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Sanggar Rias Idean</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Sanggar Rias</b> Idean</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- Notifications: style can be found in dropdown.less -->

            <!-- Tasks: style can be found in dropdown.less -->

            <!-- User Account: style can be found in dropdown.less -->

            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <a href="login.php">
                <img src="dist/img/user2-160x160.jpg" width="60" height="55" class="user-image" alt="User Image">Admin

              </a>

              <!-- Control Sidebar Toggle Button -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">

          </div>
          <div class="pull-left info">

          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-fw fa-home"></i>
              <span>Home</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-eye"></i>
              <span>Data Rekomendasi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="rekomendasi.php"><i class="fa fa-circle-o"></i>Rekomendasi Paket</a></li>

          </li>
        </ul>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-user"></i>
            <span>Riasan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="riasan2.php"><i class="fa fa-circle-o"></i> Paket Rias</a></li>
        </li>
        </ul>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-envelope"></i>
            <span>Kontak</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="contak.php"><i class="fa fa-circle-o"></i> Kontak</a></li>
            <li><a href="about.php"><i class="fa fa-circle-o"></i> About Us</a></li>
          </ul>
        </li>
        </li>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data Rekomendasi
          <small>Paket</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Rekomendasi</a></li>
          <li class="active">Paket</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">


            <div class="box box-info justify-content-center align-items-center">

              <!-- /.box-header -->
              <!-- form start -->

              <div class="box">
                <div class="box-header">
                  <h1 class="box-title"> Rekomendasi Paket Rias Untuk Anda</h1><br><br>

                  <!-- <div class="col-md-4 col-offset-4"> -->
                  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">


                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label for="riasan">Jenis Rias</label>
                        <select name="riasan" id="riasan" class="form-control" required>
                          <option selected disabled>Pilih Jenis Rias</option>
                          <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                            <option value="<?php echo $row['id_riasan'] ?>"><?php echo $row['riasan'] ?></option>
                          <?php endwhile; ?>
                        </select>
                      </div>
                      <div class="col-sm-6">
                        <label for="riasan2" type="hidden">Pilihan Jenis Riasan Sebelumnya</label>
                        <br>
                        <input type="text" class="form-control" name="riasan2" id="riasan2" placeholder="Jenis Riasan" value="<?= $rek['riasan'] ?>" readonly>

                        </select>

                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label for="">Jumlah Orang</label>
                        <select name="jml_orang" id="jml_orang" class="form-control" required>
                          <option selected disabled>Pilih Jumlah Orang</option>
                        </select>
                      </div>
                      <div class="col-sm-6">
                        <label for="">Pilihan Jumlah Orang Sebelumnya</label>
                        <br>
                        <!-- <select name="jml_orang2" id="jml_orang2" class="form-control" required>
                          <option selected disabled>Jumlah Orang</option>
                        </select> -->
                        <input type="text" class="form-control" name="jml_orang2 " id="jml_orang2" placeholder="Jumlah Orang" value="<?= $rek['jml_orang'] ?>" readonly>
                      </div>

                    </div>

                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label for="">Jumlah Pakaian Perorang</label>
                        <select name="jml_pakaian" id="jml_pakaian" class="form-control" required>
                          <option selected disabled>Pilih Jumlah Pakaian Perorang</option>
                        </select>
                      </div>
                      <div class="col-sm-6">
                        <label for="">Pilihan Jumlah Pakaian Sebelumnya</label>
                        <br>
                        <input type="text" class="form-control" name="jml_pakaian2 " id="jml_pakaian2" placeholder="Jumlah Pakaian" value="<?= $rek['jml_pakaian'] ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label for="">Anggaran</label>
                        <select name="anggaran" id="anggaran" class="form-control" required>
                          <option selected disabled>Pilih Anggaran</option>
                        </select>
                      </div>
                      <div class="col-sm-6">
                        <label for="">Pilihan Anggaran Sebelumnya</label>
                        <br>
                        <input type="text" class="form-control" name="anggaran2 " id="anggaran2" placeholder="Anggaran" value="<?= $rek['anggaran'] ?>" readonly </div>
                      </div>
                      <br>

                    </div>
                    <button type="submit" class="btn btn-success" value="Cari Paket" onclick="MyRekomendasi()">Cari Paket </button>
                    <!-- <button t class="btn btn-warning" onclick="MyRekomendasi()">Reset</button> -->
                    <a class="btn btn-warning" href="rekomendasi.php">Reset</a>



                  </form>

                  <!-- </div> -->




                </div>
              </div>
            </div>
          </div>
          <!-- /.box -->
        </div>

        <?php
        if (isset($_GET['anggaran'])) {
          // $jml_pakaian = trim($_GET['jml_pakaian']);
          $anggaran = trim($_GET['anggaran']);
          // $jml_pakaian2 = trim($_GET['jml_pakaian']);
          // $jml_orang2 = trim($_GET['jml_orang']);
          // $riasan2 = trim($_GET['riasan']);

          // $save = 



          //menampilkan pegawai berdasarkan unit kerja yang dipilih pada combobox
          // $tampil = mysqli_query($koneksi, "SELECT * FROM paket WHERE jml_pakaian='$jml_pakaian' ORDER BY anggaran ASC");
          $tampil = mysqli_query($koneksi, "SELECT * FROM paket WHERE anggaran='$anggaran' ORDER BY anggaran ASC");




          $riasa = trim($_GET['riasan']);

          if ($riasa = "1") {
            $riasa = "Riasan Daerah";
          } elseif ($riasa = "2") {
            $riasa = "Riasan Nasional";
          } else {
            $riasa = "Riasan Daerah dan Nasional";
          }

          $jml_orang = trim($_GET['jml_orang']);
          $jml_pakaian = trim($_GET['jml_pakaian']);
          $anggaran = trim($_GET['anggaran']);

          // $delete = "";
          $delete = "delete from temp_rekomendasi";
          $deletee = mysqli_query($koneksi, $delete);

          $save = "insert into temp_rekomendasi values('','$riasa','$jml_orang','$jml_pakaian','$anggaran')";
          $ok = mysqli_query($koneksi, $save);

          while ($tpeg = mysqli_fetch_array($tampil)) {

        ?>

            <div class="card">

              <h4><b>Rekomendasi Paket Untuk Anda Adalah <?php echo $tpeg['nm_paket']; ?></b></h4>
              <img src="<?php echo $tpeg['img']; ?>" class="card-img-top" alt="..." width="230px">
              <div class="card-body">
                <br>
                <p style="" class="card-text" align="justify"><?php echo $tpeg['deskripsi']; ?></p>
                <a href="https://api.whatsapp.com/send?phone=628161913978&text=Halo Rias Pengantin Idean" class="btn btn-primary">Order disini</a>
                <hr>

              </div>
            </div>

        <?php
          }
        }
        ?>

        <?php

        ?>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


  <!-- /.content-wrapper -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./plug inn -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->



  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  < <script src="bower_components/fastclick/lib/fastclick.js">
    </script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
      $('#riasan').on('change', function() {
        var id_riasan = this.value;
        // console.log(id_riasan);
        $.ajax({
          url: 'ajax/jumlahOrang.php',
          type: "POST",
          data: {
            riasan_data: id_riasan
          },
          success: function(result) {
            $('#jml_orang').html(result);
            // console.log(result);
          }
        })
      });

      $('#jml_orang').on('change', function() {
        var jml_orang = this.value;
        // console.log(id_jml_orang);
        $.ajax({
          url: 'ajax/jumlahPakaian.php',
          type: "POST",
          data: {
            pakaian_data: jml_orang
          },
          success: function(result) {
            $('#jml_pakaian').html(result);
            // console.log(result);
          }
        })
      });

      $('#jml_pakaian').on('change', function() {
        var id_jml_pakaian = this.value;
        console.log(id_jml_pakaian);
        $.ajax({
          url: 'ajax/anggaran.php',
          type: "POST",
          data: {
            anggaran_data: id_jml_pakaian
          },
          success: function(result) {
            $('#anggaran').html(result);
            // console.log(result);
          }
        })
      });

      function hapus() {

      }

      function MyRekomendasi() {
        var riasan = document.getElementById("riasan").value;
        console.log();
        var jml_orang = document.getElementById("jml_orang").value;
        var jml_pakaian = document.getElementById("jml_pakaian").value;
        var anggaran = document.getElementById("anggaran").value;

        document.getElementById("riasan2").innerHTML = riasan;
        document.getElementById("jml_orang2").innerHTML = jml_orang;
        document.getElementById("jml_pakaian2").innerHTML = jml_pakaian;
        document.getElementById("anggaran2").innerHTML = anggaran;
      }


      // function FetchJenis(id_anggaran) {
      //   $('#jns_rias').html('');
      //   $('#jml_orang').html('<option>Jumlah Orang</option>');
      //   $.ajax({
      //     type: 'post',
      //     url: 'ajaxdata.php',
      //     data: {
      //       id_anggaran: id_jns_rias
      //     },
      //     success: function(data) {
      //       $('#jns_rias').html(data);
      //     }

      //   })
      // }
    </script>
    <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/green-bintang-jatuh.js" type="text/javascript"></script>
    <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju-2.js" type="text/javascript"></script>
    <style type="text/css">
      * {
        cursor: url(http://cur.cursors-4u.net/anime/ani-12/ani1159.ani), url(http://cur.cursors-4u.net/anime/ani-12/ani1159.gif), auto !important;
      }

      .card {
        display: inline;
      }
    </style><a href="http://www.cursors-4u.com/cursor/2012/01/01/zora-one-piece.html" target="_blank" title="Zora - One Piece"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Zora - One Piece" style="position:absolute; top: 0px; right: 0px;" /></a> </script>
</body>

</html>