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
          <li class="treeview">
          <a href="#">
 <i class="fa fa-fw fa-home"></i>
            <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="home.php"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          </ul>
        </li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="m_kriteria.php"><i class="fa fa-circle-o"></i> Kriteria</a></li>
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
          <li class="active">Paket Rias I</li>
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
    <font size="5">   Paket Rias Pengantin I
   <br>
 <div class = "media">

                       <div class = "media-body">
                             <font size="5">Paket Rias I Untuk Riasan terdiri dari : <br>
                            <div class="info-meta">
                      <li> Rias Pengantin Akaddaerah Sunda Dan Resepsi Nasional Untuk Pengantin Wanita Dan Pria : Masing-Masing 2 Pasang, </li>   
                      <li>  Rias Pendamping ( Orang Tua ) : 2 Pasang </li>
                            <li>Rias Untuk Pager Ayu : 4 Orang </li>
                            <li> Busana Dan Accessories Lengkap</li>
                      
                            <font size="5">Dan Untuk Harga Dikenakan Biaya: 7 Jutaan 500 Ribu, Harga Masi Boleh Nego, Jika Berminat Bisa Hubungi: " +62 816-1913-978 " Atau Bisa Klik Logo Whastaspp Pada Pojok Kanan, Berikut Contoh Foto Riasan<br>
                           </font>

                            </div>
<a href="p9.jpg">
    <img src="p9.jpg" height="500" width="380"/> 
        <a href="h1.png">
    <img src="i1.png" height="500" width="380"/> 
       <img src="i2.png" height="500" width="380"/> 
     <a href="i2.png">
         <a href="i3.png">
    <img src="i3.png" height="500" width="380"/> 
     <a href="i4.png"><br><br>
    <img src="i4.png" height="500" width="380"/>
     <a href="i5.png">
    <img src="i5.png" height="500" width="380"/>
        <a href="i6.png">
    <img src="i6.png" height="500" width="380"/>
     <a href="i7.png">
    <img src="i7.png" height="500" width="380"/> 
       <br><br>
                          <p style="text-align:left;">
                            <a href="riasan.php">
                            <button class="btn btn-primary">Kembali Ke Halaman Menu Paket Rias Pengantin</button>
                        </p>  
                      </a>
                         <div style="display:scroll;position:fixed;bottom:0;right:0;">
                 <strong> <p style="color:blue"> 
                     <img src="https://www.gambaranimasi.org/data/media/111/animasi-bergerak-panah-0275.gif" height="100" width="120"/><br>
 <a href="https://api.whatsapp.com/send?phone=628161913978&text=Halo%20saya%20ingin%20oder%20paket%20riasan A" target="_blank">                
      <img src="anjay2.jpg" height="100" width="130"/></a> 
</a>


<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju-2.js" type="text/javascript"></script>
      <style type="text/css">* {cursor: url(http://cur.cursors-4u.net/anime/ani-12/ani1159.ani), url(http://cur.cursors-4u.net/anime/ani-12/ani1159.gif), auto !important;}</style><a href="http://www.cursors-4u.com/cursor/2012/01/01/zora-one-piece.html" target="_blank" title="Zora - One Piece"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Zora - One Piece" style="position:absolute; top: 0px; right: 0px;" /></a> </script>
   </body>
</html> 
