<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Kode Pekerjaan</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
        <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<form method="POST" action="prokcp.php">
			<thead>
				<tr>
                	<th>Kode Cara Penggunaan</th>
                	<th>Cara Penggunaan</th>
                    <th class="ms no_sort">Actions</th>
				</tr>
             </thead>
				<tbody>
				<?php
				include "koneksidb.php";
				
						$query = mysql_query("SELECT * FROM cara_penggunaan");
						while ($row = mysql_fetch_array($query))
						{
							
							$kcp = $row['k_cp'];
							$cp = $row['cp'];
							echo "<tr align='center'> 
									<td>$kcp</td>
									<td>$cp</td>
									<td><a href=\"?menu=kcp&action=update&kcp=$kcp\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \" ><i class=\"gicon-edit\"></i></a>
									<a href=\"?menu=prokcp&action=delete&id=$kcp\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\"><i class=\"gicon-remove icon-white\"></i></a></td>
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