<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>

<div class="d-flex flex-wrap align-items-stretch">
     <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
               <img src="<?= base_url() ?>/favicon.ico" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
               <h4 class="text-dark font-weight-normal"><?= lang('Auth.loginTitle') ?><span class="font-weight-bold"> E-Undangan</span></h4>
               <p class="text-muted">Sebelum Login, Anda harus masuk atau mendaftar jika Anda belum memiliki akun.</p>
               <?php if (session()->has('message')) : ?>
                    <div class="alert">
                         <div class="alert alert-success">
                              <?= session('message') ?>
                         </div>
                    </div>
               <?php endif ?>

               <?php if (session()->has('error')) : ?>
                    <div class="alert">
                         <div class="alert alert-danger">
                              <?= session('error') ?>
                         </div>
                    </div>
               <?php endif ?>

               <?php if (session()->has('errors')) : ?>
                    <div class="alert">
                         <ul class="alert alert-danger">
                              <?php foreach (session('errors') as $error) : ?>
                                   <li><?= $error ?></li>
                              <?php endforeach ?>
                         </ul>
                    </div>
               <?php endif ?>
               <form method="POST" action="<?= url_to('login') ?>" class="needs-validation" novalidate="">
                    <?= csrf_field() ?>

                    <?php if ($config->validFields === ['email']) : ?>
                         <div class="form-group">
                              <label for="login"><?= lang('Auth.email') ?></label>
                              <input id="email" type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="john@gmail.com / doe_john" tabindex="1" required autofocus>
                              <div class="invalid-feedback">
                                   <?= session('errors.login') ?>
                              </div>
                         </div>
                    <?php else : ?>
                         <div class="form-group">
                              <label for="login">Email / Username</label>
                              <input id="email" type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="john@gmail.com / doe_john" tabindex="1" required autofocus>
                              <div class="invalid-feedback">
                                   <?= session('errors.login') ?>
                              </div>
                         </div>
                    <?php endif; ?>

                    <div class="form-group">
                         <div class="d-block">
                              <label for="password" class="control-label"><?= lang('Auth.password') ?></label>
                              <?php if ($config->activeResetter) : ?>
                                   <div class="float-right">
                                        <a href="<?= url_to('forgot') ?>" class="text-small">
                                             Lupa Password?
                                        </a>
                                   </div>
                              <?php endif; ?>
                         </div>
                         <div class="input-group" id="show_hide_password">
                              <input id="password" type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" tabindex="2" required>
                              <div class="input-group-prepend">
                                   <div class="input-group-text">
                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                   </div>
                              </div>
                         </div>
                         <div class="invalid-feedback">
                              <?= session('errors.password') ?>
                         </div>
                    </div>

                    <?php if ($config->allowRemembering) : ?>
                         <div class="form-group">
                              <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="remember" class="custom-control-input <?php if (old('remember')) : ?> checked <?php endif ?>" tabindex="3" id="remember-me">
                                   <label class="custom-control-label" for="remember-me">Ingat Saya</label>
                              </div>
                         </div>
                    <?php endif; ?>

                    <div class="form-group">
                         <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                              <?= lang('Auth.loginAction') ?>
                         </button>
                    </div>
                    <?php if ($config->allowRegistration) : ?>
                         <div class="mt-5 text-muted text-center">
                              Tidak punya akun? <a href="<?= url_to('register') ?>">BUAT AKUN</a>
                         </div>
                    <?php endif; ?>
               </form>
               <div class="text-center mt-5 text-small">
                    Copyright &copy; E-Undangan. Made with 💙 by MDC
                    <div class="mt-2">
                         <a href="#">Privacy Policy</a>
                         <div class="bullet"></div>
                         <a href="#">Terms of Service</a>
                    </div>
               </div>
          </div>
     </div>
     <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?= base_url() ?>/template/assets/img/unsplash/login-bg.jpg">
          <div class="absolute-bottom-left index-2">
               <div class="text-light p-5 pb-2">
                    <div class="mb-5 pb-3">
                         <h1 class="mb-2 display-4 font-weight-bold">Jangan lewatkan kesempatan istimewa ini!</h1>
                         <h5 class="font-weight-normal text-muted-transparent"> Buat undanganmu dengan E-Undangan, cara yang cepat dan mudah untuk mengundang orang banyak dengan cepat dalam acaramu.</h5>
                    </div>
                    Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/T_NZAuNrD8k">Annie Spratt</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
               </div>
          </div>
     </div>
</div>

<?= $this->endSection(); ?>