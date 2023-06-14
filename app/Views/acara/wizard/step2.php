<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('superadmin/kategori'); ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Buat Acara</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Buat Acara</h4>
                        </div>
                        <!-- isi 2 -->
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col-12 col-lg-8 offset-lg-2">
                                    <div class="wizard-steps">
                                        <div class="wizard-step">
                                            <div class="wizard-step-icon">
                                                <i class="	fas fa-address-book"></i>
                                            </div>
                                            <div class="wizard-step-label">
                                                Isi Biodata Acara
                                            </div>
                                        </div>
                                        <div class="wizard-step wizard-step-active">
                                            <div class="wizard-step-icon">
                                                <i class="fas fa-box-open"></i>
                                            </div>
                                            <div class="wizard-step-label">
                                                thema Acara
                                            </div>
                                        </div>
                                        <div class="wizard-step">
                                            <div class="wizard-step-icon">
                                                <i class="fas fa-server"></i>
                                            </div>
                                            <div class="wizard-step-label">
                                                Server Information
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="wizard-content mt-2" action="step3" method="post" autocomplete="off" novalidate="">
                                <?= csrf_field() ?>
                                <div class="form-group row align-items-center">
                                    <label class="col-md-4 text-md-right text-left">Icon input</label>
                                    <div class="selectgroup selectgroup-pills col-lg-4 col-md-6">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="nikah" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-sun"></i> Nikah</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="party" class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-moon"></i> Party</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="icon-input" value="test" class="selectgroup-input">
                                            <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-cloud-rain"></i> test</span>
                                        </label>
                                    </div>
                                </div>
                                <!-- Include other content -->
                                <div class="partial-container">
                                    <!-- Initial content based on default selected value -->
                                    <?= $this->include('acara/theme/nikah.php'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4"></div>
                                    <div class="col-lg-4 col-md-6 text-right">
                                        <button onclick="" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</button>
                                        <button type="submit" class="btn btn-success">Submit <i class="fas fa-arrow-right"></i></button>
                                    </div>
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
            document.querySelector('.partial-container').innerHTML = '';

            // Menampilkan partial view yang sesuai berdasarkan nilai terpilih
            if (selectedValue === 'nikah') {
                document.querySelector('.partial-container').innerHTML = `<?= $this->include('acara/theme/nikah.php'); ?>`;
            } else if (selectedValue === 'party') {
                document.querySelector('.partial-container').innerHTML = `<?= $this->include('acara/theme/party.php'); ?>`;
            } else if (selectedValue === 'test') {
                document.querySelector('.partial-container').innerHTML = `<?= $this->include('acara/theme/test.php'); ?>`;
            }
        });
    });
</script>

<?= $this->endSection() ?>