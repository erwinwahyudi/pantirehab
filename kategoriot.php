	<div class="span7">
        <div class="box gradient">
          <div class="title">
            <h3>
            <i class="icon-book"></i><span>Tambah Data Orangtua</span>
            </h3>
          </div>
          <div class="content">
           <form class="form-horizontal row-fluid" action="prokategoriot.php" method="POST">

              
			<input type="hidden" name="id_login" value="<?php echo $id_login; ?>" />

			  <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Username</label>
                <div class="controls span6">
                  <input type="text" id="normal-field" class="row-fluid" name="uname" required>
                </div>
              </div>

			  <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="normal-field">Password</label>
                <div class="controls span6">
                  <input type="password" id="normal-field" class="row-fluid" name="password">
                </div>
              </div>

            <input type="hidden" name="kategori" value="orang tua" />
				

            <div class="form-actions row-fluid">
                <div class="span7 offset3">
                  <button type="submit" class="btn btn-primary" name="submit" value="Simpan">Simpan</button>
                  <button type="button" class="btn btn-secondary" value="Batal">Batal</button>
                </div>
              </div>
            </form>
          </div>
        </div>
