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
		$updatep = "UPDATE perawat SET id_perawat='$id', nip_perawat='$nip', nm_perawat='$nama', ttl_perawat='$tgllhr', alamat_perawat='$apt', nohp_perawat='$nohppt', jabatan_perawat='$jabatan' WHERE id_perawat='$id'";
		$queryp = mysql_query($updatep);
		if ($queryp)
		{
				?>
				<script language="javascript"> 
						alert("Data terupdate");
						document.location='hperawat.php?menu=ppperawat';
				</script> 
				<?php
		} else {
			?>
				<script language="javascript"> 
						alert("Data terupdate");
						document.location='hperawat.php?menu=ppperawat';
				</script> 
				<?php
		}			
	}
?>
