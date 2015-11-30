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
          <i class=" icon-bar-chart"></i> <span>Tabel Data Pasien</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
        <form method="POST" action="propasien.php">
          <table id="example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
		<thead>
		<tr width:"3000px">
        		<th >&nbsp;&nbsp;&nbsp;&nbsp;#&nbsp;</th>
				<th>No Rekam Medik</th>
				<th>Nama Pasien</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Keluar</th>
                <th>TTL</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Pendidikan</th>
              	<th>Pekerjaan</th>
                <th>Status</th>
                <th>Status Perkawinan</th>
                <th>Penyakit</th>
              	<th>Alamat Pasien</th>
                <th>No Hp Pasien</th>
                <th>Bangsa/Suku</th>
                <th>Jenis</th>
                <th>Keterangan</th>
                <th class="ms no_sort">Actions</th>
	    </tr>
	</thead>
			<tbody>
			<?php
				include "koneksidb.php";
				
						$query = mysql_query("SELECT * FROM pasien");
						
						while ($row = mysql_fetch_array($query))
						{
							
							$id_pasien = $row['id_pasien'];
							$norm = $row['no_rmedik'];
							$nmpasien = $row['nm_pasien'];
							$tglmsk = $row['tgl_masuk'];
							$tglklr = $row['tgl_keluar'];
							$ttl = $row['ttl_pasien'];
							$usia = $row['usia'];
							$jk = $row['j_kelamin'];
							$agama = $row['agama'];
							$pendidikan = $row['pendidikan'];
							$pekerjaan = $row['pekerjaan'];
							$pasien = $row['status'];
							$status = $row['s_perkawinan'];
							$penyakit = $row['hiv_aids'];
							$aps = $row['alamat_pasien'];
							$nohpps = $row['nohp_pasien'];
							$bs = $row['bangsa_suku'];
							$jns = $row['jenis'];
							$keterangan = $row['keterangan'];
							echo "<tr align='center'> 
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_pasien\"></td>
									<td>$norm</td>
									<td>$nmpasien</td>
									<td>$tglmsk</td>
									<td>$tglklr</td>
									<td>$ttl</td>
									<td>$usia</td>
									<td>$jk</td>
									<td>$agama</td>
									<td>$pendidikan</td>
									<td>$pekerjaan</td>
									<td>$pasien</td>
									<td>$status</td>
									<td>$penyakit</td>
									<td>$aps</td>
									<td>$nohpps</td>
									<td>$bs</td>
									<td>$jns</td>
									<td>$keterangan</td>
									<td><a href=\"?menu=pasien&action=update&id=$id_pasien\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=propasien&action=delete&id=$id_pasien\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\"><i class=\"gicon-remove icon-white\"></i></a></td>
								</tr>";						}
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
