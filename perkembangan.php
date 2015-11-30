<?php
		if(isset($_GET['action']))
		{				
			if($_GET['action'] == "update")
			{
				$id_pasien = $_GET['id'];
				$idper = $_GET['idper']; 
						
				$query = mysql_query("select * from perkembangan where id_perkembangan='$idper'");
				$row = mysql_fetch_array($query);
?>
<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Edit Data Perkembangan</span></h3>
		</div>
		<div class="content">

			<form class="form-horizontal row-fluid" action="properkembangan.php" method="post">
			<input type="hidden" name="id_perkembangan" value="<?php echo $idper; ?>">
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Ruangan Perkembangan</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="ruangan" required value="<?php echo $row['ruangan']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Tanggal Perkembangan</label>
                <div class="controls span5">
                <input type="text" id="datepicker" class="row-fluid" name="tgl_perkembangan" required value="<?php echo $row['tgl_perkembangan']; ?>"/>
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Jam Perkembangan</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="jam_perkembangan" required value="<?php echo $row['jam_perkembangan']; ?>"/>
                </div>
              	</div>
					
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
						$mpk = $row['m_pk'];
						if ($mpk == "1") {
							$mpky = "checked";
							$mpkt = "";
						} else {
							$mpky = "";
							$mpkt = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengidentifikasi prilaku kekerasan</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="m_pk" value="1" <?php  echo $mpky;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="m_pk" value="0" <?php  echo $mpkt;?> />Tidak</label>
               	</div>
              	</div>
						
                <?php
						$mpkcfa = $row['mpk_cfa'];
						if ($mpkcfa == "1") {
							$mpkcfay = "checked";
							$mpkcfat = "";
						} else {
							$mpkcfay = "";
							$mpkcfat = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengajarkan pasien mengontrol prilaku kekerasan dengan cara fisik 1</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpk_cfa" value="1" <?php  echo $mpkcfay;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpk_cfa" value="0" <?php  echo $mpkcfat;?> />Tidak</label>
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
						$mja = $row['mengevaluasi_ja'];
						if ($mja == "1") {
							$mjay = "checked";
							$mjat = "";
						} else {
							$mjay = "";
							$mjat = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_ja" value="1" <?php  echo $mjay;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_ja" value="0" <?php  echo $mjat;?> />Tidak</label>
               	</div>
              	</div>
						
                <?php
						$mpkcfb = $row['mpk_cfb'];
						if ($mpkcfb == "1") {
							$mpkcfby = "checked";
							$mpkcfbt = "";
						} else {
							$mpkcfby = "";
							$mpkcfbt = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol prilaku kekerasan dengan cara fisik 2</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpk_cfb" value="1" <?php  echo $mpkcfby;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpk_cfb" value="0" <?php  echo $mpkcfbt;?> />Tidak</label>
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
						$mjb = $row['mengevaluasi_jb'];
						if ($mjb == "1") {
							$mjby = "checked";
							$mjbt = "";
						} else {
							$mjby = "";
							$mjbt = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jb" value="1" <?php  echo $mjby;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jb" value="0" <?php  echo $mjbt;?> />Tidak</label>
               	</div>
              	</div>
						
               <?php
						$mpkcv = $row['mpk_cv'];
						if ($mpkcv == "1") {
							$mpkcvy = "checked";
							$mpkcvt = "";
						} else {
							$mpkcvy = "";
							$mpkcvt = "checked";
						} 
			  ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol prilaku kekerasan dengan cara verbal</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpk_cv" value="1" <?php  echo $mpkcvy;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpk_cv" value="0" <?php  echo $mpkcvt;?> />Tidak</label>
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
						$mjc = $row['mengevaluasi_jc'];
						if ($mjc == "1") {
							$mjcy = "checked";
							$mjct = "";
						} else {
							$mjcy = "";
							$mjct = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jc" value="1" <?php  echo $mjcy;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jc" value="0" <?php  echo $mjct;?> />Tidak</label>
               	</div>
              	</div>
						
                <?php
						$mpkcs = $row['mpk_cs'];
						if ($mpkcs == "1") {
							$mpkcsy = "checked";
							$mpkcst = "";
						} else {
							$mpkcsy = "";
							$mpkcst = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol prilaku kekerasan dengan cara spiritual</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpk_cs" value="1" <?php  echo $mpkcsy;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpk_cs" value="0" <?php  echo $mpkcst;?> />Tidak</label>
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
					
                <h3><b>SP : 5</b></h3>
	            <?php
						$mjd = $row['mengevaluasi_jd'];
						if ($mjd == "1") {
							$mjdy = "checked";
							$mjdt = "";
						} else {
							$mjdy = "";
							$mjdt = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian :</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jd" value="1" <?php  echo $mjdy;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jd" value="0" <?php  echo $mjdt;?> />Tidak</label>
               	</div>
              	</div>
					
                <?php
						$mpkmo = $row['mpk_mo'];
						if ($mpkmo == "1") {
							$mpkmoy = "checked";
							$mpkmot = "";
						} else {
							$mpkmoy = "";
							$mpkmot = "checked";
						} 
				?>
                 <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol prilaku kekerasan dengan cara verbal</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpk_mo" value="1" <?php  echo $mpkmoy;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpk_mo" value="0" <?php  echo $mpkmot;?> />Tidak</label>
               	</div>
              	</div>
						
                <?php
						$mpmje = $row['mpm_je'];
						if ($mpmje == "1") {
							$mpmjey = "checked";
							$mpmjet = "";
						} else {
							$mpmjey = "";
							$mpmjet = "checked";
						} 
				?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_je" value="1" <?php  echo $mpmjey;?> />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_je" value="0" <?php  echo $mpmjet;?> />Tidak</label>
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
            <h3><i class="icon-book"></i><span>Tambah Data Perkembangan</span></h3>
		</div>
		<div class="content">

			<form class="form-horizontal row-fluid" action="properkembangan.php" method="post">
			<input type="hidden" name="id_pasien" value="<?php echo $id_pasien; ?>">
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Ruangan Perkembangan</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="ruangan" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Tanggal Perkembangan</label>
                <div class="controls span5">
                <input type="text" id="datepicker" class="row-fluid" name="tgl_perkembangan" required />
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="normal-field">Jam Perkembangan</label>
                <div class="controls span5">
                <input type="text" id="normal-field" class="row-fluid" name="jam_perkembangan" required />
                </div>
              	</div>
					
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
                <label class="control-label span5">Mengidentifikasi prilaku kekerasan</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="m_pk" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="m_pk" value="0" checked />Tidak</label>
               	</div>
              	</div>	
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengajarkan pasien mengontrol prilaku kekerasan dengan cara fisik 1</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpk_cfa" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpk_cfa" value="0" checked />Tidak</label>
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
                <label class="control-label span5">Melatih pasien mengontrol prilaku kekerasan dengan cara fisik 2</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpk_cfb" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpk_cfb" value="0" checked />Tidak</label>
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
                <label class="control-label span5">Melatih pasien mengontrol prilaku kekerasan dengan cara verbal</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpk_cv" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpk_cv" value="0" checked />Tidak</label>
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
                <label class="control-label span5">Melatih pasien mengontrol prilaku kekerasan dengan cara spiritual</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpk_cs" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpk_cs" value="0" checked />Tidak</label>
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
	              
	            <h3><b>SP : 5</b></h3>
	            <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian :</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jd" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mengevaluasi_jd" value="0" checked />Tidak</label>
               	</div>
              	</div>
					
                
                 <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol prilaku kekerasan dengan minum obat secara teratur</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpk_mo" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpk_mo" value="0" checked/>Tidak</label>
               	</div>
              	</div>
						
               
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                	<label class="inline radio">
                	<input type="radio" name="mpm_je" value="1" />Ya</label>
                	<label class="inline radio">
                	<input type="radio" name="mpm_je" value="0" checked />Tidak</label>
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
