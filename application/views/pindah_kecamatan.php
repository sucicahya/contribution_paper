<div class="content-wrapper">
	<section id="career" class="container">
		<?php if ($this->session->flashdata('success') == TRUE) : ?>
					<div class="alert alert-success">
						<span><?= $this->session->flashdata('success'); ?></span>
					</div>
				<?php endif; ?>
  	<!-- <a href="<?php echo base_url('pindah_kecamatan/index'); ?>" class="close" aria-label="close">&times;</a> -->
	<!-- <form action="<?php echo base_url().'pindah_kecamatan/tambah_aksi'; ?>" method="post"> -->
    <!-- <?php echo validation_errors(); ?> -->
    <font color="red" size="2"><i><?php echo validation_errors(); ?></i></font>
		<?php echo form_open_multipart('pindah_kecamatan/tambah_aksi'); ?>
    
    
    <hr>

    <div class="row-fluid">
    	<?php 
          foreach ($pindah_kecamatan as $pk) :
        ?>
      <!-- Left Column -->
      <div class="span6">
        <h4>NIK</h4>
        <p><input type="text" name="nik" value="<?= set_value('nik') ?>" class="form-control"></p>
       <hr color="black" size="3">
       <!-- <h5>Dusun</h5>
       <p><input type="text" name="dusun_asal" class="form-control"></p>
       <h5>RT</h5>
       <p><input type="text" name="rt_asal" class="form-control"></p>
       <h5>RW</h5>
       <p><input type="text" name="rw_asal" class="form-control"></p>
       <h5>kelurahan</h5>
       <p><input type="text" name="kelurahan_asal" class="form-control" value="<?php echo $pk->kelurahan ?>"/></p>
       <h5>kecamatan</h5>
       <p><input type="text" name="kecamatan_asal" class="form-control" value="<?php echo $pk->kecamatan ?>"/></p>
       <h5>kabupaten</h5>
       <p><input type="text" name="kabupaten_asal" class="form-control" value="<?php echo $pk->kabupaten ?>"/></p>
       <h5>provinsi</h5>
       <p><input type="text" name="provinsi_asal" class="form-control" value="<?php echo $pk->provinsi ?>"/></p>
       <h5>kode_pos</h5>
       <p><input type="text" name="kode_pos_asal" class="form-control" value="<?php echo $pk->kode_pos ?>"/></p>
       <h5>telepon</h5>
       <p><input type="text" name="telepon_asal" class="form-control" value="<?php echo $pk->telepon ?>"/></p> -->
       <h5>Alasan</h5>
       <p><input type="text" name="alasan_pindah" value="<?= set_value('alasan_pindah') ?>" class="form-control"></p>
       <h5>Dusun Tujuan</h5>
       <p><input type="text" name="dusun_tujuan" value="<?= set_value('dusun_tujuan') ?>" class="form-control"></p>
       <h5>RT Tujuan</h5>
       <p><input type="text" name="rt_tujuan" value="<?= set_value('rt_tujuan') ?>" class="form-control"></p>
       <h5>RW Tujuan</h5>
       <p><input type="text" name="rw_tujuan" value="<?= set_value('rw_tujuan') ?>" class="form-control"></p>
       <h5>Kelurahan Tujuan</h5>
       <p><input type="text" name="kelurahan_tujuan" value="<?= set_value('kelurahan_tujuan') ?>" class="form-control"></p>
       <h5>Kecamatan Tujuan</h5>
       <p><input type="text" name="kecamatan_tujuan" value="<?= set_value('kecamatan_tujuan') ?>" class="form-control"></p>
       <h5>Kabupaten</h5>
       <p><input type="text" name="kabupaten_tujuan" class="form-control" value="<?php echo $pk->kabupaten ?>"/></p>
     <hr color="black" size="3">
       <!-- <h5>NIK Pindah 1</h5>
       <p><input type="text" name="nik_satu" value="<?= set_value('nik_satu') ?>" class="form-control"></p>
       <h5>NIK Pindah 2</h5>
       <p><input type="text" name="nik_dua" value="<?= set_value('nik_dua') ?>" class="form-control"></p>
       <h5>NIK Pindah 3</h5>
       <p><input type="text" name="nik_tiga" value="<?= set_value('nik_tiga') ?>" class="form-control"></p> -->  
     </div>
     <!-- /Left Column -->

     <!-- Right Column -->
     <div class="span6">
      <h4>Nama Kepala</h4>
      <p><input type="text" name="nama_kepala" value="<?= set_value('nama_kepala') ?>" class="form-control"></p>
      <hr color="black" size="3">
       <h5>Provinsi</h5>
       <p><input type="text" name="provinsi_tujuan" class="form-control" value="<?php echo $pk->provinsi ?>"/></p>
       <h5>Kode Pos Tujuan</h5>
       <p><input type="text" name="kode_pos_tujuan" value="<?= set_value('kode_pos_tujuan') ?>" class="form-control"></p>
       <h5>Telepon Tujuan</h5>
       <p><input type="text" name="telepon_tujuan" value="<?= set_value('telepon_tujuan') ?>" class="form-control"></p>
       <h5>Jenis Kepindahan</h5>
       <p><input type="text" name="jenis_kepindahan" value="<?= set_value('jenis_kepindahan') ?>" class="form-control"></p>
       <h5>Status KK Pindah</h5>
       <p><input type="text" name="status_kk_pindah" value="<?= set_value('status_kk_pindah') ?>" class="form-control"></p>
       <h5>Status KK Tidak Pindah</h5>
       <p><input type="text" name="status_kk_tidak" value="<?= set_value('status_kk_tidak') ?>" class="form-control"></p><br><br><br><br><!-- 
        <h5>Tanda Tangan</h5>
       <p><input type="file" name="ttd" class="form-control"></p><br><br><br><br><br><br> -->
     <hr color="black" size="3">
       <!-- <h5>NIK Pindah 4</h5>
       <p><input type="text" name="nik_empat" value="<?= set_value('nik_empat') ?>" class="form-control"></p>
       <h5>NIK Pindah 5</h5>
       <p><input type="text" name="nik_lima" value="<?= set_value('nik_lima') ?>" class="form-control"></p>
       <h5>NIK Pindah 6</h5>
       <p><input type="text" name="nik_enam" value="<?= set_value('nik_enam') ?>" class="form-control"></p> -->
   </div>
   <!-- /Right Column -->
   <table class="table table-bordered" id="tableLoop">
     <thead>
       <tr>
         <!-- <th class="text-center">#</th> -->
         <th>NIK</th>
         <th><button class="btn btn-success btn-block" id="BarisBaru"><i class="fa fa-plus"></i> Baris Baru</button></th>
       </tr>
     </thead>
     <tbody></tbody>
   </table>
   <?php endforeach; ?>

 </div>
 <p>&nbsp;</p>


				<a href="<?php echo base_url('home_surat/index'); ?>" class="btn btn-info">Kembali</a>
				<button type="reset" class="btn btn-warning">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>


			<!-- </form> -->
      <?php echo form_close(); ?><br><br><br><br>
	</section>
	
