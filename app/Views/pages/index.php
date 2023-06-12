<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>E_undangan </title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link rel="stylesheet" href=" <?= base_url(); ?>favicon.ico" rel="icon" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" />

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/aos/aos.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/remixicon/remixicon.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" />

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" />

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
        <img src="<?= base_url(); ?>assets/img/logo.png" alt="" />
        <span>E-Undangan</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li>
            <a class="nav-link scrollto" href="#portfolio">Portfolio</a>
          </li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li>
            <a class="getstarted scrollto" href="<?= base_url('login'); ?>">Get Started</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">
            Jelajahi Pengalaman Baru dalam Pembuatan Undangan Elektronik
          </h1>
          <h2 data-aos="fade-up" data-aos-delay="400">
            dengan Solusi Kami yang Cepat, Efisien, dan Mudah
          </h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="<?= base_url('login'); ?>" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url(); ?>assets/img/hero-img.png" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>Memukau Tamu dengan E-undangan:</h3>
              <h2>Solusi Modern untuk Undangan Acara</h2>
              <p>
                Rangkai momen istimewa dengan undangan yang elegan dan modern.
                E-undangan kami menawarkan pengalaman praktis dalam membuat
                undangan yang menarik dan memukau. Dengan fitur-fitur canggih,
                Anda dapat dengan mudah membuat undangan, menambahkan
                informasi acara, dan mengirimkannya kepada tamu undangan
                dengan cepat dan efisien. Buanglah kerepotan cetak dan
                pengiriman fisik, dan nikmati kemudahan serta kesan yang tak
                terlupakan dengan E-undangan kami.
              </p>
              <div class="text-center text-lg-start">
                <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                  <span>Read More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?= base_url(); ?>assets/img/about.jpg" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Pricing</h2>
          <p>Check our Pricing</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">
          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3 style="color: #07d5c0">Free Plan</h3>
              <div class="price"><sup>$</sup>0<span> / mo</span></div>
              <img src="<?= base_url(); ?>assets/img/pricing-free.png" class="img-fluid" alt="" />
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <span class="featured">Featured</span>
              <h3 style="color: #65c600">Starter Plan</h3>
              <div class="price"><sup>$</sup>19<span> / mo</span></div>
              <img src="<?= base_url(); ?>assets/img/pricing-starter.png" class="img-fluid" alt="" />
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <h3 style="color: #ff901c">Business Plan</h3>
              <div class="price"><sup>$</sup>29<span> / mo</span></div>
              <img src="<?= base_url(); ?>assets/img/pricing-business.png" class="img-fluid" alt="" />
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="box">
              <h3 style="color: #ff0071">Ultimate Plan</h3>
              <div class="price"><sup>$</sup>49<span> / mo</span></div>
              <img src="<?= base_url(); ?>assets/img/pricing-ultimate.png" class="img-fluid" alt="" />
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Pricing Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Portfolio</h2>
          <p>Check our latest work</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="<?= base_url(); ?>assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="" />
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="<?= base_url(); ?>assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying about us</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec
                  porttitora entum suscipit rhoncus. Accusantium quam,
                  ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                  risus at semper.
                </p>
                <div class="profile mt-auto">
                  <img src="<?= base_url(); ?>assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="" />
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse
                  labore quem cillum quid cillum eram malis quorum velit fore
                  eram velit sunt aliqua noster fugiat irure amet legam anim
                  culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="<?= base_url(); ?>assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="" />
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  E-Undangan membantu menghemat waktu dan biaya yang biasanya
                  dibutuhkan untuk cetak undangan.
                </p>
                <div class="profile mt-auto">
                  <img src="<?= base_url(); ?>assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="" />
                  <h3>Maulana Zidan Nabil Aamsyah</h3>
                  <h4>Back-End Developer</h4>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  E-Undangan sangat memudahkan saya dalam mengirim undangan ke
                  banyak tamu sekaligus.
                </p>
                <div class="profile mt-auto">
                  <img src="<?= base_url(); ?>assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="" />
                  <h3>Farel Farizi Purnomosasi</h3>
                  <h4>Back-End Developer</h4>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Desain undangan yang elegan dan modern membuat acara kami
                  terlihat lebih profesional.
                </p>
                <div class="profile mt-auto">
                  <img src="<?= base_url(); ?>assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="" />
                  <h3>Abdillah Aziz Putra Susan</h3>
                  <h4>Back-End Developer</h4>
                </div>
              </div>
            </div>
            <!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Author</h2>
          <p>Our hard working</p>
        </header>

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="<?= base_url(); ?>assets/img/team/team-1.jpg" class="img-fluid" alt="" />
                <div class="social">
                  <a href="https://twitter.com/MDwiCahyo15" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="https://web.facebook.com/cahyofc.dwi" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/m_dwi_cahyo15/" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/muhamad-dwi-cahyo-94828625a/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Muhamad Dwi Cahyo</h4>
                <span>FullStuck Developer</span>
                <p>
                  Saya Muhamad Dwi Cahyo, seorang siswa jurusan Rekayasa
                  Perangkat Lunak di SMKN 1 Purwosari. Saya adalah Full Stack
                  Developer berfokus pada pengembangan web dengan PHP.
                  Portfolio ini memamerkan proyek-proyek kreatif dan
                  fungsional yang mencerminkan kemampuan saya dalam
                  menciptakan solusi web menarik dan berguna. Terima kasih
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Sponsor</h2>
          <p>Beberapa Sponsor</p>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <img src="<?= base_url(); ?>assets/img/clients/client-1.png" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?= base_url(); ?>assets/img/clients/client-2.png" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?= base_url(); ?>assets/img/clients/client-3.png" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?= base_url(); ?>assets/img/clients/client-4.png" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?= base_url(); ?>assets/img/clients/client-5.png" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?= base_url(); ?>assets/img/clients/client-6.png" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?= base_url(); ?>assets/img/clients/client-7.png" class="img-fluid" alt="" />
            </div>
            <div class="swiper-slide">
              <img src="<?= base_url(); ?>assets/img/clients/client-8.png" class="img-fluid" alt="" />
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Blog</h2>
          <p>Recent posts form our Blog</p>
        </header>

        <div class="row">
          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img">
                <img src="<?= base_url(); ?>assets/img/blog/blog-1.jpg" class="img-fluid" alt="" />
              </div>
              <span class="post-date">Tue, September 15</span>
              <h3 class="post-title">
                Eum ad dolor et. Autem aut fugiat debitis voluptatem
                consequuntur sit
              </h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img">
                <img src="<?= base_url(); ?>assets/img/blog/blog-2.jpg" class="img-fluid" alt="" />
              </div>
              <span class="post-date">Fri, August 28</span>
              <h3 class="post-title">
                Et repellendus molestiae qui est sed omnis voluptates magnam
              </h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="post-box">
              <div class="post-img">
                <img src="<?= base_url(); ?>assets/img/blog/blog-3.jpg" class="img-fluid" alt="" />
              </div>
              <span class="post-date">Mon, July 11</span>
              <h3 class="post-title">
                Quia assumenda est et veritatis aut quae
              </h3>
              <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Recent Blog Posts Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>
                    Jl. Utomo No.42, Krajan 1, Pakijangan, Kec. Wonorejo<br />
                    Pasuruan, Jawa Timur 67173
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>62+ 83851574470</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>dwicahyo.1512@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br />9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required />
                </div>

                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required />
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required />
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent. Thank you!
                  </div>

                  <button type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

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
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>assets/js/main.js"></script>
</body>

</html>