<?php
	include "koneksidb.php";
	
	if(isset($_POST['submit']))	
	{
		$kategori = $_POST['kategori'];
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$insert = "INSERT INTO profil_panti (id_ppanti, kategori, judul, isi) 
					VALUES ('', '$kategori', '$judul', '$isi')";
		$query = mysql_query($insert);
		if ($query) 
		{
			?>
			<script language="javascript"> 
					alert("Data tersimpan");
					document.location='admin.php?menu=ppanti';
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
		$id_ppanti = $_GET['id'];
		$delete = mysql_query("DELETE profil_panti FROM profil_panti WHERE id_ppanti = '$id_ppanti' ");
		if($delete)
		{
			
			?>
			<script language="javascript"> 
					alert("Data terhapus");
					document.location='admin.php?menu=ppanti';
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
		$kategori = $_POST['kategori'];
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$id_ppanti = $_POST['id_ppanti'];
		$update = "UPDATE profil_panti SET id_ppanti='$id_ppanti', kategori='$kategori', judul='$judul', isi='$isi' WHERE id_ppanti='$id_ppanti'";
		$qupdate = mysql_query($update); 
		if($qupdate)
		{
			?>
				 <script language="javascript"> 
					alert("Data terupdate");
					document.location="admin.php?menu=ppanti";
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
			$result = mysql_query("DELETE FROM profil_panti where id_ppanti='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='admin.php?menu=ppanti';
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
