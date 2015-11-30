<?php
		if(isset($_GET['action']))
		{				
			if($_GET['action'] == "update")
			{
				$id_pasien = $_GET['id'];
				$idkep = $_GET['idkep'];
						
				$query = mysql_query("select * from keperawatan where id_keperawatan='$idkep'");
				$row = mysql_fetch_array($query);
?>

<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Edit Data Keperawatan</span></h3>
		</div>
		<div class="content">

				<form class="form-horizontal row-fluid" action="prokeperawatan.php" method="post">
				<input type="hidden" name="id_keperawatan" value="<?php echo $idkep; ?>">
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Ruangan Keperawatan</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="ruangan" required value="<?php echo $row['ruangan']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Tanggal Keperawatan</label>
                <div class="controls span5">
                <input type="text" id="datepicker" class="row-fluid" name="tgl_keperawatan" required value="<?php echo $row['tgl_keperawatan']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Jam Keperawatan</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="jam_keperawatan" required value="<?php echo $row['jam_keperawatan']; ?>"/>
                </div>
                </div>
                
                <br></br>
                <h3><b>SP : 1</b></h3>
	            <?php
						$mhsp = $row['mhs_percaya'];
						if ($mhsp == "1") {
							$mhspy = "checked";
							$mhspt = "";
						} else {
							$mhspy = "";
							$mhspt = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Membina hubungan saling percaya</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mhs_percaya" value="1" <?php echo $mhspy;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mhs_percaya" value="0" <?php echo $mhspt;?> />Tidak</label>
               	</div>
              	</div>
                
	            <?php
						$mhal = $row['m_halusinasi'];
						if ($mhal == "1") {
							$mhaly = "checked";
							$mhalt = "";
						} else {
							$mhaly = "";
							$mhalt = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengidentifikasi halusinasi</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="m_halusinasi" value="1" <?php  echo $mhaly;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="m_halusinasi" value="0" <?php  echo $mhalt;?> />Tidak</label>
               	</div>
              	</div>
						
	            <?php
						$mpmha = $row['mpm_ha'];
						if ($mpmha == "1") {
							$mpmhay = "checked";
							$mpmhat = "";
						} else {
							$mpmhay = "";
							$mpmhat = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengajarkan pasien mengontrol halusinasi dengan menghardik</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_ha" value="1" <?php  echo $mpmhay;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_ha" value="0" <?php  echo $mpmhat;?> />Tidak</label>
               	</div>
              	</div>
						
	            <?php
						$mpmja = $row['mpm_ja'];
						if ($mpmja == "1") {
							$mpmjay = "checked";
							$mpmjat = "";
						} else {
							$mpmjay = "";
							$mpmjat = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_ja" value="1" <?php  echo $mpmjay;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_ja" value="0" <?php  echo $mpmjat;?> />Tidak</label>
               	</div>
              	</div>
                
				<h3><b>SP : 2</b></h3>
	            <?php
						$evalja = $row['mengevaluasi_ja'];
						if ($evalja == "1") {
							$evaljay = "checked";
							$evaljat = "";
						} else {
							$evaljay = "";
							$evaljat = "checked";
						} 
				?>
                 <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_ja" value="1" <?php  echo $evaljay;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_ja" value="0" <?php  echo $evaljat;?> />Tidak</label>
               	</div>
              	</div>
						
	            <?php
						$mpmhb = $row['mpm_hb'];
						if ($mpmhb == "1") {
							$mpmhby = "checked";
							$mpmhbt = "";
						} else {
							$mpmhby = "";
							$mpmhbt = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol halusinasi dengan bercakap-cakap</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_hb" value="1" <?php  echo $mpmhby;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_hb" value="0" <?php  echo $mpmhbt;?> />Tidak</label>
               	</div>
              	</div>
					
	            <?php
						$mpmjb = $row['mpm_jb'];
						if ($mpmjb == "1") {
							$mpmjby = "checked";
							$mpmjbt = "";
						} else {
							$mpmjby = "";
							$mpmjbt = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_jb" value="1" <?php  echo $mpmjby;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_jb" value="0" <?php  echo $mpmjbt;?> />Tidak</label>
               	</div>
              	</div>
					
				<h3><b>SP : 3</b></h3>
	            <?php
						$evaljb = $row['mengevaluasi_jb'];
						if ($evaljb == "1") {
							$evaljby = "checked";
							$evaljbt = "";
						} else {
							$evaljby = "";
							$evaljbt = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jb" value="1" <?php  echo $evaljby;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jb" value="0" <?php  echo $evaljbt;?> />Tidak</label>
               	</div>
              	</div>
						
	            <?php
						$mpmhc = $row['mpm_hc'];
						if ($mpmhc == "1") {
							$mpmhcy = "checked";
							$mpmhct = "";
						} else {
							$mpmhcy = "";
							$mpmhct = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol halusinasi dengan melakukan aktivitas terjadwal</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_hc" value="1" <?php  echo $mpmhcy;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_hc" value="0" <?php  echo $mpmhct;?> />Tidak</label>
               	</div>
              	</div>
						
	            <?php
						$mpmjc = $row['mpm_jc'];
						if ($mpmjc == "1") {
							$mpmjcy = "checked";
							$mpmjct = "";
						} else {
							$mpmjcy = "";
							$mpmjct = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_jc" value="1" <?php  echo $mpmjcy;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_jc" value="0" <?php  echo $mpmjct;?> />Tidak</label>
               	</div>
              	</div>
					
				<h3><b>SP : 4</b></h3>
	            <?php
						$evaljc = $row['mengevaluasi_jc'];
						if ($evaljc == "1") {
							$evaljcy = "checked";
							$evaljct = "";
						} else {
							$evaljcy = "";
							$evaljct = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jc" value="1" <?php  echo $evaljcy;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jc" value="0" <?php  echo $evaljct;?> />Tidak</label>
               	</div>
              	</div>
						
	            <?php
						$mpmhd = $row['mpm_hd'];
						if ($mpmhd == "1") {
							$mpmhdy = "checked";
							$mpmhdt = "";
						} else {
							$mpmhdy = "";
							$mpmhdt = "checked";
						} 
				?>
                 <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol halusinasi dengan minum obat secara teratur</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_hd" value="1" <?php  echo $mpmhdy;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_hd" value="0" <?php  echo $mpmhdt;?> />Tidak</label>
               	</div>
              	</div>
						
	            <?php
						$mpmjd = $row['mpm_jd'];
						if ($mpmjd == "1") {
							$mpmjdy = "checked";
							$mpmjdt = "";
						} else {
							$mpmjdy = "";
							$mpmjdt = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_jd" value="1" <?php  echo $mpmjdy;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_jd" value="0" <?php  echo $mpmjdt;?> />Tidak</label>
               	</div>
              	</div>
				 
                 <div class="form-actions row-fluid">
                	<div class="span7 offset3">
                      <button type="submit" class="btn btn-primary" name="action" value="update">Simpan</button>
                      <button type="reset" class="btn btn-secondary" value="Batal">Batal</button>
                    </div>
              	</div>
			</form>
		</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span7" -->            
<?php 	}
		} else {
			$id_pasien = $_GET['id'];
?>
<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Tambah Data Keperawatan</span></h3>
		</div>
		<div class="content">
			<form class="form-horizontal row-fluid" action="prokeperawatan.php" method="post">
			<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
				
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Ruangan Keperawatan</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="ruangan" required/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Tanggal Keperawatan</label>
                <div class="controls span5">
                <input type="text" id="datepicker" class="row-fluid" name="tgl_keperawatan" required/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Jam Keperawatan</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="jam_keperawatan" required/>
                </div>
                </div>
                 
                <br></br>   
                <h3><b>SP : 1</b></h3>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Membina hubungan saling percaya</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mhs_percaya" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mhs_percaya" value="0" checked/>Tidak</label>
               	</div>
              	</div>
	              	
				<div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengidentifikasi halusinasi</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="m_halusinasi" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="m_halusinasi" value="0" checked />Tidak</label>
               	</div>
              	</div>	
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengajarkan pasien mengontrol halusinasi dengan menghardik</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_ha" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_ha" value="0" checked />Tidak</label>
               	</div>
              	</div>	
	            
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_ja" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_ja" value="0" checked />Tidak</label>
               	</div>
              	</div> 
				    	
                <h3><b>SP : 2</b></h3>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_ja" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_ja" value="0" checked />Tidak</label>
               	</div>
              	</div>
	              	
	            <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol halusinasi dengan bercakap-cakap</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_hb" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_hb" value="0" checked />Tidak</label>
               	</div>
              	</div> 
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_jb" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_jb" value="0" checked />Tidak</label>
               	</div>
              	</div>  
				    
	           <h3><b>SP : 3</b></h3>
               <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jb" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jb" value="0" checked />Tidak</label>
               	</div>
              	</div>
		
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol halusinasi dengan melakukan aktivitas terjadwal</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_hc" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_hc" value="0" checked />Tidak</label>
               	</div>
              	</div>
						
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_jc" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_jc" value="0" checked />Tidak</label>
               	</div>
              	</div>
	            
	            <h3><b>SP : 4</b></h3>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jc" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jc" value="0" checked />Tidak</label>
               	</div>
              	</div>
						
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol halusinasi dengan minum obat secara teratur</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_hd" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_hd" value="0" checked />Tidak</label>
               	</div>
              	</div>
						
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_jd" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_jd" value="0" checked />Tidak</label>
               	</div>
              	</div>
	            
				<div class="form-actions row-fluid">
                	<div class="span7 offset3">
                      <button type="submit" class="btn btn-primary" name="submit" value="Simpan">Simpan</button>
                      <button type="reset" class="btn btn-secondary" value="Batal">Batal</button>
                    </div>
              	</div>
			</form>
		</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span7" -->
<?php 	} ?>		

	