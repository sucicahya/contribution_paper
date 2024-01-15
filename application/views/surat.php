<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Surat</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Surat</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	<!-- Main content -->
    <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data</button>

    	<div class="navbar-form navbar-right">
    		<?php echo form_open('surat/search') ?>
    			<input type="text" name="keyword" class="form-control" placeholder="Search">
    			<button type="submit" class="btn btn-success">Cari</button>
    		<?php echo form_close() ?>
    	</div>


      <table class="table">
      	<tr>
      		<th>No</th>
      		<th>ID SURAT</th>
      		<th>NIK</th>
					<th>Nama</th>
					<th>jenis surat</th>
					<th>Aksi</th>
      	</tr>
      	<?php 
      		$no = 1;
      		foreach ($surat as $srt) :
      	?>
      	<tr>
      		<td><?php echo $no++; ?></td>
      		<td><?php echo $srt->id_surat ?></td>
      		<td><?php echo $srt->nik ?></td>
					<td><?php echo $srt->nama ?></td>
					<td><?php echo $srt->jenis_surat ?></td>
					<!-- <td><?php echo anchor('penduduk/detail_penduduk/'.$pdk->nik, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td> -->
					<td onclick="javascript: return confirm('Anda yakin akan menghapusnya?')"><?php echo anchor('surta/hapus/'.$srt->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
					<!-- <td><?php echo anchor('penduduk/edit_penduduk/'.$pdk->nik, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td> -->
      	</tr>
      <?php endforeach; ?>
      </table>
    </section>


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PENDUDUK</h5>
					<a href="<?php echo base_url('penduduk/index'); ?>" class="close" aria-label="close">&times;</a>
	      </div>
	      <div class="modal-body">
	        <form method="post" action="<?php echo base_url().'penduduk/tambah_aksi'; ?>">
	        	<div class="form-group">
	        		<label>NIK</label>
	        		<input type="text" name="nik" class="form-control">
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Nama</label>
	        		<input type="text" name="nama" class="form-control">
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Nomor KK</label>
	        		<input type="text" name="no_kk" class="form-control">
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Jenis Kelamin</label>
	        		<!-- <input type="text" name="jenis_kelamin" class="form-control"> -->
	        		<select class="form-control" name="jenis_kelamin">
		            <option>Lk</option>    
		            <option>Pr</option>  
	            </select>
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>RT</label>
	        		<input type="text" name="rt" class="form-control">
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Status Perkawinan</label>
	        		<!-- <input type="text" name="status_perkawinan" class="form-control"> -->
	        		<select class="form-control" name="status_perkawinan">
		            <option>Belum Kawin</option>    
		            <option>Kawin</option>     
		            <option>Cerai Hidup</option>     
		            <option>Cerai Mati</option>  
	            </select>
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Tempat Lahir</label>
	        		<input type="text" name="tempat_lahir" class="form-control">
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Tanggal Lahir</label>
	        		<input type="date" name="tanggal_lahir" class="form-control">
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Agama</label>
	        		<!-- <input type="text" name="agama" class="form-control"> -->
	        		<select class="form-control" name="agama">   
		            <option>Budha</option>      
		            <option>Hindu</option>
		            <option>Islam</option>    
		            <option>Katolik</option>         
		            <option>Konghucu</option>   
		            <option>Kristen</option>  
	            </select>
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Pendidikan Terakhir</label>
	        		<input type="text" name="pendidikan_terakhir" class="form-control">
	        		<select class="form-control" name="pendidikan_terakhir">     
		            <option>Tidak / Belum Sekolah</option> 
		            <option>Belum Tamat SD / Sederajat</option>   
		            <option>Tamat SD / Sederajat</option>    
		            <option>SLTP / Sederajat</option> 
		            <option>SLTA / Sederajat</option>  
		            <option>Diploma I / Diploma II</option>  
		            <option>Akademi / Diploma III</option>   
		            <option>Diploma IV / Strata I</option>
		            <option>Strata II</option>  
		            <option>Strata III</option> 
	            </select>
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Pekerjaan</label>
	        		<input type="text" name="pekerjaan" class="form-control">
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Kewarganegaraan</label>
	        		<!-- <input type="text" name="kewarganegaraan" class="form-control"> -->	        		
	        		<select class="form-control" name="kewarganegaraan">   
		            <option>WNI</option>      
		            <option>WNA</option>
	            </select>
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Alamat Lengkap</label>
	        		<input type="text" name="alamat_lengkap" class="form-control">
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>RW</label>
	        		<input type="text" name="rw" class="form-control">
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Dusun</label>
	        		<input type="text" name="dusun" class="form-control">
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Kedudukan Dalam Keluarga</label>
	        		<input type="text" name="kedudukan_dalam_keluarga" class="form-control">
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>JKN</label>
	        		<!-- <input type="text" name="jkn" class="form-control"> -->
	        		<select class="form-control" name="jkn">   
		            <option>Tidak</option>      
		            <option>Ya</option>
	            </select>
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Nama Ibu</label>
	        		<input type="text" name="nama_ibu" class="form-control">
	        		
	        	</div>
	        	<div class="form-group">
	        		<label>Keterangan</label>
	        		<!-- <input type="text" name="keterangan" class="form-control"> -->
	        		<select class="form-control" name="keterangan">   
		            <option>Tidak</option>      
		            <option>Ya</option>
	            </select>
	        		
	        	</div>
	        	<button type="reset" class="btn btn-warning" data-bs-dismiss="modal">Reset</button>
	        	<button type="submit" class="btn btn-primary">Simpan</button>

	        </form>
	      </div>
	    </div>
	  </div>
	</div>
	
</div>
