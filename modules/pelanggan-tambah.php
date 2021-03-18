<?php
include "config/koneksi.php";

if(isset($_GET['id_pelanggan'])){
$query = mysqli_query ($conn,"Select * FROM pelanggan where id_pelanggan='$_GET[id_pelanggan]'") or die (mysqli_error());
$result_edit = mysqli_fetch_array($query);
}
?>
<body>
<div class="stambah">
<form action="index.php?pages=pelanggan-proses" method="POST" enctype="multipart/form-data">
<?php
	if(isset($_GET['id_pelanggan'])){
		echo "<input type='hidden' name='status' value='edit'>";
	}else {
		echo "<input type='hidden' name='status' value='add'>";
	}
?>
<h2 align="center" style="border-bottom:2px solid#000;"><?php if(isset($_GET['usernames'])){ echo"Edit Data pelanggan";} else {echo"Tambah Data Pelanggan";}  ?></h2>
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Pelanggan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                
                <input type="hidden" name="txtid" value="<?php if(isset($result_edit['id_pelanggan'])) echo $result_edit['id_pelanggan'] ?>">
                  <div class="form-group">
                    <tr><label for="exampleInputEmail1">Nama Lengkap</label>
                    <td>:</td>
                    <input type="text" class="form-control" placeholder="Nama" name="txtnama" value="<?php if(isset($result_edit['nama_pelanggan'])) echo $result_edit['nama_pelanggan'] ?>" required>
                    </tr> 
                  </div>
                  <div class="form-group">
                    <tr><label for="exampleInputEmail1">Tanggal Pemesanan</label>
                    <td>:</td>
                    <td><input type="date" class="form-control" name="txttglpesan" placeholder="" value="<?php if(isset($result_edit['tanggalpesan_pelanggan'])) echo $result_edit['tanggalpesan_pelanggan'] ?>" required></td>
                    </tr> 
                  </div>
                  <div class="form-group">
                    <tr><label for="exampleInputEmail1">Alamat</label>
                    <td>:</td>
                    <textarea class="form-control" name="txtalamat"><?php if(isset($result_edit['alamat_pelanggan'])) echo $result_edit['alamat_pelanggan'] ?></textarea>
                    </tr> 
                  </div>
                 
                  <div class="form-group">
                    <tr><label for="exampleInputEmail1">No Telepon</label>
                    <td>:</td>
                    <input type="text" class="form-control" name="txttelepon" placeholder="Telepon" value="<?php if(isset($result_edit['notelp_pelanggan'])) echo $result_edit['notelp_pelanggan'] ?>"required>
                    </tr> 
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                  <td><a class="btn btn-danger" href="index.php?pages=pelanggan">Kembali</a> </td>
                </div>
              </form>
            </div>
         </div>
      </div>
    </div>
</section>
          <!-- /.card -->