<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Data Dokter</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
        <form method="POST" action="prokategori.php?kategori=dokter">
        	<table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
            <thead>
              <tr>
                <th>#</th>
					<th>Id Login</th>
					<th>Username</th>
					<th>Kategori</th>
					<th>Edit</th>
                    <th>Id Dokter</th>
                    <th>Nama Dokter</th>
                    <th>TTL Dokter</th>
                    <th>Alamat Dokter</th>
                    <th>No Hp Dokter</th>
                    <th>Jabatan Dokter</th>
                    <th class="ms no_sort">Actions</th>
              </tr>
            </thead>

            	<tbody>
				<?php
						$query = mysql_query("SELECT dok.*, lg.* FROM (dokter dok RIGHT JOIN login lg ON dok.id_login = lg.id_login) WHERE lg.kategori='dokter'");
						
						while ($row = mysql_fetch_array($query))
						{
							
							$id_login = $row['id_login'];
							$uname = $row['uname'];
							$kategori = $row['kategori'];
							$id_dokter = $row['id_dokter'];
							$nm_dokter = $row['nm_dokter'];
							$ttl_dokter = $row['ttl_dokter'];
							$alamat_dokter = $row['alamat_dokter'];
							$nohp_dokter = $row['nohp_dokter'];
							$jabatan_dokter = $row['jabatan_dokter'];
							echo "<tr align='center'> 
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_login\"></td>
									<td>$id_login</td>
									<td>$uname</td>
									<td>$kategori</td>
									<td><a href=\"?menu=kategori&action=update&id=$id_login\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \" ><i class=\"gicon-edit\"></i></a></td>
									<td>$id_dokter</td>
									<td>$nm_dokter</td>
									<td>$ttl_dokter</td>
									<td>$alamat_dokter</td>
									<td>$nohp_dokter</td>
									<td>$jabatan_dokter</td>
									<td><a href=\"?menu=pppetugas&action=update&id=$id_login\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" Edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=proseska&action=delete&id=$id_login&kategori=dokter\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\" ><i class=\"gicon-remove icon-white\"></i></a></td>
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


<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Data Perawat</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
           <form method="POST" action="prokategori.php?kategori=perawat">
           <table id="datatable_example2" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
				<tr>
					<th>#</th>
					<th>Id Login</th>
					<th>Username</th>
					<th>Kategori</th>
					<th>Edit</th>
                    <th>Id Perawat</th>
                    <th>Nama Perawat</th>
                    <th>TTL Perawat</th>
                    <th>Alamat Perawat</th>
                    <th>No Hp Perawat</th>
                    <th>Jabatan Perawat</th>
                    <th class="ms no_sort">Actions</th>
				</tr>
			</thead>
            	<tbody>
				<?php
						$queryp = mysql_query("SELECT prw.*, lg.* FROM (perawat prw RIGHT JOIN login lg ON prw.id_login = lg.id_login) WHERE lg.kategori='perawat'");
						
						while ($rowp = mysql_fetch_array($queryp))
						{
							
							$id_loginp = $rowp['id_login'];
							$unamep = $rowp['uname'];
							$kategorip = $rowp['kategori'];
							$id_perawat = $rowp['id_perawat'];
							$nm_perawat = $rowp['nm_perawat'];
							$ttl_perawat = $rowp['ttl_perawat'];
							$alamat_perawat = $rowp['alamat_perawat'];
							$nohp_perawat = $rowp['nohp_perawat'];
							$jabatan_perawat = $rowp['jabatan_perawat'];
							echo "<tr align='center'> 
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_loginp\"></td>
									<td>$id_loginp</td>
									<td>$unamep</td>
									<td>$kategorip</td>
									<td><a href=\"?menu=kategori&action=update&id=$id_loginp\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a></td>
									<td>$id_perawat</td>
									<td>$nm_perawat</td>
									<td>$ttl_perawat</td>
									<td>$alamat_perawat</td>
									<td>$nohp_perawat</td>
									<td>$jabatan_perawat</td>
									<td><a href=\"?menu=pppetugas&action=update&id=$id_loginp\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=proseska&action=delete&id=$id_loginp&kategori=perawat\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\" ><i class=\"gicon-remove icon-white\"></i></a></td>
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
            
<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Data Petugas Rekam Medik</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
             <form method="POST" action="prokategori.php?kategori=p_rmedik">
            <table id="datatable_example3" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
				<tr>
					<th>#</th>
					<th>Id Login</th>
					<th>Username</th>
					<th>Kategori</th>
					<th>Edit</th>
                    <th>Id Petugas Rekam Medik</th>
                    <th>Nama Petugas Rekam Medik</th>
                    <th>TTL Petugas Rekam Medik</th>
                    <th>Alamat Petugas Rekam Medik</th>
                    <th>No Hp Petugas Rekam Medik</th>
                    <th>Jabatan Petugas Rekam Medik</th>
                    <th class="ms no_sort">Actions</th>
				</tr>
			</thead>
            	<tbody>
				<?php
						$querypr = mysql_query("SELECT prm.*, lg.* FROM (p_rmedik prm RIGHT JOIN login lg ON prm.id_login = lg.id_login) WHERE lg.kategori='petugas rekam medik'");
						
						while ($rowpr = mysql_fetch_array($querypr))
						{
							
							$id_loginpr = $rowpr['id_login'];
							$unamepr = $rowpr['uname'];
							$kategoripr = $rowpr['kategori'];
							$id_prmedik = $rowpr['id_prmedik'];
							$nm_prmedik = $rowpr['nm_prmedik'];
							$ttl_prmedik = $rowpr['ttl_prmedik'];
							$alamat_prmedik = $rowpr['alamat_prmedik'];
							$nohp_prmedik = $rowpr['nohp_prmedik'];
							$jabatan_prmedik = $rowpr['jabatan_prmedik'];
							echo "<tr align='center'> 
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_loginpr\"></td>
									<td>$id_loginpr</td>
									<td>$unamepr</td>
									<td>$kategoripr</td>
									<td><a href=\"?menu=kategori&action=update&id=$id_loginpr\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a></td>
									<td>$id_prmedik</td>
									<td>$nm_prmedik</td>
									<td>$ttl_prmedik</td>
									<td>$alamat_prmedik</td>
									<td>$nohp_prmedik</td>
									<td>$jabatan_prmedik</td>
									<td><a href=\"?menu=pppetugas&action=update&id=$id_loginpr\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=proseska&action=delete&id=$id_loginpr&kategori=p_rmedik\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\" ><i class=\"gicon-remove icon-white\"></i></a></td>
									</tr>";
						}
				?>
                </tbody>
			</table>
          <div class="row-fluid control-group">
            <div class="pull-left span6" action="#">
              <div class=" ">
                <button class="btn inline" value="deletemulti" name="action" type="submit" onclick="return confirm('Apakah Anda yakin akan menghapus data?')">Hapuse</button>
              </div>
            </div>

            
          </div>

      </form>
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div>

            
<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Data Konselor</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
            <form method="POST" action="prokategori.php?kategori=konselor">
            <table id="datatable_example4" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
				<tr>
					<th>#</th>
					<th>Id Login</th>
					<th>Username</th>
					<th>Kategori</th>
					<th>Edit</th>
                    <th>Id Konselor</th>
                    <th>Nama Konselor</th>
                    <th>TTL Konselor</th>
                    <th>Alamat Konselor</th>
                    <th>No Hp Konselor</th>
                    <th>Jabatan Konselor</th>
                    <th class="ms no_sort">Actions</th>
				</tr>
			</thead>
            	<tbody>	
				<?php
						$queryk = mysql_query("SELECT ks.*, lg.* FROM konselor ks RIGHT JOIN login lg ON ks.id_login = lg.id_login WHERE lg.kategori='konselor'");
						while ($rowk = mysql_fetch_array($queryk))	
						{
							
							$id_logink = $rowk['id_login'];
							$unamek = $rowk['uname'];
							$kategorik = $rowk['kategori'];
							$id_konselor = $rowk['id_konselor'];
							$nm_konselor = $rowk['nm_konselor'];
							$ttl_konselor = $rowk['ttl_konselor'];
							$alamat_konselor = $rowk['alamat_konselor'];
							$nohp_konselor = $rowk['nohp_konselor'];
							$jabatan_konselor = $rowk['jabatan_konselor'];
							echo "<tr align='center'> 
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_logink\"></td>
									<td>$id_logink</td>
									<td>$unamek</td>
									<td>$kategorik</td>
									<td><a href=\"?menu=kategori&action=update&id=$id_logink\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a></td>
									<td>$id_konselor</td>
									<td>$nm_konselor</td>
									<td>$ttl_konselor</td>
									<td>$alamat_konselor</td>
									<td>$nohp_konselor</td>
									<td>$jabatan_konselor</td>
									<td><a href=\"?menu=pppetugas&action=update&id=$id_logink\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=proseska&action=delete&id=$id_logink&kategori=konselor\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\" ><i class=\"gicon-remove icon-white\"></i></a></td>
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
            
<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Data Karyawan</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
            <form method="POST" action="prokategori.php?kategori=karyawan">
            <table id="datatable_example5" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
				<tr>
					<th>#</th>
					<th>Id Login</th>
					<th>Username</th>
					<th>Kategori</th>
					<th>Edit</th>
                    <th>Id Karyawan</th>
                    <th>Nama Karyawan</th>
                    <th>TTL Karyawan</th>
                    <th>Alamat Karyawan</th>
                    <th>No Hp Karyawan</th>
                    <th>Jabatan Karyawan</th>
                    <th class="ms no_sort">Actions</th>
             	</tr>
			</thead>
            	<tbody>	
				<?php
						$querykr = mysql_query("SELECT kr.*, lg.* FROM (karyawan kr RIGHT JOIN login lg ON kr.id_login = lg.id_login) WHERE lg.kategori='karyawan'");
						
						while ($rowkr = mysql_fetch_array($querykr))
						{
							
							$id_loginkr = $rowkr['id_login'];
							$unamekr = $rowkr['uname'];
							$kategorikr = $rowkr['kategori'];
							$id_karyawan = $rowkr['id_karyawan'];
							$nm_karyawan = $rowkr['nm_karyawan'];
							$ttl_karyawan = $rowkr['ttl_karyawan'];
							$alamat_karyawan = $rowkr['alamat_karyawan'];
							$nohp_karyawan = $rowkr['nohp_karyawan'];
							$jabatan_karyawan = $rowkr['jabatan_karyawan'];
							echo "<tr align='center'> 
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_loginkr\"></td>
									<td>$id_loginkr</td>
									<td>$unamekr</td>
									<td>$kategorikr</td>
									<td><a href=\"?menu=kategori&action=update&id=$id_loginkr\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a></td>
									<td>$id_karyawan</td>
									<td>$nm_karyawan</td>
									<td>$ttl_karyawan</td>
									<td>$alamat_karyawan</td>
									<td>$nohp_karyawan</td>
									<td>$jabatan_karyawan</td>
									<td><a href=\"?menu=pppetugas&action=update&id=$id_loginkr\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=proseska&action=delete&id=$id_loginkr&kategori=karyawan\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\" ><i class=\"gicon-remove icon-white\"></i></a></td>
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
            
 <div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Data Logistik</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
            <form method="POST" action="prokategori.php?kategori=logistik">
            <table id="datatable_example6" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
            <thead>
				<tr>
					<th>#</th>
					<th>Id Login</th>
					<th>Username</th>
					<th>Kategori</th>
					<th>Edit</th>
                    <th>Id Logistik</th>
                    <th>Nama Logistik</th>
                    <th>TTL Logistik</th>
                    <th>Alamat Logistik</th>
                    <th>No HP Logistik</th>
                    <th>Jabatan Logistik</th>
                    <th class="ms no_sort">Actions</th>
                 </tr>
			</thead>
            	<tbody>	
				<?php
						$queryl = mysql_query("SELECT l.*, lg.* FROM (logistik l RIGHT JOIN login lg ON l.id_login = lg.id_login) WHERE lg.kategori='logistik'");
						
						while ($rowl = mysql_fetch_array($queryl))
						{
							
							$id_loginl = $rowl['id_login'];
							$unamel = $rowl['uname'];
							$kategoril = $rowl['kategori'];
							$id_logistik = $rowl['id_logistik'];
							$nm_logistik = $rowl['nm_logistik'];
							$ttl_logistik = $rowl['ttl_logistik'];
							$alamat_logistik = $rowl['alamat_logistik'];
							$nohp_logistik = $rowl['nohp_logistik'];
							$jabatan_logistik = $rowl['jabatan_logistik'];
							echo "<tr align='center'> 
									<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_loginl\"></td>
									<td>$id_loginl</td>
									<td>$unamel</td>
									<td>$kategoril</td>
									<td><a href=\"?menu=kategori&action=update&id=$id_loginl\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a></td>
									<td>$id_logistik</td>
									<td>$nm_logistik</td>
									<td>$ttl_logistik</td>
									<td>$alamat_logistik</td>
									<td>$nohp_logistik</td>
									<td>$jabatan_logistik</td>
									<td><a href=\"?menu=pppetugas&action=update&id=$id_loginl\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										<a href=\"?menu=proseska&action=delete&id=$id_loginl&kategori=logistik\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\" ><i class=\"gicon-remove icon-white\"></i></a></td>
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