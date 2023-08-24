<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?= base_url('user/undangan') ?>" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Show Contact yang Diundang</h1>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-md" id="table-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Kontak</th>
                                        <th>Alias</th>
                                        <th>Telepon</th>
                                        <th>Email</th>
                                        <th>address</th>
                                        <th>Info</th>
                                        <th>Group</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                    $no = 1 + (10 * ($page - 1));
                                    ?>
                                    <?php foreach ($contacts as $key => $value) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $value->nama_contact; ?></td>
                                            <td><?= $value->nama_alias; ?></td>
                                            <td><?= $value->phone; ?></td>
                                            <td><?= $value->email; ?></td>
                                            <td><?= $value->address; ?></td>
                                            <td><?= $value->info_contact; ?></td>
                                            <td><?= $value->nama_grp; ?></td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>