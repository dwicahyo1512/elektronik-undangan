<div class="form-group row align-items-center">
    <label class="col-md-4 text-md-right text-left">Name pria</label>
    <div class="col-lg-4 col-md-6">
        <input name="nama_pria" type="text" value="<?= old('nama_pria') ?>" class="form-control <?= session('errors.nama_pria') ? 'is-invalid' : null ?>">
        <?php if (session('errors.nama_pria')) : ?>
            <div class="invalid-feedback">
                <?= session('errors.nama_pria') ?>
            </div>
        <?php endif ?>
    </div>
</div>
<div class="form-group row align-items-center">
    <label class="col-md-4 text-md-right text-left">Name wanita</label>
    <div class="col-lg-4 col-md-6">
        <input name="nama_wanita" type="text" value="<?= old('nama_wanita') ?>" class="form-control <?= session('errors.nama_wanita') ? 'is-invalid' : null ?>">
        <?php if (session('errors.nama_wanita')) : ?>
            <div class="invalid-feedback">
                <?= session('errors.nama_wanita') ?>
            </div>
        <?php endif ?>
    </div>
</div>
