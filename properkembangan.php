<?php
	include "koneksidb.php";

	if(isset($_POST['submit']))
	{

		$id_pasien = $_POST['id_pasien'];
		$ruangan = $_POST['ruangan'];
		$tgl = $_POST['tgl_perkembangan'];
		$jam = $_POST['jam_perkembangan'];
		$mhsp = $_POST['mhs_percaya'];
		$mpk = $_POST['m_pk'];
		$mpkcfa = $_POST['mpk_cfa'];
		$mpmja = $_POST['mpm_ja'];
		$mja = $_POST['mengevaluasi_ja'];
		$mpkcfb = $_POST['mpk_cfb'];
		$mpmjb = $_POST['mpm_jb'];
		$mjb = $_POST['mengevaluasi_jb'];
		$mpkcv = $_POST['mpk_cv'];
		$mpmjc = $_POST['mpm_jc'];
		$mjc = $_POST['mengevaluasi_jc']; 
		$mpkcs = $_POST['mpk_cs'];
		$mpmjd = $_POST['mpm_jd'];
		$mjd = $_POST ['mengevaluasi_jd'];
		$mpkmo = $_POST ['mpk_mo'];
		$mpmje = $_POST ['mpm_je'];

		$insert = "INSERT INTO perkembangan (id_perkembangan, id_pasien,ruangan, tgl_perkembangan, jam_perkembangan, mhs_percaya, m_pk, mpk_cfa, mpm_ja, mengevaluasi_ja, mpk_cfb, mpm_jb, mengevaluasi_jb, mpk_cv, mpm_jc, mengevaluasi_jc, mpk_cs, mpm_jd, mengevaluasi_jd, mpk_mo, mpm_je) 
							VALUES ('','$id_pasien', '$ruangan', '$tgl', '$jam', '$mhsp', '$mpk', '$mpkcfa', '$mpmja', '$mja', '$mpkcfb', '$mpmjb', '$mjb', '$mpkcv', '$mpmjc', '$mjc', '$mpkcs', '$mpmjd', '$mjd', '$mpkmo', '$mpmje')";
		$query = mysql_query($insert);
		if ($query)
		{
			?>
			<script language="javascript"> 
				alert("Data perkembangan tersimpan");
				document.location="hperawat.php?menu=per_viewperkembangan";
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
		$id_perkembangan = $_GET['id'];
		$delete = mysql_query("DELETE perkembangan FROM perkembangan WHERE id_perkembangan = '$id_perkembangan' ");
		if($delete)
		{
			
			?>
			<script language="javascript"> 
					alert("Data perkembangan terhapus");
					document.location='hperawat.php?menu=per_viewperkembangan';
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
		$id_perkembangan = $_POST['id_perkembangan'];
		$ruangan = $_POST['ruangan'];
		$tgl = $_POST['tgl_perkembangan'];
		$jam = $_POST['jam_perkembangan'];
		$mhsp = $_POST['mhs_percaya'];
		$mpk = $_POST['m_pk'];
		$mpkcfa = $_POST['mpk_cfa'];
		$mpmja = $_POST['mpm_ja'];
		$mja = $_POST['mengevaluasi_ja'];
		$mpkcfb = $_POST['mpk_cfb'];
		$mpmjb = $_POST['mpm_jb'];
		$mjb = $_POST['mengevaluasi_jb'];
		$mpkcv = $_POST['mpk_cv'];
		$mpmjc = $_POST['mpm_jc'];
		$mjc = $_POST['mengevaluasi_jc']; 
		$mpkcs = $_POST['mpk_cs'];
		$mpmjd = $_POST['mpm_jd'];
		$mjd = $_POST ['mengevaluasi_jd'];
		$mpkmo = $_POST ['mpk_mo'];
		$mpmje = $_POST ['mpm_je'];

		
		$update = "UPDATE perkembangan SET id_perkembangan='$id_perkembangan', ruangan='$ruangan', tgl_perkembangan='$tgl', jam_perkembangan='$jam', mhs_percaya='$mhsp', m_pk='$mpk', mpk_cfa='$mpkcfa', mpm_ja='$mpmja', mengevaluasi_ja='$mja', mpk_cfb='$mpkcfb', mpm_jb='$mpmjb', mengevaluasi_jb='$mjb', mpk_cv='$mpkcv', mpm_jc='$mpmjc', mengevaluasi_jc='$mjc', mpk_cs='$mpkcs', mpm_jd='$mpmjd', mengevaluasi_jd='$mjd', mpk_mo='$mpkmo', mpm_je='$mpmje' WHERE id_perkembangan='$id_perkembangan'";
		$qupdate = mysql_query($update); 
		
		if($qupdate)
		{
			?>
			 <script language="javascript"> 
				alert("Data terupdate");
				document.location="hperawat.php?menu=per_viewperkembangan";
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
			$result = mysql_query("DELETE FROM perkembangan where id_perkembangan='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='hperawat.php?menu=per_viewperkembangan';
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


