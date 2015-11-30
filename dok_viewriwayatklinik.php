<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Data Riwayat Klinik</span>
         </h2>
      </div><!-- End div class.title -->

		<div class="content top">
        <form method="POST" action="prorklinik.php">
          <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
		<thead>
			<tr>
            	<th>#</th>
				<th>No</th>
                <th>Nama Pasien</th>
                <th>Tanggal Riwayat Klinik</th>
                <th>Diagnosa</th>
                <th>Catatan</th>
                <th>Dokter</th>
                <th class="ms no_sort">Actions</th>
            </tr>
		</thead>
				<tbody>
				<?php
				include "koneksidb.php";
				$no = 0;
				$query = mysql_query("SELECT rk.*, ps.* FROM riwayat_klinik rk INNER JOIN pasien ps ON rk.id_pasien=ps.id_pasien");
						
				while ($row = mysql_fetch_array($query))
					{
						$no++;
						$id_pasien = $row['id_pasien'];
						$id_rklinik = $row['id_rklinik'];
						$nm_pasien = $row['nm_pasien'];
						$tgl_rklinik = $row['tgl_rklinik'];
						$diagnosa = $row['diagnosa'];
						$catatan = $row['catatan'];
						$dokter = $row['dokter'];
						echo "<tr align='center' > 
								<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_rklinik\"></td>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td>$tgl_rklinik</td>
								<td>$diagnosa</td>
								<td>$catatan</td>
								<td>$dokter</td>
								<td><a href=\"?menu=riwayatklinik&action=update&id=$id_pasien\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
								<a href=\"?menu=prorklinik&action=delete&id=$id_rklinik\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\"><i class=\"gicon-remove icon-white\"></i></a></td>
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