<?php
//memanggil config
include('proses/config.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Lokasi Rental</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ADMIN</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="user user-menu">
          <form action="../AdminLokasiRental/proses/keluar.php" method="POST">
          <button type="submit" name="keluar" class="btn btn-danger">Keluar</button>
          </form>
            </a>
          </li>
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
          <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <?php 
          $query_nama = mysqli_query($koneksi, "SELECT * FROM `tb_admin` WHERE status='online'");
          $no = 1;
          while ($data = mysqli_fetch_assoc($query_nama)) 
          {
          ?>
          <p><?php echo $data['nama_admin']; ?></p>
          <?php
          }
          ?>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <li class="treeview active">
        <li class="active"><a  href="../AdminLokasiRental/index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
          <span class="pull-right-container">
          </span>
        </a>
    </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-home"></i>
            <span>Rental Mobil</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="halaman/tambah_rental.html"><i class="fa fa-circle-o"></i> Tambah Rental</a></li>
            <li><a href="proses/daftar_rental.php"><i class="fa fa-circle-o"></i> Data Rental</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-automobile"></i>
            <span>Armada</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../AdminLokasiRental/halaman/kategori.html"><i class="fa fa-circle-o"></i> Kategori </a></li>
            <li><a href="../AdminLokasiRental/proses/armada_rental.php"><i class="fa fa-circle-o"></i> Armada Rental</a></li>
          </ul>
        </li>

        <li class="treeview">
            <li><a  href="../AdminLokasiRental/halaman/admin.php"><i class="glyphicon glyphicon-user"></i><span>Admin</span></a></li>
              <span class="pull-right-container">
              </span>
            </a>
        </li>
          
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">

            <?php 
              $query_rental = mysqli_query($koneksi, "SELECT * FROM tb_rental");
              $data = array ();
              while (($row = mysqli_fetch_array($query_rental)) != null){
              $data[] = $row;
              }
              $cont = count ($data);
             ?>
              <h3><?php  echo $cont; ?></h3>
              <h4>RENTAL MOBIL</h4>
            </div>
            <div class="icon">
              <i class="ion ion-home"></i>
            </div>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
            <?php 
              $query_admin = mysqli_query($koneksi, "SELECT * FROM tb_admin");
              $data = array ();
              while (($row = mysqli_fetch_array($query_admin)) != null){
              $data[] = $row;
              }
              $cont = count ($data);
             ?>
              <h3><?php  echo $cont; ?></h3>

              <p>ADMIN</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
          </div>
        </div>
      <!-- /.row -->
      <!-- Main row -->

      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">

              <div id="dvMap" style="width: 1085px; height: 370px"></div>
              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfxrFvLxv1L5Tg48JVkNW08_gYbW9eFL8" async defer></script>
              <script type="text/javascript">
                var markers = [
                <?php
                $sql = mysqli_query($koneksi, "SELECT * FROM tb_rental");
                while(($data =  mysqli_fetch_assoc($sql))) {
                ?>
                {
                  "nama_rental": '<?php echo $data['nama_rental']; ?>',
                             "lat": '<?php echo $data['lat']; ?>',
                     "lng": '<?php echo $data['lng']; ?>',
                     "alamat": '<?php echo $data['alamat']; ?>'
                },
                <?php
                }
                ?>
                ];
                </script>
                <script type="text/javascript">
                    window.onload = function () {
                        var mapOptions = {
                        center: new google.maps.LatLng(-7.631723,111.529778),
                            zoom: 13,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        }; 
                        var infoWindow = new google.maps.InfoWindow();
                        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                        for (i = 0; i < markers.length; i++) {
                            var data = markers[i];
                    var latnya = data.lat;
                    var longnya = data.lng;
                    
                    var myLatlng = new google.maps.LatLng(latnya, longnya);
                            var marker = new google.maps.Marker({
                                position: myLatlng,
                                map: map,
                                title: data.nama_rental
                            });
                            (function (marker, data) {
                                google.maps.event.addListener(marker, "click", function (e) {
                                    infoWindow.setContent(data.nama_rental);
                                    infoWindow.open(map, marker);
                                });
                            })(marker, data);
                        }
                    }
                </script>

          </div>
        </div>
      </div>
             


     
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
