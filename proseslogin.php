<?php
	session_start();
	include "koneksidb.php";
	
	$pass = md5($_POST['pass']);
	$username = $_POST['username'];
	$login = mysql_query("select * from admin where username='".$username."' and pass='".$pass."'");
	$data = mysql_num_rows($login);
		
	if ($data >= 1)
	{
		$_SESSION['user'] = $username;
		header("location: admin.php");
		
		
	}
	else
	{
				
		?> <script language="javascript">alert("Maaf, Username atau Password Anda salah!!");
document.location="login.php";</script>
	    <?php
	}

?>
	