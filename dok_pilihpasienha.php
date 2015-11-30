<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Pilih Pasien</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
          <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">		<thead>
				<tr>
					<th>No</th>
					<th>Nama Pasien</th>
					<th>Pilih</th>
				</tr>
		</thead>
        	<tbody>		
				<?php
				include "koneksidb.php";
				
						$query = mysql_query("SELECT ha.*, ps.* FROM hasil_asesmen ha RIGHT OUTER JOIN pasien ps ON ha.id_pasien=ps.id_pasien");
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
									<td> <a href=\"?menu=dok_pilihpasienha&cekid=$id&idhasesmen=$idhasesmen\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Pilih \" ><i class=\"icon-check\"></i></a></td>
									</tr>";
						}
				?>
            </tbody>
</table>
			<?php
			if(isset($_GET['cekid']))
			{

				$idcek = $_GET['cekid'];
				$idhasesmen = $_GET['idhasesmen'];
				$querycek = mysql_query("SELECT count( * ) as num FROM hasil_asesmen where id_pasien='".$idcek."' AND id_hasesmen='".$idhasesmen."' ");
				$cek = mysql_fetch_assoc($querycek);
				$jlh = $cek['num'];
				if ( $jlh >= 1)
				{
					$idcek = $_GET['cekid'];
					$idhasesmen = $_GET['idhasesmen'];
					?>
						<script language="javascript"> 
							  var x;
							    if (confirm("Data sudah ada. Apakah anda ingin mengubah data?") == true) {
							        x = document.location="hdokter.php?menu=hasesmen&action=update&id=<?php echo $idcek; ?>&idhasesmen=<?php echo $idhasesmen; ?>";
							     } else {
							        x = document.location="hdokter.php?menu=dok_pilihpasienha";
							    }
							
		    			</script>
					<?php			
				} else {
					?>
						<script language="javascript"> 
							document.location="hdokter.php?menu=hasesmen&id=<?php echo $idcek; ?>";
						</script>
		    		<?php
				}
			}?>
			<div class="row-fluid control-group">
            
            
          </div>

      
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->
