<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
   $hak_akses = $_SESSION['hak_akses'];
   include "koneksi.php";
   $sql1="delete from temp";
   $query1=mysqli_query($koneksi,$sql1); 
}
?>

<?php
if(isset($_POST['simpan'])){
include 'koneksi.php';
    $kriteria_kiri = $_POST['kriteria_kiri'];
    $kriteria_kanan = $_POST['kriteria_kanan'];
    $nilai = $_POST['NL'];
    $periode = $_POST['periode'];
    $jumlah_dipilih = count($kriteria_kiri);
	
	
    for($x=0;$x<$jumlah_dipilih;$x++){
		
	  
       $query_multiinsert="INSERT INTO analisa_kriteria values ('$kriteria_kiri[$x]','$kriteria_kanan[$x]','$nilai[$x]','$periode[$x]')";
       $hasil_multiinsert = mysqli_query($koneksi, $query_multiinsert);    
    }

}

if(isset($_POST['simpan'])){
include 'koneksi.php';
    $kriteria_kiri = $_POST['kriteria_kiri'];
    $kriteria_kanan = $_POST['kriteria_kanan'];
    $nilai = $_POST['NL'];
    $periode = $_POST['periode'];
    $jumlah_dipilih_nilai = count($kriteria_kiri);
    for($y=0;$y<$jumlah_dipilih_nilai;$y++){

       $query_multiinsert2="INSERT INTO analisa_kriteria values ('$kriteria_kanan[$y]','$kriteria_kiri[$y]',1/$nilai[$y],'$periode[$y]')";
       $hasil_multiinsert2 = mysqli_query($koneksi, $query_multiinsert2);    
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
        <small>Analisa Kriteria</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Analisa</a></li>
        <li class="active">Analisa Kriteria</li>
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
                <th>Antar Kriteria</th>
                <?php
                include 'koneksi.php';
                $a="select * from kriteria order by id_kriteria";
                $b=mysqli_query($koneksi,$a);

                while($c=mysqli_fetch_array($b)){
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
        $d="select * from kriteria order by id_kriteria";
        $e=mysqli_query($koneksi,$d);
        while($f=mysqli_fetch_array($e)){
        ?>
            <tr>
                <th style="vertical-align:middle;"><?php echo $f['nm_kriteria'] ?></th>
                <?php          
                include 'koneksi.php';
                $g="select * from kriteria order by id_kriteria";
                $h=mysqli_query($koneksi,$g);
                while($i=mysqli_fetch_array($h)){
                ?>         
        
                <td style="vertical-align:middle;">
                  <?php 
                  include 'koneksi.php';
                  $periode = date('Y');
                  if($f['id_kriteria']==$i['id_kriteria']){
                  echo '1.000';
                  if(isset($_POST['simpan'])){
                  $aa="insert into analisa_kriteria values('".$f['id_kriteria']."', '".$i['id_kriteria']."', '1','$periode')";
                  $bb = mysqli_query($koneksi, $aa);             
                  }
                  } else{
                  $j="select * from analisa_kriteria where id_kriteria_1='".$f['id_kriteria']."' and id_kriteria_2 ='".$i['id_kriteria']."' and periode = '$periode' LIMIT 0,1";
                  $k=mysqli_query($koneksi,$j);

                  while($l=mysqli_fetch_array($k)){
                  echo $l['nilai_analisa_kriteria'];
                    
                  }
                  }
                  }
                  ?>
                </td>
                 <?php
                 }              
                 ?>
            </tr>
        </tbody>
        
      </table>              
    </div>          
   


   <?php

include 'koneksi.php';
 function array_split($array, $pieces=2) 
{   
    if ($pieces < 2) 
        return array($array); 
    $newCount = ceil(count($array)/$pieces); 
    $a = array_slice($array, 0, $newCount); 
    $b = array_split(array_slice($array, $newCount), $pieces-1); 
    return array_merge(array($a),$b); 
}

function perkalian_matriks($matriks_a, $matriks_b) {
    $hasil = array();
    for ($i=0; $i<sizeof($matriks_a); $i++) {
        for ($j=0; $j<sizeof($matriks_b[0]); $j++) {
            $temp = 0;
            for ($k=0; $k<sizeof($matriks_b); $k++) {
                $temp += $matriks_a[$i][$k] * $matriks_b[$k][$j];
            }
            $hasil[$i][$j] = $temp;
        }
    }
    return $hasil;
}
 $count = "select count(DISTINCT id_kriteria_1) as 'jumlah' from analisa_kriteria ";
 $count_k=mysqli_query($koneksi,$count);
 $data_k=mysqli_fetch_array($count_k);
 $periode = date('Y');
 $j="select nilai_analisa_kriteria from analisa_kriteria where periode='$periode'";
                  $k=mysqli_query($koneksi,$j);
                  $data = array(); 

                  while($row=mysqli_fetch_array($k)){
                    $data_arr = $row[nilai_analisa_kriteria];
                    $data[] = $data_arr;
                    }
                    $array_terpecah = array_split($data,$data_k['jumlah']);
                //print_r($array_terpecah);
                //echo '<br>';
$l="select nilai_eigenvector from kriteria";
                  $m=mysqli_query($koneksi,$l);
                  $data1 = array(); 

                  while($row1=mysqli_fetch_array($m)){
                    $data_arr1 = $row1[nilai_eigenvector];
                    $data1[] = $data_arr1;
                    }
                     $array_terpecah1 = array_split($data1,$data_k['jumlah']);
                    //print_r($array_terpecah1);
?>
       

    <div class="box-body">
        <div class="row">
            <div class="col-xs-12 col-md-3">
            <div class="form-group">
              <h4><label>Perkalian Antar Matriks</label></h4>
            </div>
            </div>           
        </div>

        <?php 
        $hasil = perkalian_matriks($array_terpecah, $array_terpecah);
        echo "<table width='100%' class='table table-striped table-bordered'>";
        for ($i=0; $i<sizeof($hasil); $i++) {
            echo "<tr>";
            for ($j=0; $j<sizeof($hasil[$i]); $j++) {
                echo "<td><b>". number_format($hasil[$i][$j], 3) ."</b></td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        ?>

      </div>


      <div class="box-body">
        <div class="row">
            <div class="col-xs-12 col-md-3">
            <div class="form-group">
              <h4><label>Hasil Jumlah per Baris</label></h4>
            </div>
            </div>           
        </div>

      <?php 
        $hasil = perkalian_matriks($array_terpecah, $array_terpecah);
        echo "<table width='100%' class='table table-striped table-bordered'>";
         
        for ($i=0; $i<sizeof($hasil); $i++) {
            echo "<tr>";
                $temp = 0;
                for ($j=0; $j<sizeof($hasil[$i]); $j++) {
                    
                    $temp  += $hasil[$i][$j];
                
            }
            echo "<td><b>". number_format($temp, 3) ."</b></td>";
            echo "</tr>";
        }
        echo "</table>";

        ?>
      </div>

      <div class="box-body">
        <div class="row">
            <div class="col-xs-12 col-md-3">
            <div class="form-group">
              <h4><label>Total Hasil Baris</label></h4>
            </div>
            </div>           
        </div>

      <?php 
        $hasil = perkalian_matriks($array_terpecah, $array_terpecah);
        echo "<table width='100%' class='table table-striped table-bordered'>";
         $temp = 0;
        for ($i=0; $i<sizeof($hasil); $i++) {
            
                
                for ($j=0; $j<sizeof($hasil[$i]); $j++) {
                    
                    $temp  += $hasil[$i][$j];
                
            }

        }
        echo "<tr>";
        echo "<td><b>". number_format($temp, 3) ."</b></td>";
        echo "</tr>";
        echo "</table>";

        ?>

      </div>


      <div class="box-body">
        <div class="row">
            <div class="col-xs-12 col-md-3">
            <div class="form-group">
              <h4><label>Bobot Eigenvector Kriteria</label></h4>
            </div>
            </div>           
        </div>

      <?php 
      include 'koneksi.php';
      $periode = date('Y');
      $data = array(); 

        $hasil = perkalian_matriks($array_terpecah, $array_terpecah);
        echo "<table width='100%' class='table table-striped table-bordered'>";

         $temp1 = 0;

        for ($i=0; $i<sizeof($hasil); $i++) {
            $temp1 +=  $temp;

        for ($i=0; $i<sizeof($hasil); $i++) {
           
                $temp = 0;
                for ($j=0; $j<sizeof($hasil[$i]); $j++) {
                    
                    $temp  += $hasil[$i][$j];


                
            }

            $gt = number_format($temp / $temp1,3).'&nbsp;';
            //$array = array($gt);
            $data_arr = number_format($gt,3);
            $data[] = $gt; 
            $periode = date('Y');
            $j="select a.id_kriteria_1, b.nm_kriteria from analisa_kriteria a, kriteria b where a.id_kriteria_1 = b.id_kriteria group by a.id_kriteria_1";
            $k=mysqli_query($koneksi,$j);
            
            $index = 0;
            while($l=mysqli_fetch_array($k)){


              $update = "update kriteria set nilai_eigenvector = '".$data[$index++]."' where id_kriteria =  '".$l['id_kriteria_1']."' ";
              $hasil_update = mysqli_query($koneksi, $update);
                
              }
            
            echo "<tr>";
            echo "<td><b>". number_format($gt, 3) ."</b></td>";
            echo "</tr>";


        }
          
        }
        echo "</table>";

        ?>
      </div>

      <div class="box-body">
        <div class="row">
            <div class="col-xs-12 col-md-3">
            <div class="form-group">
              <h4><label>Hasil Total Bobot</label></h4>
            </div>
            </div>           
        </div>

      <?php 
      include 'koneksi.php';
        $hasil = perkalian_matriks($array_terpecah, $array_terpecah);
        echo "<table width='100%' class='table table-striped table-bordered'>";
         $temp1 = 0;

        for ($i=0; $i<sizeof($hasil); $i++) {
            $temp1 +=  $temp;

        for ($i=0; $i<sizeof($hasil); $i++) {
           
                $temp = 0;
                for ($j=0; $j<sizeof($hasil[$i]); $j++) {
                    
                    $temp  += $hasil[$i][$j];
                
            }
            $gt = $temp / $temp1;
        
        }
         echo "<tr>";
            echo "<td><b>". number_format($gt, 3) ."</b></td>";
            echo "</tr>";   
        }
        echo "</table>";

        ?>
      </div>

        


  <div class="box-body">      

      <br>
      <a class="btn btn-danger" href="javascript:if(confirm('Yakin ingin mereset data?'))
                      {document.location='d_analisa_kriteria.php';}">
                      Reset Data</a>
      </div>


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
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>