<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login | Zard Article</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
	  <!-- My csss -->
	  <link rel="stylesheet" href="mycss/css/style.css">
    <!-- Boostrap cdn -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <!-- Link css pribadi -->
	<link rel="stylesheet" href="/assets/css/style.css" />
    <!-- Link icon -->
	<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
    <!-- Link font awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css" />
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Link js saya -->
    <script src="/assets/js/app.js"></script>
  </head>
  <body>
	<!-- navbar -->
	<div class="nav container">
        <!-- Logo -->
        <a href="/" class="logo">Z<span>ard</span></a> 
		<a href="/" class="login">Kembali</a>
	</div>
	<div class="section">
		<div class="container">
            <!-- Card -->
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Masuk </span><span>Daftar</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<span class="invalid-feedback" role="alert">
												<strong>{{ session()->get('error') }}</strong>
											</span>
                                            <h2 class="mb-3 pb-3"><span class="text-1">Z</span> <span>A</span> <span class="text-3">R</span> <span class="text-4">D</span></h2>
											<h4 class="mb-4 pb-3">Masuk</h4>
											<div class="form-group">

												<!-- Login  -->
                                                <form action="{{ route('login_action') }}" method="POST">
													@csrf
												<input type="text" name="username" class="form-style" placeholder="Masukkan Username kamu" id="logemail" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
											</div>
											<div class="form-group mt-2">
											    <input type="password" name="password" class="form-style" placeholder="Masukkan password kamu" id="passshow" autocomplete="off">
												<i class="input-icon uil uil-lock-alt"></i>
                                                <span id="toggleeyes" class="eye-icon fa fa-fw fa-eye field_icon"></span>
											</div>
											<button type="submit" class="btn mt-4">Login</button>
										</form>
                            				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Lupa password?</a></p>
				      					</div>
			      					</div>
			      				</div>
                                
                                <!-- Register -->

								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
                                            <h2 class="mb-3 pb-3"><span class="text-1">Z</span> <span>A</span> <span class="text-3">R</span> <span class="text-4">D</span></h2>
											<h4 class="mb-4 pb-3">Daftar</h4>
											<div class="form-group">
												<form action={{ route('register_action') }} method="POST">
													@csrf
												<input type="text" name="username" class="form-style @error('username') is-invalid @enderror" placeholder="Masukkan Username baru Kamu" id="logname" autocomplete="off">
												<i class="input-icon uil uil-user"></i>
												@error('username')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											</div>
											<div class="form-group mt-2">
												<input type="password" name="password" class="form-style @error('password') is-invalid @enderror" placeholder="Masukkan Password baru kamu" id="passregister" autocomplete="off">
												@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button type="submit" class="btn mt-4">Daftar</button>
										</form>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
		<div class="footer container">
			<p><center>&#169; Muhammad Fajar Ilham All Right Reserved</center></p>
		 </div>
	</div>
	@include('sweetalert::alert')
  </body>
</html>