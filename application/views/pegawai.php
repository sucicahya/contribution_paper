


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $hitung_penduduk ?></h3>

                <p>Jumlah Penduduk</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?= base_url('penduduk')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $hitung_aset ?></h3>

                <p>Total Aset</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= base_url('aset')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                 <?php 
          foreach ($hitung_pendapatan as $hp) :
        ?>
                <h3><?= $hp->pemasukan ?></h3><?php endforeach; ?>
                <p>Sumber Pendapatan Desa</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?= base_url('apbd')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                 <?php 
          foreach ($hitung_belanja as $hb) :
        ?>
                <h3><?= $hb->pengeluaran ?></h3><?php endforeach; ?>

                <p>Belanja Desa</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?= base_url('apbd')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>


        <!-- <div class="row">
          <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $hitung_kelahiran ?></h3>

                <p>Total Surat Kelahiran</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?= base_url('admin_kelahiran')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $hitung_kematian ?></h3>

                <p>Total Surat Kematian</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= base_url('admin_kematian')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $hitung_jejaka_duda ?></h3>

                <p>Total Surat Jejaka/Duda</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?= base_url('admin_jejaka_duda')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $hitung_perawan_janda ?></h3>

                <p>Total Surat Perawan/Janda</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?= base_url('admin_perawan_janda')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
        <!-- </div> -->


        <!-- <div class="row">
          <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $hitung_keterangan ?></h3>

                <p>Total Surat Keterangan</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?= base_url('admin_keterangan')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $hitung_pindah_kelurahan ?></h3>

                <p>Total Surat Pindah Kelurahan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= base_url('admin_pindah_kelurahan')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $hitung_pindah_kecamatan ?></h3>

                <p>Total Surat Pindah Kecamatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?= base_url('admin_pindah_kecamatan')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6"> -->
            <!-- small box -->
            <!-- <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $hitung_pindah_kabupaten ?></h3>

                <p>Total Surat Pindah Kabupaten</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?= base_url('admin_pindah_kabupaten')?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
        <!-- </div> -->
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            

            <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="sticky-top mb-3">
              <div class="card">
                  <div id="external-events"></br>
                    <form action="<?php echo base_url('pegawai/rentang'); ?>" method="get" align="center">
                      <?php 
                      if (empty($startdate) && empty($enddate)) { ?>
                        <input type="date" name="startdate" placeholder="Start Date" />
                        <input type="date" name="enddate" placeholder="End Date" value="<?php echo date("Y-m-d");?>"/> 
                        <button type="submit" class="btn btn-primary">Cari</button>
                        <button type="submit" formaction="pegawai/cetak" class="btn btn-info" title="Rekap Berdasar Jenis">Cetak Jenis</button>
                        <button type="submit" formaction="pegawai/cetakk" class="btn btn-info" title="Rekap Berdasar Bulan">Cetak Bulan</button></br></br>
                      <?php } else{
                      ?>
                    <input type="date" name="startdate" placeholder="Start Date" value="<?php echo date($startdate);?>" />
                    <input type="date" name="enddate" placeholder="End Date" value="<?php echo date($enddate);?>" />
                    <button type="submit" class="btn btn-primary">Cari</button>
                    <button type="submit" formaction="cetak" class="btn btn-info" title="Rekap Berdasar Jenis">Cetak Jenis</button>
                    <button type="submit" formaction="cetakk" class="btn btn-info" title="Rekap Berdasar Bulan">Cetak Bulan</button></br></br>
                    <?php } 
                      ?> 
                  </div>
                </div>
              </div>
            </div>
          <div class="col-md-6">
            <div class="sticky-top mb-3">
              <div class="card">
                <!-- <div class="card-body"> -->
                  <!-- the events -->
                  <div id="external-events"></br>
                    
<canvas id="myChart"></canvas>
    <?php
    //Inisialisasi nilai variabel awal
    $nama_jurusan= "";
    $jumlah=null;
    foreach ($apbd as $item)
    {
        $jur=$item->jenis_surat;
        $nama_jurusan .= "'$jur'". ", ";
        $jum=$item->total;
        $jumlah .= "$jum". ", ";
    }
    ?>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar', // line
        // The data for our dataset
        data: {
            labels: [<?php echo $nama_jurusan; ?>],
            datasets: [{
                label:'Jumlah Surat',
                backgroundColor: ['rgb(229, 204, 255)', 'rgb(229, 204, 255)', 'rgb(229, 204, 255)', 'rgb(229, 204, 255)', 'rgb(229, 204, 255)', 'rgb(229, 204, 255)', 'rgb(229, 204, 255)', 'rgb(229, 204, 255)'],
                borderColor: ['rgb(102, 0, 204)', 'rgb(102, 0, 204)', 'rgb(102, 0, 204)', 'rgb(102, 0, 204)', 'rgb(102, 0, 204)', 'rgb(102, 0, 204)', 'rgb(102, 0, 204)', 'rgb(102, 0, 204)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>

                  </div>
                <!-- </div> -->
                <!-- /.card-body -->
              </div>
              
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <!-- <div class="card card-primary">
              <div class="card-body p-0"> -->
                <!-- THE CALENDAR -->
                <!-- <div id="calendar"></div>
              </div> -->
              <!-- /.card-body -->
            <!-- </div> -->
            <div class="sticky-top mb-3">
              <div class="card">
                <!-- <div class="card-body"> -->
                  <!-- the events -->
                  <div id="external-events"></br>
                    
<canvas id="myChartt"></canvas>
    <?php
    //Inisialisasi nilai variabel awal
    $nama_jurusan= "";
    $jumlah=null;
    foreach ($apbdd as $item)
    {
        $jur=$item->bulan;
        $nama_jurusan .= "'$jur'". ", ";
        $jum=$item->total;
        $jumlah .= "$jum". ", ";
    }
    ?>
    <script>
    var ctxx = document.getElementById('myChartt').getContext('2d');
    var chart = new Chart(ctxx, {
        // The type of chart we want to create
        type: 'line',
        // The data for our dataset
        data: {
            labels: [<?php echo $nama_jurusan; ?>],
            datasets: [{
                label:'Jumlah Surat',
                backgroundColor: "#e6d8ed",
                borderColor: "#850cf0",
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
</form>

                  </div>
                <!-- </div> -->
                <!-- /.card-body -->
              </div>
              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

     <!--  <form action="<?php echo base_url('pegawai'); ?>" method="get">
                    <input type="text" class="date" name="startdate" placeholder="Start Date" />
                    <input type="text" class="date" name="enddate" placeholder="End Date" />
                    <button type="submit" class="btn btn-primary">Cari</button>
                      <table id="example1" class="table table-bordered table-hover"> --> <!-- table-responsive -->
                  <!-- <thead>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Uraian</th>
                      <th class="text-center">Pemasukan</th>
                      <th class="text-center">Pengeluaran</th> -->
                      <!-- <th class="text-center">Tanggal</th> -->
                    <!-- </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($apbd as $apb) :
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $apb->jenis_surat ?></td>
                      <td><?php echo $apb->tanggal_ajuan ?></td>
                      <td><?php echo $apb->total ?></td> -->
                      <!-- <td><?php echo $apb->pengeluaran ?></td>
                      <td><?php echo $apb->tanggal ?></td> -->
                    <!-- </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Uraian</th>
                      <th class="text-center">Pemasukan</th>
                      <th class="text-center">Pengeluaran</th> -->
                      <!-- <th class="text-center">Tanggal</th> -->
                    <!-- </tr>
                  </tfoot>
                </table>
                  </form> -->

            
          </section></div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</body>
</html>