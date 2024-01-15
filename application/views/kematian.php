<div class="content-wrapper">
	<section id="career" class="container">
		<?php if ($this->session->flashdata('success') == TRUE) : ?>
					<div class="alert alert-success">
						<span><?= $this->session->flashdata('success'); ?></span>
					</div>
				<?php endif; ?>
  	<!-- <a href="<?php echo base_url('kematian/index'); ?>" class="close" aria-label="close">&times;</a> -->
	<!-- <form action="<?php echo base_url().'kematian/tambah_aksi'; ?>" method="post"> -->
		<!-- <?php echo validation_errors(); ?> -->
    <font color="red" size="2"><i><?php echo validation_errors(); ?></i></font>
		<?php echo form_open_multipart('kematian/tambah_aksi'); ?>
    
    
    <hr>

    <div class="row-fluid">
      <!-- Left Column -->
      <div class="span6">
        <h5>Nama Kepala</h5>
        <p><input type="text" name="nama_kepala" value="<?= set_value('nama_kepala') ?>" class="form-control"></p>
        <h5>NIK</h5>
        <p><input type="text" name="nik_jenazah" value="<?= set_value('nik_jenazah') ?>" class="form-control"></p>
        <!-- <h5>Nama</h5>
        <p><input type="text" name="nama_jenazah" class="form-control"></p>
        <h5>Jenis Kelamin</h5>
        <p><select class="form-control" name="jenis_kelamin_jenazah">
			            <option>Lk</option>    
			            <option>Pr</option>  
		        </select></p> -->
        <!-- <h5>Tanggal Lahir/Umur</h5>
        <p><input type="text" name="umur_jenazah" class="form-control"></p> -->
      <h5>Tempat Mati</h5>
      <p><input type="text" name="tempat_mati" value="<?= set_value('tempat_mati') ?>"  class="form-control"></p>
      <h5>Tanggal Kematian</h5>
      <p><input type="date" name="tanggal_kematian" value="<?= set_value('tanggal_kematian') ?>"  class="form-control"></p>
      <h5>Pukul</h5>
      <p><input type="time" name="pukul" value="<?= set_value('pukul') ?>"  class="form-control"></p>
        <!-- <h5>Tempat Lahir</h5>
        <p><input type="text" name="tempat_lahir_jenazah" class="form-control"></p>
        <h5>Agama</h5>
        <p><select class="form-control" name="agama_jenazah">
			            <option>Islam</option>    
			            <option>Kristen</option>  
			            <option>Katolik</option>    
			            <option>Konghucu</option>  
			            <option>Hindu</option>    
			            <option>Budha</option>  
		            </select></p>
        <h5>Pekerjaan</h5>
        <p><input type="text" name="pekerjaan_jenazah" class="form-control"></p> -->
        <!-- <h5>Tanggal Lahir/Umur</h5>
        <p><input type="text" name="tanggal_lahir_umur" class="form-control"></p> -->
       	<!-- <h5>Tempat Lahir</h5>
        <p><input type="text" name="tempat_lahir" class="form-control"></p> -->
        <!-- <h5>Tempat Mati</h5>
        <p><input type="text" name="tempat_mati" class="form-control"></p>
	      <h5>Tanggal Kematian</h5>
	      <p><input type="date" name="tanggal_kematian" class="form-control"></p> -->
        <!-- <hr color="black" size="3">
        <h5>Scan KTP Orang Tua</h5>
        <p><input type="file" name="ktp_ortu" class="form-control"></p> -->
        <!-- <h5>NIK Ayah</h5>
       	<p><input type="text" name="nik_ayah" class="form-control"></p>
 	      <h5>Nama Lengkap Ayah</h5>
        <p><input type="text" name="nama_ayah" class="form-control"></p>
        <h5>Tanggal Lahir/Umur Ayah</h5>
        <p><input type="text" name="tanggal_lahir_umur_ayah" class="form-control"></p>
        <h5>Pekerjaan Ayah</h5>
        <p><input type="text" name="pekerjaan_ayah" class="form-control"></p>
        <h5>Alamat Ayah</h5>
        <p><input type="text" name="alamat_ayah" class="form-control"></p> -->
        <hr color="black" size="3">
        <h5>NIK pelapor</h5>
       	<p><input type="text" name="nik_pelapor" value="<?= set_value('nik_pelapor') ?>"  class="form-control"></p>
 	    	<!-- <h5>Nama Lengkap pelapor</h5>
        <p><input type="text" name="nama_pelapor" class="form-control"></p> -->
       <!-- <hr color="black" size="3"> -->
       <!-- <h5>Nama Lengkap Saksi 1</h5>
       <p><input type="text" name="nama_saksi_satu" class="form-control"></p> -->
       <!-- <h5>Tanggal Lahir/Umur Saksi 1</h5>
       <p><input type="text" name="umur_saksi_satu" class="form-control"></p> -->
       <!-- <h5>Pekerjaan Saksi 1</h5>
       <p><input type="text" name="pekerjaan_saksi_satu" class="form-control"></p>
       <h5>Alamat Saksi 1</h5>
       <p><input type="text" name="alamat_saksi_satu" class="form-control"></p> -->
       

     </div>
     <!-- /Left Column -->

     <!-- Right Column -->
     <div class="span6">
      <!-- <h5>Nomor KK</h5>
      <p><input type="text" name="no_kk" class="form-control"></p>
      <h5>Alamat</h5>
      <p><input type="text" name="alamat_jenazah" class="form-control"></p> -->
      <h5>Sebab Kematian</h5>
      <p><input type="text" name="sebab_kematian" value="<?= set_value('sebab_kematian') ?>"  class="form-control"></p>
      <h5>Tempat Kematian</h5>
      <p><input type="text" name="tempat_kematian" value="<?= set_value('tempat_kematian') ?>" class="form-control"></p>
      <h5>Yang Menerangkan</h5>
      <p><input type="text" name="yang_menerangkan" value="<?= set_value('yang_menerangkan') ?>" class="form-control"></p>
      <h5>Scan KTP Orang Tua <i>(.pdf)</i></h5>
      <p><input type="file" name="ktp_ortu" value="<?= set_value('ktp_ortu') ?>" class="form-control" required></p><br><br><br><br><br><br>
      <!-- <hr color="black" size="3"> -->
      <!-- <h5>Scan KTP Ibu</h5>
      <p><input type="file" name="ktp_ibu" class="form-control"></p> -->
      <!-- <h5>NIK ibu</h5>
      <p><input type="text" name="nik_ibu" class="form-control"></p>
 	  	<h5>Nama Lengkap ibu</h5>
      <p><input type="text" name="nama_ibu" class="form-control"></p>
      <h5>Tanggal Lahir/Umur ibu</h5>
      <p><input type="text" name="tanggal_lahir_umur_ibu" class="form-control"></p>
      <h5>Pekerjaan ibu</h5>
      <p><input type="text" name="pekerjaan_ibu" class="form-control"></p>
      <h5>Alamat ibu</h5>
      <p><input type="text" name="alamat_ibu" class="form-control"></p> --><!-- <br>
      <hr color="black" size="3"> --><!-- 
      <h5>Pekerjaan pelapor</h5>
      <p><input type="text" name="pekerjaan_pelapor" class="form-control"></p>
      <h5>Alamat pelapor</h5>
      <p><input type="text" name="alamat_pelapor" class="form-control"></p> -->
      <!-- <h5>Tanggal Lahir/Umur pelapor</h5>
      <p><input type="text" name="umur_pelapor" class="form-control"></p> -->
      <!-- <h5>Tanda Tangan pelapor</h5>
      <p><input type="file" name="ttd_pelapor" class="form-control"></p> -->
    <!-- <br><br><br><br><br><br> -->
      <hr color="black" size="3">
       <h5>NIK Saksi 1</h5>
       <p><input type="text" name="nik_saksi_satu" value="<?= set_value('nik_saksi_satu') ?>" class="form-control"></p>
     <h5>NIK Saksi 2</h5>
       <p><input type="text" name="nik_saksi_dua" value="<?= set_value('nik_saksi_dua') ?>" class="form-control"></p>
       <!-- <h5>Nama Lengkap Saksi 2</h5>
       <p><input type="text" name="nama_saksi_dua" class="form-control"></p> -->
       <!-- <h5>Tanggal Lahir/Umur Saksi 2</h5>
       <p><input type="text" name="umur_saksi_dua" class="form-control"></p> -->
       <!-- <h5>Pekerjaan Saksi 2</h5>
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

