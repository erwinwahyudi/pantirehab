<?php
	session_start();
	include "koneksidb.php";
	
	$pass = md5($_POST['pass']);
	$username = $_POST['username'];
	$kategori = $_POST['kategori'];
	
	$login = mysql_query("select * from login where uname='".$username."' and password='".$pass."' and kategori='".$kategori."' ");
	$data = mysql_fetch_array($login);
	$jlh = count($data);
	
	if ($data)
	{
		if($kategori == 'dokter') {
			$_SESSION['user'] = $_POST['username'];
			header("location: hdokter.php");

		} elseif ($kategori == 'perawat') {
			$_SESSION['user'] = $_POST['username'];
			header("location: hperawat.php");

		} elseif ($kategori == 'konselor') {
			$_SESSION['user'] = $_POST['username'];
			header("location: hkonselor.php");

		} elseif ($kategori == 'karyawan') {
			$_SESSION['user'] = $_POST['username'];
			header("location: hkaryawan.php");

		} elseif ($kategori == 'logistik') {
			$_SESSION['user'] = $_POST['username'];
			header("location: hlogistik.php");

		} elseif ($kategori == 'petugas rekam medik') {
			$_SESSION['user'] = $_POST['username'];
			header("location: hprmedik.php");
			
		} else {
			$_SESSION['user'] = $_POST['username'];
			header("location: hotua.php");
		}

		
		
		
	}
	else
	{
				
		 ?>
    <script type="text/javascript">alert("Maaf, Username atau Password Anda salah!!");
    window.history.go(-1);
    </script>
    <?php
			
	}
?>
	