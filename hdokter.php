<?php 
  include "session.php"; 
  include "koneksidb.php";
  $uname = $_SESSION['user'];
  $qcek = mysql_query("SELECT * FROM login WHERE uname='".$uname."' ");
  $data = mysql_fetch_array($qcek);

  if($data['kategori'] == "dokter") {
    
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="Page-Enter" content="blendTrans(Duration=0.2)">
<meta http-equiv="Page-Exit" content="blendTrans(Duration=0.2)">
<title>Web Panti Rehabilitasi Napza</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="css/images/favicon.png">
<!-- Le styles -->
<link href="js/plugins/chosen/chosen/chosen.css" rel="stylesheet">
<link href="css/twitter/bootstrap.css" rel="stylesheet">
<link href="css/base.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/jquery-ui-1.8.23.custom.css" rel="stylesheet">
<script src="js/plugins/modernizr.custom.32549.js"></script>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
</head>
<body>

<div id="loading">
  <img src="img/ajax-loader.gif">
</div>
<div id="responsive_part">
    <div class="logo">
      <img src="img/logo.png">
    </div>
    <ul class="nav responsive">
      <li>
      <btn class="btn btn-la1rge btn-i1nfo responsive_menu icon_item" data-toggle="collapse" data-target="#sidebar">
       <i class="icon-reorder"></i>
      </btn>
      </li>
    </ul>
</div> <!-- Responsive part -->

<div id="sidebar" class="collapse">
   <div class="logo">
    <img src="img/logo.png">
  </div>
  <ul id="sidebar_menu" class="navbar nav nav-list sidebar_box">
    <li class="accordion-group active">
    <a class="dashboard" href="hdokter.php"><img src="img/menu_icons/dashboard.png">Beranda</a>
    </li>
    <li>
    <a class="widgets" href="?menu=ppdokter">
    <img src="img/menu_top/profile-avatar.png">Profil Pribadi</a>
    </li>
    <li class="accordion-group">
    <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse3">
    <img src="img/menu_icons/tables.png">Riwayat Klinik</a>
    <ul id="collapse3" class="accordion-body collapse">
      <li><a href="?menu=dok_pilihpasien">Tambah Data Riwayat Klinik</a></li>
      <li><a href="?menu=dok_viewriwayatklinik">Lihat Data Riwayat Klinik</a></li>
    </ul>
    </li>
    <li class="accordion-group">
    <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse1">
    <img src="img/menu_icons/forms.png">Data</a>
    <ul id="collapse1" class="accordion-body collapse">
      <li><a href="?menu=vpasien">Data Pasien</a></li>
      <li><a href="?menu=vrmedik">Data Rekam Medik</a></li>
    </ul>
    </li>
    <li class="accordion-group">
    <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse2">
    <img src="img/menu_icons/forms.png">Laporan</a>
    <ul id="collapse2" class="accordion-body collapse">
      <li><a href="?menu=vkeperawatan">Laporan Keperawatan</a></li>
      <li><a href="?menu=vperkembangan">Laporan Perkembangan</a></li>
      <li><a href="?menu=vkonseling">Laporan Konseling</a></li>
    </ul>
    </li>
    <li>
    <a class="widgets"data-parent="#sidebar_menu" href="?menu=vfasesmen">
    <img src="img/menu_icons/forms.png">Formulir Asesmen</a>
    </li>
    
    <li class="accordion-group">
    <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse4">
    <img src="img/menu_icons/tables.png">Hasil Asesmen</a>
    <ul id="collapse4" class="accordion-body collapse">
      <li><a href="?menu=dok_pilihpasienha">Tambah Hasil Asesmen</a></li>
      <li><a href="?menu=dok_viewallhasesmen">Lihat Hasil Asesmen</a></li>
    </ul>
    </li>

     <li class="accordion-group">
    <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse5">
    <img src="img/menu_icons/tables.png">Grafik</a>
    <ul id="collapse5" class="accordion-body collapse">
      <li><a href="?menu=dok_pilihpasienper">Grafik Perkembangan</a></li>
      <li><a href="?menu=dok_pilihpasienkep">Grafik Keperawatan</a></li>
    </ul>
    </li>

    <li>
    <a class="widgets"data-parent="#sidebar_menu" href="?menu=dok_pilihpasienre">
    <img src="img/menu_icons/others.png">Rekomendasi Pasien</a>
    </li>
  </ul>
  <!-- End sidebar_box -->
 <div class="sidebar_box statistics visible-desktop">
    <div class="container">
      <div class="title row-fluid fluid">
        <i class="gicon-refresh"></i> Real time status
      </div>
      <div class="row-fluid fluid">
        <div class="span6 pagination-centered">
          <div class="row-fluid">
            <div id="g1" class="gauge">
            </div>
          </div>
        </div>
        <div class="span6 pagination-centered">
          <div class="row-fluid fluid">
            <div id="g2" class="gauge">
            </div>
          </div>
        </div>
        <!-- End row-fluid -->
        <div class="row-fluid fluid">
          <div id="real-time-sidebar" style="width:100%;height:65px;">
          </div>
        </div>

      </div>
      <!-- End .title -->
      </div>
      </div>
      <!-- End .title -->
    </div>
  </div>
  <!-- End sidebar_box -->
</div>
<div id="main">
  <div class="container">
    <div class="container_top">
      <div class="row-fluid ">
        <div class="top_bar_stats to_hide_tablet">
         <!-- untuk header atas disamping search -->
          <div class="stats">
           <span class="title" style="font-size:20px;">Selamat Datang di Web Panti Rehabilitasi Napza</span>
          </div>
        </div>
        
   <div class="top_right">
     
    <ul class="nav nav_menu">
    
      <li class="dropdown">
      <a class="dropdown-toggle administrator" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
      <span class="icon"><img src="img/menu_top/profile-avatar.png"></span><span class="title">Dokter</span></a>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a href="?menu=dok_ubahpass"><i class=" icon-cog"></i>Ubah Password</a></li>
        <li><a href="logout.php"><i class=" icon-unlock"></i>Log Out</a></li>
      </ul>
      </li>
      
    </ul>
  </div> <!-- End top-right -->

        <div class="span4">
         
        </div>
      </div>
    </div>
    <!-- End container_top -->

    <div id="container2">
    <div class="row-fluid">

    <?php


  if(isset($_GET['menu'])){
		if($_GET['menu'] == "home"){
			include "hdokter.php";
		}
		else if($_GET['menu'] == "ppdokter"){
			include "ppdokter.php";
		}
		else if($_GET['menu'] == "vpasien"){
			include "vpasien.php";
		}
		else if($_GET['menu'] == "vrmedik"){
			include "vrmedik.php";
		}
		else if($_GET['menu'] == "riwayatklinik"){
			include "riwayatklinik.php";
		}
		else if($_GET['menu'] == "vfasesmen"){
			include "vfasesmen.php";
		}
		else if($_GET['menu'] == "hasesmen"){
			include "hasesmen.php";
		}
		else if($_GET['menu'] == "vkeperawatan"){
			include "vkeperawatan.php";
		}
		else if($_GET['menu'] == "vperkembangan"){
			include "vperkembangan.php";
		}
		else if($_GET['menu'] == "vkonseling"){
			include "vkonseling.php";
		}
		else if($_GET['menu'] == "rekomendasi"){
			include "rekomendasi.php";
		}
		else if($_GET['menu'] == "dok_upprofil"){
			include "dok_upprofil.php";
		}
		else if($_GET['menu'] == "dok_pilihpasien"){
			include "dok_pilihpasien.php";
		}
		else if($_GET['menu'] == "dok_pilihpasienha"){
			include "dok_pilihpasienha.php";
		}
		else if($_GET['menu'] == "dok_pilihpasienvha"){
			include "dok_pilihpasienvha.php";
		}
		else if($_GET['menu'] == "dok_pilihpasienre"){
			include "dok_pilihpasienre.php";
		}
    else if($_GET['menu'] == "dok_pilihpasienkep"){
      include "dok_pilihpasienkep.php";
    }
    else if($_GET['menu'] == "dok_pilihpasienper"){
      include "dok_pilihpasienper.php";
    }
    else if($_GET['menu'] == "dok_grafik"){
      include "dok_grafik.php";
    }
		else if($_GET['menu'] == "dok_viewhasesmen"){
			include "dok_viewhasesmen.php";
		}
		else if($_GET['menu'] == "dok_viewriwayatklinik"){
			include "dok_viewriwayatklinik.php";
		}
    else if($_GET['menu'] == "dok_viewallhasesmen"){
    	include "dok_viewallhasesmen.php";
    }
    else if($_GET['menu'] == "prohs"){
     		include "prohasesmen.php";
    }
    else if($_GET['menu'] == "rekomendasi"){
          include "rekomendasi.php";
    }
		else if($_GET['menu'] == "dok_ubahpass"){
			include "dok_ubahpass.php";
		}
		else if($_GET['menu'] == "prorklinik"){
      		include "prorklinik.php";
    }
		else if($_GET['menu'] == "logout"){
			include "logout.php";
    }
  } else { ?>

  <style type="text/css">
  .clock {width:800px; margin:0 auto; padding:30px; border:1px solid #333; color:#fff; }
  #Date { font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; font-size:36px; text-align:center; text-shadow:0 0 1px #00c6ff; }
  #point { position:relative; -moz-animation:mymove 1s ease infinite; -webkit-animation:mymove 1s ease infinite; padding-left:10px; padding-right:10px; }

  @-webkit-keyframes mymove 
  {
  0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
  50% {opacity:0; text-shadow:none; }
  100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }  
  }

  @-moz-keyframes mymove 
  {
  0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
  50% {opacity:0; text-shadow:none; }
  100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }  
  }
</style>
<script type="text/javascript" src="clock/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
// Create two variable with the names of the months and days in an array
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

// Create a newDate() object
var newDate = new Date();
// Extract the current date from Date object
newDate.setDate(newDate.getDate());
// Output the day, date, month and year    
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
  // Create a newDate() object and extract the seconds of the current time on the visitor's
  var seconds = new Date().getSeconds();
  // Add a leading zero to seconds value
  $("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
  },1000);
  
