<?php 
if(isset($_GET['grf'])) {

if($_GET['grf'] == 'per') {
 
?>
<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-info-sign"></i><span>Perkembangan</span></h3>
		</div>
        <div class="content"> 
        
            <form class="form-horizontal row-fluid" method="POST" action="?menu=dok_grafik">
            <input type="hidden" name="id_pasien" value="<?php echo $_GET['id']; ?>">
            <input type="hidden" name="grafik" value="perkembangan">


              <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="disabled-input">Tanggal Masuk Pasien :</label>
                <div class="controls span3">
                <?php
                  $id_pasien = $_GET['id'];
                  $query = mysql_query("SELECT * FROM pasien WHERE id_pasien='$id_pasien'");
                  $row = mysql_fetch_array($query);
                ?>
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['tgl_masuk']; ?>">
                </div>
                </div>
               
               <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="default-select">Tahun :</label>
                <div class="controls span3">
                  <select name="tahun" class="row-fluid" id="default-select">
                    <?php
                      $tgl_masuk =  $row['tgl_masuk'];
                      $tglmasuk = mysql_query("SELECT LEFT ('$tgl_masuk', 4) as tglmasuk");
                      $tm  = mysql_fetch_array($tglmasuk);

                      $tglmsk = $tm['tglmasuk'];

                      $tgl_keluar =  $row['tgl_keluar'];
                      $tglkeluar = mysql_query("SELECT LEFT ('$tgl_keluar', 4) as tglkeluar");
                      $tk  = mysql_fetch_array($tglkeluar);
                      $tglklr = $tk['tglkeluar'];
                      if ($tglklr = "0000") {
                        $tglklr = date('20y');
                      } else {
                        $tglklr = $tglklr;
                      }

                    for ($i=$tglmsk; $i <= $tglklr ; $i=$i+1) { 
                      $thn = $i;
                      echo "<option value='".$thn."' >".$thn."</option>";
                    }
                ?>
                  </select>

                </div>
                </div>                
               
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="default-select">Bulan :</label>
                <div class="controls span3">
                  <select name="bulan" class="row-fluid" id="default-select">
                    <?php
                        for ($i=1; $i <= 12 ; $i=$i+1) { 
                        $bln = $i;
                          echo "<option value='".$bln."'>".$bln."</option>";
                    }
                    ?>
                  </select>
                </div>
                </div>
               
                    <div class="form-actions row-fluid">
                        <div class="span7 offset3">
                        <button type="submit" class="btn btn-primary" name="kirim" value="kirim">Kirim</button>
                    </div>
                    </div>
            </form>
		</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span7" -->

<?php
} elseif ($_GET['grf'] == "kep") {
?>

<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-info-sign"></i><span>Keperawatan</span></h3>
		</div>
        <div class="content"> 
            <form class="form-horizontal row-fluid" method="POST" action="?menu=dok_grafik">
            <input type="hidden" name="id_pasien" value="<?php echo $_GET['id']; ?>">
            <input type="hidden" name="grafik" value="keperawatan">

              <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="disabled-input">Tanggal Masuk Pasien :</label>
                <div class="controls span3">
                <?php
                  $id_pasien = $_GET['id'];
                  $query = mysql_query("SELECT * FROM pasien WHERE id_pasien='$id_pasien'");
                  $row = mysql_fetch_array($query);
                ?>
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['tgl_masuk']; ?>">
                </div>
                </div>
               
               <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="default-select">Tahun :</label>
                <div class="controls span3">
                  <select name="tahun" class="row-fluid" id="default-select">
                    <?php
                      $tgl_masuk =  $row['tgl_masuk'];
                      $tglmasuk = mysql_query("SELECT LEFT ('$tgl_masuk', 4) as tglmasuk");
                      $tm  = mysql_fetch_array($tglmasuk);

                      $tglmsk = $tm['tglmasuk'];

                      $tgl_keluar =  $row['tgl_keluar'];
                      $tglkeluar = mysql_query("SELECT LEFT ('$tgl_keluar', 4) as tglkeluar");
                      $tk  = mysql_fetch_array($tglkeluar);
                      $tglklr = $tk['tglkeluar'];
                      if ($tglklr = "0000") {
                        $tglklr = date('20y');
                      } else {
                        $tglklr = $tglklr;
                      }

                    for ($i=$tglmsk; $i <= $tglklr ; $i=$i+1) { 
                      $thn = $i;
                      echo "<option value='".$thn."' >".$thn."</option>";
                    }
                ?>
                  </select>
                </div>
                </div>                
               
                <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="default-select">Bulan :</label>
                <div class="controls span3">
                  <select name="bulan" class="row-fluid" id="default-select">
                    <?php
                        for ($i=1; $i <= 12 ; $i=$i+1) { 
                        $bln = $i;
                          echo "<option value='".$bln."'>".$bln."</option>";
                    }
                    ?>
                  </select>
                </div>
                </div>
               
                    <div class="form-actions row-fluid">
                        <div class="span7 offset3">
                        <button type="submit" class="btn btn-primary" name="kirim" value="kirim">Kirim</button>
                    </div>
                    </div>
            </form>
		</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span7" -->

<?php
 }
}
?>



<?php
if(isset($_POST['kirim'])){
	if ($_POST['grafik'] == "keperawatan") {
		include "per_linechartkep.php";
	} elseif ($_POST['grafik'] == "perkembangan") {
		include "per_linechartper.php";
	}
}
?>