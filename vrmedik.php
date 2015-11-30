
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
          <i class=" icon-bar-chart"></i> <span>Data Rekam Medik Panti Rehabilitasi Napza</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
		<table id="example" class="table-bordered" class="display" style="margin-bottom:0px;">
			<thead>
				<tr height="30px">
					<th>No Rekam Medik</th>
					<th>Nama Ayah</th>
					<th>Nama Ibu</th>
                    <th>Nama Suami/Istri</th>
                    <th>Nama Yang Dihubungi</th>
                    <th>Hubungan</th>
                    <th>Alamat</th>
                    <th>No Handphone</th>
                    <th>Dokter Pengirim</th>
                    <th>Alamat Pengirim</th>
                    <th>Perubahan Alamat</th>
                    <th>Dokter Penanggung Jawab</th>
   				</tr>
			</thead>
            	<tbody>
				<?php
				include "koneksidb.php";
						$query = mysql_query("SELECT rm.*, ps.* FROM rekam_medik rm INNER JOIN pasien ps ON rm.id_pasien=ps.id_pasien");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
							
							$id_rmedik = $row['id_rmedik'];
							$id_pasien = $row['id_pasien'];
							$norm = $row['no_rmedik'];
							$nma = $row['nm_ayah'];
							$nmi = $row['nm_ibu'];
							$nmsi = $row['nm_si'];
							$nmp = $row['nm_dihubungi'];
							$hb = $row['hubungan'];
							$ap = $row['alamat'];
							$nohpp = $row['no_hp'];
							$dpr = $row['dokter_pengirim'];
							$apr = $row['alamat_pengirim'];
							$pa = $row['perubahan_alamat'];
							$dpj = $row['dr_pjawab'];
							echo "<tr align='center' height='30px'> 
									<td>$norm</td>
									<td>$nma</td>
									<td>$nmi</td>
									<td>$nmsi</td>
									<td>$nmp</td>
									<td>$hb</td>
									<td>$ap</td>
									<td>$nohpp</td>
									<td>$dpr</td>
									<td>$apr</td>
									<td>$pa</td>
									<td>$dpj</td>
							</form></td></tr>";
						}
				?>
                </tbody>
</table>
		  <div class="row-fluid control-group">
            <div class="pull-left span6" action="#">
             </div>           
          </div>
      
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->