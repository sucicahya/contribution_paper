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
      <div class="container-fluid">
        <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              	<div class="form-group">
                 	<label>ID</label>
                 	<input type="hidden" name="id" class="form-control" value="<?php echo $detail_profil->id ?>">
					        <input type="text" name="id" disabled class="form-control" value="<?php echo $detail_profil->id ?>">
                </div>
                <div class="form-group">
                  <label>Profil Desa</label>
                  <textarea name="tentang" disabled class="form-control" value=""><?php echo $detail_profil->tentang ?></textarea>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Visi</label>
                  <textarea name="visi" disabled class="form-control" value=""><?php echo $detail_profil->visi ?></textarea>
                </div>
                <div class="form-group">
                  <label>Misi</label>
                  <textarea name="misi" disabled class="form-control" value=""><?php echo $detail_profil->misi ?></textarea>
                </div>
                <div class="form-group">
                  <label>Letak</label>
                  <textarea name="letak" disabled class="form-control" value=""><?php echo $detail_profil->letak ?></textarea>
                </div>
                <div class="form-group">
                  <label>Gambar</label>   <br>
                  &nbsp;&nbsp;&nbsp;<img src="<?php echo base_url(); ?>assets/gambar/<?php echo $detail_profil->gambar ?>" width="100" height="120"><br> 
                </div>
                <div class="form-group">
                  <label>Logo</label>         <br>
                  &nbsp;&nbsp;&nbsp;<img src="<?php echo base_url(); ?>assets/gambar/<?php echo $detail_profil->logo ?>" width="100" height="120"><br>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kelurahan</label>
                  <input type="text" name="kelurahan" disabled class="form-control" value="<?php echo $detail_profil->kelurahan ?>"></input>
                </div>
                <div class="form-group">
                  <label>Kode Kelurahan</label>
                  <input type="text" name="kode_kelurahan" disabled class="form-control" value="<?php echo $detail_profil->kode_kelurahan ?>"></input>
                </div>
                <div class="form-group">
                  <label>Kecamatan</label>
                  <input type="text" name="kecamatan" disabled class="form-control" value="<?php echo $detail_profil->kecamatan ?>"></input>
                </div>
                <div class="form-group">
                  <label>Kode Kecamatan</label>
                  <input type="text" name="kode_kecamatan" disabled class="form-control" value="<?php echo $detail_profil->kode_kecamatan ?>"></input>
                </div>
                <div class="form-group">
                  <label>Kabupaten</label>
                  <input type="text" name="kabupaten" disabled class="form-control" value="<?php echo $detail_profil->kabupaten ?>"></input>
                </div>
                <div class="form-group">
                  <label>Kode Kabupaten</label>
                  <input type="text" name="kode_kabupaten" disabled class="form-control" value="<?php echo $detail_profil->kode_kabupaten ?>"></input>
                </div>
                <div class="form-group">
                  <label>Provinsi</label>
                  <input type="text" name="provinsi" disabled class="form-control" value="<?php echo $detail_profil->provinsi ?>"></input>
                </div>
                <div class="form-group">
                  <label>Kode Provinsi</label>
                  <input type="text" name="kode_provinsi" disabled class="form-control" value="<?php echo $detail_profil->kode_provinsi ?>"></input>
                </div>
                <div class="form-group">
                  <label>Kode Wilayah</label>
                  <input type="text" name="kode_wilayah" disabled class="form-control" value="<?php echo $detail_profil->kode_wilayah ?>"></input>
                </div>
                <div class="form-group">
                  <label>Kode Pos</label>
                  <input type="text" name="kode_pos" disabled class="form-control" value="<?php echo $detail_profil->kode_pos ?>"></input>
                </div>
                <div class="form-group">
                  <label>Telepon</label>
                  <input type="text" name="telepon" disabled class="form-control" value="<?php echo $detail_profil->telepon ?>"></input>
                </div>
                
                <!-- /.form-group -->
                
                <!-- /.form-group -->
              </div>              
        <!-- /.col-->
      		  </div>
      			<a href="<?php echo base_url('profil/index'); ?>" class="btn btn-info">Kembali</a>
            <td><?php echo anchor('profil/edit_profil/'. $detail_profil->id, '<div class="btn btn-primary">Edit</div>') ?></td>
          </div>
          <!-- /.card-body -->
          
        </div>
        <!-- /.card -->
      </div>
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