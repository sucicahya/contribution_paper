<div class="content-wrapper">
	<section id="career" class="container">
		<?php if ($this->session->flashdata('success') == TRUE) : ?>
					<div class="alert alert-success">
						<span><?= $this->session->flashdata('success'); ?></span>
					</div>
				<?php endif; ?>
  	<!-- <a href="<?php echo base_url('keterangan/index'); ?>" class="close" aria-label="close">&times;</a> -->
	<!-- <form action="<?php echo base_url().'keterangan/tambah_aksi'; ?>" method="post"> -->
		<!-- <?php echo validation_errors(); ?> -->
    <font color="red" size="2"><i><?php echo validation_errors(); ?></i></font>
		<?php echo form_open_multipart('keterangan/tambah_aksi'); ?>
    
    
    <hr>

    <div class="row-fluid">
      <!-- Left Column -->
      <div class="span6">
        <h5>NIK</h5>
        <p><input type="text" name="nik" value="<?= set_value('nik') ?>" class="form-control"></p>
        <h5>Keperluan</h5>
        <p><input type="text" name="keperluan" value="<?= set_value('keperluan') ?>" class="form-control"></p>     
        <!-- <h5>Tempat Tanggal Lahir</h5>
        <p><input type="text" name="tempat_tanggal_lahir" class="form-control"></p> -->
        <!-- <h5>Surat Bukti Diri</h5>
        <p><input type="file" name="surat_bukti_diri" class="form-control"></p> -->
     </div>
     <!-- /Left Column -->

     <!-- Right Column -->
     <div class="span6">  	
     	<h5>Keterangan Lain</h5>
        <p><input type="text" name="keterangan" value="<?= set_value('keterangan') ?>" class="form-control"></p>
        <!-- <h5>Tanda Tangan</h5>
        <p><input type="file" name="ttd" class="form-control"></p> -->
   </div>
   <!-- /Right Column -->
 </div>
 <p>&nbsp;</p>


				<a href="<?php echo base_url('home_surat/index'); ?>" class="btn btn-info">Kembali</a>
				<button type="reset" class="btn btn-warning">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>


			<!-- </form> -->
			<?php echo form_close(); ?>
	</section>
	
</div>








<!-- <div class="content-wrapper">
	<section class="content">
			<a href="<?php echo base_url('keterangan/index'); ?>" class="close" aria-label="close">&times;</a>
			<form action="<?php echo base_url().'keterangan/tambah_aksi'; ?>" method="post">
				<div> 
					<label>Kecamatan</label>
					<input type="text" name="kecamatan" class="form-control">
				</div>
				<div> 
					<label>Kelurahan</label>
					<input type="text" name="kelurahan" class="form-control">
				</div>
				<div> 
					<label>Kode Desa</label>
					<input type="text" name="kode_desa" class="form-control">
				</div>
				<div> 
					<label>Kode Kelurahan</label>
					<input type="text" name="kode_kelurahan" class="form-control">
				</div>
				<div> 
					<label>Nomor</label>
					<input type="text" name="nomor" class="form-control">
				</div>
				<div> 
					<label>Nama</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<div> 
					<label>Tempat Tanggal Lahir</label>
					<input type="text" name="tempat_tanggal_lahir" class="form-control">
				</div>
				<div> 
					<label>Kewarganegaraan / Agama</label>
					<input type="text" name="kewarganegaraan_agama" class="form-control">
				</div>
				<div> 
					<label>Pekerjaan</label>
					<input type="text" name="pekerjaan" class="form-control">
				</div>
				<div> 
					<label>Tempat Tinggal</label>
					<input type="text" name="tempat_tinggal" class="form-control">
				</div>
				<div> 
					<label>Kabupaten</label>
					<input type="text" name="kabupaten" class="form-control">
				</div>
				<div> 
					<label>Surat Bukti Diri</label>
					<input type="text" name="surat_bukti_diri" class="form-control">
				</div>
				<div> 
					<label>Status Perkawinan</label>
					<input type="text" name="status_perkawinan" class="form-control">
				</div>
				<div> 
					<label>Keperluan</label>
					<input type="text" name="keperluan" class="form-control">
				</div>
				<div> 
					<label>Berlaku Mulai</label>
					<input type="text" name="berlaku_mulai" class="form-control">
				</div>
				<div> 
					<label>Keterangan Lain</label>
					<input type="text" name="keterangan_lain" class="form-control">
				</div>
				<div> 
					<label>Tanggal</label>
					<input type="text" name="tanggal" class="form-control">
				</div>
				<div> 
					<label>TTD</label>
					<input type="text" name="ttd" class="form-control">
				</div>
				<div> 
					<label>TTD Camat</label>
					<input type="text" name="ttd_camat" class="form-control">
				</div>
				<div> 
					<label>Nama Camat</label>
					<input type="text" name="nama_camat" class="form-control">
				</div>
				<div> 
					<label>NIP</label>
					<input type="text" name="nip" class="form-control">
				</div>


				<a href="<?php echo base_url('home_surat/index'); ?>" class="btn btn-info">Kembali</a>
				<button type="reset" class="btn btn-warning">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>


			</form>
	</section>
	
</div> -->