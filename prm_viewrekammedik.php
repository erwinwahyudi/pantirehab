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
          <i class=" icon-bar-chart"></i> <span>Tabel Data Rekam Medik</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
      <form method="POST" action="prormedik.php">
		<table id="example" class="table-bordered" class="display" style="margin-bottom:0px;">
			<thead>
				<tr height="30px">
                	<th width="40px">#</th>
                     <th>Id pasien</th>
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
                <th class="ms no_sort">Actions</th>
	    	</tr>
		</thead>
				<tbody>
				<?php
				include "koneksidb.php";
				
				$query = mysql_query("SELECT * FROM rekam_medik");
						
				while ($row = mysql_fetch_array($query))
					{
							
						$id_rmedik = $row['id_rmedik'];
						$id_pasien = $row['id_pasien'];
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
								<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_rmedik\"></td>
								<td>$id_pasien</td>
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
								<td><a href=\"?menu=rekammedik&action=update&id=$id_pasien\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
									<a href=\"?menu=prormedik&action=delete&id=$id_rmedik\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\"><i class=\"gicon-remove icon-white\"></i></a></td>
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