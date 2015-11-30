<?php
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
            <h3><i class="icon-book"></i><span>Data Hasil Asesmen</span></h3>
		</div>
        <div class="content">
				<form class="form-horizontal row-fluid" action="prohasesmen.php" method="post">
				<input type="hidden" name="id_hasesmen" value="<?php echo $id_hasesmen; ?>">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Tanggal Datang</label>
                 <div class="controls span4">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['tgl_dtg']; ?>" />
                 </div>
              	 </div>				
                
                <?php 
	                $qpasien = mysql_query("SELECT * FROM pasien where id_pasien='$id_pasien'");
	                $dtpasien = mysql_fetch_array($qpasien);
                ?>
                
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">No Rekam Medik</label>
                 <div class="controls span4">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $dtpasien['no_rmedik']; ?>"/>
                 </div>
              	 </div>
                 
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Nama</label>
                 <div class="controls span4">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $dtpasien['nm_pasien']; ?>"/>
                 </div>
              	 </div>
                 
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Alamat</label>
                 <div class="controls span4">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $dtpasien['alamat_pasien']; ?>"/>
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
                 <label class="control-label span3" for="disabled-input">Medis</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilsm; ?>"/>
                 </div>
              	 </div>
					
                 <?php 
                	$jumlahsp = $rowhs['dukungan'];

                	if($jumlahsp <= 1) {
                		$hasilsp = "0 = tidak ada masalah yang berarti, tidak perlu intervensi";
                	} elseif ($jumlahsp <= 3) {
                		$hasilsp = "1 : ada sedikit masalah, tetapi intervensi/bantuan tidak terlalu penting";
                	} elseif ($jumlahsp <= 5) {
                		$hasilsp = "2 = masalah tergolong sedang, tetapi butuh beberapa bantuan / intervensi";
                	} elseif ($jumlahsp <= 7) {
                		$hasilsp = "3 = masalah serius, dibutuhkan intervensi / bantuan";
                	} elseif ($jumlahsp <= 9) {
                		$hasilsp = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan";
                	} elseif ($jumlahsp >= 9) {
                		$hasilsp = "4 = masalah sangat serius / berat, sangat membutuhkan intervensi / bantuan";
                	}
                ?>
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Pekerjaan / Dukungan</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilsp; ?>"/>
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
                 <label class="control-label span3" for="disabled-input">Napza</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilspn; ?>"/>
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
                 <label class="control-label span3" for="disabled-input">Legal</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasillg; ?>"/>
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
                 <label class="control-label span3" for="disabled-input">Keluarga</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilrk; ?>"/>
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
                 <label class="control-label span3" for="disabled-input">Psikiatris</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasilps; ?>"/>
                 </div>
              	 </div>
                 
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Klien Memenuhi Kriteria Diagnosis Napza</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $rowhs['d_napza']; ?>"/>
                 </div>
              	 </div>
                 
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Diagnosis Lain</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $rowhs['d_lain']; ?>"/>
                 </div>
              	 </div>
                 
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Resume Masalah</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $rowhs['r_masalah']; ?>"/>
                 </div>
              	 </div>
                 
                 <div class="form-row control-group row-fluid">
                 <label class="control-label span3" for="disabled-input">Rencana Tindak Lanjut</label>
                 <div class="controls span9">
                 <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $rowhs['r_tlanjut']; ?>"/>
                 </div>
              	 </div>

                 <div class="form-actions row-fluid">
                    <div class="span7 offset3">
                      <a href="?menu=hasesmen&action=update&id=<?php echo $id_pasien; ?>&idhasesmen=<?php echo $id_hasesmen; ?>"><button type="button" class="btn btn-primary" value="Kembali">Edit</button></a>
                    </div>
                </div>

				</form>
		</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span8" -->