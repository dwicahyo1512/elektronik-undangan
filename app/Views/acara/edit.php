 <?= $this->extend('layout/default') ?>

 <?= $this->section('title') ?>
 <title>Update Acara &mdash; E-Undangan</title>
 <?= $this->endSection() ?>

 <?= $this->section('content') ?>

 <section class="section">
     <div class="section-header">
         <div class="section-header-button">
             <a href="<?= site_url('acara') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
         </div>
         <h1>Update Acara</h1>
     </div>

     <div class="section-body">

         <div class="card">
             <div class="card-header">
                 <div class="card-body">

                     <form action="<?= site_url('user/acara/edit' . $acara->id_acara) ?>" method="post" autocomplete="off" novalidate="">
                         <?= csrf_field() ?>
                         <input type="hidden" name="_method" value="PUT">
                         <div class="card-header">
                             <h4> Edit Acara</h4>
                         </div>
                         <div class="card-body">
                             <div class="form-group">
                                 <label>Name Acara</label>
                                 <input name="nama_acara" value="<?= old('nama_acara', $acara->nama_acara) ?>" type="text" class="form-control <?= session('errors.nama_acara') ? 'is-invalid' : null ?>">
                                 <?php if (session('errors.nama_acara')) : ?>
                                     <div class="invalid-feedback">
                                         <?= session('errors.nama_acara') ?>
                                     </div>
                                 <?php endif ?>
                             </div>
                             <div class="form-group">
                                 <label>Tanggal</label>
                                 <input name="date_acara" value="<?= old('date_acara', $acara->date_acara) ?>" type="date" class="form-control <?= session('errors.date_acara') ? 'is-invalid' : null ?>">
                                 <?php if (session('errors.date_acara')) : ?>
                                     <div class="invalid-feedback">
                                         <?= session('errors.date_acara') ?>
                                     </div>
                                 <?php endif ?>
                             </div>
                             <div class="form-group mb-0">
                                 <label>info</label>
                                 <textarea name="info_acara" class="form-control"><?= $acara->info_acara; ?></textarea>
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
 <?= $this->endSection() ?>