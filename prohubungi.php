<?php
	include "koneksidb.php";
	include "session.php";
	
	if(isset($_POST['submit']))	
	{
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$komentar = $_POST['komentar'];
		$insert = "INSERT INTO hubungi (id_hubungi, nama, email, komentar) 
					VALUES ('', '$nama', '$email', '$komentar')";
		$query = mysql_query($insert);
		if ($query) 
		{
			?>
			<script language="javascript"> 
					alert("pesan terkirim");
					 window.history.go(-1);
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
		$id_hubungi = $_GET['id'];
		$delete = mysql_query("DELETE hubungi FROM hubungi WHERE id_hubungi = '$id_hubungi' ");
		if($delete)
		{
			?>
			<script language="javascript"> 
					alert("Data terhapus");
					document.location='admin.php?menu=hubungi';
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
	else if(strtolower(isset($_POST['action'])) == "deletemulti")
	{
		
		$edittable=$_POST['selector'];
		$n = count($edittable);
		for($i=0; $i < $n; $i++)
		{
			$result = mysql_query("DELETE FROM hubungi where id_hubungi='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='admin.php?menu=hubungi';
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
