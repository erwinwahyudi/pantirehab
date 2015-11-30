<?php
	include "koneksidb.php";

	if(isset($_POST['submit'])){

		$id_pasien = $_POST['id_pasien'];
		$nma = $_POST['nma'];
		$nmi = $_POST['nmi'];
		$nmsi = $_POST['nmsi'];
		$nmp = $_POST['nmp'];
		$hb = $_POST['hb'];
		$ap = $_POST['ap'];
		$nohpp = $_POST['nohpp'];
		$dpr = $_POST['dpr'];
		$apr = $_POST['apr'];
		$pa = $_POST['pa'];
		$dpj = $_POST['dpj'];

		
		$querycek = mysql_query("SELECT * from rekam_medik WHERE id_pasien='".$id_pasien."' ");
		$jlh = count(mysql_fetch_array($querycek));
			
		if ($jlh <= 1)
		{	
			$insert = "INSERT INTO rekam_medik (id_rmedik, id_pasien, nm_ayah, nm_ibu, nm_si, nm_dihubungi, hubungan,alamat, no_hp, dokter_pengirim, alamat_pengirim, perubahan_alamat, dr_pjawab) 
							VALUES ('','$id_pasien', '$nma', '$nmi', '$nmsi', '$nmp', '$hb', '$ap', '$nohpp', '$dpr', '$apr','$pa', '$dpj')";
			$query = mysql_query($insert);
			if ($query)
			{
				?>
				<script language="javascript"> 
					alert("Data rekam medik tersimpan");
					document.location="hprmedik.php?menu=prm_viewrekammedik";
				</script>
				<?php
			}
			else
			{
				?>
			    <script type="text/javascript">
			    alert("Data pasien gagal tersimpan");
			    window.history.go(-1);
			    </script>
			    <?php
			}
		} 
	}
	else if (isset($_GET['action']) == "delete")
	{
		$id_rmedik = $_GET['id'];
		$delete = mysql_query("DELETE rekam_medik FROM rekam_medik WHERE id_rmedik = '$id_rmedik' ");
		if($delete)
		{
			
			?>
			<script language="javascript"> 
					alert("Data rekam medik terhapus");
					document.location='hprmedik.php?menu=prm_viewrekammedik';
			</script>
			<?php
		}
		else
		{
			?>
			    <script type="text/javascript">
			    alert("Data pasien gagal terhapus");
			    window.history.go(-1);
			    </script>
			    <?php
		}
	} 
	else if (strtolower($_POST['action']) == "update")
	{
		$nma = $_POST['nma'];
		$nmi = $_POST['nmi'];
		$nmsi = $_POST['nmsi'];
		$nmp = $_POST['nmp'];
		$hb = $_POST['hb'];
		$ap = $_POST['ap'];
		$nohpp = $_POST['nohpp'];
		$dpr = $_POST['dpr'];
		$apr = $_POST['apr'];
		$pa = $_POST['pa'];
		$dpj = $_POST['dpj'];
		$id_rmedik = $_POST['id_rmedik'];
		$update = "UPDATE rekam_medik SET id_rmedik='$id_rmedik', nm_ayah='$nma', nm_ibu='$nmi', nm_si='$nmsi', nm_dihubungi='$nmp', hubungan='$hb', alamat='$ap', no_hp='$nohpp', dokter_pengirim='$dpr', alamat_pengirim='$apr', perubahan_alamat='$pa', dr_pjawab='$dpj' WHERE id_rmedik='$id_rmedik'";
		$qupdate = mysql_query($update); 
		
		if($qupdate)
		{
			?>
			 <script language="javascript"> 
				alert("Data terupdate");
				document.location="hprmedik.php?menu=prm_viewrekammedik";
			</script>
			<?php
		}
		else
		{
			?>
			    <script type="text/javascript">
			    alert("Data pasien gagal terupdate");
			    window.history.go(-1);
			    </script>
			    <?php
		}
	}
	else if(strtolower($_POST['action']) == "deletemulti")
	{
		echo "anda memilih checkbox";
		$edittable=$_POST['selector'];
		$n = count($edittable);
		for($i=0; $i < $n; $i++)
		{
			$result = mysql_query("DELETE FROM rekam_medik where id_rmedik='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='hprmedik.php?menu=prm_viewrekammedik';
			</script> 
			<?php
		} else {
			?>
			    <script type="text/javascript">
			    alert("Data pasien gagal terhapus");
			    window.history.go(-1);
			    </script>
			    <?php
		}
	}
?>