setInterval( function() {
  // Create a newDate() object and extract the minutes of the current time on the visitor's
  var minutes = new Date().getMinutes();
  // Add a leading zero to the minutes value
  $("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
  
setInterval( function() {
  // Create a newDate() object and extract the hours of the current time on the visitor's
  var hours = new Date().getHours();
  // Add a leading zero to the hours value
  $("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);
  
}); 
</script>


<div class="container" style="margin:0 30px 0 30px; width:95%;">
  <!-- script plugin jam -->
  <script type="text/javascript" src="clock/jquery.min.js"></script>
  <script type="text/javascript" src="clock/jquery.flipcountdown.js"></script>
  <link rel="stylesheet" type="text/css" href="clock/jquery.flipcountdown.css" />

  <center><div id="retroclockbox_lg"></div></center><br>

  <script>
  jQuery(function($){
    $('#retroclockbox_lg').flipcountdown({size:'lg'});
  })
  </script>
  <!-- script plugin jam -->
  <div id="Date"></div>
</div><br><br>
  
  <div class="span7" >
	<div class="box gradient">
		<div class="title">
            <h3><i class="icon-user"></i><span>PROFIL PRIBADI DOKTER</span></h3>
		</div>
		<div class="content">

      <?php
			$session = $_SESSION['user'];
			$qlogin = mysql_query("SELECT * FROM login where uname='$session' ");
			$rlogin = mysql_fetch_array($qlogin);	
			$id_login = $rlogin['id_login'];

			$query = mysql_query("SELECT * from dokter where id_login='$id_login'");
			$row = mysql_fetch_array($query);
			$nama = $row['nm_dokter'];
	 ?>
     	<form class="form-horizontal row-fluid">
			
     		    <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">NIP :</label>
                <div class="controls span4">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['nip_dokter']; ?>">
                </div>
              	</div>
                
				<div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">Nama :</label>
                <div class="controls span4">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['nm_dokter']; ?>">
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">Tanggal Lahir :</label>
                <div class="controls span4">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['ttl_dokter']; ?>">
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">Alamat :</label>
                <div class="controls span4">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['alamat_dokter']; ?>">
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">No Hp :</label>
                <div class="controls span4">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['nohp_dokter']; ?>">
                </div>
              	</div>
                
                <div class="form-row control-group row-fluid">
                <label class="control-label span3" for="disabled-input">Jabatan :</label>
                <div class="controls span4">
                <input type="text" id="disabled-input" class="row-fluid" disabled="disabled" value="<?php echo $row['jabatan_dokter']; ?>">
                </div>
              	</div>
        	</form>
		</div><!-- class="content" -->
	</div><!-- class="box gradient" -->
</div><!-- class="span7" -->

      <div class="content">
      	<div style="width:100%;height:200px;">
      	</div>
      </div>
  <?php } ?>
  </div>
    </div>
  </div>
    <!-- End .span6 -->
    <!-- End #container -->
  </div>
  <div id="footer">
    <p>
      &copy; Panti Rehabilitasi Napza | 2014
    </p>
    
  </div>
</div>
</div>
<!-- /container -->
<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script language="javascript" type="text/javascript" src="js/plugins/jquery.sparkline.min.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-alert.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script src="js/bootstrap-popover.js"></script>
<script src="js/bootstrap-button.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-carousel.js"></script>
<script src="js/bootstrap-typeahead.js"></script>

<script src="js/fileinput.jquery.js"></script>
<script src="js/jquery-ui-1.8.23.custom.min.js"></script>
<script src="js/jquery.touchdown.js"></script>
<!-- Textarea editor https://github.com/jhollingworth/bootstrap-wysihtml5/ -->
<script src="js/plugins/justGage.1.0.1/resources/js/raphael.2.1.0.min.js"></script>
<script src="js/plugins/justGage.1.0.1/resources/js/justgage.1.0.1.min.js"></script>
<script language="javascript" type="text/javascript" src="js/plugins/wysihtml5-0.3.0.min.js"></script>
<script language="javascript" type="text/javascript" src="js/plugins/bootstrap-wysihtml5.js"></script>
<script language="javascript" type="text/javascript" src="js/plugins/jquery.peity.min.js"></script>
<script language="javascript" type="text/javascript" src="js/plugins/jquery.uniform.min.js"></script>
<script language="javascript" type="text/javascript" src="js/plugins/textarea-autogrow.js"></script>
<script language="javascript" type="text/javascript" src="js/plugins/character-limit.js"></script>
<script language="javascript" type="text/javascript" src="js/plugins/jquery.maskedinput-1.3.js"></script>
<script language="javascript" type="text/javascript" src="js/plugins/chosen/chosen/chosen.jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="js/plugins/bootstrap-datepicker.js"></script>
<script language="javascript" type="text/javascript" src="js/plugins/bootstrap-colorpicker.js"></script>
<script type="text/javascript" language="javascript" src="js/plugins/datatables/js/jquery.dataTables.js"></script>

<script language="javascript" type="text/javascript" src="js/plugins/flot/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="js/plugins/flot/jquery.flot.stack.js"></script>
<script language="javascript" type="text/javascript" src="js/plugins/flot/jquery.flot.pie.js"></script>
<script language="javascript" type="text/javascript" src="js/plugins/flot/jquery.flot.resize.js"></script>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>

<script src="js/scripts.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("input:checkbox, input:radio, input:file").uniform();
        $('textarea.autogrow').autogrow();

        // Mask plugin http://digitalbush.com/projects/masked-input-plugin/
        $("#mask-phone").mask("(999) 999-9999");
        $("#mask-date").mask("99-99-9999");
        $("#mask-int-phone").mask("+33 999 999 999");
        $("#mask-tax-id").mask("99-9999999");
        $("#mask-percent").mask("99%");
        // Editor plugin https://github.com/jhollingworth/bootstrap-wysihtml5/
        $('#editor1').wysihtml5({
          "image": false,
          "link": false
          });
        // Chosen select plugin
        $(".chzn-select").chosen({
          disable_search_threshold: 10
        });
        // Datepicker

        
      
        $('#datepicker').datepicker({
          format: 'yyyy-mm-dd',
        });
		
        $('#datepicker1').datepicker({
          format: 'yyyy-mm-dd'
        });

        $('#datepicker2').datepicker({
          format: 'yyyy-mm-dd'
        });

        $('#datepicker3').datepicker({
          format: 'yyyy-mm-dd'
        });

        $('#datepicker4').datepicker({
          format: 'yyyy-mm-dd'
        });

        $('#datepicker5').datepicker({
          format: 'yyyy-mm-dd'
        });

        $('#datepicker6').datepicker({
          format: 'yyyy-mm-dd'
        });

        $('#datepicker7').datepicker({
          format: 'yyyy-mm-dd'
        });
    });
</script>
    
<script type='text/javascript'>
    $(window).load(function() {
     $('#loading').fadeOut();
    });

 $(document).ready(function() {
      $('body').css('display', 'none');
      $('body').fadeIn(500);

      $("#logo a, #sidebar_menu a:not(.accordion-toggle), a.ajx").click(function() {
      event.preventDefault();
      newLocation = this.href;
      $('body').fadeOut(500, newpage);
      });
      function newpage() {
      window.location = newLocation;
      }
});
</script>

    <script type="text/javascript" charset="utf-8">
    // Datatables
    $(document).ready(function() {
      var dontSort = [];
                $('#datatable_example thead th').each( function () {
                    if ( $(this).hasClass( 'no_sort' )) {
                        dontSort.push( { "bSortable": false } );
                    } else {
                        dontSort.push( null );
                    }
      } );
$('#datatable_example').dataTable( {
         //"sDom": "<'row table_top_bar'<'row-fluid'>'<'to_hide_phone'>'f'<'>r>t<'row'>",
         //"sDom": "<'row table_top_bar'<'row-fluid'<'to_hide_phone' f>>><'row'>",
         "aaSorting": [[ 1, "asc" ]],
        "bPaginate": true,
        "bJQueryUI": false,
        "aoColumns": dontSort,
        "sPaginationType": "full_numbers",
        
        // sScrollX: 'auto'       
        
      } );
      $.extend( $.fn.dataTableExt.oStdClasses, {
        "s`": "dataTables_wrapper form-inline"
      } );
    } );


      $(document).ready(function() {
      var dontSort = [];
                $('#datatable_example1 thead th').each( function () {
                    if ( $(this).hasClass( 'no_sort' )) {
                        dontSort.push( { "bSortable": false } );
                    } else {
                        dontSort.push( null );
                    }
      } );
$('#datatable_example1').dataTable( {
         //"sDom": "<'row table_top_bar'<'row-fluid'>'<'to_hide_phone'>'f'<'>r>t<'row'>",
         //"sDom": "<'row table_top_bar'<'row-fluid'<'to_hide_phone' f>>><'row'>",
         "aaSorting": [[ 1, "asc" ]],
        "bPaginate": true,
        "bJQueryUI": false,
        "aoColumns": dontSort,
        "sPaginationType": "full_numbers",
        
        // sScrollX: 'auto'       
        
      } );
      $.extend( $.fn.dataTableExt.oStdClasses, {
        "s`": "dataTables_wrapper form-inline"
      } );
    } );
    </script>

     
<script src="js/jquery.showpassword.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
      // <![CDATA[
      $(document).ready(function(){ 
        $( "#tabs" ).tabs();

        $('#passwordlm').showPassword();
        $('#passwordbr').showPassword();
        $('#passwordkn').showPassword();
      }); 
      $( "#tabs" ).tabs();
      // ]]>
</script>
</body>
</html>

<?php
} else {
    ?>
    <script type="text/javascript">
    window.history.go(-1);
    </script>
    <?php
}
?>