<?php
include "config/koneksi.php";

$status = @$_POST['status'];

$id= @$_POST['txtid'];
$nama	= @$_POST['txtnama'];
$tgl_pesan	= @$_POST['txttglpesan'];
$alamat	= @$_POST['txtalamat'];
$telepon = @$_POST['txttelepon'];
	
switch($status) {
	case 'add':
		$tambah	= mysqli_query ($conn,"INSERT INTO pelanggan VALUES ('','$nama','$tgl_pesan','$alamat','$telepon')") or die (mysqli_error());
		if ($tambah=true){
			echo"<script>alert('Tambah Data Berhasil');</script>";
		}else {
			echo"<script>alert('Tambah Data Tidak Berhasil');</script>";
		}
	break;
	
	case 'edit':
		$edit	= "UPDATE pelanggan SET nama_pelanggan='$nama',tanggalpesan_pelanggan='$tgl_pesan',alamat_pelanggan='$alamat', notelp_pelanggan='$telepon' WHERE id_pelanggan='$id'";
		$edit	= mysqli_query($conn,$edit) or die (mysqli_error());
		if ($edit=true){
			echo"<script>alert('Update Data Berhasil');</script>";
		}else {
			echo"<script>alert('Update Data Tidak Berhasil');</script>";
		}
	break;
	
	default:
	$id =$_GET['id_pelanggan'];
	$tambah	= mysqli_query ($conn,"DELETE FROM pelanggan WHERE id_pelanggan ='$id'")or die (mysql_error());
		if ($tambah=true){
			echo"<script>alert('Delete Data Berhasil');</script>";
		}else {
			echo"<script>alert('Delete Data Tidak Berhasil');</script>";
		}
	break;
}
?>
<meta http-equiv="refresh" content="0; url=index.php?pages=pelanggan">