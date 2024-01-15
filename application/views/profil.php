 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Profil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <?= $this->session->flashdata('update'); ?>
      <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data</button> -->
      <!-- <br>

      <?php echo form_open('profil/search') ?>
      <div class="input-group">
        
          <input type="text" name="keyword" class="form-control rounded" placeholder="Search"aria-label="Search" aria-describedby="search-addon" />
          <button type="submit" class="btn btn-outline-primary">Cari</button>
        
      </div> -->

      <!-- <div class="navbar-form navbar-right">
        <?php echo form_open('profil/search') ?>
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
                    <th class="text-center">Profil</th>
                    <th class="text-center">Visi</th>
                    <th class="text-center">Misi</th>
                    <th class="text-center">Letak</th>
                    <!-- <th class="text-center">Gambar</th> -->
                    <th width="57px" class="text-center">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                    foreach ($profil as $prf) :
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo substr($prf->tentang, 0, 100); ?><br><a href="<?php echo base_url('profil/detail_profil/'.$prf->id) ?>">selengkapnya...</a></td>
                    <td><?php echo substr($prf->visi, 0, 100); ?><br><a href="<?php echo base_url('profil/detail_profil/'.$prf->id) ?>">selengkapnya...</a></td>
                    <td><?php echo substr($prf->misi, 0, 100); ?><br><a href="<?php echo base_url('profil/detail_profil/'.$prf->id) ?>">selengkapnya...</a></td>
                    <td><?php echo substr($prf->letak, 0, 28); ?><br><a href="<?php echo base_url('profil/detail_profil/'.$prf->id) ?>">selengkapnya...</a></td>
                    <!-- <td><?php echo $prf->gambar ?></td> -->
                    <td>
                      <a href="<?=site_url('profil/edit_profil/'.$prf->id)?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Profil</th>
                    <th class="text-center">Visi</th>
                    <th class="text-center">Misi</th>
                    <th class="text-center">Letak</th>
                    <!-- <th class="text-center">Gambar</th> -->
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
            <h1 class="m-0">Profil Desa</h1>
          </div> --><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profil</li>
            </ol>
          </div> --><!-- /.col -->
        <!-- </div>/.row -->
      <!-- </div>/.container-fluid -->
    <!-- </div> -->
    <!-- /.content-header -->
	<!-- Main content -->
    <!-- <section class="content">
      <table class="table">
      	<tr>
      		<th>No</th>
      		<th>Profil</th>
      		<th>Visi</th>
      		<th>Misi</th>
      		<th>Letak</th>
      		<th>Gambar</th>
					<th>Aksi</th>
      	</tr>
      	<?php 
      		$no = 1;
      		foreach ($profil as $prf) :
      	?>
      	<tr>
      		<td><?php echo $no++; ?></td>
      		<td><?php echo substr($prf->tentang, 0, 100); ?><br><a href="<?php echo base_url('profil/edit_profil/'.$prf->id) ?>">selengkapnya...</a></td>
      		<td><?php echo substr($prf->visi, 0, 100); ?><br><a href="<?php echo base_url('profil/edit_profil/'.$prf->id) ?>">selengkapnya...</a></td>
      		<td><?php echo substr($prf->misi, 0, 100); ?><br><a href="<?php echo base_url('profil/edit_profil/'.$prf->id) ?>">selengkapnya...</a></td>
      		<td><?php echo substr($prf->letak, 0, 28); ?><br><a href="<?php echo base_url('profil/edit_profil/'.$prf->id) ?>">selengkapnya...</a></td>
      		<td><?php echo $prf->gambar ?></td>
					<td><?php echo anchor('profil/edit_profil/'.$prf->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
      	</tr>
      <?php endforeach; ?>
      </table>
    </section>
	
</div> -->
