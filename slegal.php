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
				<form class="form-row control-group row-fluid" action="proslegal.php" method="POST">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				<input type="hidden" name="id_fasesmen" value="<?php echo $row['id_fasesmen']; ?>">
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Tanggal Asesmen :</label>
                <div class="controls span3">
                <input type="text" id="datepicker5" class="row-fluid" name="tan_asesmen" value="<?php echo $row['tan_asesmen']; ?>"/>
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Mencuri :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="mencuri" placeholder="0" value="<?php echo $row['mencuri']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Bebas Bersyarat/Masa Percobaan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="bbmp" placeholder="0" value="<?php echo $row['bb_mp']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Masalah Narkoba :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="mnarkoba" placeholder="0" value="<?php echo $row['m_narkoba']; ?>"/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Pemalsuan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="pemalsuan" placeholder="0" value="<?php echo $row['pemalsuan']; ?>"/>
                </div>
              	</div>
					
				<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Penyerangan Bersenjata :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="pbersenjata" placeholder="0" value="<?php echo $row['p_bersenjata']; ?>"/>
                </div>
              	</div>
					
				<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Pembobolan dan Pencurian :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="pdp" placeholder="0" value="<?php echo $row['pembobolan']; ?>"/>
                </div>
              	</div>
                	
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Perampokan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="perampokan" placeholder="0" value="<?php echo $row['perampokan']; ?>"/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Penyerangan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="penyerangan" placeholder="0" value="<?php echo $row['penyerangan']; ?>"/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Pembakaran Rumah :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="prumah" placeholder="0" value="<?php echo $row['p_rumah']; ?>"/>
                </div>
              	</div>
					
				<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Pemerkosaan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="pemerkosaan" placeholder="0" value="<?php echo $row['pemerkosaan']; ?>"/>
                </div>
              	</div>
					
				<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Pembunuhan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="pembunuhan" placeholder="0" value="<?php echo $row['pembunuhan']; ?>"/>
                </div>
              	</div>
                	
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Pelacuran :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="pelacuran" placeholder="0" value="<?php echo $row['pelacuran']; ?>"/>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Melecehkan Pengadilan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="text" id="normal-field" class="row-fluid" name="mpengadilan" placeholder="0" value="<?php echo $row['m_pengadilan']; ?>"/>
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Lain-lain :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="ll" placeholder="0" value="<?php echo $row['lain_lain']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Tuntutan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="tuntutan" placeholder="0" value="<?php echo $row['tuntutan']; ?>"/>
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
				<form class="form-horizontal row-fluid" action="proslegal.php" method="POST">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Tanggal Asesmen :</label>
                <div class="controls span3">
                <input type="text" id="datepicker5" class="row-fluid" name="tan_asesmen" required />
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Mencuri :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="mencuri" placeholder="0" />
                </div>
              	</div>
               
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Bebas Bersyarat/Masa Percobaan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="bbmp" placeholder="0" />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Masalah Narkoba :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="mnarkoba" placeholder="0" />
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Pemalsuan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="pemalsuan" placeholder="0" />
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Penyerangan Bersenjata :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="pbersenjata" placeholder="0" />
                </div>
              	</div>
					
				<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Pembobolan dan Pencurian :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="pdp" placeholder="0" />
                </div>
              	</div>
                	
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Perampokan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="perampokan" placeholder="0" />
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Penyerangan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="penyerangan" placeholder="0" />
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Pembakaran Rumah :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="prumah" placeholder="0" />
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Pemerkosaan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="pemerkosaan" placeholder="0" />
                </div>
              	</div>
					
				<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Pembunuhan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="pembunuhan" placeholder="0" />
                </div>
              	</div>
                	
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Pelacuran :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="pelacuran" placeholder="0" />
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Melecehkan Pengadilan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="mpengadilan" placeholder="0" />
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Lain-lain :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="ll" placeholder="0" />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Tuntutan :</label>&nbsp; *diisi dengan angka
                <div class="controls span3">
                <input type="number" id="normal-field" class="row-fluid" name="tuntutan" placeholder="0" />
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