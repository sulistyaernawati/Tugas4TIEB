<?php
include "config/koneksi.php";

if(isset($_GET['kode_akun'])){
$query = mysqli_query ($conn,"Select * FROM akun where kode_akun='$_GET[kode_akun]'") or die (mysqli_error());
$result_edit = mysqli_fetch_array($query);
}
?>
<body>
<div class="stambah">
<form action="index.php?pages=akun-proses" method="POST" enctype="multipart/form-data">
<?php
	if(isset($_GET['kode_akun'])){
		echo "<input type='hidden' name='status' value='edit'>";
	}else {
		echo "<input type='hidden' name='status' value='add'>";
	}
?>
<body>
<div class="stambah">
<form action="index.php?pages=akun-proses" method="POST" enctype="multipart/form-data">
<?php
	if(isset($_GET['kode_akun'])){
		echo "<input type='hidden' name='status' value='edit'>";
	}else {
		echo "<input type='hidden' name='status' value='add'>";
	}
?>
<h2 align="center" style="border-bottom:2px solid#000;"><?php if(isset($_GET['kode_akun'])){ echo"Edit Data Akun";} else {echo"Tambah Data Akun";}  ?></h2>
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Akun</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                    <tr><label for="exampleInputEmail1">Kode Akun</label>
                    <td>:</td>
                    <td ><input type="text" name="txtakun" value="<?php if(isset($result_edit['kode_akun'])) echo $result_edit['kode_akun']; ?>"></td>
                    </tr> 
                  </div>

                  <div class="form-group">
                    <tr><label for="exampleInputEmail1">Tanggal Lahir</label>
                    <td>:</td>
                    <td><input type="text" class="form-control" name="txtnama" placeholder="Nama akun" value="<?php if(isset($result_edit['nama_akun'])) echo $result_edit['nama_akun']; ?>"></td>
                    </tr> 
                  </div>
                   <div class="form-group">
                    <tr><label for="exampleInputEmail1">Posisi</label>
                    <td>:</td>
                    <td><select class="form-control"id="posisi" name="posisi" >
						<option  value="<?php if(isset($result_edit['laba_rugi'])) {echo $result_edit['laba_rugi'];}else {echo "";} ?>"><?php if(isset($result_edit['posisi'])) {echo $result_edit['posisi'];}else {echo "Pilih Posisi";} ?></option>

						<option value="L">Debit</option>
						<option value="R">Kredit</option>
						</select>
					</td>
                    </tr> 
                  </div>
                  <div class="form-group">
                    <tr><label for="exampleInputEmail1">Laba Rugi</label>
                    <td>:</td>
                    <td><select class="form-control"id="labarugi" name="labarugi" >
						<option  value="<?php if(isset($result_edit['laba_rugi'])) echo $result_edit['laba_rugi']; ?>"><?php if(isset($result_edit['laba_rugi'])) {echo $result_edit['laba_rugi'];}else {echo "Pilih Laba Rugi";} ?></option>
						<option value="N">N</option>
						<option value="T">T</option>
						<option value="B">B</option>
						</select>
					</td>
                    </tr> 
                  </div>
                 
                  <div class="form-group">
                    <tr><label for="exampleInputEmail1">Posisi Modal</label>
                    <td>:</td>
                    <td><select class="form-control"id="posisimodal" name="posisimodal" >
						<option  value="<?php if(isset($result_edit['pm'])) echo $result_edit['pm']; ?>"><?php if(isset($result_edit['pm'])) {echo $result_edit['pm'];}else {echo "Pilih Posisi Modal";} ?></option>
		
						<option value="0">0</option>
						<option value="1">1</option>
						</select>
					</td>
                    </tr> 
                  </div>

                  <div class="form-group">
                    <tr><label for="exampleInputEmail1">Grup</label>
                    <td>:</td>
                    <td><select class="form-control" id="grup" name="grup" >
		<option  value="<?php if(isset($result_edit['grup'])) echo $result_edit['grup']; ?>"><?php if(isset($result_edit['grup'])) {echo $result_edit['grup'];}else {echo "Pilih Grup";} ?></option>

		<option value="Debit">Debit</option>
		<option value="Kredit">Kredit</option>
		</select>
					</td>
                    </tr> 
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><?php if(isset($_GET['kode_akun'])){ echo"Edit ";} else {echo"Tambah";} ?></button>
                  
                  <td><a class="btn btn-danger" href="index.php?pages=akun">Kembali</a> </td>
                </div>
              </form>
            </div>
         </div>
      </div>
    </div>
</section>
          <!-- /.card -->