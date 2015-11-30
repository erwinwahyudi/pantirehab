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
          <i class=" icon-bar-chart"></i> <span>Tabel Status Penggunaan Narkotika</span>
         </h2>
      </div><!-- End div class.title -->
      <div class="content top">
      
<div class="content">
    <div style="text-align:right;" >                                 
<a href="?menu=per_pilihpasiende"><button class="btn btn-inverse" rel="tooltip" data-placement="top" data-original-title="kembali"><i class="icon-chevron-left"></i></button></a>
	</div>
</div>
		<form method="POST" action="prorksosial.php">
        <table id="example" class="table-bordered" class="display" style="margin-bottom:0px;">
		<thead>
			<tr height="30px">
				<th width="50px">#</th>
				<th width="80px">No</th>
				<th>Nama Pasien</th>
                <th width="100px">Situasi</th>
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
                <th>Actions</th>
            </tr>
		</thead>
        	<tbody>
				<?php
				$query = mysql_query("SELECT rk.*, ps.*	FROM formulir_asesmen rk INNER JOIN pasien ps ON rk.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($query))
					{
						$no++;
						$id_pasien = $row['id_pasien'];
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
								<tr align='center'>
								<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_fasesmen\"></td>
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
								<td><a href=\"?menu=forasesmen&id=$id_pasien&action=update&active=5\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a></td>
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
