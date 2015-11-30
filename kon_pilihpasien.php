<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Pilih Pasien</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
        <form method="POST" action="proadministrasi.php">
          <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
                <tr>
					<th>No</th>
					<th>Nama Pasien</th>
					<th>Pilih</th>
                </tr>
			</thead>
            
            	<tbody>
				<?php
				include "koneksidb.php";
				
						$query = mysql_query("SELECT * FROM pasien");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
							$no++;
							$id = $row['id_pasien'];
							$uname = $row['nm_pasien'];
							echo "<tr align='center'> 
									<td>$no</td>
									<td>$uname</td>
									<td> <a href=\"?menu=konseling&id=$id\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Pilih \" ><i class=\"icon-check\"></i></a></td>
								  </tr>";
						}
				?>
           		</tbody>
				</table>
			<div class="row-fluid control-group">
            
            
          </div>

      </form>
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->
