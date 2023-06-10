 <?= $this->extend('layout/default') ?>

 <?= $this->section('title') ?>
 <title>Data Groups &mdash; E-Undangan</title>
 <?= $this->endSection() ?>

 <?= $this->section('content') ?>


 <section class="section">
     <div class="section-header">
         <h1>Groups</h1>
         <div class="section-header-button">
             <a href="<?= site_url('groups/new') ?>" class="btn btn-primary">add New</a>
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
     <?php if (session()->getFlashdata('errors')) : ?>
         <div class="alert alert-danger alert-dismissible show fade">
             <div class="alert-body">
                 <button class="close" data-dismiss="alert">X</button>
                 <b>Error !</b>
                 <?= session()->getFlashdata('errors') ?>
             </div>
         </div>
     <?php endif ?>

     <div class="section-body">
         <div class="card">
             <div class="card-header">
                 <h4> Data Grup kontak</h4>
                 <div class="card-header-action">
                     <a href="<?= site_url('groups/trash') ?>" class="btn btn-danger"><i class="fa fa-trash"> Trash</i></a>
                 </div>
             </div>
             <div class="card-body table-responsive">
                 <table class="table table-striped table-md">
                     <thead>
                         <tr>
                             <th>#</th>
                             <th>Nama Grup</th>
                             <th>Info</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php foreach ($groups as $key => $value) : ?>
                             <?php if ($value->nama_group !== 'tidak diketahui') : ?>
                                 <tr>
                                     <td><?= $key + 0; ?></td>
                                     <td><?= $value->nama_group; ?></td>
                                     <td><?= $value->info_group; ?></td>
                                     <td>
                                         <a href="<?= site_url('groups/edit/' . $value->id_group) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                         <form action="<?= site_url('groups/delete/' . $value->id_group) ?>" method="post" class="d-inline" id="del-<?= $value->id_group ?>">
                                             <?= csrf_field() ?>
                                             <button class="btn btn-danger btn-sm" data-confirm="Hapus Data? | Apakah anda yakin" data-confirm-yes="submitDel(<?= $value->id_group ?>)"><i class="fas fa-trash"></i></button>
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
 </section>
 <?= $this->endSection() ?>