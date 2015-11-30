<?php
	include "koneksidb.php";
	include "session.php";

	if(isset($_POST['submit']))
		{
			$tdt = $_POST['tdt'];
			$status = $_POST['status'];
			$pnddkntr = $_POST['pnddkntr'];
			$id_pasien = $_POST['id_pasien'];
		
			$insert = "INSERT INTO formulir_asesmen (id_fasesmen, id_pasien, tgl_datang, s_kawin, p_terakhir) 
						VALUES ('', '$id_pasien', '$tdt', '$status', '$pnddkntr')";
			$query = mysql_query($insert);
			if ($query) {
				?>
				 <script language="javascript"> 
					alert("Data informasi demografis tersimpan");
					document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=0";
				</script>
				<?php
			} else {
				?>
			    <script type="text/javascript">
			    alert("Data gagal tersimpan");
			    window.history.go(-1);
			    </script>
			    <?php
			}
 		} 
 		else if(isset($_POST['update']))
 		{
			$tdt = $_POST['tdt'];
			$status = $_POST['status'];
			$pnddkntr = $_POST['pnddkntr'];
 			$id_pasien = $_POST['id_pasien'];
 			$id_fasesmen = $_POST['id_fasesmen'];
			
 			$update = "UPDATE formulir_asesmen SET tgl_datang='$tdt' , s_kawin='$status', p_terakhir='$pnddkntr' where id_fasesmen='$id_fasesmen' ";

			$query = mysql_query($update);
			if ($query) {
				?>
				 <script language="javascript"> 
					alert("Data informasi demografis terupdate");
					document.location="hperawat.php?menu=forasesmen&id=<?php echo $id_pasien;?>&active=0";
				</script>
				<?php
			} else {
				?>
			    <script type="text/javascript">
			    alert("Data gagal terupdate");
			    window.history.go(-1);
			    </script>
			    <?php
			}
 		}
 		else if (isset($_GET['action']) == "delete")
	{
		$id_fasesmen = $_GET['id'];
			$delete = mysql_query("DELETE formulir_asesmen FROM formulir_asesmen WHERE id_fasesmen = '$id_fasesmen' "											);
			if($delete)
			{
				?>
				<script language="javascript"> 
					alert("Data formulir_asesmen terhapus");
					document.location="hperawat.php?menu=per_pilihpasiende";
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
			$result = mysql_query("DELETE FROM formulir_asesmen where id_fasesmen='$edittable[$i]'");
		}
		
		if ($result) {
			?>
			<script language="javascript"> 
				alert("Data terhapus");
				document.location='hperawat.php?menu=per_pilihpasiende';
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



	
	




