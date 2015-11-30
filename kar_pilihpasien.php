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
									<td> <a href=\"?menu=kar_pilihpasien&cekid=$id\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" pilih \" ><i class=\"icon-check\"></i></a></td>
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

			<?php
			if(isset($_GET['cekid']))
			{

				$idcek = $_GET['cekid'];
				$querycek = mysql_query("SELECT count( * ) as num FROM administrasi where id_pasien='".$idcek."' ");
				$cek = mysql_fetch_assoc($querycek);
				$jlh = $cek['num'];
				if ( $jlh >= 1)
				{
					$idcek = $_GET['cekid'];
			?>
						<script language="javascript"> 
							  var x;
							    if (confirm("Data sudah ada. Apakah anda ingin mengubah data?") == true) {
							        x = document.location="hkaryawan.php?menu=administrasi&action=update&id=<?php echo $idcek; ?>";
							     } else {
							        x = document.location="hkaryawan.php?menu=kar_pilihpasien";
							    }
							
		    			</script>
					<?php			
				} else {
					?>
						<script language="javascript"> 
							document.location="hkaryawan.php?menu=administrasi&id=<?php echo $idcek; ?>";
						</script>
		    		<?php
				}
			}	
					?>
