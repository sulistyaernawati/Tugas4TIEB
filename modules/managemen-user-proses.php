<?php
include "config/koneksi.php";

$status = @$_POST['status'];
$user 	= @$_POST['txtuser'];
$pass	= md5(@$_POST['txtpass']);
$nama	= @$_POST['txtnama'];
$level	= @$_POST['txtlevel'];
	
switch($status) {
	case 'add':
		$tambah	= mysqli_query ($conn,"INSERT INTO user VALUES ('','$nama','$user','$pass','$level','')")or die (mysqli_error());
		if ($tambah=true){
			echo"<script>alert('Tambah Data Berhasil');</script>";
		}else {
			echo"<script>alert('Tambah Data Tidak Berhasil');</script>";
		}
	break;
	
	case 'edit':
		$edit	= "UPDATE user SET usernames='$user',passwords='$pass', nama_user='$nama', level='$level'";
		$edit .="WHERE usernames='$user'";
		$edit	= mysqli_query($conn,$edit) or die (mysqli_error());
		if ($edit=true){
			echo"<script>alert('Update Data Berhasil');</script>";
		}else {
			echo"<script>alert('Update Data Tidak Berhasil');</script>";
		}
	break;
	
	default:
	$id = @$_GET['usernames'];
	$tambah	= mysqli_query ($conn,"DELETE FROM user WHERE usernames ='$id'")or die (mysqli_error());
		if ($tambah=true){
			echo"<script>alert('Delete Data Berhasil');</script>";
		}else {
			echo"<script>alert('Delete Data Tidak Berhasil');</script>";
		}
	break;
}
?>
<meta http-equiv="refresh" content="0; url=index.php?pages=managemen-user">