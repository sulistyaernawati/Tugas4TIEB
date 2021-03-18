
<?php
if (isset($_POST['range'])){
    $awal= $_POST['awal'];
    $akhir = $_POST['akhir'];
  
  //    echo $awal."dan"."$akhir";
  
    if ($awal != null){
        
        
        $tang = 1;
        $total = mysqli_fetch_array(mysqli_query($conn,"select SUM(debit) as debit from jurnal_umum WHERE tanggal BETWEEN '$awal' and '$akhir'"));
        $total2 = mysqli_fetch_array(mysqli_query($conn,"select SUM(kredit) as kredit from jurnal_umum WHERE tanggal BETWEEN '$awal' and '$akhir'"));
    }else {
        $tang = 0;
        $total = mysqli_fetch_array(mysqli_query($conn,"select SUM(debit) as debit from jurnal_umum"));
        $total2 = mysqli_fetch_array(mysqli_query($conn,"select SUM(kredit) as kredit from jurnal_umum"));
    }
  } else {
    $tang = 0;
    $total = mysqli_fetch_array(mysqli_query($conn,"select SUM(debit) as debit from jurnal_umum"));
    $total2 = mysqli_fetch_array(mysqli_query($conn,"select SUM(kredit) as kredit from jurnal_umum"));
  }
?>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <div class="card-body">
                    <div class="row clearfix">
                        <div class="col-xs-12">
                            <h2 class="card-inside-title">Jurnal Umum</h2>
                            <form action="" method="POST">
                                <input type="date" name="awal">
                                sampai
                                <input type="date" name="akhir">
                                <button type="submit" name="range">cari</button>
                             </form>
                          
                      
                        <br>
                        
                            <a target="_blank" href='modules/cetak_jurnalumum.php?awal=<?= $_POST['awal']; ?>&akhir=<?= $_POST['akhir']; ?>'>
                            <button class="btn btn-white btn-primary btn-bold">
                                <i class="ace-icon fa fa-print bigger-120 blue"></i> Cetak berdasarkan Tanggal
                            </button></a> * Pastikan sudah Memilih rentang tanggalnya
            
                            <a target="_blank" href='modules/cetak_jurnalumum_all.php' style="position:relative; left:150px;">
                            <button class="btn btn-white btn-primary btn-bold">
                                <i class="ace-icon fa fa-print bigger-120 blue"></i> Cetak Semua Laporan
                            </button></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="body">
                <div class="card-body">
                    <div class="body table-responsive">


                        <table class="table table-bordered table-striped table-hover dataTable js-exportable" width="100%">
                            <thead>

                            <tr align="center">
                                <th width="2%">no</th>
                                <th width="15%">Tanggal</th>
                                <th class="center" width="15%">Nomor Bukti</th>
                                <th class="center" width="22%">Keterangan</th>
                                <th class="center" width="6%">Ref</th>
                                <th class="center" width="15%">Debit</th>
                                <th class="center" width="15%">Kredit</th>
                            </tr>

                            </thead>
                            <tbody>
                            <?php
                            $no = 1;
                            $query = mysqli_query($conn,"select DISTINCT(id_jurnal),keterangan from jurnal_umum");
                            while ($tampil = mysqli_fetch_array($query)) {
                                $id = $tampil['id_jurnal'];
                                $cek = 0;

                                if($tang == 1) {
                                    $query2 = mysqli_query($conn,"select A.*, B.nama_akun AS akun from jurnal_umum AS A 
                                    LEFT JOIN akun AS B ON (A.kode_akun = B.kode_akun) 
                                    WHERE A.id_jurnal='$id' and A.tanggal BETWEEN '$awal' and '$akhir'");
                                } else {
                                    $query2 = mysqli_query($conn,"select A.*, B.nama_akun AS akun from jurnal_umum AS A 
                                    LEFT JOIN akun AS B ON (A.kode_akun = B.kode_akun) 
                                    WHERE A.id_jurnal='$id'");
                                }

                                $op = 0;

                                while ($tampil2 = mysqli_fetch_array($query2)) {
                                    $op++;
                                    $ama = $tampil2['keterangan'];
                            ?>
                            <tr>
                                <td align="center"><?php  if ($cek == 0) echo $no.")";?></td>
                                <td align="center"><?=date('d F Y', strtotime($tampil2['tanggal']));?></td>
                                <td class="center"><?=$tampil2['id_jurnal']?></td>
                                <td class="left"><?=$tampil2['akun']?></td>
                                <td align="center"><?=$tampil2['kode_akun']?></td>
                                <td>Rp.<?=number_format($tampil2['debit'])?></td>
                                <td>Rp.<?=number_format($tampil2['kredit'])?></td>
                            </tr>

                            <?php $cek++;}?>
                                <?php
                                if($op == 0){

                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td align="center"><i><?= $ama ?></i></td>
                                        <td colspan="3"></td>
                                    </tr>
                                    <?php
                                }
                                    ?>
<!--                                <tr  height="10px">-->
<!--                                    <td bgcolor="#b0c4de" colspan="7"></td>-->
<!--                                </tr>-->
                                <?php $no++; ?>
                            <?php }?>
                            </tbody>

                            <tfoot>

                            <tr>
                                <td colspan="5" class="center" height="60px">
                                    <b>
                                        <div align="right">Total : </div>
                                    </b>
                                </td>
                                <?php
//                                $total = mysqli_fetch_array(mysqli_query($conn,"select SUM(debit) as debit from jurnal_umum"));
//                                $total2 = mysqli_fetch_array(mysqli_query($conn,"select SUM(kredit) as kredit from jurnal_umum"));
                                ?>
                                <td align="left"><b>Rp.<?=number_format($total['debit'])?>
                                    </b></td>
                                <td align="left"><b>Rp.<?=number_format($total2['kredit'])?>
                                    </b></td>
                            </tr>

                            </tfoot>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo $base_url;?>includes/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?php echo $base_url;?>includes/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?php echo $base_url;?>includes/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?php echo $base_url;?>includes//jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?php echo $base_url;?>includes/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?php echo $base_url;?>includes/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?php echo $base_url;?>includes/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?php echo $base_url;?>includes/jquery-datatable/extensions/export/buttons.print.min.js"></script>
