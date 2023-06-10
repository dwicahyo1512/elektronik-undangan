<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
     <title>E-Undangan</title>
     <link rel="icon" href="<?= base_url(); ?>favicon.ico" type="image/png">

     <!-- General CSS Files -->
     <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

     <!-- CSS Libraries -->
     <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap-social/bootstrap-social.css">

     <!-- Template CSS -->
     <link rel="stylesheet" href="<?= base_url(); ?>/template/assets/css/style.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/template/assets/css/components.css">
     <!-- Start GA -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
     <script>
          window.dataLayer = window.dataLayer || [];

          function gtag() {
               dataLayer.push(arguments);
          }
          gtag('js', new Date());

          gtag('config', 'UA-94034622-3');
     </script>
     <!-- /END GA -->
</head>

<body>
     <div id="app">
          <section class="section">
               <?php $this->renderSection('content') ?>
          </section>
     </div>

     <!-- General JS Scripts -->

     <script src="<?= base_url() ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
     <script src="<?= base_url() ?>/template/node_modules/popper.js/dist/umd/popper.min.js"></script>
     <script src="<?= base_url() ?>/template/node_modules/tooltip.js/dist/umd/tooltip.min.js"></script>
     <script src="<?= base_url() ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
     <script src="<?= base_url() ?>/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
     <script src="<?= base_url() ?>/template/node_modules/moment/min/moment.min.js"></script>
     <script src="<?= base_url() ?>/template/assets/js/stisla.js"></script>

     <!-- JS Libraies -->

     <!-- Page Specific JS File -->

     <!-- Template JS File -->
     <script src="<?= base_url(); ?>/template/assets/js/scripts.js"></script>
     <!-- <script src="<?= base_url(); ?>/template/assets/js/custom.js"></script> -->
     <!-- Show hide password -->
     <script type="text/javascript">
          $(document).ready(function() {
               $("#show_hide_password a").on('click', function(event) {
                    event.preventDefault();
                    if ($('#show_hide_password input').attr("type") == "text") {
                         $('#show_hide_password input').attr('type', 'password');
                         $('#show_hide_password i').addClass("fa-eye-slash");
                         $('#show_hide_password i').removeClass("fa-eye");
                    } else if ($('#show_hide_password input').attr("type") == "password") {
                         $('#show_hide_password input').attr('type', 'text');
                         $('#show_hide_password i').removeClass("fa-eye-slash");
                         $('#show_hide_password i').addClass("fa-eye");
                    }
               });
               $("#show_hide_password2 a").on('click', function(event) {
                    event.preventDefault();
                    if ($('#show_hide_password2 input').attr("type") == "text") {
                         $('#show_hide_password2 input').attr('type', 'password');
                         $('#show_hide_password2 i').addClass("fa-eye-slash");
                         $('#show_hide_password2 i').removeClass("fa-eye");
                    } else if ($('#show_hide_password2 input').attr("type") == "password") {
                         $('#show_hide_password2 input').attr('type', 'text');
                         $('#show_hide_password2 i').removeClass("fa-eye-slash");
                         $('#show_hide_password2 i').addClass("fa-eye");
                    }
               });
          });
     </script>
</body>

</html>