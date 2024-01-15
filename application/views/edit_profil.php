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
			<?php echo form_open_multipart('profil/update_profil/'.$prf->id); ?>
      <div class="container-fluid">
        <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              	<div class="form-group">
                 	<label>ID</label>
                 	<input type="hidden" name="id" class="form-control" value="<?php echo $prf->id ?>">
					        <input type="text" name="id" disabled class="form-control" value="<?php echo $prf->id ?>">
                </div>
                <div class="form-group">
                  <label>Profil Desa</label>
                  <textarea name="tentang" class="form-control" value=""><?php echo $prf->tentang ?></textarea>
                  <small><font color="red"><i><?php echo form_error('tentang'); ?></i></font></small>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Visi</label>
                  <textarea name="visi" class="form-control" value=""><?php echo $prf->visi ?></textarea>
                  <small><font color="red"><i><?php echo form_error('visi'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Misi</label>
                  <textarea name="misi" class="form-control" value=""><?php echo $prf->misi ?></textarea>
                  <small><font color="red"><i><?php echo form_error('misi'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Letak</label>
                  <textarea name="letak" class="form-control" value=""><?php echo $prf->letak ?></textarea>
                  <small><font color="red"><i><?php echo form_error('letak'); ?></i></font></small>
                </div><div class="form-group">
                  <label>Gambar</label>   <br>
                  &nbsp;&nbsp;&nbsp;<img src="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->gambar ?>" width="100" height="120"><br> 
                  <input type="hidden" name="gambar2" class="form-control"  value="<?= $prf->gambar ?>" >
                  <input type="file" name="gambar" class="form-control" value="<?php echo $prf->gambar ?>">
                  <!-- <td><?php echo anchor('profil/edit_gambar_profil/'.$prf->id, '<div class="btn btn-success btn-sm"><i class="fa fa-edit"></i></div>') ?></td> -->
                </div>
                <div class="form-group">
                  <label>Logo</label>         <br>
                  &nbsp;&nbsp;&nbsp;<img src="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>" width="100" height="120"><br>
                  <input type="hidden" name="logo2" class="form-control"  value="<?= $prf->logo ?>" >
                  <input type="file" name="logo" class="form-control" value="<?php echo $prf->logo ?>">
                  <!-- <td><?php echo anchor('profil/edit_gambar_profil/'.$prf->id, '<div class="btn btn-success btn-sm"><i class="fa fa-edit"></i></div>') ?></td> -->
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kelurahan</label>
                  <input type="text" name="kelurahan" class="form-control" value="<?php echo $prf->kelurahan ?>"></input>
                  <!-- <textarea name="kelurahan" class="form-control" value=""><?php echo $prf->kelurahan ?></textarea> -->
                  <small><font color="red"><i><?php echo form_error('kelurahan'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Kode Kelurahan</label>
                  <input type="text" name="kode_kelurahan" class="form-control" value="<?php echo $prf->kode_kelurahan ?>"></input>
                  <!-- <textarea name="kode_kelurahan" class="form-control" value=""><?php echo $prf->kode_kelurahan ?></textarea> -->
                  <small><font color="red"><i><?php echo form_error('kode_kelurahan'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Kecamatan</label>
                  <input type="text" name="kecamatan" class="form-control" value="<?php echo $prf->kecamatan ?>"></input>
                  <!-- <textarea name="kecamatan" class="form-control" value=""><?php echo $prf->kecamatan ?></textarea> -->
                  <small><font color="red"><i><?php echo form_error('kecamatan'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Kode Kecamatan</label>
                  <input type="text" name="kode_kecamatan" class="form-control" value="<?php echo $prf->kode_kecamatan ?>"></input>
                  <!-- <textarea name="kode_kecamatan" class="form-control" value=""><?php echo $prf->kode_kecamatan ?></textarea> -->
                  <small><font color="red"><i><?php echo form_error('kode_kecamatan'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Kabupaten</label>
                  <input type="text" name="kabupaten" class="form-control" value="<?php echo $prf->kabupaten ?>"></input>
                  <!-- <textarea name="kabupaten" class="form-control" value=""><?php echo $prf->kabupaten ?></textarea> -->
                  <small><font color="red"><i><?php echo form_error('kabupaten'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Kode Kabupaten</label>
                  <input type="text" name="kode_kabupaten" class="form-control" value="<?php echo $prf->kode_kabupaten ?>"></input>
                  <!-- <textarea name="kode_kabupaten" class="form-control" value=""><?php echo $prf->kode_kabupaten ?></textarea> -->
                  <small><font color="red"><i><?php echo form_error('kode_kabupaten'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Provinsi</label>
                  <input type="text" name="provinsi" class="form-control" value="<?php echo $prf->provinsi ?>"></input>
                  <!-- <textarea name="provinsi" class="form-control" value=""><?php echo $prf->provinsi ?></textarea> -->
                  <small><font color="red"><i><?php echo form_error('provinsi'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Kode Provinsi</label>
                  <input type="text" name="kode_provinsi" class="form-control" value="<?php echo $prf->kode_provinsi ?>"></input>
                  <!-- <textarea name="kode_provinsi" class="form-control" value=""><?php echo $prf->kode_provinsi ?></textarea> -->
                  <small><font color="red"><i><?php echo form_error('kode_provinsi'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Kode Wilayah</label>
                  <input type="text" name="kode_wilayah" class="form-control" value="<?php echo $prf->kode_wilayah ?>"></input>
                  <!-- <textarea name="kode_wilayah" class="form-control" value=""><?php echo $prf->kode_wilayah ?></textarea> -->
                  <small><font color="red"><i><?php echo form_error('kode_wilayah'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Kode Pos</label>
                  <input type="text" name="kode_pos" class="form-control" value="<?php echo $prf->kode_pos ?>"></input>
                  <!-- <textarea name="kode_pos" class="form-control" value=""><?php echo $prf->kode_pos ?></textarea> -->
                  <small><font color="red"><i><?php echo form_error('kode_pos'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input type="text" name="telepon" class="form-control" value="<?php echo $prf->telepon ?>"></input>
                  <!-- <textarea name="telepon" class="form-control" value=""><?php echo $prf->telepon ?></textarea> -->
                  <small><font color="red"><i><?php echo form_error('telepon'); ?></i></font></small>
                </div>
                
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>              
        <!-- /.col-->
      		  </div>
      			<a href="<?php echo base_url('profil/index'); ?>" class="btn btn-info">Kembali</a>
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
		<?php foreach ($profil as $prf){ ?>
			<?php echo form_open_multipart('profil/update_profil'); ?>
				<div> 
					<label>ID</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $prf->id ?>">
					<input type="text" name="id" disabled class="form-control" value="<?php echo $prf->id ?>">
				</div>
				<div> 
					<label>Profil Desa</label>
					<input type="text" name="tentang" class="form-control" value="<?php echo $prf->tentang ?>">
				</div>
				<div> 
					<label>Visi</label>
					<input type="text" name="visi" class="form-control" value="<?php echo $prf->visi ?>">
				</div>
				<div> 
					<label>Misi</label>
					<input type="text" name="misi" class="form-control" value="<?php echo $prf->misi ?>">
				</div>
				<div> 
					<label>Letak</label>
					<input type="text" name="letak" class="form-control" value="<?php echo $prf->letak ?>">
				</div>
				<div> 
					<label>Gambar</label>					
					<img src="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->gambar ?>" width="90" height="110">
					<td><?php echo anchor('profil/edit_gambar_profil/'.$prf->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td> -->
					<!-- <input type="hidden" name="gambar2" class="form-control"  value="<?= $prf->gambar ?>" >
					<input type="file" name="gambar" class="form-control" value="<?php echo $prf->gambar ?>"> -->
				<!-- </div>
				<div> 
					<label>Logo</label>					
					<img src="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->logo ?>" width="90" height="110">
					<td><?php echo anchor('profil/edit_gambar_profil/'.$prf->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td> -->
					<!-- <input type="hidden" name="gambar2" class="form-control"  value="<?= $prf->gambar ?>" >
					<input type="file" name="gambar" class="form-control" value="<?php echo $prf->gambar ?>"> -->
				<!-- </div>


				<a href="<?php echo base_url('profil/index'); ?>" class="btn btn-info">Kembali</a>
				<button type="reset" class="btn btn-warning">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>


			<?php echo form_close(); ?></form>
		<?php } ?>
	</section>
	
</div> -->