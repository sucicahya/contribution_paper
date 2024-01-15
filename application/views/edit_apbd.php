<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit APBDes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">APBDes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- SELECT2 EXAMPLE -->
    <section class="content">
    	<?php foreach ($apbd as $apb){ ?>
			<form action="<?php echo base_url().'apbd/update_apbd/'.$apb->id; ?>" method="post">
      <div class="container-fluid">
        <div class="card card-default">
          
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              	<div class="form-group">
									<label>ID</label>
									<input type="hidden" name="id" class="form-control" value="<?php echo $apb->id ?>">
									<input type="text" name="id" disabled class="form-control" value="<?php echo $apb->id ?>">
                </div>
                <div class="form-group">
                  <label>Uraian</label>
                  <input type="text" name="uraian" class="form-control" value="<?php echo $apb->uraian ?>">
                  <small><font color="red"><i><?php echo form_error('uraian'); ?></i></font></small>
                </div>
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" name="tanggal" class="form-control" value="<?php echo $apb->tanggal ?>">
                  <small><font color="red"><i><?php echo form_error('tanggal'); ?></i></font></small>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Pemasukan</label>
                  <input type="text" name="pemasukan" class="form-control" value="<?php echo $apb->pemasukan ?>">
                  <small><font color="red"><i><?php echo form_error('pemasukan'); ?></i></font></small>
                </div>
                <div class="form-group">
                 <label>Pengeluaran</label>
                 <input type="text" name="pengeluaran" class="form-control" value="<?php echo $apb->pengeluaran ?>">
                  <small><font color="red"><i><?php echo form_error('pengeluaran'); ?></i></font></small>
                </div>
              </div>              
        <!-- /.col-->
      			</div>
						<a href="<?php echo base_url('apbd/index'); ?>" class="btn btn-info">Kembali</a>
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
		<?php foreach ($apbd as $apb){ ?>
			<form action="<?php echo base_url().'apbd/update_apbd'; ?>" method="post">
				<div> 
					<label>ID</label>
					<input type="hidden" name="id" class="form-control" value="<?php echo $apb->id ?>">
					<input type="text" name="id" disabled class="form-control" value="<?php echo $apb->id ?>">
				</div>
				<div> 
					<label>Sumber Pendapatan Desa</label>
					<input type="text" name="sumber_pendapatan_desa" class="form-control" value="<?php echo $apb->sumber_pendapatan_desa ?>">
				</div>
				<div> 
					<label>PAD (Pendapatan Asli Desa)</label>
					<input type="text" name="pendapatan_asli_desa" class="form-control" value="<?php echo $apb->pendapatan_asli_desa ?>">
				</div>
				<div> 
					<label>ADD (Alokasi Dana Desa)</label>
					<input type="text" name="alokasi_dana_desa" class="form-control" value="<?php echo $apb->alokasi_dana_desa ?>">
				</div>
				<div> 
					<label>DD/DDS (Dana Desa)</label>
					<input type="text" name="dana_desa" class="form-control" value="<?php echo $apb->dana_desa ?>">
				</div>
				<div> 
					<label>PBH (Bagi Hasil Pajak Desa Dan Retribusi)</label>
					<input type="text" name="pbh" class="form-control" value="<?php echo $apb->pbh ?>">
				</div>
				<div> 
					<label>PBK (Bantuan Keuangan Kabupaten Kota)</label>
					<input type="text" name="pbk" class="form-control" value="<?php echo $apb->pbk ?>">
				</div>
				<div> 
					<label>PBP (Bantuan Keuangan Provinsi)</label>
					<input type="text" name="pbp" class="form-control" value="<?php echo $apb->pbp ?>">
				</div>
				<div> 
					<label>Pendapatan Lain-Lain</label>
					<input type="text" name="pendapatan_lain_lain" class="form-control" value="<?php echo $apb->pendapatan_lain_lain ?>">
				</div>
				<div> 
					<label>Belanja Desa</label>
					<input type="text" name="belanja_desa" class="form-control" value="<?php echo $apb->belanja_desa ?>">
				</div>
				<div> 
					<label>Bidang Pemerintahan</label>
					<input type="text" name="pemerintahan" class="form-control" value="<?php echo $apb->pemerintahan ?>">
				</div>
				<div> 
					<label>Bidang Pembangunan</label>
					<input type="text" name="pembangunan" class="form-control" value="<?php echo $apb->pembangunan ?>">
				</div>
				<div> 
					<label>Bidang Pembinaan Masyarakat</label>
					<input type="text" name="pembinaan" class="form-control" value="<?php echo $apb->pembinaan ?>">
				</div>
				<div> 
					<label>Bidang Pemberdayaan Masyarakat</label>
					<input type="text" name="pemberdayaan" class="form-control" value="<?php echo $apb->pemberdayaan ?>">
				</div>
				<div> 
					<label>Bidang Penanggulangan Bencana, Keadaan Mendesak</label>
					<input type="text" name="penanggulangan_mendesak" class="form-control" value="<?php echo $apb->penanggulangan_mendesak ?>">
				</div>
				<div> 
					<label>Pembiayaan Dari Silpa Tahun Lalu</label>
					<input type="text" name="pembiayaan_silpa_tahun_lalu" class="form-control" value="<?php echo $apb->pembiayaan_silpa_tahun_lalu ?>">
				</div>


				<a href="<?php echo base_url('apbd/index'); ?>" class="btn btn-info">Kembali</a>
				<button type="reset" class="btn btn-warning">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>


			</form>
		<?php } ?>
	</section>
	
</div> -->