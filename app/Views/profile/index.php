 <?= $this->extend('layout/default') ?>

 <?= $this->section('title') ?>
 <title>Harga Pro &mdash; E-Undangan</title>
 <?= $this->endSection() ?>

 <?= $this->section('content') ?>

 <section class="section">
     <div class="section-header">
         <h1>Profile</h1>
         <div class="section-header-breadcrumb">
             <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
             <div class="breadcrumb-item">Profile</div>
         </div>
     </div>
     <div class="section-body">
         <h2 class="section-title">Hi, <?= userLogin()->nama_panggilan ?>!</h2>
         <p class="section-lead">
             Change information about yourself on this page.
         </p>

         <div class="row mt-sm-4">
             <div class="col-12 col-md-12 col-lg-5">
                 <div class="card profile-widget">
                     <div class="profile-widget-header">
                         <img alt="image" src="<?= base_url() ?>/template/assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                         <div class="profile-widget-items">
                             <div class="profile-widget-item">
                                 <div class="profile-widget-item-label">Acara</div>
                                 <div class="profile-widget-item-value"> <?= countData('acara'); ?></div>
                             </div>
                             <div class="profile-widget-item">
                                 <div class="profile-widget-item-label">Group</div>
                                 <div class="profile-widget-item-value"> <?= countData('groups'); ?></div>
                             </div>
                             <div class="profile-widget-item">
                                 <div class="profile-widget-item-label">Contact</div>
                                 <div class="profile-widget-item-value"> <?= countData('contacts'); ?></div>
                             </div>
                         </div>
                     </div>
                     <div class="profile-widget-description">
                         <div class="profile-widget-name"><?= userLogin()->nama_panggilan ?><div class="text-muted d-inline font-weight-normal">
                             </div>
                         </div>
                         <?= userLogin()->info_user ?>
                     </div>
                     <div class="card-footer text-center">
                         <div class="font-weight-bold mb-2">Follow <?= userLogin()->nama_lengkap ?></div>
         <!-- pakai endif -->
                         <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                             <i class="fab fa-facebook-f"></i>
                         </a>
                         <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                             <i class="fab fa-twitter"></i>
                         </a>
                         <a href="#" class="btn btn-social-icon btn-github mr-1">
                             <i class="fab fa-github"></i>
                         </a>
                         <a href="#" class="btn btn-social-icon btn-instagram">
                             <i class="fab fa-instagram"></i>
                         </a>
                     </div>
                 </div>
             </div>
             <div class="col-12 col-md-12 col-lg-7">
                 <div class="card">
                     <!-- <?= print_r(userLogin()) ?> -->
                     <?php if (session()->getFlashdata('success')) : ?>
                         <div class="alert alert-success alert-dismissible show fade">
                             <div class="alert-body">
                                 <button class="close" data-dismiss="alert">X</button>
                                 <b>Success !</b>
                                 <?= session()->getFlashdata('success') ?>
                             </div>
                         </div>
                     <?php endif ?>
                     <form action="<?= site_url('profile/edit') ?>" method="post" autocomplete="off" novalidate="">
                         <?= csrf_field() ?>
                         <div class="card-header">
                             <h4>Edit Profile</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="form-group col-md-6 col-12">
                                     <label>Name Panggilan</label>
                                     <input name="nama_panggilan" value="<?= old('nama_panggilan', userLogin()->nama_panggilan) ?>" type="text" class="form-control <?= session('errors.nama_panggilan') ? 'is-invalid' : null ?>">
                                     <?php if (session('errors.nama_panggilan')) : ?>
                                         <div class="invalid-feedback">
                                             <?= session('errors.nama_panggilan') ?>
                                         </div>
                                     <?php endif ?>
                                 </div>
                                 <div class="form-group col-md-6 col-12">
                                     <label>Name Lengkap</label>
                                     <input name="nama_lengkap" value="<?= old('nama_lengkap', userLogin()->nama_lengkap) ?>" type="text" class="form-control <?= session('errors.nama_lengkap') ? 'is-invalid' : null ?>">
                                     <?php if (session('errors.nama_lengkap')) : ?>
                                         <div class="invalid-feedback">
                                             <?= session('errors.nama_lengkap') ?>
                                         </div>
                                     <?php endif ?>
                                 </div>
                             </div>
                             <div class="row">

                                 <div class="form-group col-md-8 col-12">
                                     <label>email</label>
                                     <input name="email_user" value="<?= old('email_user', userLogin()->email_user) ?>" type="text" class="form-control <?= session('errors.email_user') ? 'is-invalid' : null ?>">
                                     <?php if (session('errors.email_user')) : ?>
                                         <div class="invalid-feedback">
                                             <?= session('errors.email_user') ?>
                                         </div>
                                     <?php endif ?>
                                 </div>
                                 <div class="form-group col-md-4 col-12">
                                     <label>phone</label>
                                     <input name="phone" value="<?= old('phone', userLogin()->phone) ?>" type="text" class="form-control <?= session('errors.phone') ? 'is-invalid' : null ?>">
                                     <?php if (session('errors.phone')) : ?>
                                         <div class="invalid-feedback">
                                             <?= session('errors.phone') ?>
                                         </div>
                                     <?php endif ?>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="form-group col-12">
                                     <label>Bio</label>
                                     <textarea name="info_user" class="form-control summernote-simple"><?= userLogin()->info_user ?></textarea>
                                 </div>
                             </div>
                         </div>
                         <div class="card-footer text-right">
                             <button class="btn btn-primary">Save Changes</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <?= $this->endSection() ?>