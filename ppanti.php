<?php
	include "koneksidb.php";
				
	if(isset($_GET['action']))
	{				
		if($_GET['action'] == "update")
			{
				$id_ppanti = $_GET['id'];
						
				$query = mysql_query("select * from profil_panti where id_ppanti='$id_ppanti'");
				$row = mysql_fetch_array($query);
			
?>
<div class="span7">
	<div class="box gradient">
		<div class="title">
		<h3><i class="icon-book"></i><span>Edit Data Profil Panti</span></h3>
		</div>
		<div class="content">
		          	<form class="form-horizontal row-fluid" action="proppanti.php" method="POST">
					<input type="hidden" name="id_ppanti" value="<?php echo $row['id_ppanti']; ?>">
		           
                   <?php 
						$kategori = $row['kategori'];
						if($kategori == "berita")
						{
							$berita ="selected"; $profil = ""; $info = "";
						}
						else if ($kategori == "profil")
						{
							$berita =""; $profil = "selected"; $info = "";
						}
						else if ($kategori == "info")
						{
							$berita =""; $profil = ""; $info = "selected";
						}
						
				?>
                    <div class="form-row control-group row-fluid">
                    <label class="control-label span3" for="default-select">Kategori :</label>
                    <div class="controls span3">
                    <select name="kategori" class="row-fluid" id="default-select">
                    <option value="berita" <?php echo $berita; ?> >Berita</option>
                    <option value="profil" <?php echo $profil; ?> >Profil</option>
                    <option value="info" <?php echo $info; ?> >Informasi</option>
                    </select>
                    </div>
                    </div>
					 
                    <div class="form-row control-group row-fluid">
		            <label class="control-label span3" for="normal-field">Judul :</label>
		            <div class="controls span5">
		            <input type="text" id="normal-field" class="row-fluid" name="judul" value="<?php echo $row['judul']; ?>" required>
		            </div>
		            </div>

					<div class="form-row control-group row-fluid">
                	<label class="control-label span3" for="editor1">Isi :</label>
                	<div class="controls span8">
                	<textarea name="isi" id="editor1" class="row-fluid" rows="5"  required><?php echo $row['isi']; ?></textarea>
               	 	</div>
                	</div>

                	
					  
		            <div class="form-actions row-fluid">
		            <div class="span7 offset3">
		            <button type="submit" class="btn btn-primary" name="action" value="update">Edit</button>
		            <button type="reset" class="btn btn-secondary" value="Batal">Batal</button>
				 	</div>
		            </div>
		            </form>
                    </div>
                    </div>
		</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span7" -->
<?php
			}
	}
	else { 
?>

<div class="span7">
	<div class="box gradient">
		<div class="title">
		<h3><i class="icon-book"></i><span>Tambah Data Profil Panti</span></h3>
		</div>
		<div class="content">
		          	<form class="form-horizontal row-fluid" action="proppanti.php" method="POST">
                    
                    <div class="form-row control-group row-fluid">
                    <label class="control-label span3" for="default-select">Kategori :</label>
                    <div class="controls span3">
                    <select name="kategori" class="row-fluid" id="default-select">
                    <option value="berita" selected="1">Berita</option>
                    <option value="profil" >Profil</option>
                    <option value="info" >Informasi</option>
                    </select>
                    </div>
                    </div>
	           
					<div class="form-row control-group row-fluid">
		            <label class="control-label span3" for="normal-field">Judul :</label>
		            <div class="controls span5">
		            <input type="text" id="normal-field" class="row-fluid" name="judul"  required>
		            </div>
		            </div>

					

                	<div class="form-row control-group row-fluid">
                	<label class="control-label span3" for="editor1">Isi :</label>
                	<div class="controls span8">
                	<textarea name="isi" id="editor1" class="row-fluid" rows="5"  required></textarea>
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
		</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span7" -->
<?php } ?>

<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Profil Panti</span>
         </h2>
      </div><!-- End div class.title -->

      
      <div class="content top">
        <form method="POST" action="proppanti.php">
          <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
    		<thead>
				<tr>
					<th>#</th>
					<th>No</th>
                    <th>Kategori</th>
					<th>Judul</th>
					<th>Isi</th>
                    <th class="ms no_sort">Actions</th>
				</tr>
            </thead>
				<tbody>

				<?php
						$query = mysql_query("SELECT * FROM profil_panti");
						$no=0;
						while ($row = mysql_fetch_array($query))
						{
							$no++;
							$id_ppanti = $row['id_ppanti'];
							$kategori = $row['kategori'];
							$judul = $row['judul'];
							$isi = $row['isi'];
							echo "<tr align='center'>
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_ppanti\"></td>
									<td>$no</td>
									<td>$kategori</td>
									<td>$judul</td>
									<td>$isi</td>
									<td><a href=\"?menu=ppanti&action=update&id=$id_ppanti\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=prosespp&action=delete&id=$id_ppanti\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\" ><i class=\"gicon-remove icon-white\"></i></a></td>
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
    	</div><!-- End div class.content top -->
	</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->