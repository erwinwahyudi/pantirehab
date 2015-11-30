<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Status Psikiatris</span>
         </h2>
      </div><!-- End div class.title -->
	<div class="content top">
    
<div class="content">
    <div style="text-align:right;" >                                 
<a href="?menu=per_pilihpasiende"><button class="btn btn-inverse" rel="tooltip" data-placement="top" data-original-title="kembali"><i class="icon-chevron-left"></i></button></a>
	</div>
</div>
        <form method="POST" action="prospsikiatris.php">
          <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
		<thead>
			<tr>
           		<th>#</th>
				<th>No</th>
				<th>Nama Pasien</th>
                <th>Depresi Serius</th>
                <th>Cemas Serius</th>
                <th>Halusinasi</th>
                <th>Sulit Mengingat</th>
                <th>Sukar Mengontrol Prilaku Kasar</th>
                <th>Pikiran Serius untuk Bunuh Diri</th>
                <th>Berusaha untuk Bunuh Diri</th>
                <th>Pengobatan dari Psikiater</th>
                <th>Actions</th>
            </tr>
		</thead>
        	<tbody>
				<?php
				$query = mysql_query("SELECT sp.*, ps.*	FROM formulir_asesmen sp INNER JOIN pasien ps ON sp.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($query))
					{
						$no++;
						$id_pasien = $row['id_pasien'];
						$id_fasesmen = $row['id_fasesmen'];
						$nm_pasien = $row['nm_pasien'];
						$depresi = $row['depresi'];
						$cemas = $row['cemas'];
						$halusinasi = $row['halusinasi'];
						$mengingat = $row['s_mengingat'];
						$mengontrol = $row['s_mengontrol'];
						$pbdiri = $row['p_bdiri'];
						$bbdiri = $row['b_bdiri'];
						$ppsikiater = $row['p_psikiater'];
						echo "
								<tr align='center'>
								<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_fasesmen\"></td>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td>$depresi</td>
								<td>$cemas</td>
								<td>$halusinasi</td>
								<td>$mengingat</td>
								<td>$mengontrol</td>
								<td>$pbdiri</td>
								<td>$bbdiri</td>
								<td>$ppsikiater</td>
								<td><a href=\"?menu=forasesmen&id=$id_pasien&action=update&active=6\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a></td>
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