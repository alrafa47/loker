<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Part 12 : Membuat Navigation bar Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jQuery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<style type="text/css">
	.carousel-item {
		height: 100vh;
		min-height: 300px;
		background: no-repeat center center scroll;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
</style>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#geser" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand">Lowongan Pekerjaan</a>
			</div>
			<div class="collapse navbar-collapse" id="geser">
				
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Perusahaan</a></li>
					<li><a href="#">Perguruan Tinggi</a></li>
					<li><a href="#pegawai" data-toggle="modal" >Pegawai</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>		
	<div class="container">		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>		
			</ol>

			<!-- deklarasi carousel -->
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item item active">
					<img src="assets/company.jpg" alt="www.malasngoding.com">
					<div class="carousel-caption">
						<h3>www.malasngoding.com</h3>
						<p>Tutorial belajar pemrograman web, mobile dan design.</p>
					</div>
				</div>
				<div class="carousel-item item">
					<img src="assets/Unikama.jpg" alt="www.malasngoding.com">
					<div class="carousel-caption">
						<h3>Tutorial Bootstrap</h3>
						<p>Belajar tutorial bootstrap dasar di www.malasngoding.com</p>
					</div>
				</div>
				<div class="carousel-item item">
					<img src="assets/Unikama.jpg" alt="www.malasngoding.com" ca;>
					<div class="carousel-caption">
						<h3>Tutorial Android</h3>
						<p>Tutorial membuat aplikasi android.</p>
					</div>
				</div>				
			</div>

			<!-- membuat panah next dan previous -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

	</div>
	<!-- onlick pegawai -->
	<div class="modal fade" id="pegawai">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<div class="col-md-6">
						<h4 class="modal-title" >LOGIN</h4>
					</div>
					<div class="col-md-6">
						<h4 class="modal-title" >Register</h4>
					</div>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<form action="login.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<input type="text" class="form-control" name="NIM"  required="true" placeholder="NIM">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" required="true" placeholder="password">
								</div>
								<div class="form-group">
									<input type="submit" value="klik" class="form-control btn btn-primary" name="submit">
								</div>
							</form>
						</div>
						<div class="col-md-6">
							<form action="sys/addMhs.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<input type="text" class="form-control" name="namaMhs"  required="true" placeholder="namaMhs">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="alamat"  required="true" placeholder="alamat">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="email" required="true" placeholder="email">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="pass" required="true" placeholder="password">
								</div>
								<div class="form-group">
									<input type="submit" value="klik" class="form-control btn btn-primary" name="klik">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary pull-right">Save</button>
				</div>
			</div>
			
		</div>
	</div>
	<!-- end of onclick pegawai -->
</body>
<?php 
$pesan = $_GET['pesan'];
if ($pesan == "gagal") {
	?>
	<script>
		alert("Berhasil Disimpan");
	</script>
	<?php
}
?>
</html>