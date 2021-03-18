<?php
include "config/koneksi.php";

$status = @$_POST['status'];

$id= @$_POST['txtakun'];
$nama	= @$_POST['txtnama'];
$posisi	= @$_POST['posisi'];
$lb		= @$_POST['labarugi'];
$pm	= @$_POST['posisimodal'];
$grup	= @$_POST['grup'];
	
switch($status) {
	case 'add':
		$tambah	= mysqli_query ($conn,"INSERT INTO akun VALUES ('$id','$nama','$posisi','$lb','$pm','$grup')")or die (mysqli_error());
		if ($tambah=true){
			echo"<script>alert('Tambah Data Berhasil');</script>";
		}else {
			echo"<script>alert('Tambah Data Tidak Berhasil');</script>";
		}
	break;
	
	case 'edit':
		$edit	= "UPDATE akun SET nama_akun='$nama'";
		$edit .="WHERE kode_akun='$id'";
		$edit	= mysqli_query($conn,$edit) or die (mysqli_error());
		if ($edit=true){
			echo"<script>alert('Update Data Berhasil');</script>";
		}else {
			echo"<script>alert('Update Data Tidak Berhasil');</script>";
		}
	break;
	
	default:
	$id =$_GET['kode_akun'];
	$tambah	= mysqli_query ($conn,"DELETE FROM akun WHERE kode_akun ='$id'")or die (mysql_error());
		if ($tambah=true){
			echo"<script>alert('Delete Data Berhasil');</script>";
		}else {
			echo"<script>alert('Delete Data Tidak Berhasil');</script>";
		}
	break;
}
?>
<meta http-equiv="refresh" content="0; url=index.php?pages=akun">