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
        		"sScrollX": '5000px',
			});
		} );
	</script>

<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Status Penggunaan Narkotika</span>
         </h2>
      </div><!-- End div class.title -->
     <div class="content top">
     
<div class="content">
    <div style="text-align:right;" >                                 
<a href="?menu=per_pilihpasiende"><button class="btn btn-inverse" rel="tooltip" data-placement="top" data-original-title="kembali"><i class="icon-chevron-left"></i></button></a>
	</div>
</div>
		<form method="POST" action="prospnarkotika.php">
		<table id="example" class="table-bordered" class="display" style="margin-bottom:0px;">
		<thead>
			<tr height="30px">
				<th width="50px">#</th>
				<th width="80px">No</th>
				<th>Nama Pasien</th>
                <th width="100px">Alkohol</th>
                <th>Cara Pakai Alkohol</th>
                <th width="100px">Heroin</th>
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
                <th>Actions</th>
            </tr>
		</thead>
        	<tbody>
				<?php
				$query = mysql_query("SELECT spn.*, ps.*	FROM formulir_asesmen spn INNER JOIN pasien ps ON spn.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($query))
					{
						$no++;
						$id_pasien = $row['id_pasien'];
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
								<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_fasesmen\" width=\"5px\"></td>
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
								<td><a href=\"?menu=forasesmen&id=$id_pasien&action=update&active=3\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a></td>
								</tr>";
					}
				?>
           </tbody>
		   </table>
		  <div class="row-fluid control-group">
            <div class="pull-left span6" action="#">
              <div class=" ">
              <button class="btn inline" value="deletemulti" name="action" type="submit" onclick="return confirm('Apakah Anda yakin akan menghapus data?')">Delete</button>
              </div>
            </div>           
          </div>
      </form>
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->
