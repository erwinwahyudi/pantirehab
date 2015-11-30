<?php
				$id_pasien = $_GET['id'];
				$querycek = mysql_query("SELECT count( * ) as num FROM formulir_asesmen where id_pasien='".$id_pasien."' ");
				$cek = mysql_fetch_assoc($querycek);
				$jlh = $cek['num'];
				
				if ( ($jlh >= 1) || (isset($_GET['action']) == "update")) {
				$id_pasien = $_GET['id'];
						
				$query = mysql_query("SELECT * from formulir_asesmen where id_pasien='$id_pasien'");
				$row = mysql_fetch_array($query);
?>
			<form class="form-horizontal row-fluid" action="proidemografis.php" method="POST">
			<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
			<input type="hidden" name="id_fasesmen" value="<?php echo $row['id_fasesmen']; ?>">	
			   
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal Datang :</label>
                <div class="controls span5">
                <input type="text" id="datepicker" class="row-fluid" name="tdt" required value="<?php echo $row['tgl_datang']; ?>"/>
                </div>
              	</div>
					
                <?php
					$sk = $row['s_kawin'];
					if ($sk == "m") {
						$mnkh = "selected=1";
						$blmnkh = "";
						$dj = "";
					} else if ($sk == "bm") {
						$mnkh = "";
						$blmnkh = "selected=1";
						$dj = "";
					} else {
						$mnkh = "";
						$blmnkh = "";
						$dj = "selected=1";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Status :</label>
                <div class="controls span5">
                  <select name="status" class="row-fluid" id="default-select">
                    <option value="m"<?php echo $mnkh; ?>>Menikah</option>
					<option value="bm"<?php echo $blmnkh; ?>>Belum Menikah</option>
					<option value="dj"<?php echo $dj; ?>>Duda/Janda</option>
                  </select>
                </div>
                </div>
					
				<?php
					$pta = $row['p_terakhir'];
					if ($pta == "sd") {
						$sd = "selected=1";
						$smp = "";
						$sma = "";
						$ak = "";
						$pt = "";
					} else if ($pta == "smp") {
						$sd = "";
						$smp = "selected=1";
						$sma = "";
						$ak = "";
						$pt = "";
					} else if ($pta == "sma") {
						$sd = "";
						$smp = "";
						$sma = "selected=1";
						$ak = "";
						$pt = "";
					} else if ($pta == "ak") {
						$sd = "";
						$smp = "";
						$sma = "";
						$ak = "selected=1";
						$pt = "";
					} else {
						$sd = "";
						$smp = "";
						$sma = "";
						$ak = "";
						$pt = "selected=1";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Pendidikan Terakhir :</label>
                <div class="controls span5">
                  <select name="pnddkntr" class="row-fluid" id="default-select">
                    <option value="sd"<?php echo $sd; ?>>SD</option>
					<option value="smp"<?php echo $smp; ?>>SMP</option>
					<option value="sma"<?php echo $sma; ?>>SMA</option>
					<option value="ak"<?php echo $ak; ?>>Akademik</option>
					<option value="pt"<?php echo $pt; ?>>Perguruan Tinggi</option>
                  </select>
                </div>
                </div>
                    
                <div class="form-actions row-fluid">
                	<div class="span7 offset3">
                      <button type="submit" class="btn btn-primary" name="update" value="update">Edit</button>
                      <button type="reset" class="btn btn-secondary" value="Batal">Batal</button>
                    </div>
              	</div>
	</form>
<?php 
		} else { 
?>
		
			<?php
				$id_pasien = $_GET['id']
			?>
			<form class="form-horizontal row-fluid" action="proidemografis.php" method="POST">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
               
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal Datang :</label>
                <div class="controls span5">
                <input type="text" id="datepicker" class="row-fluid" name="tdt" required/>
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Status :</label>
                <div class="controls span5">
                  <select name="status" class="row-fluid" id="default-select">
                    <option value="m"selected="1">Menikah</option>
					<option value="bm">Belum Menikah</option>
					<option value="dj">Duda/Janda</option>
                  </select>
                </div>
                </div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Pendidikan Terakhir :</label>
                <div class="controls span5">
                  <select name="pnddkntr" class="row-fluid" id="default-select">
                    <option value="sd"selected="1">SD</option>
					<option value="smp">SMP</option>
					<option value="sma">SMA</option>
					<option value="ak">Akademik</option>
					<option value="pt">Perguruan Tinggi</option>
                  </select>
                </div>
                </div>
                
                <div class="form-actions row-fluid">
                	<div class="span7 offset3">
                      <button type="submit" class="btn btn-primary" name="submit" value="Simpan">Simpan</button>
                      <button type="reset" class="btn btn-secondary" value="Batal">Batal</button>
                    </div>
              	</div>
				</form>
<?php } ?>
	 