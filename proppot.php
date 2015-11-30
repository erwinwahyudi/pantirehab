<?php
	include "koneksidb.php";

	$id_login = $_POST['id_login'];
	$nm_otua = $_POST['nmot'];
	$alamat_otua = $_POST['aot'];
	$nohp_otua = $_POST['nohpot'];
	$id_pasien = $_POST['id_pasien'];
	$kode_unik = $_POST['kunik'];
		
	if(isset($_POST['submit']))	{

			$insert = "INSERT INTO orang_tua (id_otua, id_login, id_pasien, nm_otua, alamat_otua, nohp_otua, kode_unik) 
						VALUES ('', '$id_login', '$id_pasien', '$nm_otua', '$alamat_otua', '$nohp_otua', '$kode_unik')";
			$query = mysql_query($insert);
			
			if ($query) {
				?>
			 	<script language="javascript"> 
					alert("Data tersimpan");
					document.location="admin.php?menu=viewotua";
				</script>
				<?php
			
			} else {
				?>
			    <script type="text/javascript">
			    alert("Data gagal tersimpan");
			    window.history.go(-1);
			    </script>
			    <?php
			}
	} 
	else if (strtolower($_POST['action']) == "update")
	{
		$querycek = mysql_query("select id_login from orang_tua where id_login='".$id_login."' ");
		$jlh = count(mysql_fetch_array($querycek));
		
		if ($jlh <= 1)
		{	
			$insert = "INSERT INTO orang_tua (id_otua, id_login, id_pasien, nm_otua, alamat_otua, nohp_otua, kode_unik) 
						VALUES ('', '$id_login', '$id_pasien', '$nm_otua', '$alamat_otua', '$nohp_otua', '$kode_unik')";
			$query = mysql_query($insert);
			
			if ($query) {

				?>
			 	<script language="javascript"> 
					alert("Data tersimpan");
					document.location="admin.php?menu=viewotua";
				</script>
				<?php
			
			} else {
				?>
			    <script type="text/javascript">
			    alert("Data gagal tersimpan");
			    window.history.go(-1);
			    </script>
			    <?php
			}
		}
		else
		{

			$id_otua = $_POST['id_otua'];

			$update = "UPDATE orang_tua SET id_otua='$id_otua', nm_otua='$nm_otua', alamat_otua='$alamat_otua', nohp_otua='$nohp_otua', kode_unik='$kode_unik', id_pasien='$id_pasien' WHERE id_otua='$id_otua'";
			$qupdate = mysql_query($update); 
		
			if($qupdate)
			{
			?>
				 <script language="javascript"> 
					alert("Data terupdate");
					document.location="admin.php?menu=viewotua";
				</script>
			<?php
			}
			else
			{
									
			?>
				<script language="javascript"> 
					alert("Data gagal terupdate");
					document.location="admin.php?menu=upotua&id='<?php echo $id_login; ?>' ";
				</script>
			<?php
			}
		}
	}
	
?>