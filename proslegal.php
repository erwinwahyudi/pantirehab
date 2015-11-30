<?php
	include "koneksidb.php";

	if(isset($_POST['submit']))
	{
		$tan_asesmen = $_POST['tan_asesmen'];
		$mencuri = $_POST['mencuri'];
		$bbmp = $_POST['bbmp'];
		$mnarkoba = $_POST['mnarkoba'];
		$pemalsuan = $_POST['pemalsuan'];
		$pbersenjata = $_POST['pbersenjata'];
		$pdp = $_POST['pdp'];
		$perampokan = $_POST['perampokan'];
		$penyerangan = $_POST['penyerangan'];
		$prumah = $_POST['prumah'];
		$pemerkosaan = $_POST['pemerkosaan'];
		$pembunuhan = $_POST['pembunuhan'];
		$pelacuran = $_POST['pelacuran'];
		$mpengadilan = $_POST['mpengadilan'];
		$ll = $_POST['ll'];
		$tuntutan = $_POST['tuntutan'];
		$id_pasien = $_POST['id_pasien'];
			
		$insert = "INSERT INTO formulir_asesmen (id_fasesmen, id_pasien,tan_asesmen, mencuri, bb_mp, m_narkoba, pemalsuan, p_bersenjata, pembobolan, perampokan, penyerangan, p_rumah, pemerkosaan, pembunuhan, pelacuran, m_pengadilan, lain_lain, tuntutan) 
							VALUES ('', '$id_pasien', '$tan_asesmen', '$mencuri', '$bbmp', '$mnarkoba', '$pemalsuan', '$pbersenjata', '$pdp', '$perampokan', '$penyerangan', '$prumah', '$pemerkosaan', '$pembunuhan', '$pelacuran', '$mpengadilan', '$ll', '$tuntutan' )";
				$query = mysql_query($insert);
		if ($query) {
				?>
				 <script language="javascript"> 
					alert("Data status legal tersimpan");
					document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=4";
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
		$tan_asesmen = $_POST['tan_asesmen'];
		$mencuri = $_POST['mencuri'];
		$bbmp = $_POST['bbmp'];
		$mnarkoba = $_POST['mnarkoba'];
		$pemalsuan = $_POST['pemalsuan'];
		$pbersenjata = $_POST['pbersenjata'];
		$pdp = $_POST['pdp'];
		$perampokan = $_POST['perampokan'];
		$penyerangan = $_POST['penyerangan'];
		$prumah = $_POST['prumah'];
		$pemerkosaan = $_POST['pemerkosaan'];
		$pembunuhan = $_POST['pembunuhan'];
		$pelacuran = $_POST['pelacuran'];
		$mpengadilan = $_POST['mpengadilan'];
		$ll = $_POST['ll'];
		$tuntutan = $_POST['tuntutan'];
		$id_pasien = $_POST['id_pasien'];
 		$id_fasesmen = $_POST['id_fasesmen'];
		
 		$update = "UPDATE formulir_asesmen SET tan_asesmen='$tan_asesmen', mencuri='$mencuri', bb_mp='$bbmp', m_narkoba='$mnarkoba', pemalsuan='$pemalsuan', p_bersenjata='$pbersenjata', pembobolan='$pdp', perampokan='$perampokan', penyerangan='$penyerangan', p_rumah='$prumah', pemerkosaan='$pemerkosaan', pembunuhan='$pembunuhan', pelacuran='$pelacuran', m_pengadilan='$mpengadilan', lain_lain='$ll', tuntutan='$tuntutan' where id_fasesmen='$id_fasesmen' ";
		$query = mysql_query($update);
		if ($query) {
			?>
			 <script language="javascript"> 
				alert("Data status legal terupdate");
				document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=4";
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



	
	





	
	




