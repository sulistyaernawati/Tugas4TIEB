<?php
include "config/koneksi.php";

$status = @$_POST['status'];

$id= @$_POST['txtid'];
$nama	= @$_POST['txtnama'];
$tgl_lahir	= @$_POST['txttgllahir'];
$jk		= @$_POST['txtjk'];
$alamat	= @$_POST['txtalamat'];
$telepon = @$_POST['txttelepon'];
$level = @$_POST['txtlevel'];
	
switch($status) {
	case 'add':
		$tambah	= mysqli_query ($conn,"INSERT INTO pegawai VALUES ('','$nama','$tgl_lahir','$jk','$alamat','$telepon')")or die (mysqli_error());
		if ($tambah=true){
			echo"<script>alert('Tambah Data Berhasil');</script>";
		}else {
			echo"<script>alert('Tambah Data Tidak Berhasil');</script>";
		}
	break;
	
	case 'edit':
		$edit	= "UPDATE pegawai SET nama_pegawai='$nama',tgl_lahir_pegawai='$tgl_lahir', jk_pegawai='$jk',alamat_pegawai='$alamat', notelp_pegawai='$telepon'";
		$edit .="WHERE id_pegawai='$id'";
		$edit	= mysqli_query($conn,$edit) or die (mysqli_error());
		if ($edit=true){
			echo"<script>alert('Update Data Berhasil');</script>";
		}else {
			echo"<script>alert('Update Data Tidak Berhasil');</script>";
		}
	break;
	
	default:
	$id =$_GET['id_pegawai'];
	$tambah	= mysqli_query ($conn,"DELETE FROM pegawai WHERE id_pegawai ='$id'")or die (mysql_error());
		if ($tambah=true){
			echo"<script>alert('Delete Data Berhasil');</script>";
		}else {
			echo"<script>alert('Delete Data Tidak Berhasil');</script>";
		}
	break;
}
?>
<meta http-equiv="refresh" content="0; url=index.php?pages=pegawai">