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
		$updatekr = "UPDATE karyawan SET id_karyawan='$id', nip_karyawan='$nip', nm_karyawan='$nama', ttl_karyawan='$tgllhr', alamat_karyawan='$apt', nohp_karyawan='$nohppt', jabatan_karyawan='$jabatan' WHERE id_karyawan='$id'";
		$querykr = mysql_query($updatekr);
		if ($querykr)
		{
				?>
				<script language="javascript"> 
						alert("Data terupdate");
						document.location='hkaryawan.php?menu=ppkaryawan';
				</script>
				<?php
				
		} else {
			?>
				<script language="javascript"> 
						alert("Data terupdate");
						document.location='hkaryawan.php?menu=ppkaryawan';
				</script>
				<?php
		}			
	}
?>
