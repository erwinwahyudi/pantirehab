<?php
	include "koneksidb.php";

	if(isset($_POST['submit']))
	{
		$ta_asesmen = $_POST['ta_asesmen'];
		$alkohol = $_POST['alkohol'];
		$cpalkohol = $_POST['cpalkohol'];
		$heroin = $_POST['heroin'];
		$cpheroin = $_POST['cpheroin'];
		$metadon = $_POST['metadon'];
		$cpmetadon = $_POST['cpmetadon'];
		$analgesik = $_POST['analgesik'];
		$cpanalgesik = $_POST['cpanalgesik'];
		$barbiturat = $_POST['barbiturat'];
		$cpbarbiturat = $_POST['cpbarbiturat'];
		$sedatif = $_POST['sedatif'];
		$cpsedatif = $_POST['cpsedatif'];
		$kokain = $_POST['kokain'];
		$cpkokain = $_POST['cpkokain'];
		$amfetamin = $_POST['amfetamin'];
		$cpamfetamin = $_POST['cpamfetamin'];
		$kanabis = $_POST['kanabis'];
		$cpkanabis = $_POST['cpkanabis'];
		$halusinogen = $_POST['halusinogen'];
		$cphalusinogen = $_POST['cphalusinogen'];
		$inhalan = $_POST['inhalan'];
		$cpinhalan = $_POST['cpinhalan'];
		$bzat = $_POST['bzat'];
		$cpbzat = $_POST['cpbzat'];
		$zutama = $_POST['zutama'];
		$trehabilitasi = $_POST['trehabilitasi'];
		$jtrehabilitasi = $_POST['jtrehabilitasi'];
		$od = $_POST['od'];
		$kod = $_POST['kod'];
		$wod = $_POST['wod'];
		$cpenanggulangan = $_POST['cpenanggulangan'];
		$id_pasien = $_POST['id_pasien'];
		
		$insert = "INSERT INTO formulir_asesmen (id_fasesmen, id_pasien, ta_asesmen, alkohol, cp_alkohol, heroin, cp_heroin, metadon, cp_metadon, analgesik, cp_analgesik, barbiturat, cp_barbiturat, sedatif, cp_sedatif, kokain, cp_kokain, amfetamin, cp_amfetamin, kanabis, cp_kanabis, halusinogen, cp_halusinogen, inhalan, cp_inhalan, b_zat, cp_bzat, zat_utama, t_rehabilitasi, j_trehabilitasi, od, kapan, waktu, c_penanggulangan) 
				VALUES ('', '$id_pasien', '$ta_asesmen', '$alkohol', '$cpalkohol', '$heroin', '$cpheroin', '$metadon', '$cpmetadon', '$analgesik', '$cpanalgesik', '$barbiturat', '$cpbarbiturat', '$sedatif', '$cpsedatif', '$kokain', '$cpkokain', '$amfetamin', '$cpamfetamin', '$kanabis', '$cpkanabis', '$halusinogen', '$cphalusinogen', '$inhalan', '$cpinhalan', '$bzat', '$cpbzat', '$zutama', '$trehabilitasi', '$jtrehabilitasi', '$od', '$kod', '$wod', '$cpenanggulangan')";
		$query = mysql_query($insert);
		if ($query) {
				?>
				 <script language="javascript"> 
					alert("Data status penggunaan narkotika tersimpan");
					document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=3";
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
		$ta_asesmen = $_POST['ta_asesmen'];
		$alkohol = $_POST['alkohol'];
		$cpalkohol = $_POST['cpalkohol'];
		$heroin = $_POST['heroin'];
		$cpheroin = $_POST['cpheroin'];
		$metadon = $_POST['metadon'];
		$cpmetadon = $_POST['cpmetadon'];
		$analgesik = $_POST['analgesik'];
		$cpanalgesik = $_POST['cpanalgesik'];
		$barbiturat = $_POST['barbiturat'];
		$cpbarbiturat = $_POST['cpbarbiturat'];
		$sedatif = $_POST['sedatif'];
		$cpsedatif = $_POST['cpsedatif'];
		$kokain = $_POST['kokain'];
		$cpkokain = $_POST['cpkokain'];
		$amfetamin = $_POST['amfetamin'];
		$cpamfetamin = $_POST['cpamfetamin'];
		$kanabis = $_POST['kanabis'];
		$cpkanabis = $_POST['cpkanabis'];
		$halusinogen = $_POST['halusinogen'];
		$cphalusinogen = $_POST['cphalusinogen'];
		$inhalan = $_POST['inhalan'];
		$cpinhalan = $_POST['cpinhalan'];
		$bzat = $_POST['bzat'];
		$cpbzat = $_POST['cpbzat'];
		$zutama = $_POST['zutama'];
		$trehabilitasi = $_POST['trehabilitasi'];
		$jtrehabilitasi = $_POST['jtrehabilitasi'];
		$od = $_POST['od'];
		$kod = $_POST['kod'];
		$wod = $_POST['wod'];
		$cpenanggulangan = $_POST['cpenanggulangan'];
 		$id_pasien = $_POST['id_pasien'];
 		$id_fasesmen = $_POST['id_fasesmen'];

 		$update = "UPDATE formulir_asesmen SET ta_asesmen='$ta_asesmen', alkohol='$alkohol', cp_alkohol='$cpalkohol', heroin='$heroin', cp_heroin='$cpheroin', metadon='$metadon', cp_metadon='$cpmetadon', analgesik='$analgesik', cp_analgesik='$cpanalgesik', barbiturat='$barbiturat', cp_barbiturat='$cpbarbiturat', sedatif='$sedatif', cp_sedatif='$cpsedatif', kokain='$kokain', cp_kokain='$cpkokain', amfetamin='$amfetamin', cp_amfetamin='$cpamfetamin', kanabis='$kanabis', cp_kanabis='$cpkanabis', halusinogen='$halusinogen', cp_halusinogen='$cphalusinogen', inhalan='$inhalan', cp_inhalan='$cpinhalan', b_zat='$bzat', cp_bzat='$cpbzat', zat_utama='$zutama', t_rehabilitasi='$trehabilitasi', j_trehabilitasi='$jtrehabilitasi', od='$od', kapan='$kod', waktu='$wod', c_penanggulangan='$cpenanggulangan' where id_fasesmen='$id_fasesmen' ";
		$query = mysql_query($update);
		if ($query) {
			?>
			 <script language="javascript"> 
				alert("Data status penggunaan narkotika terupdate");
				document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=3";
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



	
	





	
	





	
	




