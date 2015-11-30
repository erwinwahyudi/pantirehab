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
				<form class="form-horizontal row-fluid" action="prorksosial.php" method="POST">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				<input type="hidden" name="id_fasesmen" value="<?php echo $row['id_fasesmen']; ?>">
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Tanggal Asesmen :</label>
                <div class="controls span3">
                <input type="text" id="datepicker6" class="row-fluid" name="tgl_asesmen" required value="<?php echo $row['tgl_asesmen']; ?>"/>
                </div>
              	</div>
                
                <?php
					$si = $row['situasi'];
					if ($si == "pa") {
						$pa = "selected=1";
						$ps = "";
						$as = "";
						$ot = "";
						$k = "";
						$t = "";
						$s = "";
						$lt = "";
						$kts = "";
					} else if ($si == "ps") {
						$pa = "";
						$ps = "selected=1";
						$as = "";
						$ot = "";
						$k = "";
						$t = "";
						$s = "";
						$lt = "";
						$kts = "";
					} else if ($si == "as") {
						$pa = "";
						$ps = "";
						$as = "selected=1";
						$ot = "";
						$k = "";
						$t = "";
						$s = "";
						$lt = "";
						$kts = "";
					} else if ($si == "ot") {
						$pa = "";
						$ps = "";
						$as = "";
						$ot = "selected=1";
						$k = "";
						$t = "";
						$s = "";
						$lt = "";
						$kts = "";
					} else if ($si == "k") {
						$pa = "";
						$ps = "";
						$as = "";
						$ot = "";
						$k = "selected=1";
						$t = "";
						$s = "";
						$lt = "";
						$kts = "";
					} else if ($si == "t") {
						$pa = "";
						$ps = "";
						$as = "";
						$ot = "";
						$k = "";
						$t = "selected=1";
						$s = "";
						$lt = "";
						$kts = "";
					} else if ($si == "s") {
						$pa = "";
						$ps = "";
						$as = "";
						$ot = "";
						$k = "";
						$t = "";
						$s = "selected=1";
						$lt = "";
						$kts = "";
					} else if ($si == "lt") {
						$pa = "";
						$ps = "";
						$as = "";
						$ot = "";
						$k = "";
						$t = "";
						$s = "";
						$lt = "selected=1";
						$kts = "";
					} else {
						$pa = "";
						$ps = "";
						$as = "";
						$ot = "";
						$k = "";
						$t = "";
						$s = "";
						$lt = "";
						$kts = "";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="default-select">Situasi Tinggal :</label>
                <div class="controls span3">
                  <select name="situasi" class="row-fluid" id="default-select">
                    <option value="pa"selected="1">Pasangan dan Anak</option>
						<option value="pa" <?php echo $pa; ?>>Pasangan dan Anak</option>
						<option value="ps" <?php echo $ps; ?>>Pasangan Saja</option>
						<option value="as" <?php echo $as; ?>>Anak Saja</option>
						<option value="ot" <?php echo $ot; ?>>Orang Tua</option>
                        <option value="k" <?php echo $k; ?>>Keluarga</option>
						<option value="t" <?php echo $t; ?>>Teman</option>
						<option value="s" <?php echo $s; ?>>Sendiri</option>
						<option value="lt" <?php echo $lt; ?>>Lingkungan Terkontrol</option>
                        <option value="kts" <?php echo $kts; ?>>Kondisi yang Tidak Stabil</option>
                  </select>
                </div>
                </div>
               
                <?php
					$oz = $row['o_zat'];
					if ($oz == "ya") {
						$ozy = "checked";
						$ozt = "";
					} else {
						$ozy = "";
						$ozt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Orang yang Hidup Bersama dalam Penyalahgunaan Zat :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="ozat" value="ya" <?php echo $ozy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ozat" value="tidak" <?php echo $ozt; ?> />Tidak</label>
                </div>
              	</div>
                
                <label class="control-label span5">JIKA YA SIAPA MEREKA :</label>
                <br></br>
					
                <?php
					$kt = $row['kandung_tiri'];
					if ($kt == "ya") {
						$kty = "checked";
						$ktt = "";
					} else {
						$kty = "";
						$ktt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Saudara Kandung atau Tiri</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="kandungtiri" value="ya" <?php echo $kty; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="kandungtiri" value="tidak" <?php echo $ktt; ?> />Tidak</label>
                </div>
              	</div>
                
                <?php
					$ai = $row['ayah_ibu'];
					if ($ai == "ya") {
						$aiy = "checked";
						$ait = "";
					} else {
						$aiy = "";
						$ait = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Ayah atau Ibu</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="ayahibu" value="ya" <?php echo $aiy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ayahibu" value="tidak" <?php echo $ait; ?> />Tidak</label>
                </div>
              	</div>
					
                <?php
					$ps = $row['pasangan'];
					if ($ps == "ya") {
						$psy = "checked";
						$pst = "";
					} else {
						$psy = "";
						$pst = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Pasangan</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="pasangan" value="ya" <?php echo $psy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="pasangan" value="tidak" <?php echo $pst; ?> />Tidak</label>
                </div>
              	</div>
                
                <?php
					$ot = $row['om_tante'];
					if ($ot == "ya") {
						$oty = "checked";
						$ott = "";
					} else {
						$oty = "";
						$ott = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Om atau Tante</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="omtante" value="ya" <?php echo $oty; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="omtante" value="tidak" <?php echo $ott; ?> />Tidak</label>
                </div>
              	</div>
				
                <?php
					$te = $row['teman'];
					if ($te == "ya") {
						$tey = "checked";
						$tet = "";
					} else {
						$tey = "";
						$tet = "checked";
					} 
				?>
                 <div class="form-row control-group row-fluid">
                <label class="control-label span5">Teman</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="teman" value="ya" <?php echo $tey; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="teman" value="tidak" <?php echo $tet; ?> />Tidak</label>
                </div>
              	</div>
                
                <?php
					$la = $row['lainnya'];
					if ($la == "ya") {
						$lay = "checked";
						$lat = "";
					} else {
						$lay = "";
						$lat = "checked";
					} 
				?>
                 <div class="form-row control-group row-fluid">
                <label class="control-label span5">Lainnya</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="lainnya" value="ya" <?php echo $lay; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="lainnya" value="tidak" <?php echo $lat; ?> />Tidak</label>
                </div>
              	</div>
				
                <label class="control-label span10">APAKAH ANDA MEMILIKI KONFLIK SERIUS DALAM BERHUBUNGAN DENGAN :</label>	
                <br></br>
                <?php
					$ibu = $row['ibu'];
					if ($ibu == "ya") {
						$ibuy = "checked";
						$ibut = "";
					} else {
						$ibuy = "";
						$ibut = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Ibu</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="ibu" value="ya" <?php echo $ibuy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ibu" value="tidak" <?php echo $ibut; ?> />Tidak</label>
                </div>
              	</div>
                
                <?php
					$ayh = $row['ayah'];
					if ($ayh == "ya") {
						$ayhy = "checked";
						$ayht = "";
					} else {
						$ayhy = "";
						$ayht = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Ayah</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="ayah" value="ya" <?php echo $ayhy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ayah" value="tidak" <?php echo $ayht; ?> />Tidak</label>
                </div>
              	</div>
					
				<?php
					$ak = $row['adik_kakak'];
					if ($ak == "ya") {
						$aky = "checked";
						$akt = "";
					} else {
						$aky = "";
						$akt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Adik atau Kakak</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="adikkakak" value="ya" <?php echo $aky; ?> />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="adikkakak" value="tidak" <?php echo $akt; ?> />Tidak</label>
                </div>
              	</div>
                
                <?php
					$psg = $row['psgn'];
					if ($psg == "ya") {
						$psgy = "checked";
						$psgt = "";
					} else {
						$psgy = "";
						$psgt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Pasangan</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="psgn" value="ya" <?php echo $psgy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="psgn" value="tidak" <?php echo $psgt; ?> />Tidak</label>
                </div>
              	</div>
               
                <?php
					 $ank = $row['anak'];
					 if ($ank == "ya") {
						$anky = "checked";
						$ankt = "";
					} else {
						$anky = "";
						$ankt = "checked";
					} 
				?>
                 <div class="form-row control-group row-fluid">
                <label class="control-label span5">Anak</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="anak" value="ya" <?php echo $anky; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="anak" value="tidak" <?php echo $ankt; ?> />Tidak</label>
                </div>
              	</div>	
					
                <?php
					$kl = $row['keluarga_lain'];
					if ($kl == "ya") {
						$kly = "checked";
						$klt = "";
					} else {
						$kly = "";
						$klt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Keluarga Lain</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="klain" value="ya" <?php echo $kly; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="klain" value="tidak" <?php echo $klt; ?> />Tidak</label>
                </div>
              	</div>	
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Hubungan dengan Keluarga Lain :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="hklain" required value="<?php echo $row['hb_klain']; ?>"/>
                </div>
              	</div> 	
				
                <?php
					$ta = $row['t_akrab'];
					if ($ta == "ya") {
						$tay = "checked";
						$tat = "";
					} else {
						$tay = "";
						$tat = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Teman Akrab</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="takrab" value="ya" <?php echo $tay; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="takrab" value="tidak" <?php echo $tat; ?> />Tidak</label>
                </div>
              	</div>	
				
				<?php
					$ttg = $row['tetangga'];
					if ($ttg == "ya") {
						$ttgy = "checked";
						$ttgt = "";
					} else {
						$ttgy = "";
						$ttgt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Tetangga</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="tetangga" value="ya" <?php echo $ttgy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="tetangga" value="tidak" <?php echo $ttgt; ?> />Tidak</label>
                </div>
              	</div>
			
                <?php
					$tk = $row['t_kerja'];
					if ($tk == "ya") {
						$tky = "checked";
						$tkt = "";
					} else {
						$tky = "";
						$tkt = "checked";
					} 
				?>
                		
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Teman Sekerja</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="tsekerja" value="ya" <?php echo $tky; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="tsekerja" value="tidak" <?php echo $tkt; ?> />Tidak</label>
                </div>
              	</div>
					
                <div class="form-actions row-fluid">
                	<div class="span7 offset4">
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
				<form class="form-horizontal row-fluid" action="prorksosial.php" method="POST">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Tanggal Asesmen :</label>
                <div class="controls span3">
                <input type="text" id="datepicker6" class="row-fluid" name="tgl_asesmen" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="default-select">Situasi Tinggal :</label>
                <div class="controls span3">
                  <select name="situasi" class="row-fluid" id="default-select">
                    <option value="pa"selected="1">Pasangan dan Anak</option>
						<option value="ps">Pasangan Saja</option>
						<option value="as"selected="1">Anak Saja</option>
						<option value="ot">Orang Tua</option>
                        <option value="k"selected="1">Keluarga</option>
						<option value="t">Teman</option>
						<option value="s"selected="1">Sendiri</option>
						<option value="lt">Lingkungan Terkontrol</option>
                        <option value="kts">Kondisi yang Tidak Stabil</option>
                  </select>
                </div>
                </div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Orang yang Hidup Bersama dalam Penyalahgunaan Zat :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="ozat" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ozat" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <label class="control-label span5">JIKA YA SIAPA MEREKA :</label>
                <br></br>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Saudara Kandung atau Tiri</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="kandungtiri" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="kandungtiri" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Ayah atau Ibu</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="ayahibu" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ayahibu" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Pasangan</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="pasangan" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="pasangan" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Om atau Tante</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="omtante" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="omtante" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Teman</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="teman" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="teman" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Lainnya</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="lainnya" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="lainnya" value="tidak" checked />Tidak</label>
                </div>
              	</div>	
                	
				<label class="control-label span10">APAKAH ANDA MEMILIKI KONFLIK SERIUS DALAM BERHUBUNGAN DENGAN :</label>	
                <br></br>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Ibu</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="ibu" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ibu" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Ayah</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="ayah" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ayah" value="tidak" checked />Tidak</label>
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Adik atau Kakak</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="adikkakak" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="adikkakak" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Pasangan</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="psgn" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="psgn" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Anak</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="anak" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="anak" value="tidak" checked />Tidak</label>
                </div>
              	</div>	
					
				<div class="form-row control-group row-fluid">
                <label class="control-label span5">Keluarga Lain</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="klain" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="klain" value="tidak" checked />Tidak</label>
                </div>
              	</div>	
					
				<div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Hubungan dengan Keluarga Lain :</label>
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="hklain" required/>
                </div>
              	</div> 	
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Teman Akrab</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="takrab" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="takrab" value="tidak" checked />Tidak</label>
                </div>
              	</div>	
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Tetangga</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="tetangga" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="tetangga" value="tidak" checked />Tidak</label>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Teman Sekerja</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="tsekerja" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="tsekerja" value="tidak" checked />Tidak</label>
                </div>
              	</div>
				
                <div class="form-actions row-fluid">
                	<div class="span7 offset4">
                      <button type="submit" class="btn btn-primary" name="submit" value="Simpan">Simpan</button>
                      <button type="reset" class="btn btn-secondary" value="Batal">Batal</button>
                    </div>
              	</div>	
                </form>
 <?php } ?>