<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Kode Pekerjaan</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
        <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<form method="POST" action="prokp.php">
			<thead>
				<tr>
                	<th>Kode Pekerjaan</th>
                	<th>Nama Pekerjaan</th>
                    <th class="ms no_sort">Actions</th>
				</tr>
             </thead>
				<tbody>
				<?php
				include "koneksidb.php";
				
						$query = mysql_query("SELECT * FROM kode_pekerjaan");
						while ($row = mysql_fetch_array($query))
						{
							
							$kp = $row['k_pekerjaan'];
							$nmp = $row['nm_pekerjaan'];
							echo "<tr align='center'> 
									<td>$kp</td>
									<td>$nmp</td>
									<td><a href=\"?menu=kp&action=update&kp=$kp\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=prokp&action=delete&id=$kp\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\"><i class=\"gicon-remove icon-white\"></i></a></td>
									</tr>";
						}
				?>
                </tbody>
</table>
          
          <div class="row-fluid control-group">
            <div class="pull-left span6" action="#">
              <div class=" ">
                </div>
            </div>
          </div>
          </form>
     </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->