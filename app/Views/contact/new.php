 <?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>

 <!-- Main Content -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <div class="section-header-back">
                 <a href="<?= base_url('user/grps'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
             </div>
             <h1>Buat Tag Baru</h1>
         </div>

         <div class="section-body">
             <?php if (session()->has('error')) : ?>
                 <div class="alert alert-danger">
                     <?= session('error') ?>
                 </div>
             <?php endif ?>
             <?php if (session()->has('warning')) : ?>
                 <div class="alert alert-warning">
                     <?= session('warning') ?>
                 </div>
             <?php endif ?>
             <?php if (session()->has('success')) : ?>
                 <div class="alert alert-success">
                     <?= session('success') ?>
                 </div>
             <?php endif ?>
             <div class="row">
                 <div class="col-lg-8">
                     <div class="card">
                         <form action="<?= site_url('user/contacts') ?>" method="post" autocomplete="off" novalidate="">
                             <?= csrf_field() ?>
                             <div class="card-header">
                                 <h4> buat contact</h4>
                             </div>
                             <div class="card-body">
                                 <div class="form-group">
                                     <label>group</label>
                                     <select name="id_grp" class="form-control select2 <?= isset($errors['id_grp']) ? 'is-invalid' : null ?> ">
                                         <?php
                                            foreach ($grp as $key => $value) : ?>
                                             <option value="<?= $value->id_grp; ?>" <?= old('id_grp') == $value->id_grp ? 'selected' : null ?>><?= $value->nama_grp; ?></option>
                                         <?php endforeach;  ?>
                                     </select>
                                     <div class="invalid-feedback">
                                         <?= isset($errors['id_grp']) ? $errors['id_grp'] : null ?>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label>Name kontak</label>
                                     <input name="nama_contact" value="<?= old('nama_contact') ?>" type="text" class="form-control <?= isset($errors['nama_contact']) ? 'is-invalid' : null ?>">
                                     <div class="invalid-feedback">
                                         <?= isset($errors['nama_contact']) ? $errors['nama_contact'] : null ?>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label>Name Alias</label>
                                     <input name="nama_alias" type="text" class="form-control">
                                     <div class="invalid-feedback">
                                         Nama Alias?
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label>Phone</label>
                                     <input name="phone" type="number" class="form-control">
                                     <div class="invalid-feedback">
                                         number phone?
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label>Email</label>
                                     <input type="email" class="form-control">
                                     <div class="invalid-feedback">
                                         Oh no! Email is invalid.
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label>address</label>
                                     <textarea name="address" class="form-control" style="height: 50px;"></textarea>
                                 </div>
                                 <div class="form-group">
                                     <label>info</label>
                                     <textarea name="info_contact" class="form-control" style="height: 80px;"></textarea>
                                 </div>
                             </div>
                             <div class="card-footer text-right">
                                 <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Submit</button>
                                 <button type="reset" class="btn btn-secondary">Reset</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </div>
 <?= $this->endSection() ?>