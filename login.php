<?php $pagedesc = "Login"; ?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
	<style>
		.csscard {
			min-height: 200px;
			width: 35rem;
		}

		.inputcss {
			width: 80%;
			margin: auto;
			display: block;
			margin-top: 10px;
			margin-bottom: 10px;
		}
	</style>
	<!-- FORM -->

	<div class="align-items-center d-flex flex-column" style="margin-top: 4rem;">

		<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4"><?php include("layout_alert.php"); ?></div>

		<div class="card csscard">
			<form method="POST" action="login_auth.php">
				<h3 style="margin-top: 1rem; text-align:center">Login</h3>
				<div class="d-flex justify-content-center align-items-center">
					<hr style="width: 80%;">
				</div>

				<div class="form-group">
					<label for="inputEmail" style="padding-left: 57px;">Username</label>
					<input type="username" class="form-control inputcss" name="username" placeholder="Masukkan Username Anda">
				</div>

				<div class="form-group">
					<label for="inputPassword" style="padding-left: 57px;">Kata Sandi</label>
					<input type="password" class="form-control inputcss" name="password" placeholder="Kata Sandi">
				</div>

				<div class="form-group justify-content-center d-flex">
					<select style="width: 50%;" class="custom-select" name="akses" required>
						<option value="" style="text-align: center;" selected> Login As </option>
						<option value="Admin">Admin</option>
						<option value="Kasir">Kasir</option>
					</select>
				</div>

				<!-- BUTTON -->
				<div style="margin-top: 1rem; text-align:center">
					<button type="submit" class="btn btn-primary" name="login">Login</button>
				</div>

				<!-- PARAGRAPH -->
				<p style="margin-top: 1rem; text-align:center"> Anda belum punya akun? <a href="register.php"> Register</a> </p>

			</form>
		</div>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>