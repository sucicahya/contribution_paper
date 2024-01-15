<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Penduduk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Penduduk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- SELECT2 EXAMPLE -->
    <section class="content">
    	<?php foreach ($inventory as $inv){ ?>
    		<!-- <?php echo validation_errors(); ?> -->
			<form action="<?php echo base_url().'inventory/update_inventory/'.$inv->id; ?>" method="post">
      <div class="container-fluid">
        <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              	<div class="form-group">
                  <label>ID</label>
                  <input type="hidden" name="id" class="form-control" value="<?php echo $inv->id ?>">
									<input type="text" name="id" disabled class="form-control" value="<?php echo $inv->id ?>">
                </div>
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" name="tanggal" class="form-control" value="<?php echo $inv->tanggal ?>">
                  <small><font color="red"><i><?php echo form_error('tanggal'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Asal</label>
                  <input type="text" name="asal" class="form-control" value="<?php echo $inv->asal ?>">
                  <small><font color="red"><i><?php echo form_error('asal'); ?></i></font></small>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Destinasi</label>
                  <input type="text" name="destinasi" class="form-control" value="<?php echo $inv->destinasi ?>">
                  <small><font color="red"><i><?php echo form_error('destinasi'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="text" name="jumlah" class="form-control" value="<?php echo $inv->jumlah ?>">
                  <small><font color="red"><i><?php echo form_error('jumlah'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select name="status" class="form-control">
										<option <?php if($inv->status == "Selesai"){ echo 'selected="selected"'; } ?> >Selesai</option>
										<option <?php if($inv->status == "Sedang Dikirim"){ echo 'selected="selected"'; } ?> >Sedang Dikirim</option>
										<option <?php if($inv->status == "Gagal"){ echo 'selected="selected"'; } ?> >Gagal</option>
									</select>
                </div>
              </div>              
        <!-- /.col-->
      			</div>
      			<a href="<?php echo base_url('inventory/index'); ?>" class="btn btn-info">Kembali</a>
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
		<?php foreach ($penduduk as $inv){ ?>
			<form action="<?php echo base_url().'penduduk/update_penduduk'; ?>" method="post">
				<div> 
					<label>NIK</label>
					<input type="hidden" name="nik" class="form-control" value="<?php echo $pdk->nik ?>">
					<input type="text" name="nik" class="form-control" value="<?php echo $pdk->nik ?>">
				</div>
				<div> 
					<label>Nama</label>
					<input type="text" name="nama" class="form-control" value="<?php echo $pdk->nama ?>">
				</div>
				<div> 
					<label>No Kartu Keluarga</label>
					<input type="text" name="no_kk" class="form-control" value="<?php echo $pdk->no_kk ?>">
				</div>
				<div> 
					<label>Jenis Kelamin</label>
					<select name="jenis_kelamin" class="form-control">
						<option <?php if($pdk->jenis_kelamin == "Lk"){ echo 'selected="selected"'; } ?> >Lk</option>
						<option <?php if($pdk->jenis_kelamin == "Pr"){ echo 'selected="selected"'; } ?> >Pr</option>
					</select> -->
					<!-- <input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $pdk->jenis_kelamin ?>"> -->
				<!-- </div> 
				<div> 
					<label>RT</label>
					<input type="text" name="rt" class="form-control" value="<?php echo $pdk->rt ?>">
				</div>
				<div> 
					<label>Status Perkawinan</label> -->
					<!-- <input type="text" name="status_perkawinan" class="form-control" value="<?php echo $pdk->status_perkawinan ?>"> -->
					<!-- <select name="status_perkawinan" class="form-control">
						<option <?php if($pdk->status_perkawinan == "Belum Kawin"){ echo 'selected="selected"'; } ?> >Belum Kawin</option>
						<option <?php if($pdk->status_perkawinan == "Kawin"){ echo 'selected="selected"'; } ?> >Kawin</option>
						<option <?php if($pdk->status_perkawinan == "Cerai Hidup"){ echo 'selected="selected"'; } ?> >Cerai Hidup</option>
						<option <?php if($pdk->status_perkawinan == "Cerai Mati"){ echo 'selected="selected"'; } ?> >Cerai Mati</option>
					</select>
				</div>
				<div> 
					<label>Tempat Lahir</label>
					<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $pdk->tempat_lahir ?>">
				</div>
				<div> 
					<label>Tanggal Lahir</label>
					<input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $pdk->tanggal_lahir ?>">
				</div>
				<div> 
					<label>Agama</label> -->
					<!-- <input type="text" name="agama" class="form-control" value="<?php echo $pdk->agama ?>"> -->
					<!-- <select name="agama" class="form-control">
						<option <?php if($pdk->agama == "Budha"){ echo 'selected="selected"'; } ?> >Budha</option>
						<option <?php if($pdk->agama == "Hindu"){ echo 'selected="selected"'; } ?> >Hindu</option>
						<option <?php if($pdk->agama == "Islam"){ echo 'selected="selected"'; } ?> >Islam</option>
						<option <?php if($pdk->agama == "Katolik"){ echo 'selected="selected"'; } ?> >Katolik</option>
						<option <?php if($pdk->agama == "Konghucu"){ echo 'selected="selected"'; } ?> >Konghucu</option>
						<option <?php if($pdk->agama == "Kristen"){ echo 'selected="selected"'; } ?> >Kristen</option>
					</select>
				</div>
				<div> 
					<label>Pendidikan Terakhir</label> -->
					<!-- <input type="text" name="pendidikan_terakhir" class="form-control" value="<?php echo $pdk->pendidikan_terakhir ?>"> -->
					<!-- <select name="pendidikan_terakhir" class="form-control">
						<option <?php if($pdk->pendidikan_terakhir == "Tidak / Belum Sekolah"){ echo 'selected="selected"'; } ?> >Tidak / Belum Sekolah</option>
						<option <?php if($pdk->pendidikan_terakhir == "Belum Tamat SD / Sederajat"){ echo 'selected="selected"'; } ?> >Belum Tamat SD / Sederajat</option>
						<option <?php if($pdk->pendidikan_terakhir == "Tamat SD / Sederajat"){ echo 'selected="selected"'; } ?> >Tamat SD / Sederajat</option>
						<option <?php if($pdk->pendidikan_terakhir == "SLTP / Sederajat"){ echo 'selected="selected"'; } ?> >SLTP / Sederajat</option>
						<option <?php if($pdk->pendidikan_terakhir == "SLTA / Sederajat"){ echo 'selected="selected"'; } ?> >SLTA / Sederajat</option>
						<option <?php if($pdk->pendidikan_terakhir == "Diploma I / Diploma II"){ echo 'selected="selected"'; } ?> >Diploma I / Diploma II</option>
						<option <?php if($pdk->pendidikan_terakhir == "Akademi / Diploma III"){ echo 'selected="selected"'; } ?> >Akademi / Diploma III</option>
						<option <?php if($pdk->pendidikan_terakhir == "Diploma IV / Strata I"){ echo 'selected="selected"'; } ?> >Diploma IV / Strata I</option>
						<option <?php if($pdk->pendidikan_terakhir == "Strata II"){ echo 'selected="selected"'; } ?> >Strata II</option>
						<option <?php if($pdk->pendidikan_terakhir == "Strata III"){ echo 'selected="selected"'; } ?> >Strata III</option>
					</select>
				</div>
				<div> 
					<label>Pekerjaan</label>
					<input type="text" name="pekerjaan" class="form-control" value="<?php echo $pdk->pekerjaan ?>">
				</div>
				<div> 
					<label>Kewarganegaraan</label> -->
					<!-- <input type="text" name="kewarganegaraan" class="form-control" value="<?php echo $pdk->kewarganegaraan ?>"> -->
					<!-- <select name="kewarganegaraan" class="form-control">
						<option <?php if($pdk->kewarganegaraan == "WNI"){ echo 'selected="selected"'; } ?> >WNI</option>
						<option <?php if($pdk->kewarganegaraan == "WNA"){ echo 'selected="selected"'; } ?> >WNA</option>
					</select>
				</div>
				<div> 
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat_lengkap" class="form-control" value="<?php echo $pdk->alamat_lengkap ?>">
				</div>
				<div> 
					<label>RW</label>
					<input type="text" name="rw" class="form-control" value="<?php echo $pdk->rw ?>">
				</div>
				<div> 
					<label>Dusun</label>
					<input type="text" name="dusun" class="form-control" value="<?php echo $pdk->dusun ?>">
				</div>
				<div> 
					<label>Kedudukan Dalma Keluarga</label>
					<input type="text" name="kedudukan_dalam_keluarga" class="form-control" value="<?php echo $pdk->kedudukan_dalam_keluarga ?>">
				</div>
				<div> 
					<label>JKN</label> -->
					<!-- <input type="text" name="jkn" class="form-control" value="<?php echo $pdk->jkn ?>"> -->
					<!-- <select name="jkn" class="form-control">
						<option <?php if($pdk->jkn == "Tidak"){ echo 'selected="selected"'; } ?> >Tidak</option>
						<option <?php if($pdk->jkn == "Ya"){ echo 'selected="selected"'; } ?> >Ya</option>
					</select>
				</div>
				<div> 
					<label>Nama Ibu</label>
					<input type="text" name="ibu" class="form-control" value="<?php echo $pdk->ibu ?>">
				</div>
				<div> 
					<label>Keterangan</label> -->
					<!-- <input type="text" name="keterangan" class="form-control" value="<?php echo $pdk->keterangan ?>"> -->
					<!-- <select name="keterangan" class="form-control">
						<option <?php if($pdk->keterangan == "Tidak"){ echo 'selected="selected"'; } ?> >Tidak</option>
						<option <?php if($pdk->keterangan == "Ya"){ echo 'selected="selected"'; } ?> >Ya</option>
					</select>
				</div>

				<a href="<?php echo base_url('penduduk/index'); ?>" class="btn btn-info">Kembali</a>
				<button type="reset" class="btn btn-warning">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>


			</form>
		<?php } ?>
	</section>
	
</div> -->