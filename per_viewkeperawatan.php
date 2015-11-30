	<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#example').dataTable({
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
          <i class=" icon-bar-chart"></i> <span>Data Keperawatan</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
		<form method="POST" action="prokeperawatan.php">
			<table id="example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
  				<tr>
                	<th>&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;</th>
                    <th>No</th>
					<th>Nama Pasien</th>
					<th>Ruangan</th>
					<th>Tanggal</th>
                    <th>Jam</th>
                    <th>Mhs_percaya</th>
                    <th>M_halusinasi</th>
                    <th>Mpm_ha</th>
                    <th>Mpm_ja</th>
                    <th>Mengevaluasi_ja</th>
                    <th>Mpm_hb</th>
                    <th>Mpm_jb</th>
                    <th>Mengevaluasi_jb</th>
                    <th>Mpm_hc</th>
                    <th>Mpm_jc</th>
                    <th>Mengevaluasi_jc</th>
                    <th>Mpm_hd</th>
                    <th>Mpm_jd</th>
                    <th class="ms no_sort">Actions</th>
   				</tr>
             </thead>
				<tbody>
				<?php
				include "koneksidb.php";
				
						$query = mysql_query("SELECT kep.*, ps.* FROM keperawatan kep INNER JOIN pasien ps ON kep.id_pasien=ps.id_pasien");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
							$no++;
							$id_keperawatan = $row['id_keperawatan'];
							$id_pasien = $row['id_pasien'];
							$nm_pasien=$row['nm_pasien'];
							$ruangan = $row['ruangan'];
							$tgl = $row['tgl_keperawatan'];
							$jam = $row['jam_keperawatan'];

							$mhsp = $row['mhs_percaya'];
								if ($mhsp == "1") {	$mhsp = "ya"; } else { $mhsp = "tidak"; } 
							$mhal = $row['m_halusinasi'];
								if ($mhal == "1") {	$mhal = "ya"; } else { $mhal = "tidak"; }
							$mpmha = $row['mpm_ha'];
								if ($mpmha == "1") { $mpmha = "ya"; } else { $mpmha = "tidak"; }
							$mpmja = $row['mpm_ja'];
								if ($mpmja == "1") { $mpmja = "ya"; } else { $mpmja = "tidak"; }
							$evalja = $row['mengevaluasi_ja'];
								if ($evalja == "1") { $evalja = "ya"; } else { $evalja = "tidak"; }
							$mpmhb = $row['mpm_hb'];
								if ($mpmhb == "1") { $mpmhb = "ya"; } else { $mpmhb = "tidak"; }
							$mpmjb = $row['mpm_jb'];
								if ($mpmjb == "1") { $mpmjb = "ya"; } else { $mpmjb = "tidak"; }	
							$evaljb = $row['mengevaluasi_jb'];
								if ($evaljb == "1") { $evaljb = "ya"; } else { $evaljb = "tidak"; }
							$mpmhc = $row['mpm_hc'];
								if ($mpmhc == "1") { $mpmhc = "ya"; } else { $mpmhc = "tidak"; }	
							$mpmjc = $row['mpm_jc'];
								if ($mpmjc == "1") { $mpmjc = "ya"; } else { $mpmjc = "tidak"; }
							$evaljc = $row['mengevaluasi_jc']; 
								if ($evaljc == "1") { $evaljc = "ya"; } else { $evaljc = "tidak"; }
							$mpmhd = $row['mpm_hd'];
								if ($mpmhd == "1") { $mpmhd = "ya"; } else { $mpmhd = "tidak"; }
							$mpmjd = $row['mpm_jd'];
								if ($mpmjd == "1") { $mpmjd = "ya"; } else { $mpmjd = "tidak"; }
							echo "<tr align='center'> 
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_keperawatan\"></td>
									<td>$no</td>
									<td>$nm_pasien</td>
									<td>$ruangan</td>
									<td>$tgl</td>
									<td>$jam</td>
									<td>$mhsp</td>
									<td>$mhal</td>
									<td>$mpmha</td>
									<td>$mpmja</td>
									<td>$evalja</td>
									<td>$mpmhb</td>
									<td>$mpmjb</td>
									<td>$evaljb</td>
									<td>$mpmhc</td>
									<td>$mpmjc</td>
									<td>$evaljc</td> 
									<td>$mpmhd</td> 
									<td>$mpmjd</td>
									<td><a href=\"?menu=keperawatan&action=update&idkep=$id_keperawatan&id=$id_pasien\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=prokeperawatan&action=delete&id=$id_keperawatan\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\"><i class=\"gicon-remove icon-white\"></i></a></td>
								</tr>";
						}
				?>
                </tbody>
</table>

		          <div class="row-fluid control-group">
            <div class="pull-left span6" action="#">
              <div class=" ">
              <button class="btn inline" value="deletemulti" name="action" type="submit" onclick="return confirm('Apakah Anda yakin akan menghapus data?')">Hapus</button>
              </div>
            </div>
            </div>
            </form>
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->
