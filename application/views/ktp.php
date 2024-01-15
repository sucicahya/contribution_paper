<div class="content-wrapper">
	<section class="content">
			<a href="<?php echo base_url('ktp/index'); ?>" class="close" aria-label="close">&times;</a>
			<form action="<?php echo base_url().'ktp/tambah_aksi'; ?>" method="post">
				<div> 
					<label>Kecamatan</label>
					<input type="text" name="kecamatan" class="form-control">
				</div>
				<div> 
					<label>Kelurahan</label>
					<input type="text" name="kelurahan" class="form-control">
				</div>
				<div> 
					<label>Permohonan</label>
					<input type="text" name="permohonan" class="form-control">
				</div>
				<div> 
					<label>Nama</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<div> 
					<label>Nomor kartu Keluarga</label>
					<input type="text" name="no_kk" class="form-control">
				</div>
				<div> 
					<label>NIK</label>
					<input type="text" name="nik" class="form-control">
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
					<label>Foto</label>
					<input type="text" name="foto" class="form-control">
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
	
</div>