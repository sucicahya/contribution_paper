    <!--Slider-->
    <section id="slide-show">
        <?php foreach ($profil as $prf){ ?>
     <div id="slider" class="sl-slider-wrapper">

        <!--Slider Items-->    
        <div class="sl-slider">
            <!--Slider Item1-->
            <div class="sl-slide item1" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                <div class="sl-slide-inner">
                    <div class="container">
                        <br><br><br>
                        <img class="pull-right" src="<?php echo base_url(); ?>assets/gambar/<?php echo $prf->gambar ?>" alt="" />
                        <h2></h2>
                        <h3 class="gap"></h3>
                        <!-- <a class="btn btn-large btn-transparent" href="#">Learn More</a> -->
                    </div>
                </div>
            </div>
            <!--/Slider Item1-->

    </div>
    <!--/Slider Items-->

   

</div>
<!-- /slider-wrapper -->        
</section>
<!--/Slider-->


<section id="career" class="container">
    <div class="center">
      <h2>Sekilas Kelurahan</h2>
    </div>
    <p><?php echo $prf->tentang ?></p>
    <hr>
    <div class="row-fluid">
            <div class="span6">
                <h2>Visi</h2>
                <p align="justify"><?php echo $prf->visi ?></p>
            </div>
            <div class="span6">
                <h2>Misi</h2>
                <p align="justify"><?php echo $prf->misi ?></p>
            </div>
        </div>
        <hr>

        <div class="center">
          <h2>Letak</h2>
        </div>

        <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $prf->letak ?>"></iframe>

</section>

<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <!--Contact Form-->
            <div class="span3">
                <h4>ADDRESS</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong>Kode Kelurahan :</strong> <?php echo $prf->kode_kelurahan ?>
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
            <div id="tweets" class="span3"><br>
                <h4></h4>
                <div>
                    <ul class="unstyled address">                        
                    <li>
                        <i class="icon-globe"></i>
                        <strong>Kode Pos : </strong> <?php echo $prf->kode_pos ?>
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Telepon : </strong> <?php echo $prf->telepon ?>
                    </li>
                    </ul>
                </div>  
            </div>
            <!--Important Links-->

            <!--Important Links-->
            <div id="tweets" class="span3"><br>
                <h4></h4>
                <div>
                    <ul class="unstyled address">
                        
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>Kecamatan / Kode : </strong> <?php echo $prf->kecamatan ?>, <?php echo $prf->kode_kecamatan ?>
                    </li>
                    <li>
                        <i class="icon-globe"></i>
                        <strong>Kabupaten / Kode : </strong> <?php echo $prf->kabupaten ?>, <?php echo $prf->kode_kabupaten ?>
                    </li>
                    </ul>
                </div>  
            </div>
            <!--Important Links-->

            <!--Important Links-->
            <div id="tweets" class="span3"><br>
                <h4></h4>
                <div>
                    <ul class="unstyled address">
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Provinsi / Kode : </strong> <?php echo $prf->provinsi ?>, <?php echo $prf->kode_provinsi ?>
                    </li>
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>Kode Wilayah : </strong> <?php echo $prf->kode_wilayah ?>
                    </li>
                    </ul>
                </div>  
            </div>
            <!--Important Links-->

            

        </div>

    </div>
    <!--/row-fluid-->
</div>
<!--/container-->



<?php } ?>  
</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer" >
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <!-- <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>               -->     
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="<?php echo base_url() ?>assets/home/js/vendor/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/home/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/home/js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="<?php echo base_url() ?>assets/home/js/jquery.ba-cond.min.js"></script>
<script src="<?php echo base_url() ?>assets/home/js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->

<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->
</body>
</html>