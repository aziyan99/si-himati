<div class="card">
    <div class="card-header">
        <h3 class="card-text">Tambah Surat Keluar</h3>
        <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
    </div>
    <div class="card-body">
        <form action="<?= base_url('surat_keluar/tambah'); ?>" method="post">
            <div class="form-group">
                <input type="text" name="no_surat" id="no_surat" class="form-control" placeholder="No surat" value="<?= set_value('no_surat'); ?>">
            </div>
            <div class="form-group">
                <input type="text" name="tujuan" id="tujuan" class="form-control" placeholder="Tujuan" value="<?= set_value('tujuan'); ?>">
            </div>
            <div class="form-group">
                <input type="text" name="perihal" id="perihal" class="form-control" placeholder="Perihal" value="<?= set_value('perihal'); ?>">
            </div>
            <div class="form-group">
                <input type="file" name="arsip" id="arsip" class="form-control-file" placeholder="arsip" value="<?= set_value('arsip'); ?>">
            </div>
            <div class="form-group">
                <input type="date" name="tanggal_dikirim" id="tanggal_dikirim" class="form-control" placeholder="Tanggal dikirim" value="<?= set_value('tanggal_dikirim'); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>