<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Status Medis</span>
         </h2>
      </div><!-- End div class.title -->
<div class="content top">

<div class="content">
    <div style="text-align:right;" >                                 
<a href="?menu=per_pilihpasiende"><button class="btn btn-inverse" rel="tooltip" data-placement="top" data-original-title="kembali"><i class="icon-chevron-left"></i></button></a>
	</div>
</div>
        <form method="POST" action="prosmedis.php">
          <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
		<thead>
			<tr>
				<th>#</th>
				<th>No</th>
				<th>Nama Pasien</th>
                <th>Jenis Penyakit</th>
                <th>Tahun Rawat</th>
                <th>Lama</th>
                <th>Riwayat Penyakit Kronis</th>
                <th>Jenis Penyakit</th>
                <th>Terapi Medis</th>
                <th>Jenis Terapi Medis</th>
                <th>HIV</th>
                <th>Hepatitis B</th>
                <th>Hepatitis C</th>
                <th>Actions</th>
            </tr>
		</thead>
        	<tbody>
				<?php
				$query = mysql_query("SELECT sm.*, ps.*	FROM formulir_asesmen sm INNER JOIN pasien ps ON sm.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($query))
					{
						$no++;
						$id_pasien = $row['id_pasien'];
						$id_fasesmen = $row['id_fasesmen'];
						$nm_pasien = $row['nm_pasien'];
						$j_penyakit = $row['j_penyakit'];
						$t_rawat = $row['t_rawat'];
						$lama = $row['lama'];
						$rp_kronis = $row['rp_kronis'];
						$j_pykt = $row['j_pykt'];
						$t_medis = $row['t_medis'];
						$j_tmedis = $row['j_tmedis'];
						$hiv = $row['hiv'];
						$hepatitis_b = $row['hepatitis_b'];
						$hepatitis_c = $row['hepatitis_c'];
						echo "
								<tr align='center'>
								<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_fasesmen\"></td>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td>$j_penyakit</td>
								<td>$t_rawat</td>
								<td>$lama</td>
								<td>$rp_kronis</td>
								<td>$j_pykt</td>
								<td>$t_medis</td>
								<td>$j_tmedis</td>
								<td>$hiv</td>
								<td>$hepatitis_b</td>
								<td>$hepatitis_c</td>								
								<td><a href=\"?menu=forasesmen&id=$id_pasien&action=update&active=1\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a></td>
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