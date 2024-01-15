<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengumuman Kelurahan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengumuman</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- SELECT2 EXAMPLE -->
    <section class="content">
    	<?php foreach ($pengumuman as $pgm){ ?>
			<?php echo form_open_multipart('pengumuman/update_gambar_pengumuman'); ?>
      <div class="container-fluid">
        <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              	  <div class="form-group">
                  	<label>ID</label>
                  	<input type="hidden" name="id" class="form-control" value="<?php echo $pgm->id ?>">
					          <input type="text" name="id" disabled class="form-control" value="<?php echo $pgm->id ?>">
                  </div>
              </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Gambar</label><br>
                <img src="<?php echo base_url(); ?>assets/gambar/pengumuman/<?php echo $pgm->gambar ?>" width="90" height="110">	<br><br>
                <input type="hidden" name="gambar2" class="form-control"  value="<?= $pgm->gambar ?>" >
                <input type="file" name="gambar" class="form-control" value="<?php echo $pgm->gambar ?>">
              </div>
            </div>
      		</div>
      		<a href="<?php echo base_url('pengumuman/index'); ?>" class="btn btn-info">Kembali</a>
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
		<?php foreach ($pengumuman as $pgm){ ?>
			<?php echo form_open_multipart('pengumuman/update_gambar_pengumuman'); ?>
			<div> 
					<label>ID</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $pgm->id ?>">
					<input type="text" name="id" disabled class="form-control" value="<?php echo $pgm->id ?>">
				</div>
			<div> 
				<label>Gambar</label>
				<img src="<?php echo base_url(); ?>assets/gambar/<?php echo $pgm->gambar ?>" width="90" height="110">		
				<input type="hidden" name="gambar2" class="form-control"  value="<?= $pgm->gambar ?>" >
				<input type="file" name="gambar" class="form-control" value="<?php echo $pgm->gambar ?>">
			</div>
			<a href="<?php echo base_url('pengumuman/index'); ?>" class="btn btn-info">Kembali</a>
				<button type="reset" class="btn btn-warning">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>


			<?php echo form_close(); ?>
		<?php } ?>
	</section>
	
</div> -->