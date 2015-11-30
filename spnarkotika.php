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
        <form class="form-horizontal row-fluid" action="prospnarkotika.php" method="POST">
        <input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
        <input type="hidden" name="id_fasesmen" value="<?php echo $row['id_fasesmen']; ?>">      
        
        		<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Tanggal Asesmen :</label>
                <div class="controls span5">
                <input type="text" id="datepicker4" class="row-fluid" name="ta_asesmen" required value="<?php echo $row['ta_asesmen']; ?>" />
                </div>
              	</div>
        
            <br>Jenis Cara Penggunaan : </br> 
            1. Oral&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            2. Nasal/Sublingual/Suppositori&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            3. Merokok&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            4. Injeksi Non-IV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
            5. IV  
              <table border="2px">
                <tr>
                	<td colspan="2"><div align="center">Jenis Napza</div></td>
                    <td width="144"><div align="center">30 Hari terakhir</div></td>
                    <td width="144"><div align="center">Cara Penggunaan</div></td>
                </tr>
                
                <tr>
                	<td width="48">D.1</td>
                	<td width="87">Alkohol</div></td>
                  	<td><input type="text" name="alkohol" placeholder="0" value="<?php echo $row['alkohol']; ?>" /></td>
                  	<td width="144">
                     <select name="cpalkohol" >
                       <?php                         
                          $cpalkohol = $row['cp_alkohol'];
                          $cp = mysql_query("SELECT * FROM cara_penggunaan where k_cp='$cpalkohol' ");
                            $cekcp = mysql_fetch_array($cp);
                            $cpal = $cekcp['k_cp'];
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($kcp = mysql_fetch_array($qcp))
                          {
                              if($kcp['k_cp']== "$cpal") {
                                echo "<option value='".$kcp['k_cp']."' selected >".$kcp['cp']."</option>";
                              } else {
                                echo "<option value='".$kcp['k_cp']."'>".$kcp['cp']."</option>";
                             }
                          }
                        ?>
                      </select>
                      
                  </td>
                </tr>
                
                <tr>
                	<td>D.2</td>
                	<td>Heroin</div></td>
                  	<td><input type="text" name="heroin" placeholder="0" value="<?php echo $row['heroin']; ?>"/></td>
                  	<td>
                      <select name="cpheroin" >
                         <?php                         
                          $cpheroin = $row['cp_heroin'];
                          
                          $cp = mysql_query("SELECT * FROM cara_penggunaan where k_cp='$cpheroin' ");
                            $cekcp = mysql_fetch_array($cp);
                            $cpher = $cekcp['k_cp'];
                           
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($kcp = mysql_fetch_array($qcp))
                          {
                              if($kcp['k_cp']== "$cpher") {
                                echo "<option value='".$kcp['k_cp']."' selected >".$kcp['cp']."</option>";
                              } else {
                                echo "<option value='".$kcp['k_cp']."'>".$kcp['cp']."</option>";
                             }
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                	<td>D.3</td>
                	<td>Metadon</div></td>
                  	<td><input type="text" name="metadon" placeholder="0" value="<?php echo $row['metadon']; ?>"/></td>
                  	<td>
                      <select name="cpmetadon" >
                        <?php                         
                          $cpmetadon = $row['cp_metadon'];
                          
                          $cp = mysql_query("SELECT * FROM cara_penggunaan where k_cp='$cpmetadon' ");
                            $cekcp = mysql_fetch_array($cp);
                            $cpmet = $cekcp['k_cp'];
                           
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($kcp = mysql_fetch_array($qcp))
                          {
                              if($kcp['k_cp']== "$cpmet") {
                                echo "<option value='".$kcp['k_cp']."' selected >".$kcp['cp']."</option>";
                              } else {
                                echo "<option value='".$kcp['k_cp']."'>".$kcp['cp']."</option>";
                             }
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                	<td>D.4</td>
                	<td>Analgesik</div></td>
                  	<td><input type="text" name="analgesik" placeholder="0" value="<?php echo $row['analgesik']; ?>"/></td>
                  	<td>
                      <select name="cpanalgesik" >
                        <?php                         
                          $cpanalgesik = $row['cp_analgesik'];
                          
                          $cp = mysql_query("SELECT * FROM cara_penggunaan where k_cp='$cpanalgesik' ");
                            $cekcp = mysql_fetch_array($cp);
                            $cpan = $cekcp['k_cp'];
                           
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($kcp = mysql_fetch_array($qcp))
                          {
                              if($kcp['k_cp']== "$cpan") {
                                echo "<option value='".$kcp['k_cp']."' selected >".$kcp['cp']."</option>";
                              } else {
                                echo "<option value='".$kcp['k_cp']."'>".$kcp['cp']."</option>";
                             }
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                	<td>D.5</td>
                	<td>Barbiturat</div></td>
                  	<td><input type="text" name="barbiturat" placeholder="0" value="<?php echo $row['barbiturat']; ?>"/></td>
                  	<td>
                       <select name="cpbarbiturat" >
                        <?php                         
                          $cpbarbiturat = $row['cp_barbiturat'];
                          
                          $cp = mysql_query("SELECT * FROM cara_penggunaan where k_cp='$cpbarbiturat' ");
                            $cekcp = mysql_fetch_array($cp);
                            $cpbar = $cekcp['k_cp'];
                           
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($kcp = mysql_fetch_array($qcp))
                          {
                              if($kcp['k_cp']== "$cpbar") {
                                echo "<option value='".$kcp['k_cp']."' selected >".$kcp['cp']."</option>";
                              } else {
                                echo "<option value='".$kcp['k_cp']."'>".$kcp['cp']."</option>";
                             }
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                	<td>D.6</td>
                	<td>Sedatif</div></td>
                  	<td><input type="text" name="sedatif" placeholder="0" value="<?php echo $row['sedatif']; ?>"/></td>
                  	<td>
                       <select name="cpsedatif" >
                       <?php                         
                        $cpsedatif = $row['cp_sedatif'];
                          
                          $cp = mysql_query("SELECT * FROM cara_penggunaan where k_cp='$cpsedatif' ");
                            $cekcp = mysql_fetch_array($cp);
                            $cpsed = $cekcp['k_cp'];
                           
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($kcp = mysql_fetch_array($qcp))
                          {
                              if($kcp['k_cp']== "$cpsed") {
                                echo "<option value='".$kcp['k_cp']."' selected >".$kcp['cp']."</option>";
                              } else {
                                echo "<option value='".$kcp['k_cp']."'>".$kcp['cp']."</option>";
                             }
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                	<td>D.7</td>
                	<td>Kokain</div></td>
                  	<td><input type="text" name="kokain" placeholder="0" value="<?php echo $row['kokain']; ?>"/></td>
                  	<td>
                       <select name="cpkokain" >
                        <?php                         
                        $cpkokain = $row['cp_kokain'];
                          
                          $cp = mysql_query("SELECT * FROM cara_penggunaan where k_cp='$cpkokain' ");
                            $cekcp = mysql_fetch_array($cp);
                            $cpko = $cekcp['k_cp'];
                           
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($kcp = mysql_fetch_array($qcp))
                          {
                              if($kcp['k_cp']== "$cpko") {
                                echo "<option value='".$kcp['k_cp']."' selected >".$kcp['cp']."</option>";
                              } else {
                                echo "<option value='".$kcp['k_cp']."'>".$kcp['cp']."</option>";
                             }
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                	<td>D.8</td>
                	<td>Amfetamin</div></td>
                  	<td><input type="text" name="amfetamin" placeholder="0" value="<?php echo $row['amfetamin']; ?>"/></td>
                  	<td>
                       <select name="cpamfetamin" >
                         <?php                         
                         $cpamfetamin = $row['cp_amfetamin'];
                          
                          $cp = mysql_query("SELECT * FROM cara_penggunaan where k_cp='$cpamfetamin' ");
                            $cekcp = mysql_fetch_array($cp);
                            $cpam = $cekcp['k_cp'];
                           
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($kcp = mysql_fetch_array($qcp))
                          {
                              if($kcp['k_cp']== "$cpam") {
                                echo "<option value='".$kcp['k_cp']."' selected >".$kcp['cp']."</option>";
                              } else {
                                echo "<option value='".$kcp['k_cp']."'>".$kcp['cp']."</option>";
                             }
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                	<td>D.9</td>
                	<td>Kanabis</div></td>
                  	<td><input type="text" name="kanabis" placeholder="0" value="<?php echo $row['kanabis']; ?>"/></td>
                  	<td>
                         <select name="cpkanabis" >
                        <?php                         
                          $cpkanabis = $row['cp_kanabis'];
                          
                          $cp = mysql_query("SELECT * FROM cara_penggunaan where k_cp='$cpkanabis' ");
                            $cekcp = mysql_fetch_array($cp);
                            $cpkan = $cekcp['k_cp'];
                           
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($kcp = mysql_fetch_array($qcp))
                          {
                              if($kcp['k_cp']== "$cpkan") {
                                echo "<option value='".$kcp['k_cp']."' selected >".$kcp['cp']."</option>";
                              } else {
                                echo "<option value='".$kcp['k_cp']."'>".$kcp['cp']."</option>";
                             }
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                	<td>D.10</td>
                	<td>Halusinogen</div></td>
                  	<td><input type="text" name="halusinogen" placeholder="0" value="<?php echo $row['halusinogen']; ?>"/></td>
                  	<td>
                         <select name="cphalusinogen" >
                          <?php                         
                          $cphalusinogen = $row['cp_halusinogen'];
                          
                          $cp = mysql_query("SELECT * FROM cara_penggunaan where k_cp='$cphalusinogen' ");
                            $cekcp = mysql_fetch_array($cp);
                            $cphal = $cekcp['k_cp'];
                           
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($kcp = mysql_fetch_array($qcp))
                          {
                              if($kcp['k_cp']== "$cphal") {
                                echo "<option value='".$kcp['k_cp']."' selected >".$kcp['cp']."</option>";
                              } else {
                                echo "<option value='".$kcp['k_cp']."'>".$kcp['cp']."</option>";
                             }
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                	<td>D.11</td>
                	<td>Inhalan</div></td>
                  	<td><input type="text" name="inhalan" placeholder="0" value="<?php echo $row['inhalan']; ?>"/></td>
                  	<td>
                         <select name="cpinhalan" >
                         <?php                         
                          $cpinhalan = $row['cp_inhalan'];
                          
                          $cp = mysql_query("SELECT * FROM cara_penggunaan where k_cp='$cpinhalan' ");
                            $cekcp = mysql_fetch_array($cp);
                            $cpin = $cekcp['k_cp'];
                           
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($kcp = mysql_fetch_array($qcp))
                          {
                              if($kcp['k_cp']== "$cpin") {
                                echo "<option value='".$kcp['k_cp']."' selected >".$kcp['cp']."</option>";
                              } else {
                                echo "<option value='".$kcp['k_cp']."'>".$kcp['cp']."</option>";
                             }
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                	<td>D.12</td>
                	<td>Banyak Zat</div></td>
                  	<td><input type="text" name="bzat" placeholder="0" value="<?php echo $row['b_zat']; ?>"/></td>
                  	<td>
                         <select name="cpbzat" >
                          <?php                         
                         $cpbzat = $row['cp_bzat'];
                          
                          $cp = mysql_query("SELECT * FROM cara_penggunaan where k_cp='$cpbzat' ");
                            $cekcp = mysql_fetch_array($cp);
                            $cpbz = $cekcp['k_cp'];
                           
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($kcp = mysql_fetch_array($qcp))
                          {
                              if($kcp['k_cp']== "$cpbz") {
                                echo "<option value='".$kcp['k_cp']."' selected >".$kcp['cp']."</option>";
                              } else {
                                echo "<option value='".$kcp['k_cp']."'>".$kcp['cp']."</option>";
                             }
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                </table> 
                
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Zat Utama :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="zutama" required value="<?php echo $row['zat_utama']; ?>"/>
                </div>
              	</div>
            
				<?php
                  $tr = $row['t_rehabilitasi'];
                  if ($tr == "ya") {
                    $try = "checked";
                    $trt = "";
                  } else {
                    $try = "";
                    $trt = "checked";
                  } 
                ?>
        		<div class="form-row control-group row-fluid">
                <label class="control-label span4">Terapi Rehabilitasi :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="trehabilitasi" value="ya" <?php echo $try; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="trehabilitasi" value="tidak" <?php echo $trt; ?> />Tidak</label>
                </div>
              	</div>
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Jenis Terapi Rehabilitasi :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="jtrehabilitasi" required value="<?php echo $row['j_trehabilitasi']; ?>"/>
                </div>
              	</div> 
              
        		<?php
				$od = $row['od'];
				if ($od == "ya") {
					$ody = "checked";
					$odt = "";
				  } else {
					$ody = "";
					$odt = "checked";
				  } 
        		?>
        		<div class="form-row control-group row-fluid">
                <label class="control-label span4">Overdosis :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="od" value="ya" <?php echo $ody; ?>/>Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="od" value="tidak" <?php echo $odt; ?> />Tidak</label>
                </div>
              	</div>	
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Kapan Overdosis :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="kod" required value="<?php echo $row['kapan']; ?>"/>
                </div>
              	</div> 
          
        		<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Waktu Overdosis :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="wod" required value="<?php echo $row['waktu']; ?>"/>
                </div>
              	</div> 
               
        		<?php
				  $cpn = $row['c_penanggulangan'];
				  if ($cpn == "rs") {
					$rs = "selected=1";
					$ps = "";
					$sn = "";
				  } else if ($cpn == "ps") {
					$rs = "";
					$ps = "selected=1";
					$sn = "";
				  } else {
					$rs = "";
					$ps = "";
					$sn = "selected=1";
				  } 
        		?>
        		<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="default-select">Cara Penanggulangan :</label>
                <div class="controls span5">
                  <select name="cpenanggulangan" class="row-fluid" id="default-select">
                    <option value="rs" <?php echo $rs; ?>>Rumah Sakit</option>
            		<option value="ps" <?php echo $ps; ?>>Puskesmas</option>
            		<option value="sn" <?php echo $sn; ?>>Sendiri</option>
                  </select>
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
      } else { ?>
      <?php
        $id_pasien = $_GET['id']
      ?>
        <form class="form-row control-group row-fluid" action="prospnarkotika.php" method="POST">
        <input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
        
        		<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Tanggal Asesmen :</label>
                <div class="controls span5">
                <input type="text" id="datepicker4" class="row-fluid" name="ta_asesmen" required/>
                </div>
              	</div>
        
            <br>Jenis Cara Penggunaan : </br> 
            1. Oral&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            2. Nasal/Sublingual/Suppositori&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            3. Merokok&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            4. Injeksi Non-IV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            5. IV  
              <table border="2px">
                <tr>
                  <td colspan="2"><div align="center">Jenis Napza</div></td>
                    <td width="144"><div align="center">30 Hari terakhir</div></td>
                    <td width="144"><div align="center">Cara Penggunaan</div></td>
                </tr>
                
                <tr>
                  <td width="48">D.1</td>
                  <td width="87">Alkohol</div></td>
                    <td><input type="text" name="alkohol" placeholder="0"/></td>
                    <td width="144">
                   
                      <select name="cpalkohol" >
                       <?php
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($row = mysql_fetch_array($qcp)){
                              echo "<option value='".$row['k_cp']."'>".$row['cp']."</option>";
                          }
                        ?>
                      </select>
                  </td>
                </tr>
                
                <tr>
                  <td>D.2</td>
                  <td>Heroin</div></td>
                    <td><input type="text" name="heroin" placeholder="0"/></td>
                    <td>
                      <select name="cpheroin" >
                           <?php
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($row = mysql_fetch_array($qcp)){
                              echo "<option value='".$row['k_cp']."'>".$row['cp']."</option>";
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                  <td>D.3</td>
                  <td>Metadon</div></td>
                    <td><input type="text" name="metadon" placeholder="0"/></td>
                    <td>
                      <select name="cpmetadon" >
                        <?php
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($row = mysql_fetch_array($qcp)){
                              echo "<option value='".$row['k_cp']."'>".$row['cp']."</option>";
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                  <td>D.4</td>
                  <td>Analgesik</div></td>
                    <td><input type="text" name="analgesik" placeholder="0"/></td>
                    <td>
                      <select name="cpanalgesik" >
                           <?php
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($row = mysql_fetch_array($qcp)){
                              echo "<option value='".$row['k_cp']."'>".$row['cp']."</option>";
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                  <td>D.5</td>
                  <td>Barbiturat</div></td>
                    <td><input type="text" name="barbiturat" placeholder="0"/></td>
                    <td>
                       <select name="cpbarbiturat" >
                           <?php
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($row = mysql_fetch_array($qcp)){
                              echo "<option value='".$row['k_cp']."'>".$row['cp']."</option>";
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                  <td>D.6</td>
                  <td>Sedatif</div></td>
                    <td><input type="text" name="sedatif" placeholder="0"/></td>
                    <td>
                       <select name="cpsedatif" >
                           <?php
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($row = mysql_fetch_array($qcp)){
                              echo "<option value='".$row['k_cp']."'>".$row['cp']."</option>";
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                  <td>D.7</td>
                  <td>Kokain</div></td>
                    <td><input type="text" name="kokain" placeholder="0"/></td>
                    <td>
                       <select name="cpkokain" >
                           <?php
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($row = mysql_fetch_array($qcp)){
                              echo "<option value='".$row['k_cp']."'>".$row['cp']."</option>";
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                  <td>D.8</td>
                  <td>Amfetamin</div></td>
                    <td><input type="text" name="amfetamin" placeholder="0"/></td>
                    <td>
                       <select name="cpamfetamin" >
                          <?php
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($row = mysql_fetch_array($qcp)){
                              echo "<option value='".$row['k_cp']."'>".$row['cp']."</option>";
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                  <td>D.9</td>
                  <td>Kanabis</div></td>
                    <td><input type="text" name="kanabis" placeholder="0"/></td>
                    <td>
                         <select name="cpkanabis" >
                          <?php
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($row = mysql_fetch_array($qcp)){
                              echo "<option value='".$row['k_cp']."'>".$row['cp']."</option>";
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                  <td>D.10</td>
                  <td>Halusinogen</div></td>
                    <td><input type="text" name="halusinogen" placeholder="0"/></td>
                    <td>
                         <select name="cphalusinogen" >
                           <?php
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($row = mysql_fetch_array($qcp)){
                              echo "<option value='".$row['k_cp']."'>".$row['cp']."</option>";
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                  <td>D.11</td>
                  <td>Inhalan</div></td>
                    <td><input type="text" name="inhalan" placeholder="0"/></td>
                    <td>
                         <select name="cpinhalan" >
                           <?php
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($row = mysql_fetch_array($qcp)){
                              echo "<option value='".$row['k_cp']."'>".$row['cp']."</option>";
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                <tr>
                  <td>D.12</td>
                  <td>Banyak Zat</div></td>
                    <td><input type="text" name="bzat" placeholder="0"/></td>
                    <td>
                         <select name="cpbzat" >
                          <?php
                          $qcp = mysql_query("SELECT * FROM cara_penggunaan");
                          while($row = mysql_fetch_array($qcp)){
                              echo "<option value='".$row['k_cp']."'>".$row['cp']."</option>";
                          }
                        ?>
                      </select>
                    </td>
                </tr>
                
                </table> 
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Zat Utama :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="zutama" required/>
                </div>
              	</div>
            
            	<div class="form-row control-group row-fluid">
                <label class="control-label span4">Terapi Rehabilitasi :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="trehabilitasi" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="trehabilitasi" value="tidak" checked />Tidak</label>
                </div>
              	</div>
          
        		<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Jenis Terapi Rehabilitasi :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="jtrehabilitasi" required/>
                </div>
              	</div> 
              
        		<div class="form-row control-group row-fluid">
                <label class="control-label span4">Overdosis :</label>
                <div class="controls span5">
                  <label class="inline radio">
                  <input type="radio" name="od" value="ya" />Ya</label>
                  <label class="inline radio">
                  <input type="radio" name="od" value="tidak" checked />Tidak</label>
                </div>
              	</div>	
          
        		<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Kapan Overdosis :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="kod" required/>
                </div>
              	</div> 
          
        		<div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Waktu Overdosis :</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="wod" required/>
                </div>
              	</div> 
          
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="default-select">Cara Penanggulangan :</label>
                <div class="controls span5">
                  <select name="cpenanggulangan" class="row-fluid" id="default-select">
                    <option value="rs"selected="1">Rumah Sakit</option>
            		<option value="ps">Puskesmas</option>
            		<option value="sn">Sendiri</option>
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
	