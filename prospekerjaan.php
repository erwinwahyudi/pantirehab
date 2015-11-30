<?php
	include "koneksidb.php";

	if(isset($_POST['submit']))
		{
			$k_pekerjaan = $_POST['k_pekerjaan'];
			$t_asesmen = $_POST['t_asesmen'];
			$spekerjaan = $_POST['spekerjaan'];
			$ppekerjaan = $_POST['ppekerjaan'];
			$ktrmpln = $_POST['ktrmpln'];
			$dhidup = $_POST['dhidup'];
			$nmdhidup = $_POST['nmdhidup'];
			$finansial = $_POST['finansial'];
			$ttinggal = $_POST['ttinggal'];
			$makan = $_POST['makan'];
			$perawatan = $_POST['perawatan'];
			$id_pasien = $_POST['id_pasien'];
			
			$insert = "INSERT INTO formulir_asesmen (id_fasesmen, id_pasien,k_pekerjaan, t_asesmen, s_pekerjaan, p_pekerjaan, keterampilan, dhidup, nm_dhidup, finansial, t_tinggal, makan, perawatan) 
							VALUES ('','$id_pasien','$k_pekerjaan', '$t_asesmen', '$spekerjaan', '$ppekerjaan', '$ktrmpln', '$dhidup', '$nmdhidup', '$finansial', '$ttinggal', '$makan', '$perawatan')";
				$query = mysql_query($insert);
		if ($query) {
				?>
				 <script language="javascript"> 
					alert("Data status pekerjaan tersimpan");
					document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=2";
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
		$k_pekerjaan = $_POST['k_pekerjaan'];
		$t_asesmen = $_POST['t_asesmen'];
		$spekerjaan = $_POST['spekerjaan'];
		$ppekerjaan = $_POST['ppekerjaan'];
		$ktrmpln = $_POST['ktrmpln'];
		$dhidup = $_POST['dhidup'];
		$nmdhidup = $_POST['nmdhidup'];
		$finansial = $_POST['finansial'];
		$ttinggal = $_POST['ttinggal'];
		$makan = $_POST['makan'];
		$perawatan = $_POST['perawatan'];
 		$id_pasien = $_POST['id_pasien'];
 		$id_fasesmen = $_POST['id_fasesmen'];
		
 		$update = "UPDATE formulir_asesmen SET t_asesmen='$t_asesmen', k_pekerjaan='$k_pekerjaan', s_pekerjaan='$spekerjaan', p_pekerjaan='$ppekerjaan', keterampilan='$ktrmpln', dhidup='$dhidup', nm_dhidup='$nmdhidup', finansial='$finansial', t_tinggal='$ttinggal', makan='$makan', perawatan='$perawatan' WHERE id_fasesmen='$id_fasesmen' ";
		$query = mysql_query($update);
		if ($query) {
			?>
			 <script language="javascript"> 
				alert("Data status pekerjaan terupdate");
				document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=2";
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



	
	






	
	





	
	






	
	




