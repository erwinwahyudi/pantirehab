    <?php 
    if (isset($_GET['action'])) {
        if ($_GET['action'] == "update") {
            $active = $_GET['active'];
        }
    } else {
        $active = 0;
    }
     
    ?>
    <script type="text/javascript">
                // <![CDATA[
                $(document).ready(function(){   
                    $( "#tabs" ).tabs();
                    $("#accordion4").accordion({ heightStyle: "content", collapsible: true, active: <?php echo $active; ?> });
                                     
                }); 

                // ]]>
    </script>   
 
<div class="box gradient span8">

      <div class="title">
            <div class="row-fluid">
                <h3>
                  <i class=" icon-bar-chart"></i> Data Formulir Asesmen
                </h3>
            </div>
        </div><!-- End .title -->
        <div class="content">
          <div class="accordion" id="accordion4">

                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseOne5">
                      Informasi Demografis
                    </a>
                  </div>
                  <?php
                    if($_GET['active'] == '0' || $_GET['active'] == 'def' ) {
                      $aktif1 = "in";
                    } else {
                      $aktif1 = "";
                    }
                  ?>
                  <div id="collapseOne5" class="accordion-body collapse <?php echo $aktif1; ?>">
                    <div class="accordion-inner">
                     <?php include "idemografis.php"; ?>
                    </div>
                  </div>
                </div>

                <?php
                    if($_GET['active'] == '1') {
                      $aktif2 = "in";
                    } else {
                      $aktif2 = "";
                    }
                  ?>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseTwo5">
                      Status Medis
                    </a>
                  </div>
                  <div id="collapseTwo5" class="accordion-body collapse <?php echo $aktif2; ?>">
                    <div class="accordion-inner">
                        <?php include "smedis.php"; ?>
                     </div>
                  </div>
                </div>


                 <?php
                    if($_GET['active'] == '2') {
                      $aktif3 = "in";
                    } else {
                      $aktif3 = "";
                    }
                ?>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseThree5">
                      Status Pekerjaan
                    </a>
                  </div>
                  <div id="collapseThree5" class="accordion-body collapse <?php echo $aktif3; ?>" >
                    <div class="accordion-inner">
                    <?php include "spekerjaan.php"; ?>
                     </div>
                  </div>
                </div>

                <?php
                    if($_GET['active'] == '3') {
                      $aktif4 = "in";
                    } else {
                      $aktif4 = "";
                    }
                ?>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseFor5">
                      Status Penggunaan Narkotika
                    </a>
                  </div>
                  <div id="collapseFor5" class="accordion-body collapse <?php echo $aktif4; ?>" >
                    <div class="accordion-inner">                        
                        <?php include "spnarkotika.php"; ?>
                     </div>
                  </div>
                </div>

                <?php
                    if($_GET['active'] == '4') {
                      $aktif5 = "in";
                    } else {
                      $aktif5 = "";
                    }
                ?>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseFive5">
                      Status Legal
                    </a>
                  </div>
                  <div id="collapseFive5" class="accordion-body collapse <?php echo $aktif5; ?>" >
                    <div class="accordion-inner">
                        <?php include "slegal.php"; ?>
                     </div>
                  </div>
                </div>

                <?php
                    if($_GET['active'] == '5') {
                      $aktif6 = "in";
                    } else {
                      $aktif6 = "";
                    }
                ?>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseSix5">
                      Riwayat Keluarga/Sosial
                    </a>
                  </div>
                  <div id="collapseSix5" class="accordion-body collapse <?php echo $aktif6; ?>" >
                    <div class="accordion-inner">
                            <?php include "rksosial.php"; ?>
                     </div>
                  </div>
                </div>

                <?php
                    if($_GET['active'] == '6') {
                      $aktif7 = "in";
                    } else {
                      $aktif7 = "";
                    }
                ?>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseSev5">
                      Status Psikiatris
                    </a>
                  </div>
                  <div id="collapseSev5" class="accordion-body collapse <?php echo $aktif7; ?>" >
                    <div class="accordion-inner">
                    <h3></h3>
                        <?php include "spsikiatris.php"; ?>    
                     </div>
                  </div>
                </div>

                <?php
                    if($_GET['active'] == '7') {
                      $aktif8 = "in";
                    } else {
                      $aktif8 = "";
                    }
                ?>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#collapseEi5">
                      Pemeriksaan Fisik
                    </a>
                  </div>
                  <div id="collapseEi5" class="accordion-body collapse <?php echo $aktif8; ?>" >
                    <div class="accordion-inner">
                    <h3></h3>
                        <?php include "pfisik.php"; ?>
                     </div>
                  </div>
                </div>

              </div>      
        </div> <!-- End .content -->
    </div><!-- End .box -->
