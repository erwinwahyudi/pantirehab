<?php 
if(isset($_GET['halaman'])){
    if($_GET['halaman'] == "index"){
      include "home.php";
    }
    else if($_GET['halaman'] == "vppanti"){
      include "vppanti.php";
    }
    else if($_GET['halaman'] == "galeri"){
      include "galeri.php";
    }
    else if($_GET['halaman'] == "vjdokter"){
      include "vjdokter.php";
    }
    else if($_GET['halaman'] == "hubungi"){
      include "hubungi.php";
    } 
    else if($_GET['halaman'] == "login"){
      include "login1.php";
    } 
} else {
      include "home.php";
}

?>