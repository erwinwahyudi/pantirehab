<?php
	include "koneksidb.php";

	if(isset($_POST['submit'])){

		$id_pasien = $_POST['id_pasien'];
		$nmpembayar= $_POST['nmpembayar'];
		$tgltr = $_POST['tgltr'];
		$total = $_POST['total'];

		
		$querycek = mysql_query("SELECT * from administrasi WHERE id_pasien='".$id_pasien."' ");
		$jlh = count(mysql_fetch_array($querycek));
			
		if ($jlh <= 1)
		{	
			$insert = "INSERT INTO administrasi (id_administrasi, id_pasien, nm_pembayar, tgl_transaksi, total) 
							VALUES ('','$id_pasien', '$nmpembayar', '$tgltr', '$total')";
			$query = mysql_query($insert);
			if ($query)
			{
				?>
				<script language="javascript"> 
					alert("Data administrasi tersimpan");
					document.location="hkaryawan.php?menu=kar_viewadministrasi";
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
				document.location="hkaryawan.php?menu=kar_viewadministrasi";
			</script>
			<?php
		}
	}
	else if (isset($_GET['action']) == "delete")
	{
		$id_administrasi = $_GET['id'];
		$delete = mysql_query("DELETE administrasi FROM administrasi WHERE id_administrasi = '$id_administrasi' ");
		if($delete)
		{
			?>
			<script language="javascript"> 
					alert("Data administrasi terhapus");
					document.location='hkaryawan.php?menu=kar_viewadministrasi';
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
		$id_administrasi = $_POST['id_administrasi'];
		$nmpembayar= $_POST['nmpembayar'];
		$tgltr = $_POST['tgltr'];
		$total = $_POST['total'];

		$update = "UPDATE administrasi SET id_administrasi='$id_administrasi', nm_pembayar='$nmpembayar', tgl_transaksi='$tgltr', total='$total' WHERE id_administrasi='$id_administrasi'";
		$qupdate = mysql_query($update); 
		
		if($qupdate)
		{
			?>
			 <script language="javascript"> 
				alert("Data terupdate");
				document.location="hkaryawan.php?menu=kar_viewadministrasi";
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
			$result = mysql_query("DELETE FROM administrasi where id_administrasi='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='hkaryawan.php?menu=kar_viewadministrasi';
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





