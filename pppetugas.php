	<?php
	include "koneksidb.php";
	if(isset($_GET['action']))
	{				
		if($_GET['action'] == "update")
			{
				$id_login = $_GET['id'];				
				$query = mysql_query("SELECT * FROM login WHERE id_login='$id_login'");
				$cek = mysql_fetch_array($query);
								
				if($cek['kategori'] == "dokter") {
					$kategori = "dokter";
				} elseif ($cek['kategori'] == "konselor") {
					$kategori = "konselor";
				} elseif ($cek['kategori'] == "karyawan") {
					$kategori = "karyawan";
				} elseif ($cek['kategori'] == "petugas rekam medik") {
					$kategori = "p_rmedik";
				} elseif ($cek['kategori'] == "perawat") {
					$kategori = "perawat";
				} else {
					$kategori = "logistik";
				}
				
				$queryup = mysql_query("SELECT * FROM $kategori WHERE id_login='$id_login'");
				$row = mysql_fetch_array($queryup);
				
				if($kategori == "dokter") {
					$id = $row['id_dokter'];
					$nip = $row['nip_dokter'];
					$nama = $row['nm_dokter'];
					$ttl = $row['ttl_dokter'];
					$alamat = $row['alamat_dokter'];
					$nohp = $row['nohp_dokter'];
					$jabatan = $row['jabatan_dokter']; 
				} elseif ($kategori == "konselor") {
					$id = $row['id_konselor'];
					$nip = $row['nip_konselor'];
					$nama = $row['nm_konselor'];
					$ttl = $row['ttl_konselor'];
					$alamat = $row['alamat_konselor'];
					$nohp = $row['nohp_konselor'];
					$jabatan = $row['jabatan_konselor']; 
				} elseif ($kategori == "karyawan") {
					$id = $row['id_karyawan'];
					$nip = $row['nip_karyawan'];
					$nama = $row['nm_karyawan'];
					$ttl = $row['ttl_karyawan'];
					$alamat = $row['alamat_karyawan'];
					$nohp = $row['nohp_karyawan'];
					$jabatan = $row['jabatan_karyawan']; 
				} elseif ($kategori == "p_rmedik") {
					$id = $row['id_prmedik'];
					$nip = $row['nip_prmedik'];
					$nama = $row['nm_prmedik'];
					$ttl = $row['ttl_prmedik'];
					$alamat = $row['alamat_prmedik'];
					$nohp = $row['nohp_prmedik'];
					$jabatan = $row['jabatan_prmedik']; 

				} elseif ($kategori == "perawat") {
					$id = $row['id_perawat'];
					$nip = $row['nip_perawat'];
					$nama = $row['nm_perawat'];
					$ttl = $row['ttl_perawat'];
					$alamat = $row['alamat_perawat'];
					$nohp = $row['nohp_perawat'];
					$jabatan = $row['jabatan_perawat']; 
				} else {
					$id = $row['id_logistik'];
					$nip = $row['nip_logistik'];
					$nama = $row['nm_logistik'];
					$ttl = $row['ttl_logistik'];
					$alamat = $row['alamat_logistik'];
					$nohp = $row['nohp_logistik'];
					$jabatan = $row['jabatan_logistik']; 
				}
				?>
		<div class="span7">
        <div class="box gradient">
          <div class="title">
            <h3>
            <i class="icon-book"></i><span>Edit Profil Data Petugas</span>
            </h3>
          </div>
          <div class="content">
           <form class="form-horizontal row-fluid" action="proppetugas.php" method="post">

			
					<input type="hidden" name="id_login" value="<?php echo $id_login; ?>" />
					<input type="hidden" name="kategori" value="<?php echo $kategori; ?>" />
					<input type="hidden" name="id" value="<?php echo $id; ?>" />

				  <div class="form-row control-group row-fluid">
	                <label class="control-label span3" for="normal-field">NIP :</label>
	                <div class="controls span6">
	                  <input type="text" id="normal-field" class="row-fluid" name="nip" value="<?php echo $nip; ?>" required>
	                </div>
	              </div>

	              <div class="form-row control-group row-fluid">
	                <label class="control-label span3" for="normal-field">Nama :</label>
	                <div class="controls span6">
	                  <input type="text" id="normal-field" class="row-fluid" name="nmpt" value="<?php echo $nama; ?>" required>
	                </div>
	              </div>

	              <div class="form-row control-group row-fluid">
	                <label class="control-label span3">Tanggal Lahir :</label>
	                <div class="controls span6">
	                  <input type="text" class="row-fluid" name="tgllhr" id="datepicker" value="<?php echo $ttl; ?>" required>
	                </div>
	              </div>

	              <div class="form-row control-group row-fluid">
	                <label class="control-label span3" for="normal-field">Alamat :</label>
	                <div class="controls span6">
	                  <input type="text" id="normal-field" class="row-fluid" name="apt" value="<?php echo $alamat; ?>" required>
	                </div>
	              </div>

	              <div class="form-row control-group row-fluid">
	                <label class="control-label span3" for="normal-field">No Hp :</label>
	                <div class="controls span6">
	                  <input type="number" id="normal-field" class="row-fluid" name="nohppt" value="<?php echo $nohp; ?>" required>
	                </div>
	              </div>

	              <div class="form-row control-group row-fluid">
	                <label class="control-label span3" for="normal-field">Jabatan :</label>
	                <div class="controls span6">
	                  <input type="text" id="normal-field" class="row-fluid" name="jabatan" value="<?php echo $jabatan; ?>" required>
	                </div>
	              </div>

	          	<div class="form-actions row-fluid">
                <div class="span7 offset3">
                  <button type="submit" class="btn btn-primary" name="action" value="update">Edit</button>
                  <a href="admin.php?menu=viewpetugas"><button type="button" class="btn btn-secondary" value="Lewati">Batal</button></a>
                </div>
              </div>
            </form>
          </div>
        </div>
				<?php
			}
	}
	else { ?>


			<!-- form input -->
		<div class="span7">
        <div class="box gradient">
          <div class="title">
            <h3>
            <i class="icon-book"></i><span>Tambah Profil Data Petugas</span>
            </h3>
          </div>
          <div class="content">
           <form class="form-horizontal row-fluid" action="proppetugas.php" method="post">
				
				<?php
					
					$id_login = $_GET['id'];

					//echo $id_login;
					
					$query = mysql_query("select * from login where id_login='$id_login'");
					$row = mysql_fetch_array($query);
					$kategori = $row['kategori'];
					//echo $kategori;
					
				?>
				
				
					<input type="hidden" name="id_login" value="<?php echo $id_login; ?>" />
					<input type="hidden" name="kategori" value="<?php echo $kategori; ?>" />

 				  <div class="form-row control-group row-fluid">
	                <label class="control-label span3" for="normal-field">NIP :</label>
	                <div class="controls span6">
	                  <input type="text" id="normal-field" class="row-fluid" name="nip"  required>
	                </div>
	              </div>

	              <div class="form-row control-group row-fluid">
	                <label class="control-label span3" for="normal-field">Nama :</label>
	                <div class="controls span6">
	                  <input type="text" id="normal-field" class="row-fluid" name="nmpt" required>
	                </div>
	              </div>

	              <div class="form-row control-group row-fluid">
	                <label class="control-label span3" for="normal-field">Tanggal Lahir :</label>
	                <div class="controls span6">
	                  <input type="text" class="row-fluid" name="tgllhr" id="datepicker" required>
	                </div>
	              </div>

	              <div class="form-row control-group row-fluid">
	                <label class="control-label span3" for="normal-field">Alamat :</label>
	                <div class="controls span6">
	                  <input type="text" id="normal-field" class="row-fluid" name="apt" required>
	                </div>
	              </div>

	              <div class="form-row control-group row-fluid">
	                <label class="control-label span3" for="normal-field">No Hp :</label>
	                <div class="controls span6">
	                  <input type="number" id="normal-field" class="row-fluid" name="nohppt" required>
	                </div>
	              </div>

	              <div class="form-row control-group row-fluid">
	                <label class="control-label span3" for="normal-field">Jabatan :</label>
	                <div class="controls span6">
	                  <input type="text" id="normal-field" class="row-fluid" name="jabatan" required>
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
			</form>
	<?php } ?>
