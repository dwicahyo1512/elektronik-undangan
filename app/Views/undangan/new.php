 <?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>

 <!-- Main Content -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <div class="section-header-back">
                 <a href="<?= base_url('user/undangan'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
             </div>
             <h1>Buat Tag Baru</h1>
         </div>

         <div class="section-body">
             <?php if (session()->has('error')) : ?>
                 <div class="alert alert-danger">
                     <?= session('error') ?>
                 </div>
             <?php endif ?>
             <?php if (session()->has('warning')) : ?>
                 <div class="alert alert-warning">
                     <?= session('warning') ?>
                 </div>
             <?php endif ?>
             <?php if (session()->has('success')) : ?>
                 <div class="alert alert-success">
                     <?= session('success') ?>
                 </div>
             <?php endif ?>
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <form action="<?= site_url('user/undangan') ?>" method="post" autocomplete="off" novalidate="">
                             <?= csrf_field() ?>
                             <input type="hidden" name="member_id" value="<?= user_id(); ?>">
                             <div class="card-header">
                                 <h4> buat Undangan</h4>
                             </div>
                             <div class="card-body">
                                 <div class="form-group">
                                     <label>Acara</label>
                                     <select name="id_acara" class="form-control select2 <?= isset($errors['id_acara']) ? 'is-invalid' : null ?> ">
                                         <?php
                                            foreach ($acara as $key => $value) : ?>
                                             <option value="<?= $value->id_acara; ?>" <?= old('id_acara') == $value->id_acara ? 'selected' : null ?>><?= $value->nama_acara; ?></option>
                                         <?php endforeach;  ?>
                                     </select>
                                     <div class="invalid-feedback">
                                         <?= isset($errors['id_acara']) ? $errors['id_acara'] : null ?>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label>Name Undangan</label>
                                     <input name="nama_undangan" value="<?= old('nama_undangan') ?>" type="text" class="form-control <?= isset($errors['nama_undangan']) ? 'is-invalid' : null ?>">
                                     <div class="invalid-feedback">
                                         <?= isset($errors['nama_undangan']) ? $errors['nama_undangan'] : null ?>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label>info Undangan</label>
                                     <textarea name="info_undangan" class="form-control" style="height: 80px;"></textarea>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-12">
                                     <div class="card">
                                         <div class="card-header">
                                             <h4>Pilih Contact</h4>
                                             <div class="card-header-form">
                                                 <!-- <form action="" method="get" autocomplete="off">
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
                                                     </div>
                                                 </form> -->
                                                 <div class="float-left">
                                                     <input type="text" id="keyword" class="form-control" style="width: 155pt;" placeholder="keyword pencarian">
                                                 </div>
                                                 <div class="float-right ml-2">
                                                     <button type="button" onclick="submitForm()" class="btn btn-primary"><i class="fas fa-search"></i></button>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="card-body p-0">
                                             <div class="table-responsive">
                                                 <table class="table table-striped">
                                                     <tbody>
                                                         <tr>
                                                             <th>
                                                                 <div class="custom-checkbox custom-control">
                                                                     <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                                     <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                                 </div>
                                                             </th>
                                                             <th>Nama Kontak</th>
                                                             <th>Alias</th>
                                                             <th>Telepon</th>
                                                             <th>Email</th>
                                                             <th>address</th>
                                                             <th>Info</th>
                                                             <th>Group</th>
                                                         </tr>
                                                         <?php
                                                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                            $no = 1 + (10 * ($page - 1));
                                                            ?>
                                                         <?php foreach ($contacts as $key => $value) : ?>
                                                             <tr>
                                                                 <td class="p-0 text-center">
                                                                     <div class=" custom-checkbox custom-control">
                                                                         <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-<?= $value->id_contact ?>" name="id_contact[]" value="<?= $value->id_contact; ?>">
                                                                         <label for="checkbox-<?= $value->id_contact ?>" class="custom-control-label">&nbsp;</label>
                                                                     </div>
                                                                 </td>
                                                                 <td><?= $value->nama_contact; ?></td>
                                                                 <td><?= $value->nama_alias; ?></td>
                                                                 <td><?= $value->phone; ?></td>
                                                                 <td><?= $value->email; ?></td>
                                                                 <td><?= $value->address; ?></td>
                                                                 <td><?= $value->info_contact; ?></td>
                                                                 <td><?= $value->nama_grp; ?></td>
                                                             </tr>
                                                         <?php endforeach; ?>
                                                     </tbody>
                                                 </table>
                                             </div>
                                         </div>
                                     </div>
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
 </div>

 <script>
     // Mendapatkan nilai keyword dari URL query string
     var urlParams = new URLSearchParams(window.location.search);
     var keywordValue = urlParams.get('keyword');

     // Mengatur nilai input teks sesuai dengan nilai keyword dari URL query string
     var keywordInput = document.getElementById("keyword");
     keywordInput.value = keywordValue;

     function submitForm() {
         var keyword = document.getElementById("keyword").value;
         // Lakukan apa pun yang perlu Anda lakukan dengan keyword (misalnya, kirim ke server menggunakan AJAX)

         // Contoh tindakan lain yang dapat Anda lakukan adalah mengubah URL query string dengan nilai keyword yang baru
         var urlParams = new URLSearchParams(window.location.search);
         urlParams.set('keyword', keyword);
         var newUrl = window.location.pathname + '?' + urlParams.toString();
         window.location.href = newUrl;
     }
 </script>

 <?= $this->endSection() ?>