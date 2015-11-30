<?php
	include "koneksidb.php";
	
	if ($_POST['action'] == "update")
	{
	$id_login = $_POST['id_login'];
	$id_otua = $_POST['id_otua'];
	$nm_otua = $_POST['nmot'];
	$alamat_otua = $_POST['aot'];
	$nohp_otua = $_POST['nohpot'];
		$update = "UPDATE orang_tua SET id_otua='$id_otua', nm_otua='$nm_otua', alamat_otua='$alamat_otua', nohp_otua='$nohp_otua' WHERE id_otua='$id_otua'";
		$qupdate = mysql_query($update); 
	
		if($qupdate)
		{
			
			?>
			 <script language="javascript"> 
				alert("Data terupdate");
				document.location="hotua.php?menu=ppotua";
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