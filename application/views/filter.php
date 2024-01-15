 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Inventory</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inventory</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    	<?= $this->session->flashdata('success'); ?>
    	<?= $this->session->flashdata('delete'); ?>
    	<?= $this->session->flashdata('update'); ?>

	      	<!-- <a href="javascript:void(0);" onclick="showModal();" class="btn btn-primary">Tambahh</a> -->
    	<!-- <button class="btn btn-primary" onclick="add_person()" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data</button> -->
    	<!-- <button class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Add Person</button> -->
    	<br><br>

    	<!-- <?php echo form_open('penduduk/search') ?>
    	<div class="input-group">
    		
    			<input type="text" name="keyword" class="form-control rounded" placeholder="Search"aria-label="Search" aria-describedby="search-addon" />
    			<button type="submit" class="btn btn-outline-primary">Cari</button>
    		
    	</div> -->

    	<!-- <div class="navbar-form navbar-right">
    		<?php echo form_open('penduduk/search') ?>
    			<input type="text" name="keyword" class="form-control" placeholder="Search">
    			<button type="submit" class="btn btn-success">Cari</button>
    		<?php echo form_close() ?>
    	</div> -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <!-- <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
              	<select name="id_regional" id="id_regional">
              		<?php foreach ($datareg as $row) : ?>
              			<option value="<?= $row->id_regional ?>"><?= $row->regional ?></option>
              		<?php endforeach ?>
              	</select>
              	<select name="id_kantor" id="id_kantor">
              		
              	</select>
              	<a href="<?= base_url('filter')?>"class="btn btn-success btn-xs">Tampilkan Hasil Filter</a>
              	<!-- <a href="<?=site_url('Inventory/filter/')?>" class="btn btn-success btn-xs">Tampilkan Hasil Filter</a> -->
              	<!-- <button type="button" id="showFilterResult">Tampilkan Hasil Filter</button> -->
              	<!-- <script scr="<?= base_url(); ?>assets/js/jquery-3.2.1.min.js"></script> -->
              	<div id="resultContainer">
                <table id="example1" class="table table-bordered table-hover"> <!-- table-responsive -->
                  <thead>
                  <tr>
					          <!-- <th width="5px" class="text-center">No</th> -->
					      		<th width="5px" class="text-center">Order Id</th>
										<th width="80px" class="text-center">Regional</th>
										<th width="80px" class="text-center">Kantor</th>
										<!-- <th width="80px" class="text-center">order Id</th> -->
										<th width="80px" class="text-center">Jumlah Dus</th>
										<th width="80px" class="text-center">ID dus</th>
										<th width="80px" class="text-center">Waktu</th>
										<th width="80px" class="text-center">Status Pengiriman</th>
										<th width="80px" class="text-center">Aksi</th>
										<!-- <th width="80px" class="text-center">Tanggal</th> --><!-- 
										<th class="text-center">no_kk</th>
										<th class="text-center">jenis_kelamin</th>
										<th class="text-center">rt</th>
										<th class="text-center">status_perkawinan</th>
										<th class="text-center">tempat_lahir</th>
										<th class="text-center">tanggal_lahir</th>
										<th class="text-center">agama</th>
										<th class="text-center">pendidikan_terakhir</th>
										<th class="text-center">pekerjaan</th>
										<th class="text-center">kewarganegaraan</th> -->
										<!-- <th class="text-center">Asal</th>
										<th class="text-center">Destinasi</th> --><!-- 
										<th class="text-center">rw</th>
										<th class="text-center">dusun</th>
										<th class="text-center">kedudukan_dalam_keluarga</th>
										<th class="text-center">jkn</th>
										<th class="text-center">ibu</th>
										<th class="text-center">keterangan</th> -->
										<!-- <th class="text-center">Jumlah</th> -->
										<!-- <th class="text-center">Status</th> -->
										<!-- <th class="text-center">Aksi</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
					      		$no = 1;
					      		foreach ($filter as $inv) :
					      	?>
					      	<tr>
					      		<td><?php echo $inv->Order_Id ?></td>
					      		<td><?php echo $inv->regional ?></td>
					      		<td><?php echo $inv->kantor ?></td>
					      		<td><?php echo $inv->Dus ?></td>
					      		<td><?php echo "<font color='red'>$inv->Id_Dus</font>" ?></td>
					      		<!-- <td><?php echo "<font color='red'>aaaa</font>" ?><br><?php echo "<font color='green'>bbbb</font>" ?><br><?php echo "<font color='blue'>cccc</font>" ?></td> -->
					      		<td><?php echo $inv->Waktu ?></td>
					      		<td>
					      			<?php if ($inv->Status_Pengiriman == "Selesai") { ?>
												<span class="badge bg-primary"><?php echo $inv->Status_Pengiriman ?></span>
											<?php } else if ($inv->Status_Pengiriman == "Diproses") { ?>												
												<span class="badge bg-success"><?php echo $inv->Status_Pengiriman ?></span>
											<?php } else if ($inv->Status_Pengiriman == "Gagal") { ?>											
												<span class="badge bg-danger"><?php echo $inv->Status_Pengiriman ?></span>		
											<?php } ?></td>
					      		<!-- <td><?php echo $inv->id ?></td>
										<td><?php echo $inv->tanggal ?></td> --><!-- 
										<td><?php echo $pdk->no_kk ?></td>
										<td><?php echo $pdk->jenis_kelamin ?></td>
										<td><?php echo $pdk->rt ?></td>
										<td><?php echo $pdk->status_perkawinan ?></td>
										<td><?php echo $pdk->tempat_lahir ?></td>
										<td><?php echo $pdk->tanggal_lahir ?></td>
										<td><?php echo $pdk->agama ?></td>
										<td><?php echo $pdk->pendidikan_terakhir ?></td>
										<td><?php echo $pdk->pekerjaan ?></td>
										<td><?php echo $pdk->kewarganegaraan ?></td> -->
										<!-- <td><?php echo $inv->asal ?></td>
										<td><?php echo $inv->destinasi ?></td>
										<td><?php echo $inv->jumlah ?></td> -->
										<!-- <td>
											<?php if ($inv->status == "Selesai") { ?>
												<span class="badge bg-primary"><?php echo $inv->status ?></span>
											<?php } else if ($inv->status == "Sedang Dikirim") { ?>												
												<span class="badge bg-success"><?php echo $inv->status ?></span>
											<?php } else if ($inv->status == "Gagal") { ?>											
												<span class="badge bg-danger"><?php echo $inv->status ?></span>		
											<?php } ?>	
										</td> -->
										
										<!-- <td><?php echo $pdk->rw ?></td>
										<td><?php echo $pdk->dusun ?></td>
										<td><?php echo $pdk->kedudukan_dalam_keluarga ?></td>
										<td><?php echo $pdk->jkn ?></td>
										<td><?php echo $pdk->ibu ?></td>
										<td><?php echo $pdk->keterangan ?></td> -->
										
										


										<td>
											<!-- <a href="<?=site_url('inventory/detail_inventory/'.$inv->id)?>" class="btn btn-info btn-xs"><i class="fa fa-search-plus"></i></a>
											<a href="<?=site_url('inventory/hapus/'.$inv->id)?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin akan menghapusnya?')"><i class="fa fa-trash"></i></a> -->
											<!-- <a href="<?=site_url('inventory/edit_inventory/'.$inv->id)?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
												<a href="<?=site_url('inventory/cetak_detail_inventory/'.$inv->id)?>" class="btn btn-info btn-xs"><i class="fa fa-print"></i></a> -->
										</td>
					      	</tr>
					      <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <!-- <th class="text-center">No</th> -->
					      		<th class="text-center">Order Id</th>
										<th width="80px" class="text-center">Regional</th>
										<th width="80px" class="text-center">Kantor</th>
										<!-- <th width="80px" class="text-center">order Id</th> -->
										<th width="80px" class="text-center">Jumlah Dus</th>
										<th width="80px" class="text-center">ID dus</th>
										<th width="80px" class="text-center">Waktu</th>
										<th width="80px" class="text-center">Status Pengiriman</th>
										<th width="80px" class="text-center">Aksi</th>
										<!-- <th class="text-center">Tanggal</th> --><!-- 
										<th class="text-center">no_kk</th>
										<th class="text-center">jenis_kelamin</th>
										<th class="text-center">rt</th>
										<th class="text-center">status_perkawinan</th>
										<th class="text-center">tempat_lahir</th>
										<th class="text-center">tanggal_lahir</th>
										<th class="text-center">agama</th>
										<th class="text-center">pendidikan_terakhir</th>
										<th class="text-center">pekerjaan</th>
										<th class="text-center">kewarganegaraan</th> -->
										<!-- <th class="text-center">Asal</th>
										<th class="text-center">Destinasi</th> --><!-- 
										<th class="text-center">rw</th>
										<th class="text-center">dusun</th>
										<th class="text-center">kedudukan_dalam_keluarga</th>
										<th class="text-center">jkn</th>
										<th class="text-center">ibu</th>
										<th class="text-center">keterangan</th> -->
										<!-- <th width="57px" class="text-center">Jumlah</th> -->
										<!-- <th width="57px" class="text-center">Status</th> -->
										<!-- <th width="57px" class="text-center">Aksi</th> -->
                  </tr>
                  </tfoot>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->










