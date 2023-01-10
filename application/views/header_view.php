<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title_web; ?> | Management Information System </title>
  <!-- Tell the browser to be responsive to screen width -->


  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/font-awesome/css/font-awesome.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/bower_components/Ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/dist/css/AdminLTE.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets_style/assets/dist/css/responsive.css">

  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>assets_style/assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GIS Leaflet : <?= $title; ?></title>
  <!-- BOOTSTRAP STYLES-->
  <link href="<?= base_url('template/assets/css/bootstrap.css'); ?>" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="<?= base_url('template/assets/css/font-awesome.css'); ?>" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="<?= base_url('template/assets/css/custom.css'); ?>" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <!-- LEAFLET -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="<?= base_url('template/assets/js/jquery-1.10.2.js'); ?>"></script>
  <!-- BOOTSTRAP SCRIPTS -->
  <script src="<?= base_url('template/assets/js/bootstrap.min.js'); ?>"></script>
  <!-- METISMENU SCRIPTS -->
  <script src="<?= base_url('template/assets/js/jquery.metisMenu.js'); ?>"></script>
  <!-- CUSTOM SCRIPTS -->
  <script src="<?= base_url('template/assets/js/custom.js'); ?>"></script>

  <!-- LEAFLET CONTROL SEARCH -->
  <link rel="stylesheet" href="<?= base_url('leaflet-search/src/leaflet-search.css'); ?>" />
  <script src="<?= base_url('leaflet-search/src/leaflet-search.js'); ?>"></script>
  <script type="text/javascript">
    $(document).ajaxStart(function() {
      Pace.restart();
    });
  </script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <header class="main-header">

      <!-- Logo -->
      <a href="<?php echo base_url('index.php/dashboard'); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>R</b>I</b>D</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">RESIDFOM</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li>
              <?php
              $d = $this->db->query("SELECT * FROM tbl_login WHERE id_login = '$idbo'")->row();
              ?>
              <a href="<?= base_url('user/edit/' . $idbo); ?>">
                Welcome , <i class="fa fa-edit"> </i> <?php echo $d->nama;
                                                      echo ' | ( ' . $d->level . ' )'; ?></a>
            </li>
            <li>
              <a href="<?php echo base_url(); ?>login/logout">Sign out</a>
            </li>
            <!-- Control Sidebar Toggle Button 
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
          </ul>
        </div>
      </nav>
    </header>
    <!--loading-->
    <!-- Left side column. contains the logo and sidebar -->