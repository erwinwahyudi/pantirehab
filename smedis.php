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
				<form class="form-horizontal row-fluid" action="prosmedis.php" method="POST">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				<input type="hidden" name="id_fasesmen" value="<?php echo $row['id_fasesmen']; ?>">	
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Jenis Penyakit :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="jpenyakit" required value="<?php echo $row['j_penyakit']; ?>"/>
                </div>
              	</div> 
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Tahun Rawat :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="trawat" required value="<?php echo $row['t_rawat']; ?>"/>
                </div>
              	</div> 
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Lama :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="lama" required value="<?php echo $row['lama']; ?>"/>
                </div>
              	</div> 
              
                <?php
					$rpk = $row['rp_kronis'];
					if ($rpk == "ya") {
						$rpky = "checked";
						$rpkt = "";
					} else {
						$rpky = "";
						$rpkt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Riwayat Penyakit Kronis :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="rpkronis" value="ya" <?php echo $rpky; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="rpkronis" value="tidak" <?php echo $rpkt; ?>/>Tidak</label>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Jenis Penyakit Kronis :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="jpykt" required value="<?php echo $row['j_pykt']; ?>"/>
                </div>
              	</div> 
					
                <?php
					$tm = $row['t_medis'];
					if ($tm == "ya") {
						$tmy = "checked";
						$tmt = "";
					} else {
						$tmy = "";
						$tmt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Terapi Medis :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="tmedis" value="ya" <?php echo $tmy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="tmedis" value="tidak" <?php echo $tmt; ?>/>Tidak</label>
                </div>
              	</div> 
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Jenis Terapi Medis :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="jtmedis" required value="<?php echo $row['j_tmedis']; ?>"/>
                </div>
              	</div> 
					
                <?php
					$hiv = $row['hiv'];
					if ($hiv == "ya") {
						$hivy = "checked";
						$hivt = "";
					} else {
						$hivy = "";
						$hivt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">HIV :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="hiv" value="ya" <?php echo $hivy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="hiv" value="tidak" <?php echo $hivt; ?> />Tidak</label>
                </div>
              	</div>
					
                <?php
					$hpb = $row['hepatitis_b'];
					if ($hpb == "ya") {
						$hpby = "checked";
						$hpbt = "";
					} else {
						$hpby = "";
						$hpbt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Hepatitis B :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="hepatitisb" value="ya" <?php echo $hpby; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="hepatitisb" value="tidak" <?php echo $hpbt; ?> />Tidak</label>
                </div>
              	</div>
					
                <?php
					$hpc = $row['hepatitis_c'];
					if ($hpc == "ya") {
						$hpcy = "checked";
						$hpct = "";
					} else {
						$hpcy = "";
						$hpct = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Hepatitis C :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="hepatitisc" value="ya" <?php echo $hpcy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="hepatitisc" value="tidak" <?php echo $hpct; ?> />Tidak</label>
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
				<form class="form-horizontal row-fluid" action="prosmedis.php" method="POST">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				
				<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Jenis Penyakit :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="jpenyakit" required/>
                </div>
              	</div> 
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Tahun Rawat :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="trawat" required/>
                </div>
              	</div> 
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Lama :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="lama" required/>
                </div>
              	</div> 
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Riwayat Penyakit Kronis :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="rpkronis" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="rpkronis" value="tidak" checked/>Tidak</label>
                </div>
              	</div>
               
				<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Jenis Penyakit Kronis :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="jpykt" required/>
                </div>
              	</div> 
                 
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Terapi Medis :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="tmedis" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="tmedis" value="tidak" checked/>Tidak</label>
                </div>
              	</div> 
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Jenis Terapi Medis :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="jtmedis" required/>
                </div>
              	</div> 
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">HIV :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="hiv" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="hiv" value="tidak" checked />Tidak</label>
                </div>
              	</div>
               
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Hepatitis B :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="hepatitisb" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="hepatitisb" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Hepatitis C :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="hepatitisc" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="hepatitisc" value="tidak" checked />Tidak</label>
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