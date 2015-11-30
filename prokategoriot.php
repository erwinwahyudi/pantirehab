<?php
include "koneksidb.php";	
	
	if(isset($_POST['submit'])) {

		$uname = $_POST['uname'];
		$pass = md5($_POST['password']);
		$kategori = $_POST['kategori'];

		$querycek = mysql_query("select uname,kategori from login where uname='".$uname."' and kategori='".$kategori."'");
		$jlh = count(mysql_fetch_array($querycek));
		
		if ($jlh <= 1)
		{
	
			$insert = "INSERT INTO login VALUES ('','$uname', '$pass', '$kategori')";
			$query = mysql_query($insert);

			if ($query)
			{
				$query = mysql_query("select * from login where uname='$uname'");
				$row = mysql_fetch_array($query);
				$id_login = $row['id_login'];
				?><script language="javascript"> 
						alert("Data orang tua tersimpan");
						document.location='admin.php?menu=ppot&id=<?php echo $id_login; ?> ' ;
					</script> <?php
			}
			else
			{
				?>
				<script language="javascript">
					alert("Data gagal tersimpan");
					document.location="admin.php?menu=kategoriot";
				</script>
				<?php
			}
		}
		else
		{
			?>
			<script language="javascript">
				alert("Data sudah ada");
				document.location="admin.php?menu=kategoriot";
			</script>
			<?php
		}
	}

else if (isset($_GET['action']) == "delete")
{
	$id = $_GET['id'];
	
	$qcek = mysql_query("SELECT id_login FROM orang_tua WHERE id_login='$id' ");
	$cek = mysql_fetch_array($qcek);
	echo "login".$cek['id_login'];
	if ($cek == '') {
		$hapus = mysql_query("DELETE login FROM login WHERE id_login='$id'");
		if($hapus)
		{
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location="admin.php?menu=viewotua";
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
	} else {
		$hapus = mysql_query("DELETE orang_tua, login FROM orang_tua, login WHERE orang_tua.id_login = login.id_login AND login.id_login ='$id'");
		if($hapus)
		{
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location="admin.php?menu=viewotua";
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
	/**/
}
else if (strtolower($_POST['action']) == "update")
{
	$id_login = $_POST['id_login'];
	$uname = $_POST['uname'];
	$pass = md5($_POST['password']);
	$kategori = $_POST['kategori'];

	$update = "UPDATE login SET uname='$uname', password='$pass' WHERE id_login='$id_login'";
	$qupdate = mysql_query($update);
	
	if($qupdate)
	{
		?>
		 <script language="javascript"> 
			alert("Data terupdate");
			document.location="admin.php?menu=upotua&id=<?php echo $id_login;?>";
		</script>
	<?php
	}
	else
	{
		?>
	<script language="javascript"> 
			alert("Data gagal terupdate");
			document.location="admin.php?menu=upotua&id='<?php echo $id_login; ?>' ";
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
		$qcek = mysql_query("SELECT id_login FROM orang_tua WHERE id_login='$edittable[$i]' ");
		$cek = mysql_fetch_array($qcek);
		if ($cek == '') {
			$result = mysql_query("DELETE FROM login WHERE id_login='$edittable[$i]'");
		} else {
			$result = mysql_query("DELETE orang_tua, login FROM orang_tua, login WHERE orang_tua.id_login = login.id_login AND login.id_login ='$edittable[$i]'");
		}
	}
	if ($result) {
		?>
		<script language="javascript"> 
			alert("Data terhapus");
			document.location="admin.php?menu=viewotua";
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