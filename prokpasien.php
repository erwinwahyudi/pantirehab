<?php
	include "koneksidb.php";
	include "session.php";

	
	if(isset($_POST['submit'])){
		$nb= $_POST['nb'];
		$jb = $_POST['jb'];
			$insert = "INSERT INTO kebutuhan_pasien (id_kpasien, nm_barang,j_barang) 
							VALUES ('', '$nb', '$jb')";
			$query = mysql_query($insert);
				if ($query) {
					?>
					<script language="javascript"> 
						alert("Data kebutuhan pasien tersimpan");
						document.location="hlogistik.php?menu=log_viewkpasien";
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
		$id_kpasien = $_GET['id'];
		$delete = mysql_query("DELETE kebutuhan_pasien FROM kebutuhan_pasien WHERE id_kpasien = '$id_kpasien' ");
		if($delete)
		{
			
			?>
			<script language="javascript"> 
					alert("Data kebutuhan pasien terhapus");
					document.location='hlogistik.php?menu=log_viewkpasien';
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
	else if (strtolower($_POST['action']) == "update") {
		$nb= $_POST['nb'];
		$jb = $_POST['jb'];
		$id_kpasien = $_POST['id_kpasien'];
		$update = "UPDATE kebutuhan_pasien SET id_kpasien='$id_kpasien', nm_barang='$nb', j_barang='$jb' WHERE id_kpasien='$id_kpasien'";
		$qupdate = mysql_query($update); 
		
			if($qupdate)
			{
?>
					<script language="javascript"> 
						alert("Data terupdate");
						document.location="hlogistik.php?menu=log_viewkpasien";
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
			$result = mysql_query("DELETE FROM kebutuhan_pasien where id_kpasien='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='hlogistik.php?menu=log_viewkpasien';
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






