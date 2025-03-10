<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
  <link rel="stylesheet" href="<?= base_url('assets2/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <!-- Morris charts -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/morris/morris.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/skin-purple.min.css">

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
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

<body class="hold-transition skin-purple sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="<?php echo base_url(); ?>admin/Home"" class=" logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>P</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Sistem</b>Perpustakaan</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 0 messages</li>
                <li>
                  <!-- inner menu: contains the messages -->
                  <ul class="menu">
                    <li><!-- start message -->
                      <a href="#">

                        <div class="pull-left">
                          <!-- User Image -->
                          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <!-- Message title and timestamp -->
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 0 mins</small>
                        </h4>
                        <!-- The message -->

                      </a>
                    </li>
                    <!-- end message -->
                  </ul>
                  <!-- /.menu -->
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- Inner Menu: contains the notifications -->
                  <ul class="menu">
                    <li><!-- start notification -->
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <!-- end notification -->
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks Menu -->
            <li class="dropdown tasks-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- Inner menu: contains the tasks -->
                  <ul class="menu">
                    <li><!-- Task item -->
                      <a href="#">
                        <!-- Task title and progress text -->
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <!-- The progress bar -->
                        <div class="progress xs">
                          <!-- Change the css width attribute to simulate progress -->
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <?php
                foreach ($log as $key => $value) {
                ?>
                  <img src="<?php echo base_url(); ?>gambar_petugas/<?php echo $value->img; ?>" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php echo $value->nama; ?></span>
                <?php
                }
                ?>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <?php
                  foreach ($log as $key => $value) {
                  ?>
                    <img src="<?php echo base_url(); ?>gambar_petugas/<?php echo $value->img; ?>" class="img-circle" alt="User Image">

                    <p>
                      <?php echo $value->nama; ?>
                      <small>Admin Perpus</small>
                    </p>
                  <?php
                  }
                  ?>
                </li>
                <!-- Menu Body -->
                <!--<li class="user-body">
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
                </div>-->
                <!-- /.row -->
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo base_url(); ?>web/logout" class="btn btn-default btn-flat">Sign out</a>
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
          <?php
          foreach ($log as $key => $value) { ?>

            <div class="pull-left image">
              <img src="<?php echo base_url(); ?>gambar_petugas/<?php echo $value->img; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $value->nama; ?></p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i>Aktif</a>
            </div>
          <?php
          }
          ?>
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
        <ul class="sidebar-menu">
          <li class="header">MASTER DATA</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>Master Anggota</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?php echo base_url(); ?>admin/Anggota"><i class="fa fa-user"></i>Data Anggota</a></li>
              <li><a href="<?php echo base_url(); ?>admin/Kelas"><i class="fa fa-building-o"></i>Data Kelas</a></li>
              <li><a href="<?php echo base_url(); ?>admin/Agama"><i class="fa fa-moon-o"></i>Data Agama</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-book"></i> <span>Master Buku</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>admin/Buku/buku"><i class="fa fa-book"></i>Data Buku</a></li>
              <li><a href="<?php echo base_url(); ?>admin/Kategori"><i class="fa fa-tags"></i>Data Kategori</a></li>
              <li><a href="<?php echo base_url(); ?>admin/Rak"><i class="fa fa-archive"></i>Data Rak</a></li>
              <li><a href="<?php echo base_url(); ?>admin/Pengarang"><i class="fa fa-pencil-square-o"></i>Data Pengarang</a></li>
              <li><a href="<?php echo base_url(); ?>admin/Penerbit"><i class="fa fa-user-secret"></i>Data Penerbit</a></li>
              <li><a href="<?php echo base_url(); ?>admin/Provinsi"><i class="fa fa-globe"></i>Data Provinsi</a></li>
            </ul>
          </li>
          <li class="header">Transaksi</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-book"></i> <span>Transaksi</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>admin/Pinjam"><i class="fa fa-book"></i>Data Peminjaman</a></li>
              <!--li><a href="<?php echo base_url(); ?>admin/transaksi/pengembalian"><i class="fa fa-book"></i>Data Pengembalian</a></-->
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-book"></i> <span>Report</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>admin/Report"><i class="fa fa-book"></i>Buku Report</a></li>
              <li><a href="<?php echo base_url(); ?>admin/Report/pengembalian"><i class="fa fa-book"></i>Report Pengembalian</a></li>
            </ul>
          </li>
          <li class="header">DENDA</li>
          <li><a href="<?php echo base_url(); ?>admin/Denda"><i class="fa fa-usd"></i> <span>Denda</span></a></li>
          <li class="header">PETUGAS/OPERATOR</li>
          <li><a href="<?php echo base_url(); ?>admin/Petugas"><i class="fa fa-user-plus"></i> <span>Petugas</span></a></li>
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
          <?php echo $title; ?>
          <small><?php echo $desc; ?></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url(); ?>admin/<?php echo $pointer; ?>""><i class=" <?php echo $classicon; ?>"></i><?php echo $main_bread; ?></a></li>
          <li class="active"><?php echo $sub_bread; ?></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <?php echo $content; ?>

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
        Modified by @puluneko
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2017 <a href="http://fti.mercubuana-yogya.ac.id">FTI Mercubuana Yogyakarta</a>.</strong> All rights reserved.
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

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- <?php echo base_url(); ?>assets/bootstrap 3.3.6 -->
  <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
  <!--data tables-->
  <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/chartjs/Chart.min.js"></script>

  <!-- Morris.js charts -->

  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
  <!--<script>
  $(function () {
    "use strict";

    // AREA CHART
    var area = new Morris.Area({
      element: 'revenue-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666, item2: 2666},
        {y: '2011 Q2', item1: 2778, item2: 2294},
        {y: '2011 Q3', item1: 4912, item2: 1969},
        {y: '2011 Q4', item1: 3767, item2: 3597},
        {y: '2012 Q1', item1: 6810, item2: 1914},
        {y: '2012 Q2', item1: 5670, item2: 4293},
        {y: '2012 Q3', item1: 4820, item2: 3795},
        {y: '2012 Q4', item1: 15073, item2: 5967},
        {y: '2013 Q1', item1: 10687, item2: 4460},
        {y: '2013 Q2', item1: 8432, item2: 5713}
      ],
      xkey: 'y',
      ykeys: ['item1', 'item2'],
      labels: ['Item 1', 'Item 2'],
      lineColors: ['#a0d0e0', '#3c8dbc'],
      hideHover: 'auto'
    });

    // LINE CHART
    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [
        {y: '2011 Q1', item1: 2666},
        {y: '2011 Q2', item1: 2778},
        {y: '2011 Q3', item1: 4912},
        {y: '2011 Q4', item1: 3767},
        {y: '2012 Q1', item1: 6810},
        {y: '2012 Q2', item1: 5670},
        {y: '2012 Q3', item1: 4820},
        {y: '2012 Q4', item1: 15073},
        {y: '2013 Q1', item1: 10687},
        {y: '2013 Q2', item1: 8432}
      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['#3c8dbc'],
      hideHover: 'auto'
    });

    //DONUT CHART
    var donut = new Morris.Donut({
      element: 'sales-chart',
      resize: true,
      colors: ["#3c8dbc", "#f56954", "#00a65a"],
      data: [
        {label: "Download Sales", value: 12},
        {label: "In-Store Sales", value: 30},
        {label: "Mail-Order Sales", value: 20}
      ],
      hideHover: 'auto'
    });
    //BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: '2006', a: 100, b: 90},
        {y: '2007', a: 75, b: 65},
        {y: '2008', a: 50, b: 40},
        {y: '2009', a: 75, b: 65},
        {y: '2010', a: 50, b: 40},
        {y: '2011', a: 75, b: 65},
        {y: '2012', a: 100, b: 90}
      ],
      barColors: ['#00a65a', '#f56954'],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['CPU', 'DISK'],
      hideHover: 'auto'
    });
  });
