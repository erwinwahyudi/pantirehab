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
		$updated = "UPDATE dokter SET id_dokter='$id', nip_dokter='$nip', nm_dokter='$nama', ttl_dokter='$tgllhr', alamat_dokter='$apt', nohp_dokter='$nohppt', jabatan_dokter='$jabatan' WHERE id_dokter='$id'";
		$queryd = mysql_query($updated);
		if ($queryd)
		{
				?>
				<script language="javascript"> 
						alert("Data terupdate");
						document.location='hdokter.php?menu=ppdokter';
				</script> 
				<?php
		} else {
			echo "data gagal terupdate";
			print_r($queryd);
		}			
	}
?>
