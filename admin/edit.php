<?php 

session_start();
if (!isset($_SESSION['loginadmin'])) {
	header("Location: login.php");
	exit;
}

require '../config/function.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM staffsite WHERE id='$id'");
$result = mysqli_fetch_array($query);

?>

<?php include('../template/top.php') ?>

<div class="container col-7" style="margin-top: 2%">
	<div class="text-center">
		<h1><strong>Edit Data Staff</strong></h1>
	</div><br>

	<form action="" method="post" enctype="multipart/form-data">
		<h5><strong>DATA PEMOHON</strong></h5>
		<input type="hidden" name="id" value="<?= $result['id'] ?>">
		<input type="hidden" name="oldktp" value="<?= $result['ktp'] ?>">
	    <div class="mb-3">
	        <label for="nama" class="form-label">Nama Lengkap :</label>
	        <input type="text" name="nama" id="nama" class="form-control" value="<?= $result['nama'] ?>">
	    </div>
	    <div class="mb-3">
	        <label for="ttl" class="form-label">Tempat Tanggal Lahir (Tempat, YY/MM/DD) :</label>
	        <input type="text" name="ttl" id="ttl" class="form-control" value="<?= $result['ttl'] ?>">
	    </div>
	    <div class="mb-3">
	        <label for="lembaga" class="form-label">Bagian / Lembaga / Fakultas :</label>
	        <input type="text" name="lembaga" id="lembaga" class="form-control" value="<?= $result['lembaga'] ?>">
	    </div>
	    <div class="mb-3">
	        <label for="jabatan" class="form-label">Jabatan :</label>
	        <input type="text" name="jabatan" id="jabatan" class="form-control" value="<?= $result['jabatan'] ?>">
	    </div>
	    <div class="mb-3">
	        <label for="email" class="form-label">Email :</label>
	        <input type="text" name="email" id="email" class="form-control" value="<?= $result['email'] ?>">
	    </div>
	    <div class="mb-3">
	        <label for="nopeg" class="form-label">Nomor Pegawai :</label>
	        <input type="text" name="nopeg" id="nopeg" class="form-control" value="<?= $result['nopeg'] ?>">
	    </div>
	    <div class="mb-3">
	        <label for="mengajar" class="form-label">Mulai Mengajar (Tempat, YY/MM/DD) :</label>
	        <input type="text" name="mengajar" id="mengajar" class="form-control" value="<?= $result['mengajar'] ?>">
	    </div>
	    <div class="mb-3">
	    	<label for="nohp" class="form-label">Nomor Hp:</label>
			<input type="text" name="nohp" id="nohp" class="form-control" value="<?= $result['nohp'] ?>">
	    </div>
	    <div class="form-control">	
	    	<label for="kampus">Lokasi / Ruang:</label><br>
			Kampus : <input type="text" name="kampus" id="kampus" class="form-control" value="<?= $result['kampus'] ?>">
			Gedung : <input type="text" name="gedung" class="form-control" value="<?= $result['gedung'] ?>">
			Lantai : <input type="text" name="lantai" class="form-control" value="<?= $result['lantai'] ?>">
	    </div><br>
	    <div class="form-control">
	    	<label>Status saat ini : <?= $result['status'] ?> (isikan status yang sesuai walaupun tidak diubah)</label><br>
			<input type="radio" name="status" id="sttetap" value="Staff Tetap" oninvalid="this.setCustomValidity('isikan status yang sesuai walaupun tidak diubah')" required>
			<label for="sttetap">Staff Tetap</label>	
			<input type="radio" name="status" id="sthonorer" value="Staff Honorer" oninvalid="this.setCustomValidity('isikan status yang sesuai walaupun tidak diubah')" required>
			<label for="sthonorer">Staff Honorer</label>
			<input type="radio" name="status" id="stluarbiasa" value="Staff Luar Biasa" oninvalid="this.setCustomValidity('isikan status yang sesuai walaupun tidak diubah')" required>
			<label for="stluarbiasa">Staff Luar Biasa</label>
	    </div><br>

	    <hr><h5><strong>TIPE AKUN</strong></h5>
	    <div class="form-control">
	    	<label>Tipe akun saat ini : <?= $result['tipeacc'] ?> (isikan tipe akun yang sesuai walaupun tidak diubah)</label><br>
	    	<input type="radio" name="tipeacc" id="accbaru" value="Account Baru" oninvalid="this.setCustomValidity('isikan tipe akun yang sesuai walaupun tidak diubah')" required>
			<label for="accbaru">Account Baru</label>
			<input type="radio" name="tipeacc" id="accsem" value="Account Sementara" oninvalid="this.setCustomValidity('isikan tipe akun yang sesuai walaupun tidak diubah')" required>
			<label for="accsem" style="margin-bottom: 1%;">Account Sementara</label><br>
			<label>Hingga Tanggal (Tempat, YY/MM/DD) : </label><br>
	        <input type="text" name="hinggatgl" id="hinggatgl" class="form-control" value="<?= $result['hinggatgl'] ?>">
	    </div><br>

	    <hr><h5><strong>NAMA AKUN & PASSWORD</strong></h5>
	    <div class="mb-3">
	    	<label for="pil1" class="form-label">Pilihan 1 :</label>
	        <input type="text" name="pil1" id="pil1" class="form-control" value="<?= $result['pil1'] ?>">
		</div>
		<div class="mb-3">
	    	<label for="pil2" class="form-label">Pilihan 2 :</label>
	        <input type="text" name="pil2" id="pil2" class="form-control" value="<?= $result['pil2'] ?>">
		</div>
		<div class="mb-3">
	    	<label for="altern" class="form-label">Alternatif (diisi oleh admin) :</label>
	        <input type="text" name="altern" id="altern" class="form-control" value="<?= $result['altern'] ?>">
		</div>
		<div class="mb-3">
	    	<label for="pass" class="form-label">Password Awal :</label>
	        <input type="text" name="pass" id="pass" class="form-control" value="<?= $result['pass'] ?>">
		</div>
		
		<hr><h5><strong>KARTU IDENTITAS</strong></h5>
		<div class="mb-3">
		  <label for="ktp" class="form-label">Upload KTP</label><br>
		  <img src="../assets/img/ktp/<?= $result['ktp'] ?>" width="30%">
		  <input type="file" name="ktp" id="ktp" class="form-control">
		  <div id="emailHelp" class="form-text">Ekstensi jpg/jpeg/png. MaxSize 2mb.</div>
		</div>
		<div class="d-grid gap-2">
	    	<button type="submit" class="btn btn-success" name="submit" style="margin-bottom: 1%">Submit</button>
	    </div>
	</form>

	<a href="data-staff.php"><div class="d-grid gap-2"><button type="submit" class="btn btn-primary" style="margin-bottom: 5%">Back</button></div></a>
	
</div>

<?php include('../template/bot.php') ?>

<?php 

if (isset($_POST['submit'])) {
	if (edit_data($_POST) > 0) {
		echo "<script>Swal.fire('Data Berhasil Diedit!','','success')</script>";
	} else {
		echo "<script>Swal.fire('Data Gagal Diedit!','','error')</script>";
	}
}

 ?>
