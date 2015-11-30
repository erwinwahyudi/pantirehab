<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Data Administrasi</span>
         </h2>
      </div><!-- End div class.title -->

     <div class="content top">
        <form method="POST" action="proadministrasi.php">
          <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
				<tr>
                	<th>#</th>
                    <th>No</th>
					<th>Nama Pasien</th>
					<th>Nama Pembayar</th>
					<th>Tanggal Transaksi</th>
					<th>Total</th>
          <th class="ms no_sort">Actions</th>
   			</tr>
            </thead>
				<tbody>
				<?php
				include "koneksidb.php";
				
						$query = mysql_query("SELECT adm.*, ps.* FROM administrasi adm INNER JOIN pasien ps ON adm.id_pasien = ps.id_pasien");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
							$no++;
							$id_administrasi = $row['id_administrasi'];
							$id_pasien = $row['id_pasien'];
							$nm_pasien = $row['nm_pasien'];
							$nm_pembayar = $row['nm_pembayar'];
							$tgl_transaksi = $row['tgl_transaksi'];
							$total = $row['total'];
							echo "<tr align='center'>
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_administrasi\"></td> 
									<td>$no</td>
									<td>$nm_pasien</td>
									<td>$nm_pembayar</td>
									<td>$tgl_transaksi</td>
									<td>$total</td>
									<td><a href=\"?menu=administrasi&action=update&id=$id_pasien\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=proadministrasi&action=delete&id=$id_administrasi\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\" ><i class=\"gicon-remove icon-white\"></i></a></td>
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
