<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['username'])) {
  header('location:index.php');
} else {
  $username = $_SESSION['username'];
  $hak_akses = $_SESSION['hak_akses'];
}
?>
<?php
include "koneksi.php";
if (isset($_GET['id_paket'])) {
  $id_paket = $_GET['id_paket'];
  $sql = "select * from paket where id_paket='$id_paket'";
  $query = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_array($query);
} else {
  echo "Data yang diubah belum ada";
}
?>

<?php
include "koneksi.php";
?>
<?php
if (isset($_POST['update'])) {
  $id_paket = $_POST['id_paket'];
  $nm_paket = $_POST['nm_paket'];
  // $riasan = $_POST['riasan'];
  $riasan = $_POST['riasan'];
  if ($_POST['riasan'] == "Riasan Daerah") {
    $jns_rias = "1";
  } elseif ($_POST['riasan'] == "Riasan Nasional") {
    $jns_rias = "2";
  } else {
    $jns_rias = "3";
  };
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
                             jns_rias = '$jns_rias',
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
  <link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <!-- <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css"> -->
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

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
      <a href="index2.html" class="logo">
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
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"><b><?php echo $username; ?></b></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $username; ?> - <?php echo $hak_akses; ?>
                  </p>
                </li>
                <!-- Menu Body -->

                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
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
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $username; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
              <li class="active"><a href="home2.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-cogs"></i>
              <span>Data Master</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="m_kriteria.php"><i class="fa fa-circle-o"></i> Kriteria</a></li>
              <li><a href="m_satker.php"><i class="fa fa-circle-o"></i> Alternatif</a></li>
              <li><a href="m_nilai.php"><i class="fa fa-circle-o"></i> Nilai</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i>
              <span>Analisa</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="analisa_kriteria.php"><i class="fa fa-circle-o"></i> Analisa Kriteria</a></li>
              <li><a href="analisa_alternatif.php"><i class="fa fa-circle-o"></i> Analisa Alternatif</a></li>

            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-eye"></i>
              <span>Data Laporan</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="l_rangking.php"><i class="fa fa-circle-o"></i> Laporan Data Paket</a></li>

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
            <li><a href="riasan.php"><i class="fa fa-circle-o"></i> Paket Rias</a></li>

        </li>
        </ul>


        </li>
      </section>
      <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data Master
          <small>Rias Pengantin</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Data Master</a></li>
          <li class="active">Rias Pengantin</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">


            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Ubah Data Paket Rias Pengantin</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data" action="p_editPaket.php">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kode Paket</label>

                    <div class="col-sm-4">
                      <input type="text" name="id_paket" class="form-control" placeholder="Kode Paket" value="<?php echo $data['id_paket']; ?>" readonly>
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nama Paket</label>

                    <div class="col-sm-4">
                      <input type="text" name="nm_paket" class="form-control" placeholder="Nama Paket" value="<?php echo $data['nm_paket']; ?>">
                    </div>

                  </div>
                  <br><br>
                  <div class="form-group">
                    <label for="inputnama" class="col-sm-2 control-label">Jenis Riasan</label>
                    <div class="col-sm-4">
                      <select name="riasan" id="riasan" class="form-control" required>
                        <option selected value="<?php echo $data['riasan']; ?>"><?php echo $data['riasan']; ?></option>
                        <option value="Riasan Daerah">Riasan Daerah</option>
                        <option value="Riasan Nasional">Riasan Nasional</option>
                        <option value="Riasan Daerah dan Nasional">Riasan Daerah dan Nasional</option>
                      </select>

                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">
                    <label for="inputnama" class="col-sm-2 control-label">Jumlah Orang</label>
                    <div class="col-sm-4">
                      <input type="number" name="jml_orang" class="form-control" placeholder="Jumlah Orang" value="<?php echo $data['jml_orang']; ?>">
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">
                    <label for="inputnama" class="col-sm-2 control-label">Jumlah Pakaian</label>
                    <div class="col-sm-4">
                      <input type="number" name="jml_pakaian" class="form-control" placeholder="Jumlah Pakaian Perorang" value="<?php echo $data['jml_pakaian']; ?>">
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">
                    <label for="inputnama" class="col-sm-2 control-label">Anggaran</label>
                    <div class="col-sm-4">
                      <input type="number" name="anggaran" class="form-control" placeholder="Anggaran" value="<?php echo $data['anggaran']; ?>">
                    </div>
                  </div>
                  <br><br>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
                    <div class="col-sm-4">
                      <textarea class="form-control" rows="3" placeholder="Deskripsi" name="deskripsi"><?php echo $data['deskripsi']; ?></textarea>
                    </div>
                    <br><br><br><br>
                    <div class="form-group">


                      <label for="inputPassword3" class="col-sm-2 control-label">Foto Paket</label>
                      <div class="card-body">
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                      </div>

                      <div class="col-sm-4">
                        <tr>
                          <td> <img src="gambar/<?php echo $data['img']; ?>" class="card-img-top" alt="..." style="width: 150px;"></td>
                          <br><br>
                          <td><input type="file" name="img" class="form-control" placeholder="Foto Paket"></td>
                          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar paket</i>
                        </tr>
                      </div>
                    </div>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>
                    <br><br>

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label"></label>
                      <div class="col-sm-10">
                        <br>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                        &nbsp;
                        <button type="reset" class="btn btn-danger">&nbsp;&nbsp;Batal&nbsp;&nbsp;</button>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->

              </form>
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->




    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Select2 -->
  <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="plugins/input-mask/jquery.inputmask.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
  <!-- date-range-picker -->
  <script src="bower_components/moment/min/moment.min.js"></script>
  <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap datepicker -->
  <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- bootstrap color picker -->
  <!-- <script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script> -->
  <!-- bootstrap time picker -->
  <!-- <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script> -->
  <!-- SlimScroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="plugins/iCheck/icheck.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page script -->
  <script>
    $(function() {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Datemask dd/mm/yyyy
      $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
      })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
      })
      //Money Euro
      $('[data-mask]').inputmask()

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        format: 'MM/DD/YYYY h:mm A'
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker({
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function(start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      })

      $('#datepicker2').datepicker({
        autoclose: true
      })

      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
      })
      //Red color scheme for iCheck
      $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
      })
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
      })

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      //Timepicker
      $('.timepicker').timepicker({
        showInputs: false
      })
    })
  </script>
</body>

</html>