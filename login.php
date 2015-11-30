<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="css/images/favicon.png">
  <!-- Le styles -->
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
<style type="text/css">
  .logologin{display:inline-block}
  .logologin a{background:url(img/logoM.png) 0 0 no-repeat;height:138px;width:300px;float:left;margin:0 0 15px 50px }
  /*.logologin a:hover{background-position:0 -44px}*/
</style>
    <body>

      <div id="loading" class="other_pages">
        <!-- Login page -->
        <div id="login">
          <!--<div class="support-note">let's check browser support with modernizr 
            <span class="no-csstransforms">CSS transforms are not supported in your browser</span>
            <span class="no-csstransforms3d">CSS 3D transforms are not supported in your browser</span>
            <span class="no-csstransitions">CSS transitions are not supported in your browser</span>
          </div>-->
        
     
        <div class="row-fluid">
          <div class="row-fluid">
            
            <div class="logologin" class="pull-left"><a href="#"></a></div>
            <div class="pull-right spacer-medium not-member members right_offset"> <a href="#" id="bb-nav-next" class="members_button">* <i class="icon-magic"></i></a></div>
            <div class="pull-right spacer-medium already-member members right_offset" style="display:none;"><a href="#" class="members_button" id="bb-nav-prev"> Login <i class="icon-undo"></i></a></div>
          </div> 

      <div class="row-fluid bb-bookblock" id="bb-bookblock">
        <div class="bb-item row-fluid login">

         <div class="top-background">
          <div class="fill-background right"><div class="bg row-fluid"></div></div>
          <div id="login-corner-shadow"></div>
        </div>
        <div class="row-fluid container">
          <div class="content">
            <div class="message row-fluid">
              <h4>Login Petugas</h4>
            </div>
          
          <form class="form-horizontal row-fluid" action="prosesloginuser.php" method="POST">
            <div class="control-group row-fluid">
              <label class="row-fluid " for="inputEmail">Username</label>
              <div class="controls row-fluid input-append">
                <input type="text" id="inputEmail" name="username" placeholder="username.."  class="row-fluid" required> <span class="add-on"><i class="icon-user"></i></span>
              </div>
            </div>
            
            <div class="control-group row-fluid">
              <label class="row-fluid " for="inputPassword">Password</label>
              <div class="controls row-fluid input-append">
                <input type="password" id="inputPassword" name="pass" placeholder="password.."  class="row-fluid" required> <span class="add-on"><i class="icon-lock"></i></span>
              </div>
            </div>
          
            <div class="control-group row-fluid">
              <label class="row-fluid " >Kategori</label>
              <div class="controls row-fluid input-append">
                <select name="kategori"> 
                <option value="dokter">Dokter</option>
                <option value="perawat">Perawat</option>
                <option value="karyawan">Karyawan</option>
                <option value="konselor">Konselor</option>
                <option value="logistik">Logistik</option>
                <option value="petugas rekam medik">Petugas Rekam Medik</option>
                </select>
              </div>
            </div>       
        
              <div class="controls span5 offset7">
                <input type="submit" value="Login" class="btn btn-primary btn-larg1e row-fluid"/> 
              </div>
            
          </form>
          </div><!-- End .container -->
          </div> <!-- End .row-fluid -->
        </div> <!-- .bb-item  -->

       <div class="bb-item row-fluid register">
         <div class="top-background row-fluid fluid">
          <div class="fill-background "><div class="bg row-fluid"></div></div>
          <div id="login-corner-shadow" class="left"></div>
        </div>
        <div class="row-fluid fluid container">
          <div class="content">
            <div class="message row-fluid ">
             <h4>Login Admin</h4>              
            </div>
            
            <form class="form-horizontal row-fluid" action="proseslogin.php" method="POST">
              <div class="control-group row-fluid">
              <label class="row-fluid " for="inputEmail">Username</label>
              <div class="controls row-fluid input-append">
                <input type="text" id="inputEmail" name="username" placeholder="username.."  class="row-fluid" required> <span class="add-on"><i class="icon-user"></i></span>
              </div>
            </div>
            
              <div class="control-group row-fluid">
              <label class="row-fluid " for="inputPassword">Password </label>
              <div class="controls row-fluid input-append">
                <input type="password" id="inputPassword" name="pass" placeholder="password.."  class="row-fluid" required> <span class="add-on"><i class="icon-lock"></i></span>
              </div>
            </div>
            <div class="control-group row-fluid fluid">
             
              <div class="controls span5 offset7">
              <input type="submit" value="Login" class="btn btn-info row-fluid"/> 
              </div>
            </div>
          </form>
          </div><!-- End .container -->
          </div> <!-- End .row-fluid -->
        </div> <!-- .bb-item  -->

      
        </div> <!-- End #bb-bookblock -->

        </div> <!-- End .row-fluid -->

    </div> <!-- End #login -->
        <!-- <img src="img/ajax-loader.gif"> -->
    </div> <!-- End #loading -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    
    <!-- Flip effect on login screen -->
    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>-->
     <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/plugins/jquerypp.custom.js"></script>
    <script type="text/javascript" src="js/plugins/jquery.bookblock.js"></script>
        <script language="javascript" type="text/javascript" src="js/plugins/jquery.uniform.min.js"></script>

   <script type="text/javascript">
      $(function() {
        var Page = (function() {

          var config = {
              $bookBlock: $( '#bb-bookblock' ),
              $navNext  : $( '#bb-nav-next' ),
              $navPrev  : $( '#bb-nav-prev' ),
              $navJump  : $( '#bb-nav-jump' ),
              bb        : $( '#bb-bookblock' ).bookblock( {
                speed       : 800,
                shadowSides : 0.8,
                shadowFlip  : 0.7
              } )
            },
            init = function() {

              initEvents();
              
            },
            initEvents = function() {

              var $slides = config.$bookBlock.children(),
                  totalSlides = $slides.length;

              // add navigation events
              config.$navNext.on( 'click', function() {
              $("#arrow_register").fadeOut();
              $(".not-member").slideUp();
              $(".already-member").slideDown();
                config.bb.next();
                return false;

              } );

              config.$navPrev.on( 'click', function() {

                 $(".not-member").slideDown();
                $(".already-member").slideUp();
                config.bb.prev();
                return false;

              } );

              config.$navJump.on( 'click', function() {
                
                config.bb.jump( totalSlides );
                return false;

              } );
              
              // add swipe events
              $slides.on( {

                'swipeleft'   : function( event ) {
                
                  config.bb.next();
                  return false;

                },
                'swiperight'  : function( event ) {
                
                  config.bb.prev();
                  return false;
                  
                }

              } );

            };

            return { init : init };

        })();

        Page.init();

      });
    </script>

    <script type='text/javascript'>
 
    $(window).load(function() {
     $('#loading1').fadeOut();
    });
      $(document).ready(function() {
           $("input:checkbox, input:radio, input:file").uniform();


      $('[rel=tooltip]').tooltip();
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
   
</body>
</html>