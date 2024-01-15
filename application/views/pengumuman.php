 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pengumuman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengumuman</li>
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
      <button class="btn btn-primary" onclick="add_person()" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data</button>
    	<!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data</button> -->
    	<br><br>

    	<!-- <?php echo form_open('pengumuman/search') ?>
    	<div class="input-group">
    		
    			<input type="text" name="keyword" class="form-control rounded" placeholder="Search"aria-label="Search" aria-describedby="search-addon" />
    			<button type="submit" class="btn btn-outline-primary">Cari</button>
    		
    	</div> -->

    	<!-- <div class="navbar-form navbar-right">
    		<?php echo form_open('pengumuman/search') ?>
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
                <table id="example1" class="table table-bordered table-hover"> <!-- table-responsive -->
                  <thead>
                  <tr>
					          <th class="text-center">No</th>
					      		<th class="text-center">Judul</th>
										<th class="text-center">Deskripsi</th>
										<th class="text-center">Gambar</th>
										<th width="57px" class="text-center">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
					      		$no = 1;
					      		foreach ($pengumuman as $pgm) :
					      	?>
					      	<tr>
					      		<td><?php echo $no++; ?></td>
					      		<td><?php echo $pgm->judul ?></td>
										<td><?php echo substr($pgm->deskripsi,  0, 100); ?><br><a href="<?php echo base_url('pengumuman/detail_pengumuman/'.$pgm->id) ?>">baca selengkapnya...</a></td></td>
										<td><?php echo $pgm->gambar ?></td>
										


										<td>
											<!-- <a href="<?=site_url('pengumuman/detail_pengumuman/'.$pgm->id)?>" class="btn btn-info btn-xs"><i class="fa fa-search-plus"></i></a> -->
											<a href="<?=site_url('pengumuman/hapus/'.$pgm->id)?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda yakin akan menghapusnya?')"><i class="fa fa-trash"></i></a>
											<a href="<?=site_url('pengumuman/edit_pengumuman/'.$pgm->id)?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
										</td>
					      	</tr>
					      <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th class="text-center">No</th>
					      		<th class="text-center">Judul</th>
										<th class="text-center">Deskripsi</th>
										<th class="text-center">Gambar</th>
										<th width="57px" class="text-center">Aksi</th>
                  </tr>
                  </tfoot>
                </table>
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
            <h1 class="m-0">Data Pengumuman</h1>
          </div> --><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pengumuman</li>
            </ol>
          </div> --><!-- /.col -->
        <!-- </div>/.row -->
      <!-- </div>/.container-fluid -->
    <!-- </div> -->
    <!-- /.content-header -->
	<!-- Main content -->
    <!-- <section class="content">
    	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data</button>
    	<br><br>

    	<?php echo form_open('pengumuman/search') ?>
    	<div class="input-group">
    		
    			<input type="text" name="keyword" class="form-control rounded" placeholder="Search"aria-label="Search" aria-describedby="search-addon" />
    			<button type="submit" class="btn btn-outline-primary">Cari</button>
    		
    	</div>
      <?php echo form_close() ?> -->

    	<!-- <div class="navbar-form navbar-right">
    		<?php echo form_open('pengumuman/search') ?>
    			<input type="text" name="keyword" class="form-control" placeholder="Search">
    			<button type="submit" class="btn btn-success">Cari</button>
    		<?php echo form_close() ?>
    	</div> -->


      <!-- <table class="table">
      	<tr>
      		<th>No</th>
      		<th>Judul</th>
					<th>Deskripsi</th>
					<th>Gambar</th>
					<th>Aksi</th>
      	</tr>
      	<?php 
      		$no = 1;
      		foreach ($pengumuman as $pgm) :
      	?>
      	<tr>
      		<td><?php echo $no++; ?></td>
      		<td><?php echo $pgm->judul ?></td>
					<td><?php echo substr($pgm->deskripsi,  0, 100); ?><br><a href="<?php echo base_url('pengumuman/detail_pengumuman/'.$pgm->id) ?>">baca selengkapnya...</a></td></td>
					<td><?php echo $pgm->gambar ?></td>
					<td><?php echo anchor('pengumuman/detail_pengumuman/'.$pgm->id, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div>') ?></td>
					<td onclick="javascript: return confirm('Anda yakin akan menghapusnya?')"><?php echo anchor('pengumuman/hapus/'.$pgm->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
					<td><?php echo anchor('pengumuman/edit_pengumuman/'.$pgm->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
      	</tr>
      <?php endforeach; ?>
      </table>
    </section> -->


	<!-- Modal -->
  <div class="modal fade" id="modal_form" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
	  <div class="modal-dialog">
	    <div class="modal-content">
	    	<div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">FORM INPUT DATA PENGUMUMAN</h3>
						<a href="<?php echo base_url('pengumuman/index'); ?>" class="close" aria-label="close">&times;</a>
        	</div>
      	</div>
	      <!-- <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA PENGUMUMAN</h5>
					<a href="<?php echo base_url('pengumuman/index'); ?>" class="close" aria-label="close">&times;</a>
	      </div> -->
	      <div class="modal-body">
	      	<form method="post" action="#" id="form">
	      	<!-- <?php echo form_open_multipart('pengumuman/tambah_aksi'); ?> -->
	        
	        	<!-- <div class="form-group">
	        		<label>id</label>
	        		<input type="text" name="id" class="form-control">
	        		
	        	</div> -->
	        	<div class="form-group">
	        		<label>Judul</label>
	        		<input type="text" name="judul" class="form-control">
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label>Deskripsi</label>
	        		<input type="text" name="deskripsi" class="form-control">
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>
	        	<div class="form-group">
	        		<label id="label-photo">Gambar</label>
	        		<input type="file" name="gambar" class="form-control">
	        		<span class="help-block" style="color:red; font-size: 70%"></span>
	        	</div>    		
	        	<div class="card-footer">
                <button type="reset" class="btn btn-warning" data-bs-dismiss="modal">Reset</button>
	        			<!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
	        			<button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
            </div>

	        
	        <!-- <?php echo form_close(); ?> -->
	      </form>
	      </div>
	    </div>
	  </div>
	</div>
	
</div>



<script type="text/javascript">
  var save_method; //for save method string
  var table;
  var base_url = '<?php echo base_url();?>';
  function add_person()
  {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty(); // clear error string
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
 
	    // $('#photo-preview').hide(); // hide photo preview modal
 
  	  $('#label-photo').text('Gambar'); // label photo upload
  }

  function save()
  {
      $('#btnSave').text('saving...'); //change button text
      $('#btnSave').attr('disabled',true); //set button disable 
      var url;
   
      if(save_method == 'add') {
          url = "<?php echo site_url('pengumuman/ajax_add')?>";
      } else {
          url = "<?php echo site_url('pengumuman/ajax_update')?>";
      }
   
      // ajax adding data to database
      var formData = new FormData($('#form')[0]);
      $.ajax({
          url : url,
          type: "POST",
          data: formData,
	        contentType: false,
	        processData: false,
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