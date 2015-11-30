<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Data Konseling Panti Rehabilitasi Napza Kota Pontianak</span>
         </h2>
      </div><!-- End div class.title -->

		<div class="content top">
          <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
				<tr>
                	<th>No</th>
                	<th>Nama Pasien</th>
					<th>Tanggal Konseling</th>
					<th>Jam Konseling</th>
                    <th>Catatan</th>
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
									<td>$no</td> 
									<td>$nm_pasien</td>
									<td>$tgl_konseling</td>
									<td>$jam_konseling</td>
									<td>$catatan</td>
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