<?php
	include "koneksidb.php";

	if(isset($_POST['submit']))
	{
		$tgl_asesmen = $_POST['tgl_asesmen'];
		$situasi = $_POST['situasi'];
		$ozat = $_POST['ozat'];
		$kandungtiri = $_POST['kandungtiri'];
		$ayahibu = $_POST['ayahibu'];
		$pasangan = $_POST['pasangan'];
		$omtante = $_POST['omtante'];
		$teman = $_POST['teman'];
		$lainnya = $_POST['lainnya'];
		$ibu = $_POST['ibu'];
		$ayah = $_POST['ayah'];
		$adikkakak = $_POST['adikkakak'];
		$psgn = $_POST['psgn'];
		$anak = $_POST['anak'];
		$klain = $_POST['klain'];
		$hklain = $_POST['hklain'];
		$takrab = $_POST['takrab'];
		$tetangga = $_POST['tetangga'];
		$tsekerja = $_POST['tsekerja'];
		$id_pasien = $_POST['id_pasien'];
		
				$insert = "INSERT INTO formulir_asesmen (id_rksosial, id_pasien, tgl_asesmen, situasi, o_zat, kandung_tiri, ayah_ibu, pasangan, om_tante, teman, lainnya, ibu, ayah, adik_kakak, psgn, anak, keluarga_lain, hb_klain, t_akrab, tetangga, t_kerja ) 
							VALUES ('','$id_pasien','$tgl_asesmen', '$situasi', '$ozat', '$kandungtiri', '$ayahibu', '$pasangan', '$omtante', '$teman', '$lainnya', '$ibu', '$ayah', '$adikkakak', '$psgn', '$anak', '$klain', '$hklain', '$takrab', '$tetangga', '$tsekerja' )";
				$query = mysql_query($insert);
		if ($query) {
				?>
				 <script language="javascript"> 
					alert("Data riwayat keluarga/sosial tersimpan");
					document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=5";
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
		$tgl_asesmen = $_POST['tgl_asesmen'];
		$situasi = $_POST['situasi'];
		$ozat = $_POST['ozat'];
		$kandungtiri = $_POST['kandungtiri'];
		$ayahibu = $_POST['ayahibu'];
		$pasangan = $_POST['pasangan'];
		$omtante = $_POST['omtante'];
		$teman = $_POST['teman'];
		$lainnya = $_POST['lainnya'];
		$ibu = $_POST['ibu'];
		$ayah = $_POST['ayah'];
		$adikkakak = $_POST['adikkakak'];
		$psgn = $_POST['psgn'];
		$anak = $_POST['anak'];
		$klain = $_POST['klain'];
		$hklain = $_POST['hklain'];
		$takrab = $_POST['takrab'];
		$tetangga = $_POST['tetangga'];
		$tsekerja = $_POST['tsekerja'];
 		$id_pasien = $_POST['id_pasien'];
 		$id_fasesmen = $_POST['id_fasesmen'];
		
 		$update = "UPDATE formulir_asesmen SET tgl_asesmen='$tgl_asesmen', situasi='$situasi', o_zat='$ozat', kandung_tiri='$kandungtiri', ayah_ibu='$ayahibu', pasangan='$pasangan', om_tante='$omtante', teman='$teman', lainnya='$lainnya', ibu='$ibu', ayah='$ayah', adik_kakak='$adikkakak', psgn='$psgn', anak='$anak', keluarga_lain='$klain', hb_klain='$hklain', t_akrab='$takrab', tetangga='$tetangga', t_kerja='$tsekerja' where id_fasesmen='$id_fasesmen' ";
		$query = mysql_query($update);
		if ($query) {
			?>
			 <script language="javascript"> 
				alert("Data riwayat keluarga/sosial terupdate");
				document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=5";
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



	
	






	
	




