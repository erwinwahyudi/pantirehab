<?php
include "koneksidb.php";
	if(isset($_GET['action']))
	{				
		if($_GET['action'] == "update")
			{
				$id_galeri = $_GET['id'];
						
				$query = mysql_query("select * from galeri where id_galeri='$id_galeri'");
				$row = mysql_fetch_array($query);
				
				?>
				<div class="span7">
		        <div class="box gradient">
		          <div class="title">
		            <h3>
		            <i class="icon-book"></i><span>Edit Galeri</span>
		            </h3>
		          </div>

		          <div class="content">
		          <form class="form-horizontal row-fluid" action="progaleri.php" enctype="multipart/form-data" method="POST">
				
				<input type="hidden" name="id_galeri" value="<?php echo $row['id_galeri']; ?>">

				 <?php 
						$kategori = $row['kategori'];
						if($kategori == "slideshow")
						{
							$slideshow ="selected"; $galeri = "";
						}
						else if ($kategori == "galeri")
						{
							$slideshow =""; $galeri = "selected";
						}
						
				?>
                    <div class="form-row control-group row-fluid">
                    <label class="control-label span3" for="default-select">Kategori :</label>
                    <div class="controls span3">
                    <select name="kategori" class="row-fluid" id="default-select">
                    <option value="galeri" <?php echo $galeri; ?> >Galeri</option>
                    <option value="slideshow" <?php echo $slideshow; ?> >Slideshow</option>
                    
                    </select>
                    </div>
                    </div>

					<div class="form-row control-group row-fluid">
		                <label class="control-label span3" for="normal-field">Judul</label>
		                <div class="controls span6">
		                  <input type="text" id="normal-field" class="row-fluid" name="judul" value="<?php echo $row['judul']; ?>" required>
		                </div>
		              </div>

		              <div class="form-row control-group row-fluid">
	                	<label class="control-label span3" for="editor1">Isi :</label>
	                	<div class="controls span8">
	                	<textarea name="isi" id="editor1" class="row-fluid" rows="5"  required><?php echo $row['isi']; ?></textarea>
	               	 	</div>
                	</div>

		             
		               <div class="form-row control-group row-fluid">
		                <label class="control-label span3" for="search-input">Unggah Gambar</label>
		                <div class="controls span7">
		                  <div class="input-append row-fluid">
		                    <input type="file" class="spa1n6 fileinput" id="search-input" name="userfile">
		                    >
		                  </div>
		                </div>
		              </div>

		            <div class="form-actions row-fluid">
		                <div class="span7 offset3">
		              	  <button type="submit" class="btn btn-primary" name="action" value="update">Edit</button>
		              	  <input type="hidden" name="MAX_FILE_SIZE" value="2000000" /> <!-- dalam byte {2000000b = 2Mb} -->
		                
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
		            <i class="icon-book"></i><span>Tambah Galeri</span>
		            </h3>
		          </div>
		          <div class="content">
		          	<form class="form-horizontal row-fluid" action="progaleri.php" enctype="multipart/form-data" method="POST">

		          	<div class="form-row control-group row-fluid">
                    <label class="control-label span3" for="default-select">Kategori :</label>
                    <div class="controls span3">
                    <select name="kategori" class="row-fluid" id="default-select">
                    <option value="galeri" >Galeri</option>
                    <option value="slideshow">Slideshow</option>
                    </select>
                    </div>
                    </div>
	           
					  <div class="form-row control-group row-fluid">
		                <label class="control-label span3" for="normal-field">Judul</label>
		                <div class="controls span6">
		                  <input type="text" id="normal-field" class="row-fluid" name="judul"  required>
		                </div>
		              </div>

					 <div class="form-row control-group row-fluid">
	                	<label class="control-label span3" for="editor1">Isi :</label>
	                	<div class="controls span8">
	                	<textarea name="isi" id="editor1" class="row-fluid" rows="5"  required></textarea>
	               	 	</div>
                	</div>

		            <div class="form-row control-group row-fluid">
		                <label class="control-label span3" for="search-input">Unggah Gambar</label>
		                <div class="controls span7">
		                  <div class="input-append row-fluid">
		                    <input type="file" class="spa1n6 fileinput" id="search-input" name="userfile">
		                    >
		                  </div>
		                </div>
		              </div>

		            
		            <div class="form-actions row-fluid">
		                <div class="span7 offset3">
		                  <button type="submit" class="btn btn-primary" name="submit" value="Simpan">Simpan</button>
		                  <input type="hidden" name="MAX_FILE_SIZE" value="2000000" /> <!-- dalam byte {2000000b = 2Mb} -->
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
          <i class=" icon-bar-chart"></i> <span>Tabel Galeri</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
        <form method="POST" action="progaleri.php">
          <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
    		<thead>
				<tr>
					<th>#</th>
					<th>No</th>
					<th>Kategori</th>
					<th>Judul</th>
					<th>Isi</th>
					<th>Gambar</th>
                    <th class="ms no_sort">Actions</th>
				</tr>
            </thead>
			<tbody>
				

				<?php
				include('koneksidb.php');
				
				$query = mysql_query("SELECT * FROM galeri");
				if(!$query) {
					die( mysql_error() );
				}
						$dir_gambar = 'C:\xampp\htdocs\panti\galeri\\';
						$url_folder_gambar = 'http://localhost:/panti/galeri/';
						
						$no=0;
						while( $row = mysql_fetch_array($query))
						{
							$no++;
							$id_galeri = $row['id_galeri'];
							$kategori = $row['kategori'];
							$judul = $row['judul'];
							$isi = $row['isi'];
							$gambar = $row['gambar'];
							echo "<tr align='center'> 
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_galeri\"></td>
									<td>$no</td>
									<td>$kategori</td>
									<td>$judul</td>
									<td>$isi</td>
									<td><img src=\"$url_folder_gambar$gambar\" width=\"100\" /></td>
									<td><a href=\"?menu=galeri&action=update&id=$id_galeri\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=prosesab&action=delete&id=$id_galeri\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\"><i class=\"gicon-remove icon-white\"></i></a></td>
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
</div>