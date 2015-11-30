<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Edit Profil Pribadi Orang Tua</span></h3>
		</div>
		<div class="content">
		
	<?php
	include "koneksidb.php";
	
	$id_login = $_POST['id_login'];	
	$query = mysql_query("SELECT ot.* , ps.* FROM orang_tua ot RIGHT JOIN pasien ps ON ot.id_pasien = ps.id_pasien WHERE ot.id_login ='$id_login'");
	$row = mysql_fetch_array($query);
	?>
	
				<form class="form-horizontal row-fluid" action="ot_proupprofil.php" method="post">
				
					<input type="hidden" name="id_login" value="<?php echo $row['id_login']; ?>" />
					<input type="hidden" name="id_otua" value="<?php echo $row['id_otua']; ?>" />
										
				<div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nmot" required value="<?php echo $row['nm_otua']; ?>"/>
                </div>
              	</div>	
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Alamat :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="aot" required value="<?php echo $row['alamat_otua']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">No HP :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nohpot" required value="<?php echo $row['nohp_otua']; ?>"/>
                </div>
              	</div>	
			 
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">Nama Anak :</label>
                <div class="controls span6">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['nm_pasien']; ?>">
                </div>
              	</div>
                
                
                <div class="form-actions row-fluid">
                    <div class="span7 offset3">
                      <button type="submit" class="btn btn-primary" name="action" value="update">Simpan</button>
                      <a href="hotua.php?menu=ppotua"><button type="button" class="btn btn-secondary" value="Kembali">Kembali</button></a>
                    </div>
              	</div>
		</form>
		</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span7" -->
	
	
			