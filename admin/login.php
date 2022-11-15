<?php 

session_start();
if (isset($_SESSION['loginadmin'])) {
	header("Location: data-staff.php");
	exit;
}

require '../config/function.php';

if (isset($_POST['submit'])) {
	if ($_POST['adminuser'] == 'admin' && $_POST['passuser'] == 'admin') {

		$_SESSION['loginadmin'] = true;

		header('Location: data-staff.php');
	}else{
		$err = true;
	}
}

?>

<?php include('../template/top.php') ?>

<section class="vh-100 d-flex align-items-center">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-6">
        <img src="../assets/img/vector/login.png" class="img-fluid rounded float-start"
          alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-0">
        <form action="" method="post">
        	<p class="lead fw-normal mb-0 me-3">ADMIN LOGIN</p><br>
	        <div class="mb-3">
		        <label for="adminuser" class="form-label">Username :</label>
		        <input type="text" name="adminuser" id="adminuser" class="form-control" placeholder="Masukkan Username" required>
		    </div>
		    <div class="mb-3">
		        <label for="passuser" class="form-label">Password :</label>
		        <input type="Password" name="passuser" id="passuser" class="form-control" placeholder="Masukkan Password" required>
		    </div>
		    <?php if (isset($err)): ?>
		    	<p style="color: red;">Username/ Password Salah</p>
		    <?php endif; ?>
		    <button class="btn btn-outline-primary btn-lg px-5" name="submit" type="submit">Login</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include('../template/bot.php') ?>