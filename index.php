<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>buat login</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<style>
	.navbar-default{
		background-color: #fff;
	}
	.navbar-brand:hover {
		border-bottom: 4px solid #1da1f2;
	}
</style>
<body>

<div class="navbar navbar-default">
	<div class="container">
		<div class="navbar-brand">Twitter</div>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Bahasa <b class="caret"></b> </a>
					<ul class="dropdown-menu">
						<li><a href="#">Indonesia</a></li>
						<li><a href="#">English</a></li>
						<li><a href="#">Arab</a></li>
					</ul>
				</li>	
			</ul>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3><b>Masuk ke Twitter</b></h3>
					<br>
					<form role="form">
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" type="password" value="">
							</div>
							<div class="checkbox">
								<a href="" class="btn btn-primary">Masuk</a>
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Ingat saya
								</label>
								<a href="">. Lupa kata sandi ?</a>
							</div>
					</form>
				</div>
				<div class="panel-footer">
				    <p>Baru kenal Twitter? Daftar sekarang »</p>
				</div>
			</div>
		</div>
	</div>
</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>