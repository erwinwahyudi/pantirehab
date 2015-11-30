<?php
	include "koneksidb.php";
	include "session.php";

	
	if(isset($_POST['submit'])){
		$kp= $_POST['kp'];
		$nmp = $_POST['nmp'];
			$insert = "INSERT INTO kode_pekerjaan (k_pekerjaan, nm_pekerjaan) 
							VALUES ('$kp', '$nmp')";
			$query = mysql_query($insert);
				if ($query) {
					?>
					<script language="javascript"> 
						alert("Kode pekerjaan tersimpan");
						document.location="hperawat.php?menu=vkp";
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
		$kp = $_GET['id'];
		$delete = mysql_query("DELETE kode_pekerjaan FROM kode_pekerjaan WHERE k_pekerjaan = '$kp' ");
		if($delete)
		{
			?>
			<script language="javascript"> 
					alert("Data kode pekerjaan terhapus");
					document.location='hperawat.php?menu=vkp';
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
		$kp= $_POST['kp'];
		$nmp = $_POST['nmp'];
		$update = "UPDATE kode_pekerjaan SET k_pekerjaan='$kp', nm_pekerjaan='$nmp' WHERE k_pekerjaan='$kp'";
		$qupdate = mysql_query($update); 
		
			if($qupdate)
			{
?>
					<script language="javascript"> 
						alert("Data terupdate");
						document.location="hperawat.php?menu=vkp";
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
			$result = mysql_query("DELETE FROM kode_pekerjaan where k_pekerjaan='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='hperawat.php?menu=vkp';
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






