<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
 <div class="row">
  <div class="col-sm-4">
   <h2>Form Tabel Penyewa</h2>
  </div>
  <div class="col-sm-8">
   <form method="post" class="input-group">
    <input type="text" name="kCari" placeholder="Ketik NIK" class="form-control">
	<input type="submit" name="bCari" value="Go" class="btn btn-success">
   </form>
  </div>
 </div>
 <div class="row">
  <form action="" method="post" class="col-sm-5">
    <div class="mb-3 mt-3">
      <label >NIK:</label>
      <input type="text" class="form-control" placeholder="Enter nik" name="nik">
    </div>
    <div class="mb-3">
      <label >Nama:</label>
      <input type="text" class="form-control" placeholder="Enter nama" name="nama">
    </div>
    <div class="mb-3 mt-3">
      <label >No HP:</label>
      <input type="text" class="form-control" placeholder="Enter no hp" name="nohp">
    </div>
	  <div class="mb-3 mt-3">
      <label>alamat asal:</label>
      <input type="text" class="form-control" placeholder="Enter alamat asal" name="alamatasal">
    </div>
    <div class="mb-3 mt-3">
      <label>kode unit:</label>
      <input type="text" class="form-control" placeholder="Enter kode unit" name="kodeunit">
    </div>
    <div class="mb-3 mt-3">
      <label>tanggal masuk:</label>
      <input type="date" class="form-control" placeholder="Enter tanggal masuk" name="tanggalmasuk">
    </div>
    <div class="mb-3 mt-3">
      <label>tanggal keluar:</label>
      <input type="date" class="form-control" placeholder="Enter tanggal keluar" name="tanggalkeluar">
    </div>
    <div class="mb-3 mt-3">
      <label>besar pembayaran:</label>
      <input type="text" class="form-control" placeholder="Enter besar pembayaran" name="besarpembayaran">
    </div>
    <button type="submit" class="btn btn-primary" name="tombolSimpan">Simpan</button>
  </form>
  <div class="col-sm-7">
   <?php
   if (isset($_POST['bCari'])) {
	   $kCari=$_POST['kCari'];
	   $sqlcari="select * from penyewa where NIK like '%".$kCari."%'";
	   $kon=mysqli_connect("localhost","root","root","kosan");
	   $qcari=mysqli_query($kon,$sqlcari);
	   $r=mysqli_fetch_array($qcari);
	   
   ?>
   <h2>Daftar Penyewa yang ditemukan : </h2>
   <table class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th>NIK</th>
        <th>Nama</th>
        <th>HP</th>
        <th>Alamat</th>
        <th>Kode Unit</th>
        <th>Tanggal Masuk</th>
        <th>Tanggal Keluar</th>
        <th>Bayar</th>
      </tr>
    </thead>
    <tbody>
	  <?php do { ?>
      <tr>
        <td><?php echo $r['NIK'];?></td>
        <td><?php echo $r['Nama'];?></td>
        <td><?php echo $r['NoHP'];?></td>
		    <td><?php echo $r['AlamatAsal'];?></td>
        <td><?php echo $r['KodeUnit'];?></td>
        <td><?php echo $r['TanggalMasuk'];?></td>
        <td><?php echo $r['TanggalKeluar'];?></td>
		    <td><?php echo $r['BesarPembayaran'];?></td>
      </tr>
	  <?php } while($r=mysqli_fetch_array($qcari)); ?>
    </tbody>
</table>
<?php } //end if isset bCari ?>
  </div>
 </div>
  <?php if (isset($_POST['tombolSimpan'])) {
	  $kon=mysqli_connect("localhost","root","","kostan");
	  $sql="insert into penyewa (NIK,Nama,NoHP,AlamatAsal,KodeUnit,TanggalMasuk,TanggalKeluar,BesarPembayaran) values ('".$_POST['nik']."','".$_POST['nama']."','".$_POST['nohp']."','".$_POST['alamatasal']."','".$_POST['kodeunit']."','".$_POST['tanggalmasuk']."','".$_POST['tanggalkeluar']."','".$_POST['besarpembayaran']."')";
	  $q=mysqli_query($kon,$sql);
  }
  ?>
</div>

</body>
</html>
