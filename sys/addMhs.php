<?php 
	include '../dist/konek.php';
	$namaMhs=$_POST['namaMhs'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	$password=$_POST['pass'];
	mysql_query("insert into tbl_mhs values('$namaMhs', '$email', '$alamat', '$password')") or die(mysql_error());
	?>
 <script>
 alert("Berhasil Disimpan");
 history.go(-1);
 location.reload("true");
</script>
