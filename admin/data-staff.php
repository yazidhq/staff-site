<?php 

session_start();
if (!isset($_SESSION['loginadmin'])) {
	header("Location: login.php");
	exit;
}

require '../config/function.php';

$staff = mysqli_query($conn, 'SELECT * FROM staffsite ORDER BY id DESC');

?>

<?php include('../template/top.php') ?>

<div class="container" style="margin-top: 3%;">
	<a href="../config/breaksession.php" type="submit" class="btn btn-dark" style="margin-bottom: 2%;">Logout Admin</a>

    <div class="row row-cols-1 row-cols-md-4 g-4">
		<?php foreach($staff as $row): ?>
			<div class="col">
				<div class="card h-100">
					<img src="../assets/img/ktp/<?= $row['ktp'] ?>" class="card-img-top">
					<div class="card-body">
	                    <h4 class="card-title"><strong><?= $row['nama'] ?></strong></h4>
	                    <p class="card-text">Nomor Pegawai : <?= $row['nopeg'] ?></p>
			    		<p class="card-text" style="margin-top: -2.5vh">Fakultas : <?= $row['lembaga'] ?></p>
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
    <a href="../index.php" style="text-decoration: none;">
	    <div class="d-grid gap-2">
	    	<button class="btn btn-primary" type="button">HALAMAN ISI FORM</button>
		</div>
	</a>
</div>

<?php include('../template/bot.php') ?>