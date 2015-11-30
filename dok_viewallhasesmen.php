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
					<th>No</th>
					<th>Nama Pasien</th>
					<th>Pilih</th>
				</tr>
		</thead>
        	<tbody>		
				<?php
				include "koneksidb.php";
				
						$query = mysql_query("SELECT ha.*, ps.* FROM hasil_asesmen ha INNER JOIN pasien ps ON ha.id_pasien=ps.id_pasien");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
							$no++;
							$id = $row['id_pasien'];
							$uname = $row['nm_pasien'];
							$idhasesmen = $row['id_hasesmen'];
							echo "<tr align='center'> 
									<td>$no</td>
									<td>$uname</td>
									<td> <a href=\"?menu=dok_viewhasesmen&id=$id&idhasesmen=$idhasesmen\" class=\"btn btn-small\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Lihat Data \" ><i class=\"icon-check\"></i></a>
									<a href=\"?menu=hasesmen&action=update&id=$id&idhasesmen=$idhasesmen\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=prohs&action=delete&id=$id&idhasesmen=$idhasesmen\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\"><i class=\"gicon-remove icon-white\"></i></a></td>
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
