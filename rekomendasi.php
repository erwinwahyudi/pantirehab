<?php
    include "koneksidb.php";

	$thn = date("Y");
    $bln = date("m");
    $tgl = date("d");
    $id_pasien = $_GET['id'];
	                                
	$q = mysql_query("SELECT SUM(mhs_percaya + m_halusinasi + mpm_ha+mpm_ja + mengevaluasi_ja + mpm_hb + mpm_jb + mengevaluasi_jb + mpm_jc + mpm_hc + mengevaluasi_jc + mpm_hd + mpm_jd) AS total from keperawatan where id_pasien='".$id_pasien."' AND tgl_keperawatan='".$thn."-".$bln."-".$tgl."' ");
    $d = mysql_fetch_array($q);
    $totalk = $d['total'];
    
                              	
    
    $qp = mysql_query("SELECT SUM(mhs_percaya + m_pk + mpk_cfa + mpm_ja + mengevaluasi_ja + mpk_cfb + mpm_jb + mengevaluasi_jb + mpk_cv + mpm_jc + mengevaluasi_jc + mpk_cs + mpm_jd + mengevaluasi_jd + mpk_mo + mpm_je) AS total from perkembangan where id_pasien='".$id_pasien."' AND tgl_perkembangan='".$thn."-".$bln."-".$tgl."' ");
    $dp = mysql_fetch_array($qp);
    $totalp = $dp['total'];

  
?>


<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-book"></i><span>Rekomendasi Pasien Sembuh</span></h3>
		</div>
		<div class="content">		
			<form class="form-horizontal row-fluid" action="#" method="post">
				<?php
				$qpasien = mysql_query("SELECT * FROM pasien WHERE id_pasien='".$_GET['id']."'");
				$row = mysql_fetch_array($qpasien);
				?>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="disabled-input">Nama Pasien</label>
                <div class="controls span3">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['nm_pasien']; ?>">
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="disabled-input">Tanggal Masuk</label>
                <div class="controls span3">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['tgl_masuk']; ?>">
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="disabled-input">Tanggal Hari ini</label>
                <div class="controls span3">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo date("Y-m-d"); ?>">
                </div>
              	</div>                
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="disabled-input">Total Poin Maks Perkembangan</label>
                <div class="controls span3">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="16">
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="disabled-input">Poin Perkembangan</label>
                <div class="controls span3">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $totalp; ?>" style="color:#F00;">
                </div>
              	</div>
               	
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="disabled-input">Total Poin Maks Keperawatan</label>
                <div class="controls span3">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="13">
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="disabled-input">Poin Keperawatan</label>
                <div style="color:#F00" class="controls span3">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $totalk; ?>" style="color:#F00;">
                </div>
              	</div>
                
                <?php
                if($totalp == '16' && $totalk == '13') {
                	$hasil = "Pasien memenuhi syarat rekomendasi";
                } else {
                	$hasil = "Pasien tidak memenuhi syarat rekomendasi";
                }
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5" for="disabled-input">Hasil</label>
                <div class="controls span6">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $hasil; ?>">
                </div>
              	</div>
			</form>
            
            <?php
              $querykp = mysql_query("SELECT kep.*, pr.* FROM keperawatan kep, perkembangan pr WHERE kep.id_pasien='$id_pasien' AND pr.id_pasien='$id_pasien' AND kep.mhs_percaya='1' AND kep.m_halusinasi='1' AND kep.mpm_ha='1' AND kep.mpm_ja='1' AND kep.mengevaluasi_ja='1' AND kep.mpm_hb='1' AND kep.mpm_jb='1' AND kep.mengevaluasi_jb='1' AND kep.mpm_jc='1' AND kep.mpm_hc='1' AND kep.mengevaluasi_jc='1' AND kep.mpm_hd='1' AND pr.mhs_percaya='1' AND pr.m_pk='1' AND pr.mpk_cfa='1' AND pr.mpm_ja='1' AND pr.mengevaluasi_ja='1' AND pr.mpk_cfb='1' AND pr.mpm_jb='1' AND pr.mengevaluasi_jb='1' AND pr.mpk_cv='1' AND pr.mpm_jc='1' AND pr.mengevaluasi_jc='1' AND pr.mpk_cs='1' AND pr.mpm_jd='1' AND pr.mengevaluasi_jd='1' AND pr.mpk_mo='1' AND pr.mpm_je='1' AND kep.id_pasien=pr.id_pasien AND kep.tgl_keperawatan=pr.tgl_perkembangan");
                while ($datakp = mysql_fetch_array($querykp)) {
                    echo "total poin keperawatan dan perkembangan di tanggal ".$datakp['tgl_keperawatan']." memenuhi syarat rekomendasi";
                    echo "<br>";
                    
                }
            ?>
			</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span7" -->




