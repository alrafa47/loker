<!DOCTYPE html>
<html>
<head>
	<title>Calon Pegawai</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jQuery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script></head>
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
				<!-- main side -->
		<div class="body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<?php 
						include 'view/sidebar.php';
						?>
					</div>
					<div class=" col-md-9 ">
						<?php 
						include 'dist/konek.php';
						$query = mysql_query("select * ")
						 ?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">lowogan kerja</h3>
							</div>
							<div class="panel-body">
								<div class="col-md-9">
									<p>tentang perusahaan</p>
								</div>
								<div class="col-md-3">
									<p>nama perusahaan</p>
									<p><span>posisi</span> tempat</p>

								</div>

								<button class="pull-right btn btn-primary" data-toggle = "modal" data-target="#fullist" >lihat selengkapnya</button>
								<!-- full list -->
								
							</div>
						</div>				
					</div>
					
				</div>
			</div>
			
		</div>
		<footer>
			
		</footer>
	</body>
	</html>