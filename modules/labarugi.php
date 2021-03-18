
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h3 class="m-0 font-weight-bold text-primary">Laporan Laba Rugi</h3>
            </div>
            
           <div class="card-body">
              <div class="table-responsive">
			  <table class="table table-bordered" id="dataTable" data-toggle="table" data-pagination="true" data-search="true" >									
                <tr>
					<th colspan="3" class="left" width="5%">Pendapatan</th>
				</tr>
					<?php
						$sqlT =mysqli_query($conn,"SELECT SUM(jurnal_umum.debit) AS jml_debit, SUM(jurnal_umum.kredit) AS jml_kredit, jurnal_umum.tanggal, jurnal_umum.kode_akun, akun.*FROM jurnal_umum LEFT JOIN akun ON jurnal_umum.kode_akun=akun.kode_akun WHERE jurnal_umum.tanggal AND akun.laba_rugi='T' AND akun.laba_rugi !='N'GROUP BY jurnal_umum.kode_akun ORDER BY jurnal_umum.id_jurnal ASC");
								
								while($rowsT=mysqli_fetch_array($sqlT)){
								?>
									<tr>
										<td class="left"><?php echo $rowsT['nama_akun']; ?></td>
										<td class="right"></td>
										<td class="right">
											<?php echo "Rp. ".number_format($rowsT['jml_kredit'],2,',','.').""; ?>
										</td>
									</tr>
										<?php
											@$no++;
											@$total_debitT += $rowsT['jml_debit'];
											@$total_kreditT += $rowsT['jml_kredit'];
											@$totalT = $total_debitT+$total_kreditT;
															}
														?>
														<tr>
															<td><b><div align="left">Total Pendapatan</div></b></td>
															<td class="right"></td>
															<td class="right"><b><?php echo "Rp. ".number_format(@$total_kreditT,2,',','.').""; ?></b></td>
														</tr>
														<!-- batas -->
														<tr>
															<td colspan="3">&nbsp;</td>
														</tr>
														<tr>
															<th colspan="3" class="left" width="5%">Beban Usaha</th>
														</tr>
														<?php
															$sqlB = mysqli_query($conn,"SELECT SUM(jurnal_umum.debit) AS jml_debit, SUM(jurnal_umum.kredit) AS jml_kredit, jurnal_umum.tanggal, jurnal_umum.kode_akun, akun.*
																	FROM jurnal_umum INNER JOIN akun ON jurnal_umum.kode_akun=akun.kode_akun 
																	WHERE akun.laba_rugi='B' AND akun.laba_rugi !='N'
																	GROUP BY jurnal_umum.kode_akun
																	ORDER BY jurnal_umum.id_jurnal ASC");
															
															while($rowsB=mysqli_fetch_array($sqlB)){
														?>
														<tr>
															<td class="left"><?php echo $rowsB['nama_akun']; ?></td>
															<td class="right"><?php echo "Rp. ".number_format($rowsB['jml_debit'],2,',','.').""; ?></td>
															<td class="right"></td>
														</tr>
														<?php 
															@$total_debitB += $rowsB['jml_debit'];
															@$total_kreditB += $rowsB['jml_kredit'];
															@$totalB = $total_debitB+$total_kreditB;
														}
														?>
														<tr>
															<td><b><div align="left">Total Beban Usaha</div></b></td>
															<td class="right"></td>
															<td class="right"><b><?php echo "Rp. ".number_format($total_debitB,2,',','.').""; ?></b></td>
														</tr>
														<!-- batas -->
														<tr>
															<td colspan="3">&nbsp;</td>
														</tr>
														<!-- /batas -->
														<tr>
															<td><b><div align="left">Laba Bersih</div></b></td>
															<td class="right"></td>
															<td class="right"><b><?php echo "Rp. ".number_format(@$total_kreditT-$total_debitB,2,',','.').""; ?></b></td>
														</tr>
													</table>
												</div>
												
                </table> 
              </div>
            </div>
          </div>