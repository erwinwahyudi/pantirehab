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
        		"sScrollX": '2000px',
			});
		} );
	</script>

<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Data Keperawatan Panti Rehabilitasi Napza</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
		<table id="example" class="table-bordered" class="display" style="margin-bottom:0px;">
			<thead>
				<tr height="30px">
					<th width="60px">No</th>
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

							echo "<tr align='center' height='30px'> 
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
							</form></td></tr>";
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
