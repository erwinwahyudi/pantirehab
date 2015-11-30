<?php
		include "koneksidb.php";
			
		if(isset($_GET['action'])){				
			if($_GET['action'] == "update")
			{
				$id_pasien = $_GET['id'];
						
				$query = mysql_query("select * from rekam_medik where id_pasien='$id_pasien'");
				$row = mysql_fetch_array($query);
?>
<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Edit Data Rekam Medik</span></h3>
		</div>
		<div class="content"> 
				<form class="form-horizontal row-fluid" action="prormedik.php" method="post">
				<input type="hidden" name="id_rmedik" value="<?php echo $row['id_rmedik']; ?>">	
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Ayah :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nma" required value="<?php echo $row['nm_ayah']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Ibu :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nmi" required value="<?php echo $row['nm_ibu']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Suami/Istri :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nmsi" required value="<?php echo $row['nm_si']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Penghubung :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nmp" required value="<?php echo $row['nm_dihubungi']; ?>"/>
                </div>
              	</div>	
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Hubungan :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="hb" required value="<?php echo $row['hubungan']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Alamat Penghubung :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="ap" required value="<?php echo $row['alamat']; ?>"/>
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">No HP Penghubung :</label>
                <div class="controls span6">
                <input type="number" id="normal-field" class="row-fluid" name="nohpp" required value="<?php echo $row['no_hp']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Dokter Pengirim :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="dpr" required value="<?php echo $row['dokter_pengirim']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Alamat Pengirim :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="apr" required value="<?php echo $row['alamat_pengirim']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Perubahan Alamat :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="pa" required value="<?php echo $row['perubahan_alamat']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Dokter Penanggung Jawab :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="dpj" required value="<?php echo $row['dr_pjawab']; ?>"/>
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
			<form class="form-horizontal row-fluid" action="prormedik.php" method="post">
			<?php
				$id_pasien = $_GET['id']
			?>
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Ayah :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nma" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Ibu :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nmi" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Suami/Istri :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nmsi" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Penghubung :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nmp" required />
                </div>
              	</div>	
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Hubungan :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="hb" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Alamat Penghubung :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="ap" required />
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">No HP Penghubung :</label>
                <div class="controls span6">
                <input type="number" id="normal-field" class="row-fluid" name="nohpp" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Dokter Pengirim :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="dpr" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Alamat Pengirim :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="apr" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Perubahan Alamat :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="pa" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Dokter Penanggung Jawab :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="dpj" required />
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
            	

          