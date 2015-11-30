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
		$updatem = "UPDATE p_rmedik SET id_prmedik='$id', nip_prmedik='$nip', nm_prmedik='$nama', ttl_prmedik='$tgllhr', alamat_prmedik='$apt', nohp_prmedik='$nohppt', jabatan_prmedik='$jabatan' WHERE id_prmedik='$id'";
		$querym = mysql_query($updatem);
		if ($querym)
		{
				?>
				<script language="javascript"> 
						alert("Data terupdate");
						document.location='hprmedik.php?menu=ppprmedik';
				</script> 
				<?php
		} else {
			?>
			    <script type="text/javascript">
			    alert("Data gagal terupdate");
			    window.history.go(-1);
			    </script>
			    <?php
			
		}			
	}
?>
