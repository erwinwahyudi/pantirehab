
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Grafik pendapatan perkapita</title>
		<!--1) include file jquery.min.js dan higchart.js-->
		<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
		<script src="js/highcharts.js"></script>
        <script type="text/javascript">
            $(function() {
                    $( "#datepicker" ).datepicker(
                        {  dateFormat: 'dd/mm/yy', 
                            changeMonth: true,
                            changeYear: true});
                });
                    
                        
        </script>

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
                        text: 'Grafik Perkembangan Pasien <?php echo "Bulan ".$bln." Tahun ".$thn?> ',
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
                            $query = mysql_query("SELECT * FROM perkembangan WHERE tgl_perkembangan >= '".$thn."-".$bln."-01' AND tgl_perkembangan <= '".$thn."-".$bln."-".$tglakhir."' ");
                           
                            while ($data = mysql_fetch_array($query)) {
                                $tgl_perkembangan = $data['tgl_perkembangan'];
                                $exp = explode("-", $tgl_perkembangan);
                                
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
        			
					<?php
                        include "koneksidb.php";
                        $query = mysql_query("SELECT SUM(mhs_percaya + m_pk + mpk_cfa + mpm_ja + mengevaluasi_ja + mpk_cfb + mpm_jb + mengevaluasi_jb + mpk_cv + mpm_jc + mengevaluasi_jc + mpk_cs + mpm_jd + mengevaluasi_jd + mpk_mo + mpm_je) AS total from perkembangan where id_pasien='1' AND tgl_perkembangan BETWEEN '01/10/2014' AND '07/10/2014'");
                        $data = mysql_fetch_array($query);
                        $minggu1 = $data['total'];
                    ?>
                    series: [{  
                        name: 'perkembangan',  
        				//data yang akan ditampilkan c b
                        data:[
                                <?php
                            $thn = $_REQUEST['tahun'];
                            $bln = $_REQUEST['bulan'];
                            $id_pasien = $_REQUEST['id_pasien'];
                                $tglakhir=cal_days_in_month(CAL_GREGORIAN,$bln,$thn);
                                $query = mysql_query("SELECT * FROM perkembangan WHERE tgl_perkembangan >= '".$thn."-".$bln."-01' AND tgl_perkembangan <= '".$thn."-".$bln."-".$tglakhir."'");
                                
                                while ($data = mysql_fetch_array($query)) {
                                    $tgl_perkembangan = $data['tgl_perkembangan'];
                                    $exp = explode("-", $tgl_perkembangan);
                                    
                                    $hanyatgl = $exp[2];
                                        $q = mysql_query("SELECT SUM(mhs_percaya + m_pk + mpk_cfa + mpm_ja + mengevaluasi_ja + mpk_cfb + mpm_jb + mengevaluasi_jb + mpk_cv + mpm_jc + mengevaluasi_jc + mpk_cs + mpm_jd + mengevaluasi_jd + mpk_mo + mpm_je) AS total from perkembangan where id_pasien='$id_pasien' AND tgl_perkembangan='".$thn."-".$bln."-".$hanyatgl."' ");
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
    $tgl = mysql_query("SELECT max(tgl_perkembangan) as tglperkembangan FROM perkembangan WHERE id_pasien='".$id_pasien."' ");
    $tgl = mysql_fetch_array($tgl);

    $tglper = $tgl['tglperkembangan'];

    $row = mysql_query("SELECT * FROM perkembangan WHERE tgl_perkembangan='$tglper'");
    $row = mysql_fetch_array($row);
?>

<div class="row-fluid ">
 <div class="span7">
    <div class="box gradient">
        <div class="title">
            <h3><i class="icon-book"></i><span>Data Perkembangan</span></h3>
        </div>
        <div class="content">

        <h3>Tanggal perkembangan terakhir : <b><?php echo $tglper; ?></b></h3>

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
                    <label class="inline radio"> = <?php echo $mhsp; ?> </label>
                </div>
                </div>
                        
                <?php
                        $mpk = $row['m_pk'];
                        if ($mpk == "1") {
                            $mpk = "ya";
                        } else {
                            $mpk= "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengidentifikasi prilaku kekerasan</label>
                <div class="controls span7">
                   <label class="inline radio"> = <?php echo $mpk;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpkcfa = $row['mpk_cfa'];
                        if ($mpkcfa == "1") {
                            $mpkcfa = "ya";
                        } else {
                           $mpkcfa = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengajarkan pasien mengontrol prilaku kekerasan dengan cara fisik 1</label>
                <div class="controls span7">
                    <label class="inline radio"> = <?php echo $mpkcfa;?> </label>
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
                        $mja = $row['mengevaluasi_ja'];
                        if ($mja == "1") {
                            $mja = "ya";
                        } else {
                            $mja = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                   <label class="inline radio"> = <?php echo $mja;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpkcfb = $row['mpk_cfb'];
                        if ($mpkcfb == "1") {
                            $mpkcfb = "ya";
                        } else {
                           $mpkcfb = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol prilaku kekerasan dengan cara fisik 2</label>
                <div class="controls span7">
                   <label class="inline radio"> = <?php echo $mpkcfb;?> </label>
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
                        $mjb = $row['mengevaluasi_jb'];
                        if ($mjb == "1") {
                            $mjb = "ya";
                        } else {
                            $mjb = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                   <label class="inline radio"> = <?php echo $mjb; ?> </label>
                </div>
                </div>
                        
               <?php
                        $mpkcv = $row['mpk_cv'];
                        if ($mpkcv == "1") {
                            $mpkcv = "ya";
                        } else {
                            $mpkcv = "tidak";
                        } 
              ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol prilaku kekerasan dengan cara verbal</label>
                <div class="controls span7">
                  <label class="inline radio"> = <?php echo $mpkcv;?> </label>
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
                        $mjc = $row['mengevaluasi_jc'];
                        if ($mjc == "1") {
                            $mjc = "ya";
                        } else {
                           $mjc = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian</label>
                <div class="controls span7">
                    <label class="inline radio"> = <?php echo $mjc;?> </label>
                </div>
                </div>
                        
                <?php
                        $mpkcs = $row['mpk_cs'];
                        if ($mpkcs == "1") {
                            $mpkcs = "ya";
                        } else {
                           $mpkcs = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol prilaku kekerasan dengan cara spiritual</label>
                <div class="controls span7">
                    <label class="inline radio"> = <?php echo $mpkcs; ?> </label>
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
                     <label class="inline radio"> = <?php echo $mpmjd; ?> </label>
                </div>
                </div>
                    
                <h3><b>SP : 5</b></h3>
                <?php
                        $mjd = $row['mengevaluasi_jd'];
                        if ($mjd == "1") {
                            $mjd = "ya";
                        } else {
                            $mjd = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Mengevaluasi jadwal kegiatan harian :</label>
                <div class="controls span7">
                    <label class="inline radio"> = <?php echo $mjd; ?> </label>
                </div>
                </div>
                    
                <?php
                        $mpkmo = $row['mpk_mo'];
                        if ($mpkmo == "1") {
                            $mpkmo = "ya";
                         } else {
                            $mpkmo = "tidak";
                        } 
                ?>
                 <div class="form-row control-group row-fluid">
                <label class="control-label span5">Melatih pasien mengontrol prilaku kekerasan dengan cara verbal</label>
                <div class="controls span7">
                     <label class="inline radio"> = <?php echo $mpkmo; ?> </label>
                </div>
                </div>
                        
                <?php
                        $mpmje = $row['mpm_je'];
                        if ($mpmje == "1") {
                            $mpmje = "ya";
                        } else {
                            $mpmje = "tidak";
                        } 
                ?>
                <div class="form-row control-group row-fluid">
                <label class="control-label span5">Menganjurkan pasien memasukkan dalam jadwal kegiatan harian</label>
                <div class="controls span7">
                     <label class="inline radio"> = <?php echo $mpmje; ?> </label>
                </div>
                </div>
                

                </div>
            </form>
        </div><!-- class="content" -->
    </div><!-- class="box gradient" -->
</div><!-- class="span7" -->


    <div class="controls span4 offset7" style="margin-top:-1345px;">
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
        <!-- End .box -->
</div>
	</body>
