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
		$updatek = "UPDATE konselor SET id_konselor='$id', nip_konselor='$nip', nm_konselor='$nama', ttl_konselor='$tgllhr', alamat_konselor='$apt', nohp_konselor='$nohppt', jabatan_konselor='$jabatan' WHERE id_konselor='$id'";
		$queryk = mysql_query($updatek);
		if ($queryk)
		{
				?>
				<script language="javascript"> 
						alert("Data terupdate");
						document.location='hkonselor.php?menu=ppkonselor';
				</script>
				<?php
				
		} else {
			?>
				<script language="javascript"> 
						alert("Data terupdate");
						document.location='hkonselor.php?menu=ppkonselor';
				</script>
				<?php
		}			
	}
?>
