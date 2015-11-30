<?php
	include "koneksidb.php";
	
	
	if(isset($_POST['submit'])){
		$norm = $_POST['norm'];
		$nmpasien = $_POST['nmpasien'];
		$tglmsk = $_POST['tglmsk'];
		$tglklr = $_POST['tglklr'];
		$ttl = $_POST['ttl'];
		$usia = $_POST['usia'];
		$jk = $_POST['jk'];
		$agama = $_POST['agama'];
		$pendidikan = $_POST['pendidikan'];
		$pekerjaan = $_POST['pekerjaan'];
		$pasien = $_POST['pasien'];
		$status = $_POST['status'];
		$penyakit = $_POST['penyakit'];
		$aps = $_POST['aps'];
		$nohpps = $_POST['nohpps'];
		$bs = $_POST['bs'];
		$jns = $_POST['jns'];
		$keterangan = $_POST['keterangan'];
	
			$insert = "INSERT INTO pasien (id_pasien, no_rmedik, nm_pasien, tgl_masuk, tgl_keluar, ttl_pasien, usia, j_kelamin, agama, pendidikan, pekerjaan, status, s_perkawinan, hiv_aids, alamat_pasien, nohp_pasien, bangsa_suku, jenis, keterangan) 
							VALUES ('', '$norm', '$nmpasien', '$tglmsk', '$tglklr', '$ttl', '$usia', '$jk', '$agama', '$pendidikan','$pekerjaan', '$pasien', '$status', '$penyakit', '$aps', '$nohpps', '$bs', '$jns', '$keterangan')";
			$query = mysql_query($insert);
			if ($query) {
					?>
					 <script language="javascript"> 
						alert("Data tersimpan");
						document.location="hprmedik.php?menu=prm_viewpasien";
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
		
		else if (isset($_GET['action']) == "delete")
	{
		$id_pasien = $_GET['id'];
		$delete = mysql_query("DELETE pasien FROM pasien WHERE id_pasien = '$id_pasien' ");
		if($delete)
		{
			
			?>
			<script language="javascript"> 
					alert("Data pasien terhapus");
					document.location='hprmedik.php?menu=prm_viewpasien';
			</script>
			<?php
		}
		else
		{
			?>
			    <script type="text/javascript">
			    alert("data tidak boleh dihapus, mohon cek kembali");
			    window.history.go(-1);
			    </script>
			    <?php
		}
	} 
	else if (strtolower($_POST['action']) == "update") {
		$norm = $_POST['norm'];
		$nmpasien = $_POST['nmpasien'];
		$tglmsk = $_POST['tglmsk'];
		$tglklr = $_POST['tglklr'];
		$ttl = $_POST['ttl'];
		$usia = $_POST['usia'];
		$jk = $_POST['jk'];
		$agama = $_POST['agama'];
		$pendidikan = $_POST['pendidikan'];
		$pekerjaan = $_POST['pekerjaan'];
		$pasien = $_POST['pasien'];
		$status = $_POST['status'];
		$penyakit = $_POST['penyakit'];
		$aps = $_POST['aps'];
		$nohpps = $_POST['nohpps'];
		$bs = $_POST['bs'];
		$jns = $_POST['jns'];
		$keterangan = $_POST['keterangan'];
		$id_pasien = $_POST['id_pasien'];
		$update = "UPDATE pasien SET id_pasien='$id_pasien', no_rmedik='$norm', nm_pasien='$nmpasien', tgl_masuk='$tglmsk', tgl_keluar='$tglklr', ttl_pasien='$ttl', usia='$usia', j_kelamin='$jk', agama='$agama', pendidikan='$pendidikan', pekerjaan='$pekerjaan', status='$pasien', s_perkawinan='$status', hiv_aids='$penyakit', alamat_pasien='$aps', nohp_pasien='$nohpps', bangsa_suku='$bs', jenis='$jns', keterangan='$keterangan' WHERE id_pasien='$id_pasien'";
		$qupdate = mysql_query($update); 
		
			if($qupdate)
			{
			?>
				 <script language="javascript"> 
					alert("Data terupdate");
					document.location="hprmedik.php?menu=prm_viewpasien";
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
			$result = mysql_query("DELETE FROM pasien where id_pasien='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='hprmedik.php?menu=prm_viewpasien';
			</script> 
			<?php
		} else {
			?>
			    <script type="text/javascript">
			    alert("data tidak boleh dihapus, mohon cek kembali");
			    window.history.go(-1);
			    </script>
			    <?php
		}
	}

?>
