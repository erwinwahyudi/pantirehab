<?php
	include "koneksidb.php";

	$kategori = $_POST['kategori'];
	$id_login = $_POST['id_login'];
	$nip = $_POST['nip'];
	$nama = $_POST['nmpt'];
	$tgllhr = $_POST['tgllhr'];
	$apt = $_POST['apt'];
	$nohppt = $_POST['nohppt'];
	$jabatan = $_POST['jabatan'];
	
	if(isset($_POST['submit']))
	{
			
			if($kategori == 'dokter') {
				$insertd = "INSERT INTO dokter (id_dokter, id_login, nip_dokter, nm_dokter, ttl_dokter, alamat_dokter, nohp_dokter, jabatan_dokter) 
							VALUES ('', '$id_login', '$nip', '$nama', '$tgllhr', '$apt', '$nohppt', '$jabatan')";
				$queryd = mysql_query($insertd);
				if ($queryd) {
					?>
					<script language="javascript"> 
							alert("Data tersimpan");
							document.location='admin.php?menu=viewpetugas';
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

			} else if ($kategori == 'perawat') {
				$insertp = "INSERT INTO perawat (id_perawat, id_login, nip_perawat, nm_perawat, ttl_perawat, alamat_perawat, nohp_perawat, jabatan_perawat) 
							VALUES ('', '$id_login', '$nip', '$nama', '$tgllhr', '$apt', '$nohppt', '$jabatan')";
				$queryp = mysql_query($insertp);
				if ($queryp) {
					?>
					<script language="javascript"> 
							alert("Data tersimpan");
							document.location='admin.php?menu=viewpetugas';
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

			} else if ($kategori == 'petugas rekam medik' ) {
				$insertm = "INSERT INTO p_rmedik (id_prmedik, id_login, nip_prmedik, nm_prmedik, ttl_prmedik, alamat_prmedik, nohp_prmedik, jabatan_prmedik) 
							VALUES ('', '$id_login', '$nip', '$nama', '$tgllhr', '$apt', '$nohppt', '$jabatan')";
				$querym = mysql_query($insertm);
				if ($querym) {
					?>
					<script language="javascript"> 
							alert("Data tersimpan");
							document.location='admin.php?menu=viewpetugas';
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

			} else if ($kategori == 'konselor') {
				$insertk = "INSERT INTO konselor (id_konselor, id_login, nip_konselor, nm_konselor, ttl_konselor, alamat_konselor, nohp_konselor, jabatan_konselor) 
							VALUES ('', '$id_login', '$nip', '$nama', '$tgllhr', '$apt', '$nohppt', '$jabatan')";
				$queryk = mysql_query($insertk);
				if ($queryk) {
					?>
					<script language="javascript"> 
							alert("Data tersimpan");
							document.location='admin.php?menu=viewpetugas';
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

			} else if ($kategori == 'logistik') {
				$insertl = "INSERT INTO logistik (id_logistik, id_login, nip_logistik, nm_logistik, ttl_logistik, alamat_logistik, nohp_logistik, jabatan_logistik) 
							VALUES ('', '$id_login', '$nip', '$nama', '$tgllhr', '$apt', '$nohppt', '$jabatan')";
				$queryl = mysql_query($insertl);
				if ($queryl) {
					?>
					<script language="javascript"> 
							alert("Data tersimpan");
							document.location='admin.php?menu=viewpetugas';
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

			} else  {
				$insertkr = "INSERT INTO karyawan (id_karyawan, id_login, nip_karyawan, nm_karyawan, ttl_karyawan, alamat_karyawan, nohp_karyawan, jabatan_karyawan) 
							VALUES ('', '$id_login', '$nip', '$nama', '$tgllhr', '$apt', '$nohppt', '$jabatan')";
				$querykr = mysql_query($insertkr);
				if ($querykr) {
					?>
					<script language="javascript"> 
							alert("Data tersimpan");
							document.location='admin.php?menu=viewpetugas';
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

	}
	else if (strtolower($_POST['action']) == "update")
	{
		$querycek = mysql_query("SELECT id_login from $kategori WHERE id_login='".$id_login."' ");
		$jlh = count(mysql_fetch_array($querycek));
			
		if ($jlh <= 1)
		{	
			if($kategori == 'dokter') {
				$insertd = "INSERT INTO dokter (id_dokter, id_login, nip_dokter, nm_dokter, ttl_dokter, alamat_dokter, nohp_dokter, jabatan_dokter) 
							VALUES ('', '$id_login', '$nip', '$nama', '$tgllhr', '$apt', '$nohppt', '$jabatan')";
				$queryd = mysql_query($insertd);
				if ($queryd) {
					?>
					<script language="javascript"> 
							alert("Data terupdate");
							document.location='admin.php?menu=viewpetugas';
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

			} else if ($kategori == 'perawat') {
				$insertp = "INSERT INTO perawat (id_perawat, id_login, nip_perawat, nm_perawat, ttl_perawat, alamat_perawat, nohp_perawat, jabatan_perawat) 
							VALUES ('', '$id_login', '$nip', '$nama', '$tgllhr', '$apt', '$nohppt', '$jabatan')";
				$queryp = mysql_query($insertp);
				if ($queryp) {
					?>
					<script language="javascript"> 
							alert("Data terupdate");
							document.location='admin.php?menu=viewpetugas';
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

			} else if ($kategori == 'p_rmedik') {
				$insertm = "INSERT INTO p_rmedik (id_prmedik, id_login, nip_prmedik, nm_prmedik, ttl_prmedik, alamat_prmedik, nohp_prmedik, jabatan_prmedik) 
							VALUES ('', '$id_login', '$nip', '$nama', '$tgllhr', '$apt', '$nohppt', '$jabatan')";
				$querym = mysql_query($insertm);
				if ($querym) {
					?>
					<script language="javascript"> 
							alert("Data terupdate");
							document.location='admin.php?menu=viewpetugas';
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

			} else if ($kategori == 'konselor') {
				$insertk = "INSERT INTO konselor (id_konselor, id_login, nip_konselor, nm_konselor, ttl_konselor, alamat_konselor, nohp_konselor, jabatan_konselor) 
							VALUES ('', '$id_login', '$nip', '$nama', '$tgllhr', '$apt', '$nohppt', '$jabatan')";
				$queryk = mysql_query($insertk);
				if ($queryk) {
					?>
					<script language="javascript"> 
							alert("Data terupdate");
							document.location='admin.php?menu=viewpetugas';
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

			} else if ($kategori == 'logistik') {
				$insertl = "INSERT INTO logistik (id_logistik, id_login, nip_logistik, nm_logistik, ttl_logistik, alamat_logistik, nohp_logistik, jabatan_logistik) 
							VALUES ('', '$id_login', '$nip', '$nama', '$tgllhr', '$apt', '$nohppt', '$jabatan')";
				$queryl = mysql_query($insertl);
				if ($queryl) {
					?>
					<script language="javascript"> 
							alert("Data terupdate");
							document.location='admin.php?menu=viewpetugas';
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

			} else  {
				$insertkr = "INSERT INTO karyawan (id_karyawan, id_login, nip_karyawan, nm_karyawan, ttl_karyawan, alamat_karyawan, nohp_karyawan, jabatan_karyawan) 
							VALUES ('', '$id_login', '$nip', '$nama', '$tgllhr', '$apt', '$nohppt', '$jabatan')";
				$querykr = mysql_query($insertkr);
				if ($querykr) {
					?>
					<script language="javascript"> 
							alert("Data terupdate");
							document.location='admin.php?menu=viewpetugas';
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
		}
		else
		{
			$id = $_POST['id'];
			if($kategori == 'dokter') {
				//UPDATE orang_tua SET id_otua='$id_otua', nm_otua='$nm_otua', alamat_otua='$alamat_otua', nohp_otua='$nohp_otua', nm_anak='$nm_anak' WHERE id_otua='$id_otua'
				$updated = "UPDATE dokter SET id_dokter='$id', nip_dokter='$nip', nm_dokter='$nama', ttl_dokter='$tgllhr', alamat_dokter='$apt', nohp_dokter='$nohppt', jabatan_dokter='$jabatan' WHERE id_dokter='$id'";
				$queryd = mysql_query($updated);
				if ($queryd) {
					?>
					<script language="javascript"> 
							alert("Data terupdate");
							document.location='admin.php?menu=viewpetugas';
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

			} else if ($kategori == 'perawat') {
				$updatep = "UPDATE perawat SET id_perawat='$id', nip_perawat='$nip', nm_perawat='$nama', ttl_perawat='$tgllhr', alamat_perawat='$apt', nohp_perawat='$nohppt', jabatan_perawat='$jabatan' WHERE id_perawat='$id'";
				$queryp = mysql_query($updatep);
				if ($queryp) {
					?>
					<script language="javascript"> 
							alert("Data terupdate");
							document.location='admin.php?menu=viewpetugas';
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

			} else if ($kategori == 'p_rmedik' ) {
				$updatem = "UPDATE p_rmedik SET id_prmedik='$id', nip_prmedik='$nip', nm_prmedik='$nama', ttl_prmedik='$tgllhr', alamat_prmedik='$apt', nohp_prmedik='$nohppt', jabatan_prmedik='$jabatan' WHERE id_prmedik='$id'";
				$querym = mysql_query($updatem);
				if ($querym) {
					?>
					<script language="javascript"> 
							alert("Data terupdate");
							document.location='admin.php?menu=viewpetugas';
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

			} else if ($kategori == 'konselor') {
				$updatek = "UPDATE konselor SET id_konselor='$id', nip_konselor='$nip', nm_konselor='$nama', ttl_konselor='$tgllhr', alamat_konselor='$apt', nohp_konselor='$nohppt', jabatan_konselor='$jabatan' WHERE id_konselor='$id'";
				$queryk = mysql_query($updatek);
				if ($queryk) {
					?>
					<script language="javascript"> 
							alert("Data terupdate");
							document.location='admin.php?menu=viewpetugas';
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

			} else if ($kategori == 'logistik') {
				$updatel = "UPDATE logistik SET id_logistik='$id', nip_logistik='$nip', nm_logistik='$nama', ttl_logistik='$tgllhr', alamat_logistik='$apt', nohp_logistik='$nohppt', jabatan_logistik='$jabatan' WHERE id_logistik='$id'";
				$queryl = mysql_query($updatel);
				if ($queryl) {
					?>
					<script language="javascript"> 
							alert("Data terupdate");
							document.location='admin.php?menu=viewpetugas';
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

			} else  {
				$updatekr = "UPDATE karyawan SET id_karyawan='$id', nip_karyawan='$nip', nm_karyawan='$nama', ttl_karyawan='$tgllhr', alamat_karyawan='$apt', nohp_karyawan='$nohppt', jabatan_karyawan='$jabatan' WHERE id_karyawan='$id'";
				$querykr = mysql_query($updatekr);
				if ($querykr) {
					?>
					<script language="javascript"> 
							alert("Data terupdate");
							document.location='admin.php?menu=viewpetugas';
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
		}
	}
?>
