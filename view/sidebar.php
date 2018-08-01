<div class="panel panel-default">
	<?php 
		$nim = $_GET['nim'];

	 ?>
	<ul class="nav nav-pills nav-stacked">
		<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>		<!-- dashboard.php	 -->
		<li><a href="biodata.php?nim=<?php echo $nim; ?>"><span class="glyphicon glyphicon-briefcase"></span>Biodata</a></li>
		<li><a href="calon_pegawai.php?nim=<?php echo $nim; ?>"><span class="glyphicon glyphicon-briefcase"></span>Daftar Lowongan</a></li>        									
		<li><a href="lowongan.php?nim=<?php echo $nim; ?>"><span class="glyphicon glyphicon-picture"></span> Lowongan yang Diterima</a></li>
		<li><a href="logout"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>			
	</ul>
</div>