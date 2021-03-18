<?php
include "config/koneksi.php";

if(isset($_GET['id_menu'])){
$query = mysqli_query ($conn,"Select * FROM menu where id_menu='$_GET[id_menu]'") or die (mysqli_error());
$result_edit = mysqli_fetch_array($query);
}
?>
<body>
<div class="stambah">
<form action="index.php?pages=menu-proses" method="POST" enctype="multipart/form-data">
<?php
	if(isset($_GET['id_menu'])){
		echo "<input type='hidden' name='status' value='edit'>";
	}else {
		echo "<input type='hidden' name='status' value='add'>";
	}
?>
<h2 align="center" style="border-bottom:2px solid#000;"><?php if(isset($_GET['id_menu'])){ echo"Edit Data menu";} else {echo"Tambah Menu MUA";}  ?></h2>
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Menu MUA</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                <input type='hidden' name='txtid' value='<?php if(isset($result_edit['id_menu'])) echo $result_edit['id_menu'] ?>>'>
                  <div class="form-group">
                    <tr><label for="exampleInputEmail1">Nama Menu</label>
                    <td>:</td>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama" value="<?php if(isset($result_edit['nama_menu'])) echo $result_edit['nama_menu'] ?>" required>
                    </tr> 
                  </div>
                  <div class="form-group">
                    <tr><label for="exampleInputEmail1">Harga Menu</label>
                    <td>:</td>
                    <td><input type="number" class="form-control" name="txtharga" value="<?php if(isset($result_edit['harga_menu'])) echo $result_edit['harga_menu'] ?>" ></td>
                    </tr> 
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                  <td><a class="btn btn-danger" href="index.php?pages=menu">Kembali</a> </td>
                </div>
              </form>
            </div>
         </div>
      </div>
    </div>
</section>
          <!-- /.card -->