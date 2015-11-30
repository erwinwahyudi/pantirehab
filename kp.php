<?php
		include "koneksidb.php";
				
        if(isset($_GET['action']))
	{				
		if($_GET['action'] == "update")
			{
				$kp = $_GET['kp'];
						
				$query = mysql_query("select * from kode_pekerjaan where k_pekerjaan='$kp'");
				$row = mysql_fetch_array($query);
?>
            
<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Edit Kode Pekerjaan</span></h3>
		</div>
		<div class="content">
				<form class="form-horizontal row-fluid" action="prokp.php" method="post">
				<input type="hidden" name="kp" value="<?php echo $row['k_pekerjaan']; ?>">
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Kode Pekerjaan :</label>
                <div class="controls span6">
                <input type="number" id="normal-field" class="row-fluid" name="kp" required value="<?php echo $row['k_pekerjaan']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Pekerjaan :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nmp" required value="<?php echo $row['nm_pekerjaan']; ?>"/>
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
	else { 
?>

<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Tambah Kode Pekerjaan</span></h3>
		</div>
		<div class="content">
    
            <form class="form-horizontal row-fluid" action="prokp.php" method="post">
				
				<div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Kode Pekerjaan :</label>
                <div class="controls span6">
                <input type="number" id="normal-field" class="row-fluid" name="kp" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Pekerjaan :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nmp" required />
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
			