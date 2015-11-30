<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Data Orang Tua</span>
         </h2>
      </div><!-- End div class.title -->


      <div class="content top">
        <form method="POST" action="prokategoriot.php">
          <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
            <thead>
              <tr>
                <th>#</th>
                <th>No</th>
                <th>Username Orangtua</th>
                <th>Kategori</th>
                <th>Opsi</th>
                <th>Nama Orangtua</th>
                <th>Nama Anak</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Kode Unik</th>
                <th class="ms no_sort">Actions</th>
              </tr>
            </thead>

            <tbody>              
              <?php
                include "koneksidb.php";
                  //$query = mysql_query("select * from login, orang_tua where login.kategori='orang tua'");
                $select = "SELECT ot.*, log.*, ps.*
                      FROM (orang_tua ot RIGHT JOIN login log ON ot.id_login=log.id_login)
                      LEFT JOIN pasien ps ON ot.id_pasien = ps.id_pasien WHERE log.kategori = 'orang tua'";
                $query = mysql_query($select);
                $no=0;
                while ($row = mysql_fetch_array($query))
                {
                  $no++;
                  $id = $row['id_login'];
                  $uname = $row['uname'];
                  $kategori = $row['kategori'];
                  $id_otua = $row['id_otua'];
                  $nm_otua = $row['nm_otua'];
                  $nm_ank = $row['nm_pasien'];
                  $alamat_otua = $row['alamat_otua'];
                  $nohp_otua = $row['nohp_otua'];
                  $kode_unik = $row['kode_unik'];
                  echo "
                      <tr align='center'>
                      <td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id\" class=\"checkbox\"></td>
                      <td>$no</td>
                      <td>$uname</td>
                      <td>$kategori</td>
                      <td><a href=\"?menu=upkategoriot&id=$id\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a></td>
                      <td>$nm_otua</td>
                      <td>$nm_ank</td>
                      <td>$alamat_otua</td>
                      <td>$nohp_otua</td>
                      <td>$kode_unik</td>
					            <td><a href=\"?menu=upotua&action=update&id=$id\" class=\"btn btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
										      <a href=\"?menu=proseskot&action=delete&id=$id\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\" ><i class=\"gicon-remove icon-white\"></i></a></td>
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
