 <?= $this->extend('layout/default') ?>

 <?= $this->section('title') ?>
 <title>Update undangan &mdash; E-Undangan</title>
 <?= $this->endSection() ?>

 <?= $this->section('content') ?>

 <section class="section">
     <div class="section-header">
         <div class="section-header-button">
             <a href="<?= site_url('undangan') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
         </div>
         <h1>Update undangan</h1>
     </div>

     <div class="section-body">

         <div class="card">
             <div class="card-header">
                 <div class="card-body">
                     <?php $errors = session()->getFlashdata('errors'); ?>
                     <form action="<?= site_url('undangan/' . $undangan->id_undangan) ?>" method="post" autocomplete="off" novalidate="">
                         <input type="hidden" name="_method" value="PATCH">
                         <?= csrf_field() ?>
                         <div class="card-header">
                             <h4> Edit undangan</h4>
                         </div>
                         <div class="card-body">
                             <div class="form-group">
                                 <label>group</label>
                                 <select name="id_group" class="form-control select2 <?= isset($errors['id_group']) ? 'is-invalid' : null ?> ">
                                     <?php
                                        foreach ($groups as $key => $value) : ?>
                                         <option value="<?= $value->id_group; ?>" <?= old('id_group', $undangan->id_group) == $value->id_group ? 'selected' : null ?>><?= $value->nama_group; ?></option>
                                     <?php endforeach;  ?>
                                 </select>
                                 <div class="invalid-feedback">
                                     <?= isset($errors['id_group']) ? $errors['id_group'] : null ?>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label>Name kontak</label>
                                 <input name="nama_undangan" value="<?= old('nama_undangan' ,$undangan->nama_undangan )?>" type="text" class="form-control  <?= isset($errors['nama_undangan']) ? 'is-invalid' : null ?>">
                                 <div class="invalid-feedback">
                                     <?= isset($errors['nama_undangan']) ? $errors['nama_undangan'] : null ?>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label>address</label>
                                 <textarea name="address" class="form-control" style="height: 50px;"><?= $undangan->address; ?></textarea>
                             </div>
                             <div class="form-group">
                                 <label>info</label>
                                 <textarea name="info_undangan" class="form-control" style="height: 80px;"><?= $undangan->info_undangan; ?></textarea>
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