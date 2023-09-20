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
          Home
          <small>Dashboard</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
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
                <i class="ion-person-stalker"></i>
              </div>
            </div>

          </div>

          <!-- ./col -->
 
      
          <!-- ./col -->

          <!-- ./col -->
        </div>
        <center><font size="5">Foto-Foto Rias Pengantin <br> </font> </center> <br>
                     <a href="r1.jpg">
                      <img src="r1.jpg" height="500" width="405" />
                      <a href="r2.jpg">
                        <img src="r2.jpg" height="500" width="405" />
                        <a href="r3.jpg">
                          <img src="r3.jpg" height="500" width="405" /> 
                          <a href="r4.jpg">
                            <img src="r4.jpg" height="500" width="405" /><!-- ><br><br><!-->
                            <a href="r5.jpg">
                              <img src="r5.jpg" height="500" width="405" />
                              <a href="r6.jpg">
                                <img src="r6.jpg" height="500" width="405" />
                                <a href="i1.jpg">
                                  <img src="i1.jpg" height="500" width="405" />
                                   <a href="r10.jpg">
    <img src="r10.jpg" height="500" width="405"/> <!-- ><br><br><!-->
     <a href="r11.jpg">
    <img src="r11.jpg" height="500" width="405"/>  
         <a href="r7.jpg">
    <img src="r7.jpg" height="500" width="405"/> 
  
     <a href="r8.png">
    <img src="r8.png" height="500" width="405"/>
     <a href="r9.png">
    <img src="r9.png" height="500" width="405"/><!-- ><br><br><!-->
        <a href="r1.png">
    <img src="r1.png" height="500" width="405"/>
      <a href="i2.jpg">
    <img src="i2.jpg" height="500" width="405"/>             <a href="c1.jpg">
    <img src="c1.jpg" height="500" width="405"/> 
     <a href="c5.jpg">
    <img src="c5.jpg" height="500" width="405"/><!-- ><br><br><!-->

         <a href="c2.jpg">
    <img src="c2.jpg" height="500" width="405"/> 
     <a href="c3.jpg">
 
    <img src="c3.jpg" height="500" width="405"/>
     <a href="c4.jpg">
    <img src="c4.jpg" height="500" width="405"/>
        <a href="c6.jpg">
    <img src="c6.jpg" height="500" width="405"/><!-- ><br><br><!-->
            <a href="i3.jpg">
    <img src="i3.jpg" height="500" width="405"/>
    <a href="a1.jpg">
    <img src="a1.jpg" height="500" width="405"/> 
     <a href="a2.jpg">
    <img src="a2.jpg" height="500" width="405"/> 
         <a href="a3.jpg">
    <img src="a3.jpg" height="500" width="405"/> <!-- ><br><br><!-->
     <a href="a4.jpg">
    <img src="a4.jpg" height="500" width="405"/>
     <a href="a5.jpg">
    <img src="a5.jpg" height="500" width="405"/>
        <a href="a6.jpg">
    <img src="a6.jpg" height="500" width="405"/>
            <a href="i4.jpg">
    <img src="i4.jpg" height="500" width="405"/><!-- ><br><br><!-->

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
 
  <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/green-bintang-jatuh.js" type="text/javascript"></script>
  <script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju-2.js" type="text/javascript"></script>
  <style type="text/css">
    * {
      cursor: url(http://cur.cursors-4u.net/anime/ani-12/ani1159.ani), url(http://cur.cursors-4u.net/anime/ani-12/ani1159.gif), auto !important;
    }
  </style><a href="http://www.cursors-4u.com/cursor/2012/01/01/zora-one-piece.html" target="_blank" title="Zora - One Piece"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Zora - One Piece" style="position:absolute; top: 0px; right: 0px;" /></a>
  <div style="display:scroll;position:fixed;bottom:0;right:0;">
    <strong>
      <p style="color:blue">
        <a href="https://api.whatsapp.com/send?phone=628161913978&text=Halo" target="_blank">
          <img src="anjay2.jpg" height="100" width="110" /></a>
        </a>
</body>

</html>