<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pemasukan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pemasukan</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pemasukan</h3>
            </div>
        	<!-- Button Input dan Tambah -->
           <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Input Transaksi</button>
              <div class="card-body">
                <table id="tabel" class="table table-bordered table-hover">
                 <thead>
                    <tr>
                    	<th data-field="no" data-editable="true">No</th>
                            <th data-field="tanggal" data-editable="true">Tanggal</th>
                            <th data-field="id_pemasukan" data-editable="true">No Transaksi</th>
                            <th data-field="id_pelanggan" data-editable="true">Nama Pelanggan</th>
                            <th data-field="id_menu" data-editable="true">Nama Menu</th>
                                
                            <th data-field="harga" data-editable="true">Total Pemasukan</th>
                                
                            <th data-field="harga" data-editable="true"></th>
                            </tr>
                        </thead>
                 <tbody>
                        <?php
                            $no = 1;
                            $query	= mysqli_query($conn,"SELECT A.*, B.nama_pelanggan AS pelanggan, C.nama_menu AS menu FROM pemasukan AS A 
                            LEFT JOIN pelanggan AS B ON(A.id_pelanggan = B.id_pelanggan)
                            LEFT JOIN menu AS C ON(A.id_menu = C.id_menu)");
                                while ($hasil = mysqli_fetch_array($query)) 
                                    
                                { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $hasil['tanggal'];?></td>
                                    <td><?php echo $hasil['id_pemasukan'];?></td>
                                    <td><?php echo $hasil['pelanggan'];?></td>
                                    <td><?php echo $hasil['menu'];?></td>
                                    <td>
                                    <?php echo "Rp. ".number_format($hasil['harga'],2,',','.')."";?></td>
                                    <td>
                                        <a href="modules/cetak_pemasukan.php?id_pemasukan=<?php echo $hasil['id_pemasukan'];?>" target="_blank"><button class="btn btn-info" value="Cetak">Cetak</button></a>
                                    </td>
                                    </tr>
                    			<?php }?>
                  </tbody>
                </table>
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php
include "config/koneksi.php";

$sql = "SELECT max(id_jurnal) FROM jurnal_umum";
$query = mysqli_query($conn, $sql);
$transaksi = mysqli_fetch_array($query);

if ($transaksi) {
    $nilai = substr($transaksi[0], 1);
    $kode = (int)$nilai;

    //tambahkan sebanyak + 1
    $kode = $kode + 1;
    $auto_kode =  str_pad($kode, 5, "0",  STR_PAD_LEFT);
} else {
    $auto_kode = "00001";
}
?>       
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="modal fade" id="myModal1" role="dialog">
                              <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                   
                                    <h4 class="modal-title">Transaksi</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
										<form action="index.php?pages=crud&aksi=tambah-pemasukan" method="POST" enctype="multipart/form-data">
											
                                            <div class="form-group">
                                                <label class="control-label" for="">Tanggal Pemesanan</label>
                                                <input type="date" name="tanggal" class="form-control" id=""  required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">No Transaksi</label>
                                                <input type="text" readonly name="id_transaksi" class="form-control" placeholder="auto" id="id_transaksi" value="<?php echo $auto_kode; ?>/JU/IV/2020" required>
                                            </div>
											                      <div class="form-group">
                                                <label class="control-label" for="">Nama Pelanggan</label>
                                                
                                                <select class="form-control" id="pelanggan" name="pelanggan"  required>
                                                <option  value="">Nama Pelanggan</option>
                                                <?php
                                                $query=mysqli_query($conn,"SELECT*FROM pelanggan");
                                                
                                                while($hasil=mysqli_fetch_array($query)){
                                                    echo "<option value='$hasil[id_pelanggan]'>$hasil[nama_pelanggan] </option>";
                                                   
                                                }
                                                ?>
                                                                                                                
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">menu</label>
                                                
                                                <select class="form-control" id="menu" name="menu" onchange="changeValue(this.value)" required>
                                                <option  value="">Pilih menu</option>
                                                <?php
                                                $query=mysqli_query($conn,"SELECT*FROM menu ORDER BY id_menu ASC");
                                                $a="var harga_menu =  new Array();\n;";
                                                while($hasil=mysqli_fetch_array($query)){
                                                    echo "<option value='$hasil[id_menu]'>$hasil[nama_menu]</option>";
                                                    $a.="harga_menu['".$hasil['id_menu']."']={harga_menu:'".addslashes($hasil['harga_menu'])."'};\n";
                                                }
                                                ?>
                                                                                                                
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">harga menu</label>
                                                <input type="text" name="harga_menu" id="harga_menu" class="form-control" onkeyup="oa()" id="" required readonly>
                                            </div>
                                            
										                      	<div class="form-group">
                                                <label class="control-label" for="">Keterangan</label>
                                                <textarea name="keterangan" class="form-control"></textarea>
                                            </div>
                                            <script type='text/javascript'>
                                                    <?php   
                                                        echo $a;
                                                    ?>

                                                    function changeValue(id){  
                                                        
                                                        document.getElementById('harga_menu').value = harga_menu[id].harga_menu;  
                                                    }
                                                    function oa(){
                                                        var quan=parseInt(document.getElementById('qty').value);
                                                        var harga=parseInt(document.getElementById('harga_menu').value);
                                                        
                                                        var total_bayar=quan*harga;
                                                            document.getElementById('total').value=total_bayar;
                                                        
                                                        
                                                    }

                                            </script>
                                            <div class="form-group">                                         
                                            <div class="modal-footer">
                                             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-success" name="tambah">Simpan</button>
                                                </div>
                                            </div>
                                            </form>
                                            
                                  </div>
                                </div>
                            </div>
                        </div>
                           
                        </div>
                    </div>
                </div>
                
            </div>
        </div>


