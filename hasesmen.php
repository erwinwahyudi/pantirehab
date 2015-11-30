<?php
		if(isset($_GET['action'])){				
			if($_GET['action'] == "update")
			{
				$id_pasien = $_GET['id'];
				$id_hasesmen = $_GET['idhasesmen'];

				$query = mysql_query("select * from hasil_asesmen where id_pasien='$id_pasien'");
				$row = mysql_fetch_array($query);
				
	                $qhasesmen = mysql_query("SELECT * FROM hasil_asesmen where id_pasien='$id_pasien'");
	                $rowhs = mysql_fetch_array($qhasesmen);
?>

<div class="span8">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Edit Hasil Asesmen</span></h3>
		</div>
		<div class="content">
				<form class="form-horizontal row-fluid" action="prohasesmen.php" method="post">
				<input type="hidden" name="id_hasesmen" value="<?php echo $id_hasesmen; ?>">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal Datang :</label>
                <div class="controls span4">
                <input type="text" id="datepicker" class="row-fluid" name="tgl_dtg" required value="<?php echo $row['tgl_dtg']; ?>"/>
                </div>
              	</div>				
                 
                <?php 
	                $qpasien = mysql_query("SELECT * FROM pasien where id_pasien='$id_pasien'");
	                $dtpasien = mysql_fetch_array($qpasien);
                ?>
                
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">No Rekam Medik :</label>
                 <div class="controls span4">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $dtpasien['no_rmedik']; ?>" />
                 </div>
              	 </div>
                 
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Nama :</label>
                 <div class="controls span4">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $dtpasien['nm_pasien']; ?>" />
                 </div>
              	 </div>
                 
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Alamat :</label>
                 <div class="controls span4">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $dtpasien['alamat_pasien']; ?>" />
                 </div>
              	 </div>
               
				<?php
                	$jumlahsm = $rowhs['medis'];

                	if($jumlahsm <= 1) {
                		$hasilsm = "0 = tidak ada masalah yang berarti, tidak perlu intervensi";
                	} elseif ($jumlahsm <= 3) {
                		$hasilsm = "1 : ada sedikit masalah, tetapi intervensi/bantuan tidak terlalu penting";
                	} elseif ($jumlahsm <= 5) {
                		$hasilsm = "2 = masalah tergolong sedang, tetapi butuh beberapa bantuan / intervensi";
                	} elseif ($jumlahsm <= 7) {
                		$hasilsm = "3 = masalah serius, dibutuhkan intervensi / bantuan";
                	} elseif ($jumlahsm <= 9) {
                		$hasilsm = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan";
                	} elseif ($jumlahsm >= 9) {
                		$hasilsm = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan";
                	}
                ?>
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Medis :</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilsm; ?>" />
                 <input type="hidden" name="medis" value="<?php echo $hasilsm; ?>">
                 </div>
              	 </div>
					
                 <?php 
                	$jumlahsp = $rowhs['dukungan'];
                    

                	if($jumlahsp <= 1) {
                		$hasilsp = "0 = tidak ada masalah yang berarti, tidak perlu intervensi";
                	} elseif ($jumlahsp <= 3) {
                		$hasilsp = "1 = ada sedikit masalah, tetapi intervensi/bantuan tidak terlalu penting.";
                	} elseif ($jumlahsp <= 5) {
                		$hasilsp = "2 = masalah tergolong sedang, tetapi butuh beberapa bantuan / intervensi.";
                	} elseif ($jumlahsp <= 7) {
                		$hasilsp = "3 = masalah serius, dibutuhkan intervensi / bantuan";
                	} elseif ($jumlahsp <= 9) {
                		$hasilsp = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan.";
                	} elseif ($jumlahsp > 9) {
                		$hasilsp = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan.";
                	}
                	?>
                    <div class="form-row control-group row-fluid">
                 	<label class="control-label span3" for="disabled-input">Pekerjaan / Dukungan :</label>
                    <div class="controls span9">
                    <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilsp; ?>" />
                    <input type="hidden" name="dukungan" value="<?php echo $hasilsp; ?>">
                    </div>
                    </div>
					
                 	<?php
                 		$jumlahspn = $rowhs['napza'];

                 		if($jumlahspn <= 1) {
	                		$hasilspn = "0 = tidak ada masalah yang berarti, tidak perlu intervensi";
	                	} elseif ($jumlahspn <= 3) {
	                		$hasilspn = "1 : ada sedikit masalah, tetapi intervensi/bantuan tidak terlalu penting";
	                	} elseif ($jumlahspn <= 5) {
	                		$hasilspn = "2 = masalah tergolong sedang, tetapi butuh beberapa bantuan / intervensi";
	                	} elseif ($jumlahspn <= 7) {
	                		$hasilspn = "3 = masalah serius, dibutuhkan intervensi / bantuan";
	                	} elseif ($jumlahspn <= 9) {
	                		$hasilspn = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan";
	                	} elseif ($jumlahspn >= 9) {
	                		$hasilspn = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan";
	                	}
                 	?>
                  	<div class="form-row control-group row-fluid">
                    <label class="control-label span3" for="disabled-input">Napza :</label>
                    <div class="controls span9">
                    <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilspn; ?>" />
                    <input type="hidden" name="napza" value="<?php echo $hasilspn; ?>">
                    </div>
                    </div>
                 
                 	<?php
                 		$jumlahlg = $rowhs['legal'];

						if($jumlahlg <= 1) {
                			$hasillg = "0 = tidak ada masalah yang berarti, tidak perlu intervensi";
	                	} elseif ($jumlahlg <= 3) {
	                		$hasillg = "1 : ada sedikit masalah, tetapi intervensi/bantuan tidak terlalu penting";
	                	} elseif ($jumlahlg <= 5) {
	                		$hasillg = "2 = masalah tergolong sedang, tetapi butuh beberapa bantuan / intervensi";
	                	} elseif ($jumlahlg <= 7) {
	                		$hasillg = "3 = masalah serius, dibutuhkan intervensi / bantuan";
	                	} elseif ($jumlahlg <= 9) {
	                		$hasillg = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan";
	                	} elseif ($jumlahlg >= 9) {
	                		$hasillg = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan";
	                	}
					?>
                    <div class="form-row control-group row-fluid">
                    <label class="control-label span3" for="disabled-input">Legal :</label>
                    <div class="controls span9">
                    <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasillg; ?>" />
                    <input type="hidden" name="legal" value="<?php echo $hasillg; ?>">
                    </div>
                    </div>
					
                 	<?php
					$jumlahrk = $rowhs['keluarga'];
					if($jumlahrk <= 1) {
                			$hasilrk = "0 = tidak ada masalah yang berarti, tidak perlu intervensi";
	                	} elseif ($jumlahrk <= 3) {
	                		$hasilrk = "1 : ada sedikit masalah, tetapi intervensi/bantuan tidak terlalu penting";
	                	} elseif ($jumlahrk <= 5) {
	                		$hasilrk = "2 = masalah tergolong sedang, tetapi butuh beberapa bantuan / intervensi";
	                	} elseif ($jumlahrk <= 7) {
	                		$hasilrk = "3 = masalah serius, dibutuhkan intervensi / bantuan";
	                	} elseif ($jumlahrk <= 9) {
	                		$hasilrk = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan";
	                	} elseif ($jumlahrk >= 9) {
	                		$hasilrk = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan";
	                	}
					?>
                     <div class="form-row control-group row-fluid">
                     <label class="control-label span3" for="disabled-input">Keluarga :</label>
                     <div class="controls span9">
                     <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilrk; ?>" />
                     <input type="hidden" name="keluarga" value="<?php echo $hasilrk; ?>">
                     </div>
                     </div>
					
                 <?php
                 	$jumlahps = $rowhs['psikiatris'];
                	if($jumlahps <= 1) {
                		$hasilps = "0 = tidak ada masalah yang berarti, tidak perlu intervensi";
                	} elseif ($jumlahps <= 3) {
                		$hasilps = "1 : ada sedikit masalah, tetapi intervensi/bantuan tidak terlalu penting";
                	} elseif ($jumlahps <= 5) {
                		$hasilps = "2 = masalah tergolong sedang, tetapi butuh beberapa bantuan / intervensi";
                	} elseif ($jumlahps <= 7) {
                		$hasilps = "3 = masalah serius, dibutuhkan intervensi / bantuan";
                	} elseif ($jumlahps <= 9) {
                		$hasilps = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan";
                	} elseif ($jumlahps >= 9) {
                		$hasilps = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan";
                	}
                 ?>
              	 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Psikiatris :</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilps; ?>" />
                 <input type="hidden" name="psikiatris" value="<?php echo $hasilps; ?>">
                 </div>
              	 </div>
	
				 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Klien Memenuhi Kriteria Diagnosis Napza :</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $rowhs['d_napza']; ?>" />
                 <input type="hidden" name="d_napza" value="<?php echo $rowhs['d_napza']; ?>" />
                 </div>
              	 </div>			
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Diagnosis Lain :</label>
                <div class="controls span9">
                <input type="text" id="normal-field" class="row-fluid" name="d_lain" required value="<?php echo $rowhs['d_lain']; ?>"/>
                </div>
              	</div>
                 
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Resume Masalah :</label>
                <div class="controls span9">
                <input type="text" id="normal-field" class="row-fluid" name="r_masalah" required value="<?php echo $rowhs['r_masalah']; ?>"/>
                </div>
              	</div>

                <?php
                   
                    $rt = $rowhs['r_tlanjut'];
                    $rtlanjut = explode(", ", $rt);
                ?>
                <div class="form-row control-group row-fluid ">
                <label class="control-label span3">Rencana Tindak Lanjut :</label>
                <div class="controls span7">
                  <label class="checkbox ">
                  <input type="checkbox" id="inlineCheckbox1" name="r_tlanjut[]" value="asesmen lanjutan / mendalam" <?php if(in_array('asesmen lanjutan / mendalam',$rtlanjut)) { echo "checked=checked"; } ?> >asesmen lanjutan / mendalam</label>
                  <label class="checkbox ">
                  <input type="checkbox" id="inlineCheckbox1" name="r_tlanjut[]" value="evaluasi sikologis" <?php if(in_array('evaluasi sikologis',$rtlanjut)) { echo "checked=checked"; } ?> >evaluasi sikologis </label>
                  <label class="checkbox">
                  <input type="checkbox" id="inlineCheckbox2" name="r_tlanjut[]" value="program detoksifikasi" <?php if(in_array('program detoksifikasi',$rtlanjut)) { echo "checked=checked"; } ?> >program detoksifikasi</label>
                  <label class="checkbox">
                  <input type="checkbox" id="inlineCheckbox2" name="r_tlanjut[]" value="intervensi singkat" <?php if(in_array('intervensi singkat',$rtlanjut)) { echo "checked=checked"; } ?> >intervensi singkat</label>
                  <label class="checkbox">
                  <input type="checkbox" id="inlineCheckbox2" name="r_tlanjut[]" value="terapi rumatan" <?php if(in_array('terapi rumatan',$rtlanjut)) { echo "checked=checked"; } ?> >terapi rumatan</label>
                  <label class="checkbox">
                  <input type="checkbox" id="inlineCheckbox2" name="r_tlanjut[]" value="rehabilitasi rawat inap" <?php if(in_array('rehabilitasi rawat inap',$rtlanjut)) { echo "checked=checked"; } ?> >rehabilitasi rawat inap</label>
                  <label class="checkbox">
                  <input type="checkbox" id="inlineCheckbox2" name="r_tlanjut[]" value="konseling" <?php if(in_array('konseling',$rtlanjut)) { echo "checked=checked"; } ?> >konseling</label>
                  <label class="checkbox">
                  <input type="checkbox" id="inlineCheckbox2" name="r_tlanjut[]"value="lain-lain" <?php if(in_array('lain-lain',$rtlanjut)) { echo "checked=checked"; } ?> >lain-lain</label>
                </div>
              </div>

                <div class="form-actions row-fluid">
                	<div class="span7 offset3">
                      <button type="submit" class="btn btn-primary" name="action" value="update">Simpan</button>
                      <button type="reset" class="btn btn-secondary" value="Batal">Batal</button>
                    </div>
              	</div>
				</form>
		</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span8" -->

<?php 		}
		} else { 
?>

<div class="span8">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Tambah Data Hasil Asesmen</span></h3>
		</div>
		<div class="content">  
				<form class="form-horizontal row-fluid" action="prohasesmen.php" method="post">
				<?php
					$id_pasien = $_GET['id'];
					$qall = mysql_query("SELECT * FROM pasien, formulir_asesmen WHERE pasien.id_pasien ='$id_pasien'");
					$dtall = mysql_fetch_array($qall);	
					$id_fasesmen = $dtall['id_fasesmen'];
					
					
				?>
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				<input type="hidden" name="id_fasesmen" value="<?php echo $id_fasesmen; ?>">
				
				<div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal Datang :</label>
                <div class="controls span4">
                <input type="text" id="datepicker" class="row-fluid" name="tgl_dtg" required />
                </div>
              	</div>

                <?php 
	                $qpasien = mysql_query("SELECT * FROM pasien where id_pasien='$id_pasien'");
	                $dtpasien = mysql_fetch_array($qpasien);
                ?>
                
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">No Rekam Medik :</label>
                 <div class="controls span4">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $dtpasien['no_rmedik']; ?>" />
                 </div>
              	 </div>
                 
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Nama :</label>
                 <div class="controls span4">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $dtpasien['nm_pasien']; ?>" />
                 </div>
              	 </div>
                 
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Alamat :</label>
                 <div class="controls span4">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $dtpasien['alamat_pasien']; ?>" />
                 </div>
              	 </div>
                
                	<?php
                	
                	$querysm = mysql_query("SELECT * FROM formulir_asesmen where id_pasien='$id_pasien'");
                	$rowsm = mysql_fetch_array($querysm);

                	$rp_kronis = $rowsm['rp_kronis'];
                	$hiv = $rowsm['hiv'];
                	$t_medis = $rowsm['t_medis'];
                	$hepatitis_b = $rowsm['hepatitis_b'];
                	$hepatitis_c = $rowsm['hepatitis_c'];
                	
                	if ($rp_kronis == 'ya') {
                		$rp_kronis = 1; 		
                	} else if ($rp_kronis == 'tidak') {
                		$rp_kronis = 0;
					} 

                	if ($hiv == 'ya') {
                		$hiv = 1;
                	} else if ($hiv == 'tidak') {
                		$hiv = 0;
                	} 

                	if ($t_medis == 'ya') {
                		$t_medis = 1;
                	} else if ($t_medis == 'tidak') {
                		$t_medis = 0;
                	} 

                	if ($hepatitis_b == 'ya') {
                		$hepatitis_b = 1;
                	} else if ($hepatitis_b == 'tidak') {
                		$hepatitis_b = 0;
                	}

                	if ($hepatitis_c == 'ya') {
                		$hepatitis_c = 1;
                	} else if ($hepatitis_c == 'tidak') {
                		$hepatitis_c = 0;
                	}

                	$jumlahsm = $rp_kronis + $hiv + $t_medis + $hepatitis_b + $hepatitis_c;
                	
                	if($jumlahsm <= 1) {
                		$hasilsm = "0 = tidak ada masalah yang berarti, tidak perlu intervensi.";
                	} elseif ($jumlahsm <= 3) {
                		$hasilsm = "1 : ada sedikit masalah, tetapi intervensi/bantuan tidak terlalu penting.";
                	} elseif ($jumlahsm <= 5) {
                		$hasilsm = "2 = masalah tergolong sedang, tetapi butuh beberapa bantuan / intervensi.";
                	} elseif ($jumlahsm <= 7) {
                		$hasilsm = "3 = masalah serius, dibutuhkan intervensi / bantuan";
                	} elseif ($jumlahsm <= 9) {
                		$hasilsm = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan.";
                	} elseif ($jumlahsm >= 9) {
                		$hasilsm = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan.";
                	}
                	?>
                     <div class="form-row control-group row-fluid">
                     <label class="control-label span3" for="disabled-input">Medis :</label>
                     <div class="controls span9">
                     <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilsm; ?>" />
                     <input type="hidden" name="medis" value="<?php echo $hasilsm; ?>">
                     </div>
                     </div>
					
                 <?php 
                	$querysp = mysql_query("SELECT * FROM formulir_asesmen where id_pasien='$id_pasien'");
                	$rowsp = mysql_fetch_array($querysp);

                	$dhidup = $rowsp['dhidup'];
                	$finansial = $rowsp['finansial'];
                	$t_tinggal = $rowsp['t_tinggal'];
                	$makan = $rowsp['makan'];
                	$perawatan = $rowsp['perawatan'];
                	$p_pekerjaan = $rowsp['p_pekerjaan'];
                	
                	if ($dhidup == 'ya') {
                		$dhidup = 1;
                	} else if ($dhidup == 'tidak') {
                		$dhidup = 0;
                	} 

                	if ($finansial == 'ya') {
                		$finansial = 1;
                	} else if ($finansial == 'tidak') {
                		$finansial = 0;
                	} 

                	if ($t_tinggal == 'ya') {
                		$t_tinggal = 1;
                	} else if ($t_tinggal == 'tidak') {
                		$t_tinggal = 0;
                	} 

                	if ($makan == 'ya') {
                		$makan = 1;
                	} else if ($makan == 'tidak') {
                		$makan = 0;
                	}

                	if ($perawatan == 'ya') {
                		$perawatan = 1;
                	} else if ($perawatan == 'tidak') {
                		$perawatan = 0;
                	}

                	if ($p_pekerjaan == 'pu') {
                		$p_pekerjaan = 1;
                	} else if ($p_pekerjaan == 'pa') {
                		$p_pekerjaan = 2;
                	} else if ($p_pekerjaan == 'tb') {
                		$p_pekerjaan = 99;
                	} else {
                        $p_pekerjaan = 0;
                    }

                	$jumlahsp = $dhidup + $finansial + $t_tinggal + $makan + $perawatan + $p_pekerjaan;
                	
                	if($jumlahsp <= 1) {
                		$hasilsp = "0 = tidak ada masalah yang berarti, tidak perlu intervensi.";
                	} elseif ($jumlahsp <= 3) {
                		$hasilsp = "1 : ada sedikit masalah, tetapi intervensi/bantuan tidak terlalu penting.";
                	} elseif ($jumlahsp <= 5) {
                		$hasilsp = "2 = masalah tergolong sedang, tetapi butuh beberapa bantuan / intervensi.";
                	} elseif ($jumlahsp <= 7) {
                		$hasilsp = "3 = masalah serius, dibutuhkan intervensi / bantuan";
                	} elseif ($jumlahsp <= 9) {
                		$hasilsp = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan.";
                	} elseif ($jumlahsp >= 9) {
                		$hasilsp = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan.";
                	}
                	?>
                    <div class="form-row control-group row-fluid">
                 	<label class="control-label span3" for="disabled-input">Pekerjaan / Dukungan : </label>
                    <div class="controls span9">
                    <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilsp; ?>" />
                    <input type="hidden" name="dukungan" value="<?php echo $hasilsp; ?>">
                    </div>
                    </div>
					
                 <?php
                 	$queryspn = mysql_query("SELECT * FROM formulir_asesmen where id_pasien='$id_pasien'");
                	$rowspn = mysql_fetch_array($queryspn);
                 		$alkohol = $rowspn['alkohol'];
						$heroin = $rowspn['heroin'];
						$metadon = $rowspn['metadon'];
						$analgesik = $rowspn['analgesik'];
						$barbiturat = $rowspn['barbiturat'];
						$sedatif = $rowspn['sedatif'];
						$kokain = $rowspn['kokain'];
						$amfetamin = $rowspn['amfetamin'];
						$kanabis = $rowspn['kanabis'];
						$halusinogen = $rowspn['halusinogen'];
						$inhalan = $rowspn['inhalan'];
						$bzat = $rowspn['b_zat'];

						$trehabilitasi = $rowspn['t_rehabilitasi'];
						if ($trehabilitasi == 'ya') {
                			$trehabilitasi = 1;
                		} else if ($trehabilitasi == 'tidak') {
	                		$trehabilitasi = 0;
	                	}

						$od = $rowspn['od'];
						if ($od == 'ya') {
                			$od = 1;
                		} else if ($od == 'tidak') {
	                		$od = 0;
	                	}
						
						$cpn = $rowspn['c_penanggulangan'];
						if ($cpn == "rs") {
							$cpn = 1;
						} else if ($cpn == "ps") {
							$cpn = 2;
						} else if ($cpn == "sn") {
                            $cpn = 3;
                        } else {
							$cpn = 0;
						} 

						$jumlahspn = $alkohol + $heroin + $metadon + $analgesik + $barbiturat + $sedatif + $kokain + $amfetamin + $kanabis + $halusinogen + $inhalan + $bzat + $od + $cpn + $trehabilitasi;
                 		if($jumlahspn <= 1) {
	                		$hasilspn = "0 = tidak ada masalah yang berarti, tidak perlu intervensi.";
	                	} elseif ($jumlahspn <= 3) {
	                		$hasilspn = "1 = ada sedikit masalah, tetapi intervensi/bantuan tidak terlalu penting.";
	                	} elseif ($jumlahspn <= 5) {
	                		$hasilspn = "2 = masalah tergolong sedang, tetapi butuh beberapa bantuan / intervensi.";
	                	} elseif ($jumlahspn <= 7) {
	                		$hasilspn = "3 = masalah serius, dibutuhkan intervensi / bantuan";
	                	} elseif ($jumlahspn <= 9) {
	                		$hasilspn = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan.";
	                	} elseif ($jumlahspn >= 9) {
	                		$hasilspn = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan.";
	                	}
                 ?>
                 	<div class="form-row control-group row-fluid">
                    <label class="control-label span3" for="disabled-input">Napza : </label>
                    <div class="controls span9">
                    <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilspn; ?>" />
                    <input type="hidden" name="napza" value="<?php echo $hasilspn; ?>">
                    </div>
                    </div>
                 
                 <?php
                 	$querylg = mysql_query("SELECT * FROM formulir_asesmen where id_pasien='$id_pasien'");
					$rowlg = mysql_fetch_array($querylg);
									
						
						$id_fasesmen = $rowlg['id_fasesmen'];
						$mencuri = $rowlg['bb_mp'];
						$bb_mp = $rowlg['bb_mp'];
						$m_narkoba = $rowlg['m_narkoba'];
						$pemalsuan = $rowlg['pemalsuan'];
						$p_bersenjata = $rowlg['p_bersenjata'];
						$pembobolan = $rowlg['pembobolan'];
						$perampokan = $rowlg['perampokan'];
						$penyerangan = $rowlg['penyerangan'];
						$p_rumah = $rowlg['p_rumah'];
						$pemerkosaan = $rowlg['pemerkosaan'];
						$pembunuhan = $rowlg['pembunuhan'];
						$pelacuran = $rowlg['pelacuran'];
						$m_pengadilan = $rowlg['m_pengadilan'];
						$lain_lain = $rowlg['lain_lain'];
						$tuntutan = $rowlg['tuntutan'];


						$jumlahlg = $mencuri + $bb_mp +	$m_narkoba + $pemalsuan + $p_bersenjata + $pembobolan + $perampokan + $penyerangan + $p_rumah + $pemerkosaan + $pembunuhan + $pelacuran +	$m_pengadilan + $lain_lain + $tuntutan;
						
						if($jumlahlg <= 1) {
                			$hasillg = "0 = tidak ada masalah yang berarti, tidak perlu intervensi.";
	                	} elseif ($jumlahlg <= 3) {
	                		$hasillg = "1 : ada sedikit masalah, tetapi intervensi/bantuan tidak terlalu penting.";
	                	} elseif ($jumlahlg <= 5) {
	                		$hasillg = "2 = masalah tergolong sedang, tetapi butuh beberapa bantuan / intervensi.";
	                	} elseif ($jumlahlg <= 7) {
	                		$hasillg = "3 = masalah serius, dibutuhkan intervensi / bantuan";
	                	} elseif ($jumlahlg <= 9) {
	                		$hasillg = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan.";
	                	} elseif ($jumlahlg >= 9) {
	                		$hasillg = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan.";
	                	}
				?>
                	<div class="form-row control-group row-fluid">
                    <label class="control-label span3" for="disabled-input">Legal :</label>
                    <div class="controls span9">
                    <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasillg; ?>" />
                    <input type="hidden" name="legal" value="<?php echo $hasillg; ?>">
                    </div>
                    </div>
					
                 <?php
					$queryrk = mysql_query("SELECT *FROM formulir_asesmen where id_pasien = '$id_pasien'");
					$rowrk = mysql_fetch_array($queryrk);
					
						$si = $rowrk['situasi'];
						if ($si == "pa") {
							$si = 1;
						} else if ($si == "ps") {
							$si = 2;
						} else if ($si == "as") {
							$si = 3;
						} else if ($si == "ot") {
							$si = 4;
						} else if ($si == "k") {
							$si = 5;
						} else if ($si == "t") {
							$si = 6;
						} else if ($si == "s") {
							$si = 7;
						} else if ($si == "lt") {
							$si = 8;
						} else if ($si == "kts") {
							$si = 9;
						} 
					
						$ozat = $rowrk['o_zat'];
						if ($ozat == 'ya') {
                			$ozat = 1;
                		} else if ($ozat == 'tidak') {
	                		$ozat = 0;
	                	}

						$kandungtiri = $rowrk['kandung_tiri'];
						if ($kandungtiri == 'ya') {
                			$kandungtiri = 1;
                		} else if ($kandungtiri == 'tidak') {
	                		$kandungtiri = 0;
	                	}

						$ayahibu = $rowrk['ayah_ibu'];
						if ($ayahibu == 'ya') {
                			$ayahibu = 1;
                		} else if ($ayahibu == 'tidak') {
	                		$ayahibu = 0;
	                	}

						$pasangan = $rowrk['pasangan'];
						if ($pasangan == 'ya') {
                			$pasangan = 1;
                		} else if ($pasangan == 'tidak') {
	                		$pasangan = 0;
	                	}

						$omtante = $rowrk['om_tante'];
						if ($omtante == 'ya') {
                			$omtante = 1;
                		} else if ($omtante == 'tidak') {
	                		$omtante = 0;
	                	}

						$teman = $rowrk['teman'];
						if ($teman == 'ya') {
                			$teman = 1;
                		} else if ($teman == 'tidak') {
	                		$teman = 0;
	                	}

						$lainnya = $rowrk['lainnya'];
						if ($lainnya == 'ya') {
                			$lainnya = 1;
                		} else if ($lainnya == 'tidak') {
	                		$lainnya = 0;
	                	}

						$ibu = $rowrk['ibu'];
						if ($ibu == 'ya') {
                			$ibu = 1;
                		} else if ($ibu == 'tidak') {
	                		$ibu = 0;
	                	}

						$ayah = $rowrk['ayah'];
						if ($ayah == 'ya') {
                			$ayah = 1;
                		} else if ($ayah == 'tidak') {
	                		$ayah = 0;
	                	}

						$adikkakak = $rowrk['adik_kakak'];
						if ($adikkakak == 'ya') {
                			$adikkakak = 1;
                		} else if ($adikkakak == 'tidak') {
	                		$adikkakak = 0;
	                	}

						$psgn = $rowrk['psgn'];
						if ($psgn == 'ya') {
                			$psgn = 1;
                		} else if ($psgn == 'tidak') {
	                		$psgn = 0;
	                	}

						$anak = $rowrk['anak'];
						if ($anak == 'ya') {
                			$anak = 1;
                		} else if ($anak == 'tidak') {
	                		$anak = 0;
	                	}

						$klain = $rowrk['keluarga_lain'];
						if ($klain == 'ya') {
                			$klain = 1;
                		} else if ($klain == 'tidak') {
	                		$klain = 0;
	                	}

						$takrab = $rowrk['t_akrab'];
						if ($takrab == 'ya') {
                			$takrab = 1;
                		} else if ($takrab == 'tidak') {
	                		$takrab = 0;
	                	}

						$tetangga = $rowrk['tetangga'];
						if ($tetangga == 'ya') {
                			$tetanggatetanggatetangga = 1;
                		} else if ($tetangga == 'tidak') {
	                		$tetangga = 0;
	                	}

						$tsekerja = $rowrk['t_kerja'];
						if ($tsekerja == 'ya') {
                			$tsekerja = 1;
                		} else if ($tsekerja == 'tidak') {
	                		$tsekerja = 0;
	                	}

	                	$jumlahrk = $si + $ozat + $kandungtiri + $ayahibu + $pasangan + $omtante + $teman + $lainnya + $ibu + $ayah + $adikkakak + $psgn + $anak + $klain + $takrab + $tetangga + $tsekerja;

	                	if($jumlahrk <= 1) {
                			$hasilrk = "0 = tidak ada masalah yang berarti, tidak perlu intervensi.";
	                	} elseif ($jumlahrk <= 3) {
	                		$hasilrk = "1 : ada sedikit masalah, tetapi intervensi/bantuan tidak terlalu penting.";
	                	} elseif ($jumlahrk <= 5) {
	                		$hasilrk = "2 = masalah tergolong sedang, tetapi butuh beberapa bantuan / intervensi.";
	                	} elseif ($jumlahrk <= 7) {
	                		$hasilrk = "3 = masalah serius, dibutuhkan intervensi / bantuan";
	                	} elseif ($jumlahrk <= 9) {
	                		$hasilrk = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan.";
	                	} elseif ($jumlahrk >= 9) {
	                		$hasilrk = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan.";
	                	}
				?>
                	 <div class="form-row control-group row-fluid">
                     <label class="control-label span3" for="disabled-input">Keluarga : </label>
                     <div class="controls span9">
                     <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilrk; ?>" />
                     <input type="hidden" name="keluarga" value="<?php echo $hasilrk; ?>">
                     </div>
                     </div>
					
                 <?php
                 	$queryps = mysql_query("SELECT * FROM formulir_asesmen where id_pasien='$id_pasien'");
					$rowps = mysql_fetch_array($queryps);
					$depresi = $rowps['depresi'];
					$cemas = $rowps['cemas'];
					$halusinasi = $rowps['halusinasi'];
					$mengingat = $rowps['s_mengingat'];
					$mengontrol = $rowps['s_mengontrol'];
					$pbdiri = $rowps['p_bdiri'];
					$bbdiri = $rowps['b_bdiri'];
					$ppsikiater = $rowps['p_psikiater'];

					if ($depresi == 'ya') {
                		$depresi = 1;               		
                	} else if ($depresi == 'tidak') {
                		$depresi = 0;
                	} 

                	if ($cemas == 'ya') {
                		$cemas = 1;
                	} else if ($cemas == 'tidak') {
                		$cemas = 0;
                	} 

                	if ($halusinasi == 'ya') {
                		$halusinasi = 1;;
                	} else if ($halusinasi == 'tidak') {
                		$halusinasi = 0;
                	} 

                	if ($mengingat == 'ya') {
                		$mengingat = 1;
                	} else if ($mengingat == 'tidak') {
                		$mengingat = 0;
                	}

                	if ($mengontrol == 'ya') {
                		$mengontrol = 1;
                	} else if ($perawatan == 'tidak') {
                		$perawatan = 0;
                	}

                	if ($pbdiri == 'ya') {
                		$pbdiri = 1;
                	} else if ($pbdiri == 'tidak') {
                		$pbdiri = 0;
                	}

                	if ($bbdiri == 'ya') {
                		$bbdiri = 1;
                	} else if ($bbdiri == 'tidak') {
                		$bbdiri = 0;
                	}

                	if ($ppsikiater == 'ya') {
                		$ppsikiater = 1;
                	} else if ($ppsikiater == 'tidak') {
                		$ppsikiater = 0;
                	}

                	$jumlahps = $depresi + $cemas + $halusinasi + $mengingat + $mengontrol + $pbdiri + $bbdiri + $ppsikiater;
                	if($jumlahps <= 1) {
                		$hasilps = "0 = tidak ada masalah yang berarti, tidak perlu intervensi.";
                	} elseif ($jumlahps <= 3) {
                		$hasilps = "1 : ada sedikit masalah, tetapi intervensi/bantuan tidak terlalu penting.";
                	} elseif ($jumlahps <= 5) {
                		$hasilps = "2 = masalah tergolong sedang, tetapi butuh beberapa bantuan / intervensi.";
                	} elseif ($jumlahps <= 7) {
                		$hasilps = "3 = masalah serius, dibutuhkan intervensi / bantuan";
                	} elseif ($jumlahps <= 9) {
                		$hasilps = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan.";
                	} elseif ($jumlahps >= 9) {
                		$hasilps = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan.";
                	}
                 ?>
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Psikiatris :</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilps; ?>" />
                 <input type="hidden" name="psikiatris" value="<?php echo $hasilps; ?>">
                 </div>
              	 </div>
					
                 <?php
                  $kriteria =  $hasilsm + $hasilsp + $hasilspn + $hasillg + $hasilrk + $hasilps;
                  	if ($kriteria < '1'){
                        $kriteria="-"; 
                    } else if ($kriteria <= '10') {
						$kriteria="F10: Gangguan mental dan perilaku akibat pengunaan alkohol";
				  	} else if ($kriteria == '11'){
					  	$kriteria="F11: Gangguan Mental dan perilaku akibat penggunaan opioid";
					} else if ($kriteria == '12'){
					  	$kriteria="F12: Gangguan Mental dan perilaku akibat penggunaan kanabis";
					} else if ($kriteria == '13'){
					  	$kriteria="F13: Gangguan Mental dan perilaku akibat penggunaan sedatif hipnotik";
					} else if ($kriteria == '14'){
					  	$kriteria="F14: Gangguan Mental dan perilaku akibat penggunaan kokain";
					} else if ($kriteria == '15'){
					  	$kriteria="F15: Gangguan Mental dan perilaku akibat penggunaan stimulasi lainnya";
					} else if ($kriteria == '16'){
					  	$kriteria="F16: Gangguan Mental dan perilaku akibat penggunaan halusinogenetik";
					} else if ($kriteria == '17'){
					  	$kriteria="F17: Gangguan Mental dan perilaku akibat penggunaan tembakau";
					} else if ($kriteria >= '18'){
					  	$kriteria="F18: Gangguan Mental dan perilaku akibat zat pelarut yang mudah menguap, atau zat multipel dan zat psiko aktif lainnya"; 
					} 
                 ?>
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Klien Memenuhi Kriteria Diagnosis Napza :</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $kriteria; ?>"/>
                 <input type="hidden" name="d_napza" value="<?php echo $kriteria; ?>" />
                 </div>
              	 </div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Diagnosis Lain :</label>
                <div class="controls span9">
                <input type="text" id="normal-field" class="row-fluid" name="d_lain" required />
                </div>
              	</div>
                 
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Resume Masalah :</label>
                <div class="controls span9">
                <input type="text" id="normal-field" class="row-fluid" name="r_masalah" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid ">
                <label class="control-label span3">Rencana Tindak Lanjut :</label>
                <div class="controls span7">
                  <label class="checkbox ">
                  <input type="checkbox" id="inlineCheckbox1" name="r_tlanjut[]" value="asesmen lanjutan / mendalam">asesmen lanjutan / mendalam</label>
                  <label class="checkbox ">
                  <input type="checkbox" id="inlineCheckbox1" name="r_tlanjut[]" value="evaluasi sikologis">evaluasi sikologis </label>
                  <label class="checkbox">
                  <input type="checkbox" id="inlineCheckbox2" name="r_tlanjut[]" value="program detoksifikasi">program detoksifikasi</label>
                  <label class="checkbox">
                  <input type="checkbox" id="inlineCheckbox2" name="r_tlanjut[]" value="intervensi singkat">intervensi singkat</label>
                  <label class="checkbox">
                  <input type="checkbox" id="inlineCheckbox2" name="r_tlanjut[]" value="terapi rumatan">terapi rumatan</label>
                  <label class="checkbox">
                  <input type="checkbox" id="inlineCheckbox2" name="r_tlanjut[]" value="rehabilitasi rawat inap">rehabilitasi rawat inap</label>
                  <label class="checkbox">
                  <input type="checkbox" id="inlineCheckbox2" name="r_tlanjut[]" value="konseling">konseling</label>
                  <label class="checkbox">
                  <input type="checkbox" id="inlineCheckbox2" name="r_tlanjut[]" value="lain-lain">lain-lain</label>
                </div>
              </div>

                 <div class="form-actions row-fluid">
                	<div class="span7 offset3">
                      <button type="submit" class="btn btn-primary" name="submit" value="Simpan">Simpan</button>
                      <button type="reset" class="btn btn-secondary" value="Batal">Batal</button>
                    </div>
              	</div>
				</form>
			</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span8" -->
<?php } ?>
	