<?php    
function perkembangan () {
    $id_pasien = $_GET['id'];
    $tgl = mysql_query("SELECT max(tgl_perkembangan) as tglperkembangan FROM perkembangan WHERE id_pasien='".$id_pasien."' ");
    $tgl = mysql_fetch_array($tgl);

    $tglper = $tgl['tglperkembangan'];

    $rowp = mysql_query("SELECT * FROM perkembangan WHERE tgl_perkembangan='$tglper'");
    $rowp = mysql_fetch_array($rowp);
?>

<div class="row-fluid ">
 <div class="span12">
    <div class="box gradient">
        <div class="title">
            <h3><i class="icon-book"></i><span>Data Perkembangan</span></h3>
        </div>
        <div class="content">

        <h3>Tanggal perkembangan terakhir : <b><?php echo $tglper; ?></b></h3>

            <form class="form-horizontal row-fluid" >
           
                
              <h3><b>SP : 1</b></h3>
                <?php
                        $mhsp = $rowp['mhs_percaya'];
                        if ($mhsp == "1") {
                            $mhsp = "ya";
                        } else {
                            $mhsp = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Membina hubungan saling percaya</label>
                <div class="controls span2">
                    <label class="inline radio"> = <?php echo $mhsp; ?> </label>
                </div>
                </div>
                        
                <?php
                        $mpk = $rowp['m_pk'];
                        if ($mpk == "1") {
                            $mpk = "ya";
                        } else {
                            $mpk= "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Mengidentifikasi prilaku kekerasan</label>
                <div class="controls span2">
                   <label class="inline radio"> = <?php echo $mpk;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpkcfa = $rowp['mpk_cfa'];
                        if ($mpkcfa == "1") {
                            $mpkcfa = "ya";
                        } else {
                           $mpkcfa = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Mengajarkan pasien mengontrol prilaku kekerasan dengan cara fisik 1</label>
                <div class="controls span2">
                    <label class="inline radio"> = <?php echo $mpkcfa;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmja = $rowp['mpm_ja'];
                        if ($mpmja == "1") {
                            $mpmja = "ya";
                        } else {
                            $mpmja = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span2">
                   <label class="inline radio"> = <?php echo $mpmja;?> </label>
                </div>
                </div>
                    
                <h3><b>SP : 2</b></h3>
                <?php
                        $mja = $rowp['mengevaluasi_ja'];
                        if ($mja == "1") {
                            $mja = "ya";
                        } else {
                            $mja = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span2">
                   <label class="inline radio"> = <?php echo $mja;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpkcfb = $rowp['mpk_cfb'];
                        if ($mpkcfb == "1") {
                            $mpkcfb = "ya";
                        } else {
                           $mpkcfb = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Melatih pasien mengontrol prilaku kekerasan dengan cara fisik 2</label>
                <div class="controls span2">
                   <label class="inline radio"> = <?php echo $mpkcfb;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmjb = $rowp['mpm_jb'];
                        if ($mpmjb == "1") {
                            $mpmjb = "ya";
                        } else {
                           $mpmjb = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span2">
                    <label class="inline radio"> = <?php echo $mpmjb;?> </label>
                </div>
                </div>
                        
                <h3><b>SP : 3</b></h3>
                <?php
                        $mjb = $rowp['mengevaluasi_jb'];
                        if ($mjb == "1") {
                            $mjb = "ya";
                        } else {
                            $mjb = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span2">
                   <label class="inline radio"> = <?php echo $mjb; ?> </label>
                </div>
                </div>
                        
               <?php
                        $mpkcv = $rowp['mpk_cv'];
                        if ($mpkcv == "1") {
                            $mpkcv = "ya";
                        } else {
                            $mpkcv = "tidak";
                        } 
              ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Melatih pasien mengontrol prilaku kekerasan dengan cara verbal</label>
                <div class="controls span2">
                  <label class="inline radio"> = <?php echo $mpkcv;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmjc = $rowp['mpm_jc'];
                        if ($mpmjc == "1") {
                            $mpmjc = "ya";
                        } else {
                            $mpmjc = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span2">
                    <label class="inline radio"> = <?php echo $mpmjc;?> </label>
                </div>
                </div>
                
                <h3><b>SP : 4</b></h3>
                <?php
                        $mjc = $rowp['mengevaluasi_jc'];
                        if ($mjc == "1") {
                            $mjc = "ya";
                        } else {
                           $mjc = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span2">
                    <label class="inline radio"> = <?php echo $mjc;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpkcs = $rowp['mpk_cs'];
                        if ($mpkcs == "1") {
                            $mpkcs = "ya";
                        } else {
                           $mpkcs = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Melatih pasien mengontrol prilaku kekerasan dengan cara spiritual</label>
                <div class="controls span2">
                    <label class="inline radio"> = <?php echo $mpkcs; ?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmjd = $rowp['mpm_jd'];
                        if ($mpmjd == "1") {
                            $mpmjd = "ya";
                        } else {
                            $mpmjd = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span2">
                     <label class="inline radio"> = <?php echo $mpmjd; ?> </label>
                </div>
                </div>
                    
                <h3><b>SP : 5</b></h3>
                <?php
                        $mjd = $rowp['mengevaluasi_jd'];
                        if ($mjd == "1") {
                            $mjd = "ya";
                        } else {
                            $mjd = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Mengevaluasi jadwal kegiatan harian :</label>
                <div class="controls span2">
                    <label class="inline radio"> = <?php echo $mjd; ?> </label>
                </div>
                </div>
                    
                <?php
                        $mpkmo = $rowp['mpk_mo'];
                        if ($mpkmo == "1") {
                            $mpkmo = "ya";
                         } else {
                            $mpkmo = "tidak";
                        } 
                ?>
                 <div class="form-row control-group row-fluid">
                <label class="control-label span7">Melatih pasien mengontrol prilaku kekerasan dengan cara verbal</label>
                <div class="controls span2">
                     <label class="inline radio"> = <?php echo $mpkmo; ?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmje = $rowp['mpm_je'];
                        if ($mpmje == "1") {
                            $mpmje = "ya";
                        } else {
                            $mpmje = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span7">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span2">
                     <label class="inline radio"> = <?php echo $mpmje; ?> </label>
                </div>
                </div>
                

                </div>
            </form>
        </div><!-- class="content" -->
    </div><!-- class="box gradient" -->
</div><!-- class="span7" -->
</div>
<?php } ?>



<?php   
function keperawatan () {
    $id_pasien = $_GET['id'];
    $tgl = mysql_query("SELECT max(tgl_keperawatan) as tglkeperawatan FROM keperawatan WHERE id_pasien='".$id_pasien."' ");
    $tgl = mysql_fetch_array($tgl);

    $tglkep = $tgl['tglkeperawatan'];

    $rowk = mysql_query("SELECT * FROM keperawatan WHERE tgl_keperawatan='$tglkep'");
    $rowk = mysql_fetch_array($rowk);
?>
<div class="row-fluid ">
<div class="span12">
    <div class="box gradient">
        <div class="title">
            <h3><i class="icon-book"></i><span>Data Keperawatan</span></h3>
        </div>
        <div class="content">
        <h3>Tanggal keperawatan terakhir : <b><?php echo $tglkep; ?></b></h3>

                <form class="form-horizontal row-fluid" >
                         
                <h3><b>SP : 1</b></h3>
                <?php
                        $mhsp = $rowk['mhs_percaya'];
                        if ($mhsp == "1") {
                            $mhsp = "ya";
                        } else {
                            $mhsp = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span8">Membina hubungan saling percaya</label>
                <div class="controls span2">
                   <label class="inline radio"> = <?php echo $mhsp;?> </label>
                </div>
                </div>
                
                <?php
                        $mhal = $rowk['m_halusinasi'];
                        if ($mhal == "1") {
                            $mhal = "ya";
                        } else {
                           $mhal = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span8">Mengidentifikasi halusinasi</label>
                <div class="controls span2">
                    <label class="inline radio"> = <?php echo $mhal;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmha = $rowk['mpm_ha'];
                        if ($mpmha == "1") {
                            $mpmha = "ya";                            
                        } else {
                           $mpmha = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span8">Mengajarkan pasien mengontrol halusinasi dengan menghardik</label>
                <div class="controls span2">
                    <label class="inline radio"> = <?php echo $mpmha;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmja = $rowk['mpm_ja'];
                        if ($mpmja == "1") {
                            $mpmja = "ya";                            
                        } else {
                           $mpmja = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span8">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span2">
                   <label class="inline radio"> = <?php echo $mpmja;?> </label>
                </div>
                </div>
                
                <h3><b>SP : 2</b></h3>
                <?php
                        $evalja = $rowk['mengevaluasi_ja'];
                        if ($evalja == "1") {
                            $evalja = "ya";
                        } else {
                             $evalja = "tidak";
                        } 
                ?>
                 <div class="form-row control-group row-fluid">
                <label class="control-label span8">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span2">
                    <label class="inline radio"> = <?php echo $evalja;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmhb = $rowk['mpm_hb'];
                        if ($mpmhb == "1") {
                            $mpmhb = "ya";
                        } else {
                            $mpmhb = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span8">Melatih pasien mengontrol halusinasi dengan bercakap-cakap</label>
                <div class="controls span2">
                    <label class="inline radio"> = <?php echo $mpmhb;?> </label>
                </div>
                </div>
                    
                <?php
                        $mpmjb = $rowk['mpm_jb'];
                        if ($mpmjb == "1") {
                            $mpmjb = "ya";
                        } else {
                            $mpmjb = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span8">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span2">
                     <label class="inline radio"> = <?php echo $mpmjb;?> </label>
                </div>
                </div>
                    
                <h3><b>SP : 3</b></h3>
                <?php
                        $evaljb = $rowk['mengevaluasi_jb'];
                        if ($evaljb == "1") {
                            $evaljb = "ya";
                        } else {
                            $evaljb = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span8">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span2">
                    <label class="inline radio"> = <?php echo $evaljb;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmhc = $rowk['mpm_hc'];
                        if ($mpmhc == "1") {
                            $mpmhc = "ya";
                        } else {
                           $mpmhc = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span8">Melatih pasien mengontrol halusinasi dengan melakukan aktivitas terjadwal</label>
                <div class="controls span2">
                    <label class="inline radio"> = <?php echo $mpmhc;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmjc = $rowk['mpm_jc'];
                        if ($mpmjc == "1") {
                            $mpmjc = "ya";
                        } else {
                           $mpmjc = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span8">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span2">
                   <label class="inline radio"> = <?php echo $mpmjc;?> </label>
                </div>
                </div>
                    
                <h3><b>SP : 4</b></h3>
                <?php
                        $evaljc = $rowk['mengevaluasi_jc'];
                        if ($evaljc == "1") {
                            $evaljc = "ya";
                        } else {
                            $evaljc = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span8">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span2">
                   <label class="inline radio"> = <?php echo $evaljc;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmhd = $rowk['mpm_hd'];
                        if ($mpmhd == "1") {
                            $mpmhd = "ya";
                        } else {
                            $mpmhd = "tidak";
                        } 
                ?>
                 <div class="form-row control-group row-fluid">
                <label class="control-label span8">Melatih pasien mengontrol halusinasi dengan minum obat secara teratur</label>
                <div class="controls span2">
                   <label class="inline radio"> = <?php echo $mpmhd;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmjd = $rowk['mpm_jd'];
                        if ($mpmjd == "1") {
                            $mpmjd = "ya";
                        } else {
                            $mpmjd = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span8">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span2">
                    <label class="inline radio"> = <?php echo $mpmjd;?> </label>
                </div>
                </div>
                 
            </form>
        </div><!-- class="content" -->
    </div><!-- class="box gradient" -->
</div><!-- class="span7" -->  
</div>
<?php } ?>



<script type="text/javascript">
                // <![CDATA[
                $(document).ready(function(){   
                    $( "#tabs" ).tabs();
                    $("#accordion4").accordion({ heightStyle: "content", collapsible: true });
                                     
                }); 

                // ]]>
 </script>   

 <div class="row-fluid ">
 <div class="box gradient span7">

      <div class="title">
            <div class="row-fluid">
                <h3>
                  <i class=" icon-bar-chart"></i> Data Perkembangan dan Keperawatan Terakhir
                </h3>
            </div>
        </div><!-- End .title -->
        <div class="content">
          <div class="accordion" id="accordion4">

                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseOne5">
                      Data Perkembangan Terakhir
                    </a>
                  </div>
                  
                  <div id="collapseOne5" class="accordion-body collapse">
                    <div class="accordion-inner">
                     <?php perkembangan(); ?>
                    </div>
                  </div>
                </div>


                
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseTwo5">
                      Data Keperawatan Terakhir
                    </a>
                  </div>
                  <div id="collapseTwo5" class="accordion-body collapse">
                    <div class="accordion-inner">
                        <?php keperawatan(); ?>
                     </div>
                  </div>
                </div>


              </div>      
        </div> <!-- End .content -->
    </div><!-- End .box -->
</div>