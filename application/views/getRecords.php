 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Pemenuhan Stok Meterai KCU/KC</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    	<?= $this->session->flashdata('success'); ?>
    	<?= $this->session->flashdata('delete'); ?>
    	<?= $this->session->flashdata('update'); ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-body">
              	<?php echo form_open("Inventory/getRecords");?>
              	<select name="standard_id">
              		<option value="" disabled selected hidden>--Pilih Regional--</option>
              		<?php if (count($getStandards)): ?>
              			<?php foreach ($getStandards as $standard): ?>
              				<option value="<?php echo $standard->id_regional;?>" <?= set_select('standard_id', $standard->id_regional); ?>><?php echo $standard->regional;?></option>
              			<?php endforeach; ?>
              		<?php else: ?>
              		<?php endif; ?>
              	</select>

              	<!-- <select name="id_regional">
								    <option value="" disabled selected hidden>--Pilih Regional--</option>
								    <?php foreach ($getStandards as $standard): ?>
								        <option value="<?= $standard->id_regional; ?>" <?= set_select('id_regional', $standard->id_regional); ?>>
								            <?= $standard->regional; ?>
								        </option>
								    <?php endforeach; ?>
								</select> -->


              	<select name="gender">
              		<option value="" disabled selected hidden>--Pilih Status Stok--</option>
              		<?php if (count($getGender)): ?>
              			<?php foreach ($getGender as $gender): ?>
              				<option value="<?php echo $gender->id_status;?>" <?= set_select('gender', $gender->id_status); ?>><?php echo $gender->status;?></option>
              			<?php endforeach; ?>
              		<?php else: ?>
              		<?php endif; ?>
              	</select>
              	<?php echo form_submit(['name' => 'submit', 'value'=> 'Cari']);?>
              	<?php echo form_close();?>
              	<div id="resultContainer">
                <table id="example1" class="table table-bordered table-hover"> <!-- table-responsive -->
                  <thead>
                  <tr>
					      		<th width="5px" class="text-center">Id</th>
										<th width="80px" class="text-center">Regional</th>
										<th width="80px" class="text-center">Kantor</th>
										<th width="80px" class="text-center">Kode Kantor</th>
										<th width="80px" class="text-center">Jumlah Dus</th>
					      		<th width="5px" class="text-center">Order Id</th>
										<!-- <th width="80px" class="text-center">ID dus</th> -->
										<th width="80px" class="text-center">Estimasi Penerimaan(hari)</th>
										<th width="80px" class="text-center">Status Stok</th>
										<th width="80px" class="text-center">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php if(count($records)): 
                  	$no = 1;
					      		$tanggalSekarang = new DateTime();

					      		foreach ($records as $rec) :
					      			$tanggalDatabase = new DateTime($rec->Tanggal);
					      			$selisihTanggal = $tanggalSekarang->diff($tanggalDatabase);
					      			$selisihHari = $selisihTanggal->days;
					      			$waktu_sisa = ($rec->Waktu)-$selisihHari;
					      	?>
					      	<tr>
					      		<td><center><?php echo $no++; ?></center></td>
					      		<!-- <td><center><?php echo $inv->Id ?></center></td> -->
					      		<td><center><?php echo $rec->regional ?></center></td>
					      		<td><center><?php echo $rec->kantor ?></center></td>
					      		<td><center><?php echo $rec->no_pend ?></center></td>
					      		<td><center><?php echo $rec->Dus ?></center></td>
					      		<td><center>4000523A148<?php echo $rec->Order_Id ?></center></td>
					      		<!-- <td><?php echo "<font color='red'>$rec->Id_Dus</font>" ?></td> -->
					      		<!-- <td><?php echo "<font color='red'>aaaa</font>" ?><br><?php echo "<font color='green'>bbbb</font>" ?><br><?php echo "<font color='blue'>cccc</font>" ?></td> -->
					      		<td><center>
					      			<?php 
							      		if ($waktu_sisa <= 2) { ?>
							      		 	<?php echo "<font color='red'>$waktu_sisa</font>" ?>
							      		<?php }else{ ?>
							      		 	<?php echo $waktu_sisa ?>
							      		 <?php } 
							      	?>		</center>
					      		<td>
					      			<?php if ($rec->Status == "Selesai") { ?>
												<center><span class="badge bg-primary"><?php echo $rec->Status ?></span></center>
											<?php } else if ($rec->Status == "Permintaan Masuk") { ?>												
												<center><span class="badge bg-success"><?php echo $rec->Status ?></span></center>
											<?php } else if ($rec->Status == "Gagal") { ?>											
												<center><span class="badge bg-danger"><?php echo $rec->Status ?></span></center>
											<?php } else if ($rec->Status == "Dalam Perjalanan") { ?>											
												<center><span class="badge bg-secondary"><?php echo $rec->Status ?></span></center>
											<?php } ?>
										<td>                     
                      <?php if ($rec->Status == "Gagal") { ?>
                        
                      <?php } else { ?>                       
                        <center><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $rec->Order_Id; ?>"><i class="fa fa-flag"></i> Report</button></center>
                      <?php } ?>  
										</td>
					      	</tr>
                  <?php endforeach; ?>
                  </tbody>

              <?php else: ?>
              	<tr><td colspan="9"><center>Data tidak ditemukan!</center></td></tr>
              <?php endif; ?>
                  <!-- <tfoot>
                  <tr>
					      		<th class="text-center">Order Id</th>
										<th width="80px" class="text-center">Regional</th>
										<th width="80px" class="text-center">Kantor</th>
										<th width="80px" class="text-center">Kode Kantor</th>
										<th width="80px" class="text-center">Jumlah Dus</th> -->
										<!-- <th width="80px" class="text-center">ID dus</th> -->
										<!-- <th width="80px" class="text-center">Estimasi Penerimaan(hari)</th>
										<th width="80px" class="text-center">Status Stok</th>
										<th width="80px" class="text-center">Aksi</th>
                  </tr>
                  </tfoot> -->
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




              	



	<!-- Modal -->
	<?php $no = 0;
	foreach ($records as $rec) : 
		$no++;

		?>
	<div class="modal fade" id="exampleModal<?php echo $rec->Order_Id; ?>" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	    	<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
	    	<!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">FORM REPORT</h3>
							<a href="<?php echo base_url('inventory/index'); ?>" class="close" aria-label="close">&times;</a>
            </div>
          </div>
	      <!-- <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PENDUDUK</h5>
					<a href="<?php echo base_url('inventory/index'); ?>" class="close" aria-label="close">&times;</a>
	      </div> -->
	      <div class="modal-body">
	      	<?php echo form_open_multipart('Inventory/proses_edit_data/'.$rec->Order_Id);?>
	      	<!-- <form method="post" action="#" id="form"> -->
	      		<input type="hidden" name="Order_Id" value="<?php echo $rec->Order_Id; ?>">
	      		<!-- <input type="hidden" value="" name="nik"/>  -->
                <div class="form-group">
                  <label>Berita Acara</label><br>
                  <!-- <input type="text" id="Kendala" name="Kendala"> -->
                  <textarea name="Berita_Acara" style="width: 467px; height: 100px;" placeholder="Tuliskan berita acara..." required/></textarea>
                  <!-- <select name="Kendala" class="form-control">
										<option <?php if($inv->Kendala == "kendala_1"){ echo 'selected="selected"'; } ?> >kendala_1</option>
										<option <?php if($inv->Kendala == "kendala_2"){ echo 'selected="selected"'; } ?> >kendala_2</option>
										<option <?php if($inv->Kendala == "kendala_3"){ echo 'selected="selected"'; } ?> >kendala_3</option>
										<option <?php if($inv->Kendala == "kendala_4"){ echo 'selected="selected"'; } ?> >kendala_4</option>
									</select> -->
                </div>
                <!-- <div class="form-group">
                  <label>Tindak Lanjut</label>
                  <select name="Tindak_lanjut" class="form-control">
										<option <?php if($inv->Tindak_lanjut == "tindak_lanjut_1"){ echo 'selected="selected"'; } ?> >tindak_lanjut_1</option>
										<option <?php if($inv->Tindak_lanjut == "tindak_lanjut_2"){ echo 'selected="selected"'; } ?> >tindak_lanjut_2</option>
										<option <?php if($inv->Tindak_lanjut == "tindak_lanjut_3"){ echo 'selected="selected"'; } ?> >tindak_lanjut_3</option>
										<option <?php if($inv->Tindak_lanjut == "tindak_lanjut_4"){ echo 'selected="selected"'; } ?> >tindak_lanjut_4</option>
									</select>
                </div> -->
	        	<div class="card-footer">
                <button type="reset" class="btn btn-warning" data-bs-dismiss="modal">Reset</button>
	        			<button type="submit" class="btn btn-primary">Simpan</button>
            </div>
	        	

	        <?php echo form_close();?>
	      </div>
	    </div>
	  </div>
	</div>
<?php endforeach; ?>
	
</div>