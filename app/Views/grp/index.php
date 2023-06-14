 <?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>

 <!-- Main Content -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <h1>Daftar Tag</h1>
         </div>

         <div class="section-body">
             <?php if (session()->has('message')) : ?>
                 <div class="flash-data" data-flashdata="<?= session('message'); ?>"></div>
             <?php endif ?>
             <?php if (session()->has('message-danger')) : ?>
                 <div class="flash-data-danger" data-flashdanger="<?= session('message-danger'); ?>"></div>
             <?php endif ?>

             <?php if (session()->has('error')) : ?>
                 <div class="alert alert-danger">
                     <?= session('error') ?>
                 </div>
             <?php endif ?>
             <?php if (session()->has('success')) : ?>
                 <div class="alert alert-success">
                     <?= session('success') ?>
                 </div>
             <?php endif ?>

             <div class="row">
                 <div class="col-12">
                     <div class="card">
                         <div class="card-header">
                             <a href="<?= base_url('user/grps/new'); ?>" class="btn btn-primary btn-icon icon-left" style="border-radius: 5px;">
                                 <i class="fas fa-plus"> Buat Groups</i>
                             </a>
                         </div>
                         <div class="card-body table-responsive">
                             <table class="table table-striped table-md" id="table-1">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>Nama Grup</th>
                                         <th>Info</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php foreach ($grps as $key => $value) : ?>
                                         <?php if ($value->nama_grp !== 'tidak diketahui') : ?>
                                             <tr>
                                                 <td><?= $key + 0; ?></td>
                                                 <td><?= $value->nama_grp; ?></td>
                                                 <td><?= $value->info_grp; ?></td>
                                                 <td>
                                                     <a href="<?= site_url('user/grps/edit/' . $value->id_grp) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                     <form action="<?= site_url('user/grps/delete/' . $value->id_grp) ?>" method="post" class="d-inline" id="del-<?= $value->id_grp ?>">
                                                         <?= csrf_field() ?>
                                                         <button class="btn btn-danger btn-sm" data-confirm="Hapus Data? | Apakah anda yakin" data-confirm-yes="submitDel(<?= $value->id_grp ?>)"><i class="fas fa-trash"></i></button>
                                                     </form>
                                                 </td>
                                             </tr>
                                         <?php endif; ?>
                                     <?php endforeach; ?>
                                 </tbody>
                             </table>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </div>
 <?= $this->endSection() ?>