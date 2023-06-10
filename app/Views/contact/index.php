 <?= $this->extend('layout/default') ?>

 <?= $this->section('title') ?>
 <title>Data Contacts &mdash; E-Undangan</title>
 <?= $this->endSection() ?>

 <?= $this->section('content') ?>


 <section class="section">
     <div class="section-header">
         <h1>Contacts</h1>
         <div class="section-header-button">
             <a href="<?= site_url('contacts/new') ?>" class="btn btn-primary">add New</a>
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
                 <h4> Data Contact kontak</h4>
             </div>
             <!-- <div class="card-header-action">
                     <a href="<?= site_url('contacts/trash') ?>" class="btn btn-danger"><i class="fa fa-trash"> Trash</i></a>
                 </div> -->
             <div class="card-header">
                 <form action="" method="get" autocomplete="off">
                     <div class="float-left">
                         <?php $request = \Config\Services::request(); ?>
                         <input type="text" name="keyword" value="<?= $request->getGet('keyword') ?>" class="form-control" style="width: 155pt;" placeholder="keyword pencarian">
                     </div>
                     <div class="float-right ml-2">
                         <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                         <?php
                            $request = \config\Services::request();
                            $keyword = $request->getGet('keyword');
                            if ($keyword != '') {
                                $param = "?keyword=" . $keyword;
                            } else {
                                $param = "";
                            }
                            ?>

                         <a href="<?= site_url('contacts/export' . $param) ?>" class="btn btn-primary"><i class="fas fa-file-upload"></i> Export Excel</a>
                         <div class="dropdown d-inline mr-2">
                             <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Easy Dropdown
                             </button>
                             <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                 <a class="dropdown-item has-icon" href="<?= base_url('contacts-example-import.xlsx') ?>">
                                     <i class="fas fa-file-excel"></i> Download Example</a>
                                 <a class="dropdown-item has-icon" href="#" data-toggle="modal" data-target="#modal-import-contact">
                                     <i class="fas fa-file-import"></i> Upload file</a>
                             </div>
                         </div>
                     </div>
                 </form>
             </div>
             <div class="card-body table-responsive">
                 <table class="table table-striped table-md">
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
                                 <td><?= $value->nama_group; ?></td>
                                 <td>
                                     <a href="<?= site_url('contacts/' . $value->id_contact . '/edit') ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                     <form action="<?= site_url('contacts/' . $value->id_contact) ?>" method="post" class="d-inline" id="del-<?= $value->id_contact ?>">
                                         <?= csrf_field() ?>
                                         <input type="hidden" name="_method" value="DELETE">
                                         <button class="btn btn-danger btn-sm" data-confirm="Hapus Data? | Apakah anda yakin" data-confirm-yes="submitDel(<?= $value->id_contact ?>)"><i class="fas fa-trash"></i></button>
                                     </form>
                                 </td>
                             </tr>
                         <?php endforeach; ?>
                     </tbody>
                 </table>
                 <div class="float-left">
                     <i>Showing <?= 1 + (10 * ($page - 1)) ?> to <?= $no - 1 ?> of <?= $pager->getTotal() ?> entries</i>
                 </div>
                 <div class="float-right">
                     <?= $pager->links('default', 'pagination') ?>
                 </div>

             </div>
         </div>
         <!-- <?= print_r($contacts) ?> -->
     </div>
 </section>
 <div class="modal fade" tabindex="-1" role="dialog" id="modal-import-contact">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Import Contact</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form method="post" action="<?= site_url('contacts/import') ?>" enctype="multipart/form-data">
                 <?= csrf_field() ?>
                 <div class="modal-body">
                     <div class="custom-file" >
                         <input type="file" name="file_excel" class="form-control custom-file-input" id="fileInput" required>
                         <label class="form-label custom-file-label" id="fileLabel" for="fileInput"><i class="far fa-file-excel"></i></label>
                     </div>
                 </div>
                 <div class="modal-footer bg-whitesmoke br">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                     <button type="submit" class="btn btn-primary">Import</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <script>
  
 </script>
 <?= $this->endSection() ?>