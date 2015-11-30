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
				<form class="form-horizontal row-fluid" action="propfisik.php" method="POST">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				<input type="hidden" name="id_fasesmen" value="<?php echo $row['id_fasesmen']; ?>">
               
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Tekanan Darah :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="tdarah" required value="<?php echo $row['tekanan_darah']; ?>"/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Nadi :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="nadi" required value="<?php echo $row['nadi']; ?>" />
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Pernapasan :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="pernapasan" required value="<?php echo $row['pernapasan']; ?>"/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Suhu :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="suhu" required value="<?php echo $row['suhu']; ?>"/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Sistem Pencernaan :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="spencernaan" required value="<?php echo $row['s_pencernaan']; ?>"/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Sistem Jantung dan Pembuluh Darah :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="sjantung" required value="<?php echo $row['s_jantung']; ?>"/>
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Sistem Pernapasan :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="spernapasan" required value="<?php echo $row['s_pernapasan']; ?>"/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Sistem Saraf Pusat :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="sspusat" required value="<?php echo $row['s_spusat']; ?>" />
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">THT dan Kulit :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="thtk" required value="<?php echo $row['tht_kulit']; ?>" />
                </div>
              	</div>
				
        		<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Keterangan :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="ktrngn" required value="<?php echo $row['ktrngn']; ?>"/>
                </div>
              	</div>
				
                <label class="control-label span4">HASIL URINISASI</label>
                <br></br>
                 <?php
					$ube = $row['u_benzodiazepin'];
					if ($ube == "ya") {
						$ubey = "checked";
						$ubet = "";
					} else {
						$ubey = "";
						$ubet = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Benzodiazepin :</label>
                <div class="controls span3">
                  <label class="inline radio">
                  <input type="radio" name="ubenzodiazepin" value="ya" <?php echo $ubey; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ubenzodiazepin" value="tidak" <?php echo $ubet; ?> />Tidak</label>
                </div>
              	</div>
				
                 <?php
					$uka = $row['u_kanabis'];
					if ($uka == "ya") {
						$ukay = "checked";
						$ukat = "";
					} else {
						$ukay = "";
						$ukat = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Kanabis :</label>
                <div class="controls span3">
                  <label class="inline radio">
                  <input type="radio" name="ukanabis" value="ya" <?php echo $ukay; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ukanabis" value="tidak" <?php echo $ukat; ?> />Tidak</label>
                </div>
              	</div>
				
                 <?php
					$uo = $row['u_opiat'];
					if ($uo == "ya") {
						$uoy = "checked";
						$uot = "";
					} else {
						$uoy = "";
						$uot = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Opiat :</label>
                <div class="controls span3">
                  <label class="inline radio">
                  <input type="radio" name="uopiat" value="ya" <?php echo $uoy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="uopiat" value="tidak" <?php echo $uot; ?> />Tidak</label>
                </div>
              	</div>
					
               <?php
					$uam = $row['u_amfetamin'];
					if ($uam == "ya") {
						$uamy = "checked";
						$uamt = "";
					} else {
						$uamy = "";
						$uamt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Amfetamin :</label>
                <div class="controls span3">
                  <label class="inline radio">
                  <input type="radio" name="uamfetamin" value="ya" <?php echo $uamy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="uamfetamin" value="tidak" <?php echo $uamt; ?> />Tidak</label>
                </div>
              	</div>
					
                 <?php
					$uko = $row['u_kokain'];
					if ($uko == "ya") {
						$ukoy = "checked";
						$ukot = "";
					} else {
						$ukoy = "";
						$ukot = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Kokain :</label>
                <div class="controls span3">
                  <label class="inline radio">
                  <input type="radio" name="ukokain" value="ya" <?php echo $ukoy; ?> />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ukokain" value="tidak" <?php echo $ukot; ?> />Tidak</label>
                </div>
              	</div>
				
                 <?php
					$uba = $row['u_barbiturat'];
					if ($uba == "ya") {
						$ubay = "checked";
						$ubat = "";
					} else {
						$ubay = "";
						$ubat = "checked";
					} 
				?>
                 <div class="form-row control-group row-fluid">
                <label class="control-label span4">Barbiturat :</label>
                <div class="controls span3">
                  <label class="inline radio">
                  <input type="radio" name="ubarbiturat" value="ya" <?php echo $ubay; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ubarbiturat" value="tidak" <?php echo $ubat; ?> />Tidak</label>
                </div>
              	</div>
				
                 <?php
					$ual = $row['u_alkohol'];
					if ($ual == "ya") {
						$ualy = "checked";
						$ualt = "";
					} else {
						$ualy = "";
						$ualt = "checked";
					} 
				?>
                	
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Alkohol :</label>
                <div class="controls span3">
                  <label class="inline radio">
                  <input type="radio" name="ualkohol" value="ya" <?php echo $ualy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ualkohol" value="tidak" <?php echo $ualt; ?>/>Tidak</label>
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
			} else { ?>
			<?php
				$id_pasien = $_GET['id']
			?>
				<form class="form-horizontal row-fluid" action="propfisik.php" method="POST">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Tekanan Darah :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="tdarah" required/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Nadi :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="nadi" required/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Pernapasan :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="pernapasan" required/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Suhu :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="suhu" required/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Sistem Pencernaan :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="spencernaan" required/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Sistem Jantung dan Pembuluh Darah :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="sjantung" required/>
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Sistem Pernapasan :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="spernapasan" required/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Sistem Saraf Pusat :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="sspusat" required/>
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">THT dan Kulit :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="thtk" required/>
                </div>
              	</div>
				
        		<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Keterangan :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="ktrngn" required/>
                </div>
              	</div>
				
                <label class="control-label span4">HASIL URINISASI</label>
                <br></br>	
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Benzodiazepin :</label>
                <div class="controls span3">
                  <label class="inline radio">
                  <input type="radio" name="ubenzodiazepin" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ubenzodiazepin" value="tidak" checked />Tidak</label>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Kanabis :</label>
                <div class="controls span3">
                  <label class="inline radio">
                  <input type="radio" name="ukanabis" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ukanabis" value="tidak" checked />Tidak</label>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Opiat :</label>
                <div class="controls span3">
                  <label class="inline radio">
                  <input type="radio" name="uopiat" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="uopiat" value="tidak" checked />Tidak</label>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Amfetamin :</label>
                <div class="controls span3">
                  <label class="inline radio">
                  <input type="radio" name="uamfetamin" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="uamfetamin" value="tidak" checked />Tidak</label>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Kokain :</label>
                <div class="controls span3">
                  <label class="inline radio">
                  <input type="radio" name="ukokain" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ukokain" value="tidak" checked />Tidak</label>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Barbiturat :</label>
                <div class="controls span3">
                  <label class="inline radio">
                  <input type="radio" name="ubarbiturat" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ubarbiturat" value="tidak" checked />Tidak</label>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4">Alkohol :</label>
                <div class="controls span3">
                  <label class="inline radio">
                  <input type="radio" name="ualkohol" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ualkohol" value="tidak" checked />Tidak</label>
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