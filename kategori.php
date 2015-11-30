<?php 
	if(isset($_GET['action']))
	{				
		if($_GET['action'] == "update")
			{
				$id_login = $_GET['id'];
						
				$query = mysql_query("SELECT * FROM login WHERE id_login='$id_login'");
				$row = mysql_fetch_array($query);
				?>
		<div class="span7">
        <div class="box gradient">
        
          <div class="title">
            <h3>
            <i class="icon-book"></i><span>Edit Data Petugas</span>
            </h3>
          </div>

          <div class="content">
           <form class="form-horizontal row-fluid" action="prokategori.php" method="POST">

              
			<input type="hidden" name="id_login" value="<?php echo $id_login; ?>" />

			  <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Username</label>
                <div class="controls span5">
                  <input type="text" id="normal-field" class="row-fluid" name="uname" required value="<?php echo $row['uname']; ?>">
                </div>
              </div>

			  <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Password</label>
                <div class="controls span5">
                  <input type="password" id="normal-field" class="row-fluid" name="password">
                </div>
              </div>

              <div class="form-row control-group row-fluid">
              <label class="control-label span3" for="default-select">Kategori</label>
                <div class="controls span5">
                <?php 
						$ktg = $row['kategori'];
						if($ktg == "dokter")
						{
							$dokter ="selected"; $perawat = ""; $prmedik = "";	$konselor = "";	$logistik = "";	$karyawan = "";
						}
						else if ($ktg == "perawat")
						{
							$dokter = ""; $perawat ="selected"; $prmedik = "";	$konselor = "";	$logistik = "";	$karyawan = "";
						}
						else if ($ktg == "petugas rekam medik")
						{
							$dokter = ""; $perawat = ""; $prmedik = "selected";	$konselor = "";	$logistik = "";	$karyawan = "";
						}
						else if ($ktg == "konselor")
						{
							$dokter = ""; $perawat = ""; $prmedik = "";	$konselor ="selected";	$logistik = "";	$karyawan = "";
						}
						else if ($ktg == "logistik")
						{
							$dokter = ""; $perawat = ""; $prmedik = "";	$konselor = "";	$logistik ="selected";	$karyawan = "";	
						}
						else 
						{
							$dokter = ""; $perawat = ""; $prmedik = "";	$konselor = "";	$logistik ="";	$karyawan ="selected";	
						}
					 ?>
                  <select data-placeholder="Choose your favorite character..." class="chzn-select" id="default-select" name="kategori">
                    <option value="dokter" <?php echo $dokter; ?> >Dokter</option>
					<option value="perawat" <?php echo $perawat; ?> >Perawat</option>
					<option value="petugas rekam medik" <?php echo $prmedik; ?> >Petugas Rekam Medik</option>
					<option value="konselor" <?php echo $konselor; ?> >Konselor</option>
					<option value="logistik" <?php echo $logistik; ?> >Logistik</option>
                    <option value="karyawan" <?php echo $karyawan; ?> >Karyawan</option>
                  </select>
                </div>
                </div>
				


				<div class="form-actions row-fluid">
                <div class="span7 offset3">
                  <button type="submit" class="btn btn-primary" name="action" value="update">Edit</button>
                  <button type="button" class="btn btn-secondary" value="Batal">Batal</button>
                </div>
              </div>
            </form>
          </div>
        </div>
				<?php
			}
	}
	else { ?>


	<div class="span7">
        <div class="box gradient">
          <div class="title">
            <h3>
            <i class="icon-book"></i><span>Tambah Data Petugas</span>
            </h3>
          </div>
          <div class="content">
           <form class="form-horizontal row-fluid" action="prokategori.php" method="POST">

              
			<input type="hidden" name="id_login" value="<?php echo $id_login; ?>" />

			  <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Username</label>
                <div class="controls span5">
                  <input type="text" id="normal-field" class="row-fluid" name="uname" required>
                </div>
              </div>

			  <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Password</label>
                <div class="controls span5">
                  <input type="password" id="normal-field" class="row-fluid" name="password">
                </div>
              </div>

            <div class="form-row control-group row-fluid">
			<label class="control-label span3" for="default-select">Kategori</label>
                <div class="controls span5">
               	<select data-placeholder="Choose your favorite character..." class="chzn-select" id="default-select" name="kategori">
                    <option value="dokter" >Dokter</option>
					<option value="perawat" >Perawat</option>
					<option value="petugas rekam medik" >Petugas Rekam Medik</option>
					<option value="konselor" >Konselor</option>
					<option value="logistik" >Logistik</option>
                    <option value="karyawan" >Karyawan</option>
                  </select>
                </div>
             </div>

            <div class="form-actions row-fluid">
                <div class="span7 offset3">
                  <button type="submit" class="btn btn-primary" name="submit" value="Simpan">Simpan</button>
                  <button type="button" class="btn btn-secondary" value="Batal">Batal</button>
                </div>
            </div>
            </form>
          </div>
        </div>
<?php } ?>