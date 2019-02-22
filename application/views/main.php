<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=APP_NAME; ?></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>

<body>
    <!-- Left Panel -->
        <?php $this->load->view('layout/menu'); ?>
    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php $this->load->view('layout/header')?>
        <!-- Header-->

        <!-- Breadcrumb -->
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><?=$title; ?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb -->

        <div class="content mt-3">
            <div class="animated fadeIn">
                <!-- main content -->
                <?php $this->load->view('module/'.$module); ?>
                <!-- main content -->
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->





</body>
<script src="<?=base_url()?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>


    <script src="<?=base_url()?>assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?=base_url()?>assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?=base_url()?>assets/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?=base_url()?>assets/js/init-scripts/data-table/datatables-init.js"></script>


</html>
