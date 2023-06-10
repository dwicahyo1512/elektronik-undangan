 <?= $this->extend('layout/default') ?>

 <?= $this->section('title') ?>
 <title>Data Group &mdash; E-Undangan</title>
 <?= $this->endSection() ?>

 <?= $this->section('content') ?>


 <section class="section">
     <div class="section-header">
         <h1>Groups</h1>
         <div class="section-header-button">
             <a href="<?= site_url('groups') ?>" class="btn btn-secondary">Back</a>
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
                 <h4> Data Grup Kontak - Trash</h4>
                 <div class="card-header-action">
                     <a href="<?= site_url('groups/restore') ?>" class="btn btn-info">Restore all</a>
                     <form action="<?= site_url('groups/delete2') ?>" method="post" class="d-inline" onsubmit="return confirm(yakin hapus data?)">
                         <?= csrf_field() ?>
                         <button href="" class="btn btn-danger btn-sm">Delete permanent </button>
                     </form>
                     <!-- <a href="<?= site_url('groups/delete2') ?>" class="btn btn-danger"><i class="fa fa-trash"> Deleted all Permanent</i></a> -->
                 </div>
             </div>
             <div class="card-body table-responsive">
                 <table class="table table-striped table-md">
                     <tbody>
                         <tr>
                             <th>#</th>
                             <th>Nama Grup</th>
                             <th>Info</th>
                             <th>Action</th>
                         </tr>
                         <?php foreach ($groups as $key => $value) : ?>
                             <tr>
                                 <td><?= $key + 1; ?></td>
                                 <td><?= $value->nama_group; ?></td>
                                 <td><?= $value->info_group; ?></td>
                                 <td>
                                     <a href="<?= site_url('groups/restore/' . $value->id_group) ?>" class="btn btn-info btn-sm">Restore</i></a>
                                     <form action="<?= site_url('groups/delete2/' . $value->id_group) ?>" method="post" class="d-inline" onsubmit="return confirm(yakin hapus data?)">
                                         <?= csrf_field() ?>
                                         <button href="" class="btn btn-danger btn-sm">Delete permanent</button>
                                     </form>
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