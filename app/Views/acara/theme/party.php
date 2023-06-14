<div class="form-group row align-items-center">
    <label class="col-md-4 text-md-right text-left">party</label>
    <div class="col-lg-4 col-md-6">
        <input name="party" type="text" value="<?= old('party') ?>" class="form-control <?= session('errors.party') ? 'is-invalid' : null ?>">
        <?php if (session('errors.party')) : ?>
            <div class="invalid-feedback">
                <?= session('errors.party') ?>
            </div>
        <?php endif ?>
    </div>
</div>
<div class="form-group row align-items-center">
    <label class="col-md-4 text-md-right text-left">pembuat party</label>
    <div class="col-lg-4 col-md-6">
        <input name="pembuat_party" type="text" value="<?= old('pembuat_party') ?>" class="form-control <?= session('errors.pembuat_party') ? 'is-invalid' : null ?>">
        <?php if (session('errors.pembuat_party')) : ?>
            <div class="invalid-feedback">
                <?= session('errors.pembuat_party') ?>
            </div>
        <?php endif ?>
    </div>
</div>
