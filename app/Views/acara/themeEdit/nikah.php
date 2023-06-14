<div class="form-group">
    <label>Name pria</label>
    <div>
        <input name="nama_pria" type="text" value="<?= old('nama_pria', $acara->nama_pria) ?>" class="form-control <?= session('errors.nama_pria') ? 'is-invalid' : null ?>">
        <?php if (session('errors.nama_pria')) : ?>
            <div class="invalid-feedback">
                <?= session('errors.nama_pria') ?>
            </div>
        <?php endif ?>
    </div>
</div>
<div class="form-group">
    <label>Name wanita</label>
    <div>
        <input name="nama_wanita" type="text" value="<?= old('nama_wanita',$acara->nama_wanita) ?>" class="form-control <?= session('errors.nama_wanita') ? 'is-invalid' : null ?>">
        <?php if (session('errors.nama_wanita')) : ?>
            <div class="invalid-feedback">
                <?= session('errors.nama_wanita') ?>
            </div>
        <?php endif ?>
    </div>
</div>
