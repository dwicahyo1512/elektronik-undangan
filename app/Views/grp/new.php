<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('user/grps'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
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
                <div class="col-lg-8">
                    <div class="card">
                        <form action="<?= site_url('user/grps') ?>" method="post" autocomplete="off" novalidate="">
                            <?= csrf_field() ?>
                            <div class="card-header">
                                <h4> buat group</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name Group</label>
                                    <input name="nama_grp" type="text" value="<?= old('nama_grp') ?>" class="form-control <?= (session('error')) ? 'is-invalid' : null ?>" autofocus>
                                    <?php if (session('error')) : ?>
                                        <div class="invalid-feedback">
                                            <?php foreach (session('error') as $error) : ?>
                                                <li><?= esc($error) ?></li>
                                            <?php endforeach ?>
                                        </div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group mb-0">
                                    <label>info</label>
                                    <textarea name="info_grp" class="form-control" style="height: 50px;"></textarea>
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
<?= $this->endSection() ?>