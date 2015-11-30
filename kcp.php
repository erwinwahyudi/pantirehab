<?php
		include "koneksidb.php";
				
        if(isset($_GET['action']))
	{				
		if($_GET['action'] == "update")
			{
				$kcp = $_GET['kcp'];
						
				$query = mysql_query("select * from cara_penggunaan where k_cp='$kcp'");
				$row = mysql_fetch_array($query);
				
?>

<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Edit Kode Cara Penggunaan</span></h3>
		</div>
		<div class="content">
				<form class="form-horizontal row-fluid" action="prokcp.php" method="post">
				<input type="hidden" name="kp" value="<?php echo $row['k_cp']; ?>">
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Kode Cara Penggunaan :</label>
                <div class="controls span6">
                <input type="number" id="normal-field" class="row-fluid" name="kcp" required value="<?php echo $row['k_cp']; ?>"/>
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Cara Penggunaan :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="cp" required value="<?php echo $row['cp']; ?>"/>
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
            <h3><i class="icon-book"></i><span>Tambah Cara Penggunaan</span></h3>
		</div>
		<div class="content">
           		<form class="form-horizontal row-fluid" action="prokcp.php" method="post">
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Kode Cara Penggunaan :</label>
                <div class="controls span6">
                <input type="number" id="normal-field" class="row-fluid" name="kcp" required />
                </div>
              	</div>
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="normal-field">Cara Penggunaan :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="cp" required />
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
			