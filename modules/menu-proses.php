<?php
include "config/koneksi.php";

$status = @$_POST['status'];

$id= @$_POST['txtid'];
$nama	= @$_POST['nama'];
$harga	= @$_POST['txtharga'];
	
switch($status) {
	case 'add':
		$tambah	= mysqli_query ($conn,"INSERT INTO menu VALUES ('','$nama','$harga')")or die (mysqli_error());
		if ($tambah=true){
			echo"<script>alert('Tambah Data Berhasil');</script>";
		}else {
			echo"<script>alert('Tambah Data Tidak Berhasil');</script>";
		}
	break;
	
	case 'edit':
		$edit	= "UPDATE menu SET nama_menu='$nama',harga_menu='$harga'";
		$edit .="WHERE id_menu='$id'";
		$edit	= mysqli_query($conn,$edit) or die (mysqli_error());
		if ($edit=true){
			echo"<script>alert('Update Data Berhasil');</script>";
		}else {
			echo"<script>alert('Update Data Tidak Berhasil');</script>";
		}
	break;
	
	default:
	$id =$_GET['id_menu'];
	$tambah	= mysqli_query ($conn,"DELETE FROM menu WHERE id_menu ='$id'")or die (mysql_error());
		if ($tambah=true){
			echo"<script>alert('Delete Data Berhasil');</script>";
		}else {
			echo"<script>alert('Delete Data Tidak Berhasil');</script>";
		}
	break;
}
?>
<meta http-equiv="refresh" content="0; url=index.php?pages=menu">