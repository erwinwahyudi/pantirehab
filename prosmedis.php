<?php
	include "koneksidb.php";

	if(isset($_POST['submit']))
	{
		$jpenyakit = $_POST['jpenyakit'];
		$trawat = $_POST['trawat'];
		$lama = $_POST['lama'];
		$rpkronis = $_POST['rpkronis'];
		$jpykt = $_POST['jpykt'];
		$tmedis = $_POST['tmedis'];
		$jtmedis = $_POST['jtmedis'];
		$hiv = $_POST['hiv'];
		$hepatitisb = $_POST['hepatitisb'];
		$hepatitisc = $_POST['hepatitisc'];
		$id_pasien = $_POST['id_pasien'];
		
		$insert = "INSERT INTO formulir_asesmen (id_fasesmen, id_pasien, j_penyakit, t_rawat, lama, rp_kronis, j_pykt, t_medis, j_tmedis, hiv, hepatitis_b, hepatitis_c) 
					VALUES ('','$id_pasien', '$jpenyakit', '$trawat', '$lama', '$rpkronis', '$jpykt', '$tmedis', '$jtmedis', '$hiv', 'hepatitisb', '$hepatitisc')";
		$query = mysql_query($insert);
		if ($query) {
				?>
				 <script language="javascript"> 
					alert("Data status medis tersimpan");
					document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=1";
				</script>
				<?php
		} else {
			?>
			    <script type="text/javascript">
			    alert("Data pasien gagal tersimpan");
			    window.history.go(-1);
			    </script>
			    <?php
		}
	}
	else if(isset($_POST['update']))
 	{
		$jpenyakit = $_POST['jpenyakit'];
		$trawat = $_POST['trawat'];
		$lama = $_POST['lama'];
		$rpkronis = $_POST['rpkronis'];
		$jpykt = $_POST['jpykt'];
		$tmedis = $_POST['tmedis'];
		$jtmedis = $_POST['jtmedis'];
		$hiv = $_POST['hiv'];
		$hepatitisb = $_POST['hepatitisb'];
		$hepatitisc = $_POST['hepatitisc'];
 		$id_pasien = $_POST['id_pasien'];
 		$id_fasesmen = $_POST['id_fasesmen'];
		
 		$update = "UPDATE formulir_asesmen SET j_penyakit='$jpenyakit', t_rawat='$trawat', lama='$lama', rp_kronis='$rpkronis', j_pykt='$jpykt', t_medis='$tmedis', j_tmedis='$jtmedis', hiv='$hiv', hepatitis_b='$hepatitisb', hepatitis_c='$hepatitisc' where id_fasesmen='$id_fasesmen' ";
		$query = mysql_query($update);
		if ($query) {
			?>
			 <script language="javascript"> 
				alert("Data status medis terupdate");
				document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=1";
			</script>
			<?php
		} else {
			?>
			    <script type="text/javascript">
			    alert("Data pasien gagal terupdate");
			    window.history.go(-1);
			    </script>
			    <?php
		}
	}
?>



	
	





	
	





	
	




