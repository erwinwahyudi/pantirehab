<?php
	include "koneksidb.php";
	
if(isset($_POST['submit'])){

		$id_pasien = $_POST['id_pasien'];
		$id_rmedik = $_POST['id_rmedik'];
		$trk = $_POST['trk'];
		$diagnosa = $_POST['diagnosa'];
		$dct = $_POST['ct'];
		$dr = $_POST['dr'];

		
		$querycek = mysql_query("SELECT * from riwayat_klinik WHERE id_pasien='".$id_pasien."' ");
		$jlh = count(mysql_fetch_array($querycek));
			
		if ($jlh <= 1)
		{	
			$insert = "INSERT INTO riwayat_klinik (id_rklinik, id_pasien, id_rmedik, tgl_rklinik, diagnosa, catatan, dokter) 
							VALUES ('','$id_pasien', '$id_rmedik', '$trk', '$diagnosa', '$dct', '$dr')";
			$query = mysql_query($insert);
			if ($query)
			{
				?>
				<script language="javascript"> 
					alert("Data riwayat klinik tersimpan");
					document.location="hdokter.php?menu=dok_viewriwayatklinik";
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
		else
		{
			?>
			 <script language="javascript"> 
				alert("Data terupdate");
				document.location="hdokter.php?menu=dok_viewriwayatklinik";
			</script>
			<?php
		}
	}
	else if (isset($_GET['action']) == "delete")
	{
		$id_rklinik = $_GET['id'];
		$delete = mysql_query("DELETE riwayat_klinik FROM riwayat_klinik WHERE id_rklinik = '$id_rklinik' ");
		if($delete)
		{
			
			?>
			<script language="javascript"> 
					alert("Data riwayat klinik terhapus");
					document.location='hdokter.php?menu=dok_viewriwayatklinik';
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
		
		$id_rklinik = $_POST['id_rklinik'];
 		$trk = $_POST['trk'];
		$diagnosa = $_POST['diagnosa'];
		$dct = $_POST['ct'];
		$dr = $_POST['dr'];
		
		$update = "UPDATE riwayat_klinik SET id_rklinik='$id_rklinik', tgl_rklinik='$trk', diagnosa='$diagnosa', catatan='$dct', dokter='$dr' WHERE id_rklinik='$id_rklinik'";
		$qupdate = mysql_query($update); 
		
		if($qupdate)
		{
			?>
			 <script language="javascript"> 
				alert("Data terupdate");
				document.location="hdokter.php?menu=dok_viewriwayatklinik";
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
		echo "anda memilih checkbox";
		$edittable=$_POST['selector'];
		$n = count($edittable);
		for($i=0; $i < $n; $i++)
		{
			$result = mysql_query("DELETE FROM riwayat_klinik where id_rklinik='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='hdokter.php?menu=dok_viewriwayatklinik';
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