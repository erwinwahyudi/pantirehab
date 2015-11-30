<?php
    include "koneksidb.php";
    $session = $_SESSION['user'];
    $qlogin = mysql_query("SELECT * FROM login where uname='$session' ");
    $rlogin = mysql_fetch_array($qlogin);   
    $id_login = $rlogin['id_login'];
    $query = mysql_query("SELECT ot.* , ps.* FROM orang_tua ot RIGHT JOIN pasien ps ON ot.id_pasien = ps.id_pasien WHERE ot.id_login ='$id_login' ");
    $row = mysql_fetch_array($query);
                    
?>

<div class="span7">
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-info-sign"></i><span>Perkembangan dan Keperawatan Anak</span></h3>
		</div>
        <div class="content"> 
<?php
if(isset($_POST['kirim'])){
	 	$kode_unik = $_POST['kode_unik'];
		$id_login = $_POST['id_login'];
		$qcek = mysql_query("SELECT * from orang_tua where id_login='".$id_login."'");
		$data = mysql_fetch_array($qcek);
	 if ($kode_unik == ($data['kode_unik']) ) {
			echo " ";
	 } else {
		?>
        
	 
	<form class="form-horizontal row-fluid" method="POST" action="?menu=ot_pilihpasien">
 	<input type="hidden" name="id_login" value="<?php echo $id_login; ?>">
    <div class="form-row control-group row-fluid">
    <label class="control-label span4" for="normal-field">Silahkan Masukkan Kode :</label>&nbsp; &nbsp;<i class="icon-remove"></i>&nbsp;&nbsp; <font style="color:#F00;">kode unik salah</font>
    <div class="controls span3">
    <input type="text" class="row-fluid" name="kode_unik" placeholder="kode unik" required />
    </div>
    </div>

    <div class="form-actions row-fluid">
    <div class="span7 offset3">
        <button type="submit" class="btn btn-primary" name="kirim" value="kirim">OK</button>
        <button type="reset" class="btn btn-secondary" value="Batal">Batal</button>
    </div>
    </div>
</form>
        <?php	 	
	 }
} else {
?>  
	<form class="form-horizontal row-fluid" method="POST" action="?menu=ot_pilihpasien">
 	<input type="hidden" name="id_login" value="<?php echo $id_login; ?>">
    <div class="form-row control-group row-fluid">
    <label class="control-label span4" for="normal-field">Silahkan Masukkan Kode :</label>
        <div class="controls span3">
        <input type="text" class="row-fluid" name="kode_unik" placeholder="kode unik" required />
    </div>
    </div>

    <div class="form-actions row-fluid">
    <div class="span7 offset3">
        <button type="submit" class="btn btn-primary" name="kirim" value="kirim">OK</button>
        <button type="reset" class="btn btn-secondary" value="Batal">Batal</button>
    </div>
    </div>
</form>

<?php } ?>
	
<?php
if(isset($_POST['kirim'])){
    $kode_unik = $_POST['kode_unik'];
    $id_login = $_POST['id_login'];
    $qcek = mysql_query("SELECT * from orang_tua where id_login='".$id_login."'");
    $data = mysql_fetch_array($qcek);
 
    if ($kode_unik == ($data['kode_unik']) ) {
        ?>
            <form class="form-horizontal row-fluid" method="POST" action="?menu=grafik">
            <input type="hidden" name="id_pasien" value="<?php echo $row['id_pasien']; ?>">
               
               <div class="form-row control-group row-fluid">
                <label class="control-label span4" for="default-select">Pilih Grafik :</label>
                <div class="controls span3">
                  <select name="grafik" class="row-fluid" id="default-select">
                    <option value="perkembangan">Perkembangan</option>
                    <option value="keperawatan">Keperawatan</option>
                  </select>
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
    } else {
        echo "";
	}  
}
?>





