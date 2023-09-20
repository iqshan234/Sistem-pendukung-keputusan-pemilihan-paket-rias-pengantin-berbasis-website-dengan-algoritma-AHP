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

include 'koneksi.php';

$table_view = "create view view_nilai_kriteria as
               select a.periode, a.id_kriteria,
               case when b.jns_kriteria = 'Benefit' then
               max(nilai_analisa_alternatif)
               when b.jns_kriteria = 'Cost' then  
               min(nilai_analisa_alternatif)
               else null
               end as nilai_kriteria
               from
               analisa_alternatif a
               join kriteria b
               on a.id_kriteria = b.id_kriteria 
               group by a.id_kriteria";

$exec_view = mysqli_query($koneksi, $table_view);
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
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
              <span class="hidden-xs"><b><?php echo $username;?></b></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $username;?> - <?php echo $hak_akses;?>
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
          <p><?php echo $username;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
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
          Analisa
          <small>Analisa Alternatif</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Analisa</a></li>
          <li class="active">Analisa Alternatif</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">


            <div class="box">

              <!-- /.box-header -->
              <div class="box-body">



                <form method="post" action="analisa_kriteria_tabel.php">
                  <div class="row">
                    <div class="col-xs-12 col-md-3">
                      <div class="form-group">
                        <h4><label>Perbandingan Matriks</label></h4>
                      </div>
                    </div>


                  </div>



                  <!-- ===============================START ================================ -->

                  <table width="100%" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Alternatif</th>
                        <?php
                        include 'koneksi.php';
                        $a = "select * from kriteria order by id_kriteria";
                        $b = mysqli_query($koneksi, $a);

                        while ($c = mysqli_fetch_array($b)) {
                        ?>
                          <th><?php echo $c['nm_kriteria'] ?></th>
                        <?php
                        }
                        ?>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      include 'koneksi.php';
                      $d = "select * from paket order by id_paket";
                      $e = mysqli_query($koneksi, $d);
                      while ($f = mysqli_fetch_array($e)) {
                      ?>
                        <tr>
                          <th style="vertical-align:middle;"><?php echo $f['nm_paket'] ?></th>
                          <?php
                          include 'koneksi.php';
                          $g = "select * from kriteria order by id_kriteria";
                          $h = mysqli_query($koneksi, $g);
                          while ($i = mysqli_fetch_array($h)) {
                          ?>

                            <td style="vertical-align:middle;">
                            <?php
                            include 'koneksi.php';
                            $j = "select * from analisa_alternatif where id_paket='" . $f['id_paket'] . "' and id_kriteria ='" . $i['id_kriteria'] . "' LIMIT 0,1";
                            $k = mysqli_query($koneksi, $j);
                            while ($l = mysqli_fetch_array($k)) {
                              echo $l['nilai_analisa_alternatif'];
                            }
                          }
                            ?>
                            </td>
                          <?php
                        }
                          ?>
                        </tr>

                        <tr>
                          <th style="vertical-align:middle;">Bobot Kriteria</th>
                          <?php
                          include 'koneksi.php';
                          $m = "select * from kriteria order by id_kriteria";
                          $n = mysqli_query($koneksi, $m);
                          while ($o = mysqli_fetch_array($n)) {
                          ?>

                            <th style="vertical-align:middle;">
                            <?php
                            include 'koneksi.php';
                            $p = "select * from kriteria where id_kriteria='" . $o['id_kriteria'] . "' LIMIT 0,1";
                            $q = mysqli_query($koneksi, $p);
                            while ($r = mysqli_fetch_array($q)) {
                              echo $r['nilai_eigenvector'];
                            }
                          }
                            ?>
                            </th>
                        </tr>

                        <tr>
                          <th style="vertical-align:middle;">Jenis Kriteria</th>
                          <?php
                          include 'koneksi.php';
                          $s = "select * from kriteria order by id_kriteria";
                          $t = mysqli_query($koneksi, $s);
                          while ($u = mysqli_fetch_array($t)) {
                          ?>

                            <th style="vertical-align:middle;">
                            <?php
                            include 'koneksi.php';
                            $v = "select * from kriteria where id_kriteria='" . $u['id_kriteria'] . "' LIMIT 0,1";
                            $w = mysqli_query($koneksi, $v);
                            while ($x = mysqli_fetch_array($w)) {
                              echo $x['jns_kriteria'];
                            }
                          }
                            ?>
                            </th>
                        </tr>

                    </tbody>

                  </table>

                  <!-- ============================END=================================== -->
                  <div class="row">
                    <div class="col-xs-12 col-md-3">
                      <div class="form-group">
                        <h4><label>Matriks Normalisasi</label></h4>
                      </div>
                    </div>


                  </div>
                  <table width="100%" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Alternatif</th>
                        <?php
                        include 'koneksi.php';
                        $a = "select * from kriteria order by id_kriteria";
                        $b = mysqli_query($koneksi, $a);

                        while ($c = mysqli_fetch_array($b)) {
                        ?>
                          <th><?php echo $c['nm_kriteria'] ?></th>
                        <?php
                        }
                        ?>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      include 'koneksi.php';
                      $d = "select * from paket order by id_paket";
                      $e = mysqli_query($koneksi, $d);
                      while ($f = mysqli_fetch_array($e)) {
                      ?>
                        <tr>
                          <th style="vertical-align:middle;"><?php echo $f['nm_paket'] ?></th>
                          <?php
                          include 'koneksi.php';
                          $g = "select * from kriteria order by id_kriteria";
                          $h = mysqli_query($koneksi, $g);
                          while ($i = mysqli_fetch_array($h)) {
                          ?>

                            <td style="vertical-align:middle;">
                            <?php
                            include 'koneksi.php';


                            $j = "select a.id_kriteria, a.id_paket, a.nilai_analisa_alternatif/b.nilai_kriteria as  
                      nilai_matriks
                      from analisa_alternatif a, view_nilai_kriteria b
                      where a.id_kriteria = b.id_kriteria and a.id_paket='" . $f['id_paket'] . "' 
                      and a.id_kriteria ='" . $i['id_kriteria'] . "' LIMIT 0,1";
                            $k = mysqli_query($koneksi, $j);
                            while ($l = mysqli_fetch_array($k)) {
                              echo number_format($l['nilai_matriks'], 3);
                            }
                          }
                            ?>
                            </td>
                          <?php
                        }
                          ?>
                        </tr>

                        <tr>
                          <th style="vertical-align:middle;">Bobot Kriteria</th>
                          <?php
                          include 'koneksi.php';
                          $m = "select * from kriteria order by id_kriteria";
                          $n = mysqli_query($koneksi, $m);
                          while ($o = mysqli_fetch_array($n)) {
                          ?>

                            <th style="vertical-align:middle;">
                            <?php
                            include 'koneksi.php';
                            $p = "select * from kriteria where id_kriteria='" . $o['id_kriteria'] . "' LIMIT 0,1";
                            $q = mysqli_query($koneksi, $p);
                            while ($r = mysqli_fetch_array($q)) {
                              echo $r['nilai_eigenvector'];
                            }
                          }
                            ?>
                            </th>
                        </tr>

                    </tbody>

                  </table>



                  <div class="row">
                    <div class="col-xs-12 col-md-3">
                      <div class="form-group">
                        <h4><label>Nilai Akhir</label></h4>
                      </div>
                    </div>


                  </div>
                  <table width="100%" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <?php
                        include 'koneksi.php';
                        $a = "select * from analisa_alternatif, paket where 
                    paket.id_paket = analisa_alternatif.id_paket 
                    group by analisa_alternatif.id_paket
                    order by analisa_alternatif.id_paket";
                        $b = mysqli_query($koneksi, $a);

                        while ($c = mysqli_fetch_array($b)) {
                        ?>
                          <th><?php echo $c['nm_paket'] ?></th>
                        <?php
                        }
                        ?>
                      </tr>
                    </thead>

                    <tbody>

                      <tr>

                        <?php
                        include 'koneksi.php';
                        $g = "select * from paket order by id_paket";
                        $h = mysqli_query($koneksi, $g);
                        while ($i = mysqli_fetch_array($h)) {
                        ?>

                          <td style="vertical-align:middle;">
                          <?php
                          include 'koneksi.php';

                          $j = " select a.id_paket, sum((a.nilai_analisa_alternatif/b.nilai_kriteria) * c.nilai_eigenvector) as  
                      nilai_preferensi
                      from analisa_alternatif a, view_nilai_kriteria b, kriteria c
                      where a.id_kriteria = b.id_kriteria and a.id_kriteria = c.id_kriteria
                      and a.id_paket='" . $i['id_paket'] . "'";

                          $k = mysqli_query($koneksi, $j);
                          while ($l = mysqli_fetch_array($k)) {
                            echo number_format($l['nilai_preferensi'], 3);
                            $aa = "update paket set nilai_akhir = '" . $l['nilai_preferensi'] . "' where id_paket= '" . $i['id_paket'] . "'";
                            $bb = mysqli_query($koneksi, $aa);
                          }
                        }
                          ?>
                          </td>

                      </tr>

                    </tbody>

                  </table>

                  <a class="btn btn-danger" href="javascript:if(confirm('Yakin ingin mereset data?'))
                      {document.location='d_analisa_alternatif.php';}">
                    Reset Data</a>
                </form>
              </div>
            </div>
          </div>
      </section>
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
  <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(function() {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
      })
    })
  </script>
</body>

</html>