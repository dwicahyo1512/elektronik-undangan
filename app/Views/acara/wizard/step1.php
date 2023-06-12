<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('superadmin/kategori'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Buat Kategori Produk</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Buat Acara</h4>
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
                                                Isi Biodata Acara
                                            </div>
                                        </div>
                                        <div class="wizard-step">
                                            <div class="wizard-step-icon">
                                                <i class="fas fa-box-open"></i>
                                            </div>
                                            <div class="wizard-step-label">
                                                thema Acara
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
                            <form class="wizard-content mt-2" action="step2" method="post" autocomplete="off" novalidate="">
                                <?= csrf_field() ?>
                                <div class="wizard-pane">
                                   
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Name Acara</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input name="nama_acara" type="text" value="<?= old('nama_acara') ?>" class="form-control <?= session('errors.nama_acara') ? 'is-invalid' : null ?>">
                                            <?php if (session('errors.nama_acara')) : ?>
                                                <div class="invalid-feedback">
                                                    <?= session('errors.nama_acara') ?>
                                                </div>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Tanggal Acara</label>
                                        <div class="col-lg-4 col-md-6">
                                            <div class=" input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-calendar"></i>
                                                    </div>
                                                </div>
                                                <input name="date_acara" type=" text" value="<?= old('date_acara') ?>" class="form-control datepicker <?= (session('errors.date_acara')) ? 'is-invalid' : null ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Waktu Acara</label>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-clock"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control timepicker">
                                                <?php if (session('errors.date_acara')) : ?>
                                                    <div class="invalid-feedback">
                                                        <?= session('errors.date_acara') ?>
                                                    </div>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-md-4 text-md-right text-left mt-2">Alamat</label>
                                        <div class="col-lg-4 col-md-6">
                                            <textarea class="form-control" name="info_acara"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-4"></div>
                                        <div class="col-lg-4 col-md-6 text-right">
                                            <button type="submit" class="btn btn-success">Submit <i class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>




<?= $this->endSection() ?>