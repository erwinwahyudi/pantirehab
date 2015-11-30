<?php
	include "koneksidb.php";
	
	if(isset($_POST['submit']))
	{
		$tnggl_asesmen = $_POST['tnggl_asesmen'];
		$depresi = $_POST['depresi'];
		$cemas = $_POST['cemas'];
		$halusinasi = $_POST['halusinasi'];
		$mengingat = $_POST['mengingat'];
		$mengontrol = $_POST['mengontrol'];
		$pbdiri = $_POST['pbdiri'];
		$bbdiri = $_POST['bbdiri'];
		$ppsikiater = $_POST['ppsikiater'];
		$id_pasien = $_POST['id_pasien'];
				
		$insert = "INSERT INTO formulir_asesmen (id_fasesmen, id_pasien,tnggl_asesmen, depresi, cemas, halusinasi, s_mengingat, s_mengontrol, p_bdiri, b_bdiri, p_psikiater ) 
							VALUES ('','$id_pasien','$tnggl_asesmen', '$depresi', '$cemas', '$halusinasi', '$mengingat', '$mengontrol', '$pbdiri', '$bbdiri', '$ppsikiater' )";
				$query = mysql_query($insert);
		if ($query) {
				?>
				 <script language="javascript"> 
					alert("Data status psikiatris tersimpan");
					document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=6";
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
		$tnggl_asesmen = $_POST['tnggl_asesmen'];
		$depresi = $_POST['depresi'];
		$cemas = $_POST['cemas'];
		$halusinasi = $_POST['halusinasi'];
		$mengingat = $_POST['mengingat'];
		$mengontrol = $_POST['mengontrol'];
		$pbdiri = $_POST['pbdiri'];
		$bbdiri = $_POST['bbdiri'];
		$ppsikiater = $_POST['ppsikiater'];
 		$id_pasien = $_POST['id_pasien'];
 		$id_fasesmen = $_POST['id_fasesmen'];
		
 		$update = "UPDATE formulir_asesmen SET tnggl_asesmen='$tnggl_asesmen', depresi='$depresi', cemas='$cemas', halusinasi='$halusinasi', s_mengingat='$mengingat', s_mengontrol='$mengontrol', p_bdiri='$pbdiri', b_bdiri='$bbdiri', p_psikiater='$ppsikiater' where id_fasesmen='$id_fasesmen' ";
		$query = mysql_query($update);
		if ($query) {
			?>
			 <script language="javascript"> 
				alert("Data status psikiatris terupdate");
				document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=6";
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



	
	






	
	









