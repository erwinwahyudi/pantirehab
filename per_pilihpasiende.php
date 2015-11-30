<div class="content">
         <div class="row-fluid fluid">
         
<div class="span3 well pagination-centered">                                  
<a href="?menu=per_viewidemografis"><button class="btn btn-warning" data-placement="top" data-original-title=".btn .btn-warning">Lihat Informasi Demografis</button></a>
</div>

<div class="span3 well pagination-centered">                                  
<a href="?menu=per_viewsmedis"><button class="btn btn-warning" data-placement="top" data-original-title=".btn .btn-warning">Lihat Status Medis</button></a>
</div>

<div class="span3 well pagination-centered">                                  
<a href="?menu=per_viewspekerjaan"><button class="btn btn-warning" data-placement="top" data-original-title=".btn .btn-warning">Lihat Status Pekerjaan</button></a>
</div>

<div class="span3 well pagination-centered">                                  
<a href="?menu=per_viewspnarkotika"><button class="btn btn-warning" data-placement="top" data-original-title=".btn .btn-warning">Lihat Status Penggunaan Narkotika</button></a>
</div>
		</div>
</div>

<div class="content">
         <div class="row-fluid fluid">
<div class="span3 well pagination-centered">                                  
<a href="?menu=per_viewslegal"><button class="btn btn-warning" data-placement="top" data-original-title=".btn .btn-warning">Lihat Status Legal</button></a>
</div>

<div class="span3 well pagination-centered">                                  
<a href="?menu=per_viewrksosial"><button class="btn btn-warning" data-placement="top" data-original-title=".btn .btn-warning">Lihat Riwayat Keluarga/Sosial</button></a>
</div>

<div class="span3 well pagination-centered">                                  
<a  href="?menu=per_viewspsikiatris"><button class="btn btn-warning" data-placement="top" data-original-title=".btn .btn-warning">Lihat Status Psikiatris</button></a>
</div>

<div class="span3 well pagination-centered">                                  
<a href="?menu=per_viewpfisik"><button class="btn btn-warning" data-placement="top" data-original-title=".btn .btn-warning">Lihat Pemeriksaan Fisik</button></a>
</div>
		</div>
</div>

<div class="row-fluid">
  <div class="box gradient">
      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Formulir Asesmen</span>
         </h2>
      </div><!-- End div class.title -->

		<div class="content top">
        <form method="POST" action="proidemografis.php">
          <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
			<tr>
				<th>#</th>
				<th>No</th>
				<th>Nama Pasien</th>
                <th class="ms no_sort">Actions</th>
            </tr>
		</thead>
        	<tbody>
				<?php
				
				$query = mysql_query("SELECT ide.*, ps.*	FROM formulir_asesmen ide INNER JOIN pasien ps ON ide.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($query))
					{
						$no++;
						$id_pasien = $row['id_pasien'];
						$id_fasesmen = $row['id_fasesmen'];
						$nm_pasien = $row['nm_pasien'];
						
						echo "
								<tr align='center'>
								<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_fasesmen\"></td>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td><a href=\"?menu=proidemografis&action=delete&id=$id_fasesmen\" class=\"btn btn-inverse btn-small\"  rel=\"tooltip\" data-placement=\"left\" data-original-title=\" hapus \" onclick=\"return confirm('Apakah Anda yakin akan menghapus data?')\"><i class=\"gicon-remove icon-white\"></i></a></td>
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