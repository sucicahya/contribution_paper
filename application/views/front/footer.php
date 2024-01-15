
<!--Footer-->
<footer class="navbar navbar-fixed-bottom" id="footer" >
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
                    <li><a href="#"><i class="icon-instagram"></i></a></li>    -->                
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

<!-- Datepicker -->
<script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.js"></script> 

<script src="<?php echo base_url() ?>assets/home/js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="<?php echo base_url() ?>assets/home/js/jquery.ba-cond.min.js"></script>
<script src="<?php echo base_url() ?>assets/home/js/jquery.slitslider.js"></script>

<script src="<?php echo base_url() ?>assets/home/js/vendor/jquery.min.js"></script>

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


$(function() {
    $("input.date").datepicker(
         {
        dateFormat: 'yy-mm-dd'
    });
});
</script>

<script>
              $(document).ready(function() {
                 for(B=1; B<=1; B++){
                  Barisbaru();
                 } 
                 $('#BarisBaru').click(function(e) {
                     e.preventDefault();
                     Barisbaru();
                 });

                 $("tableLoop tbody").find('input[type=text]').filter(':visible:first').focus();
              });

              function Barisbaru() {
                  $(document).ready(function() {
                      $("[data-toggle='tooltip']").tooltip(); 
                  });
                  var Nomor = $("#tableLoop tbody tr").length + 1;
                  var Baris = '<tr>';
                          // Baris += '<td class="text-center">'+Nomor+'</td>';
                          Baris += '<td>';
                              Baris += '<input type="text" name="nik_pindah[]" class="form-control nik_pindah" placeholder="NIK Pindah" >';
                          Baris += '</td>';
                          Baris += '<td class="text-center">';
                              Baris += '<a class="btn btn-sm btn-danger" data-toggle="tooltip" title="Hapus Baris" id="HapusBaris"><i class="fa fa-times">x</i></a>';
                          Baris += '</td>';
                      Baris += '</tr>';

                  $("#tableLoop tbody").append(Baris);
                  $("#tableLoop tbody tr").each(function () {
                     $(this).find('td:nth-child(2) input').focus(); 
                  });

              }

              $(document).on('click', '#HapusBaris', function(e) {
                 e.preventDefault();
                 // var Nomor = 1;
                 $(this).parent().parent().remove();
                 $('tableLoop tbody tr').each(function() {
                     // $(this).find('td:nth-child(1)').html(Nomor);
                     // Nomor++;
                 });
              });

              $(document).ready(function() {
                 $('#SimpanData').submit(function(e) {
                     e.preventDefault();
                     nik_pindah();
                 });
              });

              function nik_pindah() {
                  $.ajax({
                      url:$("#SimpanData").attr('action'),
                      type:'post',
                      cache:false,
                      dataType:"json",
                      data: $("#SimpanData").serialize(),
                      success:function (data) {
                          if (data.success == true) {
                              $('.nik_pindah').val('');
                              // $('#notif').fadeIn(800, function() {
                              //    $("#notif").html(data.notif).fadeOut(5000).delay(800); 
                              // });
                          }
                          else{
                              // $('#notif').html('<div class="alert alert-danger">Data Gagal Disimpan</div>')
                          }
                      },

                      error:function (error) {
                          alert(error);
                      }

                  });
              }
          </script>
<!-- /SL Slider -->
</body>
</html>

