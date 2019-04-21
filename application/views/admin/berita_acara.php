<a href="<?= base_url('berita_acara/tambah'); ?>" class="btn btn-primary mb-3">Tambah</a>
<?= $this->session->flashdata('message'); ?>

<div class="card mb-3">
    <div class="card-header">
        Berita acara</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama acara/kegiatan</th>
                        <th>Arsip</th>
                        <th>Tanggal acara/kegiatan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    foreach ($berita_acara as $ba) :
                        ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $ba['nama_acara']; ?></td>
                            <td><?= $ba['arsip']; ?></td>
                            <td><?= $ba['tanggal_acara']; ?></td>
                            <td><?= $ba['keterangan'] ?></td>
                            <td>
                                <a href="<?= base_url('berita_acara/ubah/' . $ba['id']); ?>"><i class="fas fa-fw fa-edit"></i></a>
                                <a href="<?= base_url('berita_acara/hapus/' . $ba['id']); ?>" onclick="return confirm('Hapus ?');"><i class="fas fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated <?= date('Y - m - d'); ?></div>
</div>