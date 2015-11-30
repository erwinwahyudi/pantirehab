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
          <i class=" icon-bar-chart"></i> <span>Tabel Status Pemeriksaan Fisik</span>
         </h2>
      </div><!-- End div class.title -->
      <div class="content top">
      
<div class="content">
    <div style="text-align:right;" >                                 
<a href="?menu=per_pilihpasiende"><button class="btn btn-inverse" rel="tooltip" data-placement="top" data-original-title="kembali"><i class="icon-chevron-left"></i></button></a>
	</div>
</div>
		<form method="POST" action="propfisik.php">
		<table id="example" class="table-bordered" class="display" style="margin-bottom:0px;">
		<thead>
			<tr height="30px">
				<th width="50px">#</th>
				<th width="80px">No</th>
				<th>Nama Pasien</th>
                <th>Tekanan Darah</th>
                <th width="80px">Nadi</th>
                <th>Pernapasan</th>
                <th width="80px">Suhu</th>
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
                <th>Actions</th>
            </tr>
		</thead>
        	<tbody>
				<?php
				$query = mysql_query("SELECT pf.*, ps.*	FROM formulir_asesmen pf INNER JOIN pasien ps ON pf.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($query))
					{
						$no++;
						$id_pasien = $row['id_pasien'];
						$id_fasesmen = $row['id_fasesmen'];
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
								<tr align='center'>
								<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_fasesmen\"></td>
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
								<td><a href=\"?menu=forasesmen&id=$id_pasien&action=update&active=8\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a></td>
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