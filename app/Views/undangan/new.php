 <?= $this->extend('layout/default') ?>

 <?= $this->section('title') ?>
 <title>Create undangan &mdash; E-Undangan</title>
 <?= $this->endSection() ?>

 <?= $this->section('content') ?>

 <section class="section">
     <div class="section-header">
         <div class="section-header-button">
             <a href="<?= site_url('undangan') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
         </div>
         <h1>Create undangan</h1>
     </div>

     <div class="section-body">
         <div class="row">
             <div class="col-12">
                 <div class="card">
                     <div class="card-header">
                         <h4>Buat Undangan</h4>
                     </div>
                     <div class="card-body">
                         <div class="row mt-4">
                             <div class="col-12 col-lg-8 offset-lg-2">
                                 <div class="wizard-steps">
                                     <div class="wizard-step wizard-step-active">
                                         <div class="wizard-step-icon">
                                             <i class="	fas fa-address-book"></i>
                                         </div>
                                         <div class="wizard-step-label">
                                             Isi Biodata Undangan
                                         </div>
                                     </div>
                                     <div class="wizard-step">
                                         <div class="wizard-step-icon">
                                             <i class="fas fa-box-open"></i>
                                         </div>
                                         <div class="wizard-step-label">
                                             Create an App
                                         </div>
                                     </div>
                                     <div class="wizard-step">
                                         <div class="wizard-step-icon">
                                             <i class="fas fa-server"></i>
                                         </div>
                                         <div class="wizard-step-label">
                                             Server Information
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <form class="wizard-content mt-2">
                             <div class="wizard-pane">
                                 <div class="form-group row align-items-center">
                                     <label class="col-md-4 text-md-right text-left">Name Undangan</label>
                                     <div class="col-lg-4 col-md-6">
                                         <input name="nama_undangan" value="<?= old('nama_undangan') ?>" type="text" class="form-control <?= isset($errors['nama_undangan']) ? 'is-invalid' : null ?>">
                                     </div>
                                     <div class="invalid-feedback">
                                         <?= isset($errors['nama_undangan']) ? $errors['nama_undangan'] : null ?>
                                     </div>
                                 </div>
                                 <div class="form-group row align-items-center">
                                     <label class="col-md-4 text-md-right text-left mt-2">Acara</label>
                                     <div class="col-lg-4 col-md-6">
                                         <select name="id_acara" class="form-control select2 <?= isset($errors['id_acara']) ? 'is-invalid' : null ?>" onchange="updateDateAcara(this)">
                                             <?php foreach ($acara as $value) : ?>
                                                 <option value="<?= $value->id_acara ?>"><?= $value->nama_acara ?></option>
                                             <?php endforeach; ?>
                                         </select>
                                         <input type="hidden" id="selected_id_input" name="selected_id" readonly>
                                     </div>
                                     <div class="invalid-feedback">
                                         <?= isset($errors['id_acara']) ? $errors['id_acara'] : null ?>
                                     </div>
                                 </div>
                                 <div class="form-group row align-items-center">
                                     <label class="col-md-4 text-md-right text-left">Tanggal Acara</label>
                                     <div class="col-lg-4 col-md-6">
                                         <input name="date_acara" id="date_acara_input" type="text" class="form-control <?= isset($errors['date_acara']) ? 'is-invalid' : null ?>" readonly>
                                     </div>
                                     <div class="invalid-feedback">
                                         <?= isset($errors['date_acara']) ? $errors['date_acara'] : null ?>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label class="col-md-4 text-md-right text-left mt-2">Address</label>
                                     <div class="col-lg-4 col-md-6">
                                         <textarea class="form-control" name="address"></textarea>
                                     </div>
                                 </div>

                                 <div class="form-group row">
                                     <div class="col-md-4"></div>
                                     <div class="col-lg-4 col-md-6 text-right">
                                         <a href="#" class="btn btn-icon icon-right btn-primary">Next <i class="fas fa-arrow-right"></i></a>
                                     </div>
                                 </div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- <div class="card">
             <div class="card-header">
                 <div class="card-body">
                     <?php $errors = session()->getFlashdata('errors'); ?>
                     <form action="<?= site_url('undangan') ?>" method="post" autocomplete="off" novalidate="">
                         <?= csrf_field() ?>
                         <div class="card-header">
                             <h4> buat undangan</h4>
                         </div>
                         <div class="card-body">
                             <div class="form-group">
                                 <label>group</label>
                                 <select name="id_group" class="form-control select2 <?= isset($errors['id_group']) ? 'is-invalid' : null ?> ">
                                     <?php
                                        foreach ($groups as $key => $value) : ?>
                                         <option value="<?= $value->id_group; ?>" <?= old('id_group') == $value->id_group ? 'selected' : null ?>><?= $value->nama_group; ?></option>
                                     <?php endforeach;  ?>
                                 </select>
                                 <div class="invalid-feedback">
                                     <?= isset($errors['id_group']) ? $errors['id_group'] : null ?>
                                 </div>
                             </div>
                             <div class="form-group">
                                 <label>contact</label>
                                 <select name="id_contact" class="form-control select2 <?= isset($errors['id_contact']) ? 'is-invalid' : null ?> ">
                                     <?php
                                        foreach ($contacts as $key => $value) : ?>
                                         <option value="<?= $value->id_contact; ?>" <?= old('id_contact') == $value->id_contact ? 'selected' : null ?>><?= $value->nama_contact; ?></option>
                                     <?php endforeach;  ?>
                                 </select>
                                 <div class="invalid-feedback">
                                     <?= isset($errors['id_contact']) ? $errors['id_contact'] : null ?>
                                 </div>
                             </div>
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
                                 <label>address</label>
                                 <textarea name="address" class="form-control" style="height: 50px;"></textarea>
                             </div>
                             <div class="form-group">
                                 <label>info</label>
                                 <textarea name="info_undangan" class="form-control" style="height: 80px;"></textarea>
                             </div>
                         </div>
                         <div class="card-footer text-right">
                             <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Submit</button>
                             <button type="reset" class="btn btn-secondary">Reset</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div> -->

     </div>
 </section>
 <script>
     var acaraData = <?= json_encode($acara) ?>;

     function updateDateAcara(selectElement) {
         var selectedId = selectElement.value;
         var selectedDate = acaraData.find(item => item.id_acara === selectedId)?.date_acara || '';

         document.getElementById('selected_id_input').value = selectedId;
         document.getElementById('date_acara_input').value = selectedDate;
     }
     

     // Set nilai awal saat halaman dimuat
     updateDateAcara(document.querySelector('[name="id_acara"]'));
 </script>
 <?= $this->endSection() ?>