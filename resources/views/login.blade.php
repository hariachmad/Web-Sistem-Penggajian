<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="Indah" content="Indah">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>LOGIN</title>
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
					<form action="http://127.0.0.1:8000/login" method="POST" class="card shadow-lg" id="myForm">
						@csrf
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
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
										<a href="forgot.html" class="float-end">
											Lupa Password?
										</a>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								    <div class="invalid-feedback">
								    	Password Dibutuhkan
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Ingat Saya</label>
									</div>
									<input value="Login" type="submit" class="btn btn-primary ms-auto">
								</input>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Tidak Punya Akun? <a href="http://127.0.0.1:8000/signup" class="text-dark">Buat Akun</a>
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

	<!-- <script>
		const form = document.getElementById('myForm');

// Menambahkan event listener untuk menangani submit
form.addEventListener('submit', function(event) {
    // Mencegah pengiriman form default
    event.preventDefault();

    // Mengambil data dari form
    const formData = new FormData(form);
    const email = formData.get('email');
	const password = formData.get('password');

    // Menampilkan data di console
    console.log('Form submitted!');
    console.log('Name:', email);
	console.log('Password:',password);

const url = 'http://127.0.0.1:8000/login';
const data = { "email": email, "password": password };

fetch(url, {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify(data)
})
  .then(response => response.json())
  .then((data) => {
	console.log(data);
	if (data.message === 'S')
	{
		window.location.href="http://127.0.0.1:3000/employee"
	}else {
		window.location.href="http://127.0.0.1:3000/"
	}
}
)
  .catch(error => console.error('There was a problem with your fetch operation:', error));


    // Di sini kamu bisa menambahkan logika untuk mengirim data menggunakan AJAX, validasi, dll.
});
	</script> -->
</body>
</html>