<?php
	include "koneksidb.php";
?>

<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Hubungi</span>
         </h2>
      </div><!-- End div class.title -->

      
      <div class="content top">
        <form method="POST" action="proppanti.php">
          <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
    		<thead>
				<tr>
					<th>#</th>
					<th>No</th>
                    <th>Nama</th>
					<th>Email</th>
					<th>Komentar</th>
                    <th class="ms no_sort">Actions</th>
				</tr>
            </thead>
				<tbody>

				<?php
						$query = mysql_query("SELECT * FROM hubungi");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
							$no++;
							$id_hubungi = $row['id_hubungi'];
							$name = $row['nama'];
							$email = $row['email'];
							$komentar = $row['komentar'];
							echo "<tr align='center'>
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_hubungi\"></td>
									<td>$no</td>
									<td>$name</td>
									<td>$email</td>
									<td>$komentar</td>
									<td><a href=\"?menu=proseshub&action=delete&id=$id_hubungi\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\" ><i class=\"gicon-remove icon-white\"></i></a></td>
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
    	</div><!-- End div class.content top -->
	</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->