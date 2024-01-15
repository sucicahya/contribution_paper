<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
</head>
<body>
  <img src="assets/img/logo.jpg" style="position: absolute; width: 60px; height: auto;">
  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
          PEMERINTAH KABUPATEN SRAGEN
          <br>KECAMATAN : GONDANG
          <br>KABUPATENN : SRAGEN
        </span>
      </td>
    </tr>
  </table>

  <hr class="line-title"> 
  <p align="center">
    LAPORAN DATA MAHASISWA <br>
    <b>Angkatan 2018</b>
  </p>
  <table class="table table-bordered">

    <tr>
    	<td>Nama</td>
    	<td>:</td>
    	<!-- <td><?php echo $ket->nama ?></td> -->
    </tr>
    <tr>
    	<td>Tempat & Tanggal Lahir</td>
    	<td>:</td>
    	<!-- <td><?php echo $ket->tempat_tanggal_lahir ?></td> -->
    </tr>
    <tr>
    	<td>Kewarganegaraan & Agama</td>
    	<td>:</td>
    	<!-- <td><?php echo $ket->kewarganegaraan ?> & <?php echo $ket->agama ?></td> -->
    </tr>
    <tr>
    	<td>Pekerjaan</td>
    	<td>:</td>
    	<!-- <td><?php echo $ket->agama ?></td> -->
    </tr>
    <tr>
    	<td>Tempat Tinggal</td>
    	<td>:</td>
    	<!-- <td><?php echo $ket->alamat_lengkap ?></td> -->
    </tr>
    <tr>
    	<td>Kabupaten</td>
    	<td>:</td>
    	<!-- <td><?php echo $ket->kabupaten ?></td> -->
    </tr>
    <tr>
    	<td>Surat Bukti Diri</td>
    	<td>:</td>
    	<!-- <td><?php echo $ket->nik ?></td> -->
    </tr>
    <tr>
    	<td>Status Perkawinan</td>
    	<td>:</td>
    	<!-- <td><?php echo $ket->status_perkawinan ?></td> -->
    </tr>
    <tr>
    	<td>Keperluan</td>
    	<td>:</td>
    	<!-- <td><?php echo $ket->keperluan ?></td> -->
    </tr>
    <tr>
    	<td>Berlaku Mulai</td>
    	<td>:</td>
    	<!-- <td><?php echo $ket->berlaku_mulai ?></td> -->
    </tr>
    <tr>
    	<td>Keterangan lain-lain*)</td>
      <!-- <th>#</th>
      <th>Nim</th>
      <th>Nama</th>
      <th>Jurusan</th> -->
    </tr>
    <?php $no = 1; foreach ($data as $row): ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $row['nim'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['jurusan'] ?></td>
      </tr>
    <?php endforeach ?>
  </table>

</body>
</html>