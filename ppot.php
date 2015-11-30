<?php
include "koneksidb.php";
$id_login = $_GET['id'];
$query = mysql_query("select * from login where id_login='$id_login'");
$row = mysql_fetch_array($query);
?>

<div class="span7">
        <div class="box gradient">
          <div class="title">
            <h3>
            <i class="icon-book"></i><span>Input Profil Data Orangtua</span>
            </h3>
          </div>
          <div class="content">
           <form class="form-horizontal row-fluid" action="proppot.php" method="POST">

              
			<input type="hidden" name="id_login" value="<?php echo $id_login; ?>" />

			  <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama</label>
                <div class="controls span6">
                  <input type="text" id="normal-field" class="row-fluid" name="nmot" required>
                </div>
              </div>

			  <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Alamat</label>
                <div class="controls span6">
                  <input type="text" id="normal-field" class="row-fluid" name="aot" required>
                </div>
              </div>

			  <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">No Hp</label>
                <div class="controls span6">
                  <input type="number" id="normal-field" class="row-fluid" name="nohpot" required>
                </div>
              </div>

              <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Anak</label>
                <div class="controls span6">
                  <select data-placeholder="Pilih nama anak..." class="chzn-select" name='id_pasien' >
                   <option value=""></option>
                      <?php
                        $qpasien = mysql_query("SELECT * FROM  pasien WHERE id_pasien NOT IN (SELECT id_pasien FROM orang_tua)");
                        while($dt = mysql_fetch_array($qpasien)) {
                          echo "<option value='".$dt['id_pasien']."'>".$dt['nm_pasien']."</option>";
                      }
                      ?>
              </select>
                </div>
              </div>

              <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Kode Unik</label>
                <div class="controls span6">
                <?php
                  $uname = $row['uname'];
                  $qnama = mysql_query("SELECT LEFT ('$uname', 3) as nm");
                  $dt  = mysql_fetch_array($qnama);
                ?>
                  <input type="text" id="normal-field" class="row-fluid" name="kunik" required value="<?php  echo $dt['nm']; echo rand(111, 999); ?>">
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







