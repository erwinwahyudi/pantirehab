<?php
		if(isset($_GET['action'])){				
			if($_GET['action'] == "update")
			{
				$id_pasien = $_GET['id'];
						
				$query = mysql_query("select * from riwayat_klinik where id_pasien='$id_pasien'");
				$row = mysql_fetch_array($query);


          $session = $_SESSION['user'];
          $qlogin = mysql_query("SELECT * FROM login where uname='$session' ");
          $rlogin = mysql_fetch_array($qlogin); 
          $id_login = $rlogin['id_login'];
          
          $queryd = mysql_query("SELECT * from dokter where id_login='$id_login'");
          $rowd = mysql_fetch_array($queryd);
          $namadokter = $rowd['nm_dokter'];
?>

<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Edit Riwayat Klinik</span></h3>
		</div>
		<div class="content">
				<form class="form-horizontal row-fluid" action="prorklinik.php" method="post">
				<input type="hidden" name="id_rklinik" value="<?php echo $row['id_rklinik']; ?>">
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Tanggal Riwayat Klinik :</label>
                <div class="controls span4">
                <input type="text" id="datepicker" class="row-fluid" name="trk" required value="<?php echo $row['tgl_rklinik']; ?>"/>
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Diagnosa :</label>
                <div class="controls span4">
                <input type="text" id="normal-field" class="row-fluid" name="diagnosa" required value="<?php echo $row['diagnosa']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="default-textarea">Catatan :</label>
                <div class="controls span4">
                <textarea rows="3" class="row-fluid" name="ct" id="default-textarea"  required><?php echo $row['catatan']; ?></textarea>
                </div>
                </div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="disabled-input">Nama Dokter :</label>
                <div class="controls span4">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disable" value="<?php echo $namadokter; ?>">
                <input type="hidden" name="dr" value="<?php echo $namadokter; ?>">
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

<?php 		}
		} else { 
?>

<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Tambah Data Riwayat Klinik</span></h3>
		</div>
		<div class="content">  
			<form class="form-horizontal row-fluid" action="prorklinik.php" method="post">
				<?php
					$id_pasien = $_GET['id'];
					$idrmedik = $_GET['idrmedik'];
		  $session = $_SESSION['user'];
          $qlogin = mysql_query("SELECT * FROM login where uname='$session' ");
          $rlogin = mysql_fetch_array($qlogin); 
          $id_login = $rlogin['id_login'];
          
          $queryd = mysql_query("SELECT * from dokter where id_login='$id_login'");
          $rowd = mysql_fetch_array($queryd);
          $namadokter = $rowd['nm_dokter'];
				?>

				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>" >	
				<input type="hidden" name="id_rmedik" value="<?php echo $idrmedik; ?>" >		
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Tanggal Riwayat Klinik :</label>
                <div class="controls span4">
                <input type="text" id="datepicker" class="row-fluid" name="trk" required/>
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Diagnosa :</label>
                <div class="controls span4">
                <input type="text" id="normal-field" class="row-fluid" name="diagnosa" required/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="default-textarea">Catatan :</label>
                <div class="controls span4">
                <textarea rows="3" class="row-fluid" name="ct" id="default-textarea"  required></textarea>
                </div>
                </div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="disabled-input">Nama Dokter :</label>
                <div class="controls span4">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $namadokter; ?>">
                <input type="hidden" name="dr" value="<?php echo $namadokter; ?>">
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
	