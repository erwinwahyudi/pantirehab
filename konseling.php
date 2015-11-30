<?php
		if(isset($_GET['action'])){				
			if($_GET['action'] == "update")
			{
				$id_konseling = $_GET['id']; 
						
				$query = mysql_query("SELECT * FROM konseling WHERE id_konseling='$id_konseling'");
				$row = mysql_fetch_array($query);
				
?>

<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Edit Data Konseling</span></h3>
		</div>
		<div class="content">				
				<form class="form-horizontal row-fluid" action="prokonseling.php" method="post" >
        		<input type="hidden" name="id_konseling" value="<?php echo $row['id_konseling']; ?>">
                    
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal :</label>
                <div class="controls span6">
                <input type="text" id="datepicker" class="row-fluid" name="tglko" required value="<?php echo $row['tgl_konseling']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Jam :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="jamko" required value="<?php echo $row['jam_konseling']; ?>"/>
                </div>
              	</div>
               
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-textarea">Catatan :</label>
                <div class="controls span6">
                <textarea rows="3" class="row-fluid" name="catatan" id="default-textarea"  required><?php echo $row['catatan']; ?></textarea>
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
	<?php	}
		} else {
				$id_pasien = $_GET['id'];
	?>
                
<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Tambah Data Konseling</span></h3>
		</div>
		<div class="content">	
			<form class="form-horizontal row-fluid" action="prokonseling.php" method="post" >
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal :</label>
                <div class="controls span6">
                <input type="text" class="row-fluid" name="tglko" id="datepicker" required />
                </div>
              	</div>
                
                 <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Jam :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="jamko" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="default-textarea">Catatan :</label>
                <div class="controls span6">
                <textarea rows="3" class="row-fluid" name="catatan" id="default-textarea"  required></textarea>
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
<?php 	} ?>	