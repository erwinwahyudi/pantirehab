<?php
		include "koneksidb.php";
		
		if(isset($_GET['action'])){				
			if($_GET['action'] == "update")
			{
				$id_kpasien = $_GET['id'];
						
				$query = mysql_query("select * from kebutuhan_pasien where id_kpasien='$id_kpasien'");
				$row = mysql_fetch_array($query);
?>

<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Edit Kebutuhan Pasien</span></h3>
		</div>
		<div class="content">
        
				<form class="form-horizontal row-fluid" action="prokpasien.php" method="post">
				<input type="hidden" name="id_kpasien" value="<?php echo $row['id_kpasien']; ?>">
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Barang :</label>
                <div class="controls span4">
                <input type="text" id="normal-field" class="row-fluid" name="nb" required value="<?php echo $row['nm_barang']; ?>"/>
                </div>
              	</div>
                
                 <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Jumlah Barang :</label>
                <div class="controls span4">
                <input type="number" id="normal-field" class="row-fluid" name="jb" required value="<?php echo $row['j_barang']; ?>"/>
                </div>
              	</div>
                
                <div class="form-actions row-fluid">
                	<div class="span7 offset3">
                      <button type="submit" class="btn btn-primary" name="action" value="update">Edit</button>
                      <button type="reset" class="btn btn-secondary" value="Batal">Batal</button>
                    </div>
              	</div>
			</form>
             </div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span7" -->
	
			<?php }
			} else { ?>

<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Tambah Kebutuhan Pasien</span></h3>
		</div>
		<div class="content">
			<form class="form-horizontal row-fluid" action="prokpasien.php" method="post">
            
            	<div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Barang :</label>
                <div class="controls span4">
                <input type="text" id="normal-field" class="row-fluid" name="nb" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Jumlah Barang :</label>
                <div class="controls span4">
                <input type="number" id="normal-field" class="row-fluid" name="jb" required />
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