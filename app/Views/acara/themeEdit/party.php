<div class="form-group">
    <label>party</label>
    <div>
        <input name="party" type="text" value="<?= old('party',$acara->party) ?>" class="form-control <?= session('errors.party') ? 'is-invalid' : null ?>">
        <?php if (session('errors.party')) : ?>
            <div class="invalid-feedback">
                <?= session('errors.party') ?>
            </div>
        <?php endif ?>
    </div>
</div>
<div class="form-group">
    <label>pembuat party</label>
    <div>
        <input name="pembuat_party" type="text" value="<?= old('pembuat_party',$acara->pembuat_party) ?>" class="form-control <?= session('errors.pembuat_party') ? 'is-invalid' : null ?>">
        <?php if (session('errors.pembuat_party')) : ?>
            <div class="invalid-feedback">
                <?= session('errors.pembuat_party') ?>
            </div>
        <?php endif ?>
    </div>
</div>
