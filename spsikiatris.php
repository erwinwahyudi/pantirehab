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
				<form class="form-horizontal row-fluid" action="prospsikiatris.php" method="POST">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				<input type="hidden" name="id_fasesmen" value="<?php echo $row['id_fasesmen']; ?>">
   				
                <div class="form-row control-group row-fluid">
                <label class="control-label span6" for="normal-field">Tanggal Asesmen :</label>
                <div class="controls span3">
                <input type="text" id="datepicker3" class="row-fluid" name="tnggl_asesmen" required value="<?php echo $row['tnggl_asesmen']; ?>"/>
                </div>
              	</div>
                
				<?php
					$ds = $row['depresi'];
					if ($ds == "ya") {
						$dsy = "checked";
						$dst = "";
					} else {
						$dsy = "";
						$dst = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Mengalami depresi serius :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="depresi" value="ya" <?php echo $dsy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="depresi" value="tidak" <?php echo $dst; ?> />Tidak</label>
                </div>
              	</div>
					
                <?php
					$cs = $row['cemas'];
					if ($cs == "ya") {
						$csy = "checked";
						$cst = "";
					} else {
						$csy = "";
						$cst = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Mengalami rasa cemas serius :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="cemas" value="ya" <?php echo $csy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="cemas" value="tidak" <?php echo $cst; ?> />Tidak</label>
                </div>
              	</div>
					
                <?php
					$hs = $row['halusinasi'];
					if ($hs == "ya") {
						$hsy = "checked";
						$hst = "";
					} else {
						$hsy = "";
						$hst = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Mengalami halusinasi :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="halusinasi" value="ya" <?php echo $hsy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="halusinasi" value="tidak" <?php echo $hst; ?> />Tidak</label>
                </div>
              	</div>
					
                <?php
					$smt = $row['s_mengingat'];
					if ($smt == "ya") {
						$smty = "checked";
						$smtt = "";
					} else {
						$smty = "";
						$smtt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Mengalami kesulitan mengingat :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="mengingat" value="ya" <?php echo $smty; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="mengingat" value="tidak" <?php echo $smtt; ?> />Tidak</label>
                </div>
              	</div>
               
                <?php
					$sml = $row['s_mengontrol'];
					if ($sml == "ya") {
						$smly = "checked";
						$smlt = "";
					} else {
						$smly = "";
						$smlt = "checked";
					} 
				?>
                 
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Mengalami kesukaran mengontrol prilaku kasar :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="mengontrol" value="ya" <?php echo $smly; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="mengontrol" value="tidak" <?php echo $smlt; ?> />Tidak</label>
                </div>
              	</div>
					
                <?php
					$pbd = $row['p_bdiri'];
					if ($pbd == "ya") {
						$pbdy = "checked";
						$pbdt = "";
					} else {
						$pbdy = "";
						$pbdt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Mengalami pikiran serius untuk bunuh diri :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="pbdiri" value="ya" <?php echo $pbdy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="pbdiri" value="tidak" <?php echo $pbdt; ?> />Tidak</label>
                </div>
              	</div>
                
                <?php
					$bbd = $row['b_bdiri'];
					if ($bbd == "ya") {
						$bbdy = "checked";
						$bbdt = "";
					} else {
						$bbdy = "";
						$bbdt = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Berusaha untuk bunuh diri :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="bbdiri" value="ya" <?php echo $bbdy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="bbdiri" value="tidak" <?php echo $bbdt; ?> />Tidak</label>
                </div>
              	</div>	
                
                <?php
					$pps = $row['p_psikiater'];
					if ($pps == "ya") {
						$ppsy = "checked";
						$ppst = "";
					} else {
						$ppsy = "";
						$ppst = "checked";
					} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Menerima pengobatan dari psikiater :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="ppsikiater" value="ya" <?php echo $ppsy; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="ppsikiater" value="tidak" <?php echo $ppst; ?>/>Tidak</label>
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
				<form class="form-horizontal row-fluid" action="prospsikiatris.php" method="POST">
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span6" for="normal-field">Tanggal Asesmen :</label>
                <div class="controls span3">
                <input type="text" id="datepicker3" class="row-fluid" name="tnggl_asesmen" required/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Mengalami depresi serius :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="depresi" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="depresi" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Mengalami rasa cemas serius :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="cemas" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="cemas" value="tidak" checked />Tidak</label>
                </div>
              	</div>
               
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Mengalami halusinasi :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="halusinasi" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="halusinasi" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Mengalami kesulitan mengingat :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="mengingat" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="mengingat" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Mengalami kesukaran mengontrol prilaku kasar :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="mengontrol" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="mengontrol" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Mengalami pikiran serius untuk bunuh diri :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="pbdiri" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="pbdiri" value="tidak" checked />Tidak</label>
                </div>
              	</div>
                
				<div class="form-row control-group row-fluid">
                <label class="control-label span6">Berusaha untuk bunuh diri :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="bbdiri" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="bbdiri" value="tidak" checked />Tidak</label>
                </div>
              	</div>	
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span6">Menerima pengobatan dari psikiater :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio"  name="ppsikiater" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio"  name="ppsikiater" value="tidak" checked />Tidak</label>
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