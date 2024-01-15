<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Kelurahan Bumiaji</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/home/css/sl-slide.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.css"> <!-- datepicker -->

    <script src="<?php echo base_url() ?>assets/home/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <?php 
    $header = $this->db->get("data_profil"); 
    $headerr = $header->result(); 
    foreach ($headerr as $prf){ ?>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>">

   
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>">
</head>

<body>

    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a href="<?= base_url('home')?>"><img src="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>"width=112px></a> <?php } ?>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li <?=$this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>><a href="<?= base_url('home')?>">Home</a></li>
                        <li <?=$this->uri->segment(1) == 'home_struktur' ? 'class="active"' : '' ?>><a href="<?= base_url('home_struktur')?>">Struktur</a></li>
                        <li <?=$this->uri->segment(1) == 'home_pengumuman' ? 'class="active"' : '' ?>><a href="<?= base_url('home_pengumuman')?>">Pengumuman</a></li>
                        <!-- <li><a href="portfolio.html">Seputar</a></li> -->
                        <li class="dropdown <?=$this->uri->segment(1) == 'home_apbd' || $this->uri->segment(1) == 'home_aset' ? 'active' : '' ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Seputar<i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li <?=$this->uri->segment(1) == 'home_apbd' ? 'class="active"' : '' ?>><a href="<?= base_url('home_apbd')?>">APBD</a></li>
                                <li <?=$this->uri->segment(1) == 'home_aset' ? 'class="active"' : '' ?>><a href="<?= base_url('home_aset')?>">Aset</a></li><!-- 
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="registration.html">Registration</a></li>
                                <li class="divider"></li>
                                <li><a href="privacy.html">Privacy Policy</a></li>
                                <li><a href="terms.html">Terms of Use</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown <?=$this->uri->segment(1) == 'home_surat' || $this->uri->segment(1) == 'home_pengaduan' ? 'active' : '' ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Layanan<i class="icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li <?=$this->uri->segment(1) == 'home_surat' ? 'class="active"' : '' ?>><a href="<?= base_url('home_surat')?>">Surat</a></li>
                                <li <?=$this->uri->segment(1) == 'home_pengaduan' ? 'class="active"' : '' ?>><a href="<?= base_url('home_pengaduan')?>">Pengaduan</a></li>
                            </ul>
                        <!-- <li><a href="<?= base_url('home_surat')?>">Layanan Surat</a></li>  -->
                        <li <?=$this->uri->segment(1) == 'home_tracking' ? 'class="active"' : '' ?>><a href="<?= base_url('home_tracking')?>">Tracking Surat</a></li>
                        <li class="login" <?=$this->uri->segment(1) == 'login' ? 'class="active"' : '' ?>>
                            <a data-toggle="modal" href="<?= base_url('login')?>"><i class="icon-lock"></i></a>
                        </li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->