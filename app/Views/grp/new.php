 <?= $this->extend('layout/default') ?>

 <?= $this->section('title') ?>
 <title>Create Group &mdash; E-Undangan</title>
 <?= $this->endSection() ?>

 <?= $this->section('content') ?>

 <section class="section">
     <div class="section-header">
         <div class="section-header-button">
             <a href="<?= site_url('groups') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
         </div>
         <h1>Create Group</h1>
     </div>

     <div class="section-body">

         <div class="card">
             <div class="card-header">
                 <div class="card-body">
                     <form action="<?= site_url('groups') ?>" method="post" autocomplete="off" novalidate="">
                         <?= csrf_field() ?>
                         <div class="card-header">
                             <h4> buat group</h4>
                         </div>
                         <div class="card-body">
                             <div class="form-group">
                                 <label>Name Group</label>
                                 <input name="nama_group" type="text" value="<?= old('nama_group') ?>" class="form-control <?= (session('error')) ? 'is-invalid' : null ?>" autofocus>
                                 <?php if (session('error')) : ?>
                                     <div class="invalid-feedback">
                                         <?php foreach (session('error') as $error) : ?>
                                             <li><?= esc($error) ?></li>
                                         <?php endforeach ?>
                                     </div>
                                 <?php endif ?>
                             </div>
                             <div class="form-group mb-0">
                                 <label>info</label>
                                 <textarea name="info_group" class="form-control" style="height: 50px;"></textarea>
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