<?php
	include "koneksidb.php";

	if(isset($_POST['submit']))
	{
		$tdarah = $_POST['tdarah'];
		$nadi = $_POST['nadi'];
		$pernapasan = $_POST['pernapasan'];
		$suhu = $_POST['suhu'];
		$spencernaan = $_POST['spencernaan'];
		$sjantung = $_POST['sjantung'];
		$spernapasan = $_POST['spernapasan'];
		$sspusat = $_POST['sspusat'];
		$thtk = $_POST['thtk'];
		$ktrngn = $_POST['ktrngn'];
		$ubenzodiazepin = $_POST['ubenzodiazepin'];
		$ukanabis = $_POST['ukanabis'];
		$uopiat = $_POST['uopiat'];
		$uamfetamin = $_POST['uamfetamin'];
		$ukokain = $_POST['ukokain'];
		$ubarbiturat = $_POST['ubarbiturat'];
		$ualkohol = $_POST['ualkohol'];
		$id_pasien = $_POST['id_pasien'];
		
				$insert = "INSERT INTO formulir_asesmen (id_fasesmen, id_pasien, tekanan_darah, nadi, pernapasan, suhu, s_pencernaan, s_jantung, s_pernapasan, s_spusat, tht_kulit, ktrngn, u_benzodiazepin, u_kanabis, u_opiat, u_amfetamin, u_kokain, u_barbiturat, u_alkohol ) 
							VALUES ('','$id_pasien', '$tdarah', '$nadi', '$pernapasan', '$suhu', '$spencernaan', '$sjantung', '$spernapasan', '$sspusat', '$thtk', '$ktrngn', '$ubenzodiazepin', '$ukanabis', '$uopiat', '$uamfetamin', '$ukokain', '$ubarbiturat', '$ualkohol' )";
				$query = mysql_query($insert);
		if ($query) {
				?>
				 <script language="javascript"> 
					alert("Data pemeriksaan fisik tersimpan");
					document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=7";
				</script>
				<?php
		} else {
			?>
			    <script type="text/javascript">
			    alert("Data gagal tersimpan");
			    window.history.go(-1);
			    </script>
			    <?php
		}
	}
	else if(isset($_POST['update']))
 	{
		$tdarah = $_POST['tdarah'];
		$nadi = $_POST['nadi'];
		$pernapasan = $_POST['pernapasan'];
		$suhu = $_POST['suhu'];
		$spencernaan = $_POST['spencernaan'];
		$sjantung = $_POST['sjantung'];
		$spernapasan = $_POST['spernapasan'];
		$sspusat = $_POST['sspusat'];
		$thtk = $_POST['thtk'];
		$ktrngn = $_POST['ktrngn'];
		$ubenzodiazepin = $_POST['ubenzodiazepin'];
		$ukanabis = $_POST['ukanabis'];
		$uopiat = $_POST['uopiat'];
		$uamfetamin = $_POST['uamfetamin'];
		$ukokain = $_POST['ukokain'];
		$ubarbiturat = $_POST['ubarbiturat'];
		$ualkohol = $_POST['ualkohol'];
 		$id_pasien = $_POST['id_pasien'];
 		$id_fasesmen = $_POST['id_fasesmen'];
 		
		$update = "UPDATE formulir_asesmen SET tekanan_darah='$tdarah', nadi='$nadi', pernapasan='$pernapasan', suhu='$suhu', s_pencernaan='$spencernaan', s_jantung='$sjantung', s_pernapasan='$spernapasan', s_spusat='$sspusat', tht_kulit='$thtk', ktrngn='$ktrngn', u_benzodiazepin='$ubenzodiazepin', u_kanabis='$ukanabis', u_opiat='$uopiat', u_amfetamin='$uamfetamin', u_kokain='$ukokain', u_barbiturat='$ubarbiturat', u_alkohol='$ualkohol' WHERE id_fasesmen='$id_fasesmen' ";
		$query = mysql_query($update);
		if ($query) {
			?>
			 <script language="javascript"> 
				alert("Data pemeriksaan fisik terupdate");
				document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=7";
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



	
	






	
	






	
	






	
	




