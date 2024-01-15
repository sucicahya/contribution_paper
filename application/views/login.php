
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kelurahan Bumiaji</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">

  <!-- Le fav and touch icons -->
  <?php 
  $header = $this->db->get("data_profil"); 
  $headerr = $header->result(); 
  foreach ($headerr as $prf){ ?>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>">
   
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>"><?php } ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url('login')?>" class="h1"><b>LOGIN</b></a>
    </div>
    <div class="card-body">
      <!-- <p class="login-box-msg">Sign in to start your session</p> -->

      <!-- <?php echo form_open('welcome/ceklogin') ?>
			<input type="text" name="username" placeholder="Masukkan Username" />
			<input type="password" name="password" placeholder="Masukkan Password" />
			<input type="submit" name="login" value="LOGIN">
		<?php echo form_close() ?> -->

    <?php echo $this->session->flashdata('pesan') ?>

      <form method="post" action="<?php echo base_url('login/proses_login') ?>" class="user">
      	<!-- <?php echo form_open('login/ceklogin') ?> -->
        <div class="input-group mb-3">
        	<input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan Username">
          <!-- <?php echo form_error('username', '<div class="text-danger small ml-3">', '</div>') ?> -->
          <!-- <input type="email" class="form-control" placeholder="Email"> -->
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div><small><font color="red"><i><?php echo form_error('username'); ?></i></font></small>
        <div class="input-group mb-3">
          <!-- <input type="password" class="form-control" placeholder="Password"> -->
          <input type="password" name="password_2" class="form-control form-control-user" placeholder="Masukkan Password">
          <!-- <?php echo form_error('password_2', '<div class="text-danger small ml-3">', '</div>') ?> -->
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div><small><font color="red"><i><?php echo form_error('password_2'); ?></i></font></small>
        <div class="row">
          <!-- <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4" style="width:800px; margin:0 auto;">
          	<!-- <input type="submit" name="login" value="LOGIN"> -->
            <button class="btn btn-primary btn-user btn-block">Login</button> 
          </div>
          <!-- /.col -->
        </div>
        <!-- <?php echo form_close() ?> -->
      </form>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
