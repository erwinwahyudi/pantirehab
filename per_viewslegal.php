<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#example').dataTable({
		        "bPaginate": true,
		        "bJQueryUI": false,
		        "sPaginationType": "full_numbers",
        		"sScrollX": '3000px',
			});
		} );
	</script>

<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h2>
          <i class=" icon-bar-chart"></i> <span>Tabel Status Legal</span>
         </h2>
      </div><!-- End div class.title -->
      <div class="content top">
      
<div class="content">
    <div style="text-align:right;" >                                 
<a href="?menu=per_pilihpasiende"><button class="btn btn-inverse" rel="tooltip" data-placement="top" data-original-title="kembali"><i class="icon-chevron-left"></i></button></a>
	</div>
</div>
		<form method="POST" action="proslegal.php">
		<table id="example" class="table-bordered" class="display" style="margin-bottom:0px;">
		<thead>
			<tr height="30px">
				<th width="50px">#</th>
				<th width="80px">No</th>
				<th>Nama Pasien</th>
                <th>Mencuri</th>
                <th>Bebas Bersyarat/Masa Percobaan</th>
                <th>Masalah Narkoba</th>
                <th>Pemalsuan</th>
                <th>Penyerangan Bersenjata</th>
                <th>Pembobolan & Pencurian</th>
                <th>Perampokan</th>
                <th>Penyerangan</th>
                <th>Pembakaran Rumah</th>
                <th>Pemerkosaan</th>
                <th>Pembunuhan</th>
                <th>Pelacuran</th>
                <th>Melecehkan Pengadilan</th>
                <th>Lain-lain</th>
                <th>Tuntutan</th>
                <th>Actions</th>
            </tr>
		</thead>
        	<tbody>
				<?php
				$query = mysql_query("SELECT sl.*, ps.*	FROM formulir_asesmen sl INNER JOIN pasien ps ON sl.id_pasien = ps.id_pasien");
					$no=0;
					while ($row = mysql_fetch_array($query))
					{
						$no++;
						$id_pasien = $row['id_pasien'];
						$id_fasesmen = $row['id_fasesmen'];
						$nm_pasien = $row['nm_pasien'];
						$mencuri = $row['bb_mp'];
						$bb_mp = $row['bb_mp'];
						$m_narkoba = $row['m_narkoba'];
						$pemalsuan = $row['pemalsuan'];
						$p_bersenjata = $row['p_bersenjata'];
						$pembobolan = $row['pembobolan'];
						$perampokan = $row['perampokan'];
						$penyerangan = $row['penyerangan'];
						$p_rumah = $row['p_rumah'];
						$pemerkosaan = $row['pemerkosaan'];
						$pembunuhan = $row['pembunuhan'];
						$pelacuran = $row['pelacuran'];
						$m_pengadilan = $row['m_pengadilan'];
						$lain_lain = $row['lain_lain'];
						$tuntutan = $row['tuntutan'];
						echo "
								<tr align='center'>
								<td><input name=\"selector[]\" type=\"checkbox\" id=\"checkbox[]\" value=\"$id_fasesmen\"></td>
								<td>$no</td>
								<td>$nm_pasien</td>
								<td>$mencuri</td>
								<td>$bb_mp</td>
								<td>$m_narkoba</td>
								<td>$pemalsuan</td>
								<td>$p_bersenjata</td>
								<td>$pembobolan</td>
								<td>$perampokan</td>
								<td>$penyerangan</td>
								<td>$p_rumah</td>
								<td>$pemerkosaan</td>
								<td>$pembunuhan</td>
								<td>$pelacuran</td>
								<td>$m_pengadilan</td>
								<td>$lain_lain</td>
								<td>$tuntutan</td>
								<td><a href=\"?menu=forasesmen&id=$id_pasien&action=update&active=4\" rel=\"tooltip\" data-placement=\"left\" data-original-title=\" edit \" ><i class=\"gicon-edit\"></i></a></td>
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
