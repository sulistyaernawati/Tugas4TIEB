    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Akun</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Akun</li>
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
              <h3 class="card-title">Data Akun</h3>
            </div>
        	<!-- Button Tambah Data -->
           <div class="card-body">
              <a href="?page=akun&aksi=tambahakun" class="btn btn-info" role="button">Tambah Data</a>
              <div class="card-body">
                <table id="tabel" class="table table-bordered table-hover">
                 <thead>
                   <tr>
                      <th>No</th>
                      <th>Kode Akun</th>
                      <th>Nama Akun</th>
                      <th>Aksi</th>
                    </tr>
                 </thead>
                    
                  <tfoot>
                    <tr>
                       <th>No</th>
                      <th>Kode Akun</th>
                      <th>Nama Akun</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                 <tbody>
                    <?php
                      $no = 1;
                      $query	= mysqli_query($conn,"SELECT * FROM akun");
            
                      while ($hasil = mysqli_fetch_array($query)) 
                                
                    { ?>

                                
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $hasil['kode_akun'];?></td>
                      <td><?php echo $hasil['nama_akun'];?></td>
                      <td>
                          <a class='btn btn-primary' href="index.php?pages=akun-tambah&status=edit&kode_akun=<?php echo $hasil['kode_akun'];?>"> Edit</a>
               		         <a href='#' style='color:#fff;' class='btn btn-danger' onclick="if(confirm('Apakah yakin menghapus data ?')){window.location.href='index.php?pages=akun-proses&status=delete&kode_akun=<?php echo $hasil['kode_akun'];?>'}">Hapus</a>
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
   