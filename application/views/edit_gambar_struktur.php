<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Struktur Kelurahan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Struktur</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- SELECT2 EXAMPLE -->
    <section class="content">
    	<?php foreach ($struktur as $str){ ?>
			<?php echo form_open_multipart('struktur/update_gambar_struktur'); ?>
      <div class="container-fluid">
        <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              	<div class="form-group">
                  <label>ID</label>
                  <input type="hidden" name="id" class="form-control" value="<?php echo $str->id ?>">
					         <input type="text" name="id" disabled class="form-control" value="<?php echo $str->id ?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tanda Tangan</label><br>
                  <img src="<?php echo base_url(); ?>assets/tanda_tangan/struktur/<?php echo $str->ttd ?>" width="90" height="110">	<br><br>
                  <input type="hidden" name="ttd2" class="form-control"  value="<?= $str->ttd ?>" >
                  <input type="file" name="ttd" class="form-control" value="<?php echo $str->ttd ?>">
                </div>
              </div>
      		  </div>
      			<a href="<?php echo base_url('struktur/index'); ?>" class="btn btn-info">Kembali</a>
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