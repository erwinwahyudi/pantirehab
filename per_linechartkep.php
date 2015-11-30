
		<!--1) include file jquery.min.js dan higchart.js-->
		<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
		<script src="js/highcharts.js"></script>


		<script type="text/javascript">
		//2)script untuk membuat grafik, perhatikan setiap komentar agar paham
        $(function () {
            var chart;
            $(document).ready(function() {
                chart = new Highcharts.Chart({
                    chart: {
                        renderTo: 'container', //letakan grafik di div id container
        				//Type grafik, anda bisa ganti menjadi area,bar,column dan bar
                        type: 'line',  
                        marginRight: 130,
                        marginBottom: 25
                    },
                    title: {
						<?php 
						$thn = $_REQUEST['tahun']; 
						$bln = $_REQUEST['bulan'];
						if($bln == "1") {
							$bln = "Januari";
						} else if($bln == "2") {
							$bln = "Febuari";
						} else if($bln == "3") {
							$bln = "Maret";
						} else if($bln == "4") {
							$bln = "April";
						} else if($bln == "5") {
							$bln = "Mei";
						} else if($bln == "6") {
							$bln = "Juni";
						} else if($bln == "7") {
							$bln = "Juli";
						} else if($bln == "8") {
							$bln = "Agustus";
						} else if($bln == "9") {
							$bln = "September";
						} else if($bln == "10") {
							$bln = "Oktober";
						} else if($bln == "11") {
							$bln = "November";
						} else {
							$bln = "Desember";
						}
						 ?>
                        text: 'Grafik Keperawatan Pasien <?php echo "Bulan ".$bln." Tahun ".$thn?> ',
                        x: -20 //center
                    },
                    subtitle: {
                        text: 'Panti Rehabilitasi Napza',
                        x: -20
                    },
                    xAxis: { //X axis menampilkan data minggu 
                        
                        
                        categories: [
                        <?php
                        include "koneksidb.php";
                            $thn = $_REQUEST['tahun'];
                            $bln = $_REQUEST['bulan'];
                            $id_pasien = $_REQUEST['id_pasien'];
                            $tglakhir=cal_days_in_month(CAL_GREGORIAN,$bln,$thn);
                            $query = mysql_query("SELECT * FROM keperawatan WHERE tgl_keperawatan >= '".$thn."-".$bln."-01' AND tgl_keperawatan <= '".$thn."-".$bln."-".$tglakhir."' ");
                            
                            while ($data = mysql_fetch_array($query)) {
                                $tgl_keperawatan = $data['tgl_keperawatan'];
                                $exp = explode("-", $tgl_keperawatan);
                                
                                $hanyatgl = $exp[2];
                                echo $hanyatgl.",";
                        
                        }
                        ?>

                        ]
                    },
                    yAxis: {
                        title: {  //label yAxis
                            text: 'Tingkatan Nilai'
                        },
                        plotLines: [{
                            value: 0,
                            width: 1,
                            color: '#808080' //warna dari grafik line
                        }]
                    },

                    tooltip: { 
        			//fungsi tooltip, ini opsional, kegunaan dari fungsi ini 
        			//akan menampikan data di titik tertentu di grafik saat mouseover
                        formatter: function() {
                                return '<b>'+ this.series.name +'</b><br/>'+
                                this.x +': '+ this.y ;
                        }
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'top',
                        x: -10,
                        y: 100,
                        borderWidth: 0
                    },
        			//series adalah data yang akan dibuatkan grafiknya,
        			//saat ini mungkin anda heran, buat apa label indonesia dikanan 
        			//grafik, namun fungsi label ini sangat bermanfaat jika
        			//kita menggambarkan dua atau lebih grafik dalam satu chart,
        			//hah, emang bisa? ya jelas bisa dong, lihat tutorial selanjutnya 
                    
                    series: [{  
                        name: 'Keperawatan',  
        				//data yang akan ditampilkan c b
                        data:[
                                <?php
                                    $thn = $_REQUEST['tahun'];
                                    $bln = $_REQUEST['bulan'];
                                    $id_pasien = $_REQUEST['id_pasien'];
                                $tglakhir=cal_days_in_month(CAL_GREGORIAN,$bln,$thn);
                                $query = mysql_query("SELECT * FROM keperawatan WHERE tgl_keperawatan >= '".$thn."-".$bln."-01' AND tgl_keperawatan <= '".$thn."-".$bln."-".$tglakhir."'");
                                
                                while ($data = mysql_fetch_array($query)) {
                                    $tgl_keperawatan = $data['tgl_keperawatan'];
                                    $exp = explode("-", $tgl_keperawatan);
                                    
                                    $hanyatgl = $exp[2];
                                    
                                        $q = mysql_query("SELECT SUM(mhs_percaya + m_halusinasi + mpm_ha+mpm_ja + mengevaluasi_ja + mpm_hb + mpm_jb + mengevaluasi_jb + mpm_jc + mpm_hc + mengevaluasi_jc + mpm_hd + mpm_jd) AS total from keperawatan where id_pasien='$id_pasien' AND tgl_keperawatan='".$thn."-".$bln."-".$hanyatgl."' ");
                                        $d = mysql_fetch_array($q);
                                        $total = $d['total'];
                                        echo $total.",";    
                                
                            }
                                ?>
                        ]
                        
                        
                    }]
                });
            });
            
        });
		</script>

	<body>
    
