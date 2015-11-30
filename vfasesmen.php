<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
		var dontSort = [];
		                $('#example thead th').each( function () {
		                    if ( $(this).hasClass( 'no_sort' )) {
		                        dontSort.push( { "bSortable": false } );
		                    } else {
		                        dontSort.push( null );
		                    }
		      } );
		
		      $.extend( $.fn.dataTableExt.oStdClasses, {
		        "s`": "dataTables_wrapper form-inline"
		      } );
		    
			$('#example').dataTable({
		        "bPaginate": true,
		        "bJQueryUI": false,
		        "sPaginationType": "full_numbers",
        		"sScrollX": 'auto',
			});

			$('#example2').dataTable({
		        "bPaginate": true,
		        "bJQueryUI": false,
		        "sPaginationType": "full_numbers",
        		"sScrollX": '2000px',
			});

			$('#example3').dataTable({
		        "bPaginate": true,
		        "bJQueryUI": false,
		        "sPaginationType": "full_numbers",
        		"sScrollX": '2000px',
			});

			$('#example4').dataTable({
		        "bPaginate": true,
		        "bJQueryUI": false,
		        "sPaginationType": "full_numbers",
        		"sScrollX": '4000px',
			});

			$('#example5').dataTable({
		        "bPaginate": true,
		        "bJQueryUI": false,
		        "sPaginationType": "full_numbers",
        		"sScrollX": '3000px',
			});

			$('#example6').dataTable({
		        "bPaginate": true,
		        "bJQueryUI": false,
		        "sPaginationType": "full_numbers",
        		"sScrollX": '3000px',
			});

			$('#example7').dataTable({
		        "bPaginate": true,
		        "bJQueryUI": false,
		        "sPaginationType": "full_numbers",
        		"sScrollX": '3000px',
			});

			$('#example8').dataTable({
		        "bPaginate": true,
		        "bJQueryUI": false,
		        "sPaginationType": "full_numbers",
        		"sScrollX": '3000px',
			});
		} );
	</script>

