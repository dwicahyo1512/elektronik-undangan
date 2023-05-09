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

                     <form action="<?= site_url('acara' . $acara->id_acara) ?>" method="post" autocomplete="off" class="needs-validation was-validated" novalidate="">
                         <?= csrf_field() ?>

                         <div class="card-header">
                             <h4> Edit Acara</h4>
                         </div>
                         <div class="card-body">
                             <div class="form-group">
                                 <label>Name Acara</label>
                                 <input name="nama_acara" value="<?= $acara->nama_acara; ?>" type="text" class="form-control" required="">
                                 <div class="invalid-feedback">
                                     Apa Nama Acara Mu?
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label>Tanggal</label>
                                 <input name="date_acara" type="date" class="form-control" required="">
                                 <div class="invalid-feedback">
                                     Kapan Acara Mu?.
                                 </div>
                             </div>
                             <div class="form-group mb-0">
                                 <label>info</label>
                                 <textarea name="info_acara" class="form-control"></textarea>
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