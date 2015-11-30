<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Data Konseling</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
      <form method="POST" action="prokonseling.php">
        <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
				<tr>
          <th>#</th>
          <th>No</th>
					<th>Nama Pasien</th>
					<th>Tanggal Konseling</th>
					<th>Jam Konseling</th>
          			<th>Catatan</th>
          <th class="ms no_sort">Actions</th>
   				</tr>
           	</thead>
                <tbody>
				<?php
				include "koneksidb.php";
				
						$query = mysql_query("SELECT kon.*, ps.* FROM konseling kon INNER JOIN pasien ps ON kon.id_pasien=ps.id_pasien");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
							$no++;
							$id_konseling = $row['id_konseling'];
							$id_pasien = $row['id_pasien'];
							$nm_pasien=$row['nm_pasien'];
							$tgl_konseling = $row['tgl_konseling'];
							$jam_konseling = $row['jam_konseling'];
							$catatan = $row['catatan'];
							echo "<tr align='center'> 
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_konseling\"></td>
									<td>$no</td>
									<td>$nm_pasien</td>
									<td>$tgl_konseling</td>
									<td>$jam_konseling</td>
									<td>$catatan</td>
									<td><a href=\"?menu=konseling&action=update&id=$id_konseling\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=prokonseling&action=delete&id=$id_konseling\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\"><i class=\"gicon-remove icon-white\"></i></a></td>
									
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
