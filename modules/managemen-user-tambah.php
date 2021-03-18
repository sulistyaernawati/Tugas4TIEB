<?php
include "config/koneksi.php";

if(isset($_GET['usernames'])){
$query = mysqli_query ($conn,"Select * FROM user where usernames='$_GET[usernames]'") or die (mysqli_error());
$result_edit = mysqli_fetch_array($query);
}
?>
<body>
<div class="stambah">
<form action="index.php?pages=managemen-user-proses" method="POST" enctype="multipart/form-data">
<?php
	if(isset($_GET['usernames'])){
		echo "<input type='hidden' name='status' value='edit'>";
	}else {
		echo "<input type='hidden' name='status' value='add'>";
	}
?>
<h2 align="center" style="border-bottom:2px solid#000;"><?php if(isset($_GET['usernames'])){ echo"Edit Data User";} else {echo"Tambah Data User";}  ?></h2>

<table align="center">

	<tr>
		<td><label>Nama Lengkap</label></td>
		<td>:</td>
		<td><input type="text" class="form-control" name="txtnama" placeholder="nama" value="<?php if(isset($result_edit['nama_user'])) echo $result_edit['nama_user'] ?>"></td>
	</tr>
	<tr>
		<td><label>Usernames</label></td>
		<td>:</td>
		<td><input type="text" class="form-control" name="txtuser" placeholder="username" value="<?php if(isset($result_edit['usernames'])) echo $result_edit['usernames'] ?>" required></td>
	</tr>
	
	<tr>
		<td><label>Password</label></td>
		<td>:</td>
		<td><input type="password" class="form-control" name="txtpass" placeholder="password" value="<?php if(isset($result_edit['passwords'])) echo $result_edit['passwords'] ?>" <?php if(isset($result_edit['passwords'])) echo "disabled"?>></td>
	</tr>
	
	<tr>
		<td><label>Level</label></td>
		<td>:</td>
		<td ><input type="radio" name="txtlevel" value="1" checked>Super Admin
		<input type="radio" name="txtlevel" value="2" <?php if(@$result_edit['level'] == '2') echo "checked"; ?>>Akuntan
		<input type="radio" name="txtlevel" value="3" <?php if(@$result_edit['level'] == '3') echo "checked"; ?>>Owner</td>
	</tr>
	
	<tr>
		<td colspan="2"><button class="btn-biru"><?php if(isset($_GET['usernames'])){ echo"Edit ";} else {echo"Tambah";} ?></button></td>
		<td ><a href="index.php?pages=managemen-user"> kembali </button></td>
	</tr>
	</table>
</form>
</div>
</body>