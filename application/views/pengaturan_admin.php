<div class="content-wrapper">
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengaturan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengaturan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	<section class="content">
		<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pengaturan Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="post" action="<?php echo base_url('pengaturan_admin/update_pengaturan_admin') ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Password Baru</label>
                    <input type="password" name="password_baru" class="form-control" placeholder="Masukkan Password Baru">
                    <!-- <?php echo form_error('password_baru', '<div class="test-small text-danger"></div>') ?> -->
                    <small><font color="red"><i><?php echo form_error('password_baru'); ?></i></font></small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ulangi Password</label>
                    <input type="password" name="ulang_password" class="form-control" placeholder="Ulangi Password Baru">
                    <!-- <?php echo form_error('ulang_password', '<div class="test-small text-danger"></div>') ?> -->
                    <small><font color="red"><i><?php echo form_error('ulang_password'); ?></i></font></small>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                	<button type="reset" class="btn btn-warning">Reset</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section></div>












<!-- <div class="content-wrapper">
	<section class="content">
			<form method="post" action="<?php echo base_url('pengaturan_admin/update_pengaturan_admin') ?>">
				<div style="width: 50%"> 
					<label>Password Baru</label>
					<input type="password" name="password_baru" class="form-control" >
					<?php echo form_error('password_baru', '<div class="test-small text-danger"></div>') ?>
				</div>
				<div style="width: 50%"> 
					<label>Ulangi Password</label>
					<input type="password" name="ulang_password" class="form-control" >
					<?php echo form_error('ulang_password', '<div class="test-small text-danger"></div>') ?>
				</div>
				<br>
				<button type="reset" class="btn btn-warning">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>


			</form>
	</section>
	
</div> -->