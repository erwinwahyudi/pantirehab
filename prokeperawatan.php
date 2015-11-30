<?php
	include "koneksidb.php";
	include "session.php";

	if(isset($_POST['submit']))
	{
		$id_pasien = $_POST['id_pasien'];
		$ruangan = $_POST['ruangan'];
		$tgl = $_POST['tgl_keperawatan'];
		$jam = $_POST['jam_keperawatan'];
		$mhsp = $_POST['mhs_percaya'];
		$mhal = $_POST['m_halusinasi'];
		$mpmha = $_POST['mpm_ha'];
		$mpmja = $_POST['mpm_ja'];
		$evalja = $_POST['mengevaluasi_ja'];
		$mpmhb = $_POST['mpm_hb'];
		$mpmjb = $_POST['mpm_jb'];
		$evaljb = $_POST['mengevaluasi_jb'];
		$mpmhc = $_POST['mpm_hc'];
		$mpmjc = $_POST['mpm_jc'];
		$evaljc = $_POST['mengevaluasi_jc']; 
		$mpmhd = $_POST['mpm_hd'];
		$mpmjd = $_POST['mpm_jd'];
				
		$insert = "INSERT INTO keperawatan (id_keperawatan, id_pasien, ruangan, tgl_keperawatan, jam_keperawatan, mhs_percaya, m_halusinasi, mpm_ha, mpm_ja, mengevaluasi_ja, mpm_hb, mpm_jb, mengevaluasi_jb, mpm_hc, mpm_jc, mengevaluasi_jc, mpm_hd, mpm_jd) 
				VALUES ('', '$id_pasien', '$ruangan', '$tgl', '$jam', '$mhsp', '$mhal', '$mpmha', '$mpmja', '$evalja', '$mpmhb', '$mpmjb', '$evaljb', '$mpmhc', '$mpmjc', '$evaljc', '$mpmhd', '$mpmjd')";
		$query = mysql_query($insert);
		if ($query)
		{
			?>
			<script language="javascript"> 
				alert("Data keperawatan tersimpan");
				document.location="hperawat.php?menu=per_viewkeperawatan";
			</script>
			<?php
		}
		else
		{
			?>
			    <script type="text/javascript">
			    alert("Data gagal tersimpan");
			    window.history.go(-1);
			    </script>
			    <?php
		}
		
	}
	else if (isset($_GET['action']) == "delete")
	{
		$id_keperawatan = $_GET['id'];
		$delete = mysql_query("DELETE keperawatan FROM keperawatan WHERE id_keperawatan = '$id_keperawatan' ");
		if($delete)
		{
			?>
			<script language="javascript"> 
					alert("Data keperawatan terhapus");
					document.location='hperawat.php?menu=per_viewkeperawatan';
			</script>
			<?php
		}
		else
		{
			?>
			    <script type="text/javascript">
			    alert("Data gagal terhapus");
			    window.history.go(-1);
			    </script>
			    <?php
		}
	} 
	else if (strtolower($_POST['action']) == "update")
	{
		$id_keperawatan = $_POST['id_keperawatan'];
		$ruangan = $_POST['ruangan'];
		$tgl = $_POST['tgl_keperawatan'];
		$jam = $_POST['jam_keperawatan'];
		$mhsp = $_POST['mhs_percaya'];
		$mhal = $_POST['m_halusinasi'];
		$mpmha = $_POST['mpm_ha'];
		$mpmja = $_POST['mpm_ja'];
		$evalja = $_POST['mengevaluasi_ja'];
		$mpmhb = $_POST['mpm_hb'];
		$mpmjb = $_POST['mpm_jb'];
		$evaljb = $_POST['mengevaluasi_jb'];
		$mpmhc = $_POST['mpm_hc'];
		$mpmjc = $_POST['mpm_jc'];
		$evaljc = $_POST['mengevaluasi_jc']; 
		$mpmhd = $_POST['mpm_hd'];
		$mpmjd = $_POST['mpm_jd'];

		$update = "UPDATE keperawatan SET id_keperawatan='$id_keperawatan', ruangan='$ruangan', tgl_keperawatan='$tgl', jam_keperawatan='$jam', mhs_percaya='$mhsp', m_halusinasi='$mhal', mpm_ha='$mpmha', mpm_ja='$mpmja', mengevaluasi_ja='$evalja', mpm_hb='$mpmhb', mpm_jb='$mpmjb', mengevaluasi_jb='$evaljb', mpm_hc='$mpmhc', mpm_jc='$mpmjc', mengevaluasi_jc='$evaljc', mpm_hd='$mpmhd', mpm_jd='$mpmjd' WHERE id_keperawatan='$id_keperawatan'";
		$qupdate = mysql_query($update); 
		
		if($qupdate)
		{
			?>
			 <script language="javascript"> 
				alert("Data terupdate");
				document.location="hperawat.php?menu=per_viewkeperawatan";
			</script>
			<?php
		}
		else
		{
			?>
			    <script type="text/javascript">
			    alert("Data gagal terupdate");
			    window.history.go(-1);
			    </script>
			    <?php
		}
	}
	else if(strtolower($_POST['action']) == "deletemulti")
	{
		$edittable=$_POST['selector'];
		$n = count($edittable);
		for($i=0; $i < $n; $i++)
		{
			$result = mysql_query("DELETE FROM keperawatan where id_keperawatan='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='hperawat.php?menu=per_viewkeperawatan';
			</script> 
			<?php
		} else {
			?>
			    <script type="text/javascript">
			    alert("Data gagal terhapus");
			    window.history.go(-1);
			    </script>
			    <?php
		}
	}
?>


