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
        		"sScrollX": '3000px',
			});
		} );
	</script>

<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Data Perkembangan</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
      <form method="POST" action="properkembangan.php">
		<table id="example" class="table-bordered" class="display" style="margin-bottom:0px;">
			<thead>
				<tr height="30px">
                	<th width="40px">#</th>
                    <th width="60px">No</th>
					<th>Nama Pasien</th>
					<th>Ruangan</th>
					<th>Tanggal</th>
                    <th>Jam</th>
                    <th>Mhs_percaya</th>
                    <th>M_PK</th>
                    <th>Mpk_cfa</th>
                    <th>Mpm_ja</th>
                    <th>Mengevaluasi_ja</th>
                    <th>Mpk_cfb</th>
                    <th>Mpm_jb</th>
                    <th>Mengevaluasi_jb</th>
                    <th>Mpk_cv</th>
                    <th>Mpm_jc</th>
                    <th>Mengevaluasi_jc</th>
                    <th>Mpk_cs</th>
                    <th>Mpm_jd</th>
                    <th>Mengevaluasi_jd</th>
                    <th>Mpk_mo</th>
                    <th>Mpm_je</th>
                    <th class="ms no_sort">Actions</th>
   				</tr>
            </thead>
                <tbody>
				<?php
				include "koneksidb.php";
				
						$query = mysql_query("SELECT per.*, ps.* FROM perkembangan per INNER JOIN pasien ps ON per.id_pasien=ps.id_pasien");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
							$no++;
							$id_perkembangan = $row['id_perkembangan'];
							$id_pasien = $row['id_pasien'];
							$nm_pasien=$row['nm_pasien'];
							$ruangan = $row['ruangan'];
							$tgl = $row['tgl_perkembangan'];
							$jam = $row['jam_perkembangan'];

							$mhsp = $row['mhs_percaya'];
								if ($mhsp == "1") {	$mhsp = "ya"; } else { $mhsp = "tidak"; } 
							$mpk = $row['m_pk'];
								if ($mpk == "1") {	$mpk = "ya"; } else { $mpk = "tidak"; } 
							$mpkcfa = $row['mpk_cfa'];
								if ($mpkcfa == "1") { $mpkcfa = "ya"; } else { $mpkcfa = "tidak"; } 
							$mpmja = $row['mpm_ja'];
								if ($mpmja == "1") { $mpmja = "ya"; } else { $mpmja = "tidak"; } 
							$mja = $row['mengevaluasi_ja'];
								if ($mja == "1") {	$mja = "ya"; } else { $mja = "tidak"; } 
							$mpkcfb = $row['mpk_cfb'];
								if ($mpkcfb == "1") { $mpkcfb = "ya"; } else { $mpkcfb = "tidak"; } 
							$mpmjb = $row['mpm_jb'];
								if ($mpmjb == "1") { $mpmjb = "ya"; } else { $mpmjb = "tidak"; } 
							$mjb = $row['mengevaluasi_jb'];
								if ($mjb == "1") {	$mjb = "ya"; } else { $mjb = "tidak"; } 
							$mpkcv = $row['mpk_cv'];
								if ($mpkcv == "1") { $mpkcv = "ya"; } else { $mpkcv = "tidak"; } 
							$mpmjc = $row['mpm_jc'];
								if ($mpmjc == "1") { $mpmjc = "ya"; } else { $mpmjc = "tidak"; } 
							$mjc = $row['mengevaluasi_jc']; 
								if ($mjc == "1") {	$mjc = "ya"; } else { $mjc = "tidak"; } 
							$mpkcs = $row['mpk_cs'];
								if ($mpkcs == "1") { $mpkcs = "ya"; } else { $mpkcs = "tidak"; } 
							$mpmjd = $row['mpm_jd'];
								if ($mpmjd == "1") { $mpmjd = "ya"; } else { $mpmjd = "tidak"; } 
							$mjd = $row ['mengevaluasi_jd'];
								if ($mjd == "1") {	$mjd = "ya"; } else { $mjd = "tidak"; } 
							$mpkmo = $row ['mpk_mo'];
								if ($mpkmo == "1") { $mpkmo = "ya"; } else { $mpkmo = "tidak"; } 
							$mpmje = $row ['mpm_je'];
								if ($mpmje == "1") { $mpmje = "ya"; } else { $mpmje = "tidak"; } 

							echo "<tr align='center'>
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_perkembangan\"></td> 									
									<td>$no</td>
									<td>$nm_pasien</td>
									<td>$ruangan</td>
									<td>$tgl</td>
									<td>$jam</td>
									<td>$mhsp</td>
									<td>$mpk</td>
									<td>$mpkcfa</td>
									<td>$mpmja</td>
									<td>$mja</td>
									<td>$mpkcfb</td>
									<td>$mpmjb</td>
									<td>$mjb</td>
									<td>$mpkcv</td>
									<td>$mpmjc</td>
									<td>$mjc</td>
									<td>$mpkcs</td>
									<td>$mpmjd</td>
									<td>$mjd</td>
									<td>$mpkmo</td>
									<td>$mpmje</td>
									<td><a href=\"?menu=perkembangan&action=update&id=$id_pasien&idper=$id_perkembangan\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=properkembangan&action=delete&id=$id_perkembangan\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\"><i class=\"gicon-remove icon-white\"></i></a></td>
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
