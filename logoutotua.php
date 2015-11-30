<?php
	session_start();
	unset($_SESSION['user']);
	session_destroy();
	?>
			<script language="javascript"> 
					document.location='../indexpanti/?halaman=login';
			</script>
	<?