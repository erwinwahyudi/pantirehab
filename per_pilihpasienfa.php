<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Pilih Pasien</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
        <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
				<tr>
					<th>Id pasien</th>
					<th>Nama Pasien</th>
					<th>Pilih</th>
                </tr>
            </thead>
				
                <tbody>

				<?php

				include "koneksidb.php";
				
						$query = mysql_query("SELECT * FROM pasien");
						
						while ($row = mysql_fetch_array($query))
						{
							$id = $row['id_pasien'];
							$uname = $row['nm_pasien'];
							echo "<tr align='center'> 
									<td>$id</td>
									<td>$uname</td>
									<td> <a href=\"?menu=forasesmen&id=$id&active=def\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Pilih \" ><i class=\"icon-check\"></i></a></td>
								  </tr>";
						}
				?>
             	</tbody>
                
			</table>		
			<div class="row-fluid control-group">
            </div>

      
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->
