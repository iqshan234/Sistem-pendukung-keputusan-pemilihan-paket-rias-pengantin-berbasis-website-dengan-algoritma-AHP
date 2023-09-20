<title>SPK AHP </title>
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
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPK AHP - Ikhsan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>
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
      <a href="home.php" class="logo">
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
          Home
          <small>Dashboard</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="home2.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <?php
                include 'koneksi.php';
                $sql1 = "select count(id_kriteria) as id_kriteria from kriteria";
                $query1 = mysqli_query($koneksi, $sql1);
                $data1 = mysqli_fetch_array($query1);
                ?>
                <h3><?php echo $data1['id_kriteria']; ?></h3>

                <p>Kriteria</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-checkmark-circle"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <?php
                include 'koneksi.php';
                $sql1 = "select count(id_paket) as id_paket from paket";
                $query1 = mysqli_query($koneksi, $sql1);
                $data1 = mysqli_fetch_array($query1);
                ?>
                <h3><?php echo $data1['id_paket']; ?></h3>

                <p>Paket Rias</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <!-- ./col -->

          <!-- ./col -->
        </div>

        <?php
        include 'koneksi.php';
        $sql = "select nm_paket, nilai_akhir from paket order by nilai_akhir desc";
        $sql_exec = mysqli_query($koneksi, $sql);
        $sql_exec2 = mysqli_query($koneksi, $sql);
        ?>
        <div style="height: 100%; width: 100%;">
          <canvas id="myChart" class="chart"></canvas>
        </div>

        <!-- /.row (main row) -->

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


  <!-- FastClick -->
  <script src="bower_components/fastclick/lib/fastclick.js"></script>

  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- page script -->
  <!-- if($data['nm_satker']=='Biro Umum'){
      $nm_satker = "Roum";
    } -->
  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar', //Tipe tampilan grafik, sobat bisa menggunakan tampilan bar, pie, line, radar dan sebagainya
      data: {
        labels: [<?php while ($b = mysqli_fetch_array($sql_exec)) {
                 if ($b['nm_paket'] == 'Paket A') {
                      $nm_paket = 'Paket A ';
                    } elseif ($b['nm_paket'] == 'Paket B') {
                      $nm_paket = 'Paket B';
                    } elseif ($b['nm_paket'] == 'Paket C') {
                      $nm_paket = 'Paket C';
                    } elseif ($b['nm_paket'] == 'Paket D') {
                      $nm_paket = 'Paket D';
                    } elseif ($b['nm_paket'] == 'Paket E') {
                      $nm_paket = 'Paket E';
                    } 
                   elseif ($b['nm_paket'] == 'Paket F') {
                      $nm_paket = 'Paket F';
                    } elseif ($b['nm_paket'] == 'Paket G') {
                      $nm_paket = 'Paket G';
                    } elseif ($b['nm_paket'] == 'Paket H') {
                      $nm_paket = 'Paket H';
                    } elseif ($b['nm_paket'] == 'Paket I') {
                      $nm_paket = 'Paket I';
                    }
                     elseif ($b['nm_paket'] == 'Paket J') {
                      $nm_paket = 'Paket J';
                    } elseif ($b['nm_paket'] == 'Paket K') {
                      $nm_paket = 'Paket K';
                    } elseif ($b['nm_paket'] == 'Paket L') {
                      $nm_paket = 'Paket L';
                    } elseif ($b['nm_paket'] == 'Paket M') {
                      $nm_paket = 'Paket M';
                    } elseif ($b['nm_paket'] == 'Paket N') {
                      $nm_paket = 'Paket N';
                    } elseif ($b['nm_paket'] == 'Paket O') {
                      $nm_paket = 'Paket O';
                    }
                    
                    echo '"' . $nm_paket . '",';
                  } ?>], //keterangan nama-nama label
        datasets: [{
          label: 'GRAFIK PERBANDINGAN PAKET RIAS', //Judul Grafik
          data: [<?php while ($a = mysqli_fetch_array($sql_exec2)) {
                    echo $a['nilai_akhir'] . ', ';
                  } ?>], //Data Grafik
          backgroundColor: [
            'blue', //Warna Background
            'red', //Warna Background
            'green', //Warna Background
            'yellow', //Warna Background
            'black', //Warna Background
            'silver', //Warna Background
            'orange', //Warna Background
            'pink', //Warna Background
            'grey', //Warna Background
             'blue', //Warna Background
            'red', //Warna Background
            'green', //Warna Background
            'yellow', //Warna Background
            'black', //Warna Background
            'silver', //Warna Background
            'orange', //Warna Background
            'pink', //Warna Background
            'grey', //Warna Background
            'white'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>
  <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/green-bintang-jatuh.js" type="text/javascript"></script>
  <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju-2.js" type="text/javascript"></script>
  <style type="text/css">
    * {
      cursor: url(http://cur.cursors-4u.net/anime/ani-12/ani1159.ani), url(http://cur.cursors-4u.net/anime/ani-12/ani1159.gif), auto !important;
    }
  </style><a href="http://www.cursors-4u.com/cursor/2012/01/01/zora-one-piece.html" target="_blank" title="Zora - One Piece"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Zora - One Piece" style="position:absolute; top: 0px; right: 0px;" /></a>
</body>

</html>