<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Edit Profil Pribadi Petugas Rekam Medik</span></h3>
		</div>
		<div class="content">
	
	<?php
	include "koneksidb.php";
	
	$id_login = $_POST['id_login'];	
	$query = mysql_query("SELECT * FROM p_rmedik WHERE id_login='$id_login'");
	$row = mysql_fetch_array($query);
	?>
	
				<form class="form-horizontal row-fluid" action="prm_proupprofil.php" method="post">
				
					<input type="hidden" name="id_login" value="<?php echo $row['id_login']; ?>" />
					<input type="hidden" name="id" value="<?php echo $row['id_prmedik']; ?>" />
					<input type="hidden" name="nip" value="<?php echo $row['nip_prmedik']; ?>" />
					
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">NIP :</label>
                <div class="controls span6">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['nip_prmedik']; ?>">
                </div>
              	</div>
                  
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nmpt" required value="<?php echo $row['nm_prmedik']; ?>"/>
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal Lahir :</label>
                <div class="controls span6">
                <input type="text" id="datepicker" class="row-fluid" name="tgllhr" required value="<?php echo $row['ttl_prmedik']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Alamat :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="apt" required value="<?php echo $row['alamat_prmedik']; ?>" />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">No Hp :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nohppt" required value="<?php echo $row['nohp_prmedik']; ?>" />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Jabatan :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="jabatan" required value="<?php echo $row['jabatan_prmedik']; ?>" />
                </div>
              	</div>
				
                <div class="form-actions row-fluid">
                    <div class="span7 offset3">
                      <button type="submit" class="btn btn-primary" name="action" value="update">Simpan</button>
                      <a href="hprmedik.php?menu=ppprmedik"><button type="button" class="btn btn-secondary" value="Kembali">Kembali</button></a>
                    </div>
              	</div>
		</form>
		</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span7" -->
	
	