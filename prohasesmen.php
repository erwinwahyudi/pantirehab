<?php
	include "koneksidb.php";

		
	if(isset($_POST['submit']))
	{
		$id_pasien = $_POST['id_pasien'];
		$id_fasesmen = $_POST['id_fasesmen'];
		$tgl_dtg = $_POST['tgl_dtg'];
		$medis = $_POST['medis'];
		$dukungan = $_POST['dukungan'];
		$napza = $_POST['napza'];
		$legal = $_POST['legal'];
		$keluarga = $_POST['keluarga'];
		$psikiatris = $_POST['psikiatris'];
		$d_napza = $_POST['d_napza'];
		$d_lain = $_POST['d_lain'];
		$r_masalah = $_POST['r_masalah'];
		$r_tlanjut = $_POST['r_tlanjut'];
		 

	$selected_rtlanjut = "";
		foreach ($r_tlanjut as $rtlanjut) 
	{
 		 $selected_rtlanjut .= $rtlanjut . ", ";
	}
	$selected_rtlanjut = substr($selected_rtlanjut, 0, -2);

		
		$insert = "INSERT INTO hasil_asesmen (id_hasesmen, id_pasien, id_fasesmen, tgl_dtg, medis, dukungan, napza, legal, keluarga, psikiatris, d_napza, d_lain, r_masalah, r_tlanjut) 
					VALUES ('','$id_pasien', '$id_fasesmen', '$tgl_dtg', '$medis', '$dukungan', '$napza', '$legal', '$keluarga', '$psikiatris', '$d_napza', '$d_lain', '$r_masalah', '$selected_rtlanjut')";
		$query = mysql_query($insert);
		if ($query) {
			?>
				 <script language="javascript"> 
					alert("Data hasil asesmen tersimpan");
					document.location="hdokter.php?menu=dok_viewallhasesmen";
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
	else if(isset($_POST['action'])=="update")
 	{
 		$id_hasesmen = $_POST['id_hasesmen'];
 		$id_pasien = $_POST['id_pasien'];

		$tgl_dtg = $_POST['tgl_dtg'];
		$d_lain = $_POST['d_lain'];
		$r_masalah = $_POST['r_masalah'];
		$r_tlanjut = $_POST['r_tlanjut'];
		
		$selected_rtlanjut = "";
		foreach ($r_tlanjut as $rtlanjut) 
		{
	 		 $selected_rtlanjut .= $rtlanjut . ", ";
		}
		$selected_rtlanjut = substr($selected_rtlanjut, 0, -2);
		
 		$update = "UPDATE hasil_asesmen SET tgl_dtg='$tgl_dtg', d_lain='$d_lain', r_masalah='$r_masalah', r_tlanjut='$selected_rtlanjut' WHERE id_hasesmen='$id_hasesmen'";
		$query = mysql_query($update); 
		if ($query) {
			?>
			 <script language="javascript"> 
				alert("Data hasil asesmen terupdate");
				document.location="hdokter.php?menu=hasesmen&action=update&id=<?php echo $id_pasien;?>&idhasesmen=<?php echo $id_hasesmen; ?>";
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
		
		$idhasesmen = $_GET['idhasesmen'];
		$delete = mysql_query("DELETE hasil_asesmen FROM hasil_asesmen WHERE id_hasesmen = '$idhasesmen'");
		if($delete)
		{
			?>
			<script language="javascript"> 
					alert("Data terhapus");
					document.location='hdokter.php?menu=dok_viewallhasesmen';
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
?>