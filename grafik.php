<?php
if(isset($_POST['kirim'])){
	if ($_POST['grafik'] == "keperawatan") {
		include "per_linechartkep.php";
	} else {
		include "per_linechartper.php";
	}
}
?>