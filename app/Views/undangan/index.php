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
                            <a href="<?= base_url('user/undangan/new'); ?>" class="btn btn-primary btn-icon icon-left" style="border-radius: 5px;">
                                <i class="fas fa-plus"> Buat Tag baru</i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<?= $this->endSection(); ?>