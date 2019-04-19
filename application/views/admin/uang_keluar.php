<a href="<?= base_url('uang_keluar/tambah'); ?>" class="btn btn-primary mb-3">Tambah</a>
<?= $this->session->flashdata('message'); ?>

<div class="card mb-3">
    <div class="card-header">
        Uang keluar</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Total</th>
                        <th>Kebutuhan</th>
                        <th>Arsip</th>
                        <th>Tanggal keluar</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($uang_keluar as $uk) :
                        ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $uk['total']; ?></td>
                            <td><?= $uk['kebutuhan']; ?></td>
                            <td><?= $uk['arsip']; ?></td>
                            <td><?= $uk['tanggal_keluar']; ?></td>
                            <td><?= $uk['keterangan']; ?></td>
                            <td>
                                <a href="<?= base_url('uang_keluar/ubah/' . $uk['id']); ?>"><i class="fas fa-fw fa-edit"></i></a>
                                <a href="<?= base_url('uang_keluar/hapus/' . $uk['id']); ?>" onclick="return confirm('Hapus ?');"><i class="fas fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated <?= Date('Y - m - d'); ?></div>
</div>