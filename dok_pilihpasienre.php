<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Daftar Pasien Sembuh</span>
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

					/* include "koneksidb.php";
				
						$query = mysql_query("SELECT pr.*, ps.* FROM perkembangan pr INNER JOIN pasien ps ON pr.id_pasien=ps.id_pasien GROUP BY pr.id_pasien");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
							$no++;
							$id = $row['id_pasien'];
							$uname = $row['nm_pasien'];
							echo "<tr align='center'> 
									<td>$no</td>
									<td>$uname</td>
									<td> <a href=\"?menu=rekomendasi&id=$id\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Pilih \" ><i class=\"icon-check\"></i></a></td>
									</tr>";
						}
				*/
						include "koneksidb.php";
				
						$query = mysql_query("SELECT ps.*, pr.*, kp.* FROM pasien ps, perkembangan pr, keperawatan kp WHERE ps.id_pasien=(pr.id_pasien=kp.id_pasien) AND kp.mhs_percaya='1' AND kp.m_halusinasi='1' AND kp.mpm_ha='1' AND kp.mpm_ja='1' AND kp.mengevaluasi_ja='1' AND kp.mpm_hb='1' AND kp.mpm_jb='1' AND kp.mengevaluasi_jb='1' AND kp.mpm_jc='1' AND kp.mpm_hc='1' AND kp.mengevaluasi_jc='1' AND kp.mpm_hd='1' AND kp.mpm_jd='1'
												AND pr.mhs_percaya='1' AND pr.m_pk='1' AND pr.mpk_cfa='1' AND pr.mpm_ja='1' AND pr.mengevaluasi_ja='1' AND pr.mpk_cfb='1' AND pr.mpm_jb='1' AND pr.mengevaluasi_jb='1' AND pr.mpk_cv='1' AND pr.mpm_jc='1' AND pr.mengevaluasi_jc='1' AND pr.mpk_cs='1' AND pr.mpm_jd='1' AND pr.mengevaluasi_jd='1' AND pr.mpk_mo='1' AND pr.mpm_je='1' ");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
							$no++;
							$id = $row['id_pasien'];
							$uname = $row['nm_pasien'];
							echo "<tr align='center'> 
									<td>$no</td>
									<td>$uname</td>
									<td> <a href=\"?menu=rekomendasi&id=$id\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Pilih \" ><i class=\"icon-check\"></i></a></td>
									</tr>";
						}
				?>
            </tbody>
		</table>
			
			<div class="row-fluid control-group">
            </div>
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div>





<div class="row-fluid">
 <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Daftar Pasien Belum Sembuh</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
          <table id="datatable_example1" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">		
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
				
						$query = mysql_query("SELECT ps.*, pr.*, kp.* FROM pasien ps, perkembangan pr, keperawatan kp WHERE ps.id_pasien=(pr.id_pasien=kp.id_pasien) AND kp.mhs_percaya='1' AND kp.m_halusinasi='1' AND kp.mpm_ha='1' AND kp.mpm_ja='1' AND kp.mengevaluasi_ja='1' AND kp.mpm_hb='1' AND kp.mpm_jb='1' AND kp.mengevaluasi_jb='1' AND kp.mpm_jc='1' AND kp.mpm_hc='1' AND kp.mengevaluasi_jc='1' AND kp.mpm_hd='1' AND kp.mpm_jd='1'
												AND pr.mhs_percaya='1' AND pr.m_pk='1' AND pr.mpk_cfa='1' AND pr.mpm_ja='1' AND pr.mengevaluasi_ja='1' AND pr.mpk_cfb='1' AND pr.mpm_jb='1' AND pr.mengevaluasi_jb='1' AND pr.mpk_cv='1' AND pr.mpm_jc='1' AND pr.mengevaluasi_jc='1' AND pr.mpk_cs='1' AND pr.mpm_jd='1' AND pr.mengevaluasi_jd='1' AND pr.mpk_mo='1' AND pr.mpm_je='1' ");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
														
							$id = $row['id_pasien'];
							
							//$qunion = mysql_query("SELECT id_pasien as id FROM pasien WHERE id_pasien!='$id' UNION SELECT id_pasien FROM perkembangan WHERE id_pasien!='$id' UNION SELECT id_pasien FROM keperawatan WHERE id_pasien!='$id'");
							$qps = mysql_query("SELECT * FROM pasien WHERE id_pasien!='$id'");
							while ($row = mysql_fetch_array($qps))
							{	
								$no++;
								$idp = $row['id_pasien'];

								$uname = $row['nm_pasien'];
								echo "<tr align='center'> 
										<td>$no</td>
										<td>$uname</td>
										<td> <a href=\"?menu=rekomendasi&id=$idp\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Pilih \" ><i class=\"icon-check\"></i></a></td>
										</tr>";

								//$qper = mysql_query("SELECT * FROM perkembangan WHERE")
								
							}
						}
				?>
            </tbody>
</table>
			
			<div class="row-fluid control-group">
            
            
          </div>

      
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->
