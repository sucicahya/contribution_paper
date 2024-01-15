<form method="post" action="<?php echo base_url().'penduduk/tambah_aksi'; ?>" id="tambah_penduduk">
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
		            <option>Laki-Laki</option>    
		            <option>Perempuan</option>  
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
	        		<!-- <input type="text" name="pendidikan_terakhir" class="form-control"> -->
	        		<select class="form-control" name="pendidikan_terakhir"> 
		            <option>TIDAK / BELUM SEKOLAH</option> 
		            <option>BELUM TAMAT SD/SEDERAJAT</option>   
		            <option>TAMAT SD / SEDERAJAT</option>    
		            <option>SLTP / SEDERAJAT</option> 
		            <option>SLTA / SEDERAJAT</option>  
		            <option>DIPLOMA I / II</option>  
		            <option>AKADEMI/ DIPLOMA III/S. MUDA</option>   
		            <option>DIPLOMA IV/ STRATA I</option>
		            <option>STRATA II</option>  
		            <option>STRATA III</option> 
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
		            <option>Warga Negara Indonesia</option>      
		            <option>Warga Negara Asing</option>
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
	        	<div class="card-footer">
                <button type="reset" class="btn btn-warning" data-bs-dismiss="modal">Reset</button>
	        			<button type="submit" class="btn btn-primary">Simpan</button>
            </div>
	        	

	        </form>