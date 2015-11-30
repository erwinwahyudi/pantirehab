<?php
include "koneksidb.php";
	
	if(isset($_GET['action']))
	{				
		if($_GET['action'] == "update")
			{
				$id_jdokter = $_GET['id'];
						
				$query = mysql_query("select * from jadwal_dokter where id_jdokter='$id_jdokter'");
				$row = mysql_fetch_array($query);
?>
				<div class="span7">
		        <div class="box gradient">
		          <div class="title">
		            <h3>
		            <i class="icon-book"></i><span>Edit Jadwal Dokter</span>
		            </h3>
		          </div>

		          <div class="content">
		          <form class="form-horizontal row-fluid" action="projdokter.php" method="POST">

		          <input type="hidden" name="id_jdokter" value="<?php echo $row['id_jdokter']; ?>">

		          	  <div class="form-row control-group row-fluid">
		                <label class="control-label span3" for="normal-field">Tanggal Jadwal :</label>
		                <div class="controls span5">
		                  <input type="text" class="row-fluid" name="tgljd" id="datepicker" value="<?php echo $row['tgl_jdokter']; ?>" required />
		                </div>
		              </div>

					<div class="form-row control-group row-fluid">
		            <label class="control-label span3" for="normal-field">Minggu</label>
		            <div class="controls span2">
		            <select name="minggu" class="row-fluid" id="default-select"/>
                  	<?php 
					$usia = $row['minggu'];
					//echo $minggu;
					for ($i=1; $i <= 5 ; $i=$i+1) { 
                  		if($i==$usia){
							echo "<option value='".$i."' selected>".$i."</option>";
						} else {
                  			echo "<option value='".$i."'>".$i."</option>";
						}
					}
                  	?>
                  	</select>
                    </div>
		            </div>
                      
		              <div class="form-row control-group row-fluid">
		                <label class="control-label span3" for="normal-field">Dr. Umum :</label>
		                <div class="controls span5">
		                  <input type="text" id="normal-field" class="row-fluid" name="dru" value="<?php echo $row['dr_umum']; ?>" required />
		                </div>
		              </div>

		         	  <div class="form-row control-group row-fluid">
		                <label class="control-label span3" for="normal-field">Dr. Konsulen :</label>
		                <div class="controls span5">
		                  <input type="text" id="normal-field" class="row-fluid" name="drk" value="<?php echo $row['dr_konsulen']; ?>" required />
		                </div>
		              </div>

		              <div class="form-row control-group row-fluid">
		                <label class="control-label span3" for="normal-field">Keterangan :</label>
		                <div class="controls span5">
		                  <input type="text" id="normal-field" class="row-fluid" name="ket" value="<?php echo $row['ket']; ?>" required />
		                </div>
		              </div>

		          	  <div class="form-actions row-fluid">
		                <div class="span7 offset3">
		                  <button type="submit" class="btn btn-primary" name="action" value="Update">Edit</button>
		                  <button type="reset" class="btn btn-secondary" value="Batal">Batal</button>
		                </div>
		              </div>

		            </form>
		              </div>
		              </div>
		              </div>
		            </div>
		          </div>
           <?php
			}
	}
	else { ?>

		<div class="span7">
		        <div class="box gradient">
		          <div class="title">
		            <h3>
		            <i class="icon-book"></i><span>Tambah Jadwal Dokter</span>
		            </h3>
		          </div>
		          <div class="content">
		          <form class="form-horizontal row-fluid" action="projdokter.php" method="POST">

		           	  <div class="form-row control-group row-fluid">
		                <label class="control-label span3" for="normal-field">Tanggal Jadwal :</label>
		                <div class="controls span5">
		                  <input type="text" class="row-fluid" name="tgljd" id="datepicker" required />
		                </div>
		              </div>

					  <div class="form-row control-group row-fluid">
		                <label class="control-label span3" for="normal-field">Minggu</label>
		                <div class="controls span2">
		                <select name="minggu" class="row-fluid" id="default-select">
                  		<?php 
                  		for ($i=1; $i <= 5 ; $i=$i+1) { 
							echo $i."<br>";
							echo "<option value='".$i."'>".$i."</option>";

                  		}
                  		?>
                  		</select>
                  		</div>
		              </div>

		              <div class="form-row control-group row-fluid">
		                <label class="control-label span3" for="normal-field">Dr. Umum :</label>
		                <div class="controls span5">
		                  <input type="text" id="normal-field" class="row-fluid" name="dru" required />
		                </div>
		              </div>

		         	  <div class="form-row control-group row-fluid">
		                <label class="control-label span3" for="normal-field">Dr. Konsulen :</label>
		                <div class="controls span5">
		                  <input type="text" id="normal-field" class="row-fluid" name="drk" required />
		                </div>
		              </div>

		              <div class="form-row control-group row-fluid">
		                <label class="control-label span3" for="normal-field">Keterangan :</label>
		                <div class="controls span5">
		                  <input type="text" id="normal-field" class="row-fluid" name="ket" required />
		                </div>
		              </div>

		            <div class="form-actions row-fluid">
		                <div class="span7 offset3">
		                  <button type="submit" class="btn btn-primary" name="submit" value="Simpan">Simpan</button>
		                  <button type="reset" class="btn btn-secondary" value="Batal">Batal</button>
		               </div>
		              </div>
		              </form>
		              </div>
		              </div>
		              </div>
		            </div>
		          </div>
		        

	<?php } ?>

<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Jadwal Dokter</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
            <form method="POST" action="projdokter.php">
             <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
				<tr>
                	<th>#</th>
					<th>No</th>
					<th>Tanggal Jadwal Dokter</th>
					<th>Minggu</th>
                    <th>Dokter Umum</th>
					<th>Dokter Konsulen</th>
                    <th>Keterangan</th>
                    <th class="ms no_sort">Actions</th>
				</tr>
			</thead>
            <tbody>
				<?php
						$query = mysql_query("SELECT * FROM jadwal_dokter");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
							$no++;
							$id_jdokter = $row['id_jdokter'];
							$tgl_jdokter = $row['tgl_jdokter'];
							$minggu = $row['minggu'];
							$dr_umum = $row['dr_umum'];
							$dr_konsulen = $row['dr_konsulen'];
							$ket = $row['ket'];
							echo "<tr align='center'> 
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_jdokter\"></td>
									<td>$no</td>
									<td>$tgl_jdokter</td>
									<td>$minggu</td>
									<td>$dr_umum</td>
									<td>$dr_konsulen</td>
									<td>$ket</td>							
									<td><a href=\"?menu=jdokter&action=update&id=$id_jdokter\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=prosesjd&action=delete&id=$id_jdokter\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\"><i class=\"gicon-remove icon-white\"></i></a></td>
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
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->