<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Informasi Demografis</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
		<table id="example" class="table-bordered" class="display" style="margin-bottom:0px;">
			<thead>
				<tr height="30px">
				<th width="60px">No</th>
				<th>Nama Pasien</th>
                <th>Tgl Datang</th>
                <th>Status</th>
                <th>Pendidikan terakhir</th>
            </tr>
		</thead>
        	<tbody>
				<?php
				$query = mysql_query("SELECT fa.*, ps.*	FROM formulir_asesmen fa INNER JOIN pasien ps ON fa.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($query))
					{
						$no++;
						$nm_pasien = $row['nm_pasien'];
						$tgl_datang = $row['tgl_datang'];
						$sk = $row['s_kawin'];
						if ($sk == "m") {
							$sk = "menikah";
						} else if ($sk == "bm") {
							$sk = "belum menikah";
						} else {
							$sk = "duda/janda";
						} 

						$pta = $row['p_terakhir'];
						if ($pta == "ak") {
								$pta = "akademi";
							} else if ($pta == "pt") {
								$pta = "perguruan tinggi";
							} 
						echo "
								<tr align='center' height='30px'>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td>$tgl_datang</td>
								<td>$sk</td>
								<td>$pta</td>
								</tr>";
					}
				?>
           </tbody>

</table>
		  <div class="row-fluid control-group">
            <div class="pull-left span6" action="#">
              <div class=" "></div>
            </div>           
          </div>
      
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->

<!-- SMEDIS -->
<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Status Medis</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
		<table id="example2" class="table-bordered" class="display" style="margin-bottom:0px;">
			<thead>
				<tr height="30px">
				<th width="60px">No</th>
				<th>Nama Pasien</th>
                <th>Jenis Penyakit</th>
                <th>Tahun Rawat</th>
                <th>Lama</th>
                <th>Riwayat Peny. Kronis</th>
                <th>Jenis Penyakit</th>
                <th>Terapi Medis</th>
                <th>Jenis Terapi Medis</th>
                <th>HIV</th>
                <th>Hepatitis B</th>
                <th>Hepatitis C</th>
            </tr>
		</thead>
        	<tbody>
				<?php
				$query = mysql_query("SELECT fa.*, ps.*	FROM formulir_asesmen fa INNER JOIN pasien ps ON fa.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($query))
					{
						$no++;
						$nm_pasien = $row['nm_pasien'];
						$j_penyakit = $row['j_penyakit'];
						$t_rawat = $row['t_rawat'];
						$lama = $row['lama'];
						$rp_kronis = $row['rp_kronis'];
						$j_pykt = $row['j_pykt'];
						$t_medis = $row['t_medis'];
						$j_tmedis = $row['j_tmedis'];
						$hiv = $row['hiv'];
						$hepatitis_b = $row['hepatitis_b'];
						$hepatitis_c = $row['hepatitis_c'];
						echo "
								<tr align='center' height='30px'>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td>$j_penyakit</td>
								<td>$t_rawat</td>
								<td>$lama</td>
								<td>$rp_kronis</td>
								<td>$j_pykt</td>
								<td>$t_medis</td>
								<td>$j_tmedis</td>
								<td>$hiv</td>
								<td>$hepatitis_b</td>
								<td>$hepatitis_c</td>								
								</tr>";
					}
				?>
           </tbody>

</table>
		  <div class="row-fluid control-group">
            <div class="pull-left span6" action="#">
              <div class=" "></div>
            </div>           
          </div>
      
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->

<!-- SPEKERJAAN -->
<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Status Pekerjaan</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
		<table id="example3" class="table-bordered" class="display" style="margin-bottom:0px;">
			<thead>
				<tr height="30px">
					<th width="60px">No</th>
				<th>Nama Pasien</th>
                <th>Status Pekerjaan</th>
                <th>Kode Pekerjaan</th>
                <th>Pola Pekerjaan</th>
                <th>Keterampilan</th>
                <th>Dukungan Hidup</th>
                <th>Nama Dukungan Hidup</th>
                <th>Finansial</th>
                <th>Tempat Tinggal</th>
                <th>Makan</th>
                <th>Perawatan</th>
           </tr>
		</thead>
        	<tbody>
				<?php
				$$query = mysql_query("SELECT fa.*, ps.*	FROM formulir_asesmen fa INNER JOIN pasien ps ON fa.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($$query))
					{
						$no++;
						$nm_pasien = $row['nm_pasien'];
						
						$sp = $row['s_pekerjaan']; 
						if ($sp == "tb") {
							$sp = "tidak bekerja";
						} else if ($sp == "b") {
							$sp = "bekerja";
						} else if ($sp == "m") {
							$sp = "mahasiswa/pelajar";
						} else {
							$sp = "ibu rumah tangga";
						} 
					
						$k_pekerjaan = $row['k_pekerjaan'];
						
						$pp = $row['p_pekerjaan'];
						if ($pp == "pu") {
							$pp = "purna waktu";
						} else if ($pp == "pa") {
							$pp = "paruh waktu";
						} else {
							$pp = "tidak tentu";
						}
						
						$keterampilan = $row['keterampilan'];
						$dhidup = $row['dhidup'];
						$nm_dhidup = $row['nm_dhidup'];
						$finansial = $row['finansial'];
						$t_tinggal = $row['t_tinggal'];
						$makan = $row['makan'];
						$perawatan = $row['perawatan'];
						echo "
								<tr align='center' height='30px'>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td>$sp</td>
								<td>$k_pekerjaan</td>
								<td>$pp</td>
								<td>$keterampilan</td>
								<td>$dhidup</td>
								<td>$nm_dhidup</td>
								<td>$finansial</td>
								<td>$t_tinggal</td>
								<td>$makan</td>
								<td>$perawatan</td>
								</tr>";
					}
				?>
           </tbody>

</table>
		  <div class="row-fluid control-group">
            <div class="pull-left span6" action="#">
              <div class=" "></div>
            </div>           
          </div>
      
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->

<!-- SPNARKOTIKA -->
<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Status Penggunaan Narkotika</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
		<table id="example4" class="table-bordered" class="display" style="margin-bottom:0px;">
			<thead>
				<tr height="30px">
				<th width="60px">No</th>
				<th>Nama Pasien</th>
                <th>Alkohol</th>
                <th>Cara Pakai Alkohol</th>
                <th>Heroin</th>
                <th>Cara Pakai Heroin</th>
                <th>Metadon</th>
                <th>Cara Pakai Metadon</th>
                <th>Analgesik</th>
                <th>Cara Pakai Analgesik</th>
                <th>Barbiturat</th>
                <th>Cara Pakai Barbiturat</th>
                <th>Sedatif</th>
                <th>Cara Pakai Sedatif</th>
                <th>Kokain</th>
                <th>Cara Pakai Kokain</th>
                <th>Amfetamin</th>
                <th>Cara Pakai Amfetamin</th>
                <th>Kanabis</th>
                <th>Cara Pakai Kanabis</th>
                <th>Halusinogen</th>
                <th>Cara Pakai Halusinogen</th>
                <th>Inhalan</th>
                <th>Cara Pakai Inhalan</th>
                <th>Banyak Zat</th>
                <th>Cara Pakai Banyak Zat</th>
                <th>Zat Utama</th>
                <th>Tempat Rehabilitasi</th>
                <th>Jenis Rehabilitasi</th>
                <th>Overdosis</th>
                <th>Kapan</th>
                <th>Waktu</th>
                <th>Cara Penanggulangan</th>
           </tr>
		</thead>
        	<tbody>
				<?php
				$query = mysql_query("SELECT fa.*, ps.*	FROM formulir_asesmen fa INNER JOIN pasien ps ON fa.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($query))
					{
						$no++;
						$id_fasesmen = $row['id_fasesmen'];
						$nm_pasien = $row['nm_pasien'];
						$alkohol = $row['alkohol'];
						$cpalkohol = $row['cp_alkohol'];
						$heroin = $row['heroin'];
						$cpheroin = $row['cp_heroin'];
						$metadon = $row['metadon'];
						$cpmetadon = $row['cp_metadon'];
						$analgesik = $row['analgesik'];
						$cpanalgesik = $row['cp_analgesik'];
						$barbiturat = $row['barbiturat'];
						$cpbarbiturat = $row['cp_barbiturat'];
						$sedatif = $row['sedatif'];
						$cpsedatif = $row['cp_sedatif'];
						$kokain = $row['kokain'];
						$cpkokain = $row['cp_kokain'];
						$amfetamin = $row['amfetamin'];
						$cpamfetamin = $row['cp_amfetamin'];
						$kanabis = $row['kanabis'];
						$cpkanabis = $row['cp_kanabis'];
						$halusinogen = $row['halusinogen'];
						$cphalusinogen = $row['cp_halusinogen'];
						$inhalan = $row['inhalan'];
						$cpinhalan = $row['cp_inhalan'];
						$bzat = $row['b_zat'];
						$cpbzat = $row['cp_bzat'];
						$zutama = $row['zat_utama'];
						$trehabilitasi = $row['t_rehabilitasi'];
						$jtrehabilitasi = $row['j_trehabilitasi'];
						$od = $row['od'];
						$kod = $row['kapan'];
						$wod = $row['waktu'];
						
						$cpn = $row['c_penanggulangan'];
						if ($cpn == "rs") {
							$cpn = "rumah sakit";
						  } else if ($cpn == "ps") {
							$cpn = "puskesmas";
						  } else {
							$cpn = "sendiri";
						  } 

						echo "
								<tr align='center' height='30px'>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td>$alkohol</td>
								<td>$cpalkohol</td> 
								<td>$heroin</td>
								<td>$cpheroin</td> 
								<td>$metadon</td>
								<td>$cpmetadon</td>
								<td>$analgesik</td> 
								<td>$cpanalgesik</td> 
								<td>$barbiturat</td>
								<td>$cpbarbiturat</td> 
								<td>$sedatif</td> 
								<td>$cpsedatif</td>
								<td>$kokain</td>
								<td>$cpkokain</td>
								<td>$amfetamin</td>
								<td>$cpamfetamin</td>
								<td>$kanabis</td>
								<td>$cpkanabis</td>
								<td>$halusinogen</td>
								<td>$cphalusinogen</td>
								<td>$inhalan</td>
								<td>$cpinhalan</td> 
								<td>$bzat</td> 
								<td>$cpbzat</td>
								<td>$zutama</td>
								<td>$trehabilitasi</td>
								<td>$jtrehabilitasi</td>
								<td>$od</td> 
								<td>$kod</td>
								<td>$wod</td>
								<td>$cpn</td>
								</tr>";
					}
				?>
           </tbody>

</table>
		  <div class="row-fluid control-group">
            <div class="pull-left span6" action="#">
              <div class=" "></div>
            </div>           
          </div>
      
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->

<!-- SLEGAL -->
<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Status Legal</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
		<table id="example5" class="table-bordered" class="display" style="margin-bottom:0px;">
			<thead>
				<tr height="30px">
				<th width="60px">No</th>
				<th>Nama Pasien</th>
                <th>Mencuri</th>
                <th>Bebas Bersyarat/Masa Percobaan</th>
                <th>Masalah Narkoba</th>
                <th>Pemalsuan</th>
                <th>Penyerangan Bersenjata</th>
                <th>Pembobolan & Pencurian</th>
                <th>Perampokan</th>
                <th>Penyerangan</th>
                <th>Pembakaran Rumah</th>
                <th>Pemerkosaan</th>
                <th>Pembunuhan</th>
                <th>Pelacuran</th>
                <th>Melecehkan Pengadilan</th>
                <th>Lain-lain</th>
                <th>Tuntutan</th>
           </tr>
		</thead>
        	<tbody>
				<?php
				$query = mysql_query("SELECT fa.*, ps.*	FROM formulir_asesmen fa INNER JOIN pasien ps ON fa.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($query))
					{
						$no++;
						$id_fasesmen = $row['id_fasesmen'];
						$nm_pasien = $row['nm_pasien'];
						$mencuri = $row['mencuri'];
						$bb_mp = $row['bb_mp'];
						$m_narkoba = $row['m_narkoba'];
						$pemalsuan = $row['pemalsuan'];
						$p_bersenjata = $row['p_bersenjata'];
						$pembobolan = $row['pembobolan'];
						$perampokan = $row['perampokan'];
						$penyerangan = $row['penyerangan'];
						$p_rumah = $row['p_rumah'];
						$pemerkosaan = $row['pemerkosaan'];
						$pembunuhan = $row['pembunuhan'];
						$pelacuran = $row['pelacuran'];
						$m_pengadilan = $row['m_pengadilan'];
						$lain_lain = $row['lain_lain'];
						$tuntutan = $row['tuntutan'];
						echo "
								<tr align='center' height='30px'>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td>$mencuri</td>
								<td>$bb_mp</td>
								<td>$m_narkoba</td>
								<td>$pemalsuan</td>
								<td>$p_bersenjata</td>
								<td>$pembobolan</td>
								<td>$perampokan</td>
								<td>$penyerangan</td>
								<td>$p_rumah</td>
								<td>$pemerkosaan</td>
								<td>$pembunuhan</td>
								<td>$pelacuran</td>
								<td>$m_pengadilan</td>
								<td>$lain_lain</td>
								<td>$tuntutan</td>
								</tr>";
					}
				?>
           </tbody>

</table>
		  <div class="row-fluid control-group">
            <div class="pull-left span6" action="#">
              <div class=" "></div>
            </div>           
          </div>
      
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->

<!-- RKSOSIAL -->
<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Riwayat Keluarga Sosial</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
		<table id="example6" class="table-bordered" class="display" style="margin-bottom:0px;">
			<thead>
				<tr height="30px">
				<th width="60px">No</th>
				<th>Nama Pasien</th>
                <th>Situasi</th>
                <th>Orang yg Hidup Bersama dlm Penyalahgunaan Zat</th>
                <th>Saudara Kandung atau Tiri</th>
                <th>Ayah/Ibu</th>
                <th>Pasangan</th>
                <th>Anak-anak</th>
                <th>Om atau Tante</th>
                <th>Teman</th>
                <th>Lainnya</th>
                <th>Ibu</th>
                <th>Ayah</th>
                <th>Adik/Kakak</th>
                <th>Pasangan</th>
                <th>Keluarga Lain</th>
                <th>Hubungan Keluarga Lain</th>
                <th>Teman Akrab</th>
                <th>Tetangga</th>
                <th>Teman Sekerja</th>
           </tr>
		</thead>
        	<tbody>
				<?php
				$query = mysql_query("SELECT fa.*, ps.*	FROM formulir_asesmen fa INNER JOIN pasien ps ON fa.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($query))
					{
						$no++;
						$id_fasesmen = $row['id_fasesmen'];
						$nm_pasien = $row['nm_pasien'];
						
						$si = $row['situasi'];
						if ($si == "pa") {
							$si = "pasangan dan anak";
						} else if ($si == "ps") {
							$si = "pasangan saja";
						} else if ($si == "as") {
							$si = "anak saja";
						} else if ($si == "ot") {
							$si = "orang tua";
						} else if ($si == "k") {
							$si = "keluarga";
						} else if ($si == "t") {
							$si = "teman";
						} else if ($si == "s") {
							$si = "sendiri";
						} else if ($si == "lt") {
							$si = "lingkungan terkontrol";
						} else {
							$si = "kondisi yang tidak stabil";
						} 
						
						$ozat = $row['o_zat'];
						$kandungtiri = $row['kandung_tiri'];
						$ayahibu = $row['ayah_ibu'];
						$pasangan = $row['pasangan'];
						$omtante = $row['om_tante'];
						$teman = $row['teman'];
						$lainnya = $row['lainnya'];
						$ibu = $row['ibu'];
						$ayah = $row['ayah'];
						$adikkakak = $row['adik_kakak'];
						$psgn = $row['psgn'];
						$anak = $row['anak'];
						$klain = $row['keluarga_lain'];
						$hklain = $row['hb_klain'];
						$takrab = $row['t_akrab'];
						$tetangga = $row['tetangga'];
						$tsekerja = $row['t_kerja'];
						echo "
								<tr align='center' height='30px'>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td>$si</td>
								<td>$ozat</td>
								<td>$kandungtiri</td>
								<td>$ayahibu</td>
								<td>$pasangan</td>
								<td>$omtante</td>
								<td>$teman</td>
								<td>$lainnya</td>
								<td>$ibu</td>
								<td>$ayah</td>
								<td>$adikkakak</td>
								<td>$psgn</td>
								<td>$anak</td>
								<td>$klain</td>
								<td>$hklain</td>
								<td>$takrab</td>
								<td>$tetangga</td>
								<td>$tsekerja</td>
								</tr>";
					}
				?>
           </tbody>

</table>
		  <div class="row-fluid control-group">
            <div class="pull-left span6" action="#">
              <div class=" "></div>
            </div>           
          </div>
      
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->

<!-- SPSIKIATRIS -->
<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Status Psikiatris</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
		<table id="example7" class="table-bordered" class="display" style="margin-bottom:0px;">
			<thead>
				<tr height="30px">
				<th width="60px">No</th>
				<th>Nama Pasien</th>
                <th>Depresi Serius</th>
                <th>Cemas Serius</th>
                <th>Halusinasi</th>
                <th>Sulit Mengingat</th>
                <th>Sukar Mengontrol Prilaku Kasar</th>
                <th>Pikiran Serius untuk Bunuh Diri</th>
                <th>Berusaha untuk Bunuh Diri</th>
                <th>Pengobatan dari Psikiater</th>
           </tr>
		</thead>
        	<tbody>
				<?php
				$query = mysql_query("SELECT fa.*, ps.*	FROM formulir_asesmen fa INNER JOIN pasien ps ON fa.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($query))
					{
						$no++;
						$id_fasesmen = $row['id_fasesmen'];
						$nm_pasien = $row['nm_pasien'];
						$depresi = $row['depresi'];
						$cemas = $row['cemas'];
						$halusinasi = $row['halusinasi'];
						$mengingat = $row['s_mengingat'];
						$mengontrol = $row['s_mengontrol'];
						$pbdiri = $row['p_bdiri'];
						$bbdiri = $row['b_bdiri'];
						$ppsikiater = $row['p_psikiater'];
						echo "
								<tr align='center' height='30px'>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td>$depresi</td>
								<td>$cemas</td>
								<td>$halusinasi</td>
								<td>$mengingat</td>
								<td>$mengontrol</td>
								<td>$pbdiri</td>
								<td>$bbdiri</td>
								<td>$ppsikiater</td>
								</tr>";
					}
				?>
           </tbody>

</table>
		  <div class="row-fluid control-group">
            <div class="pull-left span6" action="#">
              <div class=" "></div>
            </div>           
          </div>
      
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->

<!-- PFISIK -->
<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Pemeriksaan Fisik</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
		<table id="example8" class="table-bordered" class="display" style="margin-bottom:0px;">
			<thead>
				<tr height="30px">
				<th width="60px">No</th>
				<th>Nama Pasien</th>
                <th>Tekanan Darah</th>
                <th>Nadi</th>
                <th>Pernapasan</th>
                <th>Suhu</th>
                <th>Sistem Pencernaan</th>
                <th>Sistem Jantung dan Pembuluh Darah</th>
                <th>Sistem Pernapasan</th>
                <th>Sistem Saraf Pusat</th>
                <th>THT dan Kulit</th>
                <th>Keterangan</th>
                <th>Urine benzodiazepin</th>
                <th>Urine Kanabis</th>
                <th>Urine Opiat</th>
                <th>Urine Amfetamin</th>
                <th>Urine Kokain</th>
                <th>Urine Barbiturat</th>
                <th>Urine Alkohol</th>
           </tr>
		</thead>
        	<tbody>
				<?php
				$query = mysql_query("SELECT fa.*, ps.*	FROM formulir_asesmen fa INNER JOIN pasien ps ON fa.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($query))
					{
						$no++;
						$nm_pasien = $row['nm_pasien'];
						$tdarah = $row['tekanan_darah'];
						$nadi = $row['nadi'];
						$pernapasan = $row['pernapasan'];
						$suhu = $row['suhu'];
						$spencernaan = $row['s_pencernaan'];
						$sjantung = $row['s_jantung'];
						$spernapasan = $row['s_pernapasan'];
						$sspusat = $row['s_spusat'];
						$thtk = $row['tht_kulit'];
						$ktrngn = $row['ktrngn'];
						$ubenzodiazepin = $row['u_benzodiazepin'];
						$ukanabis = $row['u_kanabis'];
						$uopiat = $row['u_opiat'];
						$uamfetamin = $row['u_amfetamin'];
						$ukokain = $row['u_kokain'];
						$ubarbiturat = $row['u_barbiturat'];
						$ualkohol = $row['u_alkohol'];
						echo "
								<tr align='center' height='30px'>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td>$tdarah</td>
								<td>$nadi</td>
								<td>$pernapasan</td>
								<td>$suhu</td>
								<td>$spencernaan</td>
								<td>$sjantung</td>
								<td>$spernapasan</td>
								<td>$sspusat</td>
								<td>$thtk</td>
								<td>$ktrngn</td>
								<td>$ubenzodiazepin</td>
								<td>$ukanabis</td>
								<td>$uopiat</td>
								<td>$uamfetamin</td>
								<td>$ukokain</td>
								<td>$ubarbiturat</td>
								<td>$ualkohol</td>
								</tr>";
					}
				?>
           </tbody>

</table>
		  <div class="row-fluid control-group">
            <div class="pull-left span6" action="#">
              <div class=" "></div>
            </div>           
          </div>
      
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->
