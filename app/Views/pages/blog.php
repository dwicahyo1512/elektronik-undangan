<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog - E_Undangan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="stylesheet" href=" <?= base_url(); ?>favicon.ico" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span>E_Undangan</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">About</a></li>
          <li><a class="nav-link scrollto" href="/#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="/#team">Team</a></li>
          <li><a class="active" href="<?= base_url('blog'); ?>">Blog</a></li>
          <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="<?= base_url('superadmin/dashboard'); ?>">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="/">Home</a></li>
          <li>Blog</li>
        </ol>
        <h2>Blog</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
            <?php foreach ($blog as $item) { ?>
              <article class="entry">

                <div class="entry-img">
                  <img src="<?= base_url('images/thumbnail/' . $item['thumbnail']); ?>" class="img-fluid" width="1000" height="700" alt="" />
                </div>

                <h2 class="entry-title">
                  <a href="blog-single.html"> <?= $item['judul']; ?></a>
                </h2>

                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html">
                        <?php
                        $createdAt = strtotime($item['created_at']); // Konversi string tanggal ke UNIX timestamp
                        $formattedDate = date('D, F j', $createdAt); // Format tanggal menjadi 'Tue, September 15'
                        echo $formattedDate; // Tampilkan tanggal yang sudah diformat
                        ?>
                      </a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                  </ul>
                </div>

                <div class="entry-content">
                  <p>
                    <?= $item['deskripsi_singkat']; ?></p>
                  <div class="read-more">
                    <a href="<?= site_url('blog_single/'. $item['id_blog']) ?>">Read More</a>
                  </div>
                </div>

              </article>
            <?php } ?>

            <!-- <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div> -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <?php foreach ($kategori as $item) { ?>
                    <li><a href="#"><?= ucfirst($item['nama_kategori']); ?></a></li>
                  <?php } ?>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <?php foreach ($recent as $item) { ?>
                  <div class="post-item clearfix">
                    <img src="<?= base_url('images/thumbnail/' . $item['thumbnail']); ?>" class="img-fluid" alt="" />
                    <h4><a href="blog-single.html"><?= $item['judul']; ?></a></h4>
                    <time>
                      <?php
                      $createdAt = strtotime($item['created_at']); // Konversi string tanggal ke UNIX timestamp
                      $formattedDate = date('D, F j', $createdAt); // Format tanggal menjadi 'Tue, September 15'
                      echo $formattedDate; // Tampilkan tanggal yang sudah diformat
                      ?>
                    </time>
                  </div>
                <?php } ?>

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <?php foreach ($tag as $item) { ?>
                    <li><a href="#"><?= ucfirst($item['nama_tag']); ?></a></li>
                  <?php } ?>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>
              Tamen quem nulla quae legam multos aute sint culpa legam noster
              magna
            </p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" /><input type="submit" value="Subscribe" />
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-7 col-md-12 footer-info">
            <a href="/" class="logo d-flex align-items-center">
              <img src="<?= base_url(); ?>assets/img/logo.png" alt="" />
              <span>E-Undangan</span>
            </a>
            <p>
              E-Undangan adalah solusi modern untuk membuat dan mengirim
              undangan secara digital. Dengan fitur-fitur interaktif dan
              desain yang disesuaikan, E-Undangan memungkinkan Anda mengatur
              acara dengan mudah dan efisien. Nikmati kemudahan pengelolaan
              undangan, penghematan biaya, dan kontribusi dalam menjaga
              lingkungan dengan E-Undangan yang ramah lingkungan.
            </p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/MDwiCahyo15" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://web.facebook.com/cahyofc.dwi" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/m_dwi_cahyo15/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://www.linkedin.com/in/muhamad-dwi-cahyo-94828625a/" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li>
                <i class="bi bi-chevron-right"></i> <a href="#">Home</a>
              </li>
              <li>
                <i class="bi bi-chevron-right"></i> <a href="#">About us</a>
              </li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <a href="#">Terms of service</a>
              </li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <a href="#">Privacy policy</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Pakijangan, Kec. Wonorejo<br />
              Pasuruan, Jawa Timur,<br />
              indonesia <br />
              <strong>Phone:</strong>62+ 83851574470<br />
              <strong>Email:</strong>dwicahyo.1512@gmail.com<br />
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>E-Undangan</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">MDC</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>