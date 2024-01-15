<div class="content-wrapper">
	<section id="career" class="container">
		<?php if ($this->session->flashdata('success') == TRUE) : ?>
					<div class="alert alert-success">
						<span><?= $this->session->flashdata('success'); ?></span>
					</div>
				<?php endif; ?>
  	<!-- <a href="<?php echo base_url('kelahiran/index'); ?>" class="close" aria-label="close">&times;</a> -->
	<!-- <form action="<?php echo base_url().'kelahiran/tambah_aksi'; ?>" method="post"> -->
		<!-- <?php echo validation_errors(); ?> -->
    <font color="red" size="2"><i><?php echo validation_errors(); ?></i></font>
		<?php echo form_open_multipart('kelahiran/tambah_aksi'); ?>
    
    
    <hr>

    <div class="row-fluid">
      <!-- Left Column -->
      <div class="span6">
        <h4>NO KK</h4>
        <p><input type="text" name="no_kk" value="<?= set_value('no_kk') ?>" class="form-control" ></p>
        <!-- <?php echo form_error('no_kk', '<div class="text-danger small ml-3">', '</div>') ?> -->
        <hr color="black" size="3">
        <h5>Nama</h5>
        <p><input type="text" name="nama_bayi" value="<?= set_value('nama_bayi') ?>" class="form-control" ></p>
        <h5>Jenis Kelamin</h5>
        <p><select class="form-control" name="jenis_kelamin_bayi" value="<?= set_value('jenis_kelamin_bayi') ?>">
			  	<option value="">-- Pilih --</option>    
			  	<option value="Laki-Laki">Laki-Laki</option>    
			    <option value="Perempuan">Perempuan</option>  
				</select></p>
        <h5>Tempat Dilahirkan</h5>
        <p><input type="text" name="tempat_dilahirkan" value="<?= set_value('tempat_dilahirkan') ?>" class="form-control" ></p>
        <h5>Nomor / Tempat Kelahiran</h5>
        <p><input type="text" name="nomor_tempat_kelahiran" value="<?= set_value('nomor_tempat_kelahiran') ?>" class="form-control" ></p>
        <h5>Hari dan Tanggal Lahir</h5>
        <p><input type="text" name="hari_tanggal_lahir" value="<?= set_value('hari_tanggal_lahir') ?>" class="form-control" ></p>
        <h5>Pukul</h5>
        <p><input type="time" name="pukul" value="<?= set_value('pukul') ?>" class="form-control" ></p>
       <hr color="black" size="3">
       	<!-- <h5>NIK Ibu</h5>
        <p><input type="text" name="nik_ibu" class="form-control"></p>
        <h5>Nama Lengkap Ibu</h5>
        <p><input type="text" name="nama_ibu" class="form-control"></p>
        <h5>Tanggal Lahir/Umur Ibu</h5>
        <p><input type="text" name="tanggal_lahir_umur_ibu" class="form-control"></p>
        <h5>Pekerjaan Ibu</h5>
        <p><input type="text" name="pekerjaan_ibu" class="form-control"></p>
        <h5>Alamat Ibu</h5>
        <p><input type="text" name="alamat_ibu" class="form-control"></p>
        <h5>Kewargnageraan Ibu</h5>
        <p><input type="text" name="kewarganegaraan_ibu" class="form-control"></p>
        <h5>Kebangsaan Ibu</h5>
        <p><input type="text" name="kebangsaan_ibu" class="form-control"></p>
        <h5>Tanggal Pencatatan Perkawinan</h5>
        <p><input type="date" name="tanggal_perkawinan" class="form-control"></p> -->
       <!-- <hr color="black" size="3"> -->
       	<h5>NIK Pelapor</h5>
        <p><input type="text" name="nik_pelapor" value="<?= set_value('nik_pelapor') ?>" class="form-control" ></p>        
        <!-- <h5>Tanda Tangan Pelapor</h5>
        <p><input type="file" name="ttd_pelapor" class="form-control"></p> -->
        <!-- <h5>Nama Lengkap pelapor</h5>
        <p><input type="text" name="nama_pelapor" class="form-control"></p> -->
        <!-- <h5>Jenis Kelamin Pelapor</h5>
        <p><select class="form-control" name="jenis_kelamin_pelapor">
			            <option>Lk</option>    
			            <option>Pr</option>  
		</select></p> -->
       <!-- <hr color="black" size="3"> -->



       
       <!-- <h5>Nama Lengkap Saksi 1</h5>
       <p><input type="text" name="nama_saksi_satu" class="form-control"></p> -->
       <!-- <h5>Umur Saksi 1</h5>
       <p><input type="text" name="umur_saksi_satu" class="form-control" ></p> -->
       <!-- <h5>Jenis Kelamin Saksi 1</h5>
       <p><select class="form-control" name="jenis_kelamin_saksi_satu">
			            <option>Lk</option>    
			            <option>Pr</option>  
			 </select></p>
       <h5>Pekerjaan Saksi 1</h5>
       <p><input type="text" name="pekerjaan_saksi_satu" class="form-control"></p>
       <h5>Alamat Saksi 1</h5>
       <p><input type="text" name="alamat_saksi_satu" class="form-control"></p> -->
       

     </div>
     <!-- /Left Column -->

     <!-- Right Column -->
     <div class="span6">
      <h4>Nama Kepala Keluarga</h4>
      <p><input type="text" name="nama_kepala" value="<?= set_value('nama_kepala') ?>" class="form-control" ></p>
      <hr color="black" size="3">
      <h5>Jenis Kelahiran</h5>
      <p><input type="text" name="jenis_kelahiran" value="<?= set_value('jenis_kelahiran') ?>" class="form-control" ></p>
      <h5>Kelahiran Ke-</h5>
      <p><input type="text" name="kelahiran_ke" value="<?= set_value('kelahiran_ke') ?>" class="form-control" ></p>
      <h5>Penolong Kelahiran</h5>
      <p><input type="text" name="penolong_kelahiran" value="<?= set_value('penolong_kelahiran') ?>" class="form-control" ></p>
      <h5>Berat Bayi</h5>
      <p><input type="text" name="berat_bayi" value="<?= set_value('berat_bayi') ?>" class="form-control" placeholder="contoh : 2.00"> Kg</p>
      <h5>Panjang Bayi</h5>
      <p><input type="text" name="panjang_bayi" value="<?= set_value('panjang_bayi') ?>" class="form-control" placeholder="contoh : 55.0"> Cm</p>
      <h5>Scan Kartu Keluarga <i>(.pdf)</i></h5>
      <p><input type="file" name="kk" value="<?= set_value('kk') ?>" class="form-control" required></p>
      <br><!-- <br><br><br> -->
     <hr color="black" size="3">
     	<!-- <h5>NIK ayah</h5>
        <p><input type="text" name="nik_ayah" class="form-control"></p>
        <h5>Nama Lengkap ayah</h5>
        <p><input type="text" name="nama_ayah" class="form-control"></p>
        <h5>Tanggal Lahir/Umur ayah</h5>
        <p><input type="text" name="tanggal_lahir_umur_ayah" class="form-control"></p>
        <h5>Pekerjaan ayah</h5>
        <p><input type="text" name="pekerjaan_ayah" class="form-control"></p>
        <h5>Alamat ayah</h5>
        <p><input type="text" name="alamat_ayah" class="form-control"></p>
        <h5>Kewargnageraan ayah</h5>
        <p><input type="text" name="kewarganegaraan_ayah" class="form-control"></p>
        <h5>Kebangsaan ayah</h5>
        <p><input type="text" name="kebangsaan_ayah" class="form-control"></p><br><br><br><br> -->
        
      <!-- <hr color="black" size="3"> -->
        <!-- <h5>Pekerjaan Pelapor</h5>
        <p><input type="text" name="pekerjaan_pelapor" class="form-control"></p>
        <h5>Alamat Pelapor</h5>
        <p><input type="text" name="alamat_pelapor" class="form-control"></p> -->
        <!-- <h5>Umur pelapor</h5>
        <p><input type="text" name="umur_pelapor" class="form-control" ></p> --><!-- <br><br><br> -->
       <!-- <hr color="black" size="3"> -->
       <h5>NIK Saksi 1</h5>
       <p><input type="text" name="nik_saksi_satu" value="<?= set_value('nik_saksi_satu') ?>" class="form-control" ></p>
     <h5>NIK Saksi 2</h5>
       <p><input type="text" name="nik_saksi_dua" value="<?= set_value('nik_saksi_dua') ?>" class="form-control" ></p>
       <!-- <h5>Nama Lengkap Saksi 2</h5>
       <p><input type="text" name="nama_saksi_dua" class="form-control"></p> -->
       <!-- <h5>Umur Saksi 2</h5>
       <p><input type="text" name="umur_saksi_dua" class="form-control" ></p> -->
       <!-- <h5>Jenis Kelamin Saksi 2</h5>
       <p><select class="form-control" name="jenis_kelamin_saksi_dua">
			            <option>Lk</option>    
			            <option>Pr</option>  
		            </select></p>
       <h5>Pekerjaan Saksi 2</h5>
       <p><input type="text" name="pekerjaan_saksi_dua" class="form-control"></p>
       <h5>Alamat Saksi 2</h5>
       <p><input type="text" name="alamat_saksi_dua" class="form-control"></p> -->
       

   </div>
   <!-- /Right Column -->

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
			<a href="<?php echo base_url('kelahiran/index'); ?>" class="close" aria-label="close">&times;</a>
			<form action="<?php echo base_url().'kelahiran/tambah_aksi'; ?>" method="post">
				<div> 
					<label>Pemerintah Desa/Kelurahan</label>
					<input type="text" name="pemdes" class="form-control">
				</div>
				<div> 
					<label>Kecamatan</label>
					<input type="text" name="kecamatan" class="form-control">
				</div>
				<div> 
					<label>Nama Kepala Keluarga</label>
					<input type="text" name="kepala_keluarga" class="form-control">
				</div>
				<div> 
					<label>No Kartu Keluarga</label>
					<input type="text" name="no_kk" class="form-control">
				</div>
				<div> 
					<label>Jenis Kelamin</label>
					<select class="form-control" name="jenis_kelamin">
			            <option>Lk</option>    
			            <option>Pr</option>  
		            </select>
				</div> 
				<div> 
					<label>Tempat Dilahirkan</label>
					<input type="text" name="tempat_dilahirkan" class="form-control">
				</div>
				<div> 
					<label>Nomor/Tempat Kelahiran</label>
					<input type="text" name="tempat_kelahiran" class="form-control">
				</div>
				<div> 
					<label>Hari dan Tanggal Lahir</label>
					<input type="text" name="hari_dan_tl" class="form-control">
				</div>
				<div> 
					<label>Pukul</label>
					<input type="text" name="pukul" class="form-control">
				</div>
				<div> 
					<label>Jenis Kelahiran</label>
					<input type="text" name="jenis_kelahiran" class="form-control">
				</div>
				<div> 
					<label>Kelahiran Ke-</label>
					<input type="text" name="kelahiran_ke" class="form-control">
				</div>
				<div> 
					<label>Penolong Kelahiran</label>
					<input type="text" name="penolong_kelahiran" class="form-control">
				</div>
				<div> 
					<label>Berat Bayi</label>
					<input type="text" name="berat_bayi" class="form-control">
				</div>
				<div> 
					<label>Panjang Bayi</label>
					<input type="text" name="panjang_bayi" class="form-control">
				</div>
				<div> 
					<label>NIK</label>
					<input type="text" name="nik_ibu" class="form-control">
				</div>
				<div> 
					<label>Nama Lengkap</label>
					<input type="text" name="nama_ibu" class="form-control">
				</div>
				<div> 
					<label>Tanggal Lahir/Umur</label>
					<input type="text" name="tgllahir_umur_ibu" class="form-control">
				</div>
				<div> 
					<label>Pekerjaan</label>
					<input type="text" name="pekerjaan_ibu" class="form-control">
				</div>
				<div> 
					<label>Alamat</label>
					<input type="text" name="alamat_ibu" class="form-control">
				</div>
				<div> 
					<label>Kewarganegaraan</label>
					<input type="text" name="kewarganegaraan_ibu" class="form-control">
				</div>
				<div> 
					<label>Kebangsaan</label>
					<input type="text" name="kebangsaan_ibu" class="form-control">
				</div>
				<div> 
					<label>Tgl. Pencatatan Perkawinan</label>
					<input type="text" name="tanggal_perkawinan" class="form-control">
				</div>
				<div> 
					<label>NIK</label>
					<input type="text" name="nik_ayah" class="form-control">
				</div>
				<div> 
					<label>Nama Lengkap</label>
					<input type="text" name="nama_ayah" class="form-control">
				</div>
				<div> 
					<label>Tanggal Lahir/Umur</label>
					<input type="text" name="tgllahir_umur_ayah" class="form-control">
				</div>
				<div> 
					<label>Pekerjaan</label>
					<input type="text" name="pekerjaan_ayah" class="form-control">
				</div>
				<div> 
					<label>Alamat</label>
					<input type="text" name="alamat_ayah" class="form-control">
				</div>
				<div> 
					<label>Kewarganegaraan</label>
					<input type="text" name="kewarganegaraan_ayah" class="form-control">
				</div>
				<div> 
					<label>Kebangsaan</label>
					<input type="text" name="kebangsaan_ayah" class="form-control">
				</div>
				<div> 
					<label>NIK</label>
					<input type="text" name="nik_pelapor" class="form-control">
				</div>
				<div> 
					<label>Nama Lengkap</label>
					<input type="text" name="nama_pelapor" class="form-control">
				</div>
				<div> 
					<label>Umur</label>
					<input type="text" name="umur_pelapor" class="form-control">
				</div>
				<div> 
					<label>Jenis Kelamin</label>
					<select class="form-control" name="jenis_kelamin_pelapor">
			            <option>Lk</option>    
			            <option>Pr</option>  
		            </select>
				</div> 
				<div> 
					<label>Pekerjaan</label>
					<input type="text" name="pekerjaan_pelapor" class="form-control">
				</div>
				<div> 
					<label>Alamat</label>
					<input type="text" name="alamat_pelapor" class="form-control">
				</div>
				<div> 
					<label>NIK</label>
					<input type="text" name="nik_saksi_satu" class="form-control">
				</div>
				<div> 
					<label>Nama Lengkap</label>
					<input type="text" name="nama_saksi_satu" class="form-control">
				</div>
				<div> 
					<label>Umur</label>
					<input type="text" name="umur_saksi_satu" class="form-control">
				</div>
				<div> 
					<label>Jenis Kelamin</label>
					<select class="form-control" name="jenis_kelamin_saksi_satu">
			            <option>Lk</option>    
			            <option>Pr</option>  
		            </select>
				</div> 
				<div> 
					<label>Pekerjaan</label>
					<input type="text" name="pekerjaan_saksi_satu" class="form-control">
				</div>
				<div> 
					<label>Alamat</label>
					<input type="text" name="alamat_saksi_satu" class="form-control">
				</div>
				<div> 
					<label>NIK</label>
					<input type="text" name="nik_saksi_dua" class="form-control">
				</div>
				<div> 
					<label>Nama Lengkap</label>
					<input type="text" name="nama_saksi_dua" class="form-control">
				</div>
				<div> 
					<label>Umur</label>
					<input type="text" name="umur_saksi_dua" class="form-control">
				</div>
				<div> 
					<label>Jenis Kelamin</label>
					<select class="form-control" name="jenis_kelamin_saksi_dua">
			            <option>Lk</option>    
			            <option>Pr</option>  
		            </select>
				</div> 
				<div> 
					<label>Pekerjaan</label>
					<input type="text" name="pekerjaan_saksi_dua" class="form-control">
				</div>
				<div> 
					<label>Alamat</label>
					<input type="text" name="alamat_saksi_dua" class="form-control">
				</div>


				<a href="<?php echo base_url('home_surat/index'); ?>" class="btn btn-info">Kembali</a>
				<button type="reset" class="btn btn-warning">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>


			</form>
	</section>
	
</div> -->