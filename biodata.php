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
		<?php 
		include 'dist/konek.php';
		$nim = $_GET['nim'];
		?>
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
						<!-- biodata -->
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-9">
										<h4 >Biodata</h4>
										
									</div>
									<div class="col-md-3">
										<button class="btn btn-info pull-right" data-toggle="modal" data-target="#bio">Edit</button>	

									</div>
									
								</div>

							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-3">
										<img src="" alt="Gambar Mhs" class="img-responsive ">
									</div>
									<div class="col-md-9">
										<?php 
										$sql = mysql_query("select * from tbl_mhs where NIM = $nim") or die(mysql_error());
										while ($r = mysql_fetch_assoc($sql)) {
											# code...
											?>
											<table class=" table">
												<tr>
													<th>Nama Lengkap</th>
													<td><?php echo $r['nama_mhs'] ?></td>
												</tr>
												<tr>
													<th>Alamat</th>
													<td><?php echo $r['alamat'] ?></td>
												</tr>
												<tr>
													<th>PTN/PTS</th>
													<td><?php 
													if (empty($r['PT'])) {
														echo "kosong";
													}
													else {

														echo $r['PT']; 
													}
													?></td>
												</tr>
												<tr>
													<th>Email</th>
													<td><?php echo $r['email_mhs'] ?></td>
												</tr>

												<?php
											}
											?>


										</table>
									</div>

								</div>
								
							</div>
						</div>							
					</div>
					
				</div>
			</div>
			
		</div>
		<footer>
			
		</footer>


															<!-- modal Edit BIO -->
										<div class="modal fade" id="bio">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">BIODATA</h4>
													</div>
													<div class="modal-body"> 
														<form enctype="multipart/form-data" method="post" action="editBio.php">
															<?php 
															$sql = mysql_query("select * from tbl_mhs where NIM = $nim") or die(mysql_error());
															while ($e = mysql_fetch_assoc($sql)) {
															# code...
																?>
																<div class="form-group">
																	<input type="text" class="form-control" name="NIM" value="<?php echo $e['nama_mhs'] ?>"  required="true" placeholder="NIM">
																</div>
																<div class="form-group">
																	<input type="password" class="form-control" name="password" value="<?php echo $e['alamat'] ?>" required="true" placeholder="">
																</div>
																<div class="form-group">
																	<input type="password" class="form-control" name="password" value="<?php echo  $e['email_mhs'] ?>" required="true" placeholder="">
																</div>
																<div class="form-group">
																	<input type="password" class="form-control" name="password" value="<?php echo $e['PT'] ?>" required="true" placeholder="">
																</div>
																
																<div class="form-group">
																	<input type="submit" value="klik" class="form-control btn btn-primary" name="submit">
																</div>

																<?php
															}

															?>
															<div class="form-group">

															</div>
														</form>
													</div>
													
												</div>
												
											</div>
										</div>
	</body>
	</html>
