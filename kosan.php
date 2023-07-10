<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Kosan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
 <div class="row">
  <div class="col-sm-4">
   <h2>Form Tabel Kosan</h2>
  </div>
  <div class="col-sm-8">
   <form method="post" class="input-group">
    <input type="text" name="kCari" placeholder="Ketik kode unit" class="form-control">
	<input type="submit" name="bCari" value="Go" class="btn btn-success">
   </form>
  </div>
 </div>
 <div class="row">
  <form action="" method="post" class="col-sm-5">
    <div class="mb-3 mt-3">
      <label for="kodeunit">Kode Unit:</label>
      <input type="text" class="form-control" placeholder="Enter kode unit" name="kodeunit">
    </div>
    <div class="mb-3">
      <label for="NamaUnit">Nama unit:</label>
      <input type="text" class="form-control" placeholder="Enter nama unit" name="namaunit">
    </div>
    <div class="mb-3 mt-3">
      <label for="hargasewa">Harga sewa:</label>
      <input type="text" class="form-control" placeholder="Enter harga" name="hargasewa">
    </div>
	<div class="mb-3 mt-3">
      <label for="statuskost">status kost:</label>
      <input type="text" class="form-control" placeholder="Enter status kost" name="status">
    </div>
    <button type="submit" class="btn btn-primary" name="tombolSimpan">Simpan</button>
  </form>
  <div class="col-sm-7">
   <?php
   if (isset($_POST['bCari'])) {
	   $kCari=$_POST['kCari'];
	   $sqlcari="select * from rumah_kost where KodeUnit like '%".$kCari."%'";
	   $kon=mysqli_connect("localhost","root","root","kosan");
	   $qcari=mysqli_query($kon,$sqlcari);
	   $r=mysqli_fetch_array($qcari);
	   
   ?>
   <h2>Daftar rumah kost yang ditemukan : </h2>
   <table class="table table-bordered table-hover table-striped">
    <thead>
      <tr>
        <th>Kode Unit</th>
        <th>Nama Unit</th>
        <th>Harga Sewa</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
	  <?php do { ?>
      <tr>
        <td><?php echo $r['KodeUnit'];?></td>
        <td><?php echo $r['NamaUnit'];?></td>
        <td><?php echo $r['HargaSewa'];?></td>
		    <td><?php echo $r['StatusKost'];?></td>
      </tr>
	  <?php } while($r=mysqli_fetch_array($qcari)); ?>
    </tbody>
</table>
<?php } //end if isset bCari ?>
  </div>
 </div>
  <?php if (isset($_POST['tombolSimpan'])) {
	  $kon=mysqli_connect("localhost","root","","kostan");
	  $sql="insert into rumah_kost (KodeUnit,NamaUnit,HargaSewa,StatusKost) values ('".$_POST['kodeunit']."','".$_POST['namaunit']."','".$_POST['hargasewa']."','".$_POST['status']."')";
	  $q=mysqli_query($kon,$sql);
  }
  ?>
</div>

</body>
</html>
