<div class="form-group row align-items-center">
    <label class="col-md-4 text-md-right text-left">Name test</label>
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