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
                             <a href="<?= base_url('user/contacts/new'); ?>" class="btn btn-primary btn-icon icon-left" style="border-radius: 5px;">
                                 <i class="fas fa-plus"> Buat Contatcs</i>
                             </a>
                         </div>
                         <div class="card-body table-responsive">
                             <table class="table table-striped table-md" id="table-1">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>Nama Kontak</th>
                                         <th>Alias</th>
                                         <th>Telepon</th>
                                         <th>Email</th>
                                         <th>address</th>
                                         <th>Info</th>
                                         <th>Group</th>
                                         <th>Action</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                        $no = 1 + (10 * ($page - 1));
                                        ?>
                                     <?php foreach ($contacts as $key => $value) : ?>
                                         <tr>
                                             <td><?= $no++ ?></td>
                                             <td><?= $value->nama_contact; ?></td>
                                             <td><?= $value->nama_alias; ?></td>
                                             <td><?= $value->phone; ?></td>
                                             <td><?= $value->email; ?></td>
                                             <td><?= $value->address; ?></td>
                                             <td><?= $value->info_contact; ?></td>
                                             <td><?= $value->nama_grp; ?></td>
                                             <td>
                                                 <a href="<?= site_url('user/contacts/' . $value->id_contact . '/edit') ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                 <form action="<?= site_url('user/contacts/' . $value->id_contact) ?>" method="post" class="d-inline" id="del-<?= $value->id_contact ?>">
                                                     <?= csrf_field() ?>
                                                     <input type="hidden" name="_method" value="DELETE">
                                                     <button class="btn btn-danger btn-sm" data-confirm="Hapus Data? | Apakah anda yakin" data-confirm-yes="submitDel(<?= $value->id_contact ?>)"><i class="fas fa-trash"></i></button>
                                                 </form>
                                             </td>
                                         </tr>
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