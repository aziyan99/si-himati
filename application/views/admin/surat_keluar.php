<a href="<?= base_url('surat_keluar/tambah'); ?>" class="btn btn-primary mb-3">Tambah</a>
<?= $this->session->flashdata('message'); ?>
<div class="card mb-3">
    <div class="card-header">
        Surat Keluar</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No surat</th>
                        <th>Tujuan</th>
                        <th>Perihal</th>
                        <th>Arsip</th>
                        <th>Tanggal dikirim</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($surat_keluar as $sk) :
                        ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $sk['no_surat']; ?></td>
                            <td><?= $sk['tujuan']; ?></td>
                            <td><?= $sk['perihal']; ?></td>
                            <td><?= $sk['arsip']; ?></td>
                            <td><?= $sk['tanggal_dikirim']; ?></td>
                            <td>
                                <a href="<?= base_url('surat_keluar/ubah/' . $sk['id']); ?>" ><i class="fas fa-fw fa-edit"></i></a>
                                <a href="<?= base_url('surat_keluar/hapus/' . $sk['id']); ?>" onclick="return confirm('Hapus ?');"><i class="fas fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated <?= date('D'); ?></div>
</div>