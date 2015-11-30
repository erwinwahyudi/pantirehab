<div class="span7">
        <div class="box gradient">
          <div class="title">
            <h3>
            <i class="icon-book"></i><span>Edit Data Orangtua</span>
            </h3>
          </div>
          <div class="content">
           <form class="form-horizontal row-fluid" action="proppot.php" method="POST">
				<?php
					include "koneksidb.php";
					$id_login = $_GET['id'];

					
					$query = mysql_query("select * from orang_tua where id_login='$id_login'");
					$row = mysql_fetch_array($query);
				?>              
					<input type="hidden" name="id_login" value="<?php echo $id_login; ?>" />
					<input type="hidden" name="id_otua" value="<?php echo $row['id_otua']; ?>" />

			  <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama</label>
                <div class="controls span6">
                  <input type="text" id="normal-field" class="row-fluid" name="nmot" required value="<?php echo $row['nm_otua']; ?>">
                </div>
              </div>

			  <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Alamat</label>
                <div class="controls span6">
                  <input type="text" id="normal-field" class="row-fluid" name="aot" value="<?php echo $row['alamat_otua']; ?>" required>
                </div>
              </div>			  

              <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">No Hp</label>
                <div class="controls span6">
                  <input type="number" id="normal-field" class="row-fluid" name="nohpot" required value="<?php echo $row['nohp_otua']; ?>">
                </div>
              </div>
             
              <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Nama Anak</label>
                <div class="controls span6">
                  <select data-placeholder="Pilih nama anak..." class="chzn-select" name='id_pasien' >
                   <option value=""></option>
                   <?php 
                      $qps = mysql_query("SELECT * FROM pasien where id_pasien='".$row['id_pasien']."'");
                      while($data = mysql_fetch_array($qps)) {
                          echo "<option value='".$data['id_pasien']."' selected>".$data['nm_pasien']."</option>";
                      } 
                    ?>

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
                  <input type="text" id="normal-field" class="row-fluid" name="kunik" required value="<?php echo $row['kode_unik']; ?>">
                </div>
              </div>

            <div class="form-actions row-fluid">
                <div class="span7 offset3">
                  <button type="submit" class="btn btn-primary" name="action" value="Update">Edit</button>
                  <a href="admin.php?menu=viewotua"><button type="button" class="btn btn-secondary" value="Lewati">Lewati</button></a>
                </div>
              </div>
            </form>
          </div>
        </div>