<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>SIGNUP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="https://i.pinimg.com/originals/e4/8a/b2/e48ab2e2e8055f15f04caf6968c1314a.png" alt="logo" width="100">
                        <H2>BADAN PUSAT STATISTIK</H2>
					</div>
					<form method="post" action="http://127.0.0.1:8000/api/registUser" class="card shadow-lg" id="myform">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">REGISTRASI</h1>
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password Dibutuhkan
							    	</div>

                                    <div class="mb-2 w-100">
										<label class="text-muted" for="password">Masukan Ulang Password</label>
									</div>
									<input id="passwordconfirm" type="password" class="form-control" name="passwordconfirm" required>
								    <div class="invalid-feedback">
								    	Password Dibutuhkan
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<input value="SIGNUP" type="submit" class="btn btn-primary ms-auto"></input>
								</div>
						</div>

					</form>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2017-2024 &mdash; Badan Pusat Statistik Nasional
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/login.js"></script>
</body>
</html>