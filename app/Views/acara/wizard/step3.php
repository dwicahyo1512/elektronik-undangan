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
                        <!-- isi 3 -->
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col-12 col-lg-8 offset-lg-2">
                                    <div class="wizard-steps">
                                        <div class="wizard-step">
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
                                        <div class="wizard-step  wizard-step-active">
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
                            <form class="wizard-content mt-2" action="<?= site_url('user/acara') ?>" method="post" autocomplete="off" novalidate="">
                                <?= csrf_field() ?>
                                <div class="wizard-pane">
                                    <?php if (session()->has('step2Data') && isset(session('step2Data')['icon-input']) && session('step2Data')['icon-input'] === 'nikah') : ?>
                                        <br>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-12 text-md text-center">
                                                <h2>Acara Nikah</h2>
                                            </label>
                                        </div>
                                    <?php elseif (session()->has('step2Data') && isset(session('step2Data')['icon-input']) && session('step2Data')['icon-input'] === 'party') : ?>
                                        <br>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-12 text-md text-center">
                                                <h2>Acara Party</h2>
                                            </label>
                                        </div>
                                    <?php elseif (session()->has('step2Data') && isset(session('step2Data')['icon-input']) && session('step2Data')['icon-input'] === 'test') : ?>
                                        <br>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-12 text-md text-center">
                                                <h2>Acara Test</h2>
                                            </label>
                                        </div>
                                    <?php endif; ?>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Name Acara</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input name="nama_acara" type="text" value="<?= session()->get('step1Data')['nama_acara'] ?? '' ?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">date Acara</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input name="date_acara" type="text" value="<?= session()->get('step1Data')['date_acara'] ?? '' ?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">info Acara</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input name="info_acara" type="text" value="<?= session()->get('step1Data')['info_acara'] ?? '' ?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <?php if (session()->has('step2Data') && isset(session('step2Data')['icon-input']) && session('step2Data')['icon-input'] === 'nikah') : ?>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-2 text-md-right text-left">Name pria</label>
                                            <div class="col-lg-3 col-md-3">
                                                <input name="nama_pria" type="text" value="<?= session('step2Data')['nama_pria'] ?? '' ?>" class="form-control" readonly>
                                            </div>
                                            <label class="col-md-3 text-md-right text-left">Name wanita</label>
                                            <div class="col-lg-3 col-md-3">
                                                <input name="nama_wanita" type="text" value="<?= session('step2Data')['nama_wanita'] ?? '' ?>" class="form-control" readonly>
                                            </div>
                                        </div>
                                    <?php elseif (session()->has('step2Data') && isset(session('step2Data')['icon-input']) && session('step2Data')['icon-input'] === 'party') : ?>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-2 text-md-right text-left">Party</label>
                                            <div class="col-lg-3 col-md-3">
                                                <input name="party" type="text" value="<?= session('step2Data')['party'] ?? '' ?>" class="form-control" readonly>
                                            </div>
                                            <label class="col-md-3 text-md-right text-left">orang party</label>
                                            <div class="col-lg-3 col-md-3">
                                                <input name="pembuat_party" type="text" value="<?= session('step2Data')['pembuat_party'] ?? '' ?>" class="form-control" readonly>
                                            </div>
                                        </div>
                                    <?php elseif (session()->has('step2Data') && isset(session('step2Data')['icon-input']) && session('step2Data')['icon-input'] === 'test') : ?>
                                        <div class="form-group row align-items-center">
                                            <label class="col-md-2 text-md-right text-left">Test</label>
                                            <div class="col-lg-3 col-md-3">
                                                <input name="test_aja" type="text" value="<?= session('step2Data')['test_aja'] ?? '' ?>" class="form-control" readonly>
                                            </div>
                                            <label class="col-md-3 text-md-right text-left">test nya</label>
                                            <div class="col-lg-3 col-md-3">
                                                <input name="nama_wanita" type="text" value="<?= session('step2Data')['tets'] ?? '' ?>" class="form-control" readonly>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="form-group row">
                                        <div class="col-md-4"></div>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <a href="<?= site_url('user/acara/add') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> reset</a>
                                            <button type="submit" class="btn btn-success">Save <i class="fas fa-arrow-right"></i></button>
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