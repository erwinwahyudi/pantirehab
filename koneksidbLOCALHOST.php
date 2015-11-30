<?php
		$host = "localhost";
		$username = "root";
		$password = "";
		$db = "panti_rehab";
		
		
		$link = mysql_connect($host,$username,$password) or die("Database tidak dapat dihubungkan");
		mysql_select_db($db,$link);
		if(!$link)
			echo "Error : ".mysql_error();
		return $link;
?>
	