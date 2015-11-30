<?php
	include "koneksidb.php";
	include "session.php";

	$id = $_POST['id'];
	$id_login = $_POST['id_login'];
	$nip = $_POST['nip'];
	$nama = $_POST['nmpt'];
	$tgllhr = $_POST['tgllhr'];
	$apt = $_POST['apt'];
	$nohppt = $_POST['nohppt'];
	$jabatan = $_POST['jabatan'];
	
	if (strtolower($_POST['action']) == "update")
	{
		$updatel = "UPDATE logistik SET id_logistik='$id', nip_logistik='$nip', nm_logistik='$nama', ttl_logistik='$tgllhr', alamat_logistik='$apt', nohp_logistik='$nohppt', jabatan_logistik='$jabatan' WHERE id_logistik='$id'";
		$queryl = mysql_query($updatel);
		if ($queryl)
		{
				?>
				<script language="javascript"> 
						alert("Data terupdate");
						document.location='hlogistik.php?menu=pplogistik';
				</script>
				<?php
				
		} else {
			echo "data gagal terupdate";
			print_r($updatel);
		}			
	}
?>
