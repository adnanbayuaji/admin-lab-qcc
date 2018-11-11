<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<!--?php 
  $role = @$_SESSION['role'];
  $user = @$_SESSION['login'];
?-->

<?php
  session_start();
  if(!isset($_SESSION['status']))
  {
    header('location:login.php');
  }
  if($_SESSION['status']=="pic")
  {
    echo "<script>alert('Pencatatan hanya bisa diakses oleh Admin.');
    window.history.go(-1);</script>";
  }
  include "../model/koneksi.php";
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="../dist/img/PolmanIcon.jpg"/>
  <title>Admin Lab | Tambah Data Pencatatan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="../dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="shortcut icon" href="2.png"/>
  <script type="text/javascript">
    function Validasi()
    {
      var idpencatatan = document.getElementById('idpencatatan').value;
      var tanggal = document.getElementById('tanggal').value;
      
      if(idpencatatan == "" || tanggal == "")
      {
        alert("Lengkapi data.");
        return false;
      }
    }
  </script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="home.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Ad</b>L</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>-Lab</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $_SESSION['nama']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['nama']; ?>
                  <small><?php echo $_SESSION['status']; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama']; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <!--li><a href="buku.php"><i class="fa fa-link"></i> <span>Buku</span></a></li>
        <li><a href="rak.php"><i class="fa fa-link"></i> <span>Rak</span></a></li>
        <li><a href="pencatatan.php"><i class="fa fa-link"></i> <span>Pencatatan</span></a></li>
        <li><a href="mahasiswa.php"><i class="fa fa-link"></i> <span>Mahasiswa</span></a></li-->
        <li class="treeview">
          <a href="#"><i class="fa fa-bookmark-o"></i> <span>Alat</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          <?php if($_SESSION['status']=='pic')
          {
            ?>
            <li><a href="alat.php">Tambah Data Alat</a></li>
            <?php 
            }
            ?>
            <li><a href="viewalat.php">Lihat Data Alat</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#"><i class="fa fa-bookmark-o"></i> <span>Pencatatan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          <?php if($_SESSION['status']=='admin')
          {
            ?>
            <li><a href="pencatatan.php">Tambah Data Pencatatan</a></li>
            <?php 
            }
            ?>
            <li><a href="viewpencatatan.php">Lihat Data Pencatatan</a></li>
          </ul>
        </li>
 
        <li class="treeview">
          <a href="#"><i class="fa fa-child"></i> <span>Mahasiswa</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
          <?php if($_SESSION['status']=='pic')
          {
            ?>
            <li><a href="mahasiswa.php">Tambah Data Mahasiswa</a></li>
            <?php 
            }
            ?>
            <li><a href="viewmahasiswa.php">Lihat Data Mahasiswa</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengisian Data Pencatatan
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="pencatatan.php"><i class="fa fa-dashboard"></i>Pencatatan</a></li>
        <!--li class="active">Here</li-->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <?php 
          $view = mysql_query("select * from Pencatatan");
          if(mysql_num_rows($view)==0)
          {
            $hasil = "TP-0001";
          }
          else
          {
            while($row = mysql_fetch_array($view))
            {
              list($huruf, $angka) = explode('-', $row['idpencatatan']);
              $angka = $angka + 1;
              if($angka<10)
              {
                $hasil = $huruf.'-000'.$angka;
              }
              else if($angka<100)
              {
                $hasil = $huruf.'-00'.$angka;
              }
              else if($angka<1000)
              {
                $hasil = $huruf.'-0'.$angka;
              }
              else if($angka<10000)
              {
                $hasil = $huruf.'-'.$angka;
              }
            }  
          }
         ?>
        <div class="box box-info">
          <form onsubmit="return Validasi()" class="form-horizontal" name="formpencatatan" action="../model/detailinsert_db.php" method="post">
            <div class="box-body">
              <?php
              if(isset($_GET['tk']))
              {
                $idpencatatan=@$_GET['id'];
                $tingkat = @$_GET['tk'];
              }
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Id Pencatatan</label>
                <div class="col-sm-10">
                  <input id="idpencatatan" type="text" class="form-control" name="idpencatatan" placeholder="Id Pencatatan" value='<?php echo $idpencatatan ?>' readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Tingkat</label>
                <div class="col-sm-10">
                  <input id="tingkat" type="text" class="form-control" name="tingkat" placeholder="Tingkat" value='<?php echo $tingkat ?>' readonly required>
                </div>
              </div>

              <table id="example2" class="table table-striped">
                <thead>
                <tr>
                  <th>
                    No.
                  </th>
                  <th>
                    Nama
                  </th>
                  <?php
                    $baris1=1;
                    $view1 = mysql_query("select * from Alat");
                    while($row1 = mysql_fetch_array($view1))
                    {
                      ?>
                      <th>
                        <?php echo $row1['nama']; ?>
                      </th>
                      <?php 
                      $baris1++;
                    }
                  ?>
                </tr>
                </thead>
                <tbody>
                <?php
                  
                  $baris = 1;
                  $view = mysql_query("select m.namamhs from Mahasiswa m where m.tingkat = $tingkat");
                  while($row = mysql_fetch_array($view))
                  {
                    ?>
                    <tr>
                      <td>
                        <?php echo $baris; ?>
                      </td>
                      <td>
                        <?php echo $row['namamhs']; ?>
                      </td>
                      <?php
                        for($i=1; $i<$baris1; $i++)
                        {
                          ?>
                          <th>
                            B<?php echo '<input id="kon'.$baris.$i.'" type="radio" name="kon'.$baris.$i.'" value="B">' ?>
                            C<?php echo '<input id="kon'.$baris.$i.'" type="radio" name="kon'.$baris.$i.'" value="C">' ?>
                            K<?php echo '<input id="kon'.$baris.$i.'" type="radio" name="kon'.$baris.$i.'" value="K">' ?>
                          </th>
                          <?php 
                        }
                      ?>
                      </tr>
                      <?php 
                      $baris ++;
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="reset" class="btn btn-default">Bersih</button>
              <button type="submit" name="submit" class="btn btn-info pull-right">Save</button>
            </div>
          </form>
        </div>
        <!-- /.box-footer -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">QCCOptimisPrime</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script>
  function hanyaHuruf(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if ((charCode >= 97 && charCode <= 122) || (charCode >= 65 && charCode <= 90) || charCode == 8 || charCode == 32)
      return true;
    return false;
  }
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>