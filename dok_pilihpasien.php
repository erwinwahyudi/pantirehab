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
				
						$query = mysql_query("SELECT * FROM rekam_medik rek INNER JOIN pasien ps ON rek.id_pasien=ps.id_pasien");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
							$no++;
							$id = $row['id_pasien'];
							$uname = $row['nm_pasien'];
							$idrmedik = $row['id_rmedik'];
							echo "<tr align='center'> 
									<td>$no</td>
									<td>$uname</td>
									<td> <a href=\"?menu=dok_pilihpasien&cekid=$id&idrmedik=$idrmedik\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Pilih \" ><i class=\"icon-check\"></i></a></td>
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
				$idrmedik = $_GET['idrmedik'];
				$querycek = mysql_query("SELECT count( * ) as num FROM riwayat_klinik where id_pasien='".$idcek."' AND id_rmedik='".$idrmedik."' ");
				$cek = mysql_fetch_assoc($querycek);
				$jlh = $cek['num'];
				if ( $jlh >= 1)
				{
					$idcek = $_GET['cekid'];
					$idrmedik = $_GET['idrmedik'];
					?>
						<script language="javascript"> 
							  var x;
							    if (confirm("Data sudah ada. Apakah anda ingin mengubah data?") == true) {
							        x = document.location="hdokter.php?menu=riwayatklinik&action=update&id=<?php echo $idcek; ?>&idrmedik=<?php echo $idrmedik; ?>";
							     } else {
							        x = document.location="hdokter.php?menu=dok_pilihpasien";
							    }
							
		    			</script>
					<?php			
				} else {
					?>
						<script language="javascript"> 
							document.location="hdokter.php?menu=riwayatklinik&id=<?php echo $idcek; ?>&idrmedik=<?php echo $idrmedik; ?>";
						</script>
		    		<?php
				}
			}?>
</div>
