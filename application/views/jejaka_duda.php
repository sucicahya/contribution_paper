<div class="content-wrapper">
	<section id="career" class="container">
		<?php if ($this->session->flashdata('success') == TRUE) : ?>
					<div class="alert alert-success">
						<span><?= $this->session->flashdata('success'); ?></span>
					</div>
				<?php endif; ?>
  	<!-- <a href="<?php echo base_url('jejaka_duda/index'); ?>" class="close" aria-label="close">&times;</a> -->
	<!-- <form action="<?php echo base_url().'jejaka_duda/tambah_aksi'; ?>" method="post"> -->
    <!-- <?php echo validation_errors(); ?> -->
    <font color="red" size="2"><i><?php echo validation_errors(); ?></i></font>
    <?php echo form_open_multipart('jejaka_duda/tambah_aksi'); ?>
    
    
    
    <hr>

    <div class="row-fluid">
      <!-- Left Column -->
      <div class="span6">
        <h4>NIK</h4>
        <p><input type="text" name="nik" value="<?= set_value('nik') ?>" class="form-control"></p>
       <hr color="black" size="3">



       <h5>NIK Saksi 1</h5>
       <p><input type="text" name="nik_saksi_satu" value="<?= set_value('nik_saksi_satu') ?>" class="form-control"></p>
       <!-- <h5>Nama Lengkap Saksi 1</h5>
       <p><input type="text" name="nama_saksi_satu" class="form-control"></p> -->
       <!-- <h5>Umur Saksi 1</h5>
       <p><input type="text" name="umur_saksi_satu" class="form-control"></p> -->
       <!-- <h5>Pekerjaan Saksi 1</h5>
       <p><input type="text" name="pekerjaan_saksi_satu" class="form-control"></p>
       <h5>Alamat Saksi 1</h5>
       <p><input type="text" name="alamat_saksi_satu" class="form-control"></p>
       <h5>TTD Saksi 1</h5>
       <p><input type="file" name="ttd_saksi_satu" class="form-control"></p> -->
       

     </div>
     <!-- /Left Column -->

     <!-- Right Column -->
     <div class="span6">
      <h4>Bin</h4>
      <p><input type="text" name="bin_binti" value="<?= set_value('bin_binti') ?>" class="form-control"></p>

     <hr color="black" size="3">

     <h5>NIK Saksi 2</h5>
       <p><input type="text" name="nik_saksi_dua" value="<?= set_value('nik_saksi_dua') ?>" class="form-control"></p>
       <!-- <h5>Nama Lengkap Saksi 2</h5>
       <p><input type="text" name="nama_saksi_dua" class="form-control"></p> -->
       <!-- <h5>Umur Saksi 2</h5>
       <p><input type="text" name="umur_saksi_dua" class="form-control"></p> -->
       <!-- <h5>Pekerjaan Saksi 2</h5>
       <p><input type="text" name="pekerjaan_saksi_dua" class="form-control"></p>
       <h5>Alamat Saksi 2</h5>
       <p><input type="text" name="alamat_saksi_dua" class="form-control"></p>
       <h5>TTD Saksi 2</h5>
       <p><input type="file" name="ttd_saksi_dua" class="form-control"></p> -->

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