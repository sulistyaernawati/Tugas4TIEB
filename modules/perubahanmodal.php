
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Laporan Perubahan Modal</h3>
            </div>
            
           <div class="card-body">
              <div class="table-responsive">
			  <table class="table table-bordered" id="dataTable" data-toggle="table" data-pagination="true" data-search="true" >						
			  	<tr>
								<th class="left">Modal MUA ERNA</th>
								<th class="right">
									<?php
									$modal = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM modal"));
										echo "Rp. ".number_format($modal['nominal'],2,',','.')."";
									?>
								</th>
							</tr>
							<tr>						
								<td class="left">
									Laba Bersih
								</td>
								<td class="right">
								<?php
									$labaK = mysqli_query($conn,"
											SELECT SUM(jurnal_umum.kredit) AS labaK,
											jurnal_umum.tanggal
											FROM jurnal_umum INNER JOIN akun ON jurnal_umum.kode_akun=akun.kode_akun 
											WHERE jurnal_umum.tanggal AND akun.laba_rugi ='T'
										");
									$lbK = mysqli_fetch_array($labaK);

									$labaD = mysqli_query($conn,"
											SELECT SUM(jurnal_umum.debit) AS labaD,
											jurnal_umum.tanggal
											FROM jurnal_umum INNER JOIN akun ON jurnal_umum.kode_akun=akun.kode_akun 
											WHERE jurnal_umum.tanggal AND akun.laba_rugi ='B'
										");
									$lbD = mysqli_fetch_array($labaD);

									$total_laba = $lbK['labaK']-$lbD['labaD'];

									// $total_debit  = $lb['jml_debit'];
									// $total_kredit = $lb['jml_kredit'];
									// $total_laba   = $total_debit+$total_kredit;

									echo "Rp. ".number_format($total_laba,2,',','.')."";
								?>
								</td>
							</tr>
							<tr>						
								<td class="left">
									Prive MUA ERNA
								</td>
								<td class="right">
									<?php
									$prive = mysqli_fetch_array(mysqli_query($conn,"SELECT SUM(nominal) AS total_prive FROM prive"));
										echo "- Rp. ".number_format($prive['total_prive'],2,',','.')."";
									?>
								</td>
							</tr>
							<?php 
								$total = ($modal['nominal']+$total_laba)-$prive['total_prive'];
								// }
							?>
							<tr>						
								<td colspan="2">&nbsp;</td>
							</tr>
							<tr>						
								<th class="left">
									Modal MUA ERNA
								</th>
								<th class="right">
									<?php echo "Rp. ".number_format($total,2,',','.').""; ?>
								</th>
							</tr>
				</table> 
              </div>
            </div>
          </div>
