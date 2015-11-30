<?php
	include "koneksidb.php";
	
	$dir_gambar = 'C:\xampp\htdocs\panti\galeri\\';
	$url_folder_gambar = 'http://localhost:/panti/galeri/';
	

if( isset($_REQUEST['submit']) == "Simpan" ) {
		 $judul = $_REQUEST['judul'] ? htmlspecialchars($_REQUEST['judul']) : 'blum ada judul'; 
		 $isi = $_REQUEST['isi'];
		 
		 $filename = basename($_FILES['userfile']['name']);
		 $uploadfile = $dir_gambar . $filename;

		 $kategori = $_REQUEST['kategori'];
		 
		 
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
			 $query = "INSERT INTO galeri VALUES('', '$kategori', '$judul', '$isi', '$filename')";
			 $query = mysql_query($query);
			 if(!$query){
			 	die( mysql_error() );
			 }
			 
			 ?>
			<script language="javascript"> 
				alert("Data tersimpan");
				document.location='admin.php?menu=galeri';
			</script> 
			<?php
			exit();
		} else {
			?>
			<script language="javascript"> 
				alert("Data gagal tersimpan");
				document.location='admin.php?menu=galeri';
			</script> 
			<?php
		}
} 
else if (strtolower($_POST['action']) == "update") {

		 $judul = $_REQUEST['judul'] ? htmlspecialchars($_REQUEST['judul']) : 'blum ada judul'; //ternary operator
		 $isi = $_REQUEST['isi'];
		 
		 $filename = basename($_FILES['userfile']['name']);
		 $uploadfile = $dir_gambar . $filename;
		 $kategori = $_REQUEST['kategori'];
		 
		$id_galeri = $_POST['id_galeri'];

		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
			 $query = "UPDATE galeri SET id_galeri='$id_galeri', kategori='$kategori', judul='$judul', isi='$isi', gambar='$filename' WHERE id_galeri='$id_galeri'";
			 $query = mysql_query($query);
			 if(!$query){
			 	die( mysql_error() );
			 }
			 
			 ?>
			<script language="javascript"> 
				alert("Data terupdate");
				document.location='admin.php?menu=galeri';
			</script> 
			<?php
			exit();
		} else {
			?>
			<script language="javascript"> 
				alert("Data gagal terupdate");
				document.location='admin.php?menu=galeri';
			</script> 
			<?php
		}
}

else if (isset($_GET['action']) == "delete")
	{
		$id_galeri = $_GET['id'];
		$delete = mysql_query("DELETE galeri FROM galeri WHERE id_galeri = '$id_galeri' ");
		if($delete)
		{
			
			?>
			<script language="javascript"> 
					alert("Data terhapus");
					document.location='admin.php?menu=galeri';
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
else if(strtolower($_POST['action']) == "deletemulti")
	{
		$edittable=$_POST['selector'];
		$n = count($edittable);
		for($i=0; $i < $n; $i++)
		{
			$result = mysql_query("DELETE FROM galeri where id_galeri='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='admin.php?menu=galeri';
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
