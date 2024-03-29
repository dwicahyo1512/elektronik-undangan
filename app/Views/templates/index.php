<!DOCTYPE html>
<html lang="id">

<head>
     <meta charset="UTF-8">
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
     <title>E_Undangan <?= '| ' . $title; ?></title>
     <link rel="stylesheet" href=" <?= base_url(); ?>favicon.ico" rel="icon" />

     <!-- General CSS Files -->
     <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

     <!-- CSS Libraries -->
     <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/bootstrap-daterangepicker/daterangepicker.css">
     <link rel="stylesheet" href="<?= base_url() ?>/template/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/select2/dist/css/select2.min.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/summernote/dist/summernote-bs4.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/codemirror/lib/codemirror.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/codemirror/theme/duotone-dark.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/template/node_modules/jqvmap/dist/jqvmap.min.css">
     <!-- Template CSS -->
     <link rel="stylesheet" href="<?= base_url(); ?>/template/assets/css/style.css">
     <link rel="stylesheet" href="<?= base_url(); ?>/template/assets/css/components.css">
     <!-- Start GA -->

     <!-- galeri produk -->
     <style>
          .gallery {
               -webkit-column-count: 4;
               -moz-column-count: 4;
               column-count: 4;
               -webkit-column-width: 25%;
               -moz-column-width: 25%;
               column-width: 25%;
          }

          .gallery .pics {
               -webkit-transition: all 350ms ease;
               transition: all 350ms ease;
          }

          .gallery .animation {
               -webkit-transform: scale(1);
               -ms-transform: scale(1);
               transform: scale(1);
          }

          @media (max-width: 450px) {
               .gallery {
                    -webkit-column-count: 1;
                    -moz-column-count: 1;
                    column-count: 1;
                    -webkit-column-width: 100%;
                    -moz-column-width: 100%;
                    column-width: 100%;
               }
          }

          @media (max-width: 400px) {
               .btn.filter {
                    padding-left: 1.1rem;
                    padding-right: 1.1rem;
               }
          }
     </style>

     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
     <script>
          window.dataLayer = window.dataLayer || [];

          function gtag() {
               dataLayer.push(arguments);
          }
          gtag('js', new Date());

          gtag('config', 'UA-94034622-3');
     </script>
</head>
<!-- inibanh cobalah -->