</div>




<!-- <div class="content-wrapper">
	<section class="content">
			<a href="<?php echo base_url('pindah_kecamatan/index'); ?>" class="close" aria-label="close">&times;</a>
			<form action="<?php echo base_url().'pindah_kecamatan/tambah_aksi'; ?>" method="post">
				<div> 
					<label>Dusun</label>
					<input type="text" name="dusun" class="form-control">
				</div>
				<div> 
					<label>Nomor</label>
					<input type="text" name="nomor" class="form-control">
				</div>
				<div> 
					<label>No Kartu Keluarga</label>
					<input type="text" name="no_kk" class="form-control">
				</div>
				<div> 
					<label>Nama Kepala Keluarga</label>
					<input type="text" name="kepala_keluarga" class="form-control">
				</div>
				<div> 
					<label>Alamat</label>
					<input type="text" name="alamat" class="form-control">
				</div>
				<div> 
					<label>RT</label>
					<input type="text" name="rt" class="form-control">
				</div>
				<div> 
					<label>RW</label>
					<input type="text" name="rw" class="form-control">
				</div>
				<div> 
					<label>Kode Pos</label>
					<input type="text" name="kode_pos" class="form-control">
				</div>
				<div> 
					<label>Telepon</label>
					<input type="text" name="telepon" class="form-control">
				</div>
				<div> 
					<label>NIK</label>
					<input type="text" name="nik" class="form-control">
				</div>
				<div> 
					<label>Nama</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<div> 
					<label>Alasan</label>
					<input type="text" name="alasan" class="form-control">
				</div>
				<div> 
					<label>Alamat Tujuan</label>
					<input type="text" name="alamat_tujuan" class="form-control">
				</div>
				<div> 
					<label>RT Tujuan</label>
					<input type="text" name="rt_tujuan" class="form-control">
				</div>
				<div> 
					<label>RW Tujuan</label>
					<input type="text" name="rw_tujuan" class="form-control">
				</div>
				<div> 
					<label>Desa Tujuan</label>
					<input type="text" name="desa_tujuan" class="form-control">
				</div>
				<div> 
					<label>Kecamatan Tujuan</label>
					<input type="text" name="kecamatan_tujuan" class="form-control">
				</div>
				<div> 
					<label>Kota Tujuan</label>
					<input type="text" name="kota_tujuan" class="form-control">
				</div>
				<div> 
					<label>Provinsi Tujuan</label>
					<input type="text" name="provinsi_tujuan" class="form-control">
				</div>
				<div> 
					<label>Kode Pos Tujuan</label>
					<input type="text" name="kode_pos_tujuan" class="form-control">
				</div>
				<div> 
					<label>Telepon Tujuan</label>
					<input type="text" name="telepon_tujuan" class="form-control">
				</div>
				<div> 
					<label>Jenis Kepindahan</label>
					<input type="text" name="jenis_kepindahan" class="form-control">
				</div>
				<div> 
					<label>Status KK Tidak Pindah</label>
					<input type="text" name="status_kk_tidak" class="form-control">
				</div>
				<div> 
					<label>Status KK Pindah</label>
					<input type="text" name="status_kk_pindah" class="form-control">
				</div>
				<div> 
					<label>NIK 1</label>
					<input type="text" name="nik_pindah_satu" class="form-control">
				</div>
				<div> 
					<label>NIK 2</label>
					<input type="text" name="nik_pindah_dua" class="form-control">
				</div>
				<div> 
					<label>NIK 3</label>
					<input type="text" name="nik_pindah_tiga" class="form-control">
				</div>
				<div> 
					<label>NIK 4</label>
					<input type="text" name="nik_pindah_empat" class="form-control">
				</div>
				<div> 
					<label>NIK 5</label>
					<input type="text" name="nik_pindah_lima" class="form-control">
				</div>
				<div> 
					<label>NIK 6</label>
					<input type="text" name="nik_pindah_enam" class="form-control">
				</div>
				<div> 
					<label>nama 1</label>
					<input type="text" name="nama_pindah_satu" class="form-control">
				</div>
				<div> 
					<label>nama 2</label>
					<input type="text" name="nama_pindah_dua" class="form-control">
				</div>
				<div> 
					<label>nama 3</label>
					<input type="text" name="nama_pindah_tiga" class="form-control">
				</div>
				<div> 
					<label>nama 4</label>
					<input type="text" name="nama_pindah_empat" class="form-control">
				</div>
				<div> 
					<label>nama 5</label>
					<input type="text" name="nama_pindah_lima" class="form-control">
				</div>
				<div> 
					<label>nama 6</label>
					<input type="text" name="nama_pindah_enam" class="form-control">
				</div>
				<div> 
					<label>TTD Petugas</label>
					<input type="text" name="ttd_petugas" class="form-control">
				</div>
				<div> 
					<label>Nama Petugas</label>
					<input type="text" name="nama_petugas" class="form-control">
				</div>
				<div> 
					<label>TTD</label>
					<input type="text" name="ttd" class="form-control">
				</div>


				<a href="<?php echo base_url('home_surat/index'); ?>" class="btn btn-info">Kembali</a>
				<button type="reset" class="btn btn-warning">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>


			</form>
	</section>
	
</div> -->