<?php echo form_close(); ?><br><br><br><br>
			<!-- </form> -->
	</section>
	
</div>








<!-- <div class="content-wrapper">
	<section class="content">
			<a href="<?php echo base_url('kematian/index'); ?>" class="close" aria-label="close">&times;</a>
			<form action="<?php echo base_url().'kematian/tambah_aksi'; ?>" method="post">
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
					<label>NIK</label>
					<input type="text" name="nik" class="form-control">
				</div>
				<div> 
					<label>Nama</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<div> 
					<label>Jenis Kelamin</label>
					<select class="form-control" name="jenis_kelamin">
			            <option>Lk</option>    
			            <option>Pr</option>  
		            </select>
				</div> 
				<div> 
					<label>Tanggal Lahir/Umur</label>
					<input type="text" name="tgllahir_umur" class="form-control">
				</div>
				<div> 
					<label>Tempat Lahir</label>
					<input type="text" name="tempat_lahir" class="form-control">
				</div>
				<div> 
					<label>Agama</label>
					<input type="text" name="agama" class="form-control">
				</div>
				<div> 
					<label>Pekerjaan</label>
					<input type="text" name="pekerjaan" class="form-control">
				</div>
				<div> 
					<label>Alamat</label>
					<input type="text" name="alamat" class="form-control">
				</div>
				<div> 
					<label>Tempat Mati</label>
					<input type="text" name="tempat_mati" class="form-control">
				</div>
				<div> 
					<label>Tanggal Kematian</label>
					<input type="text" name="tanggal_kematian" class="form-control">
				</div>
				<div> 
					<label>Pukul</label>
					<input type="text" name="pukul" class="form-control">
				</div>
				<div> 
					<label>Sebab Kematian</label>
					<input type="text" name="sebab_kematian" class="form-control">
				</div>
				<div> 
					<label>Tempat Kematian</label>
					<input type="text" name="tempat_kematian" class="form-control">
				</div>
				<div> 
					<label>Yang Menerangkan</label>
					<input type="text" name="yang_menerangkan" class="form-control">
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
					<label>NIK</label>
					<input type="text" name="nik_pelapor" class="form-control">
				</div>
				<div> 
					<label>Nama Lengkap</label>
					<input type="text" name="nama_pelapor" class="form-control">
				</div>
				<div> 
					<label>Tanggal Lahir/Umur</label>
					<input type="text" name="tgllahir_umur_pelapor" class="form-control">
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
					<label>Tanggal Lahir/Umur</label>
					<input type="text" name="tgllahir_umur_saksi_satu" class="form-control">
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
					<label>Tanggal Lahir/Umur</label>
					<input type="text" name="tgllahir_umur_saksi_dua" class="form-control">
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