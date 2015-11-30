<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Status Pekerjaan</span>
         </h2>
      </div><!-- End div class.title -->
		<div class="content top">
        
<div class="content">
    <div style="text-align:right;" >                                 
<a href="?menu=per_pilihpasiende"><button class="btn btn-inverse" rel="tooltip" data-placement="top" data-original-title="kembali"><i class="icon-chevron-left"></i></button></a>
	</div>
</div>
        <form method="POST" action="prospekerjaan.php">
          <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
			<thead>
			<tr>
				<th>#</th>
				<th>No</th>
				<th>Nama Pasien</th>
                <th>Status Pekerjaan</th>
                <th>Kode Pekerjaan</th>
                <th>Pola Pekerjaan</th>
                <th>Keterampilan</th>
                <th>Dukungan Hidup</th>
                <th>Nama Dukungan Hidup</th>
                <th>Finansial</th>
                <th>Tempat Tinggal</th>
                <th>Makan</th>
                <th>Perawatan</th>
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
						
						$sp = $row['s_pekerjaan']; 
						if ($sp == "tb") {
							$sp = "tidak bekerja";
						} else if ($sp == "b") {
							$sp = "bekerja";
						} else if ($sp == "m") {
							$sp = "mahasiswa/pelajar";
						} else {
							$sp = "ibu rumah tangga";
						} 
					
						$k_pekerjaan = $row['k_pekerjaan'];
						
						$pp = $row['p_pekerjaan'];
						if ($pp == "pu") {
							$pp = "purna waktu";
						} else if ($pp == "pa") {
							$pp = "paruh waktu";
						} else {
							$pp = "tidak tentu";
						}
						 
						$keterampilan = $row['keterampilan'];
						$dhidup = $row['dhidup'];
						$nm_dhidup = $row['nm_dhidup'];
						$finansial = $row['finansial'];
						$t_tinggal = $row['t_tinggal'];
						$makan = $row['makan'];
						$perawatan = $row['perawatan'];
						echo "
								<tr align='center'>
								<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_fasesmen\"></td>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td>$sp</td>
								<td>$k_pekerjaan</td>
								<td>$pp</td>
								<td>$keterampilan</td>
								<td>$dhidup</td>
								<td>$nm_dhidup</td>
								<td>$finansial</td>
								<td>$t_tinggal</td>
								<td>$makan</td>
								<td>$perawatan</td>
								<td><a href=\"?menu=forasesmen&id=$id_pasien&action=update&active=2\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a></td>
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