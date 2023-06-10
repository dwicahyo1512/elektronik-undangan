 <?= $this->extend('layout/default') ?>

 <?= $this->section('title') ?>
 <title>Update Group &mdash; E-Undangan</title>
 <?= $this->endSection() ?>

 <?= $this->section('content') ?>

 <section class="section">
     <div class="section-header">
         <div class="section-header-button">
             <a href="<?= site_url('groups') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
         </div>
         <h1>Update Group</h1>
     </div>

     <div class="section-body">

         <div class="card">
             <div class="card-header">
                 <div class="card-body">
                    
                     <form action="<?= site_url('groups/update/' . $group->id_group) ?>" method="post" autocomplete="off" novalidate="">
                         <?= csrf_field() ?>
                         <div class="card-header">
                             <h4> Edit group</h4>
                         </div>
                         <div class="card-body">
                             <div class="form-group">
                                 <label>Name group</label>
                                 <input name="nama_group" value="<?= old('nama_group', $group->nama_group) ?>" type="text" class="form-control  <?= (session('errors')) ? 'is-invalid' : null ?> " required="">
                                 <?php if (session('errors')) : ?>
                                     <div class="invalid-feedback">
                                         <?php foreach (session('errors') as $error) : ?>
                                             <li><?= esc($error) ?></li>
                                         <?php endforeach ?>
                                     </div>
                                 <?php endif ?>
                             </div>
                             <div class="form-group mb-0">
                                 <label>info</label>
                                 <textarea name="info_group" class="form-control" style="height: 50px;"><?= $group->info_group; ?></textarea>
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