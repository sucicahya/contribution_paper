<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil Kelurahan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- SELECT2 EXAMPLE -->
    <section class="content">
    	<?php foreach ($profil as $prf){ ?>
			<?php echo form_open_multipart('profil/update_gambar_profil'); ?>
      <div class="container-fluid">
        <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
              	 <div class="form-group">
                  	<label>ID</label>
                  	<input type="hidden" name="id" class="form-control" value="<?php echo $prf->id ?>">
					          <input type="text" name="id" disabled class="form-control" value="<?php echo $prf->id ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Gambar</label>
                  <img src="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->gambar ?>" width="90" height="110">	
                  <input type="hidden" name="gambar2" class="form-control"  value="<?= $prf->gambar ?>" >
                  <input type="file" name="gambar" class="form-control" value="<?php echo $prf->gambar ?>">
                </div>
              </div>
              <div class="col-md-6">
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Logo</label>
                  <img src="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>" width="90" height="110">
                  <input type="hidden" name="logo2" class="form-control"  value="<?= $prf->logo ?>" >
                  <input type="file" name="logo" class="form-control" value="<?php echo $prf->logo ?>">
                </div>
                <!-- /.form-group -->
              </div>
      		  </div>
      			<a href="<?php echo base_url('profil/index'); ?>" class="btn btn-info">Kembali</a>
				    <button type="reset" class="btn btn-warning">Reset</button>
				    <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
          <!-- /.card-body -->
          
        </div>
        <!-- /.card -->
      </div>
      <?php echo form_close(); ?></form>
		  <?php } ?>
    </section>
  </div>














<!-- <div class="content-wrapper">
	<section class="content">
		<?php foreach ($profil as $prf){ ?>
			<?php echo form_open_multipart('profil/update_gambar_profil'); ?>
			<div> 
					<label>ID</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $prf->id ?>">
					<input type="text" name="id" disabled class="form-control" value="<?php echo $prf->id ?>">
				</div>
			<div> 
				<label>Gambar</label>
				<img src="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->gambar ?>" width="90" height="110">		
				<input type="hidden" name="gambar2" class="form-control"  value="<?= $prf->gambar ?>" >
				<input type="file" name="gambar" class="form-control" value="<?php echo $prf->gambar ?>">
			</div>
			<div> 
				<label>Gambar</label>
				<img src="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>" width="90" height="110">		
				<input type="hidden" name="logo2" class="form-control"  value="<?= $prf->logo ?>" >
				<input type="file" name="logo" class="form-control" value="<?php echo $prf->logo ?>">
			</div>
			<a href="<?php echo base_url('profil/index'); ?>" class="btn btn-info">Kembali</a>
				<button type="reset" class="btn btn-warning">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>


			<?php echo form_close(); ?>
		<?php } ?>
	</section>
	
</div> -->