</script>-->
  <script>
    function format_buku(d) {
      // `d` is the original data object for the row
      return '<div class="box box-info">' +
        '<div class="box-header with-border">' +
        '<h3 class="box-title">Detail Buku</h3>' +
        '</div>' +
        '<div class="box-body no-padding">' +
        '<table class="table table-striped">' +
        '<tr>' +
        '<td>ID Buku</td>' +
        '<td>' + d[2] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>ISBN</td>' +
        '<td>' + d[3] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Judul Buku</td>' +
        '<td>' + d[4] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Kategori</td>' +
        '<td>' + d[5] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Penerbit</td>' +
        '<td>' + d[6] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Pengarang</td>' +
        '<td>' + d[7] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>No Rak</td>' +
        '<td>' + d[10] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Tahun Terbit</td>' +
        '<td>' + d[11] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Total Stok</td>' +
        '<td>' + d[12] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Keterangan</td>' +
        '<td>' + d[13] + '</td>' +
        '</table>' +
        '</div>' +
        '</div>' +
        '</div>';
    }

    $(document).ready(function() {
      $('#table-buku').DataTable({
        "columnDefs": [{
            "targets": [2],
            "visible": false,
          },
          {
            "targets": [3],
            "visible": false,
          },
          {
            "targets": [7],
            "visible": false
          },
          {
            "targets": [12],
            "visible": false
          },
          {
            "targets": [13],
            "visible": false
          },

        ]
      });

      var table = $('#table-buku').DataTable();
      $('#table-buku tbody').on('click', 'td.details-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
        } else {
          // Open this row
          row.child(format_buku(row.data())).show();
          tr.addClass('shown');
        }
      });
    });

    function format_buku1(d) {
      // `d` is the original data object for the row
      return '<div class="box box-info">' +
        '<div class="box-header with-border">' +
        '<h3 class="box-title">Detail Buku</h3>' +
        '</div>' +
        '<div class="box-body no-padding">' +
        '<table class="table table-striped">' +
        '<tr>' +
        '<td>ID Buku</td>' +
        '<td>' + d[2] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>ISBN</td>' +
        '<td>' + d[3] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Judul Buku</td>' +
        '<td>' + d[4] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Kategori</td>' +
        '<td>' + d[5] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Penerbit</td>' +
        '<td>' + d[6] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Pengarang</td>' +
        '<td>' + d[7] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>No Rak</td>' +
        '<td>' + d[10] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Tahun Terbit</td>' +
        '<td>' + d[11] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Total Stok</td>' +
        '<td>' + d[12] + '</td>' +
        '</table>' +
        '</div>' +
        '</div>' +
        '</div>';
    }

    $(document).ready(function() {
      $('#table-buku1').DataTable({
        "columnDefs": []
      });

      var table = $('#table-buku1').DataTable();
      $('#table-buku1 tbody').on('click', 'td.details-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
        } else {
          // Open this row
          row.child(format_buku1(row.data())).show();
          tr.addClass('shown');
        }
      });
    });

    function format_petugas(d) {
      // `d` is the original data object for the row
      return '<div class="box box-info">' +
        '<div class="box-header with-border">' +
        '<h3 class="box-title">Detail Petugas</h3>' +
        '</div>' +
        '<div class="box-body no-padding">' +
        '<table class="table table-striped">' +
        '<tr>' +
        '<td>ID Petugas</td>' +
        '<td>' + d[2] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Nama</td>' +
        '<td>' + d[3] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Jenis Kelamin</td>' +
        '<td>' + d[4] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Alamat</td>' +
        '<td>' + d[5] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Agama</td>' +
        '<td>' + d[6] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>No HP</td>' +
        '<td>' + d[7] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Passwor Login</td>' +
        '<td>' + d[8] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Keterangan</td>' +
        '<td>' + d[9] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Foto</td>' +
        '<td>' + d[10] + '</td>' +
        '</table>' +
        '</div>' +
        '</div>' +
        '</div>';
    }

    $(document).ready(function() {
      $('#table-petugas1').DataTable({
        "columnDefs": [{
            "targets": [4],
            "visible": false,
          },
          {
            "targets": [5],
            "visible": false
          },
          {
            "targets": [8],
            "visible": false
          },
          {
            "targets": [9],
            "visible": false
          },
          {
            "targets": [10],
            "visible": false
          }

        ]
      });

      var table = $('#table-petugas1').DataTable();
      $('#table-petugas1 tbody').on('click', 'td.details-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
        } else {
          // Open this row
          row.child(format_petugas(row.data())).show();
          tr.addClass('shown');
        }
      });
    });

    function format(d) {
      // `d` is the original data object for the row
      return '<div class="box box-info">' +
        '<div class="box-header with-border">' +
        '<h3 class="box-title">Detail Buku</h3>' +
        '</div>' +
        '<div class="box-body no-padding">' +
        '<table class="table table-striped">' +
        '<tr>' +
        '<td>ID Anggota</td>' +
        '<td>' + d[2] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Nama</td>' +
        '<td>' + d[3] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Gender</td>' +
        '<td>' + d[4] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Kelas</td>' +
        '<td>' + d[5] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Agama</td>' +
        '<td>' + d[6] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Hp</td>' +
        '<td>' + d[7] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Alamat </td>' +
        '<td>' + d[8] + '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Keterangan </td>' +
        '<td>' + d[9] + '</td>' +
        '</table>' +
        '</div>' +
        '</div>' +
        '</div>';
    }

    $(document).ready(function() {
      $('#example').DataTable({
        "columnDefs": [{
            "targets": [6],
            "visible": false
          },
          {
            "targets": [7],
            "visible": false
          },
          {
            "targets": [8],
            "visible": false
          },
          {
            "targets": [9],
            "visible": false
          },

        ]
      });

      $('#example2').DataTable();

      var table = $('#example').DataTable();
      $('#example tbody').on('click', 'td.details-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
        } else {
          // Open this row
          row.child(format(row.data())).show();
          tr.addClass('shown');
        }
      });
    });

    //untuk detaill pinjam 
    function format1(d) {
      // `d` is the original data object for the row
      return d[8];
    }

    $(document).ready(function() {
      $('#data-pinjam').DataTable({
        "columnDefs": [{
          "targets": [8],
          "visible": false,
        }, ]
      });


      var table = $('#data-pinjam').DataTable();
      $('#data-pinjam tbody').on('click', 'td.details-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
        } else {
          // Open this row
          row.child(format1(row.data())).show();
          tr.addClass('shown');
        }
      });
    });
    //untuk detaill pinjam 
    function format11(d) {
      // `d` is the original data object for the row
      return d[8];
    }

    $(document).ready(function() {
      $('#data-pinjam1').DataTable({
        "columnDefs": [{
          "targets": [8],
          "visible": false,
        }, ]
      });


      var table = $('#data-pinjam1').DataTable();
      $('#data-pinjam1 tbody').on('click', 'td.details-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
        } else {
          // Open this row
          row.child(format11(row.data())).show();
          tr.addClass('shown');
        }
      });
    });
    //untuk detaill pinjam 
    function format11(d) {
      // `d` is the original data object for the row
      return d[8];
    }

    $(document).ready(function() {
      $('#data-pinjam11').DataTable({
        "columnDefs": [{
          "targets": [8],
          "visible": false,
        }, ]
      });


      var table = $('#data-pinjam11').DataTable();
      $('#data-pinjam11 tbody').on('click', 'td.details-control', function() {
        var tr = $(this).closest('tr');
        var row = table.row(tr);

        if (row.child.isShown()) {
          // This row is already open - close it
          row.child.hide();
          tr.removeClass('shown');
        } else {
          // Open this row
          row.child(format11(row.data())).show();
          tr.addClass('shown');
        }
      });
    });

    $(document).ready(function() {

      $('#table-penerbit').DataTable();

    });


    $('#confirm-delete').on('show.bs.modal', function(e) {
      $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

      $('.debug-url').html('URL Hapus: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
    });

    $('.date-own').datepicker({
      minViewMode: 2,
      format: 'yyyy'
    });


    $(document).ready(function() {
      $(".js-example-basic-single").select2();
    });
  </script>
  <script>
    $(function() {
      /* ChartJS
       * -------
       * Here we will create a few charts using ChartJS
       */

      //--------------
      //- AREA CHART -
      //--------------

      // Get context with jQuery - using jQuery's .get() method.
      var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var areaChart = new Chart(areaChartCanvas);

      var areaChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July", "Agustus", "September", "Oktober", "November", "Desember"],
        datasets: [{
          label: "Peminjaman",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [<?php echo $januari; ?>,
            <?php echo $februari; ?>,
            <?php echo $maret; ?>,
            <?php echo $april; ?>,
            <?php echo $mei; ?>,
            <?php echo $juni; ?>,
            <?php echo $juli; ?>,
            <?php echo $agustus; ?>,
            <?php echo $september; ?>,
            <?php echo $oktober; ?>,
            <?php echo $november; ?>,
            <?php echo $desember; ?>
          ]
        }]
      };

      var areaChartData2 = {
        labels: [<?php foreach ($buku_pinjam as $pinjam) {
                    echo '"' . $pinjam['judul'] . '",';
                  } ?>],

        datasets: [{
          label: "Peminjaman",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [<?php foreach ($buku_pinjam as $pinjam) {
                    echo '"' . $pinjam['total'] . '",';
                  } ?>]
        }]
      };

      var areaChartData3 = {
        labels: [<?php foreach ($kelas_pinjam as $pinjam) {
                    echo '"' . $pinjam['kelas'] . '",';
                  } ?>],

        datasets: [{
          label: "Kelas",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [<?php foreach ($kelas_pinjam as $pinjam) {
                    echo '"' . $pinjam['total'] . '",';
                  } ?>]
        }]
      };



      var areaChartOptions = {
        //Boolean - If we should show the scale at all
        showScale: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: false,
        //String - Colour of the grid lines
        scaleGridLineColor: "rgba(0,0,0,.05)",
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - Whether the line is curved between points
        bezierCurve: true,
        //Number - Tension of the bezier curve between points
        bezierCurveTension: 0.3,
        //Boolean - Whether to show a dot for each point
        pointDot: false,
        //Number - Radius of each point dot in pixels
        pointDotRadius: 4,
        //Number - Pixel width of point dot stroke
        pointDotStrokeWidth: 1,
        //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
        pointHitDetectionRadius: 20,
        //Boolean - Whether to show a stroke for datasets
        datasetStroke: true,
        //Number - Pixel width of dataset stroke
        datasetStrokeWidth: 2,
        //Boolean - Whether to fill the dataset with a color
        datasetFill: true,
        //String - A legend template
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: true,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true
      };

      //Create the line chart
      areaChart.Line(areaChartData, areaChartOptions);

      //-------------
      //- LINE CHART -
      //--------------
      var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
      var lineChart = new Chart(lineChartCanvas);
      var lineChartOptions = areaChartOptions;
      lineChartOptions.datasetFill = false;
      lineChart.Line(areaChartData2, lineChartOptions);

      //-------------
      //- PIE CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
      var pieChart = new Chart(pieChartCanvas);
      var PieData = [

        <?php foreach ($kategori_pinjam as $op => $value) {

        ?> {
            value: <?php echo $value['total']; ?>,
            color: "<?php echo $warna[$op]; ?>",
            highlight: "<?php echo $warna[$op]; ?>",
            label: "<?php echo $value['kategori']; ?>"
          },
        <?php
        }
        ?>
      ];
      var pieOptions = {
        //Boolean - Whether we should show a stroke on each segment
        segmentShowStroke: true,
        //String - The colour of each segment stroke
        segmentStrokeColor: "#fff",
        //Number - The width of each segment stroke
        segmentStrokeWidth: 2,
        //Number - The percentage of the chart that we cut out of the middle
        percentageInnerCutout: 50, // This is 0 for Pie charts
        //Number - Amount of animation steps
        animationSteps: 100,
        //String - Animation easing effect
        animationEasing: "easeOutBounce",
        //Boolean - Whether we animate the rotation of the Doughnut
        animateRotate: true,
        //Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale: false,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true,
        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: true,
        //String - A legend template
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
      };
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      pieChart.Doughnut(PieData, pieOptions);

      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas = $("#barChart").get(0).getContext("2d");
      var barChart = new Chart(barChartCanvas);
      var barChartData = areaChartData3;
      //  barChartData.datasets[0].fillColor = "<?php echo '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6); ?>";
      barChartData.datasets[0].fillColor = "#00a65a";
      barChartData.datasets[0].strokeColor = "#00a65a";
      barChartData.datasets[0].pointColor = "#00a65a";
      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: "rgba(0,0,0,.05)",
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - If there is a stroke on each bar
        barShowStroke: true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth: 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing: 5,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 1,
        //String - A legend template
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true
      };

      barChartOptions.datasetFill = false;
      barChart.Bar(barChartData, barChartOptions);
    });
  </script>
  <script>
    $(function() {
      /* ChartJS
       * -------
       * Here we will create a few charts using ChartJS
       */

      //--------------
      //- AREA CHART -
      //--------------

      // Get context with jQuery - using jQuery's .get() method.
      var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var areaChart = new Chart(areaChartCanvas);

      var areaChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July", "Agustus", "September", "Oktober", "November", "Desember"],
        datasets: [{
          label: "Peminjaman",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [<?php echo $januari; ?>,
            <?php echo $februari; ?>,
            <?php echo $maret; ?>,
            <?php echo $april; ?>,
            <?php echo $mei; ?>,
            <?php echo $juni; ?>,
            <?php echo $juli; ?>,
            <?php echo $agustus; ?>,
            <?php echo $september; ?>,
            <?php echo $oktober; ?>,
            <?php echo $november; ?>,
            <?php echo $desember; ?>
          ]
        }]
      };

      var areaChartData2 = {
        labels: [<?php foreach ($buku_pinjam as $pinjam) {
                    echo '"' . $pinjam['judul'] . '",';
                  } ?>],

        datasets: [{
          label: "Peminjaman",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [<?php foreach ($buku_pinjam as $pinjam) {
                    echo '"' . $pinjam['total'] . '",';
                  } ?>]
        }]
      };

      var areaChartData3 = {
        labels: [<?php foreach ($kelas_pinjam as $pinjam) {
                    echo '"' . $pinjam['kelas'] . '",';
                  } ?>],

        datasets: [{
          label: "Kelas",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [<?php foreach ($kelas_pinjam as $pinjam) {
                    echo '"' . $pinjam['total'] . '",';
                  } ?>]
        }]
      };



      var areaChartOptions = {
        //Boolean - If we should show the scale at all
        showScale: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: false,
        //String - Colour of the grid lines
        scaleGridLineColor: "rgba(0,0,0,.05)",
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - Whether the line is curved between points
        bezierCurve: true,
        //Number - Tension of the bezier curve between points
        bezierCurveTension: 0.3,
        //Boolean - Whether to show a dot for each point
        pointDot: false,
        //Number - Radius of each point dot in pixels
        pointDotRadius: 4,
        //Number - Pixel width of point dot stroke
        pointDotStrokeWidth: 1,
        //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
        pointHitDetectionRadius: 20,
        //Boolean - Whether to show a stroke for datasets
        datasetStroke: true,
        //Number - Pixel width of dataset stroke
        datasetStrokeWidth: 2,
        //Boolean - Whether to fill the dataset with a color
        datasetFill: true,
        //String - A legend template
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: true,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true
      };

      //Create the line chart
      areaChart.Line(areaChartData, areaChartOptions);

      //-------------
      //- LINE CHART -
      //--------------
      var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
      var lineChart = new Chart(lineChartCanvas);
      var lineChartOptions = areaChartOptions;
      lineChartOptions.datasetFill = false;
      lineChart.Line(areaChartData2, lineChartOptions);

      //-------------
      //- PIE CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
      var pieChart = new Chart(pieChartCanvas);
      var PieData = [

        <?php foreach ($kategori_pinjam as $op => $value) {

        ?> {
            value: <?php echo $value['total']; ?>,
            color: "<?php echo $warna[$op]; ?>",
            highlight: "<?php echo $warna[$op]; ?>",
            label: "<?php echo $value['kategori']; ?>"
          },
        <?php
        }
        ?>
      ];
      var pieOptions = {
        //Boolean - Whether we should show a stroke on each segment
        segmentShowStroke: true,
        //String - The colour of each segment stroke
        segmentStrokeColor: "#fff",
        //Number - The width of each segment stroke
        segmentStrokeWidth: 2,
        //Number - The percentage of the chart that we cut out of the middle
        percentageInnerCutout: 50, // This is 0 for Pie charts
        //Number - Amount of animation steps
        animationSteps: 100,
        //String - Animation easing effect
        animationEasing: "easeOutBounce",
        //Boolean - Whether we animate the rotation of the Doughnut
        animateRotate: true,
        //Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale: false,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true,
        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: true,
        //String - A legend template
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
      };
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      pieChart.Doughnut(PieData, pieOptions);

      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas = $("#barChart").get(0).getContext("2d");
      var barChart = new Chart(barChartCanvas);
      var barChartData = areaChartData3;
      //  barChartData.datasets[0].fillColor = "<?php echo '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6); ?>";
      barChartData.datasets[0].fillColor = "#00a65a";
      barChartData.datasets[0].strokeColor = "#00a65a";
      barChartData.datasets[0].pointColor = "#00a65a";
      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: "rgba(0,0,0,.05)",
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - If there is a stroke on each bar
        barShowStroke: true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth: 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing: 5,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 1,
        //String - A legend template
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true
      };

      barChartOptions.datasetFill = false;
      barChart.Bar(barChartData, barChartOptions);
    });
  </script>

  <!-- sort table and many more -->
  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
  <!-- SlimScroll -->
  <!-- script src="<?php echo base_url(); ?>assets/plugins/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
  <!-- <script src="<?php echo base_url(); ?>assets/plugins/plugins/fastclick/fastclick.js"></script> -->
</body>

</html>