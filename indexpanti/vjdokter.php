
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8" />
  <title>Jadwal Dokter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />


  <!-- Stylesheets -->
  <link href="style/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" href="style/font-awesome.css" />
  <link href="style/prettyPhoto.css" rel="stylesheet" />
  <!-- Parallax slider -->
  <link rel="stylesheet" href="style/slider.css" />
  <!-- Flexslider -->
  <link rel="stylesheet" href="style/flexslider.css" />

  <link href="style/style.css" rel="stylesheet" />

  <!-- Colors - Orange, Purple, Light Blue (lblue), Red, Green and Blue -->
  <link href="style/red.css" rel="stylesheet" />

  <link href="style/bootstrap-responsive.css" rel="stylesheet" />
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link href="http://rsk.kalbarprov.go.id/templates/ja_bistro/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

<!-- Header Starts -->
<header>
  <div class="container">
    <div class="row">
      <div class="span9">
        <div class="logo">
          <img src="img/logo.png" height="145" width="65" style="float:left; left: 200px; top: 10px; padding-right:10px;">
          <h1><span class="color"><b>PANTI REHABILITASI NAPZA</b></span></h1>
          <h5><div class="hmeta">PEMERINTAH PROVINSI KALIMANTAN BARAT</div></h5>
         </div>
      </div>
    </div>
  </div>
</header>

<!-- Navigation bar starts -->
          <div class="navbar">
           <div class="navbar-inner">
             <div class="container">
               <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                 <span>Menu</span>
               </a>
               <div class="nav-collapse collapse">
                 <ul class="nav">
                   <li><a href="?halaman=index">Beranda</a></li>
                   <!-- Refer Bootstrap navbar doc -->
                   <li><a href="?halaman=vppanti" >Profil Panti</a></li>
                   <li><a href="?halaman=galeri">Galeri</a></li>
                   <li><a href="?halaman=vjdokter" style="background: #f3f3f3 !important;">Jadwal Dokter</a></li>
                   <li><a href="?halaman=hubungi">Hubungi Kami</a></li>
                   <li><a href="?halaman=login">Login</a></li>
                 </ul>
               </div>
              </div>
           </div>
         </div>

<!-- Navigation bar ends -->

<div class="content">
  <div class="container">

 
<div class="row-fluid">
  <div class="box gradient">

      <div class="title">          
        <h5>
          <i class=" icon-bar-chart"></i> <span>Tabel Jadwal Dokter</span>
         </h5>
      </div><!-- End div class.title -->


      <div class="content top">
            
             <table id="datatable_example" class="responsive table table-striped table-bordered" style="width:100%;margin-bottom:0; ">
      <thead>
        <tr align="center">
          <th>No</th>
          <th>Tanggal Jadwal Dokter</th>
          <th>Minggu</th>
          <th>Dokter Umum</th>
          <th>Dokter Konsulen</th>
          <th>Keterangan</th>
        </tr>
      </thead>
            <tbody>
        <?php
            include "koneksidb.php";
            $query = mysql_query("SELECT * FROM jadwal_dokter");
            $no=0;
            while ($row = mysql_fetch_array($query))
            {
              $no++;
              $id_jdokter = $row['id_jdokter'];
              $tgl_jdokter = $row['tgl_jdokter'];
              $minggu = $row['minggu'];
              $dr_umum = $row['dr_umum'];
              $dr_konsulen = $row['dr_konsulen'];
              $ket = $row['ket'];
              echo "<tr align='center'> 
                  <td>$no</td>
                  <td>$tgl_jdokter</td>
                  <td>$minggu</td>
                  <td>$dr_umum</td>
                  <td>$dr_konsulen</td>
                  <td>$ket</td>             
                  </tr>";
            }
        ?>
            </tbody>
      </table>
      <hr />
   </div><!-- End div class.conten top -->
</div><!-- End div class.box gradient -->
</div><!-- End div class.row-fluid --> <!-- Price details. Note down the class name before you edit. -->
  

<!-- Jam Berkunjung starts -->

  <div class="services">
    <div class="row">

      <div class="span6">
        <div class="col-l">
          <div class="service">
            <div class="b-yellow serv-block">
            <h5 style="color:#FFF; padding-top:10px">Jam Berkunjung</h5>
              <img src="img/clock.png" height="70" width="70" style="padding-top:10px;">
              <h3>Pagi</h3>
              <p style="margin:-20px; padding-bottom:20px;">09.00-11.00 WIB</p>
            </div>
          </div>
        </div>
        
        <div class="col-r">
          <div class="service">      
            <div class="b-orange serv-block">
            <h5 style="color:#FFF; padding-top:10px">Jam Berkunjung</h5>
              <img src="img/MB__clock.png" height="70" width="70" style="padding-top:10px;">
              <h3>Sore</h3>
              <p style="margin:-20px; padding-bottom:20px;">15.00-17.00 WIB</p>
            </div>     
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="span6">
        <div class="col-l">
          <div class="service">
            <div class="b-blue serv-block">
              <img src="img/Home.png" height="110" width="110" style="padding-top:10px;">
              <h3>Alamat</h3>
              <p style="margin:-20px; padding-bottom:20px;">Jalan Alianyang No.01</p>
            </div>
          </div>
        </div>
        <div class="col-r">
          <div class="service"> 
            <div class="b-green serv-block">
              <img src="img/ambulance.png" height="110" width="110" style="padding-top:10px;">
              <h3>Ambulan</h3>
            <p style="margin:-20px; padding-bottom:20px;">TELP 0561-767525</p>
            </div> 
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      
    </div>
  </div>
<hr />

<!-- Jam Berkunjung Ends -->

  </div>
</div>

  </div>
</div>

<!-- Social -->

<div class="social-links">
  <div class="container">
    <div class="row">
      <div class="span12">
        <p class="big"><span>Follow Us On</span> <a href="https://id-id.facebook.com/pages/RSK-Pontianak/172939612737546"><i class="icon-facebook"></i>Facebook</a> <a href="https://twitter.com/pantirehabnapza"><i class="icon-twitter"></i>Twitter</a> <a href="https://plus.google.com/106306058404182031569"><i class="icon-google-plus"></i>Google Plus</a></p>
      </div>
    </div>    
  </div>
</div>


<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">

      <div class="widgets">
        <div class="span4">
          <div class="fwidget">

            </div>
        </div>
      </div>

      <div class="span12">
          <div class="copy">
           <p>Copyright &copy; <a href="?halaman=index">Panti Rehabilitasi Napza | 2014</a> - <a href="?halaman=index">Beranda</a> | <a href="?halaman=vppanti">Profil Panti</a> | <a href="?halaman=galeri">Galeri</a> | <a href="?halaman=vjdokter">Jadwal Dokter</a> | <a href="?halaman=hubungi">Hubungi Kami</a> | <a href="?halaman=login1">Login</a></p>
          </div>
      </div>
    </div>
  <div class="clearfix"></div>
  </div>
</footer> 

<!-- JS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script> 
<script src="js/jquery.isotope.js"></script> <!-- Isotope for gallery -->
<script src="js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto for images -->
<script src="js/jquery.cslider.js"></script> <!-- Parallax slider -->
<script src="js/modernizr.custom.28468.js"></script>
<script src="js/filter.js"></script> <!-- Filter for support page -->
<script src="js/cycle.js"></script> <!-- Cycle slider -->
<script src="js/jquery.flexslider-min.js"></script> <!-- Flex slider -->

<script src="js/easing.js"></script> <!-- Easing -->
<script src="js/custom.js"></script>
</body>
</html>
