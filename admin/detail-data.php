<?php 

session_start();
if (!isset($_SESSION['loginadmin'])) {
	header("Location: login.php");
	exit;
}

require '../config/function.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	echo "<script>alert('Data Tidak Ada')</script>";
}

$query = mysqli_query($conn, "SELECT * FROM staffsite WHERE id='$id'");
$result = mysqli_fetch_array($query);

?>

<?php include('../template/top.php') ?>

<div class="container col-5" style="margin-top: 1%; margin-bottom: 1%;">
	<div class="card">
	  <div class="card-header">
	    <h3><strong><?= $result['nama'] ?></strong></h3>
	  </div>
	  <img src="../assets/img/ktp/<?= $result['ktp'] ?>" class="irounded float-start">
	  <div class="card-body">
	  	<p class="card-text"><strong>Data Pemohon</strong></p>
	    <p class="card-text">Nama : <?= $result['nama'] ?></p>
		<p class="card-text">Tempat Tanggal Lahir : <?= $result['ttl'] ?></p>
		<p class="card-text">Fakultas : <?= $result['lembaga'] ?></p>
		<p class="card-text">Jabatan : <?= $result['jabatan'] ?></p>
	    <p class="card-text">Email : <?= $result['email'] ?></p>
		<p class="card-text">Nomor Pegawai : <?= $result['nopeg'] ?></p>
		<p class="card-text">Mulai Mengajar : <?= $result['mengajar'] ?></p>
		<p class="card-text">Nomor HP : <?= $result['nohp'] ?></p>
		<p class="card-text"><strong>Lokasi / Ruang</strong></p>
		<p class="card-text">Kampus : <?= $result['kampus'] ?></p>
		<p class="card-text">Gedung : <?= $result['gedung'] ?></p>
		<p class="card-text">Lantai : <?= $result['lantai'] ?></p>
		<p class="card-text">Status : <?= $result['status'] ?></p>
		<p class="card-text">Tipe Account : <?= $result['tipeacc'] ?></p>
		<p class="card-text">Hingga Tanggal : <?= $result['hinggatgl'] ?></p>
		<p class="card-text"><strong>Nama Account dan Password</strong></p>
		<p class="card-text">Pilihan 1 : <?= $result['pil1'] ?></p>
		<p class="card-text">Pilihan 2 : <?= $result['pil2'] ?></p>
		<p class="card-text">Alternatif Password : <?= $result['altern'] ?></p>
		<p class="card-text">Password : <?= $result['pass'] ?></p>
	  </div>

	  <div class="d-grid gap-2">
		  <a href="data-staff.php" class="btn btn-success">Back</a>
		  <a href="edit.php?id=<?= $result['id'] ?>" class="btn btn-primary">Edit</a>
	  </div>
	  <div class="btn-group" role="group" aria-label="Basic mixed styles example" style="margin-top: 1vh">
		  <button onclick="window.print()" class="btn btn-warning" type="button">PDF Download</button>
		  <a href="txt/txt.php?id=<?= $result['id'] ?>" class="btn btn-danger">TXT Download</a>
		  <a href="csv/csv.php?id=<?= $result['id'] ?>" class="btn btn-warning">CSV Download</a>
	  </div>
	</div>
</div>

<?php include('../template/bot.php') ?>