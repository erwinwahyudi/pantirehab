<?php
	include "koneksidb.php";
	include "session.php";

	
	if(isset($_POST['submit'])){
		$kcp= $_POST['kcp'];
		$cp = $_POST['cp'];
			$insert = "INSERT INTO cara_penggunaan (k_cp, cp) 
							VALUES ('$kcp', '$cp')";
			$query = mysql_query($insert);
				if ($query) {
					?>
					<script language="javascript"> 
						alert("Kode cara penggunaan tersimpan");
						document.location="hperawat.php?menu=vkcp";
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
		$kcp = $_GET['id'];
		$delete = mysql_query("DELETE cara_penggunaan FROM cara_penggunaan WHERE k_cp = '$kcp' ");
		if($delete)
		{
			?>
					<script language="javascript"> 
						alert("Data terhapus");
						document.location="hperawat.php?menu=vkcp";
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
		$kcp= $_POST['kcp'];
		$cp = $_POST['cp'];
		$update = "UPDATE cara_penggunaan SET k_cp='$kcp', cp='$cp' WHERE k_cp='$kcp'";
		$qupdate = mysql_query($update); 
		
			if($qupdate)
			{
?>
					<script language="javascript"> 
						alert("Data terupdate");
						document.location="hperawat.php?menu=vkcp";
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
			$result = mysql_query("DELETE FROM cara_penggunaan where k_cp='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='hperawat.php?menu=vkcp';
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






