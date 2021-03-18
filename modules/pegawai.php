    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pegawai</li>
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
              <h3 class="card-title">Data Pegawai</h3>
            </div>
        	<!-- Button Tambah Data -->
           <div class="card-body">
              <a href="index.php?pages=pegawai-tambah" class="btn btn-primary" role="button">Tambah Data</a>
              <div class="card-body">
                <table id="tabel" class="table table-bordered table-hover">
                 <thead>
                   <tr>
                      <th>No</th>
                      <th>Nama Pegawai</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>No Telp</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Pegawai</th>
                      <th>Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>No Telp</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                 <tbody>
                    <?php
                      $no = 1;
                      $query	= mysqli_query($conn,"SELECT * FROM pegawai");
            
                      while ($hasil = mysqli_fetch_array($query)) 
                                
                    { ?>
                    <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $hasil['nama_pegawai'];?></td>
                                <td><?php echo $hasil['tgl_lahir_pegawai'];?></td>
                                <td width="15%"><?php echo $hasil['alamat_pegawai'];?></td>
                                <td><?php echo $hasil['notelp_pegawai'];?></td>
                                </td>
                                
                                  <td>
                                <a class='btn btn-primary' href="index.php?pages=pegawai-tambah&status=edit&id_pegawai=<?php echo $hasil['id_pegawai'];?>"> Edit</a>
                                    <a href='#' style='color:#fff;' class='btn btn-danger' onclick="if(confirm('Apakah yakin menghapus data ?')){window.location.href='index.php?pages=pegawai-proses&status=delete&id_pegawai=<?php echo $hasil['id_pegawai'];?>'}">Hapus</a>
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