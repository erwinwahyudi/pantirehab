<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Data Kebutuhan Pasien</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
      <form method="POST" action="prokpasien.php">
        <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
				<tr>
                	<th>#</th>
                    <th>No</th>
					<th>Nama Barang</th>
					<th>Jumlah Barang</th>
                    <th class="ms no_sort">Actions</th>
   				</tr>
            </thead>
				<tbody>
				<?php
				include "koneksidb.php";
				
						$query = mysql_query("SELECT * FROM kebutuhan_pasien");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
							$no++;
							$id_kpasien = $row['id_kpasien'];
							$nb = $row['nm_barang'];
							$jb = $row['j_barang'];
							echo "<tr align='center'> 
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_kpasien\"></td>
									<td>$no</td>
									<td>$nb</td>
									<td>$jb</td>	
									<td><a href=\"?menu=kpasien&action=update&id=$id_kpasien\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=prokpasien&action=delete&id=$id_kpasien\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\" ><i class=\"gicon-remove icon-white\"></i></a></td>
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