<body>
     <div id="app">
          <div class="main-wrapper main-wrapper-1">
               <!-- Top Bar -->
               <?= $this->include('templates/topbar'); ?>

               <!-- Side Bar -->
               <?= $this->include('templates/sidebar'); ?>

               <!-- Main Content -->
               <?= $this->renderSection('page-content'); ?>

               <footer class="main-footer">
                    <div class="footer-left">
                         Copyright &copy; E_Undangan 2023
                    </div>
                    <div class="footer-right">

                    </div>
               </footer>
          </div>
     </div>

     <!-- General JS Scripts -->
     <script src="<?= base_url(); ?>/template/node_modules/jquery/dist/jquery.min.js"></script>
     <script src="<?= base_url() ?>/template/node_modules/popper.js/dist/umd/popper.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/tooltip.js/dist/umd/tooltip.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/nicescroll/dist/jquery.nicescroll.min.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/moment/moment.js"></script>
     <script src="<?= base_url(); ?>/template/assets/js/stisla.js"></script>

     <!-- JS Libraies -->
     <script src="<?= base_url(); ?>/template/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
     <script src="<?= base_url() ?>/template/node_modules/cleave.js/dist/cleave.js"></script>
     <script src="<?= base_url() ?>/template/node_modules/cleave.js/dist/addons/cleave-phone.us.js"></script>
     <!-- datatable -->
     <script src="<?= base_url() ?>/template/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
     <script src="<?= base_url() ?>/template/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>


     <script src="<?= base_url(); ?>/template/node_modules/datatables.net-select/js/dataTables.select.min.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/jquery-ui-dist/jquery-ui.min.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/select2/dist/js/select2.full.min.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/summernote/dist/summernote-bs4.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/codemirror/lib/codemirror.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/codemirror/mode/javascript/javascript.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/jquery_upload_preview/assets/js/jquery.uploadPreview.min.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/chart.js/dist/chart.min.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
     <script src="<?= base_url(); ?>/template/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

     <!-- Page Specific JS File -->
     <script src="<?= base_url(); ?>/template/assets/js/page/modules-datatables.js"></script>
     <script src="<?= base_url(); ?>/template/assets/js/page/forms-advanced-forms.js"></script>
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     <!-- Template JS File -->
     <script src="<?= base_url(); ?>/template/assets/js/scripts.js"></script>
     <script src="<?= base_url(); ?>/template/assets/js/custom.js"></script>

     <script type="text/javascript">
          $(document).ready(function() {

               $('.diskon_rupiah').hide();
               $('.diskon_persen').hide();
               $('.tabelProduk').hide();

               // galerry filter
               var selectedClass = "";
               $(".filter").click(function() {
                    selectedClass = $(this).attr("data-rel");
                    $("#gallery").fadeTo(100, 0.1);
                    $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
                    setTimeout(function() {
                         $("." + selectedClass).fadeIn().addClass('animation');
                         $("#gallery").fadeTo(300, 1);
                    }, 300);
               });

               $('#status').on('click', function() {
                    var status = document.getElementById("status");
                    if (status.checked) {
                         $('#status').val('on');
                         console.log("on checked");
                    } else {
                         $('#status').val('off');
                         console.log("default off");
                    }
               });

               var select = document.getElementById('jenis_hadiah');
               var option;

               if (select != null) {
                    for (var i = 0; i < select.options.length; i++) {
                         option = select.options[i];

                         // console.log(option.value + ', ' + option.getAttribute('class'));
                         if (option.value == option.getAttribute('class')) {
                              option.setAttribute('selected', true);
                         }
                    }
               }

               var jenis_hadiah = $("#jenis_hadiah option:selected").val();
               if (jenis_hadiah == 'diskon_rupiah') {
                    $('.khusus').hide();
                    $('.diskon_rupiah').show();
                    $('.diskon_persen').hide();
               } else if (jenis_hadiah == 'diskon_persen') {
                    $('.khusus').hide();
                    $('.diskon_rupiah').hide();
                    $('.diskon_persen').show();
               } else {
                    $('.khusus').show();
                    $('.diskon_rupiah').hide();
                    $('.diskon_persen').hide();
               }

               $('select.select2#grup_pengguna').select2({
                    placeholder: "Pilih Peran Pengguna",
                    allowClear: true,
               });

               $('select.select2#tag').select2({
                    placeholder: "Pilih Tag",
                    allowClear: true,
               });

               $('select.select2#kategori_id').select2({
                    placeholder: "Pilih Kategori Produk",
                    allowClear: true,
               });

               $('select.select2#jenis_hadiah').select2({
                    placeholder: "Pilih Jenis Hadiah",
                    allowClear: true,
               });

               $('select.select2#produk_reservasi').select2({
                    placeholder: "Pilih Produk Reservasi",
                    allowClear: true,
               });

               $('#jenis_hadiah').on('select2:select', function(e) {
                    var data = e.params.data.id;
                    console.log(data);

                    if (data == 'diskon_rupiah') {
                         $('.khusus').hide();
                         $('.diskon_rupiah').show();
                         $('.diskon_persen').hide();
                    } else if (data == 'diskon_persen') {
                         $('.khusus').hide();
                         $('.diskon_rupiah').hide();
                         $('.diskon_persen').show();
                    } else {
                         $('.khusus').show();
                         $('.diskon_rupiah').hide();
                         $('.diskon_persen').hide();
                    }
               });

               $('#produk_reservasi').on('select2:select', function(e) {
                    var dataId = e.params.data.id;
                    var dataText = e.params.data.text;
                    console.log(dataId);

                    var tr = '<tr class="' + dataId + '">' +
                         '<td>' + dataText + '</td>' +
                         '<td><input type="number" class="form-control' +
                         '<?php if (session('errors.qty')) : ?>' + 'is-invalid' + '<?php endif ?>' + '" name="qty[]" id="qty" placeholder="0">' +
                         '<?php if (session('errors.qty')) : ?>' +
                         '<div class="invalid-feedback">' +
                         '<?= session('errors.qty') ?>' +
                         '</div>' +
                         '<?php endif ?>' +
                         '</td>' +
                         '<tr>';

                    $('.tabelProduk').show();
                    $('.tabelProduk').find('tbody').append(tr);
               });

               $('#produk_reservasi').on('select2:unselect', function(e) {
                    var dataId = e.params.data.id;
                    var dataText = e.params.data.text;
                    console.log(dataId);

                    var tr = '<tr class="' + dataId + '">' +
                         '<td>' + dataText + '</td>' +
                         '<td><input type="number" class="form-control' +
                         '<?php if (session('errors.qty')) : ?>' + 'is-invalid' + '<?php endif ?>' + '" name="qty[]" id="qty" placeholder="0">' +
                         '<?php if (session('errors.qty')) : ?>' +
                         '<div class="invalid-feedback">' +
                         '<?= session('errors.qty') ?>' +
                         '</div>' +
                         '<?php endif ?>' +
                         '</td>' +
                         '<tr>';

                    $('.tabelProduk').show();
                    $('.' + dataId).remove();
               });

               $('form').each(function() {
                    var form = $(this),
                         reset = form.find(':reset'),
                         inputs = form.find(':input');

                    reset.on('click', function() {
                         setTimeout(function() {
                              inputs.trigger('change');
                         }, 50);
                    });
               });

               // $('form#form_tambah_klaim_hadiah_pengguna').on('submit', function(e) {
               //      e.preventDefault();
               // });

          });

          function toRupiah(nominal) {
               nominal.value = formatRupiah(nominal.value);
          }

          /* Fungsi formatRupiah */
          function formatRupiah(angka, prefix) {
               var number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split = number_string.split(','),
                    sisa = split[0].length % 3,
                    rupiah = split[0].substr(0, sisa),
                    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

               // tambahkan titik jika yang di input sudah menjadi angka satuan ribuan
               if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
               }

               rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
               return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
          }

          function isNumberKey(evt) {
               var charCode = (evt.which) ? evt.which : event.keyCode;
               if (charCode === 44 || charCode === 46 || (48 <= charCode && charCode <= 57)) {
                    return true;
               }
               return false;
          }
     </script>

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