<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Informasi Demografis</span>
         </h2>
      </div><!-- End div class.title -->
	<div class="content top">
    
<div class="content">
    <div style="text-align:right;">                             
<a href="?menu=per_pilihpasiende"><button class="btn btn-inverse" rel="tooltip" data-placement="top" data-original-title="kembali"><i class="icon-chevron-left"></i></button></a>
	</div>
</div>

        <form method="POST" action="proidemografis.php">
          <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
			<tr>
				<th>#</th>
				<th>No</th>
				<th>Nama Pasien</th>
                <th>Tgl Datang</th>
                <th>Status</th>
                <th>Pendidikan terakhir</th>
                <th>Actions</th>
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
						$tgl_datang = $row['tgl_datang'];
						
						$sk = $row['s_kawin'];
						if ($sk == "m") {
							$sk = "menikah";
						} else if ($sk == "bm") {
							$sk = "belum menikah";
						} else {
							$sk = "duda/janda";
						} 

						$pta = $row['p_terakhir'];
						if ($pta == "ak") {
								$pta = "akademi";
							} else if ($pta == "pt") {
								$pta = "perguruan tinggi";
							} 
					
						echo "
								<tr align='center'>
								<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_fasesmen\"></td>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td>$tgl_datang</td>
								<td>$sk</td>
								<td>$pta</td>
								<td><a href=\"?menu=forasesmen&id=$id_pasien&action=update&active=0\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a>
									</tr>";
					}
				?>
           </tbody>

</table>
		  <div class="row-fluid control-group">
            <div class="pull-left span6" action="#">
              <div class=" ">
              <button class="btn inline" value="deletemulti" name="action" type="submit" onclick="return confirm('Apakah Anda yakin akan menghapus data?')">Delete</button>
              </div>
            </div>           
          </div>
      </form>
    </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid -->