<!-- <div class="content-wrapper"> -->
	<!-- Content Header (Page header) -->
    <!-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Penduduk</h1> -->
          <!-- </div>/.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Penduduk</li>
            </ol> -->
          <!-- </div>/.col -->
        <!-- </div>/.row -->
      <!-- </div>/.container-fluid -->
    <!-- </div> -->
    <!-- /.content-header -->
	<!-- Main content -->
    <!-- <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data</button>
    	<br><br>

    	<?php echo form_open('penduduk/search') ?>
    	<div class="input-group">
    		
    			<input type="text" name="keyword" class="form-control rounded" placeholder="Search"aria-label="Search" aria-describedby="search-addon" />
    			<button type="submit" class="btn btn-outline-primary">Cari</button>
    		
    	</div> -->

    	<!-- <div class="navbar-form navbar-right">
    		<?php echo form_open('penduduk/search') ?>
    			<input type="text" name="keyword" class="form-control" placeholder="Search">
    			<button type="submit" class="btn btn-success">Cari</button>
    		<?php echo form_close() ?>
    	</div> -->


      <!-- <table class="table">
      	<tr>
      		<th>No</th>
      		<th>NIK</th>
					<th>Nama</th> --><!-- 
					<th>no_kk</th>
					<th>jenis_kelamin</th>
					<th>rt</th>
					<th>status_perkawinan</th>
					<th>tempat_lahir</th>
					<th>tanggal_lahir</th>
					<th>agama</th>
					<th>pendidikan_terakhir</th>
					<th>pekerjaan</th>
					<th>kewarganegaraan</th> -->
					<!-- <th>alamat_lengkap</th> --><!-- 
					<th>rw</th>
					<th>dusun</th>
					<th>kedudukan_dalam_keluarga</th>
					<th>jkn</th>
					<th>ibu</th>
					<th>keterangan</th> -->
					<!-- <th>Aksi</th>
      	</tr>
      	<?php 
      		$no = 1;
      		foreach ($penduduk as $pdk) :
      	?>
      	<tr>
      		<td><?php echo $no++; ?></td>
      		<td><?php echo $pdk->nik ?></td>
					<td><?php echo $pdk->nama ?></td> --><!-- 
					<td><?php echo $pdk->no_kk ?></td>
					<td><?php echo $pdk->jenis_kelamin ?></td>
					<td><?php echo $pdk->rt ?></td>
					<td><?php echo $pdk->status_perkawinan ?></td>
					<td><?php echo $pdk->tempat_lahir ?></td>
					<td><?php echo $pdk->tanggal_lahir ?></td>
					<td><?php echo $pdk->agama ?></td>
					<td><?php echo $pdk->pendidikan_terakhir ?></td>
					<td><?php echo $pdk->pekerjaan ?></td>
					<td><?php echo $pdk->kewarganegaraan ?></td> -->
					<!-- <td><?php echo $pdk->alamat_lengkap ?></td> --><!-- 
					<td><?php echo $pdk->rw ?></td>
					<td><?php echo $pdk->dusun ?></td>
					<td><?php echo $pdk->kedudukan_dalam_keluarga ?></td>
					<td><?php echo $pdk->jkn ?></td>
					<td><?php echo $pdk->ibu ?></td>
					<td><?php echo $pdk->keterangan ?></td> -->
					<!-- <td><?php echo anchor('penduduk/detail_penduduk/'.$pdk->nik, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
					<td onclick="javascript: return confirm('Anda yakin akan menghapusnya?')"><?php echo anchor('penduduk/hapus/'.$pdk->nik, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
					<td><?php echo anchor('penduduk/edit_penduduk/'.$pdk->nik, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
      	</tr>
      <?php endforeach; ?>
      </table>
    </section> -->


	<!-- Modal -->
	<div class="modal fade" id="modal_form" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    	<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
	    	<!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">FORM INPUT DATA PENDUDUK</h3>
							<a href="<?php echo base_url('penduduk/index'); ?>" class="close" aria-label="close">&times;</a>
            </div>
          </div>
	      <!-- <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PENDUDUK</h5>
					<a href="<?php echo base_url('penduduk/index'); ?>" class="close" aria-label="close">&times;</a>
	      </div> -->
	      <div class="modal-body">
	      	<?php echo validation_errors(); ?>
	      	<form method="post" action="#" id="form">
	      		<!-- <input type="hidden" value="" name="nik"/>  -->
	        	<div class="form-group">
	        		<label>NIK</label>
	        		<input type="text" name="nik" class="form-control">
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Nama</label>
	        		<input type="text" name="nama" class="form-control">
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Nomor KK</label>
	        		<input type="text" name="no_kk" class="form-control">
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Jenis Kelamin</label>
	        		<!-- <input type="text" name="jenis_kelamin" class="form-control"> -->
	        		<select class="form-control" name="jenis_kelamin">
			  				<option value="">-- Pilih --</option>    
		            <option value="Laki-Laki">Laki-Laki</option>    
		            <option value="Perempuan">Perempuan</option>  
	            </select>
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>RT</label>
	        		<input type="text" name="rt" class="form-control">
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Status Perkawinan</label>
	        		<!-- <input type="text" name="status_perkawinan" class="form-control"> -->
	        		<select class="form-control" name="status_perkawinan">
			  				<option value="">-- Pilih --</option>    
		            <option value="Belum Kawin">Belum Kawin</option>    
		            <option value="Kawin">Kawin</option>     
		            <option value="Cerai Hidup">Cerai Hidup</option>     
		            <option value="Cerai Mati">Cerai Mati</option>  
	            </select>
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Tempat Lahir</label>
	        		<input type="text" name="tempat_lahir" class="form-control">
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Tanggal Lahir</label>
	        		<input type="date" name="tanggal_lahir" class="form-control">
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Agama</label>
	        		<!-- <input type="text" name="agama" class="form-control"> -->
	        		<select class="form-control" name="agama">   
			  				<option value="">-- Pilih --</option>    
		            <option value="Budha">Budha</option>      
		            <option value="Hindu">Hindu</option>
		            <option value="Islam">Islam</option>    
		            <option value="Katholik">Katholik</option>         
		            <option value="Konghucu">Konghucu</option>   
		            <option value="Kristen">Kristen</option>  
	            </select>
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Pendidikan Terakhir</label>
	        		<!-- <input type="text" name="pendidikan_terakhir" class="form-control"> -->
	        		<select class="form-control" name="pendidikan_terakhir"> 
			  				<option value="">-- Pilih --</option>    
		            <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH</option> 
		            <option value="BELUM TAMAT SD / SEDERAJAT">BELUM TAMAT SD / SEDERAJAT</option>   
		            <option value="TAMAT SD / SEDERAJAT">TAMAT SD / SEDERAJAT</option>    
		            <option value="SLTP / SEDERAJAT">SLTP / SEDERAJAT</option> 
		            <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>  
		            <option value="DIPLOMA I / II">DIPLOMA I / II</option>  
		            <option value="AKADEMI/ DIPLOMA III / S. MUDA">AKADEMI/ DIPLOMA III / S. MUDA</option>   
		            <option value="DIPLOMA IV / STRATA I">DIPLOMA IV / STRATA I</option>
		            <option value="STRATA II">STRATA II</option>  
		            <option value="STRATA III">STRATA III</option> 
	            </select>
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Pekerjaan</label>
	        		<!-- <input type="text" name="pekerjaan" class="form-control"> -->
	        		<select class="form-control" name="pekerjaan">   
			  				<option value="">-- Pilih --</option>    
		            <option value="Belum / Tidak Bekerja">Belum / Tidak Bekerja</option>      
		            <option value="Pegawai Negeri Sipil (PNS)">Pegawai Negeri Sipil (PNS)</option>  
		            <option value="Tentara Nasional Indonesia (TNI)">Tentara Nasional Indonesia (TNI)</option>      
		            <option value="Kepolisian RI">Kepolisian RI</option>  
		            <option value="Pegawai Swasta">Pegawai Swasta</option>      
		            <option value="Wiraswasta / Usahawan">Wiraswasta / Usahawan</option>  
		            <option value="Pelajar / Mahasiswa">Pelajar / Mahasiswa</option>      
		            <option value="Petani / Pekebun">Petani / Pekebun</option>  
		            <option value="Buruh">Buruh</option>      
	            </select>
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Kewarganegaraan</label>
	        		<!-- <input type="text" name="kewarganegaraan" class="form-control"> -->	        		
	        		<select class="form-control" name="kewarganegaraan">   
			  				<option value="">-- Pilih --</option>    
		            <option value="Warga Negara Indonesia">Warga Negara Indonesia</option>      
		            <option value="Warga Negara Asing">Warga Negara Asing</option>
	            </select>
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Alamat Lengkap</label>
	        		<input type="text" name="alamat_lengkap" class="form-control">
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>RW</label>
	        		<input type="text" name="rw" class="form-control">
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Dusun</label>
	        		<input type="text" name="dusun" class="form-control">
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Kedudukan Dalam Keluarga</label>
	        		<!-- <input type="text" name="kedudukan_dalam_keluarga" class="form-control"> -->
	        		<select class="form-control" name="kedudukan_dalam_keluarga">
			  			<option value="">-- Pilih --</option>    
    		            <option value="Kepala Keluarga">Kepala Keluarga</option>      
    		            <option value="Isteri">Isteri</option>  
    		            <option value="Anak">Anak</option>      
    		            <option value="Cucu">Cucu</option>  
    		            <option value="Famili Lain">Famili Lain</option>      
    		            <option value="Mertua">Mertua</option>  
    		            <option value="Orang Tua">Orang Tua</option>      
    		            <option value="Menantu">Menantu</option>  
    	            </select>
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>JKN</label>
	        		<!-- <input type="text" name="jkn" class="form-control"> -->
	        		<select class="form-control" name="jkn">  
			  				<option value="">-- Pilih --</option>     
		            <option value="Tidak">Tidak</option>      
		            <option value="Ya">Ya</option>
	            </select>
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Nama Ibu</label>
	        		<input type="text" name="ibu" class="form-control">
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Keterangan</label>
	        		<!-- <input type="text" name="keterangan" class="form-control"> -->
	        		<select class="form-control" name="keterangan">  
			  				<option value="">-- Pilih --</option>     
		            <option>Tidak</option>      
		            <option>Ya</option>
	            </select>
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="card-footer">
                <button type="reset" class="btn btn-warning" data-bs-dismiss="modal">Reset</button>
	        			<button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
            </div>
	        	

	        </form>
	      </div>
	    </div>
	  </div>
	</div>
	
</div>


<!-- <script type="text/javascript">
	function showModal(){
		$("#createCar").modal("show");

		$.ajax({
			url:'<?php echo base_url().'penduduk/tambah' ?>',
			type:"POST",
			data:[],
			dataType:'json',
			success : function(response){
				$("#response").html(response["html"]);
			}
		})
	}
</script> -->

<script type="text/javascript">
	var save_method; //for save method string
	var table;
	function add_person()
	{
	    save_method = 'add';
	    $('#form')[0].reset(); // reset form on modals
	    $('.form-group').removeClass('has-error'); // clear error class
	    $('.help-block').empty(); // clear error string
	    $('#modal_form').modal('show'); // show bootstrap modal
	    $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
	}

	function save()
	{
	    $('#btnSave').text('saving...'); //change button text
	    $('#btnSave').attr('disabled',true); //set button disable 
	    var url;
	 
	    if(save_method == 'add') {
	        url = "<?php echo site_url('penduduk/ajax_add')?>";
	    } else {
	        url = "<?php echo site_url('penduduk/ajax_update')?>";
	    }
	 
	    // ajax adding data to database
	    $.ajax({
	        url : url,
	        type: "POST",
	        data: $('#form').serialize(),
	        dataType: "JSON",
	        success: function(data)
	        {
	 
	            if(data.status) //if success close modal and reload ajax table
	            {
	                $('#modal_form').modal('hide');
                  window.location.reload();
	                // reload_table();
	            }
	            else
	            {
	                for (var i = 0; i < data.inputerror.length; i++) 
	                {
	                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
	                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
	                }
	            }
	            $('#btnSave').text('save'); //change button text
	            $('#btnSave').attr('disabled',false); //set button enable 
	 
	 
	        },
	        error: function (jqXHR, textStatus, errorThrown)
	        {
	            // $('#modal_form').modal('hide');
	            // alert('Silahkan Refresh Halaman');
              // $arr['success'] = true; ?>
              alert('Error adding / update data');
              $('#btnSave').text('save'); //change button text
              $('#btnSave').attr('disabled',false); //set button enable 
	 
	        }
	    });
	}
</script>

