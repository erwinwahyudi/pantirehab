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
				<form class="form-horizontal row-fluid" action="prospekerjaan.php" method="POST">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				<input type="hidden" name="id_fasesmen" value="<?php echo $row['id_fasesmen']; ?>">
              
				<div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Kode Pekerjaan :</label>
                <div class="controls span5">
                	
                    	<select name='k_pekerjaan' class="row-fluid">
				<?php                         
                          $k_pekerjaan = $row['k_pekerjaan'];

                          $kp = mysql_query("SELECT * FROM kode_pekerjaan where k_pekerjaan='$k_pekerjaan'");
                            $cekp = mysql_fetch_array($kp);
                            $kpk = $cekp['k_pekerjaan'];
                            $qp = mysql_query("SELECT * FROM kode_pekerjaan");
                          while($rowk = mysql_fetch_array($qp))
                          {
                              if($rowk['k_pekerjaan']== "$kpk") {
                                echo "<option value='".$rowk['k_pekerjaan']."' selected >".$rowk['nm_pekerjaan']."</option>";
                              } else {
                                echo "<option value='".$rowk['k_pekerjaan']."'>".$rowk['nm_pekerjaan']."</option>";
                             }
                          }
                ?>
						</select>
                </div>
                </div>
                
                
				<div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal Asesmen :</label>
                <div class="controls span5">
                <input type="text" id="datepicker2" class="row-fluid" name="t_asesmen" required value="<?php echo $row['t_asesmen']; ?>"/>
                </div>
              	</div>
				
               <?php
					$sp = $row['s_pekerjaan']; 
					if ($sp == "tb") {
						$tb = "selected=1";
						$b = "";
						$m = "";
						$irt = "";
					} else if ($sp == "b") {
						$tb = "";
						$b = "selected=1";
						$m = "";
						$irt = "";
					} else if ($sp == "m") {
						$tb = "";
						$b = "";
						$m = "selected=1";
						$irt = "";
					} else {
						$tb = "";
						$b = "";
						$m = "";
						$irt = "selected=1";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Status Pekerjaan :</label>
                <div class="controls span5">
                  <select name="spekerjaan" class="row-fluid" id="default-select">
                    <option value="tb"<?php echo $tb; ?>>Tidak Bekerja</option>
						<option value="b"<?php echo $b; ?>>Bekerja</option>
						<option value="m"<?php echo $m; ?>>Mahasiswa/Pelajar</option>
						<option value="irt"<?php echo $irt; ?>>Ibu Rumah Tangga</option>
                  </select>
                </div>
                </div>
					
                <?php
					$pp = $row['p_pekerjaan'];
					if ($pp == "pu") {
						$pu = "selected=1";
						$pa = "";
						$tt = "";
					} else if ($pp == "pa") {
						$pu = "";
						$pa = "selected=1";
						$tt = "";
					} else {
						$pu = "";
						$pa = "";
						$tt = "selected=1";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Pola Pekerjaan :</label>
                <div class="controls span5">
                  <select name="ppekerjaan" class="row-fluid" id="default-select">
                    <option value="pu"<?php echo $pu; ?>>Purna Waktu</option>
					<option value="pa"<?php echo $pa; ?>>Paruh Waktu</option>
                    <option value="tt"<?php echo $tt; ?>>Tidak Tentu</option>
                  </select>
                </div>
                </div>	
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Keterampilan :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="ktrmpln" required value="<?php echo $row['keterampilan']; ?>"/>
                </div>
              	</div> 
					
                <?php
					$dh = $row['dhidup'];
					if ($dh == "ya") {
						$dhy = "checked";
						$dht = "";
					} else {
						$dhy = "";
						$dht = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3">Dukungan Hidup :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="dhidup" value="ya" <?php echo $dhy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="dhidup" value="tidak" <?php echo $dht; ?> />Tidak</label>
                </div>
              	</div>	
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Dukungan Hidup :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="nmdhidup" required value="<?php echo $row['nm_dhidup']; ?>"/>
                </div>
              	</div>
                
                <?php
					$fi = $row['finansial'];
					if ($fi == "ya") {
						$fiy = "checked";
						$fit = "";
					} else {
						$fiy = "";
						$fit = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3">Finansial :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="finansial" value="ya" <?php echo $fiy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="finansial" value="tidak" <?php echo $fit; ?> />Tidak</label>
                </div>
              	</div>
					
                <?php
					$tt = $row['t_tinggal'];
					if ($tt == "ya") {
						$tty = "checked";
						$ttt = "";
					} else {
						$tty = "";
						$ttt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3">Tempat Tinggal :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="ttinggal" value="ya" <?php echo $tty; ?> />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ttinggal" value="tidak" <?php echo $ttt; ?> />Tidak</label>
                </div>
              	</div>
					
                <?php
					$ma = $row['makan'];
					if ($ma == "ya") {
						$may = "checked";
						$mat = "";
					} else {
						$may = "";
						$mat = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span3">Makan :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="makan" value="ya" <?php echo $may; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="makan" value="tidak" <?php echo $mat; ?> />Tidak</label>
                </div>
              	</div>	
               
                <?php
					$pr = $row['perawatan'];
					if ($pr == "ya") {
						$pry = "checked";
						$prt = "";
					} else {
						$pry = "";
						$prt = "checked";
					} 
				?>
                
				<div class="form-row control-group row-fluid">
                <label class="control-label span3">Perawatan :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="perawatan" value="ya" <?php echo $pry; ?> />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="perawatan" value="tidak" <?php echo $prt; ?> />Tidak</label>
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
				<form class="form-horizontal row-fluid" action="prospekerjaan.php" method="POST">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Kode Pekerjaan :</label>
                <div class="controls span5">
                <?php
						$qkp = mysql_query("SELECT * FROM kode_pekerjaan");
					?>
						<select name='k_pekerjaan' class="row-fluid">
							<?php
								while($row = mysql_fetch_array($qkp)){
									echo "<option value='".$row['k_pekerjaan']."'>".$row['nm_pekerjaan']."</option>";
								}
							?>
						</select>
                </div>
              	</div> 	
				
				<div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal Asesmen :</label>
                <div class="controls span5">
                <input type="text" id="datepicker2" class="row-fluid" name="t_asesmen" required/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Status Pekerjaan :</label>
                <div class="controls span5">
                  <select name="spekerjaan" class="row-fluid" id="default-select">
                    <option value="tb"selected="1">Tidak Bekerja</option>
					<option value="b">Bekerja</option>
					<option value="m">Mahasiswa/Pelajar</option>
					<option value="irt">Ibu Rumah Tangga</option>
                  </select>
                </div>
                </div>
                
               	<div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-select">Pola Pekerjaan :</label>
                <div class="controls span5">
                  <select name="ppekerjaan" class="row-fluid" id="default-select">
                    	<option value="pu"selected="1">Purna Waktu</option>
						<option value="pa">Paruh Waktu</option>
                        <option value="tt">Tidak Tentu</option>
                  </select>
                </div>
                </div>	
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Keterampilan :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="ktrmpln" required/>
                </div>
              	</div> 
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3">Dukungan Hidup :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="dhidup" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="dhidup" value="tidak" checked />Tidak</label>
                </div>
              	</div>	
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Dukungan Hidup :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="nmdhidup" required/>
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3">Finansial :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="finansial" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="finansial" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3">Tempat Tinggal :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="ttinggal" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="ttinggal" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3">Makan :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="makan" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="makan" value="tidak" checked />Tidak</label>
                </div>
              	</div>	
               

				<div class="form-row control-group row-fluid">
                <label class="control-label span3">Perawatan :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="perawatan" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="perawatan" value="tidak" checked />Tidak</label>
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