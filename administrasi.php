<?php
		if(isset($_GET['action'])){				
			if($_GET['action'] == "update")
			{
				$id_pasien = $_GET['id'];
						
				$query = mysql_query("select * from administrasi where id_pasien='$id_pasien'");
				$row = mysql_fetch_array($query);
?>
        
<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Edit Data Administrasi</span></h3>
		</div>
		<div class="content">
				<form class="form-horizontal row-fluid" action="proadministrasi.php" method="post">
				<input type="hidden" name="id_administrasi" value="<?php echo $row['id_administrasi'] ?>">
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Pembayar :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nmpembayar" required value="<?php echo $row['nm_pembayar']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal Transaksi :</label>
                <div class="controls span6">
                <input type="text" id="datepicker" class="row-fluid" name="tgltr" required value="<?php echo $row['tgl_transaksi']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Total :</label>
                <div class="controls span6">
                <input type="number" id="normal-field" class="row-fluid" name="total" required value="<?php echo $row['total']; ?>"/>
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
?>

<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Tambah Data Administrasi</span></h3>
		</div>
		<div class="content">
				<form class="form-horizontal row-fluid" action="proadministrasi.php" method="post">
				<?php
					$id_pasien = $_GET['id'];
					//echo $id_pasien;
				?>
				<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Pembayar :</label>
                <div class="controls span6">
                <input type="text" id="normal-field" class="row-fluid" name="nmpembayar" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Tanggal Transaksi :</label>
                <div class="controls span6">
                <input type="text" id="datepicker" class="row-fluid" name="tgltr" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Total :</label>
                <div class="controls span6">
                <input type="number" id="normal-field" class="row-fluid" name="total" required />
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