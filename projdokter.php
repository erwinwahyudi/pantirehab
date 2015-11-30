<?php
	include "koneksidb.php";
	include "session.php";
	
	if(isset($_POST['submit']))
	{
		$tgljd = $_POST['tgljd'];
		$minggu = $_POST['minggu'];
		$dru = $_POST['dru'];
		$drk = $_POST['drk'];
		$ket = $_POST['ket'];
		$insert = "INSERT INTO jadwal_dokter (id_jdokter, tgl_jdokter, minggu, dr_umum, dr_konsulen, ket) 
						VALUES ('', '$tgljd', '$minggu', '$dru', '$drk', '$ket')";
		$query = mysql_query($insert);
		if ($query)
		{
			?>
			<script language="javascript"> 
					alert("Data tersimpan");
					document.location='admin.php?menu=jdokter';
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
		$id_jdokter = $_GET['id'];
		$delete = mysql_query("DELETE jadwal_dokter FROM jadwal_dokter WHERE id_jdokter = '$id_jdokter' ");
		if($delete)
		{
			?>
			<script language="javascript"> 
					alert("Data terhapus");
					document.location='admin.php?menu=jdokter';
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
		$tgljd = $_POST['tgljd'];
		$minggu = $_POST['minggu'];
		$dru = $_POST['dru'];
		$drk = $_POST['drk'];
		$ket = $_POST['ket'];
		$id_jdokter = $_POST['id_jdokter'];
		$update = "UPDATE jadwal_dokter SET id_jdokter='$id_jdokter', tgl_jdokter='$tgljd', minggu='$minggu', dr_umum='$dru', dr_konsulen='$drk', ket='$ket' WHERE id_jdokter='$id_jdokter'";
		$qupdate = mysql_query($update); 
		if($qupdate)
		{
			?>
			<script language="javascript"> 
				alert("Data terupdate");
				document.location="admin.php?menu=jdokter";
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
			$result = mysql_query("DELETE FROM jadwal_dokter where id_jdokter='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='admin.php?menu=jdokter';
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
