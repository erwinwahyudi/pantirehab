<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Profil Pribadi Petugas Rekam Medik</span></h3>
		</div>
		<div class="content">
		
			<form class="form-horizontal row-fluid" action="hprmedik.php?menu=prm_upprofil" method="post">
				
				<?php
					include "koneksidb.php";
					
					$session = $_SESSION['user'];
					$qlogin = mysql_query("SELECT * FROM login where uname='$session' ");
					$rlogin = mysql_fetch_array($qlogin);	
					$id_login = $rlogin['id_login'];
					
					$query = mysql_query("SELECT * from p_rmedik where id_login='$id_login'");
					$row = mysql_fetch_array($query);
					$nama = $row['nm_prmedik'];
				?>

				<input type="hidden"  name="id_login" value="<?php echo $row['id_login']; ?>" >
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">NIP :</label>
                <div class="controls span6">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['nip_prmedik']; ?>">
                </div>
              	</div>
                
				<div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">Nama :</label>
                <div class="controls span6">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['nm_prmedik']; ?>">
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">Tanggal Lahir :</label>
                <div class="controls span6">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['ttl_prmedik']; ?>">
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">Alamat :</label>
                <div class="controls span6">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['alamat_prmedik']; ?>">
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">No Hp :</label>
                <div class="controls span6">
                <input type="number" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['nohp_prmedik']; ?>">
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">Jabatan :</label>
                <div class="controls span6">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['jabatan_prmedik']; ?>">
                </div>
              	</div>
             	
                <div class="form-actions row-fluid">
                                        <div class="span7 offset3">
                    <?php
                    if($row['nip_prmedik'] == '')
                    {
                      echo "<b>Hubungi Admin untuk melengkapi data.</b>";
                    } else {
                    ?>
                      <button type="submit" class="btn btn-primary" name="action" value="update">Edit</button>
                    <?php } ?>
                    </div>
              	</div>
				</form>
		</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span7" -->
	