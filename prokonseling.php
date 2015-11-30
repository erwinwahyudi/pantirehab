<?php
	include "koneksidb.php";
	include "session.php";


if(isset($_POST['submit'])){

		$id_pasien = $_POST['id_pasien'];
		$tglko= $_POST['tglko'];
		$jamko = $_POST['jamko'];
		$catatan = $_POST['catatan'];

		$insert = "INSERT INTO konseling (id_konseling, id_pasien, tgl_konseling, jam_konseling, catatan) 
					VALUES ('','$id_pasien', '$tglko', '$jamko', '$catatan')";
		$query = mysql_query($insert);
		if ($query)
		{
			?>
			<script language="javascript"> 
				alert("Data konseling tersimpan");
				document.location="hkonselor.php?menu=kon_viewkonseling";
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
		$id_konseling = $_GET['id'];
		$delete = mysql_query("DELETE konseling FROM konseling WHERE id_konseling = '$id_konseling' ");
		if($delete)
		{
			?>
			<script language="javascript"> 
					alert("Data konseling terhapus");
					document.location='hkonselor.php?menu=kon_viewkonseling';
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
		$id_konseling = $_POST['id_konseling'];
		$tglko= $_POST['tglko'];
		$jamko = $_POST['jamko'];
		$catatan = $_POST['catatan'];

		$update = "UPDATE konseling SET id_konseling='$id_konseling', tgl_konseling='$tglko', jam_konseling='$jamko', catatan='$catatan' WHERE id_konseling='$id_konseling' ";
		$qupdate = mysql_query($update); 
		
		if($qupdate)
		{
			?>
			 <script language="javascript"> 
				alert("Data terupdate");
				document.location="hkonselor.php?menu=kon_viewkonseling";
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
			$result = mysql_query("DELETE FROM konseling where id_konseling='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='hkonselor.php?menu=kon_viewkonseling';
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




