<?php 

session_start();
if (!isset($_SESSION['loginadmin'])) {
	header("Location: login.php");
	exit;
}

require '../config/function.php';

$staff_uncheck = mysqli_query($conn, 'SELECT * FROM staffsite WHERE acc_status = 0 ORDER BY id DESC');
$staff_check = mysqli_query($conn, 'SELECT * FROM staffsite WHERE acc_status = 1 ORDER BY id DESC');

?>

<?php include('../template/top.php') ?>

<div class="container" style="margin-top: 3%;">
	<a href="../config/breaksession.php" type="submit" class="btn btn-danger" style="margin-bottom: 2%;">Logout Admin</a>
	<a href="../index.php" type="submit" class="btn btn-primary" style="margin-bottom: 2%;">Halaman Form</a>

    <div class="row row-cols-1 row-cols-md-4 g-4">
		<?php foreach($staff_uncheck as $row): ?>
			<div class="col">
				<div class="card h-100">
					<img src="../assets/img/ktp/<?= $row['ktp'] ?>" class="card-img-top">
					<div class="card-body">
	                    <h4 class="card-title"><strong><?= $row['nama'] ?></strong></h4>
	                    <p class="card-text">Nomor Pegawai : <?= $row['nopeg'] ?></p>
			    		<p class="card-text" style="margin-top: -2.5vh">Fakultas : <?= $row['lembaga'] ?></p>
			    		<div class="d-grid gap-2">
			    			<a href="../config/switchBool.php?id=<?= $row['id'] ?>" type="button" class="btn btn-outline-primary" onclick="confirm('Apakah anda yakin sudah dibuatkan akun?')">Klik jika sudah dibuat akun</a>
			    		</div>
					</div>
					<div class="btn-group" role="group" aria-label="Basic mixed styles example">
		                <a href="detail-data.php?id=<?= $row['id'] ?>" class="btn btn-success" id="daftar">Detail</a>
		                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
				    	<a href="../config/remove.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick = "return confirm('Yakin Hapus?')">Remove</a>
			    	</div>
				</div>
			</div>
		<?php endforeach; ?> 
    </div><br>

    <hr>

    <div class="row row-cols-1 row-cols-md-4 g-4" style="conolr">
		<?php foreach($staff_check as $row): ?>
			<div class="col">
				<div class="card h-100" style="border: solid #38E54D; border-radius: 10px; box-shadow: 5px 5px 5px #42855B;">
					<img src="../assets/img/ktp/<?= $row['ktp'] ?>" class="card-img-top">
					<div class="card-body">
	                    <h4 class="card-title"><strong><?= $row['nama'] ?></strong></h4>
	                    <p class="card-text">Nomor Pegawai : <?= $row['nopeg'] ?></p>
			    		<p class="card-text" style="margin-top: -2.5vh">Fakultas : <?= $row['lembaga'] ?></p>
			    		<div class="d-grid gap-2">
			    			<a href="../config/switchBool_2.php?id=<?= $row['id'] ?>" type="button" class="btn btn-outline-primary" onclick="confirm('Apakah anda yakin untuk dihapus dari list yang sudah dibuatkan akun?')">Hapus dari list sudah dibuat</a>
			    		</div>
					</div>
					<div class="btn-group" role="group" aria-label="Basic mixed styles example">
		                <a href="detail-data.php?id=<?= $row['id'] ?>" class="btn btn-success" id="daftar">Detail</a>
		                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
				    	<a href="../config/remove.php?id=<?= $row['id'] ?>" class="btn btn-danger" onclick = "return confirm('Yakin Hapus?')">Remove</a>
			    	</div>
				</div>
			</div>
		<?php endforeach; ?> 
    </div><br><br>
</div>

<?php include('../template/bot.php') ?>
