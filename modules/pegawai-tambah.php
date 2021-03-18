<?php
include "config/koneksi.php";

if(isset($_GET['id_pegawai'])){
$query = mysqli_query ($conn,"Select * FROM pegawai where id_pegawai='$_GET[id_pegawai]'") or die (mysqli_error());
$result_edit = mysqli_fetch_array($query);
}
?>
<body>
<div class="stambah">
<form action="index.php?pages=pegawai-proses" method="POST" enctype="multipart/form-data">
<?php
	if(isset($_GET['id_pegawai'])){
		echo "<input type='hidden' name='status' value='edit'>";
	}else {
		echo "<input type='hidden' name='status' value='add'>";
	}
?>
<h2 align="center" style="border-bottom:2px solid#000;"><?php if(isset($_GET['usernames'])){ echo"Edit Data Pegawai";} else {echo"Tambah Data Pegawai";}  ?></h2>
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group">
                  <input type="hidden" name="txtid" value="<?php if(isset($result_edit['id_pegawai'])) echo $result_edit['id_pegawai'] ?>">

                    <tr><label>Nama Lengkap</label>
                    <td>:</td>
                    <input type="text" class="form-control" name="txtnama" placeholder="Nama" value="<?php if(isset($result_edit['nama_pegawai'])) echo $result_edit['nama_pegawai'] ?>" required>
                    </tr> 
                  </div>

                  <div class="form-group">
                    <tr><label>Tanggal Lahir</label>
                    <td>:</td>
                    <td><td><input type="date" class="form-control" name="txttgllahir" placeholder="" value="<?php if(isset($result_edit['tgl_lahir_pegawai'])) echo $result_edit['tgl_lahir_pegawai'] ?>" required></td></td>
                    </tr> 
                  </div>

                   <div class="form-group">
                    <tr><label>Jenis Kelamin</label>
                    <td>:</td>
                    <td><input type="radio" name="txtjk" value="Laki - Laki" checked>Laki - laki
						        <input type="radio" name="txtjk" value="Perempuan" <?php if(@$result_edit['jk_pegawai'] == 'Perempuan') echo "checked"; ?>>Perempuan</td>
                    </tr> 
                  </div>

                  <div class="form-group">
                    <tr><label>Alamat</label>
                    <td>:</td>
                    <textarea class="form-control" name="txtalamat"><?php if(isset($result_edit['alamat_pegawai'])) echo $result_edit['alamat_pegawai'] ?></textarea>
                    </tr> 
                  </div>
                 
                  <div class="form-group">
                    <tr><label>No Telepon</label>
                    <td>:</td>
                    <input type="text" class="form-control" name="txttelepon" placeholder="Telepon" value="<?php if(isset($result_edit['notelp_pegawai'])) echo $result_edit['notelp_pegawai'] ?>"required>
                    </tr> 
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit"> <?php if(isset($_GET['usernames'])){ echo"Edit ";} else {echo"Tambah";} ?></button>
                  <td><a class="btn btn-danger" href="index.php?pages=pegawai">Kembali</a> </td>
                  
                </div>
              </form>
            </div>
         </div>
      </div>
    </div>
</section>