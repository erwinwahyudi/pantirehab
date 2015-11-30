<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-lock"></i><span>Ubah Password</span></h3>
		</div>
		<div class="content">
		<?php
				include "koneksidb.php";

				$uname = $_SESSION['user'];
						
				$query = mysql_query("select * from login where uname='$uname'");
				$row = mysql_fetch_array($query);
		?>
				<form class="form-horizontal row-fluid" action="?menu=per_ubahpass" method="post">
				<input type="hidden" name="id_login" value="<?php echo $row['id_login']; ?>">
				
                <div class="control-group row-fluid">
                <label class="control-label span4">Password Lama :</label>
                <div class="controls span7 input-prepend">
                  <span class="add-on"><i class="icon-lock"></i></span>
                  <input type="password" id="passwordlm" name="passlama" data-typetoggle='#show-password' required >
                </div>
              	</div>
                
                <div class="control-group row-fluid">
                <label class="control-label span4">Password Baru :</label>
                <div class="controls span7 input-prepend">
                  <span class="add-on"><i class="icon-lock"></i></span>
                  <input type="password" id="passwordbr" name="passbaru" data-typetoggle='#show-password' required >
                </div>
              	</div>
                
                <div class="control-group row-fluid">
                <label class="control-label span4">Konfirmasi Password Baru :</label>
                <div class="controls span7 input-prepend">
                  <span class="add-on"><i class="icon-lock"></i></span>
                  <input type="password" id="passwordkn" name="passkon" data-typetoggle='#show-password' required >
                </div>
              	</div>
               
                <div class="form-row control-group row-fluid ">
                <label class="control-label span4"></label>
                <div class="controls span7">
                  <label class="checkbox inline">
                  <input type="checkbox" id="show-password" >lihat password </label>
                </div>
              	</div>
                
                <div class="form-actions row-fluid">
                	<div class="span7 offset4">
                      <button type="submit" class="btn btn-primary" name="action" value="update">Simpan</button>
                      <button type="reset" class="btn btn-secondary" value="Batal">Batal</button>
                    </div>
              	</div>
		</form>
            </div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span7" -->

	<?php


	if (isset($_POST['action']) == 'Update')
	{
		$id_login = $_POST['id_login'];
		$passlama = md5($_POST['passlama']);
		$passbaru = md5($_POST['passbaru']);
		$passkon = md5($_POST['passkon']);
		
		 $query = mysql_query("SELECT * FROM login where id_login='$id_login'");
		 $row = mysql_fetch_array($query);
		 $passlogin = $row['password'];
		 if($passlama == $passlogin && $passbaru==$passkon) {
		 	$update = mysql_query("UPDATE login SET id_login='$id_login', password='$passbaru' WHERE id_login='$id_login' ");
		 	if($update){
		 		?> <script language="javascript">alert("Password baru tersimpan");
					document.location="?menu=per_ubahpass";</script>
	   			<?php
		 	} else {
		 		?> <script language="javascript">alert("Maaf data password tidak tersimpan");
					document.location="?menu=per_ubahpass";</script>
	   			<?php
		 	}
		 } else {
		 		?> <script language="javascript">alert("Maaf data password anda salah, silahkan cek dan isi kembali");
					document.location="?menu=per_ubahpass";</script>
	   			<?php
		 }
	}
	
?>
	
</html>