  <?php
include "config/koneksi.php";
if(isset($_GET['username'])){
$query = mysqli_query ($conn,"Select * FROM user where username='$_GET[username]'") or die (mysql_error());
$result_edit = mysqli_fetch_array($query);
}
?>
      <!-- Static Table Start -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Managemen User</h6>
            </div>
            
           <div class="card-body">
           <a href="index.php?pages=managemen-user-tambah" class="btn btn-info" role="button">Tambah Data</a>
            
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Lengkap</th>
                      <th>Username</th>
                      <th>Hak Akses</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Lengkap</th>
                      <th>Username</th>
                      <th>Hak Akses</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                        $no = 1;
                        $query	= mysqli_query($conn,"SELECT * FROM user");
                            while ($hasil = mysqli_fetch_array($query)) 
                                
                            { ?>
                                
                                <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $hasil['nama_user'];?></td>
                                <td><?php echo $hasil['usernames'];?></td>
                                <td><?php if($hasil['level']=="1"){
                                  echo "Super Admin";
                                }else if($hasil['level']=="2"){
                                  echo "Akuntan";
                                } else{
                                  echo "Owner";
                                }
                                ?>
                                
                                </td>
                                 <td>
                                <a class='btn btn-primary' href="index.php?pages=managemen-user-tambah&status=edit&usernames=<?php echo $hasil['usernames'];?>"> edit</a>
                                    <a href='#' style='color:#fff;' class='btn btn-danger' onclick="if(confirm('Apakah yakin menghapus data ?')){window.location.href='index.php?pages=managemen-user-proses&status=delete&usernames=<?php echo $hasil['usernames'];?>'}">Hapus</a>
                                    </td>
                             </tr>                    
                  </tbody>              
                    <?php }?>
                </table>
                

              </div>
            </div>
          </div>
        