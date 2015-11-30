<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Profil Pribadi Orangtua</span></h3>
		</div>
		<div class="content">
		
            <form class="form-horizontal row-fluid" action="?menu=ot_upprofil" method="post">
				
				<?php
					include "koneksidb.php";
					
					$session = $_SESSION['user'];
					$qlogin = mysql_query("SELECT * FROM login where uname='$session' ");
					$rlogin = mysql_fetch_array($qlogin);	
					$id_login = $rlogin['id_login'];
					
					$query = mysql_query("SELECT ot.* , ps.* FROM orang_tua ot RIGHT JOIN pasien ps ON ot.id_pasien = ps.id_pasien WHERE ot.id_login ='$id_login' ");
					$row = mysql_fetch_array($query);
					$nama = $row['nm_otua'];
				?>
				<input type="hidden" name="id_login" value="<?php echo $id_login; ?> ">
					
				<div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">Nama :</label>
                <div class="controls span6">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['nm_otua']; ?>">
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">Alamat :</label>
                <div class="controls span6">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['alamat_otua']; ?>">
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">No HP :</label>
                <div class="controls span6">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['nohp_otua']; ?>">
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
                      <button type="submit" class="btn btn-primary" name="action" value="update">Edit</button>
                    </div>
              	</div>
		</form>
		</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span7" -->
			
					