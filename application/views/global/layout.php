<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Raudhatul Abbas e-Library</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
    <link rel="stylesheet" href="<?= base_url('assets2/css/ionicons.min.css') ?>">
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo base_url(); ?>assets2/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url(); ?>assets2/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url(); ?>assets2/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets2/css/select2.min.css') ?>">
    <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <![endif]-->
    <style>
        body {
            font-family: Arial, sans-serif;
            padding-top: 50px;
        }

        .navbar {
            margin-bottom: 0;
            background-color: #2c3e50;
        }

        .navbar-brand,
        .navbar-nav>li>a {
            color: #ecf0f1 !important;
        }

        .jumbotron {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 100px 25px;
        }

        .jumbotron h1 {
            font-size: 50px;
        }

        .section {
            padding: 50px 0;
        }

        .section h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .table-section {
            padding: 50px 0;
        }

        .table-section h2 {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <!-- <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">
                        <center>
                            <h1>Raudhatul Abbas <B> e-Library</B></h1>
                        </center>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <!-- LOGO HEADER END-->
    <!-- <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-left">

                            <li><a href="<?php echo base_url(); ?>Buku">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>Buku/list_buku_all">List Buku</a></li>
                            <li><a href="<?php echo base_url(); ?>Buku/profile">Tentang Kami</a></li>

                        </ul>

                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url(); ?>/web/log"><b>Login</b></a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">E-library</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>Buku">Beranda</a></li>
                    <li><a href="<?php echo base_url(); ?>Buku/list_buku_all"">Koleksi Buku</a></li>
                    <!-- <li><a href=" #books">Koleksi Buku</a></li> -->
                    <li><a href="#about">Tentang</a></li>
                    <!-- <li><a href=" #contact">Kontak</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <?php echo $content; ?>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2024 Perpustakaan Raudhatul Abbas | By : <a href="http://ismitech.web.id/" target="_blank">ISMITECH</a>
                </div>

            </div>
        </div>
    </footer>

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
    <!-- jQuery -->


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
                '<td>' + d[8] + '</td>' +
                '</tr>' +
                '<tr>' +
                '<td>Tahun Terbit</td>' +
                '<td>' + d[10] + '</td>' +
                '</tr>' +
                // '<tr>' +
                // '<td>Total Stok</td>' +
                // '<td>' + d[11] + '</td>' +
                // '</tr>' +
                // '<tr>' +
                '<td>Keterangan</td>' +
                '<td>' + d[12] + '</td>' +
                '</tr>' +
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
                        "targets": [10],
                        "visible": false
                    },
                    {
                        "targets": [11],
                        "visible": false
                    },
                    {
                        "targets": [12],
                        "visible": false
                    },
                    {
                        "targets": [12],
                        "visible": false
                    }

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

        $(document).ready(function() {
            $('#category').select2({
                placeholder: "Pilih Kategori",
                allowClear: true,
                width: '100%',

            });

            $('#rack').select2({
                placeholder: "Pilih Rak",
                //minimumInputLength: 1,
                allowClear: true,
                width: '100%'
            });
        });
    </script>
</body>

</html>