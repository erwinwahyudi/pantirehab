<?php
		include "koneksidb.php";
				
		if(isset($_GET['action'])){				
			if($_GET['action'] == "update")
			{
				$id_pasien = $_GET['id'];
						
				$query = mysql_query("select * from pasien where id_pasien='$id_pasien'");
				$row = mysql_fetch_array($query);
?>
				
<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Edit Data Pasien</span></h3>
		</div>
		<div class="content">  
                <form class="form-horizontal row-fluid" action="propasien.php" method="post">
				<input type="hidden" name="id_pasien" value="<?php echo $row['id_pasien']; ?>">	
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">No Rekam Medik :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="norm" required value="<?php echo $row['no_rmedik']; ?>"/>
                </div>
              	</div>
          
				<div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Pasien :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nmpasien" required value="<?php echo $row['nm_pasien']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal Masuk :</label>
                <div class="controls span6">
                <input type="text" id="datepicker" class="row-fluid" name="tglmsk" required value="<?php echo $row['tgl_masuk']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal Keluar :</label>
                <div class="controls span6">
                <input type="text" id="datepicker1" class="row-fluid" name="tglklr" required value="<?php echo $row['tgl_keluar']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">TTL :</label>
                <div class="controls span6">
                <input type="text" id="datepicker2" class="row-fluid" name="ttl" required value="<?php echo $row['ttl_pasien']; ?>"/>
                </div>
              	</div>
              
              	<div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Usia</label>
                <div class="controls span2">
                  <select name="usia" class="row-fluid" id="default-select"/>
                  	<?php 
					$usia = $row['usia'];
					//echo $usia;
					for ($i=1; $i <= 70 ; $i=$i+1) { 
                  		if($i==$usia){
							echo "<option value='".$i."' selected>".$i."</option>";
						} else {
                  			echo "<option value='".$i."'>".$i."</option>";
						}
					}
                  	?>
                  </select>
                </div>
                </div>
                
                <?php
					$jk = $row['j_kelamin'];
					if($jk == "Laki-laki")
					{
						$laki = "Checked";
						$perempuan = "";
					}
					else
					{
						$laki = "";
						$perempuan = "Checked";
					}
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3">Jenis Kelamin :</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="jk" value="Laki-laki" <?php echo $laki; ?> />Laki - Laki</label>
                	<label class="inline radio">
                	<input type="radio" name="jk" value="Perempuan" <?php echo $perempuan; ?> />Perempuan</label>
               	</div>
              	</div>
					
				<?php 
						$agama = $row['agama'];
						if($agama == "Islam")
						{
							$islam ="selected"; $protestan = ""; $katolik = "";	$hindu = "";	$budha = "";	
						}
						else if ($agama == "Protestan")
						{
							$islam =""; $protestan = "selected"; $katolik = "";	$hindu = "";	$budha = "";
						}
						else if ($agama == "Katolik")
						{
							$islam =""; $protestan = ""; $katolik = "selected";	$hindu = "";	$budha = "";
						}
						else if ($agama == "Hindu")
						{
							$islam =""; $protestan = ""; $katolik = "";	$hindu = "selected";	$budha = "";
						}
						else if ($agama == "Budha")
						{
							$islam =""; $protestan = ""; $katolik = "";	$hindu = "";	$budha = "selected";	
						}
						
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Agama</label>
                <div class="controls span6">
                <select name="agama" class="row-fluid" id="default-select">
                    <option value="Islam" <?php echo $islam; ?> >Islam</option>
                    <option value="Protestan" <?php echo $protestan; ?> >Protestan</option>
                    <option value="Katolik" <?php echo $katolik; ?> >Katolik</option>
                    <option value="Hindu" <?php echo $hindu; ?> >Hindu</option>
                    <option value="Budha" <?php echo $budha; ?> >Budha</option>
                </select>
                </div>
                </div>
				    	
            	<?php 
						$pendidikan = $row['pendidikan'];
						if($pendidikan == "SD")
						{
							$sd ="selected"; $smp = ""; $sma = "";	$ak = "";	$pt = "";	
						}
						else if ($pendidikan == "SMP")
						{
							$sd =""; $smp = "selected"; $sma = "";	$ak = "";	$pt = "";
						}
						else if ($pendidikan == "SMA")
						{
							$sd =""; $smp = ""; $sma = "selected";	$ak = "";	$pt = "";
						}
						else if ($pendidikan == "Akademik")
						{
							$sd =""; $smp = ""; $sma = "";	$ak = "selected";	$pt = "";
						}
						else if ($pendidikan == "Perguruan Tinggi")
						{
							$sd =""; $smp = ""; $sma = "";	$ak = "";	$pt = "selected";	
						}
						
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Pendidikan</label>
                <div class="controls span6">
                <select name="pendidikan" class="row-fluid" id="default-select">
                    <option value="SD" <?php echo $sd; ?> >SD</option>
                    <option value="SMP" <?php echo $smp; ?> >SMP</option>
                    <option value="SMA" <?php echo $sma; ?> >SMA</option>
                    <option value="Akademik" <?php echo $ak; ?> >Akademik</option>
                    <option value="Perguruan Tinggi" <?php echo $pt; ?> >Perguruan Tinggi</option>
                </select>
                </div>
                </div>
						
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Pekerjaan :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="pekerjaan" required value="<?php echo $row['pekerjaan']; ?>"/>
            	</div>
              	</div>
                
				<?php
					$status = $row['status'];
					if($status == "Lama")
					{
						$baru = "Checked";
						$lama = "";
					}
					else
					{
						$baru = "";
						$lama = "Checked";
					}
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3">Pasien :</label>
                <div class="controls span7">
                  <label class="inline radio">
                  <input type="radio" name="pasien" value="Baru" <?php echo $baru; ?>/>Baru</label>
                  <label class="inline radio">
                  <input type="radio" name="pasien" value="Lama" <?php echo $lama; ?>/>Lama</label>
                </div>
              	</div>
				
                <?php 
						$status = $row['s_perkawinan'];
						if($status == "Menikah")
						{
							$m ="selected"; $bm = ""; $duda = "";	$janda = "";	
						}
						else if ($status == "Belum Menikah")
						{
							$m =""; $bm = "selected"; $duda = "";	$janda = "";
						}
						else if ($status == "Duda")
						{
							$m =""; $bm = ""; $duda = "selected";	$janda = "";
						}
						else if ($status == "Janda")
						{
							$m =""; $bm = ""; $duda = "";	$janda = "selected";
						}
						
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Status</label>
               	<div class="controls span6">     
				<select name="status" class="row-fluid" id="default-select">
					<option value="Menikah"<?php echo $m; ?>>Menikah</option>
					<option value="Belum Menikah"<?php echo $bm; ?>>Belum Menikah</option>
					<option value="Duda"<?php echo $duda; ?>>Duda</option>
					<option value="Janda"<?php echo $janda; ?>>Janda</option>
				</select>
				</div>
               	</div>
                
                <?php 
						$penyakit = $row['hiv_aids'];
						if($penyakit == "-")
						{
							$null ="selected"; $hiv = ""; $aids = "";	
						}
						else if ($penyakit == "HIV")
						{
							$null =""; $hiv = "selected"; $aids = "";
						}
						else if ($penyakit == "AIDS")
						{
							$null =""; $hiv = ""; $aids = "selected";
						}
						
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Penyakit :</label>
               	<div class="controls span6">
                <select name="penyakit" class="row-fluid" id="default-select">
					<option value="-"<?php echo $null; ?>>-</option>
					<option value="HIV"<?php echo $hiv; ?>>HIV</option>
					<option value="AIDS"<?php echo $aids; ?>>AIDS</option>
				</select>
				</div>
                </div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Alamat :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="aps" required value="<?php echo $row['alamat_pasien']; ?>"/>
                </div>
                </div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">No HP :</label>
                <div class="controls span6">
                <input type="number" id="normal-field" class="row-fluid" name="nohpps" required value="<?php echo $row['nohp_pasien']; ?>"/>
                </div>
              	</div>
                 
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Bangsa/Suku :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="bs" required value="<?php echo $row['bangsa_suku']; ?>"/>
                </div>
              	</div>  
				
               <?php 
						$jenis = $row['jenis'];
						if($jenis == "Ganja")
						{
							$ganja ="selected"; $morphine = ""; $shabu = "";	$obat = "";	$alkohol = ""; $kokain = "";	
						}
						else if ($jenis == "Morphine")
						{
							$ganja =""; $morphine = "selected"; $shabu = "";	$obat = "";	$alkohol = ""; $kokain = "";
						}
						else if ($jenis == "Shabu")
						{
							$ganja =""; $morphine = ""; $shabu = "selected";	$obat = "";	$alkohol = ""; $kokain = "";
						}
						else if ($jenis == "Obat")
						{
							$ganja =""; $morphine = ""; $shabu = "";	$obat = "selected";	$alkohol = ""; $kokain = "";
						}
						else if ($jenis == "Alkohol")
						{
							$ganja =""; $morphine = ""; $shabu = "";	$obat = "";	$alkohol = "selected"; $kokain = "";	
						}
						else if ($jenis == "Kokain")
						{
							$ganja =""; $morphine = ""; $shabu = "";	$obat = "";	$alkohol = ""; $kokain = "selected";
						}
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Jenis</label>
                <div class="controls span6">
                  <select name="jns" class="row-fluid" id="default-select">
                    <option value="Ganja" <?php echo $ganja; ?> >Ganja</option>
					<option value="Morphine" <?php echo $morphine; ?> >Morphine</option>
					<option value="Shabu" <?php echo $shabu; ?> >Shabu</option>
					<option value="Obat" <?php echo $obat; ?> >Obat</option>
                    <option value="Alkohol" <?php echo $alkohol; ?> >Alkohol</option>
                    <option value="Kokain" <?php echo $kokain; ?> >Kokain</option>
                  </select>
                </div>
                </div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Keterangan :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="keterangan" required value="<?php echo $row['keterangan']; ?>"/>
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
</div><!-- class="span7" -->
	
			<?php
			}
	}
	else { ?>
    
<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Tambah Data Pasien</span></h3>
		</div>
		<div class="content">  
				<form class="form-horizontal row-fluid" action="propasien.php" method="post">
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">No Rekam Medik :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="norm" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Pasien :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nmpasien" required />
                </div>
              	</div>
               
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal Masuk :</label>
                <div class="controls span6">
                <input type="text" id="datepicker" class="row-fluid" name="tglmsk" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal Keluar :</label>
                <div class="controls span6">
                <input type="text" id="datepicker1" class="row-fluid" value="0000-00-00" disabled="disable" required />
                <input type="hidden" id="datepicker1" class="row-fluid" name="tglklr" value="0000-00-00" />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">TTL :</label>
                <div class="controls span6">
                <input type="text" id="datepicker2" class="row-fluid" name="ttl" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Usia</label>
                <div class="controls span2">
                  <select name="usia" class="row-fluid" id="default-select">
                  	<?php 
                  	for ($i=1; $i <= 70 ; $i=$i+1) { 
                  		echo $i."<br>";
                  		echo "<option value='".$i."'>".$i."</option>";

                  	}
                  	?>
                  </select>
                </div>
                </div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3">Jenis Kelamin :</label>
                <div class="controls span7">
                  <label class="inline radio">
                  <input type="radio" name="jk" value="Laki-laki" checked="1"/>Laki - Laki</label>
                  <label class="inline radio">
                  <input type="radio" name="jk" value="Perempuan"/>Perempuan</label>
                </div>
              	</div>
               
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Agama</label>
                <div class="controls span6">
                  <select name="agama" class="row-fluid" id="default-select">
                    <option value="Islam"selected="1">Islam</option>
					<option value="Protestan">Protestan</option>
					<option value="Katolik">Katolik</option>
					<option value="Hindu">Hindu</option>
					<option value="Budha">Budha</option>
                  </select>
                </div>
                </div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Pendidikan</label>
                <div class="controls span6">
                  <select name="pendidikan" class="row-fluid" id="default-select">
                    <option value="SD"selected="1">SD</option>
					<option value="SMP">SMP</option>
					<option value="SMA">SMA</option>
					<option value="Akademik">Akademik</option>
					<option value="Perguruan Tinggi">Perguruan Tinggi</option>
                  </select>
                </div>
                </div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Pekerjaan :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="pekerjaan" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3">Pasien :</label>
                <div class="controls span7">
                  <label class="inline radio">
                  <input type="radio" name="pasien" value="Baru" checked="1"/>Baru</label>
                  <label class="inline radio">
                  <input type="radio" name="pasien" value="Lama"/>Lama</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Status</label>
                <div class="controls span6">
                  <select name="status" class="row-fluid" id="default-select">
                    <option value="Menikah"selected="1">Menikah</option>
					<option value="Belum Menikah">Belum Menikah</option>
					<option value="Duda">Duda</option>
					<option value="Janda">Janda</option>
                  </select>
                </div>
                </div>
                 
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Penyakit</label>
                <div class="controls span6">
                  <select name="penyakit" class="row-fluid" id="default-select">
                    <option value="-" selected="1">-</option>
					<option value="HIV">HIV</option>
					<option value="AIDS">AIDS</option>
                  </select>
                </div>
                </div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Alamat :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="aps" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">No HP :</label>
                <div class="controls span6">
                <input type="number" id="normal-field" class="row-fluid" name="nohpps" required />
                </div>
              	</div>
                 
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Bangsa/Suku :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="bs" required />
                </div>
              	</div>  
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Jenis</label>
                <div class="controls span6">
                  <select name="jns" class="row-fluid" id="default-select">
                    <option value="Ganja"selected="1">Ganja</option>
					<option value="Morphine">Morphine</option>
					<option value="Shabu">Shabu</option>
					<option value="Obat">Obat</option>
                    <option value="Alkohol">Alkohol</option>
                    <option value="Kokain">Kokain</option>
                  </select>
                </div>
                </div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Keterangan :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="keterangan" required />
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
</div><!-- class="span7" -->
<?php } ?>
