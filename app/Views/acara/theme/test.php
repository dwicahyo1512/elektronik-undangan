<div class="form-group row align-items-center">
    <label class="col-md-4 text-md-right text-left">test aja</label>
    <div class="col-lg-4 col-md-6">
        <input name="test_aja" type="text" value="<?= old('test_aja') ?>" class="form-control <?= session('errors.test_aja') ? 'is-invalid' : null ?>">
        <?php if (session('errors.test_aja')) : ?>
            <div class="invalid-feedback">
                <?= session('errors.test_aja') ?>
            </div>
        <?php endif ?>
    </div>
</div>
<div class="form-group row align-items-center">
    <label class="col-md-4 text-md-right text-left">test</label>
    <div class="col-lg-4 col-md-6">
        <input name="test" type="text" value="<?= old('test') ?>" class="form-control <?= session('errors.test') ? 'is-invalid' : null ?>">
        <?php if (session('errors.test')) : ?>
            <div class="invalid-feedback">
                <?= session('errors.test') ?>
            </div>
        <?php endif ?>
    </div>
</div>
