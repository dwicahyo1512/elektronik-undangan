 <?= $this->extend('layout/default') ?>

 <?= $this->section('title') ?>
 <title>Data Acara &mdash; E-Undangan</title>
 <?= $this->endSection() ?>

 <?= $this->section('content') ?>


 <section class="section">
     <div class="section-header">
         <h1>Acara</h1>
         <div class="section-header-button">
             <a href="<?= site_url('acara/add') ?>" class="btn btn-primary">add New</a>
         </div>
     </div>

     <?php if (session()->getFlashdata('success')) : ?>
         <div class="alert alert-success alert-dismissible show fade">
             <div class="alert-body">
                 <button class="close" data-dismiss="alert">X</button>
                 <b>Success !</b>
                 <?= session()->getFlashdata('success') ?>
             </div>
         </div>
     <?php endif ?>
     <?php if (session()->getFlashdata('error')) : ?>
         <div class="alert alert-danger alert-dismissible show fade">
             <div class="alert-body">
                 <button class="close" data-dismiss="alert">X</button>
                 <b>Error !</b>
                 <?= session()->getFlashdata('error') ?>
             </div>
         </div>
     <?php endif ?>

     <div class="section-body">

         <div class="card">
             <div class="card-header">
                 <h4> Data Acara</h4>
             </div>
             <div class="card-body table-responsive">
                 <table class="table table-striped table-md">
                     <tbody>
                         <tr>
                             <th>#</th>
                             <th>Name</th>
                             <th>Created At</th>
                             <th>Status</th>
                             <th>Action</th>
                         </tr>
                         <?php foreach ($acara as $key => $value) : ?>
                             <tr>
                                 <td><?= $key + 1; ?></td>
                                 <td><?= $value->nama_acara; ?></td>
                                 <td><?= date('d/m/Y', strtotime($value->date_acara)) ?></td>
                                 <td><?= $value->info_acara; ?></td>
                                 <td>
                                     <a href="<?= site_url('acara/edit/'.$value->id_acara) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                     <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                 </td>
                             </tr>
                         <?php endforeach; ?>
                     </tbody>
                 </table>
             </div>
         </div>

     </div>
 </section>
 <?= $this->endSection() ?>