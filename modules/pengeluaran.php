<?php
$sql = "SELECT max(id_jurnal) FROM jurnal_umum";
$query = mysqli_query($conn, $sql);
$transaksi = mysqli_fetch_array($query);

if ($transaksi) {
    $nilai = substr($transaksi[0], 1);
    $kode = (int)$nilai;

    //tambahkan sebanyak + 1
    $kode = $kode + 1;
    $auto_kode = str_pad($kode, 5, "0",  STR_PAD_LEFT);
} else {
    $auto_kode = "00001";
}
?>       
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Beban</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Beban/li>
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
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal1">Input Pengeluaran</button>
              <div class="card-body">
                <table id="tabel" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th data-field="no" data-editable="true">No</th>
                            <th data-field="tanggal" data-editable="true">Tanggal</th>
                            <th data-field="nama_pengeluaran" data-editable="true">Nama pengeluaran</th>
                            <th data-field="nama_pengeluaran" data-editable="true">Keterangan</th>
                            <th data-field="nominal" data-editable="true">Nominal</th>
                            
                        </tr>
                    </thead>
                        
                    <tbody>
                    <?php
                        $no = 1;
                        $query	= mysqli_query($conn,"SELECT * FROM pengeluaran");
                            while ($hasil = mysqli_fetch_array($query)) 
                                
                            { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $hasil['tanggal'];?></td>
                                <td><?php echo $hasil['nama'];?></td>
                                <td><?php echo $hasil['keterangan'];?></td>
                                
                                <td> <?php echo "Rp. ".number_format($hasil['harga'],2,',','.')."";?></td>
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

        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                           <!-- Modal -->
                            <div class="modal fade" id="myModal1" role="dialog">
                              <div class="modal-dialog">
                              
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header"><h4 class="modal-title">Tambah Data</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    
                                  </div>
                                  <div class="modal-body">
										<form action="<?php echo $base_url?>index.php?pages=crud&aksi=tambah-pengeluaran" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                                <label class="control-label" for="">Tanggal</label>
                                                <input type="date" name="tanggal" class="form-control" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">No Transaksi</label>
                                                <input type="text" readonly name="no_transaksi" class="form-control" placeholder="auto" id=""  value="<?php echo $auto_kode; ?>/JU/IV/2020">
                                            </div>
                                        <div class="form-group">
                                                <label class="control-label" for="">Akun</label>
                                                
                                                <select class="form-control" id="kode_akun" name="kode_akun"  required>
                                                <option  value="">Kode Akun</option>
                                                <?php
                                                $query=mysqli_query($conn,"SELECT*FROM akun WHERE kode_akun IN (13,14)");
                                                
                                                while($hasil=mysqli_fetch_array($query)){
                                                    echo "<option value='$hasil[kode_akun]'>$hasil[kode_akun]|$hasil[nama_akun]</option>";
                                                   
                                                }
                                            
                                                ?>
                                                                                                                
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">Nama pengeluaran</label>
                                                <select class="form-control"id="nama_pengeluaran" name="nama_pengeluaran" >
                                                <option  value="">Pilih pengeluaran</option>
                                
                                                <option value="Perlengkapan">Perlengkapan</option>
												<option value="Peralatan">Peralatan</option>
												</select>
                                            </div>
                                            
											<div class="form-group">
                                                <label class="control-label" for="">Keterangan</label>
                                                <textarea name="keterangan" class="form-control"></textarea>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="control-label" for="">Nominal</label>
                                                <input type="number" name="nominal" class="form-control" id="" required>
                                            </div>
                                            
                                                                                                                    
                                            </select>
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