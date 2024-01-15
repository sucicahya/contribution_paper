<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Aset Kelurahan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Aset</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- SELECT2 EXAMPLE -->
    <section class="content">
    	<?php foreach ($aset as $ast){ ?>
			<?php echo form_open_multipart('aset/update_aset/'.$ast->id); ?>
      <div class="container-fluid">
        <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              	<div class="form-group">
                  <label>ID</label>
                  <input type="hidden" name="id" class="form-control" value="<?php echo $ast->id ?>">
									<input type="text" name="id" disabled class="form-control" value="<?php echo $ast->id ?>">
                </div>
                <div class="form-group">
                  <label>Jenis Barang</label>
                  <input type="text" name="jenis_barang" class="form-control" value="<?php echo $ast->jenis_barang ?>">
                </div>
                <div class="form-group">
                  <label>Kode Barang</label>
                  <input type="text" name="kode_barang" class="form-control" value="<?php echo $ast->kode_barang ?>">
                </div>
                <div class="form-group">
                  <label>Identitas Barang</label>
                  <input type="text" name="identitas_barang" class="form-control" value="<?php echo $ast->identitas_barang ?>">
                </div>
                <div class="form-group">
                  <label>APBD</label>
                  <input type="text" name="apbd" class="form-control" value="<?php echo $ast->apbd ?>">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Perolehan Lain yang Sah</label>
                  <input type="text" name="perolehan_lain_yang_sah" class="form-control" value="<?php echo $ast->perolehan_lain_yang_sah ?>">
                </div>
                <div class="form-group">
                  <label>Kekayaan Asli Desa</label>
                  <input type="text" name="kekayaan_asli_desa" class="form-control" value="<?php echo $ast->kekayaan_asli_desa ?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Perolehan</label>
                  <input type="date" name="tanggal_perolehan" class="form-control" value="<?php echo $ast->tanggal_perolehan ?>">
                </div>
                <div class="form-group">
                  <label>Gambar</label>   <br>
                  &nbsp;&nbsp;&nbsp;<img src="<?php echo base_url(); ?>assets/gambar/aset/<?php echo $ast->gambar ?>" width="100" height="120"><br> 
                  <input type="hidden" name="gambar2" class="form-control"  value="<?= $ast->gambar ?>" >
                  <input type="file" name="gambar" class="form-control" value="<?php echo $ast->gambar ?>">

									<!-- <img src="<?php echo base_url(); ?>assets/gambar/aset/<?php echo $ast->gambar ?>" width="90" height="110">		
									<td><?php echo anchor('aset/edit_gambar_aset/'.$ast->id, '<div class="btn btn-success btn-sm"><i class="fa fa-edit"></i></div>') ?></td> -->
                </div>
              </div>              
        <!-- /.col-->
      			</div>
						<a href="<?php echo base_url('aset/index'); ?>" class="btn btn-info">Kembali</a>
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
		<?php foreach ($aset as $ast){ ?>
			<?php echo form_open_multipart('aset/update_aset'); ?>
				<div> 
					<label>ID</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $ast->id ?>">
					<input type="text" name="id" disabled class="form-control" value="<?php echo $ast->id ?>">
				</div>
				<div> 
					<label>Jenis Barang</label>
					<input type="text" name="jenis_barang" class="form-control" value="<?php echo $ast->jenis_barang ?>">
				</div>
				<div> 
					<label>Kode Barang</label>
					<input type="text" name="kode_barang" class="form-control" value="<?php echo $ast->kode_barang ?>">
				</div>
				<div> 
					<label>Identitas Barang</label>
					<input type="text" name="identitas_barang" class="form-control" value="<?php echo $ast->identitas_barang ?>">
				</div>
				<div> 
					<label>APBD</label>
					<input type="text" name="apbd" class="form-control" value="<?php echo $ast->apbd ?>">
				</div>
				<div> 
					<label>Perolehan Lain Yang Sah</label>
					<input type="text" name="perolehan_lain_yang_sah" class="form-control" value="<?php echo $ast->perolehan_lain_yang_sah ?>">
				</div>
				<div> 
					<label>Kekayaan Asli Desa</label>
					<input type="text" name="kekayaan_asli_desa" class="form-control" value="<?php echo $ast->kekayaan_asli_desa ?>">
				</div>
				<div> 
					<label>Tanggal Perolehan</label>
					<input type="date" name="tanggal_perolehan" class="form-control" value="<?php echo $ast->tanggal_perolehan ?>">
				</div>
				<div> 
					<label>Gambar</label>
					<img src="<?php echo base_url(); ?>assets/gambar/<?php echo $ast->gambar ?>" width="90" height="110">		
					<td><?php echo anchor('aset/edit_gambar_aset/'.$ast->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td> --><!-- 			
					<input type="hidden" name="gambar2" class="form-control"  value="<?= $ast->gambar ?>" >
					<input type="file" name="gambar" class="form-control" value="<?php echo $ast->gambar ?>"> -->
				<!-- </div>

				<a href="<?php echo base_url('aset/index'); ?>" class="btn btn-info">Kembali</a>
				<button type="reset" class="btn btn-warning">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>


			<?php echo form_close(); ?>
		<?php } ?>
	</section>
	
</div> -->