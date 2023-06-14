<div>
    <label>test aja</label>
    <div>
        <input name="test_aja" type="text" value="<?= old('test_aja') ?>" class="form-control <?= session('errors.test_aja') ? 'is-invalid' : null ?>">
        <?php if (session('errors.test_aja')) : ?>
            <div class="invalid-feedback">
                <?= session('errors.test_aja') ?>
            </div>
        <?php endif ?>
    </div>
</div>
<div>
    <label>test</label>
    <div>
        <input name="test" type="text" value="<?= old('test') ?>" class="form-control <?= session('errors.test') ? 'is-invalid' : null ?>">
        <?php if (session('errors.test')) : ?>
            <div class="invalid-feedback">
                <?= session('errors.test') ?>
            </div>
        <?php endif ?>
    </div>
</div>
