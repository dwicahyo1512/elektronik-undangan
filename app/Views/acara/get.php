<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Daftar Acara</h1>
        </div>
        <div class="section-body">
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">X</button>
                        <b>Success !</b>
                        <?= session()->getFlashdata('success') ?>
                    </div>
                </div>
            <?php endif ?>
            <?php if (session()->getFlashdata('errors')) : ?>
                <div class="alert alert-danger alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">X</button>
                        <b>Error !</b>
                        <?= session()->getFlashdata('errors') ?>
                    </div>
                </div>
            <?php endif ?>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url('superadmin/acara/add'); ?>" class="btn btn-primary btn-icon icon-left" style="border-radius: 5px;">
                                <i class="fas fa-plus"> Buat Acara</i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Created At</th>
                                            <th>Info</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($acara as $key => $value) : ?>
                                            <tr>
                                                <td><?= $key + 1; ?></td>
                                                <td><?= $value->nama_acara; ?></td>
                                                <td><?= date('d/m/Y', strtotime($value->date_acara)) ?></td>
                                                <td><?= $value->info_acara; ?></td>
                                                <td>
                                                    <a href="<?= site_url('acara/edit/' . $value->id_acara) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                    <form action="<?= site_url('acara/' . $value->id_acara) ?>" method="post" class="d-inline" id="del-<?= $value->id_acara ?>">
                                                        <?= csrf_field() ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button href="" class="btn btn-danger btn-sm" data-confirm="Hapus Data? | Apakah anda yakin" data-confirm-yes="submitDel(<?= $value->id_acara ?>)"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>