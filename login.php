<?php 
include 'dist/konek.php';
$nim=$_POST['NIM'];
$pass=$_POST['password'];
$query=mysql_query("select * from tbl_mhs where NIM='$nim' and password='$pass'")or die(mysql_error());
if(mysql_num_rows($query)==1){
	header("location:calon_pegawai.php?nim='$nim'");
}else{
	header("location:index.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
?>