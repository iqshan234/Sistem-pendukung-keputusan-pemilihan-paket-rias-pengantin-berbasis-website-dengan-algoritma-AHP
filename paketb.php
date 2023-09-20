<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])) {
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
              <li class="active"><a href="home.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
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
              <li><a href="m_kriteria2.php"><i class="fa fa-circle-o"></i> Kriteria</a></li>
              <li><a href="m_satker2.php"><i class="fa fa-circle-o"></i> Alternatif</a></li>
              <li><a href="m_nilai2.php"><i class="fa fa-circle-o"></i> Nilai</a></li>
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

              <li><a href="analisa_alternatif2.php"><i class="fa fa-circle-o"></i> Analisa Alternatif</a></li>

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
              <li><a href="l_rangking2.php"><i class="fa fa-circle-o"></i> Laporan Data Paket</a></li>

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
            <span>Contak</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="contak.php"><i class="fa fa-circle-o"></i> Contak</a></li>
            <li><a href="about.php"><i class="fa fa-circle-o"></i> About Us</a></li>
          </ul>
        </li>
        </li>
      </section>
      <!-- /.sidebar -->
    </aside>

        <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Riasan
          <small>Paket Rias</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="riasan.php">Riasan</a></li>
          <li class="active">Paket Rias b</li>
        </ol>
      </section>

   <section class="content">
        <div class="row">
          <div class="col-xs-12">


            <div class="box">
              <div class="box-header">
                <!-- <a class="btn btn-success" href="a_satker.php">Tambah Data</a> -->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">

</table>

    <font size="5">   Paket Rias Pengantin B
<br>
 <div class = "media">
   
                       <div class = "media-body">
                             <font size="5">Paket Rias B Untuk Riasan terdiri dari : <br>
                            <div class="info-meta">
                             <li>  Rias Pengantin Daerah, Bebas Pilih Daerah </li>   
                      <li>  3 Pasang Kebayan Atau Gaun Pengantin Wanita </li>
                            <li>3 Pasang Jas Pengantin Pria </li>
                            <li> Free 1 Kebayan/Gamis Untuk Ibu Tuan Rumah</li>
                            <li> Free 1 Kebayan/Gamis Untuk Ibu Besan</li>
                            <li> Free 1 Beskap Untuk Bapak Tuah Rumah</li>
                             <li> Free 1 Beskap Untuk Bapak Besan</li>
                            <li>Free 4 Make Up Untuk Keluarga</li>
                            <li>Free 4 Make Up Dan Baju Untuk Prasmanan</li>
                             <li>Free 4 Make Up Dan Baju Untuk Pager Ayu</li>
                            <font size="5">Dan Untuk Harga Dikenakan Biaya: 10 Jutaan, Harga Masi Boleh Nego, Jika Berminat Bisa Hubungi: " +62 816-1913-978 " Atau Bisa Klik Logo Whastaspp Pada Pojok Kanan, Berikut Contoh Foto Riasan<br>
                           </font>

                            </div>
                      
                            <a href="p2.jpg">
    <img src="p2.jpg" height="500" width="380"/> 
    <a href="r10.jpg">
    <img src="r10.jpg" height="500" width="380"/> 
     <a href="r11.jpg">
    <img src="r11.jpg" height="500" width="380"/>  
         <a href="r7.jpg">
    <img src="r7.jpg" height="500" width="380"/> 
    <br>  <br>
     <a href="r8.png">
    <img src="r8.png" height="500" width="380"/>
     <a href="r9.png">
    <img src="r9.png" height="500" width="380"/>
        <a href="r1.png">
    <img src="r1.png" height="500" width="380"/>
      <a href="i2.jpg">
    <img src="i2.jpg" height="500" width="380"/><br><br>
                            <p style="text-align:left;">
                            <a href="riasan2.php">
                            <button class="btn btn-primary">Kembali Ke Halaman Menu Paket Rias Pengantin</button>
                        </p>  
                      </a>
                         <div style="display:scroll;position:fixed;bottom:0;right:0;">
                 <strong> <p style="color:blue">  
                     <img src="https://www.gambaranimasi.org/data/media/111/animasi-bergerak-panah-0275.gif" height="100" width="120"/><br>
 <a href="https://api.whatsapp.com/send?phone=628161913978&text=Halo%20saya%20ingin%20oder%20paket%20riasan B" target="_blank">                
      <img src="anjay2.jpg" height="100" width="130"/></a> 
</a>


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

  <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/green-bintang-jatuh.js" type="text/javascript"></script>
  <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju-2.js" type="text/javascript"></script>
  <style type="text/css">
    * {
      cursor: url(http://cur.cursors-4u.net/anime/ani-12/ani1159.ani), url(http://cur.cursors-4u.net/anime/ani-12/ani1159.gif), auto !important;
    }
  </style><a href="http://www.cursors-4u.com/cursor/2012/01/01/zora-one-piece.html" target="_blank" title="Zora - One Piece"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Zora - One Piece" style="position:absolute; top: 0px; right: 0px;" /></a>
</body>

</html>
