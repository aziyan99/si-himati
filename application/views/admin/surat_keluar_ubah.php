<div class="card">
    <div class="card-header">
        <h3 class="card-text">Ubah Surat Keluar</h3>
        <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
    </div>
    <div class="card-body">
        <form action="<?= base_url('surat_keluar/ubah'); ?>" method="post">
            <input type="hidden" name="id" id="id"  value="<?= $surat_keluar['id']; ?>">
            <div class="form-group">
                <input type="text" name="no_surat" id="no_surat" class="form-control" placeholder="No surat" value="<?= $surat_keluar['no_surat']; ?>">
            </div>
            <div class="form-group">
                <input type="text" name="tujuan" id="tujuan" class="form-control" placeholder="Tujuan" value="<?= $surat_keluar['tujuan']; ?>">
            </div>
            <div class="form-group">
                <input type="text" name="perihal" id="perihal" class="form-control" placeholder="Perihal" value="<?= $surat_keluar['perihal']; ?>">
            </div>
            <div class="form-group">
                <input type="file" name="arsip" id="arsip" class="form-control-file" placeholder="arsip" value="<?= set_value('arsip'); ?>">
            </div>
            <div class="form-group">
                <input type="date" name="tanggal_dikirim" id="tanggal_dikirim" class="form-control" placeholder="Tanggal dikirim" value="<?= $surat_keluar['tanggal_dikirim']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>