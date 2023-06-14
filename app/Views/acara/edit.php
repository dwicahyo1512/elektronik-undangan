<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('user/acara'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>edit Acara</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="<?= site_url('user/acara/' . $acara->id_acara) ?>" method="post" autocomplete="off" novalidate="">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="PUT">
                                <div class="card-header">
                                    <h4> Edit Acara</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name Acara</label>
                                        <input name="nama_acara" value="<?= old('nama_acara', $acara->nama_acara) ?>" type="text" class="form-control <?= session('errors.nama_acara') ? 'is-invalid' : null ?>">
                                        <?php if (session('errors.nama_acara')) : ?>
                                            <div class="invalid-feedback">
                                                <?= session('errors.nama_acara') ?>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input name="date_acara" value="<?= old('date_acara', $acara->date_acara) ?>" type="date" class="form-control <?= session('errors.date_acara') ? 'is-invalid' : null ?>">
                                        <?php if (session('errors.date_acara')) : ?>
                                            <div class="invalid-feedback">
                                                <?= session('errors.date_acara') ?>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                    <div class="form-group">
                                        <label>info</label>
                                        <textarea name="info_acara" class="form-control"><?= $acara->info_acara; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Pilih Jenis Acara <i>(pilih kalau ingin mengganti jenis acara)</i> </label>
                                        <div class="selectgroup selectgroup-pills">
                                            <label class="selectgroup-item">
                                                <input type="radio" name="icon-input" value="nikah" class="selectgroup-input" <?= (old('jenis_acara', $acara->jenis_acara) === 'nikah') ? 'checked' : '' ?>>
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-sun"></i> Nikah</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="icon-input" value="party" class="selectgroup-input" <?= (old('jenis_acara', $acara->jenis_acara) === 'party') ? 'checked' : '' ?>>
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-moon"></i> Party</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio" name="icon-input" value="test" class="selectgroup-input" <?= (old('jenis_acara', $acara->jenis_acara) === 'test') ? 'checked' : '' ?>>
                                                <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-cloud-rain"></i> test</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Include other content -->
                                    <div class="partial-container" id="partial-container">
                                        <!-- Initial content based on default selected value -->
                                        <?php if ($acara->jenis_acara === 'nikah') : ?>
                                            <?= $this->include('acara/themeEdit/nikah.php'); ?>
                                        <?php elseif ($acara->jenis_acara === 'party') : ?>
                                            <?= $this->include('acara/themeEdit/party.php'); ?>
                                        <?php elseif ($acara->jenis_acara === 'test') : ?>
                                            <?= $this->include('acara/themeEdit/test.php'); ?>
                                        <?php endif; ?>
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
        </div>
    </section>
</div>
<script>
    // Menggunakan JavaScript untuk menangkap perubahan nilai select group
    document.querySelectorAll('input[name="icon-input"]').forEach(function(input) {
        input.addEventListener('change', function() {
            // Mendapatkan nilai terpilih
            var selectedValue = this.value;

            // Menghapus konten sebelumnya
            document.getElementById('partial-container').innerHTML = '';

            // Menampilkan partial view yang sesuai berdasarkan nilai terpilih
            if (selectedValue === 'nikah') {
                document.getElementById('partial-container').innerHTML = `<?= $this->include('acara/themeEdit/nikah.php'); ?>`;
            } else if (selectedValue === 'party') {
                document.getElementById('partial-container').innerHTML = `<?= $this->include('acara/themeEdit/party.php'); ?>`;
            } else if (selectedValue === 'test') {
                document.getElementById('partial-container').innerHTML = `<?= $this->include('acara/themeEdit/test.php'); ?>`;
            }
        });
    });
</script>

<?= $this->endSection() ?>