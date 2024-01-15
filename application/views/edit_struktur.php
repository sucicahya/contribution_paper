Content Wrapper. Contains page content -->
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
      <?php echo form_open_multipart('struktur/update_struktur/'.$str->id); ?>
			<!-- <form action="<?php echo base_url().'struktur/update_struktur/'.$str->id; ?>" method="post"> -->
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
                <div class="form-group">
                  <label>Nama Pejabat</label>
                  <input type="text" name="nama_pejabat" class="form-control" value="<?php echo $str->nama_pejabat ?>">
                  <small><font color="red"><i><?php echo form_error('nama_pejabat'); ?></i></font></small>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" name="jabatan" class="form-control" value="<?php echo $str->jabatan ?>">
                  <small><font color="red"><i><?php echo form_error('jabatan'); ?></i></font></small>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>NIP</label>
                  <input type="text" name="nip" class="form-control" value="<?php echo $str->nip ?>">
                  <small><font color="red"><i><?php echo form_error('nip'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Tanda Tangan</label>
                  <img src="<?php echo base_url(); ?>assets/tanda_tangan/struktur/<?php echo $str->ttd ?>" width="90" height="110">       <br><br>
                  <input type="hidden" name="ttd2" class="form-control"  value="<?= $str->ttd ?>" >
                  <input type="file" name="ttd" class="form-control" value="<?php echo $str->ttd ?>">
                  <!-- <td><?php echo anchor('struktur/edit_gambar_struktur/'.$str->id, '<div class="btn btn-success btn-sm"><i class="fa fa-edit"></i></div>') ?></td> -->
                </div>
                <!-- /.form-group -->
              </div>              
        <!-- /.col-->
      		  </div>
      			<a href="<?php echo base_url('struktur/index'); ?>" class="btn btn-info">Kembali</a>
				    <button type="reset" class="btn btn-warning">Reset</button>
				    <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
          <!-- /.card-body -->
          
        </div>
        <!-- /.card -->
      </div>
      <?php echo form_close(); ?>
		  <?php } ?>
    </section>
  </div>
























<!-- <div class="content-wrapper">
	<section class="content">
		<?php foreach ($struktur as $str){ ?>
			<form action="<?php echo base_url().'struktur/update_struktur'; ?>" method="post">
				<div> 
					<label>ID</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $str->id ?>">
					<input type="text" name="id" disabled class="form-control" value="<?php echo $str->id ?>">
				</div>
				<div> 
					<label>Jabatan</label>
					<input type="text" name="jabatan" class="form-control" value="<?php echo $str->jabatan ?>">
				</div>
				<div> 
					<label>Nama Pejabat</label>
					<input type="text" name="nama_pejabat" class="form-control" value="<?php echo $str->nama_pejabat ?>">
				</div>
				<div> 
					<label>NIP</label>
					<input type="text" name="nip" class="form-control" value="<?php echo $str->nip ?>">
				</div>

				<a href="<?php echo base_url('struktur/index'); ?>" class="btn btn-info">Kembali</a>
				<button type="reset" class="btn btn-warning">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>


			</form>
		<?php } ?>
	</section>
	
</div>