<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

<?php    
    $tgl = mysql_query("SELECT max(tgl_keperawatan) as tglkeperawatan FROM keperawatan WHERE id_pasien='".$id_pasien."' ");
    $tgl = mysql_fetch_array($tgl);

    $tglkep = $tgl['tglkeperawatan'];

    $row = mysql_query("SELECT * FROM keperawatan WHERE tgl_keperawatan='$tglkep'");
    $row = mysql_fetch_array($row);
?>


    <div class="span7">
    <div class="box gradient">
        <div class="title">
            <h3><i class="icon-book"></i><span>Data Keperawatan</span></h3>
        </div>
        <div class="content">
        <h3>Tanggal keperawatan terakhir : <b><?php echo $tglkep; ?></b></h3>

                <form class="form-horizontal row-fluid" >
                         
                <h3><b>SP : 1</b></h3>
                <?php
                        $mhsp = $row['mhs_percaya'];
                        if ($mhsp == "1") {
                            $mhsp = "ya";
                        } else {
                            $mhsp = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Membina hubungan saling percaya</label>
                <div class="controls span7">
                   <label class="inline radio"> = <?php echo $mhsp;?> </label>
                </div>
                </div>
                
                <?php
                        $mhal = $row['m_halusinasi'];
                        if ($mhal == "1") {
                            $mhal = "ya";
                        } else {
                           $mhal = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengidentifikasi halusinasi</label>
                <div class="controls span7">
                    <label class="inline radio"> = <?php echo $mhal;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmha = $row['mpm_ha'];
                        if ($mpmha == "1") {
                            $mpmha = "ya";                            
                        } else {
                           $mpmha = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengajarkan pasien mengontrol halusinasi dengan menghardik</label>
                <div class="controls span7">
                    <label class="inline radio"> = <?php echo $mpmha;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmja = $row['mpm_ja'];
                        if ($mpmja == "1") {
                            $mpmja = "ya";                            
                        } else {
                           $mpmja = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                   <label class="inline radio"> = <?php echo $mpmja;?> </label>
                </div>
                </div>
                
                <h3><b>SP : 2</b></h3>
                <?php
                        $evalja = $row['mengevaluasi_ja'];
                        if ($evalja == "1") {
                            $evalja = "ya";
                        } else {
                             $evalja = "tidak";
                        } 
                ?>
                 <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                    <label class="inline radio"> = <?php echo $evalja;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmhb = $row['mpm_hb'];
                        if ($mpmhb == "1") {
                            $mpmhb = "ya";
                        } else {
                            $mpmhb = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol halusinasi dengan bercakap-cakap</label>
                <div class="controls span7">
                    <label class="inline radio"> = <?php echo $mpmhb;?> </label>
                </div>
                </div>
                    
                <?php
                        $mpmjb = $row['mpm_jb'];
                        if ($mpmjb == "1") {
                            $mpmjb = "ya";
                        } else {
                            $mpmjb = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                     <label class="inline radio"> = <?php echo $mpmjb;?> </label>
                </div>
                </div>
                    
                <h3><b>SP : 3</b></h3>
                <?php
                        $evaljb = $row['mengevaluasi_jb'];
                        if ($evaljb == "1") {
                            $evaljb = "ya";
                        } else {
                            $evaljb = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                    <label class="inline radio"> = <?php echo $evaljb;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmhc = $row['mpm_hc'];
                        if ($mpmhc == "1") {
                            $mpmhc = "ya";
                        } else {
                           $mpmhc = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol halusinasi dengan melakukan aktivitas terjadwal</label>
                <div class="controls span7">
                    <label class="inline radio"> = <?php echo $mpmhc;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmjc = $row['mpm_jc'];
                        if ($mpmjc == "1") {
                            $mpmjc = "ya";
                        } else {
                           $mpmjc = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                   <label class="inline radio"> = <?php echo $mpmjc;?> </label>
                </div>
                </div>
                    
                <h3><b>SP : 4</b></h3>
                <?php
                        $evaljc = $row['mengevaluasi_jc'];
                        if ($evaljc == "1") {
                            $evaljc = "ya";
                        } else {
                            $evaljc = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                   <label class="inline radio"> = <?php echo $evaljc;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmhd = $row['mpm_hd'];
                        if ($mpmhd == "1") {
                            $mpmhd = "ya";
                        } else {
                            $mpmhd = "tidak";
                        } 
                ?>
                 <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol halusinasi dengan minum obat secara teratur</label>
                <div class="controls span7">
                   <label class="inline radio"> = <?php echo $mpmhd;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmjd = $row['mpm_jd'];
                        if ($mpmjd == "1") {
                            $mpmjd = "ya";
                        } else {
                            $mpmjd = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                    <label class="inline radio"> = <?php echo $mpmjd;?> </label>
                </div>
                </div>
                 
            </form>
        </div><!-- class="content" -->
    </div><!-- class="box gradient" -->
</div><!-- class="span7" -->  


<div class="controls span4 offset7" style="margin-top:-1120px;">
        <div class="box gradient">
          <div class="title">
            <h3>
            <i class="icon-calendar"></i>
            <span>Keterangan Poin Perkembangan</span>
            </h3>
            
          </div>
          <div class="content ">
            <form class="bs-docs-example form-horizontal">
              <div class="control-group row-fluid">
                <label class="control-label span4" for="inputEmail">16 ke atas</label>
                <div class="controls span5 input-append">
                  <label class="inline radio"> = Baik sekali </label>
                </div>
              </div>

              <div class="control-group row-fluid">
                <label class="control-label span4" for="inputEmail">12 - 15</label>
                <div class="controls span5 input-append">
                  <label class="inline radio"> = Baik </label>
                </div>
              </div>

              <div class="control-group row-fluid">
                <label class="control-label span4" for="inputEmail">4 - 7</label>
                <div class="controls span5 input-append">
                  <label class="inline radio"> = Kurang </label>
                </div>
              </div>

              <div class="control-group row-fluid">
                <label class="control-label span4" for="inputEmail">0 - 3</label>
                <div class="controls span5 input-append">
                  <label class="inline radio"> = Buruk </label>
                </div>
              </div>
              
            </form>
          </div>
        </div>
        </div>          
	</body>
