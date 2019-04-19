<a href="<?= base_url('uang_masuk/tambah'); ?>" class="btn btn-primary mb-3">Tambah</a>
<?= $this->session->flashdata('message'); ?>

<div class="card mb-3">
    <div class="card-header">
        Uang masuk</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Total</th>
                        <th>Tanggal masuk</th>
                        <th>Arsip</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($uang_masuk as $um) :
                        ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $um['total']; ?></td>
                            <td><?= $um['tanggal_masuk']; ?></td>
                            <td><?= $um['arsip']; ?></td>
                            <td><?= $um['keterangan']; ?></td>
                            <td>
                                <a href="<?= base_url('uang_masuk/ubah/' . $um['id']); ?>"><i class="fas fa-fw fa-edit"></i></a>
                                <a href="<?= base_url('uang_masuk/hapus/' . $um['id']); ?>" onclick="return confirm('Hapus ?');"><i class="fas fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated <?= date('Y - m - d'); ?></div